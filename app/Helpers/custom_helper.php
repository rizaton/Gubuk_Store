<?php

use CodeIgniter\HTTP\RedirectResponse;

function logged_check(string $view = null, string $title = null)
{
    if (!session()->get('user_data')) {
        session()->set('log_message', 'Harap lakukan login terlebih dahulu');
        return redirect()->to(base_url('l_auth'));
    }
    if (session()->get('user_data')['access'] == 'm') {
        session()->set('log_message', 'Selamat datang kembali');
        return view('member/' . $view, [
            'title' => $title
        ]);
    }
    if (session()->get('user_data')['access'] == 'a') {
        session()->set('log_message', 'Selamat datang');
        return view('admin/' . $view, [
            'title' => $title
        ]);
    }
    session()->set('log_message', 'Error Occured');
    return redirect()->to(base_url(session()->get('page')));
}
function check_user()
{
    if (!log_status()) {
        session()->set('login');
        session()->set('user_data', ['access' => 'u']);
        return 'user';
    }
    if (log_status() && user_access() == 'm') {
        return 'member';
    }
    if (log_status() && user_access() == 'a') {
        return 'admin';
    }
}
function set_login(bool $data = null)
{
    session()->set('login', $data);
    return session()->get('login');
}
function log_status(): bool
{
    return session()->get('login');
}
function user_access(): string
{
    return session()->get('user_data')['people_access'];
}
function set_user(array $data = null)
{
    session()->set('user_data', $data);
}
function get_user(): array
{
    return session()->get('user_data');
}
function get_page(): string
{
    return session()->get('page') ?? '/';
}
