<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Hello extends Controller
{

    public function initSessionToken(){
        $token = md5( microtime() . mt_rand(1,20) );
        $session = Session::instance();
        $session->set( 'card_' . $token, 'init' );
        return $token;
    }
    public function action_gus()
    {
        header('Content-Type: text/javascript; charset=UTF-8');
        $id = (int)$this->request->param('id');
        $settings = MemController::initSettingsMemcache( $id );

        $result = 'jQuery(".loader").css("display","none");';
        if( !empty($settings) ){
            $token = md5( microtime() . mt_rand(1,20) ) ;
            $memcache = MemController::getMemcacheInstance();
            /*
            $price = $_REQUEST['price'];
            $info = array( "host" => $parse['host'], 'scheme' => $parse['scheme'],
                "price" => $price );
            */
            $info = array( 'id' => $id );
            $memcache->set( 'card_' . $token, json_encode( $info ), 0, 1200 );
            $result .= 'updatePriceAndSend("' . $token . '");';
        }else{
           $result .= 'updatePriceAndSend(null);';
        }
        //echo $this->request->query('callback');
        //$result .= 'enableDDButton();';
        //$this->redirect( URL::base( $this->request ) . 'html/elem.js' );

        //echo $id;
        //header('Content-Type: text/javascript; charset=UTF-8');
        //$result = 'jQuery(".loader").css("display","none");';

        //if( isset($_SERVER["HTTP_REFERER"]) ){
            //$parse = parse_url( $_SERVER["HTTP_REFERER"] );
            //if(isset( $parse['host'] )){



            //}
        //}else{
           // $result .= 'updatePriceAndSend(null);';
        //}
        //$result .= 'updatePriceAndSend(null);';
        echo $result;
        exit();
        return;
    }
}