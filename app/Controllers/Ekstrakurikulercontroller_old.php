<?php

namespace App\Controllers;

use App\Models\ModelEkstra;
use CodeIgniter\Controller;

class Ekstrakurikulercontroller_old extends Controller
{
    public function index()
    {
        // Daftar nama hari dalam bahasa Indonesia
        $namaHari = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        // Dapatkan hari ini dalam bahasa Inggris
        $hariInggris = date('l');
        // Konversi ke bahasa Indonesia
        $hari = $namaHari[$hariInggris];
        // Simpan nama hari ke variabel untuk dikirim ke view
        $data['hariini'] = $hari;
    
        // Ambil kegiatan ekstrakurikuler berdasarkan hari ini (Controller 1)
        $model = new ModelEkstra();
        $data['ekstra_hari_ini'] = $model->getEkstraByDay($hari);

        // Ambil semua data kolom Nama (Controller 2)
        $data['all_nama'] = $model->getAllNama();
        
        // Kirim kedua data ke view
        return view('ekstrakurikuler_view', $data);

    }
    
}
