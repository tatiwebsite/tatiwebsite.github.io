'use script';

(function() {

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

const burger = document.querySelector('.mobile-menu'),
      menu = document.querySelector('.menu'),
      popup = document.querySelector('.pop-up'),
      overlay = document.querySelector('.overlay'),
      openModal = document.querySelector('.book-main__btn'),
      closeModal = document.querySelector('.pop-up__close');


burger.addEventListener('click', function() {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
    document.body.classList.toggle('active');
});

 
function modalOpenBtn () {
    overlay.classList.add('show');
    overlay.classList.remove('hide');
    document.body.style.overflow = 'hidden';
}      

openModal.addEventListener('click', modalOpenBtn);


function modalCloseBtn () {
    overlay.classList.remove('show');
    overlay.classList.add('hide');
    document.body.style.overflow = '';
}

closeModal.addEventListener('click', modalCloseBtn);

overlay.addEventListener('click', (e) => {
    if(e.target === overlay) {
        modalCloseBtn();
    }
});

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
