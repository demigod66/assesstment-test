<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTagihanTable extends Migration
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
            'nama_mahasiswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'status_tagihan' => [
                'type' => 'integer',
                'constraint' => '30',
                'default' => '0'
            ],
            'total_tagihan' => [
                'type' => 'integer',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tagihan');
    }

    public function down()
    {
        //
    }
}
