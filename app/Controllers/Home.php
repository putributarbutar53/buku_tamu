<?php

namespace App\Controllers;

use App\Models\DataModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    var $model, $validation;
    use ResponseTrait;
    function __construct()
    {
        $this->model = new DataModel();
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

        // Mengambil NIK dari request
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
}
