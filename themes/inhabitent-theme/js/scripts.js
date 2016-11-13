(function( $ ) {
  $('.show-search').on('click', function(event){
    event.preventDefault();
    $('input[type=search]').animate({width: 'toggle'}).focus();
  });
})( jQuery );
