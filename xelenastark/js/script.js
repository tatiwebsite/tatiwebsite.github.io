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

//Плавный скролл//

$("a[href^='#']").click(function(){
    const _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
  }); 

  function validateForms (form) {
    $(form).validate({
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        }
      }
    });
  }

  validateForms('form');
  

    
