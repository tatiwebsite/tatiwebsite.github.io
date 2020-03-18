$(document).ready(function(){

    //Валидация формы
    $('#form').validate({
        rules: {
          name: "required",
          phone: "required",
          email: {
            required: true,
            email: true
          }
        },
        messages: {
          name: "Пожалуйста, введите ваше имя",
          phone: "Пожалуйста, введите ваш номер телефона",
          email: {
            required: "Пожалуйста, введите адрес почтового ящика",
            email: "Адрес почтового ящика введен неверно"
          }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.parent("td").next("td") );
          }
      });

      //Scroll
      $("a[href^='#']").click(function(){
        const _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
      }); 

      //Ajax
      $('form').submit(function(e) {
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "mailer/smart.php",
          data: $(this).serialize()
        }).done(function() {
          $(this).find("input").val("");
          $('#contacts-form').fadeOut();
          $('#thanks').fadeIn('slow');
  
  
          $('form').trigger('reset');
        });
        return false;
      });
      

});