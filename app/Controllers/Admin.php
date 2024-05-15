<?php

namespace App\Controllers;

helper('custom');

use App\Controllers\BaseController;

class Admin extends BaseController
{
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
        $data = []; //kal
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/stock', [
                'title' => 'Stock',
                'data' => $data //kal
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
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
