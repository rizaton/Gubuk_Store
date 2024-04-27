<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Member extends BaseController
{
    public function points()
    {
        return view('member/points');
    }
    public function cart()
    {
        return view('member/cart');
    }
    public function payments()
    {
        return view('member/payments');
    }
}
