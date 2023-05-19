// Biblioteca AOS
AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    delay: 100,
    once: true
});


// Swiper
var swiper = new Swiper(".slide-customers", {
    slidesPerView: 6,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
        nextEl: '.customers .container .top .arrows .swiper-button-next',
        prevEl: '.customers .container .top .arrows .swiper-button-prev',
    },
});