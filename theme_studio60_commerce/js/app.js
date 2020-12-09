function openMenu() {
    document.getElementById("overlayMenu").classList.remove("overlay-menu--hidden");
    document.getElementById("overlayMenu").classList.add("overlay-menu--visible");

    document.getElementById("burger").classList.remove("navbar__burger--visible");
    document.getElementById("burger").classList.add("navbar__burger--hidden");

    document.getElementById("close").classList.remove("navbar__burger--hidden");
    document.getElementById("close").classList.add("navbar__burger--visible");

}

function closeMenu() {
    document.getElementById("overlayMenu").classList.remove("overlay-menu--visible");
    document.getElementById("overlayMenu").classList.add("overlay-menu--hidden");

    document.getElementById("burger").classList.remove("navbar__burger--hidden");
    document.getElementById("burger").classList.add("navbar__burger--visible");

    document.getElementById("close").classList.remove("navbar__burger--visible");
    document.getElementById("close").classList.add("navbar__burger--hidden");
}
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("masthead").classList.add("bg-light");

    } else {
        document.getElementById("masthead").classList.remove("bg-light");
    }
}





jQuery(document).ready(function($) {
    $('.nav-link').click(function() {
        closeMenu();
    });
    $(document).ready(function() {
        $("#prayerBtn").tooltip({

        });
    });
    $('.section--testimony__row').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1080,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 1079,

                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 768,

                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 160,
        gutter: 20
    });
});
var $jq = jQuery.noConflict();
$jq(document).ready(function() {
    // code goes here...
    $jq('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 160,
        gutter: 20
    });

}); //