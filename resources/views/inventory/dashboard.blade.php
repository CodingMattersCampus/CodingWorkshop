<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
{{-- resources/views/admin/dashboard.blade.php --}}

@include('inventory._modal');

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('sidebar')
    <ul>Hello</ul>
@stop

@section('content_header')
    <div class="row">
        <div class="col-md-11">
         <h1>Dashboard</h1>
        </div>
        <div class="col-md-1">
            <a href=""><button type="button" class="btn btn-primary float-right">Add Product</button></a>
            <button type="button" class="btn btn-secondary float-right">Add Category</button>
        </div>
    </div>
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
                <td>
                    <a href="" data-toggle="modal" data-target="#view-{{$inventory->id}}"><button class="btn btn-primary">View</button></a>
                    <a href="" data-toggle="modal" data-target="#edit-{{$inventory->id}}"><button class="btn btn-primary">Edit</button></a>
                </td>
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

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
@stop