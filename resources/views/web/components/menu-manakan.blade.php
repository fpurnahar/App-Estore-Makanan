@extends('web.layouts.main')

@section('title', 'Menu Makanan')

@section('style')

@endsection

@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Menu Makanan </h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
                    etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a type="button" class="btn btn-warning col-lg-12"
                        href="https://api.whatsapp.com/send?phone=6282272958135&text=Hello Admin Saya Mau Pesan Makanan Banyak Bisa Kah? ">
                        Pesan Sekarang Banyak !!!
                    </a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($dataMenuMakananPublic as $item)
                    <div class="col">
                        <div class="card shadow-sm">

                            <img class="bd-placeholder-img card-img-top p-2"
                                src="{{ asset('assets/dist/img/imgmakanan') }}/{{ $item->img_makanan_1 }}" width="100%"
                                height="225" alt="">
                            <div class="card-body">
                                <h2 class="featurette">
                                    {{ $item->nama_makanan }}.
                                </h2>
                                <p class="card-text">{{ $item->desc_makanan }}.</p>
                                <p class="btn btn-success col-lg-12">Rp.
                                    {{ number_format($item->harga_makanan, 2) }}.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <a type="button" class="btn btn-primary col-lg-12"
                                        href="https://api.whatsapp.com/send?phone=6282272958135&text=Hello Admin Saya Mau Pesan Makanan = {{ $item->nama_makanan }} Yang harganya Rp.
                                                                                                                                                                                                                                            {{ number_format($item->harga_makanan, 2) }} Masih Ada gak makanan ini? ">
                                        Pesan Sekarang !!!
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example" style="padding-top: 10px">
                        <ul class="pagination justify-content-center">
                            <li class="page-item ">
                                {{ $dataMenuMakananPublic->links('vendor.pagination.bootstrap-4') }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
