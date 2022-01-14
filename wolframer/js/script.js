'use strict';

const mySwiper = new Swiper('.swiper', {
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  loop: true,
  slidesPerView: 1,
  centeredSlides: false,
  slidesPerGroup: 1
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

  // let locWindow = window.location;
  
  // let linksNav = document.querySelectorAll('.menu__link');
  // linksNav.forEach(link => {
  //   let linkData = link.getAttribute('data-path');
  //   if(locWindow == link.dataset.path){
  //     link.classList.add('active');
  //   } else {
  //     link.classList.remove('active');
  //   }
  // });
  
  // if(item.innerText.toLowerCase().search(val.toLowerCase()) == -1) 
  //   window.addEventListener('hashchange', () => {
  //     if(!shouldShowLogin()){
  //         let id = window.location.hash;
  //         showPage(id);
  //     } else {
  //         window.location.hash = '#login-page';
  //         showPage('#login-page');
  //     }    
  // });
  
    let tableBlock = document.querySelectorAll('.table-block'),
        slides = document.querySelectorAll('.about-slide'),
        closePopup = document.querySelector('.about-goals__close'),
        body = document.querySelector('body'),
        openNotice = document.querySelector('.private-col__notice'),
        closeNotice =  document.querySelector('.notification__close');
  
        if(tableBlock){
          tableBlock.forEach(i => {
            i.addEventListener('click', (e) => {
              if(e.target && e.target.classList.contains('table-block__openmenu')){
                let openMenu = e.target;
                let itemParent = openMenu.closest('.table-block');
                let dropDownMenu = itemParent.querySelector('.dropdown-menu');
                dropDownMenu.classList.toggle('openmenu');
              } else if(e.target && e.target.classList.contains('table-block__position')){
                let openMenu = e.target;
                let itemParent = openMenu.closest('.table-block');
                let dropdownSelect = itemParent.querySelector('.dropdown-select');
                dropdownSelect.classList.toggle('openmenu');
                openMenu.classList.toggle('openmenu');
              }
            });
          });
        }

        if(slides){
          slides.forEach(slide => {
            slide.addEventListener('click', (e) => {
              if(e.target && e.target.classList.contains('about-slide__more')){
                let moreDetails = e.target;
                let popUp = document.querySelector('.overlay-popup');
                popUp.classList.remove('hide');
                popUp.classList.add('open');
              }
            });
          });
        }
          
        if(closePopup){
          closePopup.addEventListener('click', () => {
            let popUp = document.querySelector('.overlay-popup');
            popUp.classList.remove('open');
            popUp.classList.add('hide');
          });
        }
         //Открыть видео
        const openVideo = document.querySelector('.promo-goals__openvideo'),
              videoBlock = document.querySelector('.promo-goals__video'),
              closeVideo = document.querySelector('.promo-goals__close-video');

        if(openVideo && videoBlock){
          openVideo.addEventListener('click', () => {
            openModal(videoBlock);
          });

          closeVideo.addEventListener('click', () => {
            closeModal(videoBlock);
          });
        }

        if(openNotice){
          let noticeBlock = document.querySelector('.notification'),
              showAllNotifications = noticeBlock.querySelector('.notification__all');

          openNotice.addEventListener('click', ()=> {
            openModal(noticeBlock);
          });
          closeNotice.addEventListener('click', ()=> {
            closeModal(noticeBlock);
          });

          showAllNotifications.addEventListener('click', () => {
            let allNotifications = noticeBlock.querySelectorAll('.notification-item');
            allNotifications.forEach(item => {
              item.classList.remove('hide');
              item.classList.add('opened');
            });
            showAllNotifications.textContent = 'Свернуть';
          });
        }

        function openModal(item){
          item.classList.add('opened');
        }
        function closeModal(item){
          item.classList.remove('opened');
        }

        

    // burger.addEventListener('click', () => {
    //   menu.classList.add('active');
    //   body.classList.add('locked');
    // });
  
    // menuClose.addEventListener('click', () => {
    //   menu.classList.remove('active');
    //   body.classList.remove('locked');
    // });
  
    // //Accordeon
    // let acc = document.querySelectorAll(".questions__content");
    //   acc.forEach(function (item, i, arr) {
    //       item.addEventListener("click", function() {
    //           arr.forEach(function(q) {
    //               if (q !== item) {
    //                   toggleAcc(q, true);
    //               }
    //           });
  
    //           toggleAcc(item);
    //       });
    //   });
  
    //   function toggleAcc(tab, closeOnly) {
    //     let answer = tab.nextElementSibling;
    //     let plus = tab.lastElementChild;
  
    //     if (answer.style.maxHeight && answer.style.maxHeight != "0px" || closeOnly){
    //         answer.style.maxHeight = 0;
    //         plus.style.color = '#4285f0';
    //     } else {
    //         answer.style.maxHeight = answer.scrollHeight + "px";
    //         plus.style.color = '#ea4330';
    //     } 
    //   }
   
  
    //   //Оставить заявку
    //   const callBtn = document.querySelectorAll('.contact-company__btn'),
    //         callModal = document.querySelector('[data-modal="call"]');
  
    //   callBtn.forEach((item) => {
    //     item.addEventListener('click', openCall);
    //   });
  
    //   function openCall(){
    //     callModal.classList.add('opened');
    //     body.classList.add('locked');
    //   }
  
    //   callModal.querySelector('.order-modal__close').addEventListener('click', () => {
    //     callModal.classList.remove('opened');
    //     body.classList.remove('locked');
    //   });
  
      // //Поиск программы
      // const searchInput = document.querySelector('.search');
      // if(searchInput){
      //   searchInput.addEventListener('input', function(){
      //     let val = this.value.trim();
      //     let activeTab = document.querySelector('.tabcontent.show'),
      //         programms = activeTab.querySelectorAll('.tab-program__title');
      
      //     if(val != ''){
      //       programms.forEach((item) => {
      //         if(item.innerText.toLowerCase().search(val.toLowerCase()) == -1) {
      //           let itemParent = item.closest('.tab-program');
      //           itemParent.classList.add('hide');
      //         } else {
      //           let itemParent = item.closest('.tab-program');
      //           itemParent.classList.remove('hide');
      //         }
      //       });
      //     }
      //     else {
      //       programms.forEach((item) => {
      //         item.classList.remove('hide');
      //       });
      //     }
      //   }); 
      // }
      
      // //Увеличиваем изображения
      // const scaleImg = document.getElementById('scale-document'),
      //       docsImgWrapper = document.getElementById('swiper-docs'),
      //       documentPhoto = document.querySelectorAll('.document-photo');
  
      // if(scaleImg){
      //   scaleImg.addEventListener('click', function() {
      //     scaleImgF(scaleImg);
      //   });
      // }
      
      // if(docsImgWrapper){
      //   docsImgWrapper.addEventListener('click', (e) => {
      //     console.log('fe');
      //     if(e.target && e.target.classList.contains('document__image')){
      //       let scaleSlide = e.target;
      //       scaleImgF(scaleSlide);
      //     }
      //   });
    
      //   documentPhoto.forEach(img => {
      //     img.addEventListener('click', function() {
      //       scaleImgF(img);
      //     });
      //   });
      // }
  
      // function scaleImgF(img){
      //   if(img.classList.contains('scale')){
      //     img.classList.remove('scale');
      //   } else {
      //     img.classList.add('scale');
      //   }
      // }
  });