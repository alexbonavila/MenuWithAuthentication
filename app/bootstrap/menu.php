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
MenuWithAuthentication::Menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('alexbonavila');

//Another Link
MenuWithAuthentication::Menu()
    ->title('Another link')
    ->user(5);

//Multilevel
MenuWithAuthentication::Menu()
    ->title('Multilevel')
    ->icon('fa-credit-card');

    MenuWithAuthentication::Menu()
        ->title('link in level 2')
        ->icon('fa-briefcase');

    MenuWithAuthentication::Menu()
        ->title('link in level 2')
        ->icon('fa-user');

MenuWithAuthentication::Menu()
    ->title('Ultim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.es');