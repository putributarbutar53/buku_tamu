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

    public function getAllDataWithRelation()
    {
        $builder = $this->db->table($this->table);
        $builder->select('pengunjung.*, db_data.nama, db_data.alamat, db_data.kecamatan');
        $builder->join('db_data', 'db_data.nik = pengunjung.nik', 'left'); // Menggunakan LEFT JOIN
        $builder->orderBy('pengunjung.created_at', 'DESC'); // Mengurutkan berdasarkan created_at secara menurun
        return $builder->get()->getResultArray();
    }
}
