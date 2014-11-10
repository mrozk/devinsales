<?php defined('SYSPATH') or die('No direct script access.');

include_once( APPPATH . 'classes/Sdk/application/bootstrap.php');
include_once( APPPATH . 'classes/Sdk/mrozk/IntegratorShop.php');

class Controller_Cabinet extends  Controller_Base{

    const TestServerSuf = 'http://insales2.ddelivery.ru/';

    public static  function _extractPost($request){
        $zabor = $request->post('zabor');
        if( empty( $zabor ) ){
            $request->post('zabor', '');
        }

        $pvz_companies = $request->post('pvz_companies');
        $cur_companies = $request->post('cur_companies');
        if( is_array( $pvz_companies ) ){
            $pvz_companies = implode( ',', $request->post('pvz_companies') );
        }else{
            $pvz_companies = '';
        }

        if( is_array( $cur_companies ) ){
            $cur_companies = implode( ',', $request->post('cur_companies') );
        }else{
            $cur_companies = '';
        }
        $request->post('pvz_companies', $pvz_companies);
        $request->post('cur_companies', $cur_companies);
        $address = $request->post('address');
        $request->post('address', json_encode($address));

        return   array( 'api' => $request->post('api'),
                        'rezhim' => $request->post('rezhim'),
                        'declared' => $request->post('declared'),
                        'width' => $request->post('width'),
                        'height' => $request->post('height'),
                        'length' => $request->post('length'),
                        'weight' => $request->post('weight'),
                        'status' => $request->post('status'),
                        'secondname' => $request->post('secondname'),
                        'firstname' => $request->post('firstname'),
                        'plan_width' => $request->post('plan_width'),
                        'plan_lenght' => $request->post('plan_lenght'),
                        'plan_height' => $request->post('plan_height'),
                        'plan_weight' => $request->post('plan_weight'),
                        'type' => $request->post('type'),
                        'pvz_companies' => $request->post('pvz_companies'),
                        'cur_companies' => $request->post('cur_companies'),
                        'from1' => $request->post('from1'),
                        'to1' => $request->post('to1'),
                        'val1' => $request->post('val1'),
                        'sum1' => $request->post('sum1'),
                        'from2' => $request->post('from2'),
                        'to2' => $request->post('to2'),
                        'val2' => $request->post('val2'),
                        'sum2' => $request->post('sum2'),
                        'from3' => $request->post('from3'),
                        'to3' => $request->post('to3'),
                        'val3' => $request->post('val3'),
                        'sum3' => $request->post('sum3'),
                        'okrugl' => $request->post('okrugl'),
                        'shag' => $request->post('shag'),
                        'zabor' => $request->post('zabor'),
                        'payment' => $request->post('payment'),
                        'address' => $request->post('address'),
                        'theme' => $request->post('theme'),
                        'form' => $request->post('form'),
                        'common_caption' => $request->post('common_caption'),
                        'self_caption' => $request->post('self_caption'),
                        'courier_caption' => $request->post('courier_caption'),
                        'common_description' => $request->post('common_description'),
                        'self_description' => $request->post('self_description'),
                        'courier_description' => $request->post('courier_description'),
                        'source_params' => $request->post('source_params'),
                        'params_width' => $request->post('params_width'),
                        'params_length' => $request->post('params_length'),
                        'params_height'  => $request->post('params_height'),
                        'status_send' => $request->post('status_send')
        );

    }
    public function action_save(){
        $session = Session::instance();
        $insalesuser = (int)$session->get('insalesuser');
        if ( !empty( $insalesuser ) ){
            $settings = self::_extractPost($this->request);
            $settings = json_encode($settings);
            //$add_url = $this->request->post('add_url');
            $query = DB::update( 'insalesusers')->set( array('settings' => $settings /*,'add_url' => $add_url */) )
                        ->where('insales_id','=', $insalesuser)->execute() ;
            MemController::clearSettingsMemcache($insalesuser);
            $settings = MemController::initSettingsMemcache($insalesuser);
            $msg = 'Успешно сохранено';
        }else{
            $msg = 'Доступ только из админпанели магазина insales';
        }
        Notice::add( Notice::SUCCESS, $msg );
        $this->redirect( Controller_Cabinet::getUrl($settings->debug) . 'cabinet/' );
    }


