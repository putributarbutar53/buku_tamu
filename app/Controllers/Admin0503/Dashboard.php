<?php

namespace App\Controllers\Admin0503;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\SktModel;
use App\Models\DiskusiModel;
use CodeIgniter\Config\Config;

class Dashboard extends BaseController
{
    use ResponseTrait;
    var $diskusi, $model, $skt;
    function __construct()
    {
        $this->model = new AdminModel();
    }
    public function index()
    {
        return view('admin/try');
    }
}
