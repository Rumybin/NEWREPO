<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controlhalaman extends Controller
{
    protected $model;

    public function __construct()
    {
        // Inisialisasi model ModelEkstra
        $this->model = new ModelEkstra();
    }

    public function index($nama)
    {
        // Ambil data berdasarkan nama
        $data['ekstra'] = $this->model->where('Nama', $nama)->first();

        // Periksa apakah data ditemukan
        if ($data['ekstra'] === null) {
            // Jika tidak ditemukan, tampilkan pesan kesalahan atau redirect
            return redirect()->to('/error-page');
        }

        // Kirim data ke view 'halaman'
        return view('halaman', $data);
    }
}
