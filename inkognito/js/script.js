$(document).ready(function() {
    //Аккордеон
    $('.portfolio__case').click(function(){
        $(this).next().slideToggle(200);
    });

    $('.portfolio__type').click(function(){
        $(this).next().slideToggle(200);
    });

    //Бургер
    $('.hamburger').click(function(event){
        $('.hamburger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });

    //Открываем и закрываем все окна, кроме формы
    $('.open-popup').click(function(){
        $(this).next('.overlay').fadeIn('slow');
        $('body').addClass('lock');
    });

    $('.overlay').click(function(e) { 
        if($(e.target).closest(".popup").length==0) $('.overlay').fadeOut('slow');
        $('body').removeClass('lock');
      });

    $('.popup__close').click(function(){
        $('.overlay').fadeOut('slow');
        $('body').removeClass('lock');
    });

    //Открываем и закрываем форму

    $('.prices__button').click(function(){
        $('#overlay-form').fadeIn('slow');
        $('body').addClass('lock');
    });

    $('.overlay-form').click(function(e) { 
        if($(e.target).closest(".popup-form").length==0) $('.overlay-form').fadeOut('slow');
        $('body').removeClass('lock');
      });

    $('.popup-form__close').click(function(){
        $('.overlay-form').fadeOut('slow');
        $('body').removeClass('lock');
    });

    //Плавный скролл
    $("a[href^='#']").click(function(){
        const _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
      }); 
});
