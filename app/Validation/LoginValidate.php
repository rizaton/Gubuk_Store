<?php

namespace App\Validation;

class LoginValidate
{
    public function loginValidate(): array
    {
        return [
            'name' => [
                'label' => 'Name',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Name required',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
                'errors' => [
                    'required' => 'Email required',
                    'valid_email' => 'Please input valid email',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Required field!',
                ]
            ],
        ];
    }
}
