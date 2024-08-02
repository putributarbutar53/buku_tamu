<?php

namespace App\Models;

use CodeIgniter\Model;

class PengunjungModel extends Model
{
    protected $table = 'pengunjung'; // Nama tabel
    protected $primaryKey = 'id'; // Nama kolom primary key

    protected $allowedFields = [
        'nik', 'tujuan', 'kepentingan', 'created_at'
    ];

    protected $returnType = 'array'; // Tipe data yang dikembalikan oleh query

    // Fungsi untuk mencari data berdasarkan NIK
    public function getDataByNik($nik)
    {
        return $this->where('nik', $nik)->first();
    }

    // Fungsi untuk mendapatkan semua data
    public function getAllData()
    {
        return $this->findAll();
    }
}
