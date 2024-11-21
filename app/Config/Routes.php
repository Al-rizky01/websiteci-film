<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/about', 'Home::about');


$routes->get('/film', 'Film::index');
$routes->get('/film/create', 'Film::create');
$routes->post('/film/store', 'Film::store');
$routes->get('/film/edit/(:num)', 'Film::edit/$1');
$routes->post('/film/update/(:num)', 'Film::update/$1');
$routes->post('/film/delete/(:num)', 'Film::delete/$1');
$routes->get('/film/detail/(:num)', 'Film::detail/$1');