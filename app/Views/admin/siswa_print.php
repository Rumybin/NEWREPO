<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Data Siswa</h1>
                <p>Daftar data siswa berikut mencakup informasi lengkap yang ada di database.</p>
            </div>
        </div>
        <div class="no-print mt-3">
            <button class="btn btn-primary" onclick="window.print()">Print</button>
            <a href="<?= base_url('admin/siswa'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>Ekstrakurikuler</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($siswa as $row): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['kelas']; ?></td>
                    <td><?= $row['ekstra']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>
