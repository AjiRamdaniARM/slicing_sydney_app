document.querySelector('select').addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    const imgSrc = selectedOption.getAttribute('data-img-src');
    document.getElementById('selected-img').src = imgSrc;
});

document.addEventListener('DOMContentLoaded', () => {
    const dropdownButton = document.querySelector('.dropdown-button');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const dropdownImg = document.getElementById('dropdown-img');

    // Toggle dropdown menu visibility
    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Handle click on dropdown items
    dropdownMenu.addEventListener('click', (event) => {
        if (event.target.closest('.dropdown-item')) {
            const selectedImgSrc = event.target.closest('.dropdown-item').dataset.imgSrc;
            dropdownImg.src = selectedImgSrc;
            dropdownMenu.classList.add('hidden');
        }
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const navbarDesktop = document.getElementById('navbar-desktop');
    const navbarMobile = document.getElementById('navbar-mobile');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) { // Atur jarak scroll untuk menambahkan efek blur
            navbarDesktop.classList.add('navbar-blur');
            navbarMobile.classList.add('navbar-blur');
        } else {
            navbarDesktop.classList.remove('navbar-blur');
            navbarMobile.classList.remove('navbar-blur');
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.getElementById('menu-icon');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const closeSidebar = document.getElementById('close-sidebar');

    // Menampilkan sidebar dan overlay saat menu icon diklik
    menuIcon.addEventListener('click', () => {
        sidebar.classList.add('show'); // Menampilkan sidebar
        overlay.classList.add('active'); // Menampilkan overlay
        document.body.style.overflow = 'hidden'; // Menonaktifkan scroll pada body
    });

    // Menutup sidebar dan overlay saat tombol tutup diklik
    closeSidebar.addEventListener('click', () => {
        sidebar.classList.remove('show'); // Menyembunyikan sidebar
        overlay.classList.remove('active'); // Menyembunyikan overlay
        document.body.style.overflow = ''; // Mengaktifkan scroll pada body
    });

    // Menutup sidebar dan overlay jika klik di luar area sidebar
    overlay.addEventListener('click', () => {
        sidebar.classList.remove('show'); // Menyembunyikan sidebar
        overlay.classList.remove('active'); // Menyembunyikan overlay
        document.body.style.overflow = ''; // Mengaktifkan scroll pada body
    });
});
