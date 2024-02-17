<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Jack & Rose - Free Wedding Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    {{-- <link href="{{ asset('img/favicon.ico') }}" rel="icon"> --}}

    <!-- Google Web Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    {{-- @vite('resources/css/style.css') --}}
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
                'img' => 'img/carousel-1.jpg',
                'title' => 'Jack & Rose',
                'subtitle' => "We're getting married",
                'video' => 'https://www.youtube.com/embed/DWRcNpR6Kdc',
            ],
            [
                'active' => false,
                'img' => 'img/carousel-2.jpg',
                'title' => 'Jack & Rose',
                'subtitle' => "We're getting married",
                'video' => 'https://www.youtube.com/embed/DWRcNpR6Kdc',
            ],
        ],
    ])
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    @include('components.video_modal', [
        'id' => 'videoModal',
        'src' => '',
        'videoId' => 'video',
    ])
    <!-- Video Modal End -->


    <!-- About Start -->
    @include('components.about_section', [
        'id' => 'about',
        'title' => 'Groom & Bride',
        'sections' => [
            [
                'title' => 'The Groom',
                'description' => 'Lorem elitr magna stet rebum dolores sed...',
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
    @include('components.story')
    <!-- Story End -->


    <!-- Gallery Start -->
    @include('components.gallery')
    <!-- Gallery End -->


    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Event</h6>
                <h1 class="font-secondary display-4">Our Wedding Event</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h5 class="font-weight-normal text-muted mb-3 pb-3">Clita ipsum aliquyam dolor diam dolores elitr
                        nonumy. Rebum sea vero ipsum eirmod tempor kasd. Diam amet lorem erat eos sit lorem elitr justo
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" src="img/event-1.jpg" alt="">
                        <h4 class="mb-3">The Reception</h4>
                        <p class="mb-2">123 Street, New York, USA</p>
                        <p class="mb-0">12:00AM - 13:00PM</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="img/event-2.jpg" alt="">
                        <h4 class="mb-3">Wedding Party</h4>
                        <p class="mb-2">123 Street, New York, USA</p>
                        <p class="mb-0">12:00AM - 13:00PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Friends & Family Start -->
    <div class="container-fluid py-5" id="family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Friends & Family</h6>
                <h1 class="font-secondary display-4">Groomsmen & Bridesmaid</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".first">
                            Groomsmen</li>
                        <li class="btn btn-outline-primary font-weight-bold m-1 py-2 px-4" data-filter=".second">
                            Bridesmaid</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-1.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-1.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-2.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-2.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/groomsmen-3.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative mb-2">
                        <img class="img-fluid w-100" src="img/bridesmaid-3.jpg" alt="">
                        <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Full Name</h4>
                            <p class="text-uppercase">Best Friend</p>
                            <div class="d-inline-block">
                                <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Friends & Family End -->


    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">RSVP</h6>
                <h1 class="font-secondary display-4">Join Our Party</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3"
                                        placeholder="Your Name" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3"
                                        placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option>Number of Guest</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0" style="height: 52px;">
                                        <option>I'm Attending</option>
                                        <option>All Events</option>
                                        <option>Wedding Party</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="5" placeholder="Message"
                                    required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Thank You</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i
                        class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center py-2">
                <p class="text-white" href="#">info@example.com</p>
                <span class="px-3">|</span>
                <p class="text-white" href="#">+012 345 6789</p>
            </div>
            <p class="m-0">&copy; <a class="text-primary" href="#">Domain Name</a>. Designed by <a
                    class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script> --}}
</body>

</html>
