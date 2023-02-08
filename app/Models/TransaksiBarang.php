<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiBarang extends Model
{
    protected $table            = 'transaksi_barang';
    protected $returnType       = 'array';
    protected $useTimestamps = true;
    protected $allowedFields    = ['id_transaksi', 'nama', 'jumlah', 'total_perbarang'];
}
