<?php defined('SYSPATH') OR die('No Direct Script Access');

class Controller_Hello extends Controller
{

    public function initSessionToken(){
        $token = md5( microtime() . mt_rand(1,20) );
        $session = Session::instance();
        $session->set( 'card_' . $token, 'init' );
        return $token;
    }
    public function action_gus(){
        header('Content-Type: text/javascript; charset=UTF-8');
        $id = (int)$this->request->param('id');
        $settings = MemController::initSettingsMemcache( $id );

        $result = '';
        if( !empty($settings) ){
            $token = md5( microtime() . mt_rand(1,20) ) ;
            $memcache = MemController::getMemcacheInstance();
            $info = array( 'id' => $id );
            $memcache->set( 'card_' . $token, json_encode( $info ), 0, 1200 );
            $result .= 'updatePriceAndSend("' . $token . '");';
        }else{
        }
        echo $result;
        exit();
        return;
    }
}