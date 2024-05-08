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
    private function check_user()
    {
        if (!log_status()) {
            session()->setFlashdata('login');
            session()->setFlashdata('user_data', ['access' => 'u']);
            return 'user';
        } else if (!log_status() && user_access() == 'm') {
            return 'member';
        } else if (!log_status() && user_access() == 'a') {
            return 'admin';
        }
    }
    // goto view
    public function index()
    {
        $user_status = $this->check_user();
        return view('user/landing', [
            'templates' => $this->check_user(),
            'title' => 'Beranda',
        ]);
    }
    public function products()
    {
        $data = $this->productsModel->findAll();
        return view('user/products', [
            'templates' => $this->check_user(),
            'title' => 'Product',
            'products' => $data,
        ]);
    }
    public function about()
    {
        $user_status = $this->check_user();
        return view('user/about', [
            'templates' => $this->check_user(),
            'title' => 'Tentang Kami',
        ]);
    }
    public function Promo()
    {
        $user_status = $this->check_user();
        return view('user/promo', [
            'templates' => $this->check_user(),
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
