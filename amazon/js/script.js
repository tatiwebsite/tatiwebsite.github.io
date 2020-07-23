    let plus = document.getElementById('plus');
    let answer = document.querySelector('.questions__answer');

    plus.onclick = function() {
      answer.classList.toggle('active');
    };
//BURGER
    let burger = document.querySelector('.hamburger');
    let menu = document.querySelector('.menu');

    burger.onclick = function() {
      burger.classList.toggle('active');
      menu.classList.toggle('active');
    };




