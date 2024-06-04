<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

helper('custom');

class Authentifications extends BaseController
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
    private function check_admin(): bool
    {
        if (session()->get('user_data')['people_access'] == 'a') {
            return true;
        }
        return false;
    }
    private function check_member(): bool
    {
        if (session()->get('user_data')['people_access'] == 'm') {
            return true;
        }
        return false;
    }
    private function check_email($data): bool
    {
        return ($this->userModel->where('people_email', $data)->first()['people_email'] ?? '' == $data) ? true : false;
    }
    // private function check_product($data): bool
    // {
    //     return ($this->productModel->where('product_name', $data['product_name'])->first()['product_name'] ?? '' == $data['product_name']) ? true : false;
    // }
    public function index()
    {
        return redirect()->to(base_url('/'));
    }
    public function buyNow_auth()
    {
        return redirect()->to(base_url(get_page()));
    }
    public function login_auth()
    {
        $validation = new \App\Validation\LoginValidate;
        if (!$this->validate($validation->loginValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('/login'));
        }
        $data = [
            'people_email' => $this->request->getPost('email'),
            'people_password' => $this->request->getPost('password') ?? '',
        ];
        if (!$this->check_email($data['people_email'])) {
            session()->setFlashdata('data_form', ['message' => 'Email atau Password salah!']);
            return redirect()->to(base_url('/login'));
        }
        $userData = $this->userModel->where('people_email', $data['people_email'])->first();
        if (!password_verify($data['people_password'], $userData['people_password'])) {
            session()->setFlashdata('data_form', ['message' => 'Email atau Password salah!']);
            return redirect()->to(base_url('/login'));
        } else {
            set_user($userData);
            set_login(true);
            log_status();
            return redirect()->to(base_url('/'));
        }
    }
    //User
    public function regist_auth()
    {
        $validation = new \App\Validation\RegisterValidate;
        if (!$this->validate($validation->registerValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors()]);
            return redirect()->to(base_url('register'));
        }
        $data = [
            'people_name' => $this->request->getPost('fullname'),
            'people_city' => $this->request->getPost('city'),
            'people_phone' => $this->request->getPost('phone'),
            'people_email' => $this->request->getPost('email'),
            'people_password' => password_hash($this->request->getPost('password') ?? '', PASSWORD_DEFAULT),
            'people_points' => 0,
            'people_access' => 'm',
        ];
        if ($this->check_email(['people_email' => $data['people_email']])) {
            session()->setFlashdata('data_form', ['message' => 'User sudah Terdaftar silahkan untuk melakukan login']);
            return redirect()->to(base_url('/login'));
        }
        $this->userModel->insert($data);
        return redirect()->to(base_url('/'));
    }
    public function forgot_auth()
    {
        $validation = new \App\Validation\ForgotPasswordValidate;
        if (!$this->validate($validation->forgotPasswordValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('forgot'));
        }
        $data = [
            'people_city' => $this->request->getPost('city'),
            'people_phone' => $this->request->getPost('phone'),
            'people_email' => $this->request->getPost('email'),
        ];
        if (!$this->check_email($data['people_email'])) {
            session()->setFlashdata('data_form', ['message' => 'Data tidak ditemukan']);
            return redirect()->to(base_url('forgot'));
        }
        $userData = $this->userModel->where('people_email', $data['people_email'])->first();
        if (!$userData[$data['people_city']]) {
            session()->setFlashdata('data_form', ['message' => 'Data tidak ditemukan']);
            return redirect()->to(base_url('forgot'));
        }
        if (!$userData[$data['people_phone']]) {
            session()->setFlashdata('data_form', ['message' => 'Data tidak ditemukan']);
            return redirect()->to(base_url('forgot'));
        }
        session()->set('forgot_data', $userData);
        return view('user/forgot_auth');
    }
    public function forgot_auth_reset()
    {
        $userData = session()->get('forgot_data');
        $validation = new \App\Validation\ForgotAuthValidate;
        if (!session()->get('forgot_data')) {
            return redirect()->to(base_url('forgot'));
        }
        if (!$this->validate($validation->forgotAuthValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return view('user/forgot_auth');
        }
        session()->get('forgot_data')['password'] = password_hash($this->request->getPost('password') ?? '', PASSWORD_DEFAULT);
        $this->userModel->update($userData['id'], $userData);
        session()->setFlashdata('data_form', ['message' => 'Password berhasil diperbaharui, silahkan melakukan login']);
        session()->set('forgot_data', []);
        return redirect()->to(base_url('/'));
    }
    //Member
    //CART
    public function cart_add_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        $data = [
            'cart_product_id' => $this->request->getPost('product_id'),
            'cart_people_id' => session()->get('user_data')['people_id'],
            'cart_qty' => '1',
        ];
        $this->cartModel->insert($data);
        session()->setFlashdata('message', 'Produk berhasil ditambahkan');
        return redirect()->to(base_url('/products'));
    }
    public function cart_update_add_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (session()->get('user_data')['people_access'] == 'm' || session()->get('user_data')['people_access'] == 'a') {
        } else {
            return redirect()->to(base_url('/login'));
        }
        $cart_id = (string) $this
            ->request
            ->getPost('cart_id');
        $cart_data = $this
            ->cartModel
            ->where('cart_id', $cart_id)->findAll();
        $cart_qty = (int) $this
            ->cartModel
            ->where('cart_id', $cart_id)
            ->first()['cart_qty'];
        $new_cart_data = $cart_data['0'];
        $new_cart_data['cart_qty'] = (string) ($cart_qty + 1);
        unset($new_cart_data['cart_id']);
        $this
            ->cartModel
            ->where('cart_id', $cart_data['0']['cart_id'])
            ->set($new_cart_data)
            ->update();
        return redirect()->to(base_url('/m/cart'));
    }
    public function cart_update_sub_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (session()->get('user_data')['people_access'] == 'm' || session()->get('user_data')['people_access'] == 'a') {
        } else {
            return redirect()->to(base_url('/login'));
        }
        $cart_id = (string) $this
            ->request
            ->getPost('cart_id');
        $cart_data = $this
            ->cartModel
            ->where('cart_id', $cart_id)->findAll();
        $cart_qty = (int) $this
            ->cartModel
            ->where('cart_id', $cart_id)
            ->first()['cart_qty'];
        $new_cart_data = $cart_data['0'];
        $new_cart_data['cart_qty'] = (string) ($cart_qty - 1);
        unset($new_cart_data['cart_id']);
        $this
            ->cartModel
            ->where('cart_id', $cart_data['0']['cart_id'])
            ->set($new_cart_data)
            ->update();
        return redirect()->to(base_url('/m/cart'));
    }
    public function cart_delete_auth()
    {
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        $cart_id = $this->request->getPost('cart_id');
        $this->cartModel->delete($cart_id);
        return redirect()->to(base_url('/m/cart'));
    }

    public function points_auth()
    {
        return view('');
    }
    //Admin
    //STOCK
    public function stock_toggle()
    {
        if (!$this->check_admin()) {
            return redirect()->to(base_url('/login'));
        }
        $stock_id = $this->request->getPost('stock_id');
        $stock_status = $this->request->getPost('stock_status');
        try {
            $stock_data = $this->stockModel->find($stock_id);
            unset($stock_data['stock_id']);
            if ($stock_status == 'i') {
                $stock_data['stock_active'] = 'a';
                $this
                    ->stockModel
                    ->where('stock_id', $stock_id)
                    ->set($stock_data)
                    ->update();
            } else if ($stock_status == 'a') {
                $stock_data['stock_active'] = 'i';
                $this
                    ->stockModel
                    ->where('stock_id', $stock_id)
                    ->set($stock_data)
                    ->update();
            }
        } catch (\Throwable $th) {
            session()->setFlashdata('err', $th);
        }
        return redirect()->to(base_url('/a/stocks'));
    }
    public function stock_add_auth()
    {
        $validation = new \App\Validation\ProductValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->productValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/stock'));
        }
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_qty' => $this->request->getPost('product_qty'),
            'product_min_qty' => $this->request->getPost('product_min_qty'),
            'product_name' => $this->request->getPost('product_max_qty'),
            'product_name' => $this->request->getPost('product_price_per_qty'),
            'imageUrl' => $this->request->getPost('imageUrl'),
        ];
        $stock_model = $this->productModel->insert($data);
        return redirect()->to(base_url('/a/stocks'));
    }

    //Payment
    public function pay_auth()
    {
        return view('');
    }
    public function stock_edit_auth()
    {
        $data_request = [
            'stock_id' => $this->request->getPost('stock_id'),
            'product_id' => $this->request->getPost('product_id'),
            'product_name' => $this->request->getPost('product_name'),
            'product_qty' => $this->request->getPost('product_qty'),
            'product_min_qty' => $this->request->getPost('product_min_qty'),
            'product_name' => $this->request->getPost('product_max_qty'),
            'product_name' => $this->request->getPost('product_price_per_qty'),
            'imageUrl' => $this->request->getPost('imageUrl'),
        ];
        isset($data_request['stock_id']);
        $this
            ->productModel
            ->where('product_id', $data_request['product_id'])
            ->set($data_request)
            ->update();
        return redirect()->to(base_url('a/stocks'));
    }
    public function member_edit_auth()
    {
        $data_stock = $this->request->getPost('stock_id');
        $data_request = [
            'people_id' => $this->request->getPost('people_id'),
            'people_name' => $this->request->getPost('people_name'),
            'people_email' => $this->request->getPost('people_email'),
            'people_phone' => $this->request->getPost('people_phone'),
            'people_city' => $this->request->getPost('people_city'),
            'people_access' => $this->request->getPost('people_access'),
        ];
        // dd($data_stock); 
        return redirect()->to(base_url('/a/members'));
    }
    public function promo_edit_auth()
    {
        $data_stock = $this->request->getPost('stock_id');
        dd($data_stock);
        return view('admin/edit_promo', [
            'title' => 'Edit',
            'data_edit' => [],
        ]);
    }
}
