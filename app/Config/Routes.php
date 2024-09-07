<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/home/save', 'Home::save');
$routes->get('/home/delete/(:num)', 'Home::delete/$1');
$routes->get("/home/edit/(:num)", 'Home::edit/$1');