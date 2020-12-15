new Swiper('.reviews-slider', {
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
    },

    grabCursor: true,
    slideToClickedSlide: true,
    autoHeight: true,
    slidesPerView: 3,
    spaceBetween: 25,
    slidesPerGroup: 1,
    speed: 800,

    breakpoints:{
        320: {
            slidesPerView: 1,
        },
        480: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        }
    },

    preloadImages: false,
    lazy: {
        loadOnTransitionStart: false,
        loadPrevNext: false,
    },
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
});


const popup = document.querySelector('.pop-up'),
      overlay = document.querySelector('.overlay'),
      openModal = document.querySelectorAll('[data-modal=buy]'),
      closeModal = document.querySelector('.pop-up__close');
 
function modalOpenBtn () {
    overlay.classList.add('show');
    overlay.classList.remove('hide');
    document.body.style.overflow = 'hidden';
}      

openModal.forEach(btn => {
    btn.addEventListener('click', modalOpenBtn);
});

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

//Плавный скролл//
$(document).ready(function() {
  
$("a[href^='#']").click(function(){
    const _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
  }); 

function validateForms (form) {
    $(form).validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 15
                },
            email: {
                required: true,
                email: true
                }
            },
            messages: {
                name: "Пожалуйста, введите ваше имя",
                email: {
                required: "Пожалуйста, введите адрес почтового ящика",
                email: "Адрес почтового ящика введен неверно"
                }
            }
    });
}
    validateForms('#form');
    validateForms('#popup-form');
});
    
