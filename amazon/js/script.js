
//BURGER
    let burger = document.querySelector('.menu-mobile');
    let menu = document.querySelector('.menu');

    burger.onclick = function() {
      burger.classList.toggle('active');
      menu.classList.toggle('active');
    };

//ACCORDION//
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

//COOKIE//
    
let buttonCookie = document.querySelectorAll('.cookie__buttons > button');
    let cookie = document.querySelector('.cookie');

    buttonCookie[0].addEventListener('click', function(){
        cookie.classList.add('hide');
    });

    buttonCookie[1].addEventListener('click', function(){
        cookie.classList.add('hide');
    });


//MENU MOBILE//

let isMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
};
        let body = document.querySelector('body');
        // let link = document.querySelectorAll(".menu__link");
        
        if (isMobile.any()){
            body.classList.add('touch'); 
            
            const link = document.querySelectorAll("[data-link=sublink]");
    
            function toggleSubmenu(tab, closeOnly) {
                const submenu = tab.querySelector('.submenu__list');
                const arrow = tab.querySelector('.menu__arrow');
    
                if (submenu.style.maxHeight && submenu.style.maxHeight != "0px" || closeOnly){
                    submenu.style.maxHeight = 0;
                    arrow.style.transform = 'rotate(45deg)';
                } else {
                    submenu.style.maxHeight = submenu.scrollHeight + "px";
                    arrow.style.transform = 'rotate(225deg)';
                } 
            } 
    
            link.forEach(function (item, i, arr) {
                item.addEventListener("click", function() {
                    arr.forEach(function(q) {
                        if (q !== item) {
                            toggleSubmenu(q, true);
                        }
                    });
        
                    toggleSubmenu(item);
                });   
            });
        
            
    } else {
        body.classList.add('mouse');
    }