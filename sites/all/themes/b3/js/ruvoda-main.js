(function ($) {

    $.fn.sticky = function(footer) {
        var $window = $(window);
        var $header = $('#header');

        var topOffset = 20;
        var toolbarOffset = 0;
        if ($(document.body).hasClass('toolbar')) {
            toolbarOffset += 64;
        }

        this.each(function(){
            var el = $(this);
            var stickyTop = el.offset().top; // returns number
            var stickyHeight = el.height();

            if (footer.offset().top - stickyTop - stickyHeight < 100) {
                return;
            }

            var scroll;

            $(window).scroll(scroll = function(){
                var footerTop = footer.offset().top;

                if (footerTop - stickyTop - stickyHeight < 100) {
                    return;
                }

                var limit = footer.offset().top - stickyHeight - 20;
                var windowTop = $window.scrollTop();
                var headerHeight = $header.outerHeight() + topOffset;

                if (stickyTop < windowTop + headerHeight){
                    el.css({ position: 'fixed', top: headerHeight + toolbarOffset });
                } else {
                    el.css('position', 'static');
                }

                if (limit < windowTop + headerHeight) {
                    var diff = limit - windowTop;
                    el.css({ top: diff });
                }
            });

            var t;

            $(window).resize(function () {
                clearTimeout(t);
                t = setTimeout(function () {
                    scroll();
                }, 100);
            });
        });
    };

    function bindMenu() {
        var navigation = $('#navigation-wrapper');
        var menu = $('#block-system-main-menu').find('.content .menu');

        if (!menu.length) {
            return;
        }

        var menuItems = menu.children('li');
        var firstMenuItem = menuItems.eq(0);
        var moreMenu = $('<li class="more"><a href="#">Еще <i class="fa fa-angle-down" aria-hidden="true"></i></li>');
        var moreMenuShowed = false;

        menu.find('ul').each(function(){
           var ul = $(this);
           var li = ul.children('li');
           if (li.length > 10) {
               ul.addClass('double');
           }
        });

        var menuUpdate = function(){
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
                moreMenu.insertAfter(menuItems.eq(i-1));
                if (!moreMenuShowed) {
                    moreMenu.find('a').click(function () {
                        if (navigation.hasClass('extended')) {
                            navigation.removeClass('extended');
                            $(this).find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                        } else {
                            navigation.addClass('extended');
                            $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
                        }
                        return false;
                    });
                    moreMenuShowed = true;
                }
            } else {
                if (moreMenuShowed) {
                    navigation.removeClass('extended');
                    moreMenu.find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                    moreMenu.remove();
                }
                moreMenuShowed = false;
            }
        };

        $(window).resize(menuUpdate);
        menuUpdate();
    }

    function bindLinksWrapper() {
        var $window = $(window);
        var linksWrapper = $('#links-wrapper');
        var linksWrapperShowed = true;
        var prevScrollValue = $window.scrollTop();
        var lock = false;
        var unlockTimeout;

        if (!linksWrapper.length) {
            return;
        }

        $window.scroll(function() {
            if (lock) {
                return;
            }

            var scrollValue = $window.scrollTop();
            if (linksWrapperShowed) {
                if (prevScrollValue + 3 < scrollValue && scrollValue > 120) {
                    linksWrapperShowed = false;
                    linksWrapper.slideUp('fast');
                    //linksWrapper.css('display', 'none');
                }
            } else {
                if (prevScrollValue - 3 > scrollValue) {
                    linksWrapperShowed = true;
                    linksWrapper.slideDown('fast');
                    //linksWrapper.css('display', 'block');
                }
            }
            prevScrollValue = scrollValue;
        });

        $window.resize(function() {
            clearTimeout(unlockTimeout);
            lock = true;
            unlockTimeout = setTimeout(function () {
                lock = false;
            }, 250);
        });
    }

    function bindSidr() {
        var menuOpener = $('#menu-opener');

        if (!menuOpener.length) {
            return;
        }

        menuOpener.sidr({
            name: 'sidr-main',
            source: '#block-system-main-menu > .content',
            displace: false,
            onOpen: function() {
                $('#sidr-main').addClass('opened');
            },
            onClose: function() {
                $('#sidr-main').removeClass('opened');
            }
        });

        $('body').swipe({
            //Single swipe handler for left swipes
            swipeLeft: function () {
                $.sidr('close', 'sidr-main');
            },
            swipeRight: function () {
                $.sidr('open', 'sidr-main');
            },
            //Default is 75px, set to 0 for demo so any distance triggers swipe
            threshold: 45
        });

        var viewport = ResponsiveBootstrapToolkit;
        var swipeEnabled = true;
        var updateSwipeEnabled = function() {
            if(viewport.is('xs')) {
                if (!swipeEnabled) {
                    $('body').swipe('enable');
                    swipeEnabled = true;
                }
            } else {
                if (swipeEnabled) {
                    $.sidr('close', 'sidr-main');
                    $('body').swipe('disable');
                    swipeEnabled = false;
                }
            }
        };
        var viewportChanged = viewport.changed(updateSwipeEnabled, 100);
        var resize = function() {
            viewportChanged();
        };

        var topMobileMenu = $('#top-mobile-menu');
        if (topMobileMenu.length) {
            $('#sidr-main').prepend(topMobileMenu);
            topMobileMenu.removeAttr('style');
        }

        $(window).resize(resize);
        updateSwipeEnabled();
    }

    function bindNewsList() {
        var newsList = $('.news-list');

        if (!newsList.length) {
            return;
        }

        newsList.parent().on('click', '.news-item-share-opener', function() {
            var parent = $(this).parent();
            parent.toggleClass('opened');
            var yashare = parent.find('.ya-share-block:not(.ya-share2_inited)');
            if (!yashare.length) {
                return false;
            }
            Ya.share2(yashare[0]);
            return false;
        });
    }

    function bindComments() {
        var commentSection = $('#comments').children('.comment-section');
        var commentsList = commentSection.children('.better-comment-wrapper');

        if (!commentsList.length) {
            return;
        }

        if (commentsList.length > 10) {
            var hiddenWrapper = $('<div class="hidden"></div>');
            var hiddenCommentsCount = (commentsList.length - 10);

            var showButton = $('<a class="shower-button" href="#">Показать предыдущие ' + hiddenCommentsCount + ' ' + pluralUnit(hiddenCommentsCount, ['комментарий', 'комментария', 'комментариев']) + '</a>');
            showButton.click(function(){
                hiddenWrapper.removeClass('hidden');
                $(this).remove();
                return false;
            });

            hiddenWrapper.append(commentsList.slice(0, hiddenCommentsCount));
            commentSection.prepend(showButton);
            commentSection.append(hiddenWrapper);
        }
    }

    function bindShareCounter() {
        var shareWrapper = $('.page-article-share');
        var shareCounter = shareWrapper.find('.ya-share2.counter');

        if (!shareCounter.length) {
            return;
        }

        var t = setInterval(function () {
            if (!shareCounter.hasClass('ya-share2_inited')) {
                return;
            }

            var sum = 0;
            var counters = shareCounter.find('span.ya-share2__counter');
            for (var i = 0; i < counters.length; i++) {
                var value = counters.eq(i).text();
                if (value == '') {
                    return;
                }
                sum += parseInt(value);
            }

            clearInterval(t);
            shareWrapper.children('.share-count').find('.value').text(sum);
        }, 250);
    }

    function bindSearch() {
        var header = $('#header');
        var search = header.find('.search-block');
        var searchResultBlock = header.find('.search-result-block');
        var searchResultOverlay = header.find('.search-result-overlay');
        var searchInput = search.find('.search-input');
        var searchTimeout;
        var requestId = 0;

        if (!searchInput.length) {
            return;
        }

        header.find('a.search-open').click(function() {
            search.removeClass('hidden');
            setTimeout(function() {
                searchInput.focus();
            }, 50);
            return false;
        });

        search.find('.search-close').add(searchResultOverlay).click(function() {
            clearTimeout(searchTimeout);
            requestId++;
            search.addClass('hidden');
            searchResultBlock.html('');
            searchResultBlock.addClass('hidden');
            searchResultOverlay.addClass('hidden');
            searchInput.val('');
            return false;
        });

        var updateMaxHeihgt = function() {
            var maxHeight = window.innerHeight - parseInt(header.css('top')) - 60 - 60;
            searchResultBlock.css('max-height', maxHeight);
        };

        searchInput.keydown(function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(function () {
                var text = searchInput.val();
                requestId++;
                var currentRequestId = requestId;

                searchInput.addClass('loading');

                $.ajax({
                    method: 'GET',
                    url: '/live-search',
                    data: { t: text },
                    complete: function () {
                        searchInput.removeClass('loading');
                    },
                    success: function(data) {
                        if (requestId != currentRequestId) {
                            return;
                        }

                        if (!data) {
                            return;
                        }

                        var nodes = data.nodes;

                        if (!nodes || !nodes.length) {
                            searchResultBlock.html('<span class="empty">Ничего не найдено</span>');
                            searchResultBlock.removeClass('hidden');
                            searchResultOverlay.removeClass('hidden');
                            updateMaxHeihgt();
                            return;
                        }

                        searchResultBlock.html('');
                        searchResultBlock.removeClass('hidden');
                        searchResultOverlay.removeClass('hidden');
                        updateMaxHeihgt();
                        for (var i = 0; i < nodes.length; i++) {
                            var node = nodes[i].node;
                            var item = $('<a class="search-result-item" href="' + node['url'] + '"></a>');
                            item.append($('<span class="title">' + node['title'] + '</span>'));
                            item.append($('<span class="created">' + node['created'] + '</span>'));
                            searchResultBlock.append(item);
                        }
                    }
                })
            }, 250);
        });

        $(window).resize(updateMaxHeihgt);
    }

    function bindVkWidgetUpdate() {
        if (!window.VK || !window.VKGroupId || !VK.Widgets || !VK.Widgets.RPC) {
            return;
        }
        var id;
        var t;
        var container = $('#vk_groups');
        var options = {mode: 3, width: 'auto', height: 200, no_cover: 1, color3: '4483AC'};
        $(window).resize(function () {
            clearTimeout(t);
            t = setTimeout(function () {
                container.html('');
                delete VK.Widgets.RPC[id];
                id = VK.Widgets.Group('vk_groups', options, VKGroupId);
            }, 500)
        });

        id = VK.Widgets.Group('vk_groups', options, VKGroupId);
    }

    function pluralUnit(number, titles) {
        var cases = [2, 0, 1, 1, 1, 2];
        return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
    }

    $(document).ready(function(){
        $(".field-name-body iframe").wrap("<div class='iframe-wrapper-16x9'/>");

        bindMenu();
        bindLinksWrapper();
        bindSidr();

        $('#header').css('top', $('body').css('padding-top'));

        bindShareCounter();
        bindNewsList();
        bindComments();
        bindSearch();

        bindVkWidgetUpdate();

        $('.colorbox-load.youtube-field-player').colorbox({
            iframe: true,
            width: '80%',
            height: '80%'
        });

        var tablecontents = $('.table-of-contents');
        tablecontents.find('.item-list').find('a').click(function(){
            var id = $(this).attr('href').split('#');
            if (id.length > 1) {
                id = id[id.length - 1];
            }
            var offset = 80;
            if ($(document.body).hasClass('toolbar')) {
                offset += parseInt($('#header').css('top'));
            }
            var topPosition = $('#' + id).offset().top;

            $('html, body').animate({
                scrollTop: topPosition - offset
            }, 700);

            return false;
        });
        tablecontents.find('.opener').click(function(){
            var $this = $(this);
            if ($this.hasClass('closed')) {
                tablecontents.find('.item-list').slideDown('fast');
                $this.removeClass('closed');
                $this.text('скрыть');
            } else {
                tablecontents.find('.item-list').slideUp('fast');
                $this.addClass('closed');
                $this.text('показать');
            }

            return false;
        });


        $(window).load(function(){
            $('.sticky').sticky($('#footer'));
        });
    });

}(jQuery));