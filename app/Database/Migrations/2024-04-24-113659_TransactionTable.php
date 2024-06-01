<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaction_id' => [
                'type' => 'INT',
                'contraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'transaction_date' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'transaction_promo' => [
                'type' => 'CHAR',
                'constraint' => 1
            ],
            'transaction_points' => [
                'type' => 'INT',
                'constraint' => 7
            ],
            'transaction_amount' => [
                'type' => 'INT',
                'constraint' => 7
            ],
            'transaction_product_id' => [
                'type' => 'INT',
                'constraint' => 3
            ]
        ]);
        $this->forge->addPrimaryKey('transaction_id');
        $this->forge->createTable('transaction');
    }

    public function down()
    {
        $this->forge->dropTable('transaction');
    }
}
