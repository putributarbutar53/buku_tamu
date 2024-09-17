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
    public function index()
    {
        $today = date('Y-m-d');
        $startOfWeek = date('Y-m-d', strtotime('monday this week'));
        $startOfYear = date('Y-01-01');

        // Menghitung jumlah pengunjung
        $totalVisitors = $this->pengunjung->countAllResults();
        $dailyVisitors = $this->pengunjung->where('DATE(created_at)', $today)->countAllResults();
        $weeklyVisitors = $this->pengunjung
            ->where('created_at >=', $startOfWeek . ' 00:00:00')
            ->where('created_at <=', $today . ' 23:59:59')
            ->countAllResults();
        $yearlyVisitors = $this->pengunjung
            ->where('created_at >=', $startOfYear . ' 00:00:00')
            ->where('created_at <=', $today . ' 23:59:59')
            ->countAllResults();

        // Mengirim data ke tampilan
        $data = [
            'totalVisitors' => $totalVisitors,
            'dailyVisitors' => $dailyVisitors,
            'weeklyVisitors' => $weeklyVisitors,
            'yearlyVisitors' => $yearlyVisitors,
        ];

        return view('web/index', $data);
    }


    public function submit()
    {

        $nik = $this->request->getPost('nik');
        $tujuan = $this->request->getPost('tujuan');
        $kepentingan = $this->request->getPost('kepentingan');

        // $nik = esc($nik);
        // $tujuan = esc($tujuan);
        // $kepentingan = esc($kepentingan);
        // Data yang akan disimpan ke tb_pengunjung
        $data = [
            'nik'        => $nik,
            'tujuan'     => $tujuan,
            'kepentingan' => $kepentingan,
        ];

        $existingData = $this->model->getDataByNik($nik);

        if ($this->pengunjung->insert($data)) {
            $message = $existingData ? 'Data sudah ada di db_data dan berhasil disimpan di tb_pengunjung!' : 'Data berhasil disimpan di tb_pengunjung!';
            $success = true;
            $nama = $existingData ? $existingData['nama'] : null;
        } else {
            $message = 'Terjadi kesalahan saat menyimpan data.';
            $success = false;
            $nama = null;
        }

        return $this->response->setJSON([
            'success' => $success,
            'message' => $message,
            'nama' => $nama
        ]);
    }
}
