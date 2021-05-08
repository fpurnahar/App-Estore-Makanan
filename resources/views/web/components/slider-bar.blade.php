<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach ($menu_promosi_public as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                {{-- <img src="{{ asset('assets/dist/img/imgpromosi_slide') }}/{{ $slider->img_mkn_promosi_slide }}"
                            alt="" class="bd-placeholder-img" width="100%" height="100%"> --}}
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>{{ $slider->nama_mkn_promosi_slide }}</h1>
                        <p>{{ $slider->desc_mkn_promosi_slide }}.</p>
                        <p><a class="btn btn-lg btn-success" href="#">Rp.
                                {{ number_format($slider->harga_mkn_promosi_slide, 2) }}</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
