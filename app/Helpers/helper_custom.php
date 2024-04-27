<?php

use CodeIgniter\HTTP\RedirectResponse;

function logged_check()
{
    if (!session()->get('user_data')) {
        session()->setFlashdata('log_message', 'Harap lakukan login terlebih dahulu');
        redirect()->to(base_url('l_auth'));
    }
    if (session()->get('user_data')['access'] == 'm') {
        session()->setFlashdata('log_message', 'Selamat datang kembali');
        redirect()->to(base_url(session()->getFlashdata('page')));
    }
    if (session()->get('user_data')['access'] == 'a') {
        session()->setFlashdata('log_message', 'Selamat datang');
        redirect()->to(base_url('a/dashboard'));
    }
    session()->setFlashdata('log_message', 'Error Occured');
    redirect()->to(base_url(session()->getFlashdata('page')));
}
function set_login(bool $data = null)
{
    session()->setFlashdata('login', $data);
    return session()->getFlashdata('login');
}
function log_status()
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
function set_user(array $data = null): string
{
    session()->setFlashdata('user_data', $data);
    return '';
}
