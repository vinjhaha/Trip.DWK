// ===================== NAVBAR SCROLL =====================
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', function () {
    if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ===================== HAMBURGER MENU =====================
const tombolMenu = document.getElementById('tombolMenu');
const menuList = document.getElementById('menuList');

tombolMenu.addEventListener('click', function (e) {
    e.preventDefault();
    menuList.classList.toggle('aktif');
});

// Tutup menu saat link diklik
const menuLinks = document.querySelectorAll('#menuList a');
menuLinks.forEach(function(link) {
    link.addEventListener('click', function() {
        menuList.classList.remove('aktif');
    });
});

// ===================== SLIDESHOW =====================
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    currentSlide = n;
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

function nextSlide() {
    let next = (currentSlide + 1) % slides.length;
    goToSlide(next);
}

setInterval(nextSlide, 3000);