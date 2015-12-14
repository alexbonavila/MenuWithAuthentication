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

    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {

    }

    public static function menu(){
        $menu=new MenuItem();
        return $menu;
    }

}