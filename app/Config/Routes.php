<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages\Home::index');
$routes->get('/login', 'Pages\Home::loginPage');
$routes->get('/myCourse', 'Pages\Home::myCourse');
$routes->get('/store', 'Pages\Home::store');

// Modul CI4
$routes->get('/ci4', 'Pages\Home::ci4');
$routes->group('ci4', function ($routes) {
    // Bab 1
    $routes->get('bab1/(:segment)', 'Pages\ci4Controller::viewBab/bab1/$1');
    // Bab 2
    $routes->get('bab2/(:segment)', 'Pages\ci4Controller::viewBab/bab2/$1');
});
