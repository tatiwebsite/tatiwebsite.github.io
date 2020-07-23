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

    //akkordion// 

   
// let plus = document.getElementsByClassName("questions__plus");
// let i;

// for (i = 0; i < plus.length; i++) {
//   plus[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     let answer = this.nextElementSibling;
//     if (answer.style.maxHeight){
//       answer.style.maxHeight = null;
//     } else {
//       answer.style.maxHeight = answer.scrollHeight + "px";
//     } 
//   });
// }



