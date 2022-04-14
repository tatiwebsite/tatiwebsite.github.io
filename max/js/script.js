'use strick';

window.addEventListener('DOMContentLoaded', () => {
    const body = document.querySelector('body'), 
        burgerBtn = document.querySelectorAll('.burger-btn'),
        headerFooter = document.querySelector('.header__footer'),
        header = document.querySelector('header'),
        mobileMenu = document.querySelector('.header-mobile'),
        headerHeight = header.offsetHeight,
        moreBtn = document.querySelectorAll('.animate-btn'),
        uiKitWatch = document.querySelectorAll('.uikit-item__watch'),
        uiKitItem = document.querySelectorAll('.uikit-item');

    let lastScrollTop = 0;
    
    //Hide header by scroll
    window.addEventListener('scroll', () => {
        hideByScroll();
    });  

    function hideByScroll(){
        let scrollDistance = window.scrollY;

        if(scrollDistance > lastScrollTop){
            if(scrollDistance >= headerHeight){
                header.classList.add('hide');
                deActiveSubMenu();

            }
        } else {
            header.classList.remove('hide');
        }

        lastScrollTop = scrollDistance;
    }

    //Open/Close Menu by burger click
    burgerBtn.forEach(burger => {
        burger.addEventListener('click', () => {
            if(document.documentElement.clientWidth <= 1024) {
                if(burger.classList.contains('header__burger')){
                    mobileMenu.classList.add('show');
                } else if(burger.classList.contains('header-mobile__less')){
                    console.log('click')
                    mobileMenu.classList.remove('show');
                }
            } else {
                if (headerFooter && headerFooter.classList.contains('show')){
                    deActiveSubMenu();
                } else {  
                    activeSubMenu();
                } 
            }
        });
    });
   

    function activeSubMenu(){
        header.classList.add('show');
        headerFooter.classList.add('show');
        burger.textContent = 'less';
    }

    function deActiveSubMenu(){
        header.classList.remove('show');
        headerFooter.classList.remove('show');
        burger.textContent = 'more';
    }

    //Animate button

    moreBtn.forEach(btn => {
        let innerText = btn.querySelector('.animate-btn__main-inner'),
                animateTextInner = btn.querySelector('.animate-btn__inner-animate'),
                btnText = btn.querySelector('.animate-btn__text').textContent;

        btn.addEventListener('mouseenter', () => {
            animateBtn(innerText, animateTextInner, btnText);
        })
        btn.addEventListener('mouseleave', () => {
            stopAnimateBtn(innerText, animateTextInner, btnText);
        })
    });

    function animateBtn(inner, textAnimateInner, btnText){
        inner.classList.add('animate');
        for(let i = 0; i < 100; i++){
            textAnimateInner.innerHTML += `<span class="animate-btn__text">${btnText}</span>`;
        }
        textAnimateInner.classList.add('animate');
    }

    function stopAnimateBtn(inner, textAnimateInner, btnText) {
        inner.classList.remove('animate');
        for(let i = 0; i < 100; i++){
            textAnimateInner.innerHTML = ``;
        }
        textAnimateInner.classList.remove('animate');
    }

   

    let counter = 0;
    // //Animation Ui-kit
    uiKitWatch.forEach(item => {
        let itemParent = item.closest('.uikit__card'),
                itemActive = itemParent.querySelector('.uikit-item'),
                itemHovers = itemParent.querySelectorAll('.uikit__hover'),
                intId;

        item.addEventListener('mouseenter', () => {
            itemActive.classList.add('active');
            body.classList.add('locked');
            
            intId = setInterval(() => {
                animateUi(counter, itemHovers)
            }, 800)
        });
        item.addEventListener('mouseleave', () => {
            itemActive.classList.remove('active');
            clearInterval(intId);
            itemHovers.forEach(photo => {
                photo.classList.remove('active');
            });
            body.classList.remove('locked');
        });
    });


    function animateUi(i, itemHovers){
        if (counter === 3) {
            counter = 0;
            showImage(counter);
        } else {
            itemHovers.forEach(photo => {
              photo.classList.remove('active');
            });
            itemHovers[i].classList.add('active');
            counter++;
        }
    }

    uiKitItem.forEach(item => {
        item.addEventListener('mouseenter', (e) => {
            item.classList.add('hover-dark');
        });
        item.addEventListener('mouseleave', (e) => {
            item.classList.remove('hover-dark');
        });
    });
   

});
