<?php

namespace App\Validation;

class StockValidate
{
    public function stocksValidate(): array
    {
        return [
            'stock_name' => [
                'label' => 'Stock Name',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Stock required',
                ]
            ],
            'qty' => [
                'label' => 'Quantities',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Quantities required',
                ]
            ],
            'min_qty' => [
                'label' => 'Minimum Quantities',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Minimum Quantities required',
                ]
            ],
            'max_qty' => [
                'label' => 'Maximum Quantities',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Maximum Quantities required',
                ]
            ],
            'price' => [
                'label' => 'Price',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Price required',
                ]
            ],
        ];
    }
}
