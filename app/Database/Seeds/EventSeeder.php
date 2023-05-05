<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $data = [

                'name' => 'Glasgow Lake View',
                'location' => 'United Kingdom',
                'about' => 'Experience the calm lake in the city of Glasgow',
                'Time' => 'Everyday 9AM - 4PM',
                'category'    => 'nature',
                'price'    => 0,
                'quota'    => 2000,
                'photo' => 'deals-01.jpg',
        ];
        $this->db->table('events')->insert($data); 
    }
}
