<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="">Book A Room</a></li>
            <li><a href="#">Manage Rooms</a></li>
            <li><a href="#">Billing</a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="list-group col-sm-4">
        <div class="list-group">
            <a href="#" class="list-group-item">Start Date: June 28, 2019</a>
            <a href="#" class="list-group-item">End Date: June 30, 2020</a>
            <a href="#" class="list-group-item">Price: 1000</a>
        </div>
    </div>
</div>

<div class="row container-fluid">
    <div class="col-sm-4">
        <form>
            <div class="form-group">
                <input class="form-control input-lg" id="inputlg" type="text" placeholder="Search">
            </div>
        </form>
    </div>
</div>
<div class="container-fluid">
    <h1>Available Rooms</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Room #</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Deluxed</td>
                    <td><button type="button" class="btn btn-primary">Book</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Deluxe</td>
                    <td><button type="button" class="btn btn-primary">Book</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Single</td>
                    <td><button type="button" class="btn btn-primary">Book</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



</body>
</html>