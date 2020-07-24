
//BURGER
    let burger = document.querySelector('.menu-mobile');
    let menu = document.querySelector('.menu');

    burger.onclick = function() {
      burger.classList.toggle('active');
      menu.classList.toggle('active');
    };

  
    let openClass = document.querySelectorAll('.questions__content');
    openClass.forEach(function(n) {
      n.onclick = function(){
        let answer = n.parentNode.querySelector('.questions__answer');
        if (answer.style.display != 'block') {
          answer.style.display = 'block';
        } else {
          answer.style.display = 'none';
        }
      };
    });

   
