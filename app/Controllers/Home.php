<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
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
        return view('');
    }
    // goto AUTH
    public function login()
    {
        return view('');
    }
    public function register()
    {
        return view('');
    }
    public function forget_password()
    {
        return view('');
    }
}
