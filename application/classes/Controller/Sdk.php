<?php defined('SYSPATH') or die('No direct script access.');

use DDelivery\DDeliveryUI;

include_once( APPPATH . 'classes/Sdk/application/bootstrap.php');
include_once( APPPATH . 'classes/Sdk/mrozk/IntegratorShop.php');
include_once( APPPATH . 'classes/Sdk/mrozk/IntegratorShop2.php');

class Controller_Sdk extends Controller
{

    /*
    public function get_request_state( $name )
    {
        $session = Session::instance();
        $query = $this->request->query($name);
        if( !empty( $query ) )
        {
            $session->set( $name, $query );
            return $query;
        }
        else
        {
            return $session->get( $name );
        }
    }



    public function action_status()
    {
        $uid = (int)$this->get_request_state('insales_id');
        if( !$uid )
        {
            return;
        }
        $IntegratorShop = new IntegratorShop( $this->request, $uid );
        $ddeliveryUI = new DDeliveryUI($IntegratorShop);


        $orders = $ddeliveryUI->getUnfinishedOrders();
        $statusReport = array();
        if( count( $orders ) )
        {
            foreach ( $orders as $item)
            {
                $rep = $this->changeInsalesOrderStatus( $item, $ddeliveryUI );
                if( count( $rep ) )
                {
                    $statusReport[] = $rep;
                }
            }
        }
        return $statusReport;

    }
    public function getXmlJsToInsales( $insalesuser_id, $field_id, $field2_id)
    {
        return $payload = '<?xml version="1.0" encoding="UTF-8"?>
                            <delivery-variant>
                              <title>DDelivery</title>
                              <position type="integer">1</position>
                              <url>' . URL::base( $this->request ) . 'hello/gus/</url>
                              <description>DDelivery</description>
                              <type>DeliveryVariant::External</type>
                              <delivery-locations type="array"/>
                              <javascript>&lt;script type="text/javascript" src="' . URL::base( $this->request ) . 'html/js/ddelivery.js"&gt;&lt;/script&gt;

                                     &lt;script type="text/javascript"&gt;var ddelivery_insales={"field_id":' . $field_id . ',
                                     "field2_id":' . $field2_id . ',"_id":' . $insalesuser_id . ',
                                     "url": "' . URL::base( $this->request ) . '"
                                       };&lt;/script&gt;
                                    &lt;script type="text/javascript" src="' . URL::base( $this->request ) . 'html/action.js"&gt;&lt;/script&gt;
                              </javascript>
                              <price type="decimal">0</price>
                              <add-payment-gateways>true</add-payment-gateways>
                            </delivery-variant>';
    }
    */
    public function action_orderinfo(){
        $order = (int)$this->request->query('order');

        try{
            $IntegratorShop = new IntegratorShop2();
            $ddeliveryUI = new DDeliveryUI($IntegratorShop,true);

            $order = $ddeliveryUI->initOrder($order);

            if( $order->localId ){
                $errorMsg = '';
                try{
                    if( $order->type == \DDelivery\Sdk\DDeliverySDK::TYPE_COURIER ){
                        $ddeliveryUI->checkOrderCourierValues( $order );
                    }else{
                        $ddeliveryUI->checkOrderSelfValues( $order );
                    }
                }catch (\DDelivery\DDeliveryException $e){
                    //$errorMsg = $e->getMessage(); $errorMsg .= $ddeliveryUI->formatPhone($order->toPhone);
                    $errorMsg = $e->getMessage();
                }
                $fullAddress = '';
                if( $order->addField1 == 22 ){
                    $fullAddress = 'Адрес доставки :' . $order->getFullAddress();
                }
                //
                $answer = (($order->ddeliveryID == 0)?'Заявка на DDelivery не отправлена':'Номер заявки на DDelivery - ' . $order->ddeliveryID );
                echo "set_data({'" . (($errorMsg == '')?'':'<span style="color: #ff0000">Ошибка ввода информациии ' . $errorMsg . '</span> <br /> ') . ' ' . "ID заказа -" . $order->shopRefnum . "':'" . $answer . '<br>' . $fullAddress . "'});";
            }
        }catch (\DDeliveryException $e){
            $ddeliveryUI->logMessage($e);
        }
    }


    public function setInsalesOrderStatus($cmsOrderID, $status, $clientID){
        $insales_user = ORM::factory('InsalesUser', array('id' => $clientID));

        if ( $insales_user->loaded() )
        {

            $insales_api =  new InsalesApi( $insales_user->passwd, $insales_user->shop );

            $pulet = '<order>
                            <id type="integer">' . $cmsOrderID . '</id>
                            <fulfillment-status>' . $status . '</fulfillment-status>
                      </order>';
            $result = json_decode( $insales_api->api('PUT','/admin/orders/' . $cmsOrderID . '.json', $pulet) );
            return $result->id;
        }
    }

    public function changeInsalesOrderStatus( $order, $ui ){
        if( $order )
        {
            if( $order->ddeliveryID == 0 )
            {
                return array();
            }
            $ddStatus = $ui->getDDOrderStatus($order->ddeliveryID);

            if( $ddStatus == 0 )
            {
                return array();
            }
            $order->ddStatus = $ddStatus;
            $order->localStatus = $this->getLocalStatusByDD( $order->ddStatus );
            $ui->saveFullOrder($order);
            $this->setInsalesOrderStatus($order->shopRefnum, $order->localStatus, $order->insalesuser_id);
            return array('cms_order_id' => $order->shopRefnum, 'ddStatus' => $order->ddStatus,
                'localStatus' => $order->localStatus );
        }
        else
        {
            return array();
        }
    }
    public function action_settings(){
        $client = (int)$this->request->query('client');
        $query = DB::select( 'id', 'width', 'height', 'length', 'weight')->from('usersettings')->
                      where( 'insalesuser_id', '=', $client )->as_object()->execute();

        echo 'inSettings(';
        if( count($query) ){
            echo json_encode( array('result' => 'success', 'request' => $query[0]) );
        }else{
            echo json_encode( array('result' => 'error') );
        }
        echo ');';
    }

