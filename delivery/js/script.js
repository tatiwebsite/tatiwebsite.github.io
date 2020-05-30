

let openModal = document.querySelectorAll(".button"),
modal = document.getElementById("consultation"),
overlay = document.querySelectorAll(".overlay"),
menu = document.querySelector('.menu'),
menuItem = document.querySelectorAll('.menu_item'),
hamburger = document.querySelector('.hamburger');

openModal[0].onclick = function() {
  modal.style.display = 'block';
  overlay[0].style.display = 'block';
};

openModal[1].onclick = function() {
  modal.style.display = 'block';
  overlay[0].style.display = 'block';
};

openModal[2].onclick = function() {
  modal.style.display = 'block';
  overlay[0].style.display = 'block';
};

overlay[0].onclick = function (e) {
  if(e.target === overlay[0]) {
    overlay[0].style.display = '';
  }
};

overlay[1].onclick = function (e) {
    if(e.target === overlay[1]) {
      overlay[1].style.display = '';
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
      phone: "required"
    }
  });
};

$.validator.messages.required = '';

validateForms('#form');

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