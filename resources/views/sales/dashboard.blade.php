@extends('adminlte::page')

@section('content')
    <form>
        @csrf
        <div class="form-group">
            <label for="stockName">Stock Name:</label>
            <input type="text" class="form-control" id="stockName" name="stockName">
        </div>
        <div class="form-group">
            <label for="stockPrice">Stock Price:</label>
            <input type="text" class="form-control" id="stockPrice" name="stockPrice">
        </div>
        <div class="form-group">
            <label for="stockPrice">Stock Year:</label>
            <select class="selectpicker" name="stockYear">
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endsection

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    @endpush



