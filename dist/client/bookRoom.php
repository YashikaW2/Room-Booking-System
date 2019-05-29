<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heidi's Home</title>
    <link rel="icon" href="../admin/images/lgo.jpg">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unlock" rel="stylesheet">

</head>

<body style="background-image: url('images/flow-pink-blue-3_760x.jpg')">
<p id="home"></p>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
    <div class="container">
        <a class="navbar-brand" id="oo" href="#">Heidi's Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Things to Do</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Book Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="col-md-12" style="margin-left: 0px;margin-right: 0px">
    <div class="card my-12" style="background-color: #0B243B;color: white">
        <h5 class="card-header"
            style="background-color: white;color: #0B243B;font-weight: bold;font-weight: bold;text-align: center">Search
            Avalable Rooms</h5>
        <div class="card-body">
            <form id="searchForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-5"><label for="bday" class="lbl">Chek In Date : </label></div>
                            <div class="col-md-7"><input class="date" type="date" id="cheakIn" name="cheakIn"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-5"><label for="bday" class="lbl">Chek Out Date : </label></div>
                            <div class="col-md-7"><input class="date" type="date" id="cheakOut" name="cheakOut"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label style="color: white;font-weight: bold;" for="cc_name">Adults No:</label>
                        <input type="text" class="form-control" name="adults" id="adults" placeholder="" value="" required>
                    </div>
                    <div class="col-md-3">
                        <label style="color: white;font-weight: bold;" for="cc_name">Childern No:</label>
                        <input type="text" class="form-control" name="childern" id="childern" placeholder="" value="" required>
                    </div>
                    <div class="col-md-3">
                        <label style="color: white;font-weight: bold;" for="cc_name">Rooms Count:</label>
                        <input type="text" class="form-control" name="rooms" id="rooms" placeholder="" value="" required>
                    </div>
                    <div class="col-md-3">
                        <label style="color: white;font-weight: bold;" for="cc_name">User Name</label>
                        <input type="text" class="form-control" name="userName" id="userName" placeholder="" value="" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <div class="col-md-3">
                            <label style="color: white;font-weight: bold;" for="cc_name">Rooms ID</label>
                            <input type="text" class="form-control" name="roomsID" id="roomsID" placeholder="" value="" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-lg btn-block" id="bookingNow" type="button">Book Now</button>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 20px">
    <div class="col-md-12">
        <table class="table table-sm">
            <thead>
            <tr style="background-color: #0B243B;color: white;height: 50px;margin-bottom: 40px;font-size: 20px;font-weight: bold;text-align: center">
                <th scope="col">Room ID</th>
                <th scope="col">Room Type</th>
                <th scope="col">Room Floor</th>
                <th scope="col">Bead Type</th>
                <th scope="col">Room Description</th>
                <th scope="col">Room Price</th>
            </tr>
            </thead>
            <tbody id="roomtable" style="background-color: rgba(1, 13, 35, 0.59);color: white;text-align: center">
            </tbody>
        </table>
    </div>
</div>

<footer class="py-3 bg-secondary" style="margin-top: 70px">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © 2018 Heidi's Home. Web Design by YashikaWijeskara.</p>
    </div>
</footer>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    $("#bookingNow").click(function () {
        let commentForm = $("#searchForm").serialize();
        $.ajax({
            method: "POST",
            url: "http://localhost/as/api/services/RegisterService.php",
            async: true,
            data: commentForm,
        }).done(function (res) {
            alert(res);
        });
    });
    // $("#registrationbtn").click(function () {
    //     let registerForm = $("#registerForm").serialize();
    //     $.ajax({
    //         method: "POST",
    //         url: "http://localhost/WEBPROJECT/RoomBooking%20System/api/services/GestServices.php",
    //         async: true,
    //         data: registerForm,
    //     }).done(function (res) {
    //         alert(res);
    //     });
    // });

    function loadRoom() {
        $('#roomtable').empty();
        $.ajax({
            url: "http://localhost/as/api/services/RoomService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                var tempA = resp[i];
                let row = "<tr>" +
                    "<td>" + tempA[0] + "</td>" +
                    "<td>" + tempA[1] + "</td>" +
                    "<td>" + tempA[2] + "</td>" +
                    "<td>" + tempA[3] + "</td>" +
                    "<td>" + tempA[4] + "</td>" +
                    "<td>" + tempA[6] + "</td>" +
                    "</tr>";
                $('#roomtable').append(row);
            }
        });
    }

    loadRoom();
</script>
</body>
</html>