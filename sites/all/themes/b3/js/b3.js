(function ($) {
  Drupal.behaviors.b3 = {
    attach: function (context, settings) {

      $('#block-menu-menu-top-menu .expanded.dropdown').on('mouseover', function () {
        $(this).addClass('open')
      }).on('mouseout', function () {
        $(this).removeClass('open')
      });
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
        // if ($('#block-block-1').length) {
        //   var bnr = $('#block-block-1');
        //   bm = main.height() + main.offset().top;
        //
        //   if (bnr.height() + bnr.offset().top > bm) {
        //     bnr.removeClass('pos-fix').addClass('pos-abs');
        //   }
        //   if ($(window).scrollTop() + $(window).height() < bm) {
        //     bnr.removeClass('pos-abs').addClass('pos-fix');
        //   }
        // }
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

      $(document).ready(function () {
        bindMenu();
        if($('#sidebar_second').height() < $('.main-container').height()){
          $('#sidebar_second').height($('.main-container').height());
        }
        // setTimeout(function () {
        //   bindMenu();
        // }, 200)
      })
    }
  };
})(jQuery);

