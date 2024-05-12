<?php

namespace App\Validation;

class RegisterValidate
{
    public function registerValidate(): array
    {
        return [
            'fullname' => [
                'label' => 'Name',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name required',
                ]
            ],
            'city' => [
                'label' => 'Kota',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kota required',
                ]
            ],
            'phone' => [
                'label' => 'Phone',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Telefon required',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email required',
                    'valid_email' => 'Please input valid email',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Required field!',
                ]
            ],
            'reenterpassword' => [
                'label' => 'Second Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Required field!',
                ]
            ],
        ];
    }
}
