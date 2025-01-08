<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controlcacat extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new ModelEkstra();
    }

    public function index()
    {
        // Ambil data dengan type 'sport' dan kolom yang diperlukan
        $data['ekstra_olim'] = $this->model->getEkstraByType('olim');

        // Kirim data ke view 'SPORT'
        return view('cacat', $data);
    }
}
