<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEkstra extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['Nama', 'Hari', 'type', 'des', 'gambar', 'quotes'];

    public function getEkstraByDay($hari)
    {
        // Menggunakan select untuk memilih kolom yang diinginkan
        return $this->select('Nama, gambar') // Pastikan 'gambar' dipilih
            ->where('Hari', $hari)
            ->findAll();
    }

    public function getAllNama()
    {
        return $this->select('Nama')->findAll();
    }

    public function getEkstraByType($type)
    {
        // Ambil kolom yang diperlukan
        return $this->select('Nama, des, gambar, quotes') // Sesuaikan kolom
            ->where('type', $type)
            ->findAll();
    }
}
