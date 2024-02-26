<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title> {{ env('HUSBAND_NAME') }} и {{ env('WIFE_NAME') }} свадебное приглашение</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Свадебное приглашение" name="keywords">
    <meta content=" {{ env('HUSBAND_NAME') }} и  {{ env('WIFE_NAME') }} свадебное приглашение" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/icons.png') }}" rel="icon">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content=" {{ env('HUSBAND_NAME') }} и  {{ env('WIFE_NAME') }} свадебное приглашение">
    <meta property="og:description"
        content=" {{ env('HUSBAND_NAME') }} и  {{ env('WIFE_NAME') }} свадебное приглашение">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Tangerine&family=Montserrat:wght@400;600&display=swap&subset=cyrillic"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
    @vite('resources/lib/owlcarousel/assets/owl.carousel.min.css')
    @vite('resources/lib/lightbox/css/lightbox.min.css')

    <!-- Customized Bootstrap Stylesheet -->
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar Start -->
    @include('components.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @include('components.carousel', [
        'id' => 'home',
        'carouselId' => 'header-carousel',
        'items' => [
            [
                'active' => true,
                'video' => 'img/ready1.mp4',
                'title' => env('HUSBAND_NAME') . '&' . env('WIFE_NAME'),
                'subtitle' => 'Мы собираемся пожениться',
            ],
        ],
    ])
    <!-- Carousel End -->

    <!-- About Start -->
    @include('components.about_section', [
        'id' => 'about',
        'title' => 'Приглашение на свадьбу',
        'sections' => [
            [
                'title' => 'Мы рады пригласить вас разделить важное для нас событие вместе тыры пыры',
                'description' => 'Первого июня 2024 г.',
                'icon' => 'fa fa-male',
                'name' => 'Jack',
                'socials' => [
                    ['link' => '#', 'icon' => 'fab fa-twitter'],
                    // ...
                ],
            ],
            // ...
        ],
    ])

    <!-- Event Start -->
    @include('components.events')
    <!-- Event End -->

    <!-- RSVP Start -->
    @include('components.rsv')
    <!-- RSVP End -->


    @include('components.map')


    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <a href="#about"><i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i></a>

    <!-- Back to Top -->
    <a href="#home" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"
        style="display: flex; justify-content: center; align-items: center;"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>

    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script> --}}
    @vite('resources/js/app.js')

    <script type="text/javascript">
        const setVideoSourceAndCarouselHeight = () => {
            let videoSource = $('#video-source');
            let video = $('#responsive-video');

            if ($(window).width() <= 767) {
                videoSource.attr('src', "{{ asset('img/mobile.mp4') }}");
                $('.carousel-item').css('height', '66vh');
            } else if ($(window).width() <= 1270) {
                videoSource.attr('src', "{{ asset('img/middle1.mp4') }}");
                $('.carousel-item').css('height', '90vh');
            } else {
                videoSource.attr('src', "{{ asset('img/ready1.mp4') }}");
                $('.carousel-item').css('height', '100vh');
            }
            video[0].load();
        }

        $(document).ready(setVideoSourceAndCarouselHeight);
        $(window).resize(setVideoSourceAndCarouselHeight);

        $(document).ready(() => {
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();

                const target = this.hash;
                const $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 900, 'swing', function() {
                    window.location.hash = target;
                });
            });

            $('#rsvpForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/rsvp',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#rsvpForm').hide();
                        $('#successMessage').show();
                    },
                    error: function(response) {
                        $('#rsvpForm').hide();
                        $('#errorMessage').show();
                    }
                });
            });

            const $preloader = $('#preloader');
            const $videos = $('video');

            $videos.on('canplay', () => {
                setTimeout(() => {
                    $preloader.hide();
                }, 5000);
            });

        });
    </script>
</body>

</html>
