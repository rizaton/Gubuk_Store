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
function check_user()
{
    if (!log_status()) {
        session()->setFlashdata('login');
        session()->setFlashdata('user_data', ['access' => 'u']);
        return 'user';
    } else if (!log_status() && user_access() == 'm') {
        return 'member';
    } else if (!log_status() && user_access() == 'a') {
        return 'admin';
    }
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
function set_user(array $data = null)
{
    session()->setFlashdata('user_data', $data);
}
function get_user(): array
{
    return session()->getFlashdata('user_data');
}
function get_page(): string
{
    return session()->getFlashdata('page') ?? 'landing';
}
