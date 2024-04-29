<?php

namespace App\Validation;

class PromoValidate
{
    public function promoValidate(): array
    {
        return [
            'promo_name' => [
                'label' => 'Promo Name',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Promo Name required',
                ]
            ],
            'qty' => [
                'label' => 'Quantities',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Promo Quantities required',
                ]
            ],
            'min_qty' => [
                'label' => 'Minimum Quantities',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Minimum Promo Quantities required',
                ]
            ],
            'max_qty' => [
                'label' => 'Maximum Quantities',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Maximum Promo Quantities required',
                ]
            ],
            'price' => [
                'label' => 'Price',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Promo Price required',
                ]
            ],
        ];
    }
}
