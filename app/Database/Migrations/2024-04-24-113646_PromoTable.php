<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PromoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'promo_id' => [
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'promo_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'promo_sold' => [
                'type' => 'INT',
                'constraint' => 4
            ],
            'promo_active' => [
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => 'n'
            ],
            'promo_price' => [
                'type' => 'INT',
                'constraint' => 3
            ]
        ]);
        $this->forge->addPrimaryKey('promo_id');
        $this->forge->createTable('promo');
    }

    public function down()
    {
        $this->forge->dropTable('promo');
    }
}
