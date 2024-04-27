<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['helper_custom', 'form'];
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
        dd(testing());
        $user_status = $this->check_user();
        return view('user/landing', [
            'templates' => $this->check_user(),
            'title' => 'Beranda',
        ]);
    }
    public function products()
    {
        $user_status = $this->check_user();
        return view('user/products', [
            'templates' => $this->check_user(),
            'title' => 'Produk',
        ]);
    }
    public function about()
    {
        $user_status = $this->check_user();
        return view('user/landing', [
            'templates' => $this->check_user(),
            'title' => 'Tentang Kami',
        ]);
    }
    public function login()
    {
        return view('user/login');
    }
    public function register()
    {
        return view('user/register');
    }
    public function forget_password()
    {
        return view('user/forgot_password');
    }
}
