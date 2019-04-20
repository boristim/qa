(function ($) {
  Drupal.behaviors.b3 = {
    attach: function (context, settings) {
      $('#block-locale-language .en a').click(function () {
        alert('This page is under construction');
        return false;
      })
      $(window).on('scroll', function () {
        if ($('#answer_form_container').length) {
          var main = $('.main-container');
          var answer = $('#answer_form_container');
          bm = main.height() + main.offset().top;
          if (answer.height() + answer.offset().top > bm) {
            answer.removeClass('pos-fix')
            answer.addClass('pos-abs')
          }
          if ($(window).scrollTop() + $(window).height() < bm) {
            answer.removeClass('pos-abs');
            answer.addClass('pos-fix');
          }
        }
      })
    }
  };
})(jQuery);
