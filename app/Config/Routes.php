<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// HOME
$routes->get('/', 'Home::index');
$routes->get('/products', 'Home::products');
$routes->get('/about', 'Home::about');

//Authentifications
$routes->post('/buy', 'Authentifications::buyNow_auth');
$routes->post('/pay', 'Authentifications::pay_auth');
$routes->post('/forgot_auth', 'Authentifications::forgot_auth');
$routes->post('/login_auth', 'Authentifications::login_auth');
$routes->post('/register_auth', 'Authentifications::register_auth');
//Auth Carts
$routes->post('/m/cart_add', 'Authentifications::cart_add_auth');
$routes->post('/m/cart_up', 'Authentifications::cart_update_auth');
$routes->post('/m/cart_del', 'Authentifications::cart_delete_auth');
//Auth Admin Products
$routes->post('/a/stock_add', 'Authentifications::stock_add_auth');
$routes->post('/a/stock_up', 'Authentifications::stock_update_auth');
$routes->post('/a/stock_del', 'Authentifications::stock_delete_auth');
//Auth Admin Promo
$routes->post('/a/promo_add', 'Authentifications::promo_add_auth');
$routes->post('/a/promo_up', 'Authentifications::promo_update_auth');
$routes->post('/a/promo_del', 'Authentifications::promo_delete_auth');
//Admin Member Managements
$routes->post('/a/member_add', 'Authentifications::member_add_auth');
$routes->post('/a/member_up', 'Authentifications::member_update_auth');
$routes->post('/a/member_del', 'Authentifications::member_delete_auth');

// Views
// FORGOT
$routes->get('/forgot', 'Home::forgot_password');

// LOGIN
$routes->get('/login', 'Home::login');

// REGISTER
$routes->get('/register', 'Home::register');

// MEMBER
$routes->get('/m/cart', 'Member::cart');
$routes->get('/m/points', 'Member::points');
$routes->get('/m/payments', 'Member::payments');

// ADMIN
$routes->get('/a/dashboard', 'Admin::dashboard');
$routes->get('/a/stocks', 'Admin::stocks');
$routes->get('/a/members', 'Admin::manage_members');
$routes->get('/a/promos', 'Admin::promos');

// $routes->setAutoRoute(true);
