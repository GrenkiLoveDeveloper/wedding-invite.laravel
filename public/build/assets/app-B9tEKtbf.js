AOS.init();(function(o){o(window).scroll(function(){let t=o(this).scrollTop();t>200?o(".navbar, .back-to-top").fadeIn("slow").css("display","flex"):o(".navbar, .back-to-top").fadeOut("slow").css("display","none"),t>100?o(".scroll-to-bottom").fadeOut("slow"):o(".scroll-to-bottom").fadeIn("slow")}),o(".navbar-nav a").on("click",function(t){this.hash!==""&&(t.preventDefault(),o("html, body").animate({scrollTop:o(this.hash).offset().top-45},1500,"easeInOutExpo"),o(this).parents(".navbar-nav").length&&(o(".navbar-nav .active").removeClass("active"),o(this).closest("a").addClass("active")))}),o(document).ready(function(){var t;o(".btn-play").click(function(){t=o(this).data("src")}),o("#videoModal").on("shown.bs.modal",function(e){o("#video").attr("src",t+"?autoplay=1&amp;modestbranding=1&amp;showinfo=0")}),o("#videoModal").on("hide.bs.modal",function(e){o("#video").attr("src",t)})});var a=o(".portfolio-container").isotope({itemSelector:".portfolio-item",layoutMode:"fitRows"});o("#portfolio-flters li").on("click",function(){o("#portfolio-flters li").removeClass("active"),o(this).addClass("active"),a.isotope({filter:o(this).data("filter")})}),o(".back-to-top").click(function(){return o("html, body").animate({scrollTop:0},1500,"easeInOutExpo"),!1}),o(".gallery-carousel").owlCarousel({autoplay:!1,smartSpeed:1500,dots:!1,loop:!0,nav:!0,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],responsive:{0:{items:1},576:{items:2},768:{items:3},992:{items:4},1200:{items:5}}})})(jQuery);