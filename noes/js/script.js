'use strict';
  
const mySwiper = new Swiper('.swiper', {
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
  slidesPerView: 3,
  centeredSlides: true,
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    576: {
      slidesPerView: 2.2,
      spaceBetween: 20,
      centeredSlides: false,

    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  }
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
}


const mySwiper2 = new Swiper('.swiper-doc', {
  pagination: {
  el: '.swiper-pagination',
  clickable: true,
  },
  zoom: {
    maxRatio: 1.2,
    minRatio: 1.2
  },
  navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
  },
  loop: true,
  centeredSlides: true,
  spaceBetween: 20,  
  slidesPerView: 1,
});

// let swiperDocs = document.querySelector('.swiper-docs');
// swiperDocs.addEventListener('click', (e) => {
//   if(e.target && e.target.classList.contains('swiper-slide')){
//     console.log('df');
//     e.target.classList.add('sd');
//   }
// });

const swiperPrevDoc = document.getElementById('swiperPrevDoc');
const swiperNextDoc = document.getElementById('swiperNextDoc');

if(swiperPrevDoc && swiperNextDoc){
  swiperPrevDoc.addEventListener('click', () => {
    mySwiper2.slidePrev();
    });
    
    swiperNextDoc.addEventListener('click', () => {
    mySwiper2.slideNext();
    });
}

window.addEventListener('DOMContentLoaded', () => {

let burger = document.querySelector(".burger"),
    menu = document.querySelector('.menu'),
    menuClose = document.querySelector('.menu__close'),
    body = document.querySelector('body');

burger.addEventListener('click', () => {
  menu.classList.add('active');
  body.classList.add('locked');
});

menuClose.addEventListener('click', () => {
  menu.classList.remove('active');
  body.classList.remove('locked');
});

let acc = document.querySelectorAll(".questions__content");

    acc.forEach(function (item, i, arr) {
        item.addEventListener("click", function() {
            arr.forEach(function(q) {
                if (q !== item) {
                    toggleAcc(q, true);
                }
            });

            toggleAcc(item);
        });
    });

    function toggleAcc(tab, closeOnly) {
        let answer = tab.nextElementSibling;
        let plus = tab.lastElementChild;

        if (answer.style.maxHeight && answer.style.maxHeight != "0px" || closeOnly){
            answer.style.maxHeight = 0;
            plus.style.color = '#4285f0';
        } else {
            answer.style.maxHeight = answer.scrollHeight + "px";
            plus.style.color = '#ea4330';
        } 
    }

// Tabs
    
    let tabs = document.querySelectorAll('.tabsheader__item'),
        tabsContent = document.querySelectorAll('.tabcontent'),
        tabsParent = document.querySelector('.tabsheader__items');

    if(tabsContent.length != 0){
      hideTabContent();
      showTabContent();
      tabsParent.addEventListener('click', function(event) {
        const target = event.target;
        if(target && target.classList.contains('tabsheader__item')) {
          tabs.forEach((item, i) => {
              if (target == item) {
                  hideTabContent();
                  showTabContent(i);
              }
          });
      }
      });
    }
    function hideTabContent() {
        
        tabsContent.forEach(item => {
            item.classList.add('hide');
            item.classList.remove('show', 'fade');
        });

        tabs.forEach(item => {
            item.classList.remove('tabsheader__item_active');
        });
    }

    function showTabContent(i = 0) {
        tabsContent[i].classList.add('show', 'fade');
        tabsContent[i].classList.remove('hide');
        tabs[i].classList.add('tabsheader__item_active');
    }

  //Записаться на программу
  const orderBtn = document.querySelector('.tab-program__btn'),
        orderModal = document.querySelector('[data-modal="order"]'),
        tabsContainer = document.querySelector('.tabs__container');

  if(orderBtn){
    orderBtn.addEventListener('click', () => {
      let activeWay;
      tabsParent.forEach((item) => {
        if(item.classList.contains('active')) {
          activeWay = item.textContent;
        }
      }); 

    }); 

    tabsContainer.addEventListener('click', (e) => {
      if(e.target && e.target.classList.contains('tab-program__btn')){
        let activeWay;
        tabs.forEach((item) => {
          if(item.classList.contains('tabsheader__item_active')) {
            activeWay = item.textContent;
          }
        let programItem = e.target.closest('.tab-program');
        console.log(programItem);
        let progName = programItem.querySelector('.tab-program__title').textContent;
        let inputWp = document.getElementById('inputWP');
        inputWp.value = `Направление "${activeWay}". Программа ${progName}`;
        orderModal.classList.add('opened');
        body.classList.add('locked');
      }); 
      }
    });

    document.querySelector('.order-modal__close').addEventListener('click', () => {
      orderModal.classList.remove('opened');
      body.classList.remove('locked');
    });
  }  

  //Оставить заявку
  const callBtn = document.querySelectorAll('.contact-company__btn'),
        callModal = document.querySelector('[data-modal="call"]');

        callBtn.forEach((item) => {
          item.addEventListener('click', openCall);
        });

        function openCall(){
          callModal.classList.add('opened');
          body.classList.add('locked');
        }

        callModal.querySelector('.order-modal__close').addEventListener('click', () => {
          callModal.classList.remove('opened');
          body.classList.remove('locked');
        });
});
