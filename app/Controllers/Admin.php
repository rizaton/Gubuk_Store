<?php

namespace App\Controllers;

helper('custom');

use App\Controllers\BaseController;

class Admin extends BaseController
{
    private $cartModel;
    private $userModel;
    private $productModel;
    protected $helpers = ['url', 'form'];

    public function __construct()
    {
        $this->cartModel = new \App\Models\CartModel();
        $this->userModel = new \App\Models\PeopleModel();
        $this->productModel = new \App\Models\ProductsModel();
    }
    public function index()
    {
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (!(session()->getFlashdata('user_data')['access'] == 'a')) {
            return redirect()->to(base_url('l_auth'));
        }
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/index', [
                'title' => 'Dashboard',
                'data' => ''
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function dashboard()
    {
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/index', [
                'title' => 'Dashboard',
                'data' => ''
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function stocks()
    {
        $data = $this->productModel->findAll();
        $search = "Daging Sapi Rendang";
        $newData = $this->productModel->select()->like('product_name', $search)->findAll();
        dd($newData);
        // session()->setFlashdata('user_data', ['access' => 'a']);
        // if (session()->getFlashdata('user_data')['access'] == 'a') {
        //     return view('admin/stock', [
        //         'title' => 'Stock',
        //         'stocks' => $data,
        //     ]);
        // } else {
        //     return redirect()->to(base_url('l_auth'));
        // }
    }
    public function manage_members()
    {
        $data = [];
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/members_management', [
                'title' => 'Manage Members',
                'data' => $data
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function promos()
    {
        $data = [];
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/promos', [
                'title' => 'Promo Table',
                'data' => $data
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
}
