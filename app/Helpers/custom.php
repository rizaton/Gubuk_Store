<?php

namespace App\Helpers;

use CodeIgniter\HTTP\RedirectResponse;

function logged_check(): RedirectResponse
{
    if (!session()->get('user_data')) {
        session()->setFlashdata('log_message', 'Harap lakukan login terlebih dahulu');
        return redirect()->to(base_url('l_auth'));
    }
    if (session()->get('user_data')['access'] == 'm') {
        session()->setFlashdata('log_message', 'Selamat datang kembali');
        return redirect()->to(base_url(session()->getFlashdata('page')));
    }
    if (session()->get('user_data')['access'] == 'a') {
        session()->setFlashdata('log_message', 'Selamat datang');
        return redirect()->to(base_url('a/dashboard'));
    }
    session()->setFlashdata('log_message', 'Gagal Login');
    return redirect()->to(base_url(session()->getFlashdata('page')));
}
function set_login(bool $data = null)
{
    session()->setFlashdata('login', $data);
    return session()->getFlashdata('login');
}
function log_status(): bool
{
    return session()->get('login');
}
function user_access(): string
{
    return session()->getFlashdata('user_data')['access'];
}
function logout(): RedirectResponse
{
    session()->remove('login');
    return redirect()->to(base_url(session()->getFlashdata('page')));
}