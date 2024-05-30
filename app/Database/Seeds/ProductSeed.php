<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
// This file need to be add some datas from JSON
class ProductSeed extends Seeder
{
    public function run()
    {
        // // $file = file_get_contents('daging_seafood.json');
        // $this->db->table('product')->truncate();
        // $products = json_decode(file_get_contents('daging_seafood.json'));
        // foreach ($products as $row) {
        //     $data = [
        //         'product_name' => $row->name,
        //         'product_qty' => rand(20, 40),
        //         'product_price_per_qty' => $row->priceInt,
        //         'imageUrl' => $row->imageUrl,
        //     ];
        //     $this->db->table('product')->insert($data);
        // }
        // $this->db->table('stocks')->insertBatch($products); // Jika Key dari JSON dan MODEL sama pakai ini
    }
}
