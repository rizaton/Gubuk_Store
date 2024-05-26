<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

helper('custom');

class Member extends BaseController
{
    private $cartModel;
    private $userModel;
    private $productModel;

    public function __construct()
    {
        $this->cartModel = new \App\Models\CartModel();
        $this->userModel = new \App\Models\PeopleModel();
        $this->productModel = new \App\Models\ProductsModel();
    }

    public function points()
    {
        session()->setFlashdata('user_data', ['access' => 'm']);
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
        if (session()->get('user_data')['people_access'] == 'm' || session()->get('user_data')['people_access'] == 'a') {
            try {
                $productCarts = $this
                    ->cartModel
                    ->join('product', 'cart_product_id = product.product_id')
                    ->select()
                    ->where('cart_people_id', session()->get('user_data')['people_id'])
                    ->findAll();
                $err = null;
            } catch (\Throwable $th) {
                $productCarts = [];
                $err = $th;
            }

            return view('member/cart', [
                'title' => 'Cart',
                'productCarts' => $productCarts,
                'err' => $err,
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function payments()
    {
        session()->setFlashdata('user_data', ['access' => 'm']);
        if (session()->getFlashdata('user_data')['access'] == 'm' || session()->getFlashdata('user_data')['access'] == 'a') {
            return view('member/payments', [
                'title' => 'Payment',
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
}
