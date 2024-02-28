// import "./bootstrap";
AOS.init({
    startEvent: "DOMContentLoaded",
});
(function ($) {
    "use strict";

    const SCROLL_THRESHOLD_NAVBAR = 200;
    const SCROLL_THRESHOLD_SCROLL_TO_BOTTOM = 100;
    const ANIMATION_TIME = 1500;

    // Navbar and back to top button on scrolling
    $(window).scroll(function () {
        let scrollTop = $(this).scrollTop();
        if (scrollTop > SCROLL_THRESHOLD_NAVBAR) {
            $(".navbar, .back-to-top").fadeIn("slow").css("display", "flex");
        } else {
            $(".navbar, .back-to-top").fadeOut("slow").css("display", "none");
        }

        if (scrollTop > SCROLL_THRESHOLD_SCROLL_TO_BOTTOM) {
            $(".scroll-to-bottom").fadeOut("slow");
        } else {
            $(".scroll-to-bottom").fadeIn("slow");
        }
    });

    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on("click", function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            $("html, body").animate(
                {
                    scrollTop: $(this.hash).offset().top - 45,
                },
                ANIMATION_TIME,
                "easeInOutExpo"
            );

            if ($(this).parents(".navbar-nav").length) {
                $(".navbar-nav .active").removeClass("active");
                $(this).closest("a").addClass("active");
            }
        }
    });

    // Modal Video
    $(document).ready(function () {
        let $videoSrc;
        $(".btn-play").click(function () {
            $videoSrc = $(this).data("src");
        });

        $("#videoModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#videoModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });
    });

    // Portfolio isotope and filter
    let portfolioIsotope = $(".portfolio-container").isotope({
        itemSelector: ".portfolio-item",
        layoutMode: "fitRows",
    });
    $("#portfolio-flters li").on("click", function () {
        $("#portfolio-flters li").removeClass("active");
        $(this).addClass("active");

        portfolioIsotope.isotope({ filter: $(this).data("filter") });
    });

    // Back to top button
    $(".back-to-top").click(function () {
        $("html, body").animate(
            { scrollTop: 0 },
            ANIMATION_TIME,
            "easeInOutExpo"
        );
        return false;
    });

    // Gallery carousel
    $(".gallery-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: ANIMATION_TIME,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            },
        },
    });
})(jQuery);
