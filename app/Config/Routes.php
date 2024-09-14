<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages\Home::index');
$routes->get('/login', 'Pages\Home::loginPage');
$routes->get('/main', 'Pages\Home::main');
$routes->get('/course1', 'Pages\Home::course');
