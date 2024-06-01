<?php

namespace App\Controllers;

helper('custom');

use App\Controllers\BaseController;

class Admin extends BaseController
{
    private $cartModel;
    private $userModel;
    private $productModel;
    private $stockModel;
    protected $helpers = ['url', 'form'];

    public function __construct()
    {
        $this->cartModel = new \App\Models\CartModel();
        $this->userModel = new \App\Models\PeopleModel();
        $this->productModel = new \App\Models\ProductsModel();
        $this->stockModel = new \App\Models\StockModel();
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
            try {
                $allStocks = $this
                    ->stockModel
                    ->join('product', 'stock_product_id = product.product_id')
                    ->select()
                    ->findAll();
                $activeStocks = $this
                    ->stockModel
                    ->join('product', 'stock_product_id = product.product_id')
                    ->select()
                    ->where('stock_active', 'a')
                    ->findAll();
                $inactiveStocks = $this
                    ->stockModel
                    ->join('product', 'stock_product_id = product.product_id')
                    ->select()
                    ->where('stock_active', 'i')
                    ->findAll();
                $err = null;
            } catch (\Throwable $th) {
                $allStocks = [];
                $activeStocks = [];
                $inactiveStocks = [];
                $err = $th;
            }
            if ($this->request->getGet('search_data_all') != null) { // name="search_data" id="search_data"
                $search_data = $this->request->getGet('search_data_all');
                try {
                    $allStocks = $this
                        ->stockModel
                        ->join('product', 'stock_product_id = product.product_id')
                        ->select()
                        ->like('product_name', $search_data)
                        ->findAll();
                } catch (\Throwable $th) {
                    $allStocks = [];
                }
                $err = null;
                session()->setFlashdata('search', ['all', $search_data]);
            } else if ($this->request->getGet('search_data_active') != null) {
                $search_data = $this->request->getGet('search_data_active');
                try {
                    $activeStocks = $this
                        ->stockModel
                        ->join('product', 'stock_product_id = product.product_id')
                        ->select()
                        ->where('stock_active', 'a')
                        ->like('product_name', $search_data)
                        ->findAll();
                } catch (\Throwable $th) {
                    $activeStocks = [];
                }
                $err = null;
                session()->setFlashdata('search', ['active', $search_data]);
            } else if ($this->request->getGet('search_data_inactive') != null) {
                $search_data = $this->request->getGet('search_data_inactive');
                try {
                    $inactiveStocks = $this
                        ->stockModel
                        ->join('product', 'stock_product_id = product.product_id')
                        ->select()
                        ->where('stock_active', 'i')
                        ->like('product_name', $search_data)
                        ->findAll();
                } catch (\Throwable $th) {
                    $inactiveStocks = [];
                }
                $err = null;
                session()->setFlashdata('search', ['inactive', $search_data]);
            }
            return view('admin/stock', [
                'title' => 'Stock',
                'stocks' => $allStocks,
                'allStocks' => $allStocks,
                'activeStocks' => $activeStocks,
                'inactiveStocks' => $inactiveStocks,
                'error' => $err,
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function manage_members()
    {
        if (user_access() == 'a') {
            $data = $this->userModel->findAll();
            $admin_data = $this
                ->userModel
                ->select()
                ->where('people_access', 'a')
                ->findAll();
            $member_data = $this
                ->userModel
                ->select()
                ->where('people_access', 'm')
                ->findAll();
            return view('admin/members_management', [
                'title' => 'Manage Members',
                'datas' => $data,
                'admin_data' => $admin_data,
                'member_data' => $member_data,
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function promos()
    {
        $data = [];
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
