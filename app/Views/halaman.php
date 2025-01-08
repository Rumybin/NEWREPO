
<!doctype html>
<html class="h-100" lang="en">

  <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>About</title>
  <link rel="stylesheet" href="css/theme.min.css">

   <style>

/* inter-300 - latin */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

/* inter-400 - latin */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

</style>


  </head>

  <body class="bg-green text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

  <nav id="navScroll" class="navbar navbar-dark bg-white shadow fixed-top px-vw-5" tabindex="0">
  <div class="container">
  <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="/">
  <img src="images/logo/logopondok.png" alt="Logo Pondok" width="40" height="40">
  <span class="ms-md-1 mt-1 fw-bolder me-md-5 text-green">AR RAHMAT</span>
</a>


      <ul class="navbar-nav  mb-2 mb-lg-0 list-group list-group-horizontal ">
      <li class="nav-item">
  <a class="nav-link fs-5 text-green" href="/" aria-label="Homepage">
    Home
  </a>
</li>
<li class="nav-item">
  <a class="nav-link fs-5 text-green" href="content.html" aria-label="A sample content page">
    About us
  </a>
</li>
</li>
<li class="nav-item">
  <a class="nav-link fs-5 text-green" href="https://ppdb.arrahmat-bjn.sch.id" aria-label="A system message page">
    Info Ppdb
  </a>
</li>
</ul>

</div>
</nav>

    <main>
    <div class="container">
  <div class="row d-flex justify-content-center py-vh-5 pb-0">
    <div class="col-12 col-lg-10 col-xl-8">
      <div class="row">
        <div class="col-12">

          <h1 class="display-1 fw-bold"><?= $ekstra['Nama']; ?></h1>
          
          <p class="lead text-white border-top pt-3 mt-3" data-aos="fade-up">
            <?= nl2br($ekstra['des']);?>
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 py-vh-2 ">
      <img src="<?= base_url('images/landscape/' . esc($ekstra['gambar'])); ?>" width="1446" height="982" alt="abstract image" 
      class="img-fluid position-relative rounded-5 shadow" data-aos="zoom-up">
    </div>
    </div>
        <div class=" col-xl-5">
      <div class="row d-flex align-items-center" data-aos="fade-up">
  
        <div class="col-12 col-lg-10 offset-lg-1 bg-white shadow rounded-5 ">
   
    <!-- <h3 class="h6 fw-bold">JADWAL EKSTRA</h3> -->
    <p class="  mt-3 text-white text-center h4 fw-bold text-green" data-aos="fade">
        <?= ($ekstra['Hari']);?>
    </p>
</div>


      <div class="row d-flex align-items-start" data-aos="fade-right">


      </div>

    </div>
  </div>
  <div class="row d-flex align-items-start justify-content-center py-vh-3 text-muted" data-aos="fade">
      <div class="col-12 col-lg-10 col-xl-9">
      <div class="p-5 fw-bold text-white text-center rounded shadow" data-aos="fade-up">
      <p ><?= nl2br($ekstra['quotes']);?></p>
    </div>
    </div>
  </div>
</div>

    </main>

    <footer class="py-5 ">
  
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
<li><a href="#"></a></li>
</ul>

<ul class="menu mb-3">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Service</a></li>
</ul>

<p>@2024 SMARTNEN PROJECT | All Rights Reserved</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>





<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/aos.js"></script>
<script>
AOS.init({
 duration: 800, // values from 0 to 3000, with step 50ms
});
</script>
<script>
  let scrollpos = window.scrollY
  const header = document.querySelector(".navbar")
  const header_height = header.offsetHeight

  const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
  const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

    console.log(scrollpos)
  })
</script>

  </body>
</html>
