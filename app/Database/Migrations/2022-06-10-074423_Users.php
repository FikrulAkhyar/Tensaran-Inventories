<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
            'role' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');

        $seeder = \Config\Database::seeder();
        $seeder->call('UsersSeeder');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
