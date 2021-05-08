@extends('layouts.app')

@section('title', 'Menu Promosi')

@section('style')

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <ul>
                                    Someting Error, Plis Input {{ $error }}
                                </ul>
                            @endforeach
                        </div>
                    @endif

                </div>

                {{-- /.start Data Table Promosi --}}

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable Slide</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#addMenuPromosi">
                                <i class="nav-item fas fa-plus"></i> Tambah Menu Promosi
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Image Makanan Promosi</th>
                                        <th>Nama Makanan Promosi</th>
                                        <th>Harga Makanan Promosi</th>
                                        <th>Deskripsi Makanan Promosi</th>
                                        <th>Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu_promosi as $item)
                                        <tr>
                                            <td>
                                                <div class="card" style="width: 8rem;">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/dist/img/imgpromosi_slide') }}/{{ $item->img_mkn_promosi_slide }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>{{ $item->nama_mkn_promosi_slide }}</td>
                                            <td>{{ $item->harga_mkn_promosi_slide }}</td>
                                            <td>{{ $item->desc_mkn_promosi_slide }}</td>
                                            <td>
                                                <form action="/deteled_pomosi{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable Menu Promosi Tenggah</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Image Makanan Promosi</th>
                                        <th>Nama Makanan Promosi</th>
                                        <th>Harga Makanan Promosi</th>
                                        <th>Deskripsi Makanan Promosi</th>
                                        <th>Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu_promosi as $item)
                                        <tr>
                                            <td>
                                                <div class="card" style="width: 8rem;">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/dist/img/imgpromosi_middle') }}/{{ $item->img_mkn_promosi_middle }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>{{ $item->nama_mkn_promosi_middle }}</td>
                                            <td>{{ $item->harga_mkn_promosi_middle }}</td>
                                            <td>{{ $item->desc_mkn_promosi_middle }}</td>
                                            <td><button class="btn btn-danger">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Menu Promosi Bawah</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Image Makanan Promosi</th>
                                        <th>Nama Makanan Promosi</th>
                                        <th>Harga Makanan Promosi</th>
                                        <th>Deskripsi Makanan Promosi</th>
                                        <th>Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu_promosi as $item)
                                        <tr>
                                            <td>
                                                <div class="card" style="width: 8rem;">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/dist/img/imgpromosi_buttom') }}/{{ $item->img_mkn_promosi_buttom }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>{{ $item->nama_mkn_promosi_buttom }}</td>
                                            <td>{{ $item->harga_mkn_promosi_buttom }}</td>
                                            <td>{{ $item->desc_mkn_promosi_buttom }}</td>
                                            <td><button class="btn btn-danger">
                                                    <i class="nav-icon fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                {{-- /.end Data Tble Promosi --}}

                <div class="col-12">
                    <nav aria-label="Page navigation example" style="padding-top: 10px">
                        <ul class="pagination justify-content-center">
                            <li class="page-item ">
                                {{ $menu_promosi->links('vendor.pagination.bootstrap-4') }}
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="addMenuPromosi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@yield('title')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ Route('TambahMenuPromosi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-goup">
                                <center>
                                    <label for="" style="color:blue; font-size: 2pc">Add Menu Makanan Slide</label>
                                </center>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_mkn_promosi_slide">Nama Menu Promosi Slide</label>
                                        <input type="text" class="form-control" id="nama_mkn_promosi_slide"
                                            name="nama_mkn_promosi_slide" placeholder="Enter Nama Menu Promosi Slide ">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_mkn_promosi_slide">Harga Menu Promosi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="text" class="form-control" id="harga_mkn_promosi_slide"
                                                name="harga_mkn_promosi_slide">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Menu Promo Slide</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="Masukan Description Makanan Slide" id="desc_mkn_promosi_slide"
                                            name="desc_mkn_promosi_slide"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="img_mkn_promosi_slide">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="img_mkn_promosi_slide"
                                                    name="img_mkn_promosi_slide">
                                                <label class="custom-file-label" for="img_mkn_promosi_slide">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Add Menu Makanan Tengah --}}
                            <div class="from-group">
                                <center>
                                    <label for="" style="color: green;font-size: 2pc">Add Menu Makanan Tengah</label>
                                </center>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_mkn_promosi_middle">Nama Menu Promosi Tengah</label>
                                        <input type="text" class="form-control" id="nama_mkn_promosi_middle"
                                            name="nama_mkn_promosi_middle" placeholder="Enter Nama Menu Promosi Tengah ">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_mkn_promosi_middle">Harga Menu Promosi Tengah</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="text" class="form-control" id="harga_mkn_promosi_middle"
                                                name="harga_mkn_promosi_middle">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Menu Promo Tengah</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="Masukan Description Makanan Tengah" id="desc_mkn_promosi_middle"
                                            name="desc_mkn_promosi_middle"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="img_mkn_promosi_middle">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="img_mkn_promosi_middle"
                                                    name="img_mkn_promosi_middle">
                                                <label class="custom-file-label" for="img_mkn_promosi_middle">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Add Menu Makanan Bawah --}}
                            <div class="from-group">
                                <center>
                                    <label for="" style="color: coral; font-size: 2pc">Add Menu Makanan Bawah</label>
                                </center>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_mkn_promosi_buttom">Nama Menu Promosi Bawah</label>
                                        <input type="text" class="form-control" id="nama_mkn_promosi_buttom"
                                            name="nama_mkn_promosi_buttom" placeholder="Enter Nama Menu Promosi Bawah ">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_mkn_promosi_buttom">Harga Menu Promosi Bawah</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="text" class="form-control" id="harga_mkn_promosi_buttom"
                                                name="harga_mkn_promosi_buttom">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Menu Promo bawah</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="Masukan Description Makanan Bawah" id="desc_mkn_promosi_buttom"
                                            name="desc_mkn_promosi_buttom"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="img_mkn_promosi_buttom">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="img_mkn_promosi_buttom"
                                                    name="img_mkn_promosi_buttom">
                                                <label class="custom-file-label" for="img_mkn_promosi_buttom">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    @endsection

    @section('script')

        <!-- DataTables  & Plugins -->
        <script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/jszip/jszip.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": true,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });

        </script>
    @endsection
