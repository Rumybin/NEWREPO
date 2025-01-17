<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controlnonolim extends Controller
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
    $data['ekstra_nonolim'] = $this->model->select('nama, des, gambar')
                                        ->where('type', 'nonolim')
                                        ->findAll();

    // Kirim data ke view 'olympiad'
    return view('nonolim', $data);
}


}
