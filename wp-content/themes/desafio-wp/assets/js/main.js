(function ($) {
    jQuery(window).on("load", function () {
        function isInViewport(element) {
            var rect = element[0].getBoundingClientRect();
            var html = document.documentElement;
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || html.clientHeight) &&
                rect.right <= (window.innerWidth || html.clientWidth)
            );
        }

        jQuery( "body" ).on( "click", ".yu2fvl", function(e) {
            jQuery.yu2fvl({ vid: e.target.dataset.vid, open: true });
        });	        

        jQuery(".btn.primary").hover(
            function () {
                jQuery(this).addClass('animate__pulse');
            }, function () {
                jQuery(this).removeClass('animate__pulse');
            }
        );

        jQuery('.movies-carousel').slick({
            dots: false,
            arrows: false,
            infinite: false,
            mobileFirst: true,
            loop: false,
            speed: 300,
            slidesToScroll: 1,
            slidesToShow: 2,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 6,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4,
                    }
                }
            ]
        });

        jQuery("header").before(jQuery("header").clone().addClass("sticky"));
        
        jQuery(window).on("scroll", function () {
            $(".sticky").toggleClass("stuck", ($(window).scrollTop() > $("header").outerHeight()));
            if($("body").is(".archive") && $(".taxonomy-heading").length) {
                $(".taxonomy-heading").toggleClass("stuck", (!isInViewport($(".taxonomy-heading"))));
            }
        });
    });
})(jQuery);