<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa dan Ekstrakurikuler</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url(); ?>" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= base_url(); ?>" class="brand-link">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <!-- Sidebar menu for Data Siswa -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/siswa'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                        <!-- Sidebar menu for Data Ekstrakurikuler -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/ekstra_view'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>Data Ekstrakurikuler</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Siswa dan Ekstrakurikuler</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    
                <!-- Tabel Data Ekstrakurikuler -->
<div class="card mt-4">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Ekstrakurikuler</h3>
                            <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addEkstraModal">Tambah Ekstrakurikuler</button>
                        </div>
                        <div class="card-body">
                            <table id="ekstraTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Hari</th>
                                        <th>Type</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Quotes</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; foreach ($ekstra as $row): ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $row['Nama']; ?></td>
                                        <td><?= $row['Hari']; ?></td>
                                        <td><?= $row['type']; ?></td>
                                        <td><?= $row['des']; ?></td>
                                        <td>
                                            <?php if (!empty($row['gambar'])): ?>
                                                <img src="<?= base_url('uploads/' . $row['gambar']); ?>" alt="<?= $row['Nama']; ?>" width="100">
                                            <?php else: ?>
                                                Tidak ada gambar
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $row['quotes']; ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editEkstraModal<?= $row['Kode']; ?>">Edit</button>
                                            <a href="<?= base_url('admin/ekstra/delete/' . $row['Kode']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </section>
        </div>
    </div>

    <!-- AdminLTE JS -->
    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/dist/js/adminlte.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script>
        $(function () {
            $('#siswaTable').DataTable();
            $('#ekstraTable').DataTable();
        });
    </script>
</body>
</html>

















