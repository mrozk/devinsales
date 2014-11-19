if(typeof(DDeliveryIntegration) == 'undefined')
    DDeliveryIntegration = (function(){
        var typeOfWindow = '';
        var div;
        // Токен для общения с сервером
        var token = '';
        // Типи возможних форм оформления заказа
        var TYPE_WINDOW_ONE = 1;
        var TYPE_WINDOW_STEP = 2;


        function hideCover() {
            document.body.removeChild(document.getElementById('ddelivery_cover'));
            document.getElementsByTagName('body')[0].style.overflow = "";
        }

        function showPrompt() {
            var cover = document.createElement('div');
            cover.id = 'ddelivery_cover';
            cover.appendChild(div);
            document.body.appendChild(cover);
            document.getElementById('ddelivery_container').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }


        function fillFeields(data){
            $( '#client_name').val(data.userInfo.firstName);
            $( '#client_phone').val(data.userInfo.toPhone);
            //typeof(topWindow.DDeliveryIntegration) == 'undefined'
            //$( '#shipping_address_address').val(data.comment);
            if( data.type == "2" ){
                $('#shipping_address_field_' + data.house).val(data.userInfo.toHouse);
                $('#shipping_address_field_' + data.street).val(data.userInfo.toStreet);
                $('#shipping_address_field_' + data.flat).val(data.userInfo.toFlat);
                $('#shipping_address_field_' + data.corp).val(data.userInfo.toHousing);
            }
        }

        function getTypeOfOrder(){
            if(window.location.href.indexOf('delivery') != -1){
                return TYPE_WINDOW_STEP;
            }
            return TYPE_WINDOW_ONE;
        }
        function getProductString(){
            var productIdsString = '';
            if( window.ORDER.order_lines.length > 0 ){
                for( var i = 0; i < window.ORDER.order_lines.length; i++ ){
                    var item = window.ORDER.order_lines[i];
                    productIdsString += ( item.product_id + '(_)' + item.quantity + ',');
                }
            }
            return productIdsString;
        }
        function getSdkURL(){
            var items = getProductString();
            var params =  {};
            var order_form;
            var parametrs = '';
            if( getTypeOfOrder() == TYPE_WINDOW_STEP){
                params.client_name = window.ORDER.client.name;
                params.client_phone = window.ORDER.client.phone;
                //params.shipping_address = window.ORDER.shipping_address.fields_values;
            }else{
                params.client_name = $('#client_name').val();
                params.client_phone = $('#client_phone').val();
                params.shipping_address = $('#order_form').serializeArray();
            }
            params.type_of_window = typeOfWindow;
            parametrs = $.param(params);

            var url = ddelivery_insales.url + "sdk/?items=" + items + "&" + parametrs + "&" + "token=" + token;

            return url;
        }

        function openPopup(){
            if( token == '' ){
                alert('Ошибка идентификации клиента');
                return;
            }else{
                showPrompt();
                DDelivery.delivery('ddelivery_container', getSdkURL(), {}, sdkCallBack);
            }
        };

        var sdkCallBack = {
            close: function(){
                hideCover();
            },
            change: function(data) {
                var activeBtn = getActiveBtn();
                fillFeields(data);
                $( '.moto_moto').remove();

                $( '#' + activeBtn.activeBtn).after( '<div class="moto_moto" style="' + 'margin-top: 0px; color:#E98B73" >' + data.comment + '</div>' );
                CheckoutDelivery.find( activeBtn.variant_id ).setFieldsValues( [{fieldId: ddelivery_insales.field2_id, value: ddelivery_insales._id}] );
                CheckoutDelivery.find( activeBtn.variant_id ).setFieldsValues( [{fieldId: ddelivery_insales.field3_id, value: data.comment }] );
                CheckoutDelivery.find( activeBtn.variant_id ).setFieldsValues( [{fieldId: ddelivery_insales.field_id, value: data.orderId }] );
                CheckoutDelivery.find( activeBtn.variant_id ).toExternal().setPrice(data.clientPrice);

                $('.dd_last_check').val(data.orderId);
                $('#price_' + variant_id).css('display','block');
                hideCover();
                $('#shipping_address_city').attr('disabled','disabled');
                $('#shipping_address_zip').attr('disabled','disabled');

            }
        };

        function initStyle(){
            var style = document.createElement('STYLE');
            style.innerHTML = // Скрываем ненужную кнопку
                " #delivery_info_ddelivery_all a{display: none;} " +
                "#ddelivery_container { overflow:hidden;background: #eee;width: 1000px; margin: 0px auto;padding: 0px; }"+
                "#ddelivery_cover > * {-webkit-transform: translateZ(0px);}"+
                "#ddelivery_cover {zoom: 1;z-index:9999;position: fixed;bottom: 0;left: 0;top: 0;right: 0; overflow: auto;-webkit-overflow-scrolling: touch;background-color: #000; background: rgba(0, 0, 0, 0.5); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = #7F000000, endColorstr = #7F000000); "
            var body = document.getElementsByTagName('body')[0];
            body.appendChild(style);
            div = document.createElement('div');
            div.id = 'ddelivery_container';
            body.appendChild(div);
        }
        function enableDDButton(){
            $('.startDD').attr('disabled',false);
        }

        function getActiveBtn(){
            var activeBtn;
            var variant_id;
            if(  ddelivery_insales.delivery_id.length == 2  ){
                if( typeOfWindow == 'onlyMap' ){
                    variant_id = ddelivery_insales.delivery_id[0];
                    activeBtn = 'dd_start1';
                }else if( typeOfWindow == 'onlyCourier' ){
                    console.log('onlyCourier');
                    variant_id = ddelivery_insales.delivery_id[1];
                    activeBtn = 'dd_start2';
                }
            }else{
                console.log('onlyBoth');
                variant_id = ddelivery_insales.delivery_id[0];
                activeBtn = 'dd_start1';
            }
            return {
                variant_id:variant_id,
                activeBtn:activeBtn
            }
        }

        return {
            openPopup: function(){
                openPopup();
            },
            init: function(){
                initStyle();
                $(document).ready(function(){
                    $(".button" ).on('click',function(){
                        var activeBtn = 0;
                        $('input[name="order[delivery_variant_id]"]').each(function(){
                            if( $(this).attr('checked') == 'checked' ){
                                activeBtn = parseInt($(this).val());
                            }
                        });
                        if( ddelivery_insales.delivery_id.indexOf(activeBtn) != -1){
                            if( $('.dd_last_check').val() != '' ){
                                return true;
                            }else{
                                alert('Уточните выбор текущего способа доставки доставки ');
                                return false;
                            }
                        }
                    });
                    var buttonCode1 = '' +
                        '<input type=\"hidden\" class=\"dd_last_check\" value=\"\">' +
                        '<button id="dd_start1"  onclick=\"return false\" disabled class=\"startDD button\" style=\"display:block;clear:both;\" ' +
                        ' href=\"javascript:void(0);\" >Выбрать</button>';

                    var buttonCode2 =    '' +
                        '<button id="dd_start2" onclick=\"return false\" disabled class=\"startDD button\" style=\"display:block;clear:both;\" ' +
                        ' href=\"javascript:void(0);\" >Выбрать</button>';

                    $('#order_delivery_variant_id_' + ddelivery_insales.delivery_id[0]).parent().next().append(buttonCode1 );

                    if( ddelivery_insales.delivery_id.length == 2 ){
                        $('#order_delivery_variant_id_' + ddelivery_insales.delivery_id[1]).parent().next().append(buttonCode2);
                    }
                    // Спрятать плохие поля
                    $('.delivery_variants .radio_button').on('change',function(){
                        if( ddelivery_insales.delivery_id.indexOf(  parseInt( $(this).val())) != -1 ){
                            $('#shipping_address_city').attr('disabled','disabled');
                            $('#shipping_address_zip').attr('disabled','disabled');
                        }else{
                            $('#shipping_address_city').removeAttr('disabled');
                            $('#shipping_address_zip').removeAttr('disabled');
                        }
                    });
                    // Клик по кнопке
                    $('.startDD').on('click', function(){
                        var radio;
                        var th = this;
                        if(  ddelivery_insales.delivery_id.length == 2  ){
                            if( $(this).attr('id') == 'dd_start1' ){
                                th.typeOfWindow = 'onlyMap';
                                radio = ddelivery_insales.delivery_id[0];
                            }else if($(this).attr('id') == 'dd_start2'){
                                th.typeOfWindow = 'onlyCourier';
                                radio = ddelivery_insales.delivery_id[1];
                            }
                        }else{
                            radio = ddelivery_insales.delivery_id[0];
                        }
                        $('#order_delivery_variant_id_' + radio).click();
                        openPopup();
                    });


                });
            },
            updateToken: function( key_on_server ){
                token = key_on_server;
                enableDDButton();
            }
        };
})();

DDeliveryIntegration.init();


function updatePriceAndSend( key_on_server ){
    DDeliveryIntegration.updateToken( key_on_server );
}



// IE 7 not support Array.indexOf
if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function (searchElement, fromIndex) {
        if (this === undefined || this === null) {
            throw new TypeError('"this" is null or not defined');
        }

        var length = this.length >>> 0; // Hack to convert object.length to a UInt32

        fromIndex = +fromIndex || 0;

        if (Math.abs(fromIndex) === Infinity) {
            fromIndex = 0;
        }

        if (fromIndex < 0) {
            fromIndex += length;
            if (fromIndex < 0) {
                fromIndex = 0;
            }
        }

        for (; fromIndex < length; fromIndex++) {
            if (this[fromIndex] === searchElement) {
                return fromIndex;
            }
        }

        return -1;
    };
}



