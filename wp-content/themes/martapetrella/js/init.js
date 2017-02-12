$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - ( $('.header').height() - 2 )
        }, 1000);
        return false;
      }
    }
  });
});

$(function(){
  if( $('#readOnlyForm').size() > 0 ) {
/*    $('body.single form#post').find('input, select, textarea, button').each( function() {
      $(this).attr('readonly', true).prop('disabled', true);
      if( ($(this).attr('type') =='radio') || $(this).attr('type') =='checkbox' ) {
        if ( $(this).attr('checked') != 'checked' ) {
          $(this).parents('li').hide();
        } else {
          $(this).hide();
        }
      }
    });*/
    //$('#readOnlyForm').show();
  }
});

function addLightbox( button ) {
  lightbox = button.data('lightbox-button');
  elem = $('[data-lightbox="'+lightbox+'"]');
  classes = ( ! elem.attr('class') || elem.attr('class') == '' ) ? '' : elem.attr('class');
  $('body').addClass('lightbox-is-open').append('<div onclick="removeLightbox()" class="lightbox-overlay '+classes+'"></div>');
  elem.addClass('opened-lightbox').append('<div onclick="removeLightbox()" class="lightbox-close '+classes+'"><span class="fa fa-times"></span></div>');
}

function removeLightbox() {
  $('body').removeClass('lightbox-is-open');
  $(('.lightbox-overlay, .lightbox-close')).remove();
  $('.opened-lightbox').removeClass('opened-lightbox');
}
