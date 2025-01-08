<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjagaModel extends Model
{
    protected $DBGroup = 'secondDB'; // Grup database kedua
    protected $table = 'penjaga';    // Nama tabel
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function verifyLogin($username, $password)
    {
        // Cari pengguna berdasarkan username
        $user = $this->where('username', $username)->first();

        // Jika ditemukan, periksa apakah password cocok
        if ($user && $user['password'] === $password) {
            return $user;
        }

        return false;
    }
}
