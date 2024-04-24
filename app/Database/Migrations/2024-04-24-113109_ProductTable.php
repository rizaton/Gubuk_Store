<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id' => [
                'type' => 'INT',
                'contraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true
            ],
            'product_qty' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'product_min_qty' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 20
            ],
            'product_max_qty' => [
                'type' => 'INT',
                'constraint' => 3,
                'default' => 40
            ],
            'product_price_per_qty' => [
                'type' => 'INT',
                'constraint' => 10
            ]
        ]);
        $this->forge->addPrimaryKey('product_id');
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
