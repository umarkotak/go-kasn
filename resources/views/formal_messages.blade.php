@extends('adminlte::page')

@section('title', 'GO KASN')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 text-dark">Surat</h1>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#modal-default">
                create
            </button>

            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/formal_messages/create" method="post" >
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <h4 class="modal-title">Buat Surat Baru</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" name="description">
                                </div>
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <input type="text" class="form-control" name="form_message_type">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="notes">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                <tbody>
                                    @foreach ($my_formal_messages as $formal_message)
                                        <tr>
                                            <td>{{ $formal_message->id }}</td>
                                            <td>{{ $formal_message->title }}</td>
                                            <td>{{ $formal_message->description }}</td>
                                            <td>{{ $formal_message->formal_message_type_id }}</td>
                                            <td>{{ $formal_message->created_at }}</td>
                                            <td>{{ $formal_message->status }}</td>
                                            <td>{{ $formal_message->notes }}</td>
                                            <td>
                                                <button class="btn btn-xs btn-primary">
                                                    edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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

