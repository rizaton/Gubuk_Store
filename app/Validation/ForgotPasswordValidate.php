<?php

namespace App\Validation;

class ForgotPasswordValidate
{
    public function forgotPasswordValidate(): array
    {
        return [
            'city' => [
                'label' => 'City',
                'rules' => 'required',
                'errors' => [
                    'required' => 'City required',
                ]
            ],
            'phone' => [
                'label' => 'Phone',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Phone required',
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
        ];
    }
}
