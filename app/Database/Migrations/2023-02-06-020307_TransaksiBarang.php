<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiBarang extends Migration
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
            'id_transaksi' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],
            'nama' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'total_perbarang' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi_barang');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi__barang');
    }
}
