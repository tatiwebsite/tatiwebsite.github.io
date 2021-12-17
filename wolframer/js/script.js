'use strict';
  
const mySwiper = new Swiper('.swiper', {
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
//   loop: true,
  slidesPerView: 1,
  centeredSlides: false,
  slidesPerGroup: 1
//   breakpoints: {
//     // 320: {
//     //   slidesPerView: 1,
//     //   spaceBetween: 20,
//     // },
//     // 576: {
//     //   slidesPerView: 2.2,
//     //   spaceBetween: 20,
//     //   centeredSlides: false,

//     // },
//     // 768: {
//     //   slidesPerView: 3,
//     //   spaceBetween: 20,
//     // },
//   }
});

const swiperPrev = document.getElementById('swiperPrev');
const swiperNext = document.getElementById('swiperNext');

if(swiperPrev && swiperNext){
  swiperPrev.addEventListener('click', () => {
    console.log('click');
    mySwiper.slidePrev();
    });
    
    swiperNext.addEventListener('click', () => {
    mySwiper.slideNext();
    });
} else {
    console.log('efef');
}


