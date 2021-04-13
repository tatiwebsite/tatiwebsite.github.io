(function() {
  'use strict';

  function trackScroll() {
    var scrolled = window.pageYOffset;
    // var coords = document.documentElement.clientHeight;

    if (scrolled > 1000) {
      goTopBtn.classList.add('up-show');
    }
    if (scrolled < 1000) {
      goTopBtn.classList.remove('up-show');
    }
  }

  function up() {
    if (window.pageYOffset > 0) {
      window.scrollTo(0, 0);
    }
  }

  var goTopBtn = document.querySelector('.up');

  window.addEventListener('scroll', trackScroll);
  goTopBtn.addEventListener('click', up);
})();

//BURGER

let burger = document.querySelector('.mobile-menu');
let menu = document.querySelector('.menu');


burger.addEventListener('click', function() {
  burger.classList.toggle('active');
  menu.classList.toggle('active');
  document.body.classList.toggle('active');
});

  
  // burger.classList.toggle('active');
  // menu.classList.toggle('active');
  // document.body.style.overflow = 'hidden';


new Swiper('.interviews-slider', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    spaceBetween: 20,  
    loop: true,
    slidesPerView: 'auto',
    centeredSlides: true,

    breakpoints: {
      320: {
        spaceBetween: 20,
      },
      768: {
        spaceBetween: 28,
      },
    }
});
