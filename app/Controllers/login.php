<?php

namespace App\Controllers;

use App\Models\PenjagaModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        $session = session();

        // Kirim pesan error jika ada
        $data = [
            'error' => $session->getFlashdata('error'),
            'locked' => $session->get('locked') && time() < $session->get('locked'),
        ];

        return view('login', $data);
    }

    public function resetLock()
{
    $session = session();

    // Hapus semua data terkait percobaan login
    $session->remove(['login_attempts', 'locked']);

    // Redirect kembali ke halaman login
    return redirect()->to('/login');
}


    public function authenticate()
    {
        $session = session();
        $penjagaModel = new PenjagaModel();

        // Periksa apakah user sedang diblokir
        if ($session->get('locked') && time() < $session->get('locked')) {
            $remaining = ($session->get('locked') - time());
            return redirect()->to('/login')->with('error', "Akun Anda terkunci. Coba lagi dalam $remaining detik.");
        }

        // Ambil input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Verifikasi login
        $user = $penjagaModel->verifyLogin($username, $password);

        if ($user) {
            // Reset percobaan login jika berhasil
            $session->remove(['login_attempts', 'locked']);

            // Redirect ke halaman berikutnya
            return redirect()->to('/admin/siswa');
        } else {
            // Hitung percobaan login gagal
            $attempts = $session->get('login_attempts') ?? 0;
            $attempts++;
            $session->set('login_attempts', $attempts);

            if ($attempts >= 3) {
                // Blokir selama 3 menit
                $session->set('locked', time() + 180);
                return redirect()->to('/login')->with('error', 'Anda telah gagal login 3 kali. Akun Anda terkunci selama 3 menit.');
            }

            return redirect()->to('/login')->with('error', 'Username atau password salah.');
        }
    }
}
