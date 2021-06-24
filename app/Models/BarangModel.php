<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_barang', 'nama_barang', 'harga_beli', 'harga_jual', 'stok'];
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
