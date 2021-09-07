'use strict';

new Swiper('.partners__swiper', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    grabCursor: true,
    slideToClickedSlide: true,
    loop: true,
    autoHeight: true,
    slidesPerView: 2,
    spaceBetween: 25,
    slidesPerGroup: 1,
    speed: 800,

    breakpoints:{
        320: {
            slidesPerView: 2,
        },
        576: {
            slidesPerView: 4,
        }
    },

    preloadImages: false,
    
    // watchSlidesProgress: true,
    // watchSlidesVisibility: true,
});

const form = document.querySelector('.form'),
      formButton = form.querySelector('.form__btn'),
      thanksOverlay = document.querySelector('.thanks'),
      thanksClose = document.querySelector('.thanks__close'),
      body = document.querySelector('body');


    thanksOverlay.addEventListener('click', (e) => {
        if((e.target && e.target.classList.contains('thanks')) || (e.target && e.target.classList.contains('thanks__close'))){
            thanksOverlay.classList.remove('.opened');
            body.classList.remove('locked');
        }
    });

    function openThanks(){
        thanksOverlay.classList.add('opened');
        body.classList.add('locked');
    }
      
form.addEventListener('submit', sentForm);

async function sentForm(e){
    e.preventDefault();

    let error = formValidate(form);

    let formData = new FormData(form);

    if(error === 0){
        console.log('error 0');
        let response = await fetch('mailer/smart.php', {
            method: 'POST',
            body: formData
        });
        if(response.ok){

            // let result = await response.json();
            // alert(result.message);
            form.reset();
            openThanks();
        } else {
            alert('Ошибка');
        }
    } else {
        console.log('error no 0');
    }
}

function formValidate(form){
    const inputs = form.querySelectorAll('._required');
    let error = 0;
    inputs.forEach((input) => {
        formRemoveError(input);
        if(input.classList.contains('_email')){
            if(emailTest(input)){
                formAddError(input);
                error++;
            }
        } else if(!input.value){
            formAddError(input);
            error++;
        }
    });    
    return error;
}

function formAddError(input){
    input.classList.add('_error');
}

function formRemoveError(input){
    input.classList.remove('_error');
}

//Функция валидации эл.почты
function emailTest(input){
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
}

