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
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>brand</th>
                <th>sku</th>
                <th>category</th>
                <th>unit_cost</th>
                <th>stock_limit</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventories as $inventory)
            <tr>
                <td>{{$inventory->id}}</td>
                <td>{{$inventory->name}}</td>
                <td>{{$inventory->description}}</td>
                <td>{{$inventory->brand}}</td>
                <td>{{$inventory->sku}}</td>
                <td>{{$inventory->category}}</td>
                <td>{{$inventory->unit_cost}}</td>
                <td>{{$inventory->stock_limit}}</td>
                <td></td>
            </tr>
            @endforeach
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