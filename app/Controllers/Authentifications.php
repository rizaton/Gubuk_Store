<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

helper('custom');

class Authentifications extends BaseController
{
    private function check_admin(): bool
    {
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return true;
        }
        return false;
    }
    private function check_member(): bool
    {
        if (session()->getFlashdata('user_data')['access'] == 'm') {
            return true;
        }
        return false;
    }

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
    //CART
    public function cart_add_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        $cart_model = new \App\Models\CartModel;
        $cart_model = $cart_model->insert(['data' => '']);
        return view('');
    }
    public function cart_update_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        $cart_model = new \App\Models\CartModel;
        $cart_model = $cart_model->update(['key' => ''], ['data' => '']);
        return view('');
    }
    public function cart_delete_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        $cart_model = new \App\Models\CartModel;
        $cart_model = $cart_model->delete(['key' => '']);
        return view('');
    }

    public function points_auth()
    {
        return view('');
    }
    //Admin
    //STOCK
    public function stock_auth()
    {
        $validation = new \App\Validation\ProductValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->productValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/stock'));
        }
        $stock_model = new \App\Models\ProductsModel;
        $stock_model = $stock_model->insert(['data' => '']);
        return view('');
    }
    public function stock_add_auth()
    {
        $validation = new \App\Validation\ProductValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->productValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/stock'));
        }
        $stock_model = new \App\Models\ProductsModel;
        $stock_model = $stock_model->insert(['data' => '']);
        return view('');
    }
    public function stock_update_auth()
    {
        $validation = new \App\Validation\ProductValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->productValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/stock'));
        }
        $stock_model = new \App\Models\ProductsModel();
        $stock_model = $stock_model->update(['key' => ''], ['data' => '']);
        return view('');
    }
    public function stock_delete_auth()
    {
        $validation = new \App\Validation\ProductValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->productValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/stock'));
        }
        $stock_model = new \App\Models\ProductsModel();
        $stock_model = $stock_model->delete(['key' => '']);
        return view('');
    }

    //MEMBER MANAGEMENT
    public function member_auth()
    {
        return view('');
    }

    //PROMO
    public function promo_add_auth()
    {
        $validation = new \App\Validation\PromoValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->promoValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/promo'));
        }
        $promo_model = new \App\Models\PromoModel;
        $promo_model = $promo_model->insert(['data' => '']);
        return view('');
    }
    public function promo_update_auth()
    {
        $validation = new \App\Validation\PromoValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->promoValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/promo'));
        }
        $promo_model = new \App\Models\PromoModel;
        $promo_model = $promo_model->update(['key' => ''], ['data' => '']);
        return view('');
    }
    public function promo_delete_auth()
    {
        $validation = new \App\Validation\PromoValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->getFlashdata('page')));
        }
        if (!$this->validate($validation->promoValidate())) {
            session()->setFlashdata('data_form', ['']);
            return redirect()->to(base_url('a/promo'));
        }
        $promo_model = new \App\Models\PromoModel;
        $promo_model = $promo_model->delete(['key' => '']);
        return view('');
    }

    //Payment
    public function pay_auth()
    {
        return view('');
    }
}
