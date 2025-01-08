<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/login/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/login/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/login/style.css">

    <title>Login Admin</title>
  </head>
  <body>
    <!-- Tombol transparan -->
    <button 
      class="reset-btn" 
      onclick="window.location='<?= base_url('/login/resetLock') ?>';" 
      title="Reset Lock">
    </button>


    <!-- Konten halaman login -->
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('images/login/login.jpg');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center" style="background-color: #fff;">
                    <div class="col-md-7">
                        <h3 class="display-1 fw-bold text-green">ADMIN ONLY</h3>
                        <form action="<?= base_url('/login/authenticate') ?>" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" id="username" required>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
                            </div>
                            <?php if (!empty($error)): ?>
                                <p class="text-danger"><?= $error ?></p>
                            <?php endif; ?>
                            <input type="submit" value="Log In" class="btn btn-block btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
