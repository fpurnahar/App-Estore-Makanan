@extends('layouts.app')

@section('title', 'Menu Makanan')

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
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <ul>
                                        {{ $error }}
                                    </ul>
                                @endforeach
                            </div>
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
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
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Image 3</th>
                                        <th>Nama Makanan </th>
                                        <th>Harga Makanan </th>
                                        <th>Deskripsi Makanan </th>
                                        <th>Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataMenuMakanan as $item)
                                        <tr>
                                            <td>
                                                <div class="card" style="width: 8rem;">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/dist/img/imgmakanan') }}/{{ $item->img_makanan_1 }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="card" style="width: 8rem;">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/dist/img/imgmakanan') }}/{{ $item->img_makanan_2 }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="card" style="width: 8rem;">
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/dist/img/imgmakanan') }}/{{ $item->img_makanan_3 }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>{{ $item->nama_makanan }}</td>
                                            <td>Rp. {{ number_format($item->harga_makanan, 2) }}</td>
                                            <td>{{ $item->desc_makanan }}</td>
                                            <td>
                                                <form action="/deteled_makanan{{ $item->id }}" method="POST">
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
                        <form action="{{ Route('TambahMenuMakanan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_makanan">Nama Makanan</label>
                                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan"
                                        placeholder="Enter Nama Menu Promosi ">
                                </div>
                                <div class="form-group">
                                    <label for="harga_makanan">Harga Makanan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control" id="harga_makanan" name="harga_makanan">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Makanan</label>
                                    <textarea class="form-control" rows="3" placeholder="Masukan Description Makanan"
                                        id="desc_makanan" name="desc_makanan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="img_makanan_1">Masukan Gambar 1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img_makanan_1"
                                                name="img_makanan_1">
                                            <label class="custom-file-label" for="img_makanan_1">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="img_makanan_2">Masukan Gambar 2</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img_makanan_2"
                                                name="img_makanan_2">
                                            <label class="custom-file-label" for="img_makanan_2">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="img_makanan_3">Masukan Gambar 3</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img_makanan_3"
                                                name="img_makanan_3">
                                            <label class="custom-file-label" for="img_makanan_3">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                    </div>
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
                "autoWidth": false,
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
