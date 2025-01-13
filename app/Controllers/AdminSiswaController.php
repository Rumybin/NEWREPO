<?php

namespace App\Controllers;

use App\Models\Modelsiswa;

class AdminSiswaController extends BaseController
{
    protected $modelsiswa;

    public function __construct()
    {
        $this->modelsiswa = new Modelsiswa();
    }

    // Menampilkan halaman siswa dengan data dari database
    public function index()
    {
        $data['siswa'] = $this->modelsiswa->findAll();
        return view('admin/siswa_view', $data);
    }

    // Menyimpan data baru
    public function save()
    {
        $this->modelsiswa->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'ekstra' => $this->request->getPost('ekstra'),
        ]);

        return redirect()->to('/admin/siswa')->with('success', 'Data berhasil ditambahkan.');
    }

    // Mengupdate data berdasarkan ID
    public function update($id)
    {
        $this->modelsiswa->update($id, [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'ekstra' => $this->request->getPost('ekstra'),
        ]);

        return redirect()->to('/admin/siswa')->with('success', 'Data berhasil diubah.');
    }

    // Menghapus data berdasarkan ID
    public function delete($id)
    {
        $this->modelsiswa->delete($id);

        return redirect()->to('/admin/siswa')->with('success', 'Data berhasil dihapus.');
    }
}
