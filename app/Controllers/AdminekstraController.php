<?php

namespace App\Controllers;

use App\Models\Modelsiswa;
use App\Models\ModelEkstra;

class AdminekstraController extends BaseController
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
        return view('admin/ekstra_view', $data);
    }

    // Operasi siswa
    public function save()
    {
        $this->modelsiswa->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'ekstra' => $this->request->getPost('ekstra'),
        ]);
        return redirect()->to('/admin/ekstra')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function update($id)
    {
        $this->modelsiswa->update($id, [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'kelas' => $this->request->getPost('kelas'),
            'ekstra' => $this->request->getPost('ekstra'),
        ]);
        return redirect()->to('/admin/ekstra')->with('success', 'Data siswa berhasil diubah.');
    }

    public function delete($id)
    {
        $this->modelsiswa->delete($id);
        return redirect()->to('/admin/ekstra')->with('success', 'Data siswa berhasil dihapus.');
    }

    // Operasi ekstra
    public function saveEkstra()
{
    $gambar = $this->request->getFile('gambar'); // Ambil file gambar dari form

    // Cek apakah ada file yang diupload
    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
        $newName = $gambar->getRandomName(); // Buat nama file acak
        $gambar->move('uploads/ekstrakurikuler', $newName); // Pindahkan file ke direktori
    } else {
        $newName = null; // Jika tidak ada file, set ke null
    }

    $this->modelekstra->save([
        'Nama' => $this->request->getPost('Nama'),
        'Hari' => $this->request->getPost('Hari'),
        'type' => $this->request->getPost('type'),
        'des' => $this->request->getPost('des'),
        'gambar' => $newName, // Simpan nama file gambar ke database
        'quotes' => $this->request->getPost('quotes'),
    ]);

    return redirect()->to('/admin/ekstra')->with('success', 'Data ekstra berhasil ditambahkan.');
}


public function updateEkstra($kode)
{
    $gambar = $this->request->getFile('gambar');

    // Cek apakah ada file gambar baru yang diupload
    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
        $newName = $gambar->getRandomName();
        $gambar->move('uploads/ekstrakurikuler', $newName);
    } else {
        // Jika tidak ada gambar baru, ambil gambar lama dari database
        $existingData = $this->modelekstra->find($kode);
        $newName = $existingData['gambar'];
    }

    $this->modelekstra->update($kode, [
        'Nama' => $this->request->getPost('Nama'),
        'Hari' => $this->request->getPost('Hari'),
        'type' => $this->request->getPost('type'),
        'des' => $this->request->getPost('des'),
        'gambar' => $newName, // Simpan nama file gambar
        'quotes' => $this->request->getPost('quotes'),
    ]);

    return redirect()->to('/admin/ekstra')->with('success', 'Data ekstra berhasil diubah.');
}

    public function deleteEkstra($kode)
    {
        $ekstra = $this->modelekstra->find($kode);
        if ($ekstra && !empty($ekstra['gambar']) && file_exists(FCPATH . 'uploads/ekstrakurikuler/' . $ekstra['gambar'])) {
            unlink(FCPATH . 'uploads/ekstrakurikuler/' . $ekstra['gambar']);
        }

        $this->modelekstra->delete($kode);
        return redirect()->to('/admin/ekstra')->with('success', 'Data ekstra berhasil dihapus.');
    }

    public function printEkstra()
    {
        $data['ekstra'] = $this->modelekstra->findAll();
        return view('admin/ekstra_print', $data);
    }
}
