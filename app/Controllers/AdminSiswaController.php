<?php
// File: app/Controllers/AdminSiswaController.php
namespace App\Controllers;

use App\Models\Modelsiswa;

class AdminSiswaController extends BaseController
{
    protected $modelsiswa;

    public function __construct()
    {
        $this->modelsiswa = new Modelsiswa();
    }

    public function index()
    {
        $data['siswa'] = $this->modelsiswa->findAll();
        return view('admin/siswa_view', $data);
    }
}
