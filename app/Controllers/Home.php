<?php

namespace App\Controllers;

helper('custom');

class Home extends BaseController
{
    public $productsModel;
    public function __construct()
    {
        $this->productsModel = new \App\Models\ProductsModel;
    }
    // goto view
    public function index()
    {
        return view('user/landing', [
            'templates' => check_user(),
            'title' => 'Beranda',
        ]);
    }
    public function products()
    {
        $data = $this->productsModel->findAll();
        return view('user/products', [
            'templates' => check_user(),
            'title' => 'Product',
            'products' => $data,
        ]);
    }
    public function about()
    {
        return view('user/about', [
            'templates' => check_user(),
            'title' => 'Tentang Kami',
        ]);
    }
    public function Promo()
    {
        return view('user/promo', [
            'templates' => check_user(),
            'title' => 'Tentang Kami',
        ]);
    }
    public function login()
    {
        return view('user/login', [
            'title' => 'Login',
        ]);
    }
    public function register()
    {
        return view('user/register', [
            'title' => 'Daftar',
        ]);
    }
    public function forgot_password()
    {
        return view('user/forgot_password', [
            'title' => 'Verifikasi Akun',
        ]);
    }
}
