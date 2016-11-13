(function( $ ) {
  $('.show-search').on('click', function(event){
    event.preventDefault();
    $('input[type=search]').animate({width: 'toggle'}).focus();
  });

  var homeClass = $("body").hasClass("home");
  var adventureClass = $("body").hasClass("single-adventure");
  var aboutClass = $("body").hasClass("page-template-page-about");

  //This will add class if body has certain class
  if(homeClass || adventureClass || aboutClass){
    $("#masthead").addClass("reverse-nav");
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if (scroll >= height & (homeClass || adventureClass || aboutClass)) {
          $("#masthead").removeClass("reverse-nav");
      } else {
          $("#masthead").addClass("reverse-nav");
      }
    });
  }




})( jQuery );
