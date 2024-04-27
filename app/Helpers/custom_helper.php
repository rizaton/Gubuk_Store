<?php

use CodeIgniter\HTTP\RedirectResponse;

function logged_check(string $view = null, string $title = null)
{
    if (!session()->getFlashdata('user_data')) {
        session()->setFlashdata('log_message', 'Harap lakukan login terlebih dahulu');
        return redirect()->to(base_url('l_auth'));
    }
    if (session()->getFlashdata('user_data')['access'] == 'm') {
        session()->setFlashdata('log_message', 'Selamat datang kembali');
        return view('member/' . $view, [
            'title' => $title
        ]);
    }
    if (session()->getFlashdata('user_data')['access'] == 'a') {
        session()->setFlashdata('log_message', 'Selamat datang');
        return view('admin/' . $view, [
            'title' => $title
        ]);
    }
    session()->setFlashdata('log_message', 'Error Occured');
    return redirect()->to(base_url(session()->getFlashdata('page')));
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
// function logout(): RedirectResponse
// {
//     session()->remove('login');
//     return redirect()->to(base_url(session()->getFlashdata('page')));
// }
function set_user(array $data = null): string
{
    session()->setFlashdata('user_data', $data);
    return '';
}
function testing(): string
{
    return '';
}
