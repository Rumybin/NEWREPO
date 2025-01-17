<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa dan Ekstrakurikuler</title>
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
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

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= base_url(); ?>" class="brand-link">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/siswa'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/ekstra'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>Data Ekstrakurikuler</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

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

            <section class="content">
                <div class="container-fluid">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Ekstrakurikuler</h3>
                            <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#addEkstraModal">Tambah Ekstrakurikuler</button>
                            <a href="<?= base_url('admin/ekstra/print'); ?>" class="btn btn-success btn-sm float-right mr-2">Print</a>

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
                                                <img src="<?= base_url('/uploads/ekstrakurikuler' . $row['gambar']); ?>" width="100" alt="Gambar">
                                            <?php else: ?>
                                                Tidak Ada Gambar
                                            <?php endif; ?>
                                        </td>

                                        <td><?= $row['quotes']; ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editEkstraModal<?= $row['Kode']; ?>">Edit</button>
                                            <a href="<?= base_url('admin/ekstra/delete/' . $row['Kode']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editEkstraModal<?= $row['Kode']; ?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <form action="<?= base_url('admin/ekstra/update/' . $row['Kode']); ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Ekstrakurikuler</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" name="Nama" class="form-control" value="<?= $row['Nama']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hari</label>
                                                            <input type="text" name="Hari" class="form-control" value="<?= $row['Hari']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Type</label>
                                                            <input type="text" name="type" class="form-control" value="<?= $row['type']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <textarea name="des" class="form-control" required><?= $row['des']; ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gambar</label>
                                                            <input type="file" name="gambar" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Quotes</label>
                                                            <input type="text" name="quotes" class="form-control" value="<?= $row['quotes']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal Tambah -->
                    <div class="modal fade" id="addEkstraModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <form action="<?= base_url('admin/ekstra/add'); ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Ekstrakurikuler</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="Nama" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Hari</label>
                                            <input type="text" name="Hari" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" name="type" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="des" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Quotes</label>
                                            <input type="text" name="quotes" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/dist/js/adminlte.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script>
        $(function () {
            $('#ekstraTable').DataTable();
        });
    </script>
</body>
</html>
