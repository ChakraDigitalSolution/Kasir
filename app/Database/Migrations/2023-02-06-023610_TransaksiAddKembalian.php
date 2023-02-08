<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiAddKembalian extends Migration
{
    public function up()
    {
        $this->forge->addColumn('transaksi', [
            'kembalian' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('transaksi', 'kembalian');
    }
}
