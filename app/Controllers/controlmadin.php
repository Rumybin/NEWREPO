<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controlmadin extends Controller
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
    $data['ekstra_madin'] = $this->model->select('nama, des, gambar')
                                        ->where('type', 'madin')
                                        ->findAll();

    // Kirim data ke view 'olympiad'
    return view('madin', $data);
}


}