    public static  function getXmlField( $name ){
        return $pulet = '<field>
                          <type>Field::TextField</type>
                          <for-buyer type="boolean">false</for-buyer>
                          <office-title>' . $name . '</office-title>
                          <obligatory type="boolean">false</obligatory>
                          <title>' . $name . '</title>
                          <destiny type="integer">3</destiny>
                          <for-buyer type="boolean">true</for-buyer>
                          <show-in-checkout type="boolean">true</show-in-checkout>
                          <show-in-result type="boolean">false</show-in-result>
                        </field>';
    }

    public static  function getXmlInfoField( $name ){
        return $pulet = '<field>
                          <type>Field::TextField</type>
                          <for-buyer type="boolean">true</for-buyer>
                          <office-title>' . $name . '</office-title>
                          <obligatory type="boolean">false</obligatory>
                          <title>' . $name . '</title>
                          <destiny type="integer">3</destiny>
                          <for-buyer type="boolean">true</for-buyer>
                          <show-in-checkout type="boolean">true</show-in-checkout>
                          <show-in-result type="boolean">true</show-in-result>
                        </field>';
    }

    public static function addWayProcess( $userID ){

        $userID = (int)$userID;
        if( $userID > 0 ){
            $settings = MemController::initSettingsMemcache($userID);


            if( !empty( $settings ) ){
                $insales_api =  new InsalesApi( $settings->insalesPasswd, $settings->insalesShop );
                self::preClean( $insales_api );

                $variantsSettings = explode(',', $settings->delivery_variant_id);
                if( count( $variantsSettings ) > 0 ){
                    foreach($variantsSettings as $item){
                        $insales_api->api('DELETE', '/admin/delivery_variants/' . $item . '.json');
                    }
                }
                if( $settings->type != '4' ){
                    if( $settings->common_caption == '' ){
                        $settings->common_caption = 'DDelivery - сервис доставки';
                    }
                    if( $settings->common_description == ''  ){
                        $settings->common_description = 'Доставка товаров во все населенные пункты России + пункты самовывоза в 150 городах';
                    }
                    $payload = self::getShippingMethod( $settings->common_caption, $settings->common_description, $userID );
                    $delivery_variants = $insales_api->api('POST', '/admin/delivery_variants.xml', $payload);
                    $delivery_variants = new SimpleXMLElement($delivery_variants);
                    $delivery = $delivery_variants->id ;

                }else{

                    if( $settings->self_caption == '' ){
                        $settings->self_caption = 'DDelivery - самовывоз';
                    }
                    if( $settings->self_description == ''  ){
                        $settings->self_description = 'Доставка товаров во все населенные пункты России + пункты самовывоза в 150 городах';
                    }

                    if( $settings->courier_caption == '' ){
                        $settings->courier_caption = 'DDelivery - курьерская доставка';
                    }
                    if( $settings->courier_description == ''  ){
                        $settings->courier_description = 'Доставка товаров во все населенные пункты России + пункты самовывоза в 150 городах';
                    }

                    $payload = self::getShippingMethod( $settings->self_caption, $settings->self_description, $userID );

                    $delivery_variants = $insales_api->api('POST', '/admin/delivery_variants.xml', $payload);

                    $delivery_variants = new SimpleXMLElement( $delivery_variants );

                    $payload = self::getShippingMethod( $settings->courier_caption, $settings->self_description );

                    $delivery_variants2 = $insales_api->api('POST', '/admin/delivery_variants.xml', $payload);
                    $delivery_variants2 = new SimpleXMLElement( $delivery_variants2 );

                    $delivery = ($delivery_variants->id . ', ' . $delivery_variants2->id) ;
                }
                print_r($delivery_variants);
                // Добавляем поля для хранения id заказа ddelivery
                $field = self::isFieldExists($insales_api, 'ddelivery_id');
                if( $field === false ){
                    $payload = self::getXmlField( 'ddelivery_id' );
                    $data = $insales_api->api('POST', '/admin/fields.xml', $payload);
                    $data = new SimpleXMLElement( $data );
                }
                else{
                    $data = $field;
                }
                // Добавляем поля для хранения id ddelivery_insales
                $field = self::isFieldExists($insales_api, 'ddelivery_insales');
                if( $field === false ){
                    $payload = self::getXmlField( 'ddelivery_insales' );
                    $data2 =  $insales_api->api('POST', '/admin/fields.xml', $payload );
                    $data2 = new SimpleXMLElement( $data2 );
                }else{
                    $data2 = $field;
                }

                $field = self::isFieldExists($insales_api, 'Информация о доставке');
                if( $field === false ){
                    $payload = self::getXmlInfoField( 'Информация о доставке' );
                    $data3 =  $insales_api->api('POST', '/admin/fields.xml', $payload );
                    $data3 = new SimpleXMLElement( $data3 );
                }else{
                    $data3 = $field;
                }

                // $delivery = new SimpleXMLElement($delivery);
                // Добавляем Способ доставки
                $payload = self::getWidgetXml();
                $w = $insales_api->api('POST', '/admin/application_widgets.xml  ', $payload);
                // Добавляем JS
                $payload = self::getXmlJsToInsales( $settings->insalesuser_id, $data->id, $data2->id, $delivery, $data3->id, $settings->debug);
                // json_decode( $insales_api->api('PUT', '/admin/delivery_variants/' . $delivery->id . '.json', $payload) );
                $insales_api->api('PUT', '/admin/delivery_variants/' . $delivery_variants->id . '.xml', $payload);
                // Добавляем JS

                // Подписываемся на хук на создание заказа
                $payload = self::getXmlCreateHook( $settings->insalesuser_id );
                $insales_api->api('POST', '/admin/webhooks.xml', $payload) ;
                // Подписываемся на хук на создание заказа

                // Подписываемся на хук на обновление заказа
                $payload = self::getXmlUpdateHook( $settings->insalesuser_id );
                $insales_api->api('POST', '/admin/webhooks.xml', $payload) ;
                // Подписываемся на хук на обновление заказа
                $insales_user = ORM::factory('InsalesUser', array('id' => $settings->insalesuser_id));
                $insales_user->delivery_variant_id = $delivery;
                $insales_user->save();

                MemController::clearSettingsMemcache($userID);
                MemController::initSettingsMemcache($userID);
                // MemControllegr::getMemcacheInstance()->set('settings_' . $userID, '');
                return $delivery;
            }
        }
        return;
    }

