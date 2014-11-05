<?php defined('SYSPATH') or die('No direct script access.');


use DDelivery\DDeliveryUI;
include_once( APPPATH . 'classes/Sdk/application/bootstrap.php');
include_once( APPPATH . 'classes/Sdk/mrozk/IntegratorShop.php');

class Controller_Admin_Main extends Controller_Admin_Layout{

    public function action_save(){
        $id = (int)$this->request->query('id');

        if( !empty($id) ){

            $settings = Controller_Cabinet::_extractPost($this->request);
            $settings['debug'] = (int)$this->request->post('debug');
            $settings = json_encode( $settings );

            $query = DB::update('insalesusers')->set( array('settings' => $settings /*, 'add_url' => $add_url*/) )
                        ->where('id','=', $id)->execute();
            MemController::clearSettingsMemcache($id);
            MemController::initSettingsMemcache($id);
            $msg = 'Успешно сохранено';
        }else{
            $msg = 'Ошибка сохранения';
        }
        Notice::add( Notice::SUCCESS, $msg );
        $this->redirect( URL::base( $this->request )  . 'admin/main/user/?id=' . $id );
    }


    public function action_addway(){
        $id = $this->request->query('id');

        $variants = Controller_Cabinet::addWayProcess($id);
        if( !empty($variants) ){
            $msg =  'Способ доставки успешно добавлен';
        }else{
            $msg =  'Ошибка добавления';
        }
        Notice::add( Notice::SUCCESS, $msg );
        $this->redirect( URL::base( $this->request )  . 'admin/main/user/?id=' . $id );

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
    public function action_addtest(){
        $id = (int)$this->request->query('id');

        $edit = Controller_Cabinet::editWays($id);
        if( $edit ){
            $msg = 'Успешно изменен режим работы';
        }else{
            $msg = 'Ошибка изменения режима работы';
        }
        Notice::add( Notice::SUCCESS, $msg );
        $this->redirect( URL::base( $this->request )  . 'admin/main/user/?id=' . $id );
        /*
        $id = (int)$this->request->query('id');
        if( $id ) {
            $query = DB::select('shop_refnum', 'ddeliveryorder_id', 'id', 'add_field2')->from('ddelivery_orders')->
            where('add_field1', '=', $id)->order_by('id','DESC')->as_object()->execute();
            $insales_user = ORM::factory('InsalesUser', array('id' => $id));

            $this->template->set('content', View::factory('admin/userorders')->set('orders',$query)->set('user', $insales_user));
        }else{
            echo 'bad ID';
        }
        */
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