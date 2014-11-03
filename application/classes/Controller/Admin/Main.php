<?php defined('SYSPATH') or die('No direct script access.');


use DDelivery\DDeliveryUI;
include_once( APPPATH . 'classes/Sdk/application/bootstrap.php');
include_once( APPPATH . 'classes/Sdk/mrozk/IntegratorShop.php');

class Controller_Admin_Main extends Controller_Admin_Layout{

    public function action_save(){
        $id = (int)$this->request->query('id');
        $insales_user = ORM::factory('InsalesUser', array('id' => $id));
        if($insales_user->loaded()){
            $settings = Controller_Cabinet::_extractPost($this->request);
            $settings['insalesuser_id'] = $insales_user->id;

            $settings = json_encode( $settings );

            $add_url = $this->request->post('add_url');

            $query = DB::update( 'insalesusers')->set( array('settings' => $settings,
                                                             'add_url' => $add_url) )
                ->where('id','=', $id)->execute() ;
            $memcache = MemController::getMemcacheInstance();
            if( !empty( $insales_user->shop ) ){
                $memcache->set( $insales_user->shop, $settings);
            }else{
                $memcache->set( $insales_user->add_url, $settings);
            }

            Notice::add( Notice::SUCCESS,'Успешно сохранено' );
            $this->redirect( URL::base( $this->request )  . 'admin/main/user/?id=' . $id );
        }else{
            Notice::add( Notice::ERROR, 'Ошибка сохранения' );
            $this->redirect( URL::base( $this->request ) . 'admin/main/user/?id=' . $id );
        }
    }


    public function action_addway(){
        $id = (int)$this->request->query('id');
        Controller_Cabinet::addWayProcess($id);
        /*
        $id = (int)$this->request->query('id');
        $insales_user = ORM::factory('InsalesUser', array('id' => $id));
        $settings = json_decode($insales_user->settings);
        if($insales_user->loaded()){
            $insales_api =  new InsalesApi( $insales_user->passwd, $insales_user->shop );

            Controller_Cabinet::preClean( $insales_api );

            $variantsSettings = explode(',', $insales_user->delivery_variant_id);

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

                $payload = Controller_Cabinet::getShippingMethod( $settings->common_caption, $settings->common_description );
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

                $payload = Controller_Cabinet::getShippingMethod( $settings->self_caption, $settings->self_description );
                $delivery_variants = $insales_api->api('POST', '/admin/delivery_variants.xml', $payload);

                $delivery_variants = new SimpleXMLElement( $delivery_variants );

                $payload = Controller_Cabinet::getShippingMethod( $settings->courier_caption, $settings->self_description );
                $delivery_variants2 = $insales_api->api('POST', '/admin/delivery_variants.xml', $payload);
                $delivery_variants2 = new SimpleXMLElement( $delivery_variants2 );

                $delivery = ($delivery_variants->id . ', ' . $delivery_variants2->id) ;
            }

            // Добавляем поля для хранения id заказа ddelivery
            $field = Controller_Cabinet::isFieldExists($insales_api, 'ddelivery_id');
            if( $field === false ){
                $payload = Controller_Cabinet::getXmlField( 'ddelivery_id' );
                $data = $insales_api->api('POST', '/admin/fields.xml', $payload);
                $data = new SimpleXMLElement( $data );
            }
            else{
                $data = $field;
            }
            // Добавляем поля для хранения id ddelivery_insales
            $field = Controller_Cabinet::isFieldExists($insales_api, 'ddelivery_insales');
            if( $field === false ){
                $payload = Controller_Cabinet::getXmlField( 'ddelivery_insales' );
                $data2 =  $insales_api->api('POST', '/admin/fields.xml', $payload );
                $data2 = new SimpleXMLElement( $data2 );
            }else{
                $data2 = $field;
            }


            $field = Controller_Cabinet::isFieldExists($insales_api, 'Информация о доставке');
            if( $field === false ){
                $payload = Controller_Cabinet::getXmlInfoField( 'Информация о доставке' );
                $data3 =  $insales_api->api('POST', '/admin/fields.xml', $payload );
                $data3 = new SimpleXMLElement( $data3 );
            }else{
                $data3 = $field;
            }

            // $delivery = new SimpleXMLElement($delivery);
            // Добавляем Способ доставки
            $payload =  Controller_Cabinet::getWidgetXml();
            $w = $insales_api->api('POST', '/admin/application_widgets.xml  ', $payload);
            // Добавляем JS
            $payload =  Controller_Cabinet::getXmlJsToInsales( $insales_user->id, $data->id, $data2->id, $delivery, $data3->id);
            // json_decode( $insales_api->api('PUT', '/admin/delivery_variants/' . $delivery->id . '.json', $payload) );
            $insales_api->api('PUT', '/admin/delivery_variants/' . $delivery_variants->id . '.xml', $payload);
            // Добавляем JS
            // Подписываемся на хук на создание заказа
            $payload = Controller_Cabinet::getXmlCreateHook( $insales_user->id );
            $insales_api->api('POST', '/admin/webhooks.xml', $payload) ;
            // Подписываемся на хук на создание заказа

            // Подписываемся на хук на обновление заказа
            $payload = Controller_Cabinet::getXmlUpdateHook( $insales_user->id );
            $insales_api->api('POST', '/admin/webhooks.xml', $payload) ;
            // Подписываемся на хук на обновление заказа

            $insales_user->delivery_variant_id = $delivery;
            $insales_user->save();

            Notice::add( Notice::SUCCESS,'Способ доставки успешно добавлен' );
            $this->redirect( URL::base( $this->request )  . 'admin/main/user/?id=' . $id );
        }
        */
    }


