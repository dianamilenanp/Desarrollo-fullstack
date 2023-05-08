
const carousel = document.querySelector('.carousel');
const slider = carousel.querySelector('.slider');
const prevBtn = carousel.querySelector('.prev');
const nextBtn = carousel.querySelector('.next');
const slideWidth = carousel.querySelector('.slide').offsetWidth;
const slidesPerPage = 3; // Cambiar el número de columnas que deseas mostrar

let slideIndex = 0;

function slideToIndex() {
    slider.style.transform = `translateX(-${slideWidth * slideIndex}px)`;
}

function showSlide(index) {
    slideIndex = index;
    slideToIndex();
}

function nextSlide() {
    if (slideIndex < slider.children.length - slidesPerPage) {
        slideIndex++;
        slideToIndex();
    }
}

function prevSlide() {
    if (slideIndex > 0) {
        slideIndex--;
        slideToIndex();
    }
}

function updateButtonVisibility() {
    prevBtn.style.display = slideIndex === 0 ? 'none' : 'block';
    nextBtn.style.display = slideIndex >= slider.children.length - slidesPerPage ? 'none' : 'block';
}

prevBtn.addEventListener('click', function () {
    prevSlide();
    updateButtonVisibility();
});

nextBtn.addEventListener('click', function () {
    nextSlide();
    updateButtonVisibility();
});

updateButtonVisibility();

var whatsappButtons = document.querySelectorAll(".whatsappButton");

whatsappButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        var phoneNumber = "3144825726"; // Reemplaza con el número de teléfono del destinatario
        window.open("https://wa.me/" + phoneNumber);
    });
});