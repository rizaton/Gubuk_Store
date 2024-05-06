<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PeopleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'people_id' => [
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'people_name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'people_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'people_email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'people_password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'people_city' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'people_points' => [
                'type' => 'INT',
                'constraint' => 7,
                'default' => 0
            ],
            'people_access' => [
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => 'm'
            ]
        ]);
        $this->forge->addPrimaryKey('people_id');
        $this->forge->createTable('people');
    }

    public function down()
    {
        $this->forge->dropTable('people');
    }
}
