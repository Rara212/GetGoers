<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Ana',
            'email'    => 'ana@mail.com',
            'password'    => md5("secret"),
        ];

        // Simple Queries
        $this->db->table('admins')->insert($data);

        $data = [
            'name' => 'Kay',
            'email'    => 'kay2@mail.com',
            'password'    => md5("secret123"),
        ];

        // Simple Queries
        $this->db->table('admins')->insert($data);
    }
}
