

new Swiper('.interviews-slider', {
    // // Optional parameters
    // direction: 'vertical',
    // loop: true,
  
    // // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      //Булеты
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    slidesPerView: 2.5,
    spaceBetween: 20,  
    loop: true,

    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 1.1,
        spaceBetween: 20,
      },
      991: {
        slidesPerView: 1.6,
      },
      1200: {
        slidesPerView: 1.9,
      },
      1500: {
        slidesPerView: 2.5,
      },
      1900: {
        slidesPerView: 3.1,
      },
      2200: {
        slidesPerView: 3.7,
      },

    },
});
