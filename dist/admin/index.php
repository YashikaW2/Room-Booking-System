<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/lgo.jpg">

    <title>Heidi's Home Admin</title>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/css/bootstrap.css.map">
    <link rel="stylesheet" href="css/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link href="css/logIn.css" rel="stylesheet">
</head>

<body class="text-center" style="background-image: url(images/as.gif);width: 100%;height: 100%">
            <form class="form-signin">
                <img class="mb-4" src="images/user.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 font-weight-normal" style="color: white;font-weight: bold;">Please sign in</h1>
                <div class="row">
                    <div class="col-md-12">
                        <label style="color: white;font-weight: bold;" >Name :</label>
                        <input class="form-control" type="text" id="name" name="name" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label style="color: white;font-weight: bold;" >Password :</label>
                        <input class="form-control" type="password" id="passowrd" name="passowrd" />
                    </div>
                </div>
                <br>
                <button id="loginbtn" class="btn btn-primary btn-lg btn-block" type="button">Sign in</button>
            </form>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    $("#loginbtn").click(function () {
        $.ajax({
            url: "http://localhost/as/api/services/SystemUser.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                var userName=$("#name").val();
                var password=$('#passowrd').val();
                var tempA = resp[i];
                if(userName==tempA[2] && password==tempA[3] ){
                    window.location.href="home.php";
                }else{
                }
            }
        });
    });

</script>
</body>
</html>
