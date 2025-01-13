<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Ekstrakurikuler</title>

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
    <div class="page-wrapper">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h2 class="title">Pendaftaran Ekstrakurikuler</h2>

                    <!-- Form -->
                    <form method="POST" action="/form/save">
                        <div class="input-group">
                            <label class="label">Nama Lengkap</label>
                            <select class="input--style-4" name="nama_lengkap" id="nama_lengkap" required>
                                <option disabled selected>Pilih Nama</option>
                                <?php foreach ($siswa as $s): ?>
                                    <option value="<?= $s['nama_lengkap']; ?>"><?= $s['nama_lengkap']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="input-group">
                            <label class="label">Kelas</label>
                            <select class="input--style-4" name="kelas" id="kelas" required>
                                <option disabled selected>Pilih Kelas</option>
                                <option value="7-A">7-A</option>
                                <option value="8-B">8-B</option>
                                <option value="9-C">9-C</option>
                                <option value="10-A">10-A</option>
                                <option value="11-B">11-B</option>
                                <option value="12-C">12-C</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <label class="label">Ekstra</label>
                            <select class="input--style-4" name="ekstra" required>
                                <option disabled selected>Pilih Ekstra</option>
                                <option value="EKSTRA A">EKSTRA A</option>
                                <option value="EKSTRA B">EKSTRA B</option>
                                <option value="EKSTRA C">EKSTRA C</option>
                            </select>
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                    <!-- End Form -->
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
