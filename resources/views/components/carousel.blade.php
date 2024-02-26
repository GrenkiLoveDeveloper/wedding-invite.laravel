<div class="container-fluid p-0 mb-4 pb-4" id="{{ $id }}">
    <div id="{{ $carouselId }}" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($items as $item)
            <div id="preloader"
                style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #fff; z-index: 9999; display: flex; align-items: flex-start; justify-content: center; flex-direction: column;">
                <h1 class="font-secondary display-4" style="margin-top: 20px;">У нас есть для вас некоторые новости</h1>
                <div class="loader">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>

                <div class="carousel-item position-relative {{ $item['active'] ? 'active' : '' }}">
                    <video autoplay muted loop preload="auto" class="position-absolute w-100 video-desktop"
                        style="background-color:#fff">
                        <source src="{{ $item['video'] }}" type="video/mp4">
                    </video>

                    <video autoplay muted loop preload="auto" class="position-absolute w-100 video-middle"
                        style="background-color:#fff">
                        <source src="{{ asset('img/middle1.mp4') }}" type="video/mp4">
                    </video>

                    <video disablePictureInPicture playsinline autoplay muted loop preload="auto"
                        class="position-absolute w-100 video-mobile" style="background-color:#fff">
                        <source src="{{ asset('img/mobile.webm') }}" type="video/webm">
                        <source src="{{ asset('img/mobile.mp4') }}" type="video/mp4">
                    </video>

                    {{-- <img class="position-absolute w-100 h-100" src="{{ $item['img'] }}" style="object-fit: cover;"> --}}

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">{{ $item['title'] }}</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;">
                                    {{ $item['subtitle'] }}</h3>
                            </div>
                            {{-- <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="{{ $item['video'] }}" data-target="#videoModal">
                                <span></span>
                            </button> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<style>
    .loader {
        display: flex;
        justify-content: space-between;
        width: 50px;
    }

    .dot {
        width: 10px;
        height: 10px;
        background-color: #333;
        border-radius: 50%;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.5);
        }

        100% {
            transform: scale(1);
        }
    }
</style>
