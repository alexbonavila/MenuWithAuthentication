<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 14/12/15
 * Time: 16:28
 */

//Nom titol
//url
//Icona
//Té submenus

//Home
//Todo Comprovar
use MenuWithAuthentication\MenuWithAuthentication;

MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('alexbonavila');

//Another Link
MenuWithAuthentication::menu('anotherLink')
    ->title('Another link')
    ->user(5);

//Multilevel
MenuWithAuthentication::menu('multi')
    ->title('Multilevel')
    ->icon('fa-credit-card');

    MenuWithAuthentication::menu('link2')
        ->title('link in level 2')
        ->icon('fa-briefcase');

    MenuWithAuthentication::menu('link3')
        ->title('link in level 2')
        ->icon('fa-user');

MenuWithAuthentication::menu('link4')
    ->title('Ultim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.es');
