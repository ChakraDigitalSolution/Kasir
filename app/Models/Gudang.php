<?php

namespace App\Models;

use CodeIgniter\Model;

class Gudang extends Model
{
    protected $table            = 'gudang';
    protected $returnType       = 'array';
    protected $useTimestamps = true;
    protected $allowedFields    = [
        'nama',
        'stock',
        'harga',
        'deskripsi',
        'foto',
    ];
}
