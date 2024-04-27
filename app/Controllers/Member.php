<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use function App\Helpers\logged_check;

class Member extends BaseController
{
    public function __construct()
    {
        logged_check();
    }
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
