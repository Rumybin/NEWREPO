<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tambah Data Siswa</h2>

        <form method="POST" action="<?= base_url('admin/siswa/save'); ?>">
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="ekstra" class="form-label">Ekstrakurikuler</label>
                <input type="text" class="form-control" id="ekstra" name="ekstra" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
