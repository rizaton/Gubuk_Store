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
        for ($i=0; $i < 100; $i++) { 
            // $faker = \Faker\Factory::create('id_ID');
            $faker = \Faker\Factory::create('ja_JP');
            $data = [
                'people_name' => $faker->name(),
                'people_phone' => $faker->phoneNumber(),
                'people_email' => $faker->email(),
                'people_password' => $faker->password(8, 100),
                'people_city' => $faker->city()
            ];
            $this->db->table('people')->insert($data);
        }
    }
}
