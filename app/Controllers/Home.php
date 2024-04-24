<?php

namespace App\Controllers;

class Home extends BaseController
{
        public function index()
        {
                return view('admin/members_management');
                //return view('user/products', ['templates' => 'main_user']);
                // echo view('partisans/header');
                // echo view('partisans/navbar_member');
                // echo view('partisans/footer');
        }
}
