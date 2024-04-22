<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('partisans/header');
        echo view('partisans/navbar_member');
        echo view('partisans/footer');
    }
}
