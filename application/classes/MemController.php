<?php
/**
 * Created by PhpStorm.
 * User: mrozk
 * Date: 7/29/14
 * Time: 9:25 AM
 */

class MemController{

    private static $memcacheInstance = null;

    public static function getMemcacheInstance(){
        if( self::$memcacheInstance == null ){
            self::$memcacheInstance = new Memcache;
            self::$memcacheInstance->connect('localhost', 11211) or die ("Could not connect to Memcache");
        }
        return self::$memcacheInstance;
    }

    public static function initSettingsMemcache( $id ){
        $memcache = self::getMemcacheInstance();
        
        if( !empty( $id ) ){
            $settings = $memcache->get('settings_' . $id );
            if( empty($settings) ){
                $query = DB::select( 'id', 'settings')->from('insalesusers')->where( 'id', '=', $id )->as_object()->execute();
                if( isset( $query[0]->id )){
                    $settings = json_decode( $query[0]->settings );
                    $settings->insalesuser_id = $query[0]->id;
                    $settings->insalesPasswd;
                    $settings->insalesShop;
                    return $settings;
                }
            }else{
                return json_decode($settings);
            }
        }
        return false;
    }
}
