<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use function App\Helpers\logged_check;

class Admin extends BaseController
{
    public function __construct()
    {
        logged_check();
    }
    public function dashboard()
    {
        return view('admin/index');
    }
    public function stocks()
    {
        return view('admin/stocks');
    }
    public function manage_members()
    {
        return view('admin/members_management');
    }
    public function promos()
    {
        return view('admin/promos');
    }
}
