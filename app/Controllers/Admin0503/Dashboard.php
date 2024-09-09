<?php

namespace App\Controllers\Admin0503;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PengunjungModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\DiskusiModel;
use CodeIgniter\Config\Config;

class Dashboard extends BaseController
{
    use ResponseTrait;
    var $pengunjung, $model, $skt;
    function __construct()
    {
        $this->model = new AdminModel();
        $this->pengunjung = new PengunjungModel();
    }
    public function index()
    {
        $today = date('Y-m-d');
        $startOfWeek = date('Y-m-d', strtotime('monday this week'));
        $startOfMonth = date('Y-m-01');
        $startOfYear = date('Y-01-01');

        $totalVisitors = $this->pengunjung->countAllResults();
        $dailyVisitors = $this->pengunjung->where('DATE(created_at)', $today)->countAllResults();
        $weeklyVisitors = $this->pengunjung->where('DATE(created_at) >=', $startOfWeek)->countAllResults();
        $monthlyVisitors = $this->pengunjung->where('DATE(created_at) >=', $startOfMonth)->countAllResults();
        $yearlyVisitors = $this->pengunjung->where('DATE(created_at) >=', $startOfYear)->countAllResults();

        $tujuanCounts = [
            'kepalaDinas' => $this->pengunjung->where('tujuan', 'Kepala Dinas')->countAllResults(),
            'sekretaris' => $this->pengunjung->where('tujuan', 'Sekretaris')->countAllResults(),
            'tataUsaha' => $this->pengunjung->where('tujuan', 'Tata Usaha')->countAllResults(),
            'statistikDanPersandian' => $this->pengunjung->where('tujuan', 'Statistik dan Persandian')->countAllResults(),
            'pengelolaanInfokomPublik' => $this->pengunjung->where('tujuan', 'Pengelolaan Infomasi dan Komunikasi Publik')->countAllResults(),
            'tataKelolaPemerintahan' => $this->pengunjung->where('tujuan', 'Tata Kelola Pemerintahan Berbasis Elektronik')->countAllResults(),
        ];

        $data = [
            'dailyVisitors' => $dailyVisitors,
            'totalVisitors' => $totalVisitors,
            'weeklyVisitors' => $weeklyVisitors,
            'monthlyVisitors' => $monthlyVisitors,
            'yearlyVisitors' => $yearlyVisitors,
            'tujuanCounts' => $tujuanCounts,
        ];

        return view('admin/dashboard', $data);
    }
}
