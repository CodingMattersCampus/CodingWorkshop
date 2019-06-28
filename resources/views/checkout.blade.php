@extends('adminlte::page')
@section('content')
    <form>
        @csrf
        <div class="form-group">
            <label for="additionalOrders">Additional Orders</label>
            <input type="text" class="form-control" id="additionalOrders">
        </div>
        <div class="form-group">
            <select class="custom-select" required>
                <option value="1">Cash</option>
                <option value="2">Card</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input type="text" class="form-control" id="cardNumber">
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total">
        </div>
        <button type="button" class="btn">Enter</button>
        <button type="button" class="btn">Cancel</button>
    </form>