@extends('web.layouts.main')

@section('title', 'Home')
    @include('web.components.slider-bar')
@section('content')
    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach ($menu_promosi_public as $iPublic)
            <div class="col-lg-4">
                <img src="{{ asset('assets/dist/img/imgpromosi_middle') }}/{{ $iPublic->img_mkn_promosi_middle }}"
                    alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" style="border-radius: 50%">
                <h2>{{ $iPublic->nama_mkn_promosi_middle }}</h2>
                <p>{{ $iPublic->desc_mkn_promosi_middle }}</p>
                <p><a class="btn btn-success" href="#">Rp. {{ number_format($iPublic->harga_mkn_promosi_middle, 2) }}</a>
                </p>
            </div>
        @endforeach
        <!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    @foreach ($menu_promosi_public as $iPublic)
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{ $iPublic->nama_mkn_promosi_buttom }}.</h2>
                <p class="lead">{{ $iPublic->desc_mkn_promosi_buttom }}.</p>
                <p class="btn btn-success">Rp. {{ number_format($iPublic->harga_mkn_promosi_buttom, 2) }}.</p>
            </div>
            <div class="col-md-5">

                <img src="{{ asset('assets/dist/img/imgpromosi_buttom') }}/{{ $iPublic->img_mkn_promosi_buttom }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" alt="">
            </div>
        </div>

        <hr class="featurette-divider">
    @endforeach

    <!-- /END THE FEATURETTES -->
@endsection
