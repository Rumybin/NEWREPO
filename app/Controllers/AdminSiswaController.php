<?php

namespace App\Controllers;

use App\Models\Modelsiswa;
use App\Models\ModelEkstra;

class AdminSiswaController extends BaseController
{
    protected $modelsiswa;
    protected $modelekstra;

    public function __construct()
    {
        $this->modelsiswa = new Modelsiswa();
        $this->modelekstra = new ModelEkstra();
    }

    public function index()
    {
        $data['siswa'] = $this->modelsiswa->findAll();
        $data['ekstra'] = $this->modelekstra->findAll();
        return view('admin/siswa_view', $data);
    }

    // Operasi siswa
    public function save()
    {
        $this->modelsiswa->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'ekstra' => $this->request->getPost('ekstra'),
        ]);
        return redirect()->to('/admin/siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function update($id)
    {
        $this->modelsiswa->update($id, [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'ekstra' => $this->request->getPost('ekstra'),
        ]);
        return redirect()->to('/admin/siswa')->with('success', 'Data siswa berhasil diubah.');
    }

    public function delete($id)
    {
        $this->modelsiswa->delete($id);
        return redirect()->to('/admin/siswa')->with('success', 'Data siswa berhasil dihapus.');
    }

    // Operasi ekstra
    public function saveEkstra()
    {
        $this->modelekstra->save([
            'Nama' => $this->request->getPost('Nama'),
            'Hari' => $this->request->getPost('Hari'),
            'type' => $this->request->getPost('type'),
            'des' => $this->request->getPost('des'),
            'gambar' => $this->request->getPost('gambar'),
            'quotes' => $this->request->getPost('quotes'),
        ]);
        return redirect()->to('/admin/siswa')->with('success', 'Data ekstra berhasil ditambahkan.');
    }

    public function updateEkstra($kode)
    {
        $this->modelekstra->update($kode, [
            'Nama' => $this->request->getPost('Nama'),
            'Hari' => $this->request->getPost('Hari'),
            'type' => $this->request->getPost('type'),
            'des' => $this->request->getPost('des'),
            'gambar' => $this->request->getPost('gambar'),
            'quotes' => $this->request->getPost('quotes'),
        ]);
        return redirect()->to('/admin/siswa')->with('success', 'Data ekstra berhasil diubah.');
    }

    public function deleteEkstra($kode)
    {
        $this->modelekstra->delete($kode);
        return redirect()->to('/admin/siswa')->with('success', 'Data ekstra berhasil dihapus.');
    }

    public function print()
{
    $siswa = $this->modelsiswa->findAll(); // Ambil data siswa dari database
    return view('admin/siswa_print', ['siswa' => $siswa]);
}
}
