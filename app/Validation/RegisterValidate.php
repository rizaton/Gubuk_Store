<?php

namespace App\Validation;

class RegisterValidate
{
    public function registerValidate(): array
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
            'second_email' => [
                'label' => 'Second Email',
                'rules' => 'required|trim|valid_email',
                'errors' => [
                    'required' => 'Email Required',
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
            'second_password' => [
                'label' => 'Second Password',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Required field!',
                ]
            ],
        ];
    }
}
