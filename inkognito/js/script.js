$(document).ready(function() {
    $('.portfolio__case').click(function(){
        $(this).next().slideToggle(200);
    });

    $('.portfolio__type').click(function(){
        $(this).next().slideToggle(200);
    });

    $('.hamburger').click(function(event){
        $('.hamburger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });

    $('.services__button').click(function(){
        $(this).next('.overlay').fadeIn('slow');
        $('body').toggleClass('lock');
    });

    

    $('.overlay').click(function(e) { 
        if($(e.target).closest(".popup").length==0) $('.overlay').fadeOut('slow');
      });

    $('.popup__close').click(function(){
        $('.overlay').fadeOut('slow');
    });
});
