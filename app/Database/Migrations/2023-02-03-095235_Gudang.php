<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gudang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'harga' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'foto' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('gudang');
    }

    public function down()
    {
        $this->forge->dropTable('gudang');
    }
}
