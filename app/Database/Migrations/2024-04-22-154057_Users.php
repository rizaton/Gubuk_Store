<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'province' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'points' => [
                'type' => 'INT',
                'constraint' => 7
            ],
            'access' => [
                'type' => 'CHAR',
                'constraint' => 2
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
