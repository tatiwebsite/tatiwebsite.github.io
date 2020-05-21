
let openModal = document.querySelectorAll(".button"),
    modal = document.getElementById("consultation"),
    overlay = document.querySelector(".overlay"),
    menu = document.querySelector('.menu'),
    menuItem = document.querySelectorAll('.menu_item'),
    hamburger = document.querySelector('.hamburger');

    openModal[0].onclick = function() {
      modal.style.display = 'block';
      overlay.style.display = 'block';
    };

    openModal[1].onclick = function() {
      modal.style.display = 'block';
      overlay.style.display = 'block';
    };

    openModal[2].onclick = function() {
      modal.style.display = 'block';
      overlay.style.display = 'block';
    };

   overlay.onclick = function (e) {
      if(e.target === overlay) {
        overlay.style.display = '';
      }
    };
    
 $(document).ready(function() {
  $('.hamburger').click(function(event) {
    $('.hamburger, .menu').toggleClass('active');
  });
 

    function validateForms (form) {
      $(form).validate({
        rules: {
          name: "required",
          surname: "required",
          email: {
            required: false
          },
          phone: "required"
        }
      });
    }

    $.validator.messages.required = '';

    validateForms('#consultation form');

    $('input[name=phone]').mask("+7 (999) 999-99-99");


    $('form').submit(function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "mailer/smart.php",
        data: $(this).serialize()
      }).done(function() {
        $(this).find("input").val("");
        $('#consultation').fadeOut();
        $('.overlay, #thanks').fadeIn('slow');

        $('form').trigger('reset');
      });
      return false;
    });



    $("a[href^='#']").click(function(){
      const _href = $(this).attr("href");
      $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
      return false;
    }); 
  });