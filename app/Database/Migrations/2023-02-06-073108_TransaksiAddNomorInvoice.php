<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiAddNomorInvoice extends Migration
{
    public function up()
    {
        $this->forge->addColumn('transaksi', [
            'nomor_invoice' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('transaksi', 'nomor_invoice');
    }
}
