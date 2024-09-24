<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages\Home::index');
$routes->get('/login', 'Pages\Home::loginPage');
$routes->get('/myCourse', 'Pages\Home::myCourse');
$routes->get('/store', 'Pages\Home::store');
$routes->get('/ci4/bab1', 'Pages\Home::bab');
$routes->get('/ci4/bab2', 'Pages\Home::bab2');
$routes->get('/ci4/bab2', 'Pages\Home::bab3');