    public function action_putcart(){
        header('Content-Type: text/javascript; charset=UTF-8');
        $token = $this->request->post('token');
        $cart = $this->request->query('data');
        $memcache = new Memcache;
        $memcache->connect('localhost', 11211) or die ("Could not connect to Memcache");
        $has_token = $memcache->get( 'card_' . $token );
        if($has_token){
            $memcache->set( 'card_' . $token, $cart );
        }
        echo '{}';
        exit();
    }


    public function getOptionValue( $option_list, $needle ){
        if( count($option_list) )
        {
            foreach( $option_list as $item )
            {
                if( $needle == $item->product_field_id  )
                {
                    return $item->value;
                }
            }
        }
        return null;

    }

    public function getCaracteristicValue( $option_list, $needle ){
        if( count($option_list) )
        {
            foreach( $option_list as $item )
            {
                if( $needle == $item->property_id  )
                {
                    return $item->title;
                }
            }
        }
        return null;

    }

    // Нулячие значения заменяем дефолтными
    public function getDefault( $value, $default )
    {
        return ((empty($value))?$default:$value);
    }

    public function getItemsFromInsales( $url, $ids, $settings ){
        $idsArray = array();
        $quantArray = array();
        $skuArray = array();
        $result_products = array();

        $ids = explode( ',', $ids );

        if( count( $ids ) ){
            foreach( $ids as $oneItem ){
                if( !empty($oneItem) ){
                    $tempStr = explode('(_)', $oneItem);
                    $idsArray[] = (int)$tempStr[0];
                    $quantArray[$tempStr[0]] = (int)$tempStr[1];

                }
            }

            if( count( $idsArray) ){
                $insales_user = ORM::factory('InsalesUser', array('id' =>$settings->insalesuser_id));
                $insales_api =  new InsalesApi( $insales_user->passwd, $insales_user->shop );
                for( $i = 0; $i < count( $idsArray ); $i++ ){
                    $item = array();
                    $product = json_decode( $insales_api->api('GET', '/admin/products/' . $idsArray[$i] . '.json') );
                    if( $settings->source_params != '1' ){
                        $item['width'] = $this->getOptionValue($product->product_field_values, $settings->width );
                        $item['height'] = $this->getOptionValue($product->product_field_values,
                            $settings->height);
                        $item['length'] = $this->getOptionValue($product->product_field_values,
                            $settings->length);
                    }else{
                        $item['width'] = $this->getCaracteristicValue($product->characteristics, $settings->params_width );
                        $item['height'] = $this->getCaracteristicValue($product->characteristics, $settings->params_height);
                        $item['length'] = $this->getCaracteristicValue($product->characteristics, $settings->params_length);
                    }



                    $item['weight'] = $product->variants[0]->weight;

                    $item['width'] =  (int) $this->getDefault($item['width'], $settings->plan_width);
                    $item['height'] = (int) $this->getDefault($item['height'], $settings->plan_height);
                    $item['length'] = (int) $this->getDefault($item['length'], $settings->plan_lenght);
                    $item['weight'] = (float) $this->getDefault($item['weight'], $settings->plan_weight);

                    if( !$item['width'] )
                        $item['width'] = $settings->plan_width;
                    if( !$item['height'] )
                        $item['height'] = $settings->plan_height;
                    if( !$item['length'] )
                        $item['length'] = $settings->plan_lenght;
                    if( !$item['weight'] )
                        $item['weight'] = $settings->plan_weight;

                    $item['id'] = $product->id;
                    $item['title'] = $product->title;
                    $item['price'] = $product->variants[0]->price;
                    $item['quantity'] = $quantArray[$item['id']];
                    $item['sku'] = $product->variants[0]->sku;
                    $result_products[] = $item;
                }
            }
        }
        return $result_products;
    }
    public function action_index(){
        $items = $this->request->query('items');
        $k = $this->request->query('token'); //$_GET['token'] ;
        $this->request->query('token');
        $card = 'card_' .$k;
        $instance = MemController::getMemcacheInstance();
        $hasits_token = $instance->get($card);
        if(!empty($hasits_token)){
            $info = json_decode( $hasits_token, true );
            $settingsToIntegrator = MemController::initSettingsMemcache($info['id']);
            $url = parse_url($_SERVER['HTTP_REFERER']);
             if( isset($items) && !empty( $items ) ){
                 $info['cart'] = $this->getItemsFromInsales($url['scheme'] . '://' . $url['host'], $items, $settingsToIntegrator);
                 MemController::getMemcacheInstance()->set( $card, json_encode( $info ), 0, 1200  );
             }
             try{
                 $IntegratorShop = new IntegratorShop( $this->request, $settingsToIntegrator, $info );
                 //echo $IntegratorShop->getApiKey();
                 $ddeliveryUI = new DDeliveryUI( $IntegratorShop );
                 $order = $ddeliveryUI->getOrder();
                 $order->addField1 = $settingsToIntegrator->insalesuser_id;
                 $ddeliveryUI->render(isset($_REQUEST) ? $_REQUEST : array());
             }
             catch( \DDelivery\DDeliveryException $e ){
                 echo $e->getMessage();
                 $ddeliveryUI->logMessage($e);
             }
         }else{
             echo 'Перезагрузите страницу браузера для продолжения';
         }
    }
}