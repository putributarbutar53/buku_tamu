<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'db_data'; // Nama tabel
    protected $primaryKey = 'id'; // Nama kolom primary key

    protected $allowedFields = [
        'provinsi', 'kabupaten', 'kecamatan', 'kode_kel', 'kelurahan', 'tps',
        'nik', 'nkk', 'nama', 'tempat_lahir', 'tgl_lahir', 'jk',
        'status_kawin', 'difabel', 'alamat', 'rt', 'rw'
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
