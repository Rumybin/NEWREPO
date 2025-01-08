<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class contrololim extends Controller
{
    protected $model;

    public function __construct()
    {
        // Inisialisasi model ModelEkstra
        $this->model = new ModelEkstra();
    }

    public function index()
    {
        // Ambil data dengan type 'olim' dan kolom yang diperlukan
        $data['ekstra_olim'] = $this->model->getEkstraByType('olim');

        // Kirim data ke view 'olympiad'
        return view('olympiad', $data);
    }

}
