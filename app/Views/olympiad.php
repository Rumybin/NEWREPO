<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('img/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/logo/logopondok.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('images/logo/logopondok.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('images/logo/logopondok.png'); ?>">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Ekstrakurikuler Olimpiade</title>
  <link rel="stylesheet" href="<?= base_url('css/theme.min.css'); ?>">

  <style>
    /* Inter font styles omitted for brevity */
  </style>
</head>

<body class="bg-green text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

<!-- Navbar -->
<nav id="navScroll" class="navbar navbar-dark bg-white shadow fixed-top px-vw-5" tabindex="0">
  <div class="container">
    <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="<?= base_url('/'); ?>">
      <img src="<?= base_url('images/logo/logopondok.png'); ?>" alt="Logo Pondok" width="40" height="40">
      <span class="ms-md-1 mt-1 fw-bolder me-md-5 text-green">AR RAHMAT</span>
    </a>

    <ul class="navbar-nav mb-2 mb-lg-0 list-group list-group-horizontal">
      <li class="nav-item">
        <a class="nav-link fs-5 text-green" href="<?= base_url('/'); ?>" aria-label="Homepage">Home</a>
      </li>
      <li class="nav-item">
                    <a class="nav-link fs-5 text-green" href="https://arrahmat-bjn.sch.id/" aria-label="A sample content page">
                        About us
                    </a>
                </li>
      <li class="nav-item">
        <a class="nav-link fs-5 text-green" href="https://ppdb.arrahmat-bjn.sch.id" aria-label="A system message page">Info Ppdb</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white bg-green px-3" href="<?= base_url('/login'); ?>" aria-label="A system message page">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white bg-green px-3" href="<?= base_url('controlsiswa'); ?>" aria-label="A system message page">Daftar yuk</a>
      </li>
    </ul>
  </div>
</nav>

<main>
  <div class="bg-white py-vh-3">
    <div class="container bg-white px-vw-5 py-vh-3">
      <div class="row gx-5 pt-semi">
        <?php foreach ($ekstra_olim as $ekstra) : ?>
          <div class="col-12 col-md-6">
            <div class="card bg-transparent mb-5" data-aos="zoom-in-up">
              <div class="bg-green shadow rounded-5 p-0">
                <img src="<?= base_url('images/ekstra/' . $ekstra['gambar']); ?>" 
                  width="685" height="442" 
                  alt="<?= $ekstra['nama']; ?>" 
                  class="img-fluid rounded-5 no-bottom-radius" 
                  loading="lazy">
                <div class="p-5">
                  <h2 class="fw-lighter"><?= esc($ekstra['nama']); ?></h2>
                  <p class="pb-4 text-white text-secondary"><?= esc($ekstra['des']); ?></p>
                  <a href="<?= base_url('/halaman/' . $ekstra['nama']); ?>" 
                    class="link-fancy link-fancy-light">Read more</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<footer class="py-5 bg-dark text-white mt-auto">
  <div class="waves">
    <div class="wave" id="wave1"></div>
    <div class="wave" id="wave2"></div>
    <div class="wave" id="wave3"></div>
    <div class="wave" id="wave4"></div>
  </div>
  <ul class="social_icon">
    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
  </ul>
  <ul class="menu mb-3">
    <li><a href="<?= base_url('/'); ?>">Home</a></li>
    <li><a href="<?= base_url('/'); ?>">About</a></li>
    <li><a href="<?= base_url('/'); ?>">Service</a></li>
  </ul>
  <p>@2024 SMARTNEN PROJECT | All Rights Reserved</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('js/aos.js'); ?>"></script>
<script>
  AOS.init({ duration: 800 });
</script>
<script>
  let scrollpos = window.scrollY;
  const header = document.querySelector(".navbar");
  const header_height = header.offsetHeight;

  const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm");
  const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm");

  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) {
      add_class_on_scroll();
    } else {
      remove_class_on_scroll();
    }

    console.log(scrollpos);
  });
</script>

</body>

</html>
