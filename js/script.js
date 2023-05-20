//menu
const header = document.getElementById('js-header');
function fixedMenu(){
    if(window.pageYOffset > 80){
        header.classList.add('fixed-menu');
    }else{
        header.classList.remove('fixed-menu');
    }
}

document.addEventListener('scroll', fixedMenu);

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