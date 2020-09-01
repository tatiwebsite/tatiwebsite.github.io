





    


window.addEventListener('DOMContentLoaded', function() {

    //BURGER//

    let burger = document.querySelector('.header__menu-mobile');
    let menu = document.querySelector('.menu');

    burger.addEventListener('click', function(){
        burger.classList.toggle('active');
        menu.classList.toggle('active');  
    });

    // Tabs
    
	let tabs = document.querySelectorAll('.catalog__tab'),
        tabsContent = document.querySelectorAll('.catalog__content'),
		tabsParent = document.querySelector('.catalog__tabs');

	function hideTabContent() {
        
        tabsContent.forEach(item => {
            item.classList.add('catalog__content_hide');
            item.classList.remove('catalog__content_show', 'catalog__content_fade');
        });

        tabs.forEach(item => {
            item.classList.remove('catalog__tab_active');
        });
	}

	function showTabContent(i = 0) {
        tabsContent[i].classList.add('catalog__content_show', 'catalog__content_fade');
        tabsContent[i].classList.remove('catalog__content_hide');
        tabs[i].classList.add('catalog__tab_active');
    }
    
    hideTabContent();
    showTabContent();

	tabsParent.addEventListener('click', function(event) {
		const target = event.target;
		if(target && target.classList.contains('catalog__tab')) {
            tabs.forEach((item, i) => {
                if (target == item) {
                    hideTabContent();
                    showTabContent(i);
                }
            });
		}
    });
    
    
    
    let showAll = document.querySelectorAll('.catalog__showall');

    showAll.forEach(item => {
        item.addEventListener('click', () => {
            const catalogItems = item.previousElementSibling.querySelectorAll('.catalog__item');

            catalogItems.forEach(catalogElem => {
                if (catalogElem.classList.contains('catalog__item_show')) {
                    console.log('Уже показан');
                } else {
                    catalogElem.classList.add('catalog__item_show'); 
                    catalogElem.classList.add('catalog__item_fade'); 
                    item.classList.add('catalog__showall_hide');

                }
            });
        });
    });

    let prevScrollpos = window.pageYOffset;

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;
        
        if (prevScrollpos > currentScrollPos) {
            if (window.matchMedia("(min-width: 992px)").matches) {
                document.getElementById("menu").style.top = "93px";
                document.getElementById("header").style.top = "0";
            } else {
                document.getElementById("header").style.top = "0";
                menu.classList.remove('active');
            }
            // document.getElementById("menumobile").style.top = "-57px";
        } else {
            if (window.matchMedia("(min-width: 992px)").matches) {
                document.getElementById("menu").style.top = "-100px";
                document.getElementById("header").style.top = "-100px";
            } else {
                
                if (burger.classList.contains('active')) {
                    burger.classList.remove('active');
                    menu.classList.remove('active');
                } else {
                    document.getElementById("header").style.top = "-100px";
                }
            }  
        }
        prevScrollpos = currentScrollPos;
    });

});