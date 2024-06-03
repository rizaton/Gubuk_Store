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
    private $promoModel;
    protected $helpers = ['url', 'form'];

    public function __construct()
    {
        $this->cartModel = new \App\Models\CartModel();
        $this->userModel = new \App\Models\PeopleModel();
        $this->productModel = new \App\Models\ProductsModel();
        $this->stockModel = new \App\Models\StockModel();
        $this->promoModel = new \App\Models\PromoModel();
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
                session()->setFlashdata('search_data', ['all', $search_data]);
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
                session()->setFlashdata('search_data', ['active', $search_data]);
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
                session()->setFlashdata('search_data', ['inactive', $search_data]);
            } else {
                session()->setFlashdata('search_data', [null, '']);
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
        $data = $this->promoModel->findAll();
        if (user_access() == 'a') {
            return view('admin/promos', [
                'title' => 'Promo Table',
                'datas' => $data
            ]);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function stock_edit()
    {
        $data_stock = $this->request->getGet('stock_id');
        $data_edit = $this
            ->stockModel
            ->join('product', 'stock_product_id = product.product_id')
            ->select()
            ->where('stock_id', $data_stock)
            ->first();
        // dd($data_edit);
        return view('admin/edit_product', [
            'title' => 'Edit',
            'data_edit' => $data_edit,
        ]);
    }
    public function member_edit()
    {
        $data_member = $this->request->getGet('member_id');
        $data_edit = $this
            ->stockModel
            ->join('product', 'stock_product_id = product.product_id')
            ->select()
            ->where('stock_id', $data_member)
            ->first();

        return view('admin/edit_member', [
            'title' => 'Edit',
            'data_edit' => $data_edit,
        ]);
    }
    public function promo_edit()
    {
        $data_promo = $this->request->getGet('promo_id');
        return view('admin/edit_promo', [
            'title' => 'Edit',
            'data_edit' => [],
        ]);
    }
}
