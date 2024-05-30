<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
// use Faker\Factory;

class PeopleSeed extends Seeder
{
    public function run()
    {
        // $data = json_decode(file_get_contents(''));
        // $this->db->table('people')->truncate();
        // for ($i = 0; $i < 2; $i++) {
        //     $faker = \Faker\Factory::create('id_ID');
        //     // $faker = \Faker\Factory::create();
        //     $data = [
        //         'people_name' => $faker->name(),
        //         'people_phone' => $faker->phoneNumber(),
        //         'people_email' => $faker->email(),
        //         'people_password' => $faker->password(8, 100),
        //         'people_city' => $faker->city()
        //     ];
        //     $this->db->table('people')->insert($data);
        // }
        $data = [
            'people_name' => 'Tony Afriza',
            'people_phone' => '087808270452',
            'people_email' => 'tonyafriza@gmail.com',
            'people_password' => '$2y$10$mYkH7wUmAZvD4YKWaCLLtOp6GgLlDanp3p/wVqiThAMDbiLYIfmwG',
            'people_city' => 'Tangerang',
            'people_points' =>  0,
            'people_access' => 'a'
        ];
        $this->db->table('people')->insert($data);
    }
}
