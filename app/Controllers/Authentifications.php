<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Authentifications extends BaseController
{
    public function index()
    {
        echo "YOU're NOT SUPPOSED TO BE HERE";
    }
    //User
    public function buyNow_auth()
    {
        return view('');
    }
    public function login_auth()
    {
        return view('');
    }
    public function regist_auth()
    {
        return view('');
    }
    public function forgot_auth()
    {
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
