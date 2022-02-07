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
    280: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    450: {
      slidesPerView: 1.3,
      spaceBetween: 20,
    },
    520: {
      slidesPerView: 1.7,
      spaceBetween: 20,
    },
    660: {
      slidesPerView: 2,
      spaceBetween: 20,
      centeredSlides: false,
    },
    991: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  }
});

const swiperPrev = document.getElementById('swiperPrev');
const swiperNext = document.getElementById('swiperNext');

if(swiperPrev && swiperNext){
  swiperPrev.addEventListener('click', () => {
    mySwiper.slidePrev();
    });
    
    swiperNext.addEventListener('click', () => {
    mySwiper.slideNext();
    });
}


window.addEventListener('DOMContentLoaded', () => {

  if(flatpickr){
    flatpickr(document.querySelector('.popup__input_date'), {
      dateFormat: 'F Y', 
      "locale": "ru"
    });
  }
  

  let locWindow = window.location.pathname.slice(1);
  
  let linksNav = document.querySelectorAll('.menu__link');
  linksNav.forEach(link => {
    let linkData = link.getAttribute('data-path');
    if(locWindow == link.dataset.path){
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
  
    
  //Burger
  let burger = document.querySelector('.burger'),
      menu = document.querySelector('.menu'),
      menuClose = document.querySelector('.menu__close'),
      body = document.querySelector('body');

  burger.addEventListener('click', () => {
    openOverlay(menu);
  });

  menuClose.addEventListener('click', () => {
    closeOverlay(menu);
  });

  //Accordeon
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
      plus.classList.remove('active');
    } else {           
      answer.style.maxHeight = answer.scrollHeight + "px";
      plus.classList.add('active');
    } 
  }
  
  //Открыть больше в admission
  let showMore = document.querySelectorAll(".show-more");

  showMore.forEach(btn => {
    btn.addEventListener('click', () => {
      let hideAnswer = btn.nextElementSibling;
      let admissionBlocks = document.querySelectorAll('.admission__inner');

      if(!btn.classList.contains('active') && hideAnswer.classList.contains('hide')){
        btn.classList.add('active');
        hideAnswer.style.maxHeight = hideAnswer.scrollHeight + "px";
        admissionBlocks.forEach(item => {
          item.classList.add('short');
        });
      } else if (btn.classList.contains('active') && hideAnswer){
        admissionBlocks.forEach(item => {
          setTimeout(() => item.classList.remove('short'), 298);
        });
        hideAnswer.style.maxHeight = '0';
        btn.classList.remove('active');
      }
    });
  });

  //Открыть больше training
  let programmsWrapper = document.querySelectorAll('.programms__block');
  programmsWrapper.forEach(item => {
    item.addEventListener('click', (e) => {
      if(e.target && e.target.classList.contains('programms__open')){
        let btn = e.target,
            list = item.querySelector('.programms__list');
        if(!btn.classList.contains('active')){
          btn.classList.add('active');
          list.classList.remove('hide');
        } else {
          btn.classList.remove('active');
          list.classList.add('hide');
        }
      }
    });
  });

  //Увеличиваем изображения
  const scaleWrapper = document.querySelectorAll('.scale-img-wrapper');

  if(scaleWrapper){
    scaleWrapper.forEach(item => {
      item.addEventListener('click', (e) => {
        if(e.target && e.target.classList.contains('scale-img')){
          if(e.target.classList.contains('scale')){
            e.target.classList.remove('scale')
          } else {
            let imgIncreased = item.querySelector('.scale-img.scale');
              if(imgIncreased ) {
                imgIncreased.classList.remove('scale');
              }
            e.target.classList.add('scale');
          }
        }
      });
    })
  }


        // var input = document.querySelector("#phone");
        // intlTelInput(input, {
        //   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.15/js/intlTelInput.min.js",
        //   customPlaceholder : function ( selectedCountryPlaceholder ,  selectedCountryData )  { 
        //     return  "eg"  +  selectedCountryPlaceholder ; 
        //   }
        // });

        // //Записаться на программу
        // const orderBtn = document.querySelector('.tab-program__btn'),
        //       orderModal = document.querySelector('[data-modal="order"]'),
        //       tabsContainer = document.querySelector('.tabs__container');
    
        // if(orderBtn){
        //   orderBtn.addEventListener('click', () => {
        //     let activeWay;
        //     tabsParent.forEach((item) => {
        //       if(item.classList.contains('active')) {
        //         activeWay = item.textContent;
        //       }
        //     }); 
        //   }); 
    
        //   tabsContainer.addEventListener('click', (e) => {
        //     if(e.target && e.target.classList.contains('tab-program__btn')){
        //       let activeWay;
        //       tabs.forEach((item) => {
        //         if(item.classList.contains('tabsheader__item_active')) {
        //           activeWay = item.textContent;
        //         }
        //       let programItem = e.target.closest('.tab-program');
        //       console.log(programItem);
        //       let progName = programItem.querySelector('.tab-program__title').textContent;
        //       let inputWp = document.getElementById('inputWP');
        //       inputWp.value = `Направление "${activeWay}". Программа ${progName}`;
        //       orderModal.classList.add('opened');
        //       body.classList.add('locked');
        //     }); 
        //     }
        //   });
    
        //   document.querySelector('.order-modal__close').addEventListener('click', () => {
        //     orderModal.classList.remove('opened');
        //     body.classList.remove('locked');
        //   });
        // }  
    
        //Оставить заявку
        const enrollPopup = document.querySelector('[data-set="enroll-overlay"]'),
              enrollBtn = document.querySelectorAll('.to-enroll'),
              callBtn = document.querySelectorAll('.to-call'),
              callPopup = document.querySelector('[data-set="call-overlay"]'),
              closePopup = document.querySelectorAll('.popup__close');
    
        enrollBtn.forEach((item) => {
          item.addEventListener('click', () => {
            openOverlay(enrollPopup);
          })
        });

        callBtn.forEach((item) => {
          item.addEventListener('click', (e) => {
            e.preventDefault();
            openOverlay(callPopup);
          })
        });

        closePopup.forEach((item) => {
          item.addEventListener('click', () => {
            let thisPopup = item.closest('.overlay-popup');
            closeOverlay(thisPopup);
          })
        });
    
        function openOverlay(item){
          item.classList.add('active');
          body.classList.add('locked');
        }

        function closeOverlay(item){
          item.classList.remove('active');
          body.classList.remove('locked');
        }
        
    });