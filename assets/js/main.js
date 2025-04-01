jQuery(document).ready(function () {
    jQuery('.custom-toggler').on('click', function () {
        jQuery(this).toggleClass('collapsed');
        jQuery('.navbar-collapse').slideToggle('collapse');
        jQuery('.js-collapse').addClass('navbar--abosulte');
    });

    jQuery('.djs__gallery').slick({
        dots: false,
        infinite: false,
        autoplay: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    jQuery('.JS-slick-next').click(function () {
        jQuery('.djs__gallery').slick('slickNext');
    });
    jQuery('.JS-slick-prev').click(function () {
        jQuery('.djs__gallery').slick('slickPrev');
    });

    jQuery('.sponsors__gallery').slick({
        dots: false,
        infinite: false,
        autoplay: true,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    jQuery('.JS-slickSponsor-next').click(function () {
        jQuery('.sponsors__gallery').slick('slickNext');
    });
    jQuery('.JS-slickSponsor-prev').click(function () {
        jQuery('.sponsors__gallery').slick('slickPrev');
    });
});
