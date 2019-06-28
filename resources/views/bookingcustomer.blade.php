    @extends ('adminlte::page')
    @section ('content')
        <form>
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="firstname" class="form-control" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="lastname" class="form-control" id="lastname" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="contact number">Contact Number</label>
                <input type="text" class="form-control" id="contactnumber" placeholder="+639">
            </div>
            <div class="form-group">
                <label for="inputAddress">Address </label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
            </div>
            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>