    // Главная страница
    public function action_index(){
        $query = DB::select()->from('insalesusers')->as_object()->execute();
        $this->template->set('content', View::factory('admin/dashboard')->set('insalesusers',$query));
    }


    // заказ из сервера
    public function action_orderremote(){
        $id = (int)$this->request->post('id');
        $order_id = (int)$this->request->post('order_id');
        if( $id && $order_id ){
            $insales_user = ORM::factory('InsalesUser', array('id' => $id));
            $insales_api =  new InsalesApi($insales_user->passwd, $insales_user->shop);
            echo '<pre>';
            print_r( json_decode( $insales_api->api('GET','/admin/orders/' . $order_id . '.json') ) );
            echo '</pre>';
        }
        exit();
    }
    // Инфо о заказе
    public function action_orderbyid(){
        $id = (int)$this->request->post('id');
        $order_id = (int)$this->request->post('order_id');
        if( $id && $order_id ){
            $insales_user = ORM::factory('InsalesUser', array('id' => $id));
            $settings = json_decode($insales_user->settings );
            $IntegratorShop = new IntegratorShop( $this->request, $settings );
            $ddeliveryUI = new DDeliveryUI( $IntegratorShop, true );
            echo '<pre>';
            print_r( $ddeliveryUI->initOrder($order_id) );
            echo '</pre>';
        }
        exit();
    }
    // Заказы клиента
    public function action_userorders(){
        $id = (int)$this->request->query('id');
        if( $id ) {
            $query = DB::select('shop_refnum', 'ddeliveryorder_id', 'id', 'add_field2')->from('ddelivery_orders')->
                         where('add_field1', '=', $id)->order_by('id','DESC')->as_object()->execute();
            $insales_user = ORM::factory('InsalesUser', array('id' => $id));

            $this->template->set('content', View::factory('admin/userorders')->set('orders',$query)->set('user', $insales_user));
        }else{
            echo 'bad ID';
        }
    }

    // Главная страница
    public function action_user(){
        $id = (int)$this->request->query('id');
        $usersettings = ORM::factory('InsalesUser', array('id' => $id));
        if( $usersettings->id ) {
            $insales_api = new InsalesApi($usersettings->passwd, $usersettings->shop);

            $payment = Controller_Cabinet::getPaymentWays($insales_api);
            $fields = Controller_Cabinet::getFields($insales_api);
            $characteristics = Controller_Cabinet::getOptionFields($insales_api);
            $addr_fields = Controller_Cabinet::getAddressFields($insales_api);



            $this->template->set('content', View::factory('panel')->set('id', $id)->set('usersettings', $usersettings)
                ->set('addr_fields', $addr_fields)->set('message', $this->template->system_msg)
                ->set('payment', $payment)->set('characteristics', $characteristics)->set('fields', $fields)
                ->set('base_url', URL::base($this->request))->set('add_url', $usersettings->add_url)
                ->set('is_admin', 1));
        }
    }





} // End Main