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
    })

    //goto #id
    $(window).on('load', function () {
        $("a[href^='#']").click(function (e) {
            e.preventDefault();
            let target = $($(this).attr('href'));
            if (target.length) {
                let pos = target.offset().top;
                $("html, body").animate({
                    scrollTop: pos
                }, "slow");
            }
        });
    })
})(jQuery)