    public static function editWays( $userID ){
        $userID = (int)$userID;
        if( $userID > 0 ){
            $settings = MemController::initSettingsMemcache($userID);
            if( !empty( $settings ) ){
                $insales_api =  new InsalesApi( $settings->insalesPasswd, $settings->insalesShop );
                self::preClean( $insales_api );

                $variantsSettings = explode(',', $settings->delivery_variant_id);
                // Добавляем поля для хранения id заказа ddelivery
                $field = self::isFieldExists($insales_api, 'ddelivery_id');
                if( $field === false ){
                    $payload = self::getXmlField( 'ddelivery_id' );
                    $data = $insales_api->api('POST', '/admin/fields.xml', $payload);
                    $data = new SimpleXMLElement( $data );
                }
                else{
                    $data = $field;
                }
                // Добавляем поля для хранения id ddelivery_insales
                $field = self::isFieldExists($insales_api, 'ddelivery_insales');
                if( $field === false ){
                    $payload = self::getXmlField( 'ddelivery_insales' );
                    $data2 =  $insales_api->api('POST', '/admin/fields.xml', $payload );
                    $data2 = new SimpleXMLElement( $data2 );
                }else{
                    $data2 = $field;
                }

                $field = self::isFieldExists($insales_api, 'Информация о доставке');
                if( $field === false ){
                    $payload = self::getXmlInfoField( 'Информация о доставке' );
                    $data3 =  $insales_api->api('POST', '/admin/fields.xml', $payload );
                    $data3 = new SimpleXMLElement( $data3 );
                }else{
                    $data3 = $field;
                }

                $payload = self::getXmlJsToInsales( $settings->insalesuser_id, $data->id, $data2->id, $settings->delivery_variant_id, $data3->id,
                                                    $settings->debug);
                $insales_api->api('PUT', '/admin/delivery_variants/' . $variantsSettings[0] . '.xml', $payload);

                // Добавляем Способ доставки
                $payload = self::getWidgetXml($settings->debug);
                $w = $insales_api->api('POST', '/admin/application_widgets.xml  ', $payload);


                // Подписываемся на хук на создание заказа
                $payload = self::getXmlCreateHook( $settings->insalesuser_id, $settings->debug );
                $insales_api->api('POST', '/admin/webhooks.xml', $payload) ;
                // Подписываемся на хук на создание заказа

                // Подписываемся на хук на обновление заказа
                $payload = self::getXmlUpdateHook( $settings->insalesuser_id, $settings->debug );
                $insales_api->api('POST', '/admin/webhooks.xml', $payload) ;

                return true;
            }
        }
    }

