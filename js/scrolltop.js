$(document).ready(function() {
  
  var btn = $('#scrollToTop ');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.css("visibility","visible");
    } else {
      btn.css("visibility","hidden");
    }
  });

  btn.on('click', function() {
    $('html, body').animate({scrollTop:0}, 1000);
  });

});