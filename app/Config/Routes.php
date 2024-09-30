<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages\Home::index');
$routes->get('/login', 'Pages\Home::loginPage');
$routes->get('/myCourse', 'Pages\Home::myCourse');
$routes->get('/store', 'Pages\Home::store');

// Bab 1
$routes->get('/ci4/bab1/1', 'Pages\Home::bab1_1');
$routes->get('/ci4/bab1/2', 'Pages\Home::bab1_2');
$routes->get('/ci4/bab1/3', 'Pages\Home::bab1_3');
$routes->get('/ci4/bab1/4', 'Pages\Home::bab1_4');
$routes->get('/ci4/bab1/5', 'Pages\Home::bab1_5');
$routes->get('/ci4/bab1/6', 'Pages\Home::bab1_6');
$routes->get('/ci4/bab1/7', 'Pages\Home::bab1_7');
$routes->get('/ci4/bab1/8', 'Pages\Home::bab1_8');

// Bab 2
$routes->get('/ci4/bab2/1', 'Pages\Home::bab2_1');
