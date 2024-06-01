<?php

namespace App\Validation;

class LoginValidate
{
    public function loginValidate(): array
    {
        return [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email required!',
                    'valid_email' => 'Please input valid email!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password required!',
                ]
            ],
        ];
    }
}
