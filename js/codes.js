jQuery(document).ready(function ($) {

  $('.hover').hover(function() {
    $(".li-box").css('border-top', '1px solid #f1f1f1');

  });

  //Code for sliding out sidebar

  $(".header-mobile-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

   $(".rslides").responsiveSlides();

});
