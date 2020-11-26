window.addEventListener('DOMContentLoaded', function(){

    const agreeCookieMob = document.querySelector('.cookies-mob__agree'),
          notCookieMob = document.querySelector('.cookies-mob__not'),
          cookiesMob = document.querySelector('.cookies-mob'),
          agreeCookieDesk = document.querySelector('.cookies-desk__agree'),
          notCookieDesk = document.querySelector('.cookies-desk__not'),
          cookiesDesk = document.querySelector('.cookies-desk'),
          ticker = document.querySelector('.footer__animate');

    agreeCookieMob.addEventListener('click', function(){
        cookiesMob.classList.add('cookies-mob_hide');
        cookiesMob.classList.add('cookies-mob_hide');
    });

    notCookieMob.addEventListener('click', function(){
        cookiesMob.classList.add('cookies-mob_hide');
    });

    agreeCookieDesk.addEventListener('click', function(){
        cookiesDesk.classList.add('cookies-desk_hide');
        cookiesDesk.classList.add('cookies-desk_hide');
    });

    notCookieDesk.addEventListener('click', function(){
        cookiesDesk.classList.add('cookies-desk_hide');
    });

//AnimateTicker
    function animateTicker() {
        ticker.classList.add('footer__animate_on');
    }
    
    function animateTickerByScroll () {
        if(window.pageYOffset + document.documentElement.clientHeight >= document.documentElement.scrollHeight) {
            animateTicker();
            window.removeEventListener('scroll', animateTickerByScroll); 
        }
    }

    window.addEventListener('scroll', animateTickerByScroll);

});