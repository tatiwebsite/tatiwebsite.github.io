
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

        if (answer.style.maxHeight && answer.style.maxHeight != "0px" || closeOnly){
            answer.style.maxHeight = 0;
        } else {
            answer.style.maxHeight = answer.scrollHeight + "px";
        } 
    }

