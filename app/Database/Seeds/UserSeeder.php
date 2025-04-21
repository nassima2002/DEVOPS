<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'Alice',
                'email' => 'alice@example.com',
            ],
            [
                'name'  => 'Bob',
                'email' => 'bob@example.com',
            ]
        ];

        // Utilise le Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
