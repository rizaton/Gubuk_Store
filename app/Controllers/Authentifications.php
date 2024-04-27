<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Authentifications extends BaseController
{
    public function index()
    {
        return redirect()->to(base_url('/'));
    }
    public function login_auth()
    {
        $validation = new \App\Validation\LoginValidate;
        if (!$this->validate($validation->loginValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('/login'));
        }
        return view('');
    }
    //User
    public function buyNow_auth()
    {
        return view('');
    }
    public function regist_auth()
    {
        $validation = new \App\Validation\RegisterValidate;
        if (!$this->validate($validation->registerValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('register'));
        }
        return view('');
    }
    public function forgot_auth()
    {
        $validation = new \App\Validation\ForgotPasswordValidate;
        if (!$this->validate($validation->forgotPasswordValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('forgot'));
        }
        return view('');
    }
    //Member
    public function cart_auth()
    {
        return view('');
    }
    public function points_auth()
    {
        return view('');
    }
    //Admin
    public function stock_auth()
    {
        $validation = new \App\Validation\StockValidate;
        if (!$this->validate($validation->stocksValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/stock'));
        }
        return view('');
    }
    public function member_auth()
    {
        return view('');
    }
    //Payment
    public function pay_auth()
    {
        return view('');
    }
}
