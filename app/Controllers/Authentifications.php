<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\ResponseInterface;

helper('custom');

class Authentifications extends BaseController
{
    private $userModel;
    private $productModel;
    private $userForgot;
    public function __construct()
    {
        $this->userModel = new \App\Models\PeopleModel();
        $this->productModel = new \App\Models\ProductsModel();
    }
    protected $helpers = ['url', 'form'];
    private function check_admin(): bool
    {
        if (session()->get('user_data')['access'] == 'a') {
            return true;
        }
        return false;
    }
    private function check_member(): bool
    {
        if (session()->get('user_data')['access'] == 'm') {
            return true;
        }
        return false;
    }
    private function check_email($data): bool
    {
        return ($this->userModel->where('people_email', $data)->first()['people_email'] ?? '' == $data) ? true : false;
    }
    private function check_product($data): bool
    {
        return ($this->productModel->where('product_name', $data['product_name'])->first()['product_name'] ?? '' == $data['product_name']) ? true : false;
    }
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
            return redirect()->to(base_url(get_page()));
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
        return redirect()->to(base_url(get_page()));
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
        $this->userForgot = $userData;
        return view('user/forgot_auth');
    }
    public function forgot_auth_reset()
    {
        $validation = new \App\Validation\ForgotAuthValidate;
        if (!$this->userForgot) {
            return redirect()->to(base_url('forgot'));
        }
        if (!$this->validate($validation->forgotAuthValidate())) {
            $this->userForgot = $this->userForgot;
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return view('user/forgot_auth');
        }
        $this->userForgot['password'] = password_hash($this->request->getPost('password') ?? '', PASSWORD_DEFAULT);
        $this->userModel->update($this->userForgot['id'], $this->userForgot);
        session()->setFlashdata('data_form', ['message' => 'Password berhasil diperbaharui, silahkan melakukan login']);
        $this->userForgot = [];
        return redirect()->to(base_url());
    }
    //Member
    //CART
    public function cart_get_auth(IncomingRequest $request)
    {
        if ($request->isAJAX()) {
            return redirect()->to(base_url('/'));
        }
        if (!$this->check_member()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        $cart_model = new \App\Models\CartModel;
        $responseData = [
            'status' => 'success',
            'productCarts' => $cart_model->join('product', 'cart_product_id = product.product_id')->findAll(),
        ];
        return $this->response->setJSON($responseData);
    }
    public function cart_new_auth(IncomingRequest $request)
    {
        if ($request->isAJAX()) {
            return redirect()->to(base_url());
        }
        // if (!$this->check_member()) {
        //     return redirect()->to(base_url(session()->get('page')));
        // }
        $data = [
            'product_id' => $this->request->getPost('product_id'),
            'name' => get_user()['id'],
        ];
        $cart_model = new \App\Models\CartModel;
        $cart_model = $cart_model->insert(['data' => $data]);
        $responseData = [
            'status' => 'success',
        ];
        $response = service('response');
        return $response->setJSON($responseData);
    }
    public function cart_add_auth()
    {
        // if (!$this->check_member()) {
        //     return redirect()->to(base_url(session()->get('page')));
        // }
        $cart_model = new \App\Models\CartModel;

        if ($this->request->isAJAX()) {
            $query = $this->request->getPost('cart_id');
            $cart_data = $cart_model->find($query);
            $data = [
                'cart_qty' => (((int) $cart_data['cart_qty']) + 1),
            ];
            try {
                $cart_model->update($query, $data);
                $err = '';
            } catch (\Throwable $th) {
                $err = $th;
            }
            $cart_new_data = $cart_model->find($query);
            $responseData = [
                'status' => 'success',
                'body' => $cart_new_data,
                'err' => $err,
            ];
            $response = service('response');

            return $response->setJSON($responseData);

            // $cart_data = $cart_model->find($query);
            // $cart_model->update($query, ['cart_qty' => ($cart_data['cart_qty'] + 1)]);
            // $cart_newData = $cart_model->find($query);
            // $cart_productData = $cart_model->join('product', 'cart_product_id = product.product_id')->find(1);
            // $body = [
            //     'id' => $query,
            //     'qty' => $cart_newData['cart_qty'],
            //     'total' => number_format(($cart_productData['product_price_per_qty'] * $cart_newData['cart_qty'])),
            // ];
            // $responseData = [
            //     'status' => 'success',
            //     'body' => $body,
            // ];
            // $response = service('response');
            // return $response->setJSON($responseData);
        }
    }
    public function cart_sub_auth()
    {
        // if (!$this->check_member()) {
        //     return redirect()->to(base_url(session()->get('page')));
        // }
        if ($this->request->isAJAX()) {
            $query = $this->request->getPost('cart_id');
            $cart_model = new \App\Models\CartModel;

            $cart_data = $cart_model->find($query);

            $cart_model->update($query, ['cart_qty' => ($cart_data['cart_qty'] - 1)]);

            $cart_newData = $cart_model->find($query);
            $cart_productData = $cart_model->join('product', 'cart_product_id = product.product_id')->find(1);
            $body = [
                'id' => $query,
                'qty' => $cart_newData['cart_qty'],
                'total' => number_format(($cart_productData['product_price_per_qty'] * $cart_newData['cart_qty'])),
            ];
            $responseData = [
                'status' => 'success',
                'body' => $body,
            ];
            $response = service('response');
            return $response->setJSON($responseData);
        }
    }
    public function cart_update_auth()
    {
        // if (!$this->check_member()) {
        //     return redirect()->to(base_url(session()->get('page')));
        // }
        $data = [
            'cart_id' => $this->request->getPost('cart_id'),
            'cart_product_id' => $this->request->getPost('product_id'),
            'name' => get_user()['id'],
        ];
        $cart_model = new \App\Models\CartModel;
        $cart_model = $cart_model->update(['key' => $data['cart_id']], $data);
        return view('');
    }
    public function cart_delete_auth()
    {
        // if (!$this->check_member()) {
        //     return redirect()->to(base_url(session()->get('page')));
        // }
        $data = [
            'cart_id' => $this->request->getPost('cart_id'),
        ];
        $cart_model = new \App\Models\CartModel;
        $cart_model = $cart_model->delete($data);
        return view('');
    }

    public function points_auth()
    {
        return view('');
    }
    //Admin
    //STOCK
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
            'product_name' => $this->request->getPost('name'),
            'product_qty' => $this->request->getPost('qty'),
            'product_min_qty' => $this->request->getPost('min_qty'),
            'product_max_qty' => $this->request->getPost('max_qty'),
            'product_price_per_qty' => $this->request->getPost('price'),
        ];
        $stock_model = new \App\Models\ProductsModel;
        $stock_model = $stock_model->insert($data);
        return view('');
    }
    public function stock_update_auth()
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
            'id' => $this->request->getPost('id'),
            'name' => $this->request->getPost('name'),
            'qty' => $this->request->getPost('qty'),
            'min_qty' => $this->request->getPost('min_qty'),
            'max_qty' => $this->request->getPost('max_qty'),
            'price' => $this->request->getPost('price'),
        ];
        $stock_model = new \App\Models\ProductsModel();
        $stock_model = $stock_model->update(['id' => $data['id']], $data);
        return view('');
    }
    public function stock_delete_auth()
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
            'id' => $this->request->getPost('id'),
        ];
        $stock_model = new \App\Models\ProductsModel();
        $stock_model = $stock_model->delete(['key' => $data]);
        return view('');
    }

    //MEMBER MANAGEMENT
    public function member_add_auth()
    {
        $validation = new \App\Validation\MembersValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->membersValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/members'));
        }
        $data = [
            'id' => $this->request->getPost('id'),
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'city' => $this->request->getPost('city'),
            'province' => $this->request->getPost('province'),
            'points' => $this->request->getPost('points'),
            'access' => $this->request->getPost('access'),
        ];
        $user_model = new \App\Models\UserManagementModel();
        $user_model = $user_model->insert(['key' => $data]);
        return view('');
    }
    public function member_update_auth()
    {
        $validation = new \App\Validation\MembersValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->membersValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/members'));
        }
        $data = [
            'id' => $this->request->getPost('id'),
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'city' => $this->request->getPost('city'),
            'province' => $this->request->getPost('province'),
            'points' => $this->request->getPost('points'),
            'access' => $this->request->getPost('access'),
        ];
        $user_model = new \App\Models\UserManagementModel();
        $user_model = $user_model->update(['id' => $data['id']], $data);
        return view('');
    }
    public function member_delete_auth()
    {
        $validation = new \App\Validation\MembersValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->membersValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/members'));
        }
        $data = [
            'id' => $this->request->getPost('id'),
        ];
        $user_model = new \App\Models\UserManagementModel();
        $user_model = $user_model->delete($data);
        return view('');
    }

    //PROMO
    public function promo_add_auth()
    {
        $validation = new \App\Validation\PromoValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->promoValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/promo'));
        }
        $data = [
            'name' => $this->request->getPost('name'),
            'sold' => $this->request->getPost('sold'),
            'active' => $this->request->getPost('active'),
            'price' => $this->request->getPost('price'),
        ];
        $promo_model = new \App\Models\PromoModel;
        $promo_model = $promo_model->insert($data);
        return view('');
    }
    public function promo_update_auth()
    {
        $validation = new \App\Validation\PromoValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->promoValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/promo'));
        }
        $data = [
            'id' => $this->request->getPost('promo_id'),
            'name' => $this->request->getPost('name'),
            'sold' => $this->request->getPost('sold'),
            'active' => $this->request->getPost('active'),
            'price' => $this->request->getPost('price'),
        ];
        $promo_model = new \App\Models\PromoModel;
        $promo_model = $promo_model->update(['id' => $data['id']], $data);
        return view('');
    }
    public function promo_delete_auth()
    {
        $validation = new \App\Validation\PromoValidate;
        if (!$this->check_admin()) {
            return redirect()->to(base_url(session()->get('page')));
        }
        if (!$this->validate($validation->promoValidate())) {
            session()->setFlashdata('data_form', ['validation' => validation_list_errors(), 'message' => null]);
            return redirect()->to(base_url('a/promo'));
        }
        $data = [
            'id' => $this->request->getPost('promo_id'),
        ];
        $promo_model = new \App\Models\PromoModel;
        $promo_model = $promo_model->delete($data);
        return view('');
    }

    //Payment
    public function pay_auth()
    {
        return view('');
    }
}
