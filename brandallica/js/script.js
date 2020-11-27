const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
                        .split(';')
                        .map(cookie => cookie.split('='))
                        .reduce((acc, [key, value]) => ({...acc, [key.trim()]: value}), {});
        return cookies[key];
    },
    setItem: function(key, value) {
        document.cookie = `${key}=${value}; expires=Sun, 16 Jul 3567 06:23:41 GMT`;
    }
};


const storageType = cookieStorage;
// const storageType = sessionStorage;
const consentPropertyType = 'site_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyType);
const saveToStorage = () => storageType.setItem(consentPropertyType, true);

window.addEventListener('DOMContentLoaded', function(){

//Cookies



    const popupCookie = document.querySelector('.cookies'),
          cookieAgree = document.querySelector('.cookies__agree'),
          cookieNot = document.querySelector('.cookies__not'),
          ticker = document.querySelector('.footer__animate');

    if (shouldShowPopup()) {
        popupCookie.classList.add('cookies_active');
    }

    cookieAgree.addEventListener('click', () => {
        saveToStorage();
        popupCookie.classList.remove('cookies_active');
    });

    cookieNot.addEventListener('click', () => {
        popupCookie.classList.remove('cookies_active');
    });
    

//AnimateTicker
function animateTicker() {
    ticker.classList.add('footer__animate_on');
}

function animateTickerByScroll () {
    if(window.pageYOffset + document.documentElement.clientHeight +250 >= document.documentElement.scrollHeight) {
        animateTicker();
        window.removeEventListener('scroll', animateTickerByScroll); 
    }
}

window.addEventListener('scroll', animateTickerByScroll);

});

