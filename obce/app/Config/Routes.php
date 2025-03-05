<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/okresy', 'Home::okresy');
$routes->get('/okresy/(:num)/obce', 'Home::obce/$1');
