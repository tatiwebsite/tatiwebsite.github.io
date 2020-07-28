
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
        
if (isMobile.any()){
        body.classList.add('touch');

        // let link = document.querySelectorAll('.menu__link');
        // let i;

        // for(i = 0; i < link.length; i++){
        //     link[i].addEventListener('click', function(){
        //         this.classList.toggle('active');
        //         let submenu = this.nextElementSibling;
        //         submenu.classList.add('active');
        //     });
        // }
        // let arrow = document.querySelectorAll('.menu__arrow');
        // const target = arrow.target;

        // arrow.forEach(function(item, i, arrow) {
        //     item.addEventListener('click', function(item, i){
        //         if (target == item){
        //             arrow.classList.toggle('active');
        //         } else {
        //             console.log('jjhh');
        //         }
        //     });
        // });
      
} else {
    body.classList.add('mouse');
}