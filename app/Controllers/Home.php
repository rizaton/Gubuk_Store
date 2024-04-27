<?php

namespace App\Controllers;

use function App\Helpers\log_status;
use function App\Helpers\set_login;
use function App\Helpers\user_access;

class Home extends BaseController
{
    protected $helpers = ['custom'];

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
        return view('member/cart', ['templates' => 'main_user', "title" => 'About']);

        return view('user/landing', [
            ''
        ]);
        return view('user/products', [
            'templates' => 'main_user',
            'title' => 'Landing'
        ]);
    }
    public function products()
    {
        return view('');
    }
    public function about()
    {
        session()->get('log_status');
        return view('');
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
