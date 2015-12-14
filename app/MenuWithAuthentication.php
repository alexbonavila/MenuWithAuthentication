<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\menu\MenuItem;

class MenuWithAuthentication
{
    public static $instance=null;
    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {

    }

    public static function menu($id){
        return new MenuItem($id);
    }

    public static function instance(){
        if(is_null(static::$instance)){
            return static::$instance=new static;
        }
        return static::$instance;
    }

    public function getMenu()
    {
        return array();
    }

}