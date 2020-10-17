

$(document).ready(function() {

  $('.hamburger').click(function(event) {
    $('.hamburger, .menu').toggleClass('active');
  });

  $('[data-modal=consultation]').on('click', function() {
    $('#overlaymodal, #consultation').fadeIn('slow');
  });

  $("#overlaymodal").click(function(e) { 
    if($(e.target).closest(".modal").length==0) $("#overlaymodal").css("display","none");
  });

  $("#overlaydone").click(function(e) { 
    if($(e.target).closest(".modal-done").length==0) $("#overlaydone").css("display","none");
  });



$('input[name=phone]').mask("+7 (999) 999-99-99");



function validateForm(form){
  $(form).validate({
  errorClass: "invalid",
  errorElement: "div",
  rules: {
  // simple rule, converted to {required:true}
  userName: {
  required: true,
  minlength: 2,
  maxlength: 15
  },
  userPhone: {
  required: true,
  minlength: 17
  },
  },
  submitHandler: function (form) {
  $.ajax({
  type: "POST",
  url: "mailer/smart.php",
  data: $(form).serialize(),
  success: function(){
  $(form).find('input').val("");
  $('#overlaymodal, #consultation').fadeOut();
  $('#overlaydone, #thanks').fadeIn('slow');
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
  validateForm('.feed-form');

$("a[href^='#']").click(function(){
  const _href = $(this).attr("href");
  $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
  return false;
  }); 
});




