define(['jquery','fancybox','unslider'], function($,fancybox)
{
    return new function(){
        var self = this;
        self.run = function(){
            $(document).ready(function() {
                var menuToggle;
                menuToggle = $('#js-centered-navigation-mobile-menu').unbind();
                $('#js-centered-navigation-menu').removeClass('show');
                menuToggle.on('click', function(e) {
                    e.preventDefault();
                    $('#js-centered-navigation-menu').slideToggle(function() {
                        if ($('#js-centered-navigation-menu').is(':hidden')) {
                            $('#js-centered-navigation-menu').removeAttr('style');
                        }
                    });
                });

                var element;
                element = document.getElementById('js-fadeInElement');
                $(element).addClass('js-fade-element-hide');
                $(window).scroll(function() {
                    var distanceFromBottomToAppear, elementTopToPageTop, elementTopToWindowBottom, elementTopToWindowTop, windowInnerHeight, windowTopToPageTop;
                    if ($('#js-fadeInElement').length > 0) {
                        elementTopToPageTop = $(element).offset().top;
                        windowTopToPageTop = $(window).scrollTop();
                        windowInnerHeight = window.innerHeight;
                        elementTopToWindowTop = elementTopToPageTop - windowTopToPageTop;
                        elementTopToWindowBottom = windowInnerHeight - elementTopToWindowTop;
                        distanceFromBottomToAppear = 300;
                        if (elementTopToWindowBottom > distanceFromBottomToAppear) {
                            $(element).addClass('js-fade-element-show');
                        } else if (elementTopToWindowBottom < 0) {
                            $(element).removeClass('js-fade-element-show');
                            $(element).addClass('js-fade-element-hide');
                        }
                    }
                });

                var logo, menu, resplogo;
                logo = $('h1#logo');
                resplogo = $('#resp-logo');
                menu = $('.centered-navigation-menu');
                $(window).scroll(function() {
                    if ($(this).width() > 860) {
                        // console.log("kurang dari 639");
                        if ($(this).scrollTop() > 200) {
                            logo.hide();
                            resplogo.fadeIn();
                            return menu.css({'text-align': 'right', 'float': 'right','width':'80%'});
                        } else {
                            logo.show();
                            resplogo.fadeOut();
                            return menu.removeAttr('style');
                        }
                    }
                });

                $('.accordion-tabs-minimal').each(function(index) {
                    $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
                });
                $('.accordion-tabs-minimal').on('click', 'li > a', function(event) {
                    var accordionTabs;
                    if (!$(this).hasClass('is-active')) {
                        event.preventDefault();
                        accordionTabs = $(this).closest('.accordion-tabs-minimal');
                        accordionTabs.find('.is-open').removeClass('is-open').hide();
                        $(this).next().toggleClass('is-open').toggle();
                        accordionTabs.find('.is-active').removeClass('is-active');
                        $(this).addClass('is-active');
                    } else {
                        event.preventDefault();
                    }
                });

                $('.slider-wrap').unslider({keys: true, dots: true, fluid: true});

                $('.panel .header').click(function(e) {
                    var target;
                    e.preventDefault();
                    target = $(this).children().data("trigger");
                    return $(target).slideToggle('fast');
                });
            });

            $('.js-accordion-trigger').bind('click', function(e) {
                $(this).parent().find('.submenu').slideToggle('fast');
                $(this).parent().toggleClass('is-expanded');
                $('.submenu2').hide();
                e.preventDefault();
            });
            $('.js-accordion-trigger2').bind('click', function(e) {
                $(this).parent().find('.submenu2').slideToggle('fast');
                $(this).parent().toggleClass('is-expanded');
                e.preventDefault();
            });

            $('.fancybox').fancybox({
                padding: 10,
                openEffect : 'elastic',
                openSpeed  : 150,
                closeEffect : 'elastic',
                closeSpeed  : 150
            });

            jump();
        };

        var jump = function(options){
            var defaults;
            defaults = {
                selector: 'a.scroll-on-page-link'
            };
            if (typeof options === 'string') {
                defaults.selector = options;
            }
            options = $.extend(defaults, options);
            $(options.selector).click(function(e) {
                var jumpobj, offset, target, thespeed;
                jumpobj = $(this);
                target = jumpobj.attr('href');
                thespeed = 1000;
                offset = $(target).offset().top - 120;
                $('html,body').animate({
                    scrollTop: offset
                }, thespeed, 'swing');
                e.preventDefault();
            });
        };
    }
});