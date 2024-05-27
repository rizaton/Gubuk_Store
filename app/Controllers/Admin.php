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
        if (!(user_access() == 'a')) {
            return redirect()->to(base_url('/login'));
        }
        if (user_access() == 'a') {
            return redirect()->to(base_url('/a/dashboard'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function dashboard()
    {
        if (user_access() == 'a') {
            return view('admin/index', [
                'title' => 'Dashboard',
                'data' => ''
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function stocks()
    {
        if (user_access() == 'a') {
            if ($this->request->getGet('search_data') != null) { // name="search_data" id="search_data"
                $search_data = $this->request->getGet('search_data');
                $data = $this->productModel->select()->like('product_name', $search_data)->findAll();
                session()->setFlashdata('search_value', $search_data);
            } else {
                $data = $this->productModel->findAll();
                session()->setFlashdata('search_value', '');
            }
            return view('admin/stock', [
                'title' => 'Stock',
                'stocks' => $data,
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function manage_members()
    {
        $data = [];
        if (user_access() == 'a') {
            return view('admin/members_management', [
                'title' => 'Manage Members',
                'data' => $data
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function promos()
    {
        $data = [];
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (user_access() == 'a') {
            return view('admin/promos', [
                'title' => 'Promo Table',
                'data' => $data
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
