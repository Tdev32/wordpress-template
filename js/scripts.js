// Slick slider initialization
$(document).ready(function() {

    // Header carousel
    $('.header__carousel').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        prevArrow:"[INSERT-ICON-IMAGE-TAG-HERE]",
        nextArrow:"[INSERT-ICON-IMAGE-TAG-HERE]",
    });

    // Section carousel
    $('.section__carousel').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        prevArrow:"[INSERT-ICON-IMAGE-TAG-HERE]",
        nextArrow:"[INSERT-ICON-IMAGE-TAG-HERE]",
        responsive: [
            {
                breakpoint: 992,
                settings: "unslick"
            }
        ]
    });

});