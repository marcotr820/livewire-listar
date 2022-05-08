@extends('layout')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div>
        <h1> AJAX datatable</h1>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>email</th>
                <th>nombre</th>
                <th>password</th>
                <th>token</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: '/ajax'
                },
                "columns": [
                    { "data": "email" },
                    { "data": "name" },
                    { "data": "password" },
                    { "data": "remember_token"}
                ]
            } );
        } );
    </script>
@endsection