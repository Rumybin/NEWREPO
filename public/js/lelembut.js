// Fungsi untuk menambahkan kelas 'scroll-active' saat elemen berada di viewport
document.addEventListener('DOMContentLoaded', () => {
    const lelembutElement = document.getElementById('lelembut');

    // Fungsi untuk mengecek apakah elemen berada di viewport
    const checkScroll = () => {
        const rect = lelembutElement.getBoundingClientRect();

        // Jika elemen muncul di layar, tambahkan kelas 'scroll-active'
        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            lelembutElement.classList.add('scroll-active');
        }
    };

    // Cek posisi elemen saat halaman di-scroll
    window.addEventListener('scroll', checkScroll);

    // Cek posisi elemen saat halaman pertama kali dimuat
    checkScroll();
});
