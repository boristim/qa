(function ($) {
  Drupal.behaviors.b3 = {
    attach: function (context, settings) {
      $(window).on('scroll', function () {
        var main = $('.main-container');
        var answer = $('#answer_form_container');
        bm = main.height() + main.offset().top;
        ba = answer.height() + answer.offset().top;
        if (ba > bm) {
          answer.css({position: 'absolute'});
        } else {
          // answer.css({position: 'fixed'});
        }
      })
    }
  };
})(jQuery);
