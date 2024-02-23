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
    <meta property="og:image" content="{{ asset('img/your-image.jpg') }}">
    <meta property="og:url" content="http://your-website.com">

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
                'video' => 'img/large.webm',
                'title' => env('HUSBAND_NAME') . '&' . env('WIFE_NAME'),
                'subtitle' => 'Мы собираемся пожениться',
            ],
        ],
    ])
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    {{-- @include('components.video_modal', [
        'id' => 'videoModal',
        'src' => '',
        'videoId' => 'video',
    ]) --}}
    <!-- Video Modal End -->


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
                'image' => 'img/about-1.jpg',
            ],
            // ...
        ],
    ])
    <!-- About End -->

    <!-- Story Start -->
    {{-- @include('components.story') --}}
    <!-- Story End -->


    <!-- Gallery Start -->
    {{-- @include('components.gallery') --}}
    <!-- Gallery End -->


    <!-- Event Start -->
    @include('components.events')
    <!-- Event End -->


    <!-- guests Start -->
    {{-- @include('components.guests') --}}
    <!-- guests End -->


    <!-- RSVP Start -->
    @include('components.rsv')
    <!-- RSVP End -->


    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"
        style="display: flex; justify-content: center; align-items: center;"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    @vite('resources/js/app.js')

    <!-- Template Javascript -->

</body>

</html>
