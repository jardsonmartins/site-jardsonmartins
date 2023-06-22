//Menu mobile
const btnMenu = document.getElementById('js-btn-menu-mobile');
const overlayMenu = document.querySelector('.js-overlay');

function openMenuMobile(){
    document.documentElement.classList.toggle('menu-opened');
}
btnMenu.addEventListener('click', openMenuMobile);
overlayMenu.addEventListener('click', openMenuMobile);

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

var swiper = new Swiper(".slide-depositions", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

// Fechar details
var detailsList = document.querySelectorAll(".faq details");

detailsList.forEach(function(details) {
  details.addEventListener("click", function() {
      detailsList.forEach(function(otherDetails) {
          if (otherDetails !== details) {
              otherDetails.removeAttribute("open");
          }
      });
  });
});