    public function action_addway(){
        $session = Session::instance();
        $insalesuser = (int)$session->get('insalesuser');
        $variants = self::addWayProcess($insalesuser);
        if(!empty( $variants )){
            $msg =  'Способ доставки успешно добавлен';
        }else{
            $msg =  'Ошибка добавления';
        }
        Notice::add( Notice::SUCCESS, $msg );
        $settings = MemController::initSettingsMemcache($insalesuser);
        $this->redirect(  Controller_Cabinet::getUrl( $settings->debug ) . 'cabinet/' );
    }


    public static  function isFieldExists( $insales_api, $fname ){
        $data = json_decode( $insales_api->api('GET', '/admin/fields.json') );
        if( count($data) )
        {
            foreach( $data as $item )
            {
                if( ( $item->office_title == $fname )  )
                return $item;
            }
        }
        return false;
    }


    public static  function preClean( $insales_api ){
        $data = json_decode( $insales_api->api('GET', '/admin/webhooks.json') );
        if( count($data) ){
            foreach( $data as $item ){

                if( substr_count( $item->address, 'ddelivery.ru' ) ){
                    $insales_api->api('DELETE', '/admin/webhooks/' . $item->id . '.json');
                }
            }
        }
        /*
        $xml = json_decode( $insales_api->api('GET', '/admin/application_widgets.json') );
        if( count($xml) > 0 ){
            foreach( $xml as $item ) {
                if(strpos($item->code, 'ddelivery_id') > 0) {
                    $insales_api->api('DELETE', '/admin/application_widgets/' . $item->id . '.json');
                }
            }
        }


        if( count($data) ){
            foreach( $data as $item ){
                if( substr_count( $item->address, URL::base(TRUE, FALSE) ) ){
                    $insales_api->api('DELETE', '/admin/webhooks/' . $item->id . '.json');
                }
            }
        }
        */
        $data = json_decode( $insales_api->api('GET', '/admin/application_widgets.json') );
        if( count($data) ){
            foreach( $data as $item ){
                $insales_api->api('DELETE', '/admin/application_widgets/' . $item->id . '.json');
            }
        }
    }

    public static  function getShippingMethod( $title, $description, $id = 0, $testMode = 0 ){
        return $payload = '<?xml version="1.0" encoding="UTF-8"?>
                                <delivery-variant>
                                  <title>' . $title . '</title>
                                  <position type="integer">1</position>
                                  <description>' . $description . '</description>
                                  <type>DeliveryVariant::External</type>
                                  <delivery-locations type="array"/>
                                  <javascript></javascript>
                                  <url>' . self::getUrl($testMode) . 'hello/gus/' . $id . '</url>
                                  <price type="decimal">0</price>
                                  <add-payment-gateways>true</add-payment-gateways>
                                </delivery-variant>';
    }

    public static  function getXmlUpdateHook( $insalesuser, $testMode = 0 ){
        return $payload = '<webhook>
                               <address>' . self::getUrl($testMode) . 'orders/update/?mag_id=' .
                               $insalesuser . '</address>
                               <topic>orders/update</topic>
                               <format type="integer">1</format>
                           </webhook>';
    }
    public static  function getXmlCreateHook( $insalesuser, $testMode = 0 ){
        return $payload = '<webhook>
                               <address>' . self::getUrl($testMode) . 'orders/create/?mag_id=' .
                               $insalesuser . '</address>
                               <topic>orders/create</topic>
                               <format type="integer">1</format>
                           </webhook>';
    }

    public static function getUrl( $testMode ){
        $testMode = (int)$testMode;
        if($testMode){
            return self::TestServerSuf;
        }else{
            return URL::base(TRUE, FALSE);
        }
    }

    public static  function getXmlJsToInsales( $insalesuser_id, $field_id, $field2_id, $deliveryID,
                                               $field3_id, $testMode = 0){

        $id = explode( ',', $deliveryID );

        return $payload = '<?xml version="1.0" encoding="UTF-8"?>
                            <delivery-variant>
                              <id type="integer">' . ((int)$id[0]) . '</id>
                              <url>' . self::getUrl($testMode) . 'hello/gus/' . $insalesuser_id . '</url>
                              <javascript>&lt;script type="text/javascript" src="' . self::getUrl($testMode) . 'html/js/ddelivery.js"&gt;&lt;/script&gt;
                                     &lt;script type="text/javascript"&gt;var ddelivery_insales={
                                     "delivery_id" : [ ' . $deliveryID . '],
                                     "field_id":' .  $field_id . ',
                                     "field2_id":' . $field2_id . ',"_id":' . $insalesuser_id . ',
                                     "field3_id":' . $field3_id . ',
                                     "url": "' .  self::getUrl($testMode) . '"
                                       };
                                       &lt;/script&gt;
                                    &lt;script type="text/javascript" src="' . self::getUrl($testMode) . 'html/action.js"&gt;&lt;/script&gt;
                              </javascript>
                            </delivery-variant>';
    }

