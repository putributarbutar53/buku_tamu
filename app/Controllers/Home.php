<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\PengunjungModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    var $model, $pengunjung, $validation;
    use ResponseTrait;
    function __construct()
    {
        $this->model = new DataModel();
        $this->pengunjung = new PengunjungModel();
        $this->validation = \Config\Services::validation();
        helper("cookie");
        helper("global_fungsi_helper");
    }
    public function index(): string
    {
        return view('web/index');
    }

    public function submit()
    {
        $nik = $this->request->getPost('nik');
        $tujuan = $this->request->getPost('tujuan');
        $kepentingan = $this->request->getPost('kepentingan');

        // Cek apakah NIK sudah ada di database
        $existingData = $this->model->getDataByNik($nik);

        if ($existingData) {
            // Jika NIK sudah ada, tampilkan nama dan pesan
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Data sudah ada!',
                'nama' => $existingData['nama']
            ]);
        } else {
            // Jika NIK belum ada, simpan data baru
            $data = [
                'nik'        => $nik,
                'tujuan'     => $tujuan,
                'kepentingan' => $kepentingan,
            ];

            if ($this->pengunjung->insert($data)) {
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Data berhasil disimpan!'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat menyimpan data.'
                ]);
            }
        }
    }
}
