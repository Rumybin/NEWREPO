let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    // Sembunyikan semua slide
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Pindah ke slide berikutnya
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }

    // Hapus kelas 'active' dari semua dot
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Tampilkan slide saat ini dan tambahkan kelas 'active' pada dot yang sesuai
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    // Ganti gambar setiap 3 detik (3000ms)
    setTimeout(showSlides, 4000); // Ubah interval di sini
}

function plusSlides(n) {
    showSlideManual(slideIndex += n);
}

function currentSlide(n) {
    showSlideManual(slideIndex = n);
}

function showSlideManual(n) {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    // Jika n lebih besar dari jumlah slide, reset ke 1
    if (n > slides.length) { slideIndex = 1; }
    // Jika n kurang dari 1, set ke slide terakhir
    if (n < 1) { slideIndex = slides.length; }

    // Sembunyikan semua slide
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Hapus kelas 'active' dari semua dot
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Tampilkan slide saat ini dan tambahkan kelas 'active' pada dot yang sesuai
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
