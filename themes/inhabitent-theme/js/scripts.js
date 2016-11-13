(function( $ ) {
  $('.show-search').on('click', function(event){
    event.preventDefault();
    $('input[type=search]').animate({width: 'toggle'}).focus();
  });

  var bodyClasses = $("body").hasClass("home");

  //This will add class if body has certain class
  if(bodyClasses){
    $("#masthead").addClass("reverse-nav");
  }


  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var height = $(window).height();
    if (scroll >= height & bodyClasses) {
        $("#masthead").removeClass("reverse-nav");
    } else {
        $("#masthead").addClass("reverse-nav");
    }
  });

})( jQuery );
