@extend
<form method="POST" action="">
    <div class="form-group">
        <label for="customerName">Customer Name</label>
        <input type="text" class="form-control" id="additionalOrders">
    </div>
    <h4>Orders</h4>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">01</th>
            <th scope="row">100.00</th>
        </tr>
        <tr>
            <th scope="row">02</th>
            <th scope="row">400.00</th>
        </tr>
        <tr>
            <th scope="row">03</th>
            <th scope="row">100.00</th>
        </tr>
        <tr>
            <th scope="row">04</th>
            <th scope="row">400.00</th>
        </tr>
    </table>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="text" class="form-control" id="total">
    </div>
    <h4>Other Fees</h4>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">01</th>
            <th scope="row">100.00</th>
        </tr>
        <tr>
            <th scope="row">02</th>
            <th scope="row">400.00</th>
        </tr>
        <tr>
            <th scope="row">03</th>
            <th scope="row">100.00</th>
        </tr>
        <tr>
            <th scope="row">04</th>
            <th scope="row">400.00</th>
        </tr>
    </table>
    <div class="form-group">
        <label for="total">Total</label>
        <input type="text" class="form-control" id="total">
    </div>
    <button type="button" class="btn">Ok</button>
    <button type="button" class="btn">Exit</button>
</form>