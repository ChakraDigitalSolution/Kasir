<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimeStamp extends Migration
{
    public function up()
    {
        $this->forge->addColumn('gudang', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('gudang', ['created_at', 'updated_at']);
    }
}
