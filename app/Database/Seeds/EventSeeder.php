<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $data = [

                'name' => 'Venice Bridge',
                'location' => 'Italy',
                'about' => 'Enjoy the best river city view in Italy',
                'Time' => 'Everyday 7AM - 12AM',
                'category'    => 'nature',
                'price'    => 0,
                'quota'    => 500,
                'photo' => 'deals-02.jpg',
        ];
        $this->db->table('events')->insert($data); 
    }
}
