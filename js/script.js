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
    slidesPerView: 2, // Mostra 6 slides por vez no desktop
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.customers .container .top .arrows .swiper-button-next',
      prevEl: '.customers .container .top .arrows .swiper-button-prev',
    },
    breakpoints: {
      // Quando a largura da janela estiver abaixo de 768 pixels
      768: {
        slidesPerView: 6, // Mostra 1 slide por vez no mobile
        spaceBetween: 10,
      }
    }
});
  
var swiper = new Swiper(".slide-depositions", {
    slidesPerView: 1, // Mostra 1 slide por vez
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // Quando a largura da janela estiver acima de 900 pixels
      
      // Quando a largura da janela estiver entre 768 e 900 pixels
      576: {
        slidesPerView: 2, // Mostra 2 slides por vez no desktop
      },
      900: {
        slidesPerView: 3, // Mostra 3 slides por vez no desktop
      }
    }
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