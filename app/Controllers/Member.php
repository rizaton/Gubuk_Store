<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

helper('custom');

class Member extends BaseController
{
    public function points()
    {
        session()->setFlashdata('user_data', ['access' => 'u']);
        if (session()->getFlashdata('user_data')['access'] == 'm' || session()->getFlashdata('user_data')['access'] == 'a') {
            return view('member/points', [
                'title' => 'Points',
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function cart()
    {
        // return logged_check('cart', 'Cart');
        session()->setFlashdata('user_data', ['access' => 'u']);
        if (session()->getFlashdata('user_data')['access'] == 'm' || session()->getFlashdata('user_data')['access'] == 'a') {
            return view('member/cart', [
                'title' => 'Cart',
                'cart' => '<div class="grid grid-cols-5 justify-items-center items-center">
                <input type="checkbox" class="checkbox" />
                <div class="w-36 h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-square">+</button>
                    <div>3</div>
                    <button class="btn btn-square">-</button>
                </div>
                <div>Rp.36000</div>
            </div>'
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function payments()
    {
        return view('member/payments', [
            'title' => 'Pay'
        ]);
    }
}
