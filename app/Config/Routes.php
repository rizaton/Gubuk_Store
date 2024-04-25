<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// HOME
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::products');
$routes->get('/about', 'Home::about');

// FORGOT
$routes->get('/forgot', 'Home::forgot_password');
$routes->post('/f_auth', 'Authentifications::forgot_auth');

// LOGIN
$routes->get('/login', 'Home::login');
$routes->post('/l_auth', 'Authentifications::login_auth');

// REGISTER
$routes->get('/register', 'Home::register');
$routes->post('/r_auth', 'Authentifications::register_auth');

// MEMBER
$routes->get('/m/cart', 'Member::cart');
$routes->get('/m/points', 'Member::points');

// ADMIN
$routes->get('/a/dashboard', 'Admin::dashboard');
$routes->get('/a/stocks', 'Admin::stocks');
$routes->get('/a/members', 'Admin::manage_members');
$routes->get('/a/promos', 'Admin::promos');

// $routes->setAutoRoute(true);
