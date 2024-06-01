<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// HOME
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/promo', 'Home::promo');
$routes->get('/login', 'Home::login');
$routes->get('/products', 'Home::products');
$routes->get('/register', 'Home::register');
$routes->get('/forgot', 'Home::forgot_password');

//Authentifications
$routes->post('/pay', 'Authentifications::pay_auth');
$routes->post('/buy', 'Authentifications::buyNow_auth');
$routes->post('/login_auth', 'Authentifications::login_auth');
$routes->post('/forgot_auth', 'Authentifications::forgot_auth');
$routes->post('/register_auth', 'Authentifications::regist_auth');

//Auth Carts
$routes->post('/m/cart_add', 'Authentifications::cart_add_auth');
$routes->put('/m/cart_up', 'Authentifications::cart_update_auth');
$routes->delete('/m/cart_del', 'Authentifications::cart_delete_auth');
$routes->post('/m/cart_up_add', 'Authentifications::cart_update_add_auth');
$routes->post('/m/cart_up_sub', 'Authentifications::cart_update_sub_auth');

//Auth Admin Stocks
$routes->post('/a/stock_add', 'Authentifications::stock_add_auth');
$routes->delete('/a/stock_del', 'Authentifications::stock_delete_auth');
$routes->put('/a/stock_up_add', 'Authentifications::stock_update_add_auth');
$routes->put('/a/stock_up_sub', 'Authentifications::stock_update_sub_auth');

//Auth Admin Stock Toggle
$routes->post('/a/stock/toggle', 'Authentifications::stock_toggle');

//Auth Admin Promo
$routes->post('/a/promo_add', 'Authentifications::promo_add_auth');
$routes->put('/a/promo_up', 'Authentifications::promo_update_auth');
$routes->delete('/a/promo_del', 'Authentifications::promo_delete_auth');

//Admin Member Managements
$routes->post('/a/member_add', 'Authentifications::member_add_auth');
$routes->put('/a/member_up', 'Authentifications::member_update_auth');
$routes->delete('/a/member_del', 'Authentifications::member_delete_auth');

// ADMIN
$routes->get('/a/stocks', 'Admin::stocks');
$routes->get('/a/promos', 'Admin::promos');
$routes->get('/a/dashboard', 'Admin::dashboard');
$routes->get('/a/members', 'Admin::manage_members');

// MEMBER
$routes->get('/m/cart', 'Member::cart');
$routes->get('/m/points', 'Member::points');
$routes->get('/m/payments', 'Member::payments');

// $routes->setAutoRoute(true);
