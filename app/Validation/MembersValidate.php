<?php

namespace App\Validation;

class MembersValidate
{
    public function membersValidate(): array
    {
        return [
            'member_id' => [
                'label' => 'Member ID',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'ID required',
                ]
            ],
            'name' => [
                'label' => 'Member name',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Name required',
                ]
            ],
            'phone' => [
                'label' => 'Member phone',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Phone required',
                ]
            ],
            'city' => [
                'label' => 'Member city',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'City required',
                ]
            ],
            'province' => [
                'label' => 'Member province',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Province required',
                ]
            ],
            'points' => [
                'label' => 'Member points',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Points required',
                ]
            ],
            'access' => [
                'label' => 'Member access',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Access required',
                ]
            ],

        ];
    }
}
