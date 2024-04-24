<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// HOME
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::products');
$routes->get('/about', 'Home::about');

// LOGIN
$routes->get('/login', 'Login::index');
$routes->post('/l_auth', 'Login::login');

// REGISTER
$routes->get('/register', 'Login::register');
$routes->post('/r_auth', 'Login::register');

// MEMBER
$routes->get('/m/cart', 'Member::cart');
$routes->get('/m/points', 'Member::points');

// ADMIN
$routes->get('/a/dashboard', 'Admin::index');
$routes->get('/a/stocks', 'Admin::stocks');
$routes->get('/a/members', 'Admin::manage_members');

// $routes->setAutoRoute(true);
