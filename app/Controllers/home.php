<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelEkstra;

class home extends Controller
{
    public function index()
    {
        // Buat instance model
        $model = new ModelEkstra();
        
        // Ambil hari ini dalam bahasa Indonesia
        $hariIni = date('l'); // Mendapatkan hari ini dalam bahasa Inggris
        $hariIndonesia = [
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
            'Sunday' => 'Minggu'
        ];
        $hariIni = $hariIndonesia[$hariIni];
        
        // Ambil data ekstra berdasarkan hari ini
        $ekstraHariIni = $model->getEkstraByDay($hariIni);

        // Kirim data ke view
        return view('homepage', ['ekstraHariIni' => $ekstraHariIni]);
    }

    public function olympiad()
    {
        return view('olympiad');
    }
}
