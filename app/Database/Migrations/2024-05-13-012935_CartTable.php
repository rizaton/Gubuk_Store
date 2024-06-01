<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cart_id' => [
                'type' => 'INT',
                'contraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'cart_people_id' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'cart_product_id' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'cart_qty' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
        ]);
        $this->forge->addPrimaryKey('cart_id');
        $this->forge->createTable('cart');
    }

    public function down()
    {
        $this->forge->dropTable('cart');
    }
}
