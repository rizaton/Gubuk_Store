<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/forgot_password', [
            'templates' => 'main_user',
            'title' => 'About'
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
