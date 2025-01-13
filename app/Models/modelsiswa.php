<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelsiswa extends Model
{
    protected $DBGroup = 'thirdDB'; // Grup database (ganti sesuai konfigurasi Anda)
    protected $table = 'siswa'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['nama_lengkap', 'kelas', 'ekstra']; // Kolom yang dapat diisi

    public function getAllNama()
    {
        return $this->select('nama_lengkap')->findAll(); // Mengambil semua data nama_lengkap
    }
}
