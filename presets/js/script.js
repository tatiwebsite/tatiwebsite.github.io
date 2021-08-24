'use strict';

window.addEventListener('DOMContentLoaded', function() {

    const cart = document.querySelector('.cart'),
          body = document.querySelector('body'),
          cartPage = document.querySelector('.cart-page'),
          catalogWrapper = document.querySelector('.catalog__wrapper'),
          order = cartPage.querySelector('.order');

    cart.addEventListener('click', () => {
        cartPage.classList.add('opened');
        body.classList.add('lock');
    });

    cartPage.addEventListener('click', (e) => {
        if(e.target && e.target.classList.contains('cart-page')){
            cartPage.classList.remove(('opened'));
            body.classList.remove('lock');
        }
    });

    catalogWrapper.addEventListener('click', (e) => {
        if(e.target && e.target.classList.contains('preset__btn')){
            const preset = e.target.closest('.preset');     
            addToCart(preset);  
        }
    });

    order.addEventListener('click', (e) => {
        switch(true) {
            case e.target && e.target.classList.contains('order-item__delete'):
                const checkedOrder = e.target.closest('.order-item'),
                    cartCounter = cart.querySelector('.cart__counter'),
                    checkedOrderAmount = checkedOrder.querySelector('.order-item__amount');

                if(+cartCounter.textContent === +checkedOrderAmount.textContent){
                    cartCounter.textContent = +cartCounter.textContent - (+checkedOrderAmount.textContent);
                    checkedOrder.remove();
                    cartPage.classList.remove(('opened'));
                    body.classList.remove('lock');
                } else {
                    cartCounter.textContent = +cartCounter.textContent - (+checkedOrderAmount.textContent);
                    checkedOrder.remove();
                }
                break;
            case e.target && e.target.classList.contains('order-item__minus'):
                let orderRow = e.target.closest('.order-item');
                minusCartCounter();
                orderMinus(orderRow);
                break;
            case e.target && e.target.classList.contains('order-item__plus'):
                let orderRowCheck = e.target.closest('.order-item');
                plusCartCounter();
                orderPlus(orderRowCheck); 
                break;
        }
    });

    function minusCartCounter(){
        let cartCounter = cart.querySelector('.cart__counter');
        if(cartCounter.textContent < 2){
            cartCounter.textContent = 0;
            cartPage.classList.remove(('opened'));
            body.classList.remove('lock');
        } else {
            cartCounter.textContent = --cartCounter.textContent;
        }
    }

    function plusCartCounter(){
        let cartCounter = cart.querySelector('.cart__counter');
        cartCounter.textContent = ++cartCounter.textContent;
    }

    function orderMinus(order){
        let orderNum = order.querySelector('.order-item__amount'),
            orderRowDataSet = order.getAttribute('data-preset'),
            checkedPreset = document.querySelector(`[data-preset="${orderRowDataSet}"]`),
            checkedPrice = checkedPreset.querySelector('.preset__price_value').textContent,
            itemPrice = order.querySelector('.order-item__price_value');

        if(+orderNum.textContent > 1) {
            orderNum.textContent = --orderNum.textContent;
            itemPrice.textContent = +itemPrice.textContent - (+checkedPrice); 

        } else {
            order.remove();
        }
    }

    function orderPlus(order){
        let orderNum = order.querySelector('.order-item__amount'),
            orderRowDataSet = order.getAttribute('data-preset'),
            checkedPreset = document.querySelector(`[data-preset="${orderRowDataSet}"]`),
            checkedPrice = checkedPreset.querySelector('.preset__price_value').textContent,
            itemPrice = order.querySelector('.order-item__price_value');

            orderNum.textContent = ++orderNum.textContent;
            itemPrice.textContent = +itemPrice.textContent + (+checkedPrice); 
    }

    function addToCart(parent){
        const presetName = parent.querySelector('.preset__name').textContent,
            presetPhoto = parent.querySelector('.preset__photo').innerHTML,
            cartCounter = cart.querySelector('.cart__counter'),
            orders = order.querySelectorAll('.order-item');

        let presetPrice = parent.querySelector('.preset__price_value').textContent;
        let orderContent = `
            <div class="order-item" data-preset="${presetName}">
                <div class="order-item__photo">${presetPhoto}</div>
                <div class="order-item__inner">
                    <div class="order-item__name">${presetName}</div>
                    <div class="order-item__data">
                        <div class="order-item__counter">
                            <button class="order-item__minus">-</button>
                            <span class="order-item__amount">1</span>
                            <button class="order-item__plus">+</button>
                        </div>
                        <div class="order-item__price">
                        <span class="order-item__price_currency">$</span>
                        <span class="order-item__price_value">${presetPrice}</span>
                    </div>
                    <div class="order-item__delete">&times;</div>
                </div>                
            </div>
        `;
            
        parent.setAttribute('data-preset', presetName);
        cartCounter.textContent = ++cartCounter.textContent;

        if(orders.length < 1){
            order.innerHTML += orderContent;
        } else {
            let ordersArray = Array.from(orders);
            let presetThis = ordersArray.find(item => item.dataset.preset === parent.dataset.preset);
            
            if (presetThis){
                let itemCount = presetThis.querySelector('.order-item__amount'),
                    itemPrice = presetThis.querySelector('.order-item__price_value');

                itemCount.textContent = ++itemCount.textContent;
                itemPrice.textContent = +itemPrice.textContent + (+presetPrice); 
            } else {
                order.innerHTML += orderContent;
            }    
        }
    }
});