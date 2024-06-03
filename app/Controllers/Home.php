<?php

namespace App\Controllers;

use Config\App;

helper('custom');

class Home extends BaseController
{
    public $productsModel;
    public function __construct()
    {
        $this->productsModel = new \App\Models\ProductsModel;
    }
    public function index()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        }
        return view('user/landing', [
            'templates' => check_user(),
            'title' => 'Beranda',
        ]);
    }
    public function products()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        }
        if ($this->request->getGet('search_data') != null) {
            $search_data = $this->request->getGet('search_data');
            $data = $this->productsModel->select()->like('product_name', $search_data)->findAll();
            session()->setFlashdata('search_value', $search_data);
        } else {
            $data = $this->productsModel->findAll();
            session()->setFlashdata('search_value', '');
        }
        return view('user/products', [
            'templates' => check_user(),
            'title' => 'Product',
            'products' => $data,
        ]);
    }
    public function about()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        }
        return view('user/about', [
            'templates' => check_user(),
            'title' => 'Tentang Kami',
        ]);
    }
    public function Promo()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        }
        return view('user/promo', [
            'templates' => check_user(),
            'title' => 'Tentang Kami',
        ]);
    }
    public function login()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        } else if (user_access() == 'm') {
            return redirect()->to(base_url('/'));
        }
        return view('user/login', [
            'title' => 'Login',
        ]);
    }
    public function register()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        } else if (user_access() == 'm') {
            return redirect()->to(base_url('/'));
        }
        return view('user/register', [
            'title' => 'Daftar',
        ]);
    }
    public function forgot_password()
    {
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        } else if (user_access() == 'm') {
            return redirect()->to(base_url('/'));
        }
        return view('user/forgot_password', [
            'title' => 'Verifikasi Akun',
        ]);
    }
}
