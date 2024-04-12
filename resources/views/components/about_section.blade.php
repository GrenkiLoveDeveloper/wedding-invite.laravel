<div class="container-fluid py-4 mt-5 mb-3" id="{{ $id }}">
    <div class="container py-4">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">{{ __('Описание') }}</h6>
            <h1 class="font-secondary display-4">{{ $title }}</h1>
            <i class="far fa-heart text-dark"></i>
        </div>
        @foreach ($sections as $section)
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-12 p-0 text-center text-md-center">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h5 class="mb-3">{{ $section['title'] }}</h5>
                        <p>{{ $section['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
