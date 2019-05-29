<?php
include 'header.php';
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Faclities</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <form id="faclitiesForm" class="form-group" enctype="application/x-www-form-urlencoded">
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="f_id" id="f_id" placeholder="Faclity ID">
                        </div>
                        <div class="col-sm-2">
                            <button id="btnUpdate" type="button" class="btn btn-info">Search</button>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Faclity Name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="f_price" id="f_price" placeholder="Faclity Price">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <button id="saveFaclitiesBtn" type="button" class="btn btn-primary">Save</button>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <button id="updateFaclitiesBtn" type="button" class="btn btn-warning">Update</button>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <button id="deleteFaclitiesBtn" type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <table class="table table-sm ">
                <thead>
                <tr style="background-color: darkblue;color: white;height: 50px;margin-bottom: 40px;font-size: 18px">
                    <th scope="col">Faclity ID</th>
                    <th scope="col">Faclity Name</th>
                </tr>
                </thead>
                <tbody id="cusTable">
                </tbody>
            </table>
        </div>
    </div>
</main>
</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script>

    $("#saveFaclitiesBtn").click(function () {
        let cusForm = $("#faclitiesForm").serialize();
        $.ajax({
            method: "POST",
            url: "http://localhost/as/api/services/FaclitiesService.php",
            async: true,
            data:  cusForm,
        }).done(function (res) {
            alert(res);
        });
        loadFaclity();
    });

    function loadFaclity(){
        $('#cusTable').empty();
        $.ajax({
            url: "http://localhost/as/api/services/FaclitiesService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            // $("#cusTable").html(resp);
            for (var i in resp) {
                var tempA = resp[i];
                let row = "<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td></tr>";
                $('#cusTable').append(row);
            }
        });
    }
    loadFaclity();
</script>
</body>
</html>
<?php
//include 'footer.php';
//?>

