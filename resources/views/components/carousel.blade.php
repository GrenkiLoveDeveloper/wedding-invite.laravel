<div class="container-fluid p-0 mb-4 pb-4" id="{{ $id }}">
    <div id="{{ $carouselId }}" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($items as $item)
                <div id="preloader"
                    style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #fff; z-index: 9999; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 15%;">
                    <h1 class="font-secondary display-4" style="text-align: center;">У нас есть для вас некоторые новости
                    </h1>
                    <div class="loader" style="display: flex; justify-content: center; align-items: center;">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </div>

                <div class="carousel-item position-relative {{ $item['active'] ? 'active' : '' }}">

                    <video id="responsive-video" disablePictureInPicture playsinline autoplay muted loop preload="auto"
                        class="position-absolute w-100" style="background-color:#fff">
                        <source id="video-source" src="" type="video/mp4">
                    </video>

                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">{{ $item['title'] }}</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;">
                                    {{ $item['subtitle'] }}</h3>
                            </div>
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
        width: 80px;
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
