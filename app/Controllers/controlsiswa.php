<?php

namespace App\Controllers;

use App\Models\Modelsiswa;

class Controlsiswa extends BaseController
{
    protected $modelsiswa;

    public function __construct()
    {
        $this->modelsiswa = new Modelsiswa();
    }

    // Menampilkan form pendaftaran
    public function index()
    {
        $data['siswa'] = $this->modelsiswa->getAllNama(); // Ambil data siswa
        return view('form', $data); // Render view form
    }

    // Menyimpan data ke database
    public function save()
    {
        $nama = $this->request->getPost('nama_lengkap');
        $kelas = $this->request->getPost('kelas');
        $ekstra = $this->request->getPost('ekstra');

        if ($nama && $kelas && $ekstra) {
            $this->modelsiswa->insert([
                'nama_lengkap' => $nama,
                'kelas' => $kelas,
                'ekstra' => $ekstra,
            ]);

            return redirect()->to('/controlsiswa')->with('success', 'Pendaftaran berhasil!');
        }

        return redirect()->back()->with('error', 'Semua field harus diisi!');
    }
}
