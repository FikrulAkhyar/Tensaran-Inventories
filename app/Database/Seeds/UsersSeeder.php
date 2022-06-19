<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $builder->insertBatch([
            [
                'id_user' => 1,
                'username' => 'admin',
                'password' => 'admin123',
                'role' => 1
            ]
        ]);
    }
}
