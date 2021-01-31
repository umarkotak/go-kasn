@extends('adminlte::page')

@section('title', 'GO KASN')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark">Surat</h1>
        </div>
        <div class="col-6">
            <button class="btn btn-sm btn-success float-right">
                create
            </button>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-orange">
                <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills p-2">
                        <li class="nav-item"><a class="text-white btn btn-sm btn-outline-success mx-1 active" href="#tab_1" data-toggle="tab">Sedang Diajukan</a></li>
                        <li class="nav-item"><a class="text-white btn btn-sm btn-outline-success mx-1" href="#tab_2" data-toggle="tab">Selesai</a></li>
                        <li class="nav-item"><a class="text-white btn btn-sm btn-outline-success mx-1" href="#tab_3" data-toggle="tab">Lain Lain</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <table class="table table-bordered" id="ongoing_formal_messages">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Jenis</th>
                                        <th>Dibuat Pada</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane" id="tab_2">
                            <table class="table table-bordered" id="resolved_formal_messages">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Jenis</th>
                                        <th>Dibuat Pada</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tab-pane" id="tab_3">
                            <table class="table table-bordered">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        </div>
    </div>


@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')

    <script>
        console.log("formal messages")

        $(document).ready( function () {
            var ongoing_formal_messages = $('#ongoing_formal_messages')
            ongoing_formal_messages.DataTable()

            var resolved_formal_messages = $('#resolved_formal_messages')
            resolved_formal_messages.DataTable()
        } );

    </script>

@stop

