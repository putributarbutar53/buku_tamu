<?php

namespace App\Controllers\Admin0503;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PengunjungModel;
use Dompdf\Dompdf;
use CodeIgniter\API\ResponseTrait;
use App\Models\DiskusiModel;
use CodeIgniter\Config\Config;

class Pengunjung extends BaseController
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
        $data['pengunjung'] = $this->pengunjung->getAllDataWithRelation();
        return view('admin/pengunjung', $data);
    }
    public function printPDF()
    {
        $data['pengunjung'] = $this->pengunjung->getAllDataWithRelation();

        // Load view into a variable
        $html = view('admin/pengunjung_pdf', $data);

        // Instantiate Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('letter', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF (1 = download and 0 = preview)
        $dompdf->stream("data_pengunjung.pdf", array("Attachment" => 0));
    }
}
