<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->add('/about', 'Home::about');

$routes->add('/harga', 'Home::harga');

$routes->add('/kebijakan', 'Home::Kebijakan');

$routes->add('/login', 'Home::login');

$routes->add('/register', 'Home::regis');

$routes->add('/kontak', 'Home::kontak');
