<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stocks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'contraint' => 4,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'min_qty' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'max_qty' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 6
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('stocks');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
