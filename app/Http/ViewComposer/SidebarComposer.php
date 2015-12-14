<?php

namespace MenuWithAuthentication\Http\ViewComposer;

use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;


/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 14/12/15
 * Time: 17:10
 */

class SidebarComposer
{
    public function compose(View $view)
    {
        $view->with('menu',$this->getSidebarMenu());
    }

    private function getSidebarMenu(){

        return array();

//        $menu =
//            MenuWithAuthentication::instance()
//                ->getMenu();
//        return array($menu);
    }
}