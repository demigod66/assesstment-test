<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createuser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'role' => [
                'type' => 'text',
                'null' => true
            ],
            'phone_no' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
