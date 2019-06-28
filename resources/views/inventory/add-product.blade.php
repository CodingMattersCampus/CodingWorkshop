<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('sidebar')
    <ul>Hello</ul>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Add New Product</h1>
                <hr>
                <form action="{{route('dashboard.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="productName"  name="name">
                    </div>

                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea type="text" class="form-control" id="productDescription" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Brand</label>
                        <input type="text" class="form-control" id="productBrand"  name="brand">
                    </div>

                    <div class="form-group">
                        <label for="title">SKU</label>
                        <input type="text" class="form-control" id="productSku"  name="sku">
                    </div>

                    <div class="form-group">
                        <label for="description">Category</label>
                        <select class="form-control" name="category">
                            <option>Apple</option>
                            <option>Google</option>
                            <option>Mi</option>
                            <option>Samsung</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Quantity</label>
                        <input type="text" class="form-control" id="productQty" name="qty"/>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="description">Product Available</label><br/>--}}
{{--                        <label class="radio-inline"><input type="radio" name="available" value="1"> Yes</label>--}}
{{--                        <label class="radio-inline"><input type="radio" name="available" value="0"> No</label>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="description">Cost</label>
                        <input type="text" class="form-control" id="productCost" name="unit_cost"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Price</label>
                        <input type="text" class="form-control" id="productPrice" name="sale_price"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Mark Up</label>
                        <input type="text" class="form-control" id="productMarkup" name="markup"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Threshold</label>
                        <input type="text" class="form-control" id="productStocklimit" name="stock_limit"/>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
