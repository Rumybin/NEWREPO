<?php
// KONEKSI DATABASE
$server = "localhost";
$user = "root";
$password = "";
$database = "tugas";

// BUAT KONEKSI
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($Koneksi));

// Jika tombol simpan di klik
if (isset($_POST['bsimpan'])) {
    // Data akan disimpan baru
    $simpan = mysqli_query($koneksi, "INSERT INTO db_ekstra (Kode, Nama, Hari, des, type, gambar, quotes) 
                                      VALUES (
                                          '" . $_POST['tkode'] . "',
                                          '" . $_POST['tnama'] . "',
                                          '" . $_POST['thari'] . "',
                                          '" . $_POST['tdes'] . "',
                                          '" . $_POST['ttype'] . "',
                                          '" . $_POST['tgambar'] . "',
                                          '" . $_POST['tquotes'] . "'
                                      )");

    // UJI JIKA SIMPAN DATA SUKSES
    if ($simpan) {
        echo "<script>
              alert('Simpan data sukses!');
              document.location='admin.php';
              </script>";
    } else {
        echo "<script>
              alert('Simpan data gagal!');
              document.location='admin.php';
              </script>";
    }
}
?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Ar Rahmat</title>
    <link rel="stylesheet" href="css/add/bot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Awalan container -->
  <div class="container">

    <h3 class="text-center">Selamat Datang Di Halaman Admin</h3>
    <h3 class="text-center">Bintang jalaluddin</h3>

    <!-- Awalan row -->
    <div class="row">
            <!-- Awal col-md-6 -->
            <div class="col-md-8 mx-auto">
              <!-- Awal card -->
                <div class="card">
                      <div class="card-header bg-info text-light">
                        Form input database
                      </div>
                      <div class="card-body">
                       
                        <!-- Formulir Awal -->
                        <form method="POST">
                          <div class="mb-3">
                            <label  class="form-label">Kode</label>
                            <input type="text" name="tkode" class="form-control" placeholder="input kode">
                          </div>
                          
                          <div class="mb-3">
                            <label  class="form-label">Nama ekstrakurikuler</label>
                            <input type="text" name="tnama" class="form-control" placeholder="input nama">
                          </div>

                          <div class="mb-3">
                            <div class="mb-3">
                            <label  class="form-label">Hari ekstrakurikuler</label>
                                <select class="form-select" name="thari" id="floatingSelect" >
                                  <option>-pilih-</option>
                                  <option value="senin">senin</option>
                                  <option value="selasa">selasa</option>
                                  <option value="rabu">rabu</option>
                                  <option value="kamis">kamis</option>
                                  <option value="jumat">jumat</option>
                                  <option value="sabtu">sabtu</option>
                                  <option value="minggu">minggu </option>
                                </select>
                              </div>
                          </div>

                          <div class="mb-3">
                            <label  class="form-label">Deskripsi ekstrakurikuler</label>
                            <input type="text" name="tdes" class="form-control" placeholder="input deskripsi">
                          </div>
                          
                          <div class="mb-3">
                            <div class="mb-3">
                            <label  class="form-label">Jenis ekstrakurikuler</label>
                                <select class="form-select" name="ttype" id="floatingSelect" >
                                  <option>-pilih-</option>
                                  <option value="olim">Olim</option>
                                  <option value="madin">Madin</option>
                                  <option value="nonolim">Lainya</option>
                                </select>
                              </div>
                          </div>

                          <div class="mb-3">
                            <label  class="form-label">Gambar (kosongkan aja)</label>
                            <input type="text" name="tgambar" class="form-control" placeholder="input deskripsi">
                          </div>

                          <div class="mb-3">
                            <label  class="form-label">quotes</label>
                            <input type="text" name="tquotes" class="form-control" placeholder="input deskripsi">
                          </div>
                       <!-- Formulir Akhir -->
                      
                      <div class="text-center">
                        <hr>
                        <button class="btn btn-primary" name="bsimpan" type="submit">Simpan</button>
                        <button class="btn btn-danger" name="bkosongkan" type="reset">Kosongkan</button>
                      </div>
                    
                      </form>

                      </div>
                      <div class="card-footer bg-info">
                        
                      </div>
                </div>
              <!-- Akhiran card -->
            </div>
            <!-- Akhiran col-md-6 -->
          </div>
          <!-- Akhiran row -->
         
      
<!-- Awal card -->

<div class="card mt-5 ">

  <div class="card-header bg-info text-light">
      Database
  </div>

  <div class="card-body">
    <div class="col-md-8 mx-auto">
      <form method="POST">
        <div class="input-group mb-3">
          <input type="text" name="tcari" class="form-control" placeholder="Masukkan kata kunci!">
          <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
          <button class="btn btn-danger" name="breset" type="submit">Reset</button>
        </div>
      </form>
    </div>
    <table class="table table-striped">
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Hari</th>
        <th>des</th>
        <th>type</th>
        <th>gambar</th>
        <th>quotes</th>
        <th>Trigger</th>
      </tr>

      
<?php 
  // Persiapan menampilkan data
  $no = 1;
  $tampil = mysqli_query($koneksi, "SELECT * FROM db_ekstra order by Kode desc");
  while ($data = mysqli_fetch_array($tampil)) :

?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['Kode'] ?></td>
        <td><?= $data['Nama'] ?></td>
        <td><?= $data['Hari'] ?></td>
        <td><?= $data['des'] ?></td>
        <td><?= $data['type'] ?></td>
        <td>no more bro</td>

        <td>
          <a href="#" class="btn btn-warning">Edit</a>
          <a href="#" class="btn btn-danger">Hapus</a>
        </td>
      </tr>

      <?php endwhile; ?>

    </table>
   </div>

   <div class="card-footer bg-info">  </div>

   </div>
 
   <!-- Akhiran card -->                 
                       
                     
            
  </div>
  <!-- Akhiran container -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>