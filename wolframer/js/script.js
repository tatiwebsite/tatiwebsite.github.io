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
  
    let slides = document.querySelectorAll('.about-slide'),
        closePopup = document.querySelector('.about-goals__close'),
        openNotice = document.querySelector('.private-col__notice'),
        closeNotice =  document.querySelector('.notification__close'),
        controlVersionBtn = document.querySelector('.control-bar__control'),
        routerItem = document.querySelectorAll('.router__item'),
        routerItemClose = document.querySelector('.router__popup-cancel'),
        searchCompanyBlock = document.querySelector('.functions-row'),
        statusApproval = document.querySelectorAll('.status-approval'),
        filterButton = document.querySelector('.functions-actions__filter'),
        watchGoal = document.querySelectorAll('.risks-item__watch'),
        openDropdown = document.querySelectorAll('.open-btn'),
        checkSelect = document.querySelectorAll('.check-select');
        
  
        //Открытие всех выпадающих меню (dropdown-menu)
        if(openDropdown){
          openDropdown.forEach(item => {
            item.addEventListener('click', () => {
              if(item.nextElementSibling.classList.contains('dropdown-menu')){
                item.nextElementSibling.classList.toggle('openmenu');
              }
            });
          });
        }

        //Открытие всех выпадающих select (dropdown-select)

        if(checkSelect){
          checkSelect.forEach(item => {
            item.addEventListener('click', () => {
              if(item.nextElementSibling.classList.contains('dropdown-select')){
                item.classList.toggle('openmenu');
                item.nextElementSibling.classList.toggle('openmenu');
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

        if(routerItem && routerItemClose){
          routerItem.forEach(item => {
            if(!item.classList.contains('router__item_disabled')){
              item.addEventListener('click',(e) => {
                if(e.target && e.target.classList.contains('router__plus')){
                  let openPopup = document.querySelector('.router__overlay');
                  openOverlay(openPopup);
                } 
              });
            }
          });
          routerItemClose.addEventListener('click', () => {
            let openPopup = document.querySelector('.router__overlay');
            closeOverlay(openPopup);
          })
        }

        if(searchCompanyBlock){
          searchCompanyBlock.addEventListener('click', (e) => {
            if(e.target && e.target.classList.contains('functions-actions__download')){
              let excelBlock = searchCompanyBlock.querySelector('.download-excel');
              openOverlay(excelBlock);
            } else if (e.target && e.target.classList.contains('checkbox-block__cancel')) {
              let excelBlock = searchCompanyBlock.querySelector('.download-excel');
              closeOverlay(excelBlock);
            }
          })
        }

        //Фильтр открыть
        if(filterButton){
            filterButton.addEventListener('click', () => {
            let filterParent = filterButton.closest('.functions-row'),
                filterBlock = filterParent.nextElementSibling;
            if(filterButton.classList.contains('active')){
              filterButton.classList.remove('active');
            closeOverlay(filterBlock);
            } else {
              filterButton.classList.add('active');
              openOverlay(filterBlock);
            }
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

        if(controlVersionBtn) {
          controlVersionBtn.addEventListener('click', () => {
            let versionWindow = document.querySelector('.versions-control');
            versionWindow.classList.toggle('opened');
          });
        }

        if(watchGoal){
          watchGoal.forEach(item => {
            item.addEventListener('click', () => {
              if(!item.classList.contains('to-hide')){
                openOverlay(item.nextElementSibling);
                item.classList.add('to-hide');
                item.textContent = 'Скрыть цель';
              } else {
                closeOverlay(item.nextElementSibling);
                item.classList.remove('to-hide');
                item.textContent = 'Посмотреть цель';
              }
              
            })
          });
        }

        //Стилизация статуса На согласовании
        if(statusApproval){
          statusApproval.forEach(item => {
            let statusParent = item.closest('.plan-wrapper');
            statusParent.classList.add('approval')
          });
        }

        function openModal(item){
          item.classList.add('opened');
        }
        function closeModal(item){
          item.classList.remove('opened');
        }

        function closeOverlay(item){
          item.classList.remove('open');
          item.classList.add('hide');
        }

        function openOverlay(item){
          item.classList.remove('hide');
          item.classList.add('open');
        }


    //Accordeon
    let acc = document.querySelectorAll(".risk-factors__open");
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

      let accPlans = document.querySelectorAll(".goals-plan__open");
      accPlans.forEach(function (item, i, arr) {
        item.addEventListener("click", function() {
            arr.forEach(function(q) {
                if (q !== item) {
                    toggleAcc(q, true);
                }
            });
            toggleAcc(item);
        });
      });

      let accSubPlans = document.querySelectorAll(".sub-goals-plan__open");
      accSubPlans.forEach(function (item, i, arr) {
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
        if(tab.closest('div').nextElementSibling){
          let answer = tab.closest('div').nextElementSibling,
              itemParent = tab.closest('ul');

          if (answer.style.maxHeight && answer.style.maxHeight != "0px" || closeOnly){
            answer.style.maxHeight = 0;
            tab.classList.remove('active');
            itemParent.classList.remove('active');
          } else {
            answer.style.maxHeight = answer.scrollHeight + "px";
            tab.classList.add('active');
            itemParent.classList.add('active');
          } 
        }
      }
   

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
      

  });
