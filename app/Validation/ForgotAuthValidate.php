<?php

namespace App\Validation;

class ForgotAuthValidate
{
    public function forgotAuthValidate(): array
    {
        return [
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password required!',
                ]
            ],
            'reenterpassword' => [
                'label' => 'Re enter Password',
                'rules' => 'required|match[password]',
                'errors' => [
                    'required' => 'Re enter Password required!',
                ]
            ],
        ];
    }
}
