<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEkstra extends Model
{
    protected $table = 'db_ekstra';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['Nama', 'Hari', 'type', 'des', 'gambar', 'land', 'quotes'];

    public function getEkstraByDay($hari)
    {
        return $this->select('Nama, gambar, land')->where('Hari', $hari)->findAll();
    }

    public function getAllNama()
    {
        return $this->select('Nama')->findAll();
    }

    public function getEkstraByType($type)
    {
        return $this->select('Nama, des, gambar, land, quotes')->where('type', $type)->findAll();
    }

    public function getEkstraByName($nama)
    {
        return $this->where('Nama', $nama)->first();
    }
}
