<?php defined('SYSPATH') or die('No direct script access.');
use DDelivery\DDeliveryUI;

include_once( APPPATH . 'classes/Sdk/application/bootstrap.php');
include_once( APPPATH . 'classes/Sdk/mrozk/IntegratorShop.php');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        echo '2';
        Notice::add( Notice::ERROR,'Доступ только из админпанели магазина insales' );
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
    public function action_test(){
        error_reporting(E_ALL);

        header('Content-Type: text/html; charset=utf-8');

        $insales_user = ORM::factory('InsalesUser', array('id' =>70));
        $settings = json_decode($insales_user->settings );

        //echo $settings->api;
        try{

            //$settings->rezhim = '1';
            $IntegratorShop = new IntegratorShop( $this->request, $settings );
            $ddeliveryUI = new DDeliveryUI( $IntegratorShop,true );
            //echo $IntegratorShop->getApiKey();
        echo 'xx';
            $order = $ddeliveryUI->initOrder(3376);
            //print_r($order);
            //echo $IntegratorShop->isTestMode();
            //print_r($ddeliveryUI->checkOrderSelfValues($order));
            ///echo $ddeliveryUI->createSelfOrder($order);
            echo '<pre>';
            print_r($order);
            echo '</pre>';

            //echo $order->toPhone;
            // $ddeliveryUI->createSelfOrder($order);
        }catch (\DDelivery\DDeliveryException $e){
            echo $e->getMessage();
        }


        /*
        $insales_user = ORM::factory('InsalesUser', array('id' =>22));
        $insales_api =  new InsalesApi( $insales_user->passwd, $insales_user->shop );


        //$items = json_decode( $insales_api->api('GET', '/admin/products/29303486.json') );
        //print_r($items->product_field_values);
        ///print_r($items->characteristics);

        $settings = json_decode($insales_user->settings );

        $idsArray = array();
        $quantArray = array();
        $skuArray = array();
        $result_products = array();


        $idsArray = array(29303486);
        if( count( $idsArray) ){
            $insales_user = ORM::factory('InsalesUser', array('id' =>22));
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
        print_r($result_products);
        */
    }
} // End Welcome
