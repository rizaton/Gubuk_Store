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
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/stocks', [
                'title' => 'Stock',
                'data' => ''
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function manage_members()
    {
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/members_management', [
                'title' => 'Manage Members',
                'data' => ''
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
    public function promos()
    {
        session()->setFlashdata('user_data', ['access' => 'a']);
        if (session()->getFlashdata('user_data')['access'] == 'a') {
            return view('admin/promos', [
                'title' => 'Promo Table',
                'data' => ''
            ]);
        } else {
            return redirect()->to(base_url('l_auth'));
        }
    }
}
