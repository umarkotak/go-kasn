@extends('adminlte::page')

@section('title', 'GO KASN')

@section('content_header')
    <h1 class="m-0 text-dark">User Management</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="user_list_table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nip</th>
                                <th>name</th>
                                <th>email</th>
                                <th>position</th>
                                <th>role</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user_data)
                                <tr>
                                    <td>{{ $user_data->id }}</td>
                                    <td>{{ $user_data->nip }}</td>
                                    <td>{{ $user_data->name }}</td>
                                    <td>{{ $user_data->email }}</td>
                                    <td>{{ $user_data->position }}</td>
                                    <td>{{ $user_data->role }}</td>
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>log</h3>
                    <p class="mb-0">{{ $users }}</p>
                </div>
            </div>
        </div>
    </div>


@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')

    <script>
        console.log("user management")

        $(document).ready( function () {
            var user_list_table = $('#user_list_table')
            user_list_table.DataTable()
        } );

    </script>
@stop

