<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages\Home::index');
$routes->get('/main', 'Pages\Home::main');
$routes->get('/login', 'Pages\Home::loginPage');
