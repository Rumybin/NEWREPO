<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Form Pendaftaran">
    <meta name="author" content="Your Name">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/logo/logopondok.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('images/logo/logopondok.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('images/logo/logopondok.png'); ?>">

    <meta name="keywords" content="Form, Pendaftaran, HTML, CSS">

    <!-- Title Page-->
    <title>Form Pendaftaran</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/form/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Pendaftaran</h2>

                    <!-- Flash Messages -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
                    <?php endif; ?>

                    <form method="POST" action="<?= base_url('controlsiswa/save'); ?>">
                        <!-- Nama Lengkap -->
                        <div class="input-group">
                            <label class="label">Nama Lengkap</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nama_lengkap" required>
                                    <option disabled selected>Pilih Nama</option>
                                    <?php foreach ($siswa as $s): ?>
                                        <option value="<?= $s['nama_lengkap']; ?>"><?= $s['nama_lengkap']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <!-- Kelas -->
                        <div class="input-group">
                            <label class="label">Kelas</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="kelas" required>
                                    <option disabled selected>Pilih Kelas</option>
                                    <option value="7-A">7-A</option>
                                    <option value="7-B">7-B</option>
                                    <option value="7-C">7-C</option>
                                    <option value="8-A">8-A</option>
                                    <option value="8-B">8-B</option>
                                    <option value="8-C">8-C</option>
                                    <option value="9-A">9-A</option>
                                    <option value="9-B">9-B</option>
                                    <option value="9-C">9-C</option>
                                    <option value="10-A">10-A</option>
                                    <option value="10-B">10-B</option>
                                    <option value="10-C">10-C</option>
                                    <option value="11-A">11-A</option>
                                    <option value="11-B">11-B</option>
                                    <option value="11-C">11-C</option>
                                    <option value="12-A">12-A</option>
                                    <option value="12-B">12-B</option>
                                    <option value="12-C">12-C</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <!-- Ekstrakurikuler -->
                        <div class="input-group">
                            <label class="label">Ekstrakurikuler</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="ekstra" required>
                                    <option disabled selected>Pilih Ekstrakurikuler</option>
                                    <option value="Basket">Basket</option>
                                    <option value="Sepak Bola">Sepak Bola</option>
                                    <option value="Paskibra">Paskibra</option>
                                    <option value="Pramuka">Pramuka</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html>
