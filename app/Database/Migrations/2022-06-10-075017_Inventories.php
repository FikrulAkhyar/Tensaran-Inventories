<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_inventory' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'code' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
            'amount' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'year' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'condition' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'price' => [
                'type' => 'INT',
            ],
            'source' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'note' => [
                'type'       => 'TEXT',
                'null' => true,
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_inventory', true);
        $this->forge->createTable('inventories');

        $seeder = \Config\Database::seeder();
        $seeder->call('InventoriesSeeder');
    }

    public function down()
    {
        $this->forge->dropTable('inventories');
    }
}
