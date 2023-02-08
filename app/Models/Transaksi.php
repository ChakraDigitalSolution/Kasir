<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{
    protected $table            = 'transaksi';
    protected $returnType       = 'array';
    protected $useTimestamps = true;
    protected $allowedFields    = ['tanggal', 'total_bayar', 'uang', 'kembalian', 'nomor_invoice'];
}
