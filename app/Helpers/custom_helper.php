<?php

use App\Models\CartModel;
use CodeIgniter\HTTP\RedirectResponse;

function logged_check(string $view = null, string $title = null)
{
    if (!session()->get('user_data')) {
        session()->set('log_message', 'Harap lakukan login terlebih dahulu');
        return redirect()->to(base_url('l_auth'));
    }
    if (session()->get('user_data')['access'] == 'm') {
        session()->set('log_message', 'Selamat datang kembali');
        return view('member/' . $view, [
            'title' => $title
        ]);
    }
    if (session()->get('user_data')['access'] == 'a') {
        session()->set('log_message', 'Selamat datang');
        return view('admin/' . $view, [
            'title' => $title
        ]);
    }
    session()->set('log_message', 'Error Occured');
    return redirect()->to(base_url(session()->get('page')));
}
function check_user()
{
    if (!log_status()) {
        session()->set('login');
        session()->set('user_data', ['access' => 'u']);
        return 'user';
    }
    if (log_status() && user_access() == 'm') {
        return 'member';
    }
    if (log_status() && user_access() == 'a') {
        return 'admin';
    }
}
function set_login(bool $data = null)
{
    session()->set('login', $data);
    return session()->get('login');
}
function log_status()
{
    return session()->get('login');
}
function user_access(): string
{
    return session()->get('user_data')['people_access'];
}
function user_cart(): array
{
    return session()->get('user_data');
}
function set_user(array $data = null)
{
    session()->set('user_data', $data);
    if ($data != null) {
        set_cart();
        set_login(true);
    }
}
function set_cart()
{
    $cart_model = new \App\Models\CartModel;
    $many_cart = $cart_model
        ->join('product', 'cart_product_id = product.product_id')
        ->select('')
        ->where('cart_people_id', session()->get('user_data')['people_id'])
        ->findAll();
    $sum_cart = 0;
    foreach ($many_cart as $cart) {
        $sum_cart += ($cart['cart_qty'] * $cart['product_price_per_qty']);
    }
    $cart_data = [
        'cart_many' => (string) count($many_cart),
        'cart_sum' => $sum_cart,
    ];
    session()->set('user_cart', $cart_data);
}
function get_user(): array
{
    return session()->get('user_data');
}
function get_page(): string
{
    return session()->get('page') ?? '/';
}
