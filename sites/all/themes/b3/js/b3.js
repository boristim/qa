(function ($) {
  Drupal.behaviors.b3 = {
    attach: function (context, settings) {
      var bnr = $('#block-block-1');
      var bnr0 = $('#block-block-9');
      var renderInit = function () {
        bindMenu();
        if ($('#sidebar_second').height() < $('.main-container').height()) {
          $('#sidebar_second').height($('.main-container').height());
        }
        bnr.data('start-fix', bnr.offset().top);
        bnr.data('start-width', bnr.width());
        bnr.data('end-fix', $('#sidebar_second').height() + $('#sidebar_second').offset().top);
        bnr0.data('start-fix', bnr0.offset().top);
        bnr0.data('start-width', bnr0.width());
        bnr0.data('end-fix', $('#sidebar_second').height() + $('#sidebar_second').offset().top);
      };

      $(document).ready(function () {
        if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
          setTimeout(function () {
            renderInit();
          }, 200);
        } else {
          renderInit();
        }
      })
      $('#block-menu-menu-top-menu .expanded.dropdown').on('mouseover', function () {
        $(this).addClass('open')
      }).on('mouseout', function () {
        $(this).removeClass('open')
      });
      $(window).on('resize', function () {
        bnr.css({width: 'auto'});
        bnr.data('start-width', bnr.width());
      })
      $(window).on('scroll', function () {
        var main = $('.main-container');
        if ($('#answer_form_container').length) {
          var answer = $('#answer_form_container');
          bm = main.height() + main.offset().top;
          if (answer.height() + answer.offset().top > bm) {
            answer.removeClass('pos-fix').addClass('pos-abs');
          }
          if ($(window).scrollTop() + $(window).height() < bm) {
            answer.removeClass('pos-abs').addClass('pos-fix');
          }
        }
        if ($('#block-block-1').length) {
          if (bnr.data('end-fix') < bnr.offset().top + bnr.height()) {
            bnr.css({'z-index': '-1'});
          } else {
            bnr.css({'z-index': '0'});
          }
          top_stop = 15;
          if ($(window).scrollTop() > bnr.offset().top - top_stop) {
            bnr.css({top: top_stop + 'px'});
            bnr.addClass('pos-fix');
            bnr.width(bnr.data('start-width'));
          }

          if ($(window).scrollTop() < bnr.data('start-fix')) {
            bnr.removeClass('pos-fix');
          }
        }
        if ($('#block-block-9').length) {
          if (bnr0.data('end-fix') < bnr0.offset().top + bnr0.height()) {
            bnr0.css({'z-index': '-1'});
          } else {
            bnr0.css({'z-index': '0'});
          }
          if ($(window).scrollTop() > bnr0.offset().top - top_stop) {
            bnr0.css({top: top_stop + 'px'});
            bnr0.addClass('pos-fix');
            bnr0.width(bnr0.data('start-width'));
          }

          if ($(window).scrollTop() < bnr0.data('start-fix')) {
            bnr0.removeClass('pos-fix');
          }
        }
      });

      function bindMenu() {
        var navigation = $('#navigation-wrapper');
        var menu = $('#block-menu-menu-top-menu').find('.menu');

        if (!menu.length) {
          return;
        }

        var menuItems = menu.children('li');
        var firstMenuItem = menuItems.eq(0);
        // var moreMenu = $('<li class="more"><a href="#">Еще <i class="fa fa-angle-down" aria-hidden="true"></i></li>');
        var moreMenu = $('<li class="more"><a href="#">Еще <i style="font-style: normal">&xdtri;</i></li>');
        var moreMenuShowed = false;


        menu.find('ul').each(function () {
          var ul = $(this);
          var li = ul.children('li');
          if (li.length > 10) {
            ul.addClass('double');
          }
        });

        var menuUpdate = function () {
          var firstItemBounds = firstMenuItem[0].getBoundingClientRect();
          var hasSecondLine = false;
          for (var i = 0; i < menuItems.length; i++) {
            var itemBounds = menuItems[i].getBoundingClientRect();
            if (firstItemBounds.top != itemBounds.top) {
              hasSecondLine = true;
              break;
            }
          }

          if (hasSecondLine) {
            moreMenu.insertAfter(menuItems.eq(i - 1));
            if (!moreMenuShowed) {
              moreMenu.find('a').click(function () {
                if (navigation.hasClass('extended')) {
                  navigation.removeClass('extended');
                  $(this).find('i').html('&xdtri;')
                  // $(this).find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                } else {
                  navigation.addClass('extended');
                  $(this).find('i').html('&xutri;')
                  // $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
                }
                return false;
              });
              moreMenuShowed = true;
            }
          } else {
            if (moreMenuShowed) {
              navigation.removeClass('extended');
              // moreMenu.find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
              $(this).find('i').html('&xutri;')
              moreMenu.remove();
            }
            moreMenuShowed = false;
          }
        };

        $(window).resize(menuUpdate);
        menuUpdate();
      }

    }
  };
})(jQuery);

