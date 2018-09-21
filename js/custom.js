(function ($) {
    $(function () {
        $("#go-top, .go-top").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 800) {
                $('#go-top').show();
            } else {
                $('#go-top').hide();
            }
        });

        $(document).on('click', '.nav-toggle', function () {
            $('#menu').toggleClass('is-active');
        })
        //----sticky-header
        if ($('.sticky-header').length) {
            var _this = $('.sticky-header');
            _this.after("<div class='after-fixed'></div>");
            if (window.innerWidth < 768) {
                $('.after-fixed').css('padding-top', $('.fixed').height());
            }

            // var stickyPos = _this.offset().top;
            // $(window).scroll(function () {
            //     if (window.innerWidth > 992) {
            //         if ($(window).scrollTop() >= stickyPos) {
            //             _this.addClass('fixed');
            //             $('.after-fixed').css('padding-top', $('.fixed').height());
            //         } else {
            //             _this.removeClass('fixed');
            //             $('.after-fixed').css('padding-top', '0px');
            //         }
            //     } else {
            //         _this.removeClass('fixed');
            //         $('.after-fixed').css('padding-top', '0px');
            //     }
            // })
        }

        
        //js-tab
        /* 
        .js-tab
            ul.js-tabnav
                a[href="#tab1"]
                a[href="#tab2"]
            .js-tab-content
                #tab1.tab-panel.fade.in
                #tab2.tab-panel.fade
        */
        $('.js-tab').each(function () {
            var _this = $(this);
            var nav = _this.find('.js-tabnav');
            $(nav).on("click", "a[href^='#']", function (e) {
                e.preventDefault();
                if ($(this).parent().hasClass('active')) {
                    return;
                }
                $(nav).find('.active').removeClass('active');
                $(this).parent().addClass('active');
                var target = $($(this).attr('href'));
                target.siblings().removeClass('in');
                setTimeout(() => {
                    target.siblings().removeClass('active');
                }, 100);
                target.addClass('active');
                setTimeout(() => {
                    target.addClass('in');
                }, 100);
            })
        })
    })

    //goto #id
    $(window).on('load', function () {
        $("a.go-to[href^='#']").click(function (e) {
            e.preventDefault();
            $('#menu').removeClass('is-active');
            let target = $($(this).attr('href'));
            if (target.length) {
                let pos = target.offset().top;
                $("html, body").animate({
                    scrollTop: pos
                }, "slow");
            }
        });
    })


    //slider--------------------------------
    $(function () {
        $(".js-slider-main").owlCarousel({
            items: 1,
            responsive: {
                // breakpoint from 1200 up
                1200: {
                    item: 1
                },
                768: {
                    items: 1
                },
                0: {
                    dots: false,
                    nav: false
                }
            },
            slideBy: 1,
            loop: true,
            rewind: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            smartSpeed: 500, //slide speed smooth

            dots: true,
            dotsEach: true,
            nav: false,
            // navText: ['‹', '›'],
            // dotsContainer: '#main-custom-dots',
            // navText: ['<img src="img/but-p.png"/>', '<img src="img/but-n.png"/>'],
            // navText: ['<i class="fa fa-chevron-left"><i/>', '<i class="fa fa-chevron-right"><i/>'],
            margin: 0,
        });
    })


})(jQuery)