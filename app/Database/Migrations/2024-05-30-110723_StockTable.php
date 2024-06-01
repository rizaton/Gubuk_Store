<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StockTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'stock_id' => [
                'type' => 'INT',
                'contraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'stock_product_id' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'stock_active' => [
                'type' => 'CHAR',
                'constraint' => 1,
            ],
        ]);
        $this->forge->addPrimaryKey('stock_id');
        $this->forge->createTable('stock');
    }

    public function down()
    {
        $this->forge->dropTable('stock');
    }
}
