<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelEkstra;

class controladmin extends Controller
{
    public function index()
    {
        // Memuat model
        $model = new ModelEkstra();

        // Mengambil data dari tabel db_ekstra
        $data['ekstrakurikuler'] = $model->findAll();

        // Mengirim data ke view admin.php
        return view('admin', $data);
    }
}