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
    576: {
      slidesPerView: 1.7,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2.3,
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

  //Выбор даты в инпуте
  if(flatpickr){
    flatpickr(document.querySelector('.popup__input_date'), {
      dateFormat: 'F Y', 
      "locale": "ru",
      disableMobile: "true"
    });
  }
  
  let postBtns = document.querySelectorAll('.post-data');
  postBtns.forEach(item => {
    item.addEventListener('click', (e) => {
      console.log('click')
      e.preventDefault();
      let form = item.closest('form');
      validateForm(form);
    });
  });

  function validateForm(form){
    let inputName = form.querySelector('[data-name="name"]'),
        inputEmail = form.querySelector('[data-name="email"]'),
        inputTel = form.querySelector('[data-name="tel"]'),
        inputDate = form.querySelector('[data-name="date"]');
    
    if(inputName){
      if(inputName.value != '' && inputName.value.length < 30){
      checkInputClass(inputName);
      } else {
        inputName.classList.add('wrong');
      }
    }

    if(inputEmail){
      if(emailTest(inputEmail)){
        checkInputClass(inputEmail);
      } else {
        inputEmail.classList.add('wrong');
      }
    }

    if(inputTel){
      if(inputTel.value != '' && inputTel.value.length > 6){
        checkInputClass(inputTel);
      } else {
        inputTel.classList.add('wrong');
      }
    }
    
    if(inputDate){
      if(inputDate.value != ''){
        checkInputClass(inputDate);
      } else {
        inputDate.classList.add('wrong');
      }
    }
    
  }

  function checkInputClass(item){
    if(item.classList.contains('wrong')){
      item.classList.remove('wrong');
      item.classList.add('correct');
    } else {
      item.classList.add('correct');
    }
  }

  function emailTest(input){
    return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
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
  
  //Выбор специализации
  let checkProgram = document.querySelectorAll('.personal-programs__check-btn');
  checkProgram.forEach(item => {
    item.addEventListener('click', () => {
      let nextSelect = item.nextElementSibling;
      if(nextSelect.classList.contains('personal-programs__openmenu_active')){
        nextSelect.classList.remove('personal-programs__openmenu_active');
      } else if(nextSelect.classList.contains('personal-programs__openmenu')){
        nextSelect.classList.add('personal-programs__openmenu_active');
      }
    });
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

  //Увеличиваем изображения
  const scaleWrapper = document.querySelectorAll('.scale-img-wrapper');

  if(scaleWrapper){
    scaleWrapper.forEach(item => {
      item.addEventListener('click', (e) => {
        if(e.target && e.target.classList.contains('for-scale-img')){
          e.target.nextElementSibling.classList.add('active')
        } else if(e.target && e.target.classList.contains('scale-img') || e.target.classList.contains('overlay-popup-scale')){
          e.target.closest('div').classList.remove('active')
        }
      });
    })
  }

  var inputs = document.querySelectorAll(".iti-flag");
  inputs.forEach(input => {
    window.intlTelInput(input, {
      utilsScript: "js/utils.js",
      customPlaceholder : function ( selectedCountryPlaceholder ,  selectedCountryData )  { 
        return  "eg"  +  selectedCountryPlaceholder ; 
      }
    });
  });
 

  //Подробнее о программе
  const aboutBtns = document.querySelectorAll('.program__about');

  aboutBtns.forEach((item) => {
    item.addEventListener('click', () => {
      let aboutBlock = item.nextElementSibling;
      if(aboutBlock.classList.contains('about-overlay')){
        openOverlay(aboutBlock);
      }
    })
  });

  //Выбрать специализации
  const checkedPrograms = document.querySelectorAll('.personal-programs-checked');
  checkedPrograms.forEach(item => {
    let activeCheck = 0;

    if(!item.classList.contains('active')){
      activeCheck++;
    }
    if(activeCheck > 0){

      item.addEventListener('change', () => {
        item.classList.toggle('active');
        if(item.classList.contains('active')){
          let programName = item.closest('label').textContent.trim();
          let allProgrammsTitle = document.querySelectorAll('.checked-programs__title');
          allProgrammsTitle.forEach(item => {
            if(item.textContent.toLowerCase() == programName.toLowerCase()){
              item.closest('.checked-programs').classList.add('active');
              activeCheck++;
            }
          });
          checkedPrograms.forEach(item => {
            if(!item.classList.contains('active')){
              let programName = item.closest('label').textContent.trim();
              let allProgrammsTitle = document.querySelectorAll('.checked-programs__title');
              allProgrammsTitle.forEach(item => {
                if(item.textContent.toLowerCase() == programName.toLowerCase()){
                  item.closest('.checked-programs').classList.remove('active');
                  activeCheck--;
                }
              });
            } 
          });
        } else {
          let programName = item.closest('label').textContent.trim();
          let allProgrammsTitle = document.querySelectorAll('.checked-programs__title');
          allProgrammsTitle.forEach(item => {
            if(item.textContent.toLowerCase() == programName.toLowerCase()){
              item.closest('.checked-programs').classList.remove('active');
            }
          });
        }
      });
    } 
    
  });

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

  // Tabs
      
  let tabs = document.querySelectorAll('.tabsaside__item'),
  tabsContent = document.querySelectorAll('.tabcontent'),
  tabsParent = document.querySelector('.tabsaside__items');

  if(tabsContent.length != 0){
    hideTabContent();
    showTabContent();
    tabsParent.addEventListener('click', function(event) {
      const target = event.target;
      if(target && target.classList.contains('tabsaside__item')) {
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
        item.classList.remove('tabsaside__item_active');
    });
  }

  function showTabContent(i = 0) {
    tabsContent[i].classList.add('show', 'fade');
    tabsContent[i].classList.remove('hide');
    tabs[i].classList.add('tabsaside__item_active');
  }
        
//Поиск программы
const searchInput = document.querySelector('.personal-programs__search');
if(searchInput){
  searchInput.addEventListener('input', function(){
    let val = this.value.trim();
    let programms = document.querySelectorAll('.program');

    if(val != ''){
      programms.forEach((item) => {
        console.log('input')

        if(item.innerText.toLowerCase().search(val.toLowerCase()) == -1) {
          item.classList.add('hide');
        } else {
          item.classList.remove('hide');
        }
      });
    }
    else {
      programms.forEach((item) => {
        item.classList.remove('hide');
      });
    }
  }); 
}
});