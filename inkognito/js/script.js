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
});
