<?php

namespace App\Helpers;

function loggedCheck()
{
    if (!session()->get('user_data')) {
        return redirect()->to(base_url('l_auth'));
    }
    return session()->get('access');
}

function logout()
{
    session()->remove('login');
    return redirect()->to(base_url(session()->getFlashdata('page')));
}
