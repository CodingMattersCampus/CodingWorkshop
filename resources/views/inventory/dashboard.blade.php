<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('sidebar')
    <ul>Hello</ul>
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

        <table id="table_id" class="display">
            <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
            </tbody>
        </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@stop