    public static  function getPaymentWays( $insales_api ){
        $options = array();
        $payment_gateways = json_decode( $insales_api->api('GET', '/admin/payment_gateways.json') );

        $options[0] = 'Выберите поле';
        if( count( $payment_gateways ) )
        {
            foreach( $payment_gateways as $gateways )
            {
                $options[$gateways->id] = $gateways->title;
            }
        }
        return $options;
    }

    public function action_index(){
        $insales_id = (int)$this->request->query('insales_id');
        $shop = $this->request->query('shop');

        if( !$insales_id ){
            $session = Session::instance();
            $insalesuser = (int)$session->get('insalesuser');
        }

        if ( isset($insalesuser) && !empty( $insalesuser ) ){
            $usersettings = ORM::factory('InsalesUser', array('insales_id' => $insalesuser));
            $insales_api =  new InsalesApi($usersettings->passwd, $usersettings->shop);
            $payment = self::getPaymentWays($insales_api);
            $fields = self::getFields( $insales_api);
            $characteristics = self::getOptionFields( $insales_api );
            $addr_fields = self::getAddressFields( $insales_api );

            $this->template->set('content', View::factory('panel')->set('usersettings', $usersettings )
                           ->set('addr_fields', $addr_fields)->set('message', $this->template->system_msg)
                           ->set('payment', $payment)->set('characteristics', $characteristics)->set('fields', $fields)
                           ->set('base_url', URL::base( $this->request ))->set('add_url', $usersettings->add_url));

            }else{
                if( !empty( $insales_id ) && !empty( $shop ) ){
                    $this->_proccess_enter($insales_id, $shop);
                }else{
                    echo 'Вход осуществляется через личный кабинет insales.ru';
                    Notice::add( Notice::ERROR,'Доступ только из админпанели магазина insales' );
                }
        }
    }

    public function action_autologin(){
        $insales_token = $this->request->query('token');
        $id = $this->request->param('id');
        $session = Session::instance();
        if( isset($id) && !empty($id) ){
            $params = explode('()', $id);

            $insales_id = (int)$params[1];
            $token = $params[0];

            $insales_user = ORM::factory('InsalesUser', array('insales_id' => $insales_id));
            print_r($insales_user);
            if( $insales_user->loaded() ){
                if( $insales_token == md5( $token . $insales_user->passwd ) ){
                    $session->set('insalesuser', $insales_id);
                    $settings = MemController::initSettingsMemcache($insales_user->id);
                    $this->redirect( Controller_Cabinet::getUrl($settings->debug) . 'cabinet/' );
                }else{
                    echo 'Invalid token';
                }
            }else{
                echo 'shop no found';
            }

        }

        /*
        $session = Session::instance();
        $token = $session->get('ddelivery_token');
        $insales_id = $session->get('token_insales_id');

        $insales_user = ORM::factory('InsalesUser', array('insales_id' => $insales_id));
        $insales_id = $session->get('token_insales_id');


        $id = $this->request->param('id');
        //echo $insales_token;
        echo $id;
        exit();

        if( $insales_user->loaded() ){
            if( $insales_token == md5( $token . $insales_user->passwd ) ){

                if( $insales_user->shop != $session->get('insalesshop') ){
                    $insales_user->add_url = $insales_user->shop;
                    $insales_user->shop = $session->get('insalesshop');
                    $insales_user->save();
                }
                $session->set('insalesuser', $insales_id);
                $settings = MemController::initSettingsMemcache($insales_user->id);
                $this->redirect( Controller_Cabinet::getUrl($settings->debug) . 'cabinet/' );
            }else{
                echo 'Invalid token';
            }
        }else{
            echo 'shop no found';
        }
        */
    }

