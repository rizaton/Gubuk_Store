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
        try {
            $productCart = $this->cartModel->join('product', 'cart_product_id = product.product_id')->findAll();
        } catch (\Throwable $th) {
            $productCart = [''];
        }
        $productCart = $this->cartModel->join('product', 'cart_product_id = product.product_id')->findAll();
        dd($productCart);
        $userCart = $this->cartModel->select('cart_product_id, cart_qty')->where('cart_people_id', 1) ?? [''];
        // return logged_check('cart', 'Cart');
        session()->setFlashdata('user_data', ['access' => 'm']);
        if (session()->getFlashdata('user_data')['access'] == 'm' || session()->getFlashdata('user_data')['access'] == 'a') {
            return view('member/cart', [
                'title' => 'Cart',
                'carts' => $userCart,
                'products' => $productCart
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
