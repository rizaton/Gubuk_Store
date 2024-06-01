<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StockSeed extends Seeder
{
    public function run()
    {
        $this->db->table('stock')->truncate();
        for ($i = 1; $i < 355; $i++) {
            $data = [
                'stock_product_id' => $i,
                'stock_active' => 'a',
            ];
            $this->db->table('stock')->insert($data);
        }
    }
}