    private function _proccess_enter( $insales_id, $shop ){

        $insales_user = ORM::factory('InsalesUser', array('insales_id' => $insales_id));


        //$back_url = URL::base( $this->request ) . 'cabinet/autologin/';
        $token = md5( time() . $insales_id );
        $settings = MemController::initSettingsMemcache($insales_user->id);

        $token_url = ( $token . '()' . $insales_id );


        $back_url = self::getUrl($settings->debug) . 'cabinet/autologin/' . $token_url . '/';
        //echo $back_url;
        /*
        $session = Session::instance();
        $session->set('ddelivery_token', $token);
        $session->set('token_insales_id', $insales_id);
        $session->set('insalesshop', $shop);
        */

        $url = 'http://' . $shop . '/admin/applications/' . InsalesApi::$api_key . '/login?token=' . $token . '&login=' . $back_url;

        $this->redirect( $url );
    }

    public static  function getAddressFields( $insales_api ){
        $options = array();
        /*
        $payment_gateways = json_decode( $insales_api->api('GET', '/admin/option_names.json') );
        */
        $payment_gateways = json_decode( $insales_api->api('GET', '/admin/fields.json') );
        //print_r($payment_gateways);
        $options[0] = 'Выберите поле';
        if( count( $payment_gateways ) )
        {
            foreach( $payment_gateways as $gateways )
            {
                if($gateways->for_buyer && ($gateways->type !='Field::Phone')){
                    $options[$gateways->id] = $gateways->office_title;
                }
            }
        }

        return $options;
    }


    public static  function getOptionFields( $insales_api ){
        $options = array();
        $payment_gateways = json_decode( $insales_api->api('GET', '/admin/properties.json') );

        $options[0] = 'Выберите поле';
        if( count( $payment_gateways ) )
        {
            foreach( $payment_gateways as $gateways )
            {
                $options[$gateways->id] = $gateways->title;
            }
        }

        return $options;
    }

    public static  function getFields( $insales_api ){
        $options = array();
        /*
        $payment_gateways = json_decode( $insales_api->api('GET', '/admin/option_names.json') );
        */
        $payment_gateways = json_decode( $insales_api->api('GET', '/admin/product_fields.json') );
        //print_r($payment_gateways);
        $options[0] = 'Выберите поле';
        if( count( $payment_gateways ) )
        {
              foreach( $payment_gateways as $gateways )
              {
                  $options[$gateways->id] = $gateways->title;
              }
        }

        return $options;
    }


    public static  function getWidgetXml($testMode = 0){
        return $pulet = "<application-widget>
            <code>
              &lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
              &lt;head&gt;
                &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot;/&gt;
                &lt;style&gt;
                  table#statuses {
                    border-collapse: collapse;
                    border-right: 1px solid black;
                    border-left: 1px solid black;
                  }
                  table#statuses td, table#statuses th {
                    border: 1px solid black;
                  }
                &lt;/style&gt;
              &lt;/head&gt;
              &lt;body&gt;

                &lt;table id='statuses' style='border: 1px solid black;'&gt;

                &lt;/table&gt;

                &lt;script&gt;

                  var data = {};
                  // функция которая вызывается во внешнем js файле и устанавливает значение переменной data
                  function set_data(input_object) {
                    data = input_object;
                  }
                  var table = document.getElementById('statuses');

                  // устанавливаем номер заказа, используя id из переменной window.order_info
                  var order_number_field = document.getElementById('order_number');
                  // order_number_field.innerHTML = window.order_info.id;
                  fields = window.order_info.fields_values;
                  size = fields.length;
                  var i = 0;
                  var green_lite = 0;
                  var ddelivery_id = 0;
                  while(size != 0){
                    if( fields[size - 1].name == 'ddelivery_id' ){
                        if(fields[size - 1].value != 0){
                            green_lite = 1;
                            ddelivery_id = fields[size - 1].value;
                        }
                    }

                    size--;
                  };
                  if( green_lite != 0 ){
                            // подключаем скрипт который передаёт нам данные через JSONP
                      var script = document.createElement('script');
                      script.src = '" . self::getUrl($testMode) . "sdk/orderinfo/?order=' + ddelivery_id;
                      document.documentElement.appendChild(script);

                      // после отработки внешнего скрипта, заполняем таблицу пришедшими данными
                      script.onload = function() {
                          for (var key in data) {
                              var new_tr = document.createElement('tr');
                              new_tr.innerHTML= '&lt;td&gt;'+ key +'&lt;/td&gt;&lt;td&gt;'+ data[key] +'&lt;/td&gt;';
                          table.appendChild(new_tr);
                        }
                      }
                  }
                &lt;/script&gt;
              &lt;/body&gt;
              &lt;/html&gt;
            </code>
            <height>200</height>
            </application-widget>";
    }


}