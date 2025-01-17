<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/logo/logopondok.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('images/logo/logopondok.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('images/logo/logopondok.png'); ?>">

    <title><?= esc($ekstra['Nama']); ?></title>
    <link rel="stylesheet" href="<?= base_url('css/theme.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/aos.css'); ?>">
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="bg-green text-white d-flex flex-column min-vh-100" data-bs-spy="scroll" data-bs-target="#navScroll">

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
                    <a class="nav-link text-white bg-green px-3" href="<?= base_url('/controlsiswa'); ?>" aria-label="A system message page">Daftar yuk</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container flex-grow-1">
        <div class="row d-flex justify-content-center py-vh-5">
            <div class="col-12 col-lg-10" data-aos="zoom-in">
                <h1 class="display-1 fw-bold text-white"><?= esc($ekstra['Nama']); ?></h1>
                <div class="border-top border-secondary pb-4"></div>
                <img src="<?= base_url('images/landekstra/' . esc($ekstra['land'])); ?>" width="1446" height="982"
                    class="img-fluid position-relative rounded-5 shadow" alt="abstract image" data-aos="zoom-in">
                <p class="lead text-white pt-3" data-aos="zoom-in"><?= nl2br(esc($ekstra['des'])); ?></p>
                <div class="col-12 col-lg-7" data-aos="zoom-in">
                    <div class="border-top pt-3"></div>
                    <h2 class="h2 mt-5 offset-1 bg-white text-green fw-bold"><?= ($ekstra['Hari']); ?></h2>
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
            <li><a href="https://www.youtube.com/@ArRahmatOfficial?app=desktop" target="_blank" rel="noopener noreferrer">
                    <ion-icon name="logo-youtube"></ion-icon>
                </a></li>
            <li><a href="https://www.instagram.com/arrahmatofficial"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
        <ul class="menu mb-3">
            <li><a href="<?= base_url('/'); ?>">Home</a></li>
            <li><a href="<?= base_url('/'); ?>">About</a></li>
            <li><a href="<?= base_url('/'); ?>">Service</a></li>
        </ul>
        <p>@2024 SMARTNEN PROJECT | All Rights Reserved</p>
    </footer>

    <!-- Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('js/aos.js'); ?>"></script>

    <script>
        // AOS Initialization
        AOS.init({
            duration: 800, // Durasi animasi
            once: true, // Animasi hanya terjadi sekali
        });
    </script>
</body>

</html>
