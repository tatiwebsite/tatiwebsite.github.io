



window.addEventListener('DOMContentLoaded', function(){

  const animItems = document.querySelectorAll('._anim-items');
  
  if(animItems.length > 0){
    window.addEventListener('scroll', animOnScroll);     

    function animOnScroll(params){
        for(let index = 0; index < animItems.length; index++) {
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 4;
    
            let animItemPoint = window.innerHeight - animItemHeight / animStart;
    
            if(animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }
    
            if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
                animItem.classList.add('_active');
            } 
        }
    }

    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {
            top: rect.top + scrollTop,
            left: rect.left + scrollLeft
        }
    }
    animOnScroll();
}


});



$(document).ready(function() {

    $('.menu-mobile').click(function(event) {
      $('.menu-mobile, .menu').addClass('active');
    });
    $('.menu__close').click(function(event) {
      $('.menu-mobile, .menu').removeClass('active');
    });
  
    $('[data-modal=openmodal]').on('click', function() {
      $('#overlaymodal').addClass('show');
    });
  
    $('.pop-up__close').on('click', function() {
      $('#overlaymodal').removeClass('show');
    });

    $("#overlaymodal").click(function(e) { 
      if($(e.target).closest(".pop-up").length==0) $("#overlaymodal").removeClass('show');
    });

    $('.thanks__close').on('click', function() {
      $('#overlaydone').removeClass('show');
    });

    $("#overlaydone").click(function(e) { 
      if($(e.target).closest(".thanks").length==0) $("#overlaydone").removeClass('show');
    });
  
  
  function validateForm(form){
    $(form).validate({
        errorClass: "invalid",
        errorElement: "div",
        rules: {
        // simple rule, converted to {required:true}
          userName: {
            required: true,
            minlength: 1,
            maxlength: 15
          },
          userPhone: {
            required: true,
            minlength: 6,
            maxlength: 20
          },
          userEmail: {
            required: true,
          }
        },
        messages: {
          userName: {
            required: ''
          },
          userEmail: {
            email: "Введите корректный email для получения доступа"
          },
          userPhone: {
            minlength: "Введите корректный номер для связи с вами"
          }
        },
        
        submitHandler: function (form) {
          $.ajax({
            type: "POST",
            url: "telegram.php",
            data: $(form).serialize(),
            success: function(){
              $(form).find('input').val("");
              $('#overlaymodal').fadeOut();
              $('#overlaydone, #thanks').addClass('show');
              return true;
              },
            error: function(jqXHR, textStatus) {
            console.error(jqXHR + " " + textStatus);
            }
        });
      }
    });
    $.validator.messages.required = '';
    }
    validateForm('.pop-up__form');
  

      $("a[href^='#']").click(function(){
        const _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
        }); 
  });

