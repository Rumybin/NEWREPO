<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controldiniyah extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new ModelEkstra();
    }

    public function index()
    {
        // Ambil data dengan type 'sport' dan kolom yang diperlukan
        $data['ekstra_madin'] = $this->model->getEkstraByType('madin');

        // Kirim data ke view 'SPORT'
        return view('madin', $data);
    }
}
