<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class controlhalaman extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new ModelEkstra();
    }

    public function index($nama)
    {
        // Ambil data ekstra berdasarkan nama
        $data['ekstra'] = $this->model->getEkstraByName($nama);

        // Jika data tidak ditemukan, arahkan ke halaman error
        if (!$data['ekstra']) {
            return redirect()->to('/error-page');
        }

        // Tambahkan URL penuh untuk gambar
        $data['ekstra']['gambar_url'] = base_url('uploads/ekstrakurikuler/' . $data['ekstra']['gambar']);
        $data['ekstra']['land_url'] = base_url('uploads/landscape/' . $data['ekstra']['land']);

        // Kirim data ke view 'halaman'
        return view('halaman', $data);
    }
}
