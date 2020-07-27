
//BURGER
    let burger = document.querySelector('.menu-mobile');
    let menu = document.querySelector('.menu');

    burger.onclick = function() {
      burger.classList.toggle('active');
      menu.classList.toggle('active');
    };


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

    // let plus = document.querySelectorAll(".questions__plus");

    // for(i=0, i<arrow.length, i++) {
    //     plus[i].addEventListener('click', function(){

    // });
    // }
