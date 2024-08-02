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

    public function checkNik()
    {

        $nik = $this->request->getPost('nik');

        // Mengambil data berdasarkan NIK
        $data = $this->model->getDataByNik($nik);


        if ($data) {
            // Jika data ditemukan
            return $this->response->setJSON([
                'success' => true,
                'nama' => $data['nama']
            ]);
        } else {
            // Jika data tidak ditemukan
            return $this->response->setJSON([
                'success' => false
            ]);
        }
    }

    public function submit()
    {

        $data = [
            'nik'        => $this->request->getPost('nik'),
            'tujuan'     => $this->request->getPost('tujuan'),
            'kepentingan' => $this->request->getPost('kepentingan'),
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
