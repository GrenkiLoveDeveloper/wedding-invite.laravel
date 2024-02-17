<div class="container-fluid py-5" id="{{ $id }}">
    <div class="container py-5">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">{{ __('About') }}</h6>
            <h1 class="font-secondary display-4">{{ $title }}</h1>
            <i class="far fa-heart text-dark"></i>
        </div>
        @foreach ($sections as $section)
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">{{ $section['title'] }}</h3>
                        <p>{{ $section['description'] }}</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i
                                class="{{ $section['icon'] }} text-primary pr-3"></i>{{ $section['name'] }}</h3>
                        <div class="position-relative">
                            @foreach ($section['socials'] as $social)
                                <a class="btn btn-outline-primary btn-square mr-1" href="{{ $social['link'] }}"><i
                                        class="{{ $social['icon'] }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ $section['image'] }}" style="object-fit: cover;">
                </div>
            </div>
        @endforeach
    </div>
</div>
