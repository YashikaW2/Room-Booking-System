<?php
include 'header.php';
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Services</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
           <form id="serviceForm">
               <div class="row">
                   <div class="col-sm-9">
                       <input type="text" class="form-control" name="s_id" id="s_id" placeholder="Service ID">
                   </div>
                   <div class="col-sm-2">
                       <button id="btnUpdate" type="button" class="btn btn-info">Search</button>
                   </div>
                   <div class="col-sm-1"></div>
               </div>
               <br>
               <div class="row">
                   <div class="col-sm-12">
                       <input type="text" class="form-control" name="s_name" id="s_name" placeholder="Service Name">
                   </div>
               </div>
               <br>
               <div class="row">
                   <div class="col-sm-12">
                       <input type="text" class="form-control" name="s_price" id="s_price" placeholder="Service Price">
                   </div>
               </div>
               <br>
               <div class="row">
                   <div class="col-md-2"></div>
                   <div class="col-md-2">
                       <button id="saveServiceBtn" type="button" class="btn btn-primary">Save</button>
                   </div>
                   <div class="col-md-1"></div>
                   <div class="col-md-2">
                       <button id="btnUpdate" type="button" class="btn btn-warning">Update</button>
                   </div>
                   <div class="col-md-1"></div>
                   <div class="col-md-2">
                       <button id="btnDelete" type="button" class="btn btn-danger">Delete</button>
                   </div>
                   <div class="col-md-2"></div>
               </div>

           </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <table class="table table-sm">
                <thead>
                <tr style="background-color: darkblue;color: white;height: 50px;margin-bottom: 40px;font-size: 18px">
                    <th scope="col">Service ID</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Service Price</th>
                </tr>
                </thead>
                <tbody id="servicetable">
                </tbody>
            </table>
        </div>
    </div>
</main>

</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script>

    $("#saveServiceBtn").click(function () {
        let serviceForm = $("#serviceForm").serialize();
        $.ajax({
            method: "POST",
            url: "http://localhost/as/api/services/ServicesService.php",
            async: true,
            data:  serviceForm,
        }).done(function (res) {
            alert(res);
        });
        loadService();
    });

    function loadService(){
        $('#servicetable').empty();
        $.ajax({
            url: "http://localhost/as/api/services/ServicesService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            // $("#cusTable").html(resp);
            for (var i in resp) {
                var tempA = resp[i];
                let row = "<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td><td>" + tempA[2] +"</td></tr>";
                $('#servicetable').append(row);
            }
        });
    }
    loadService();
</script>
</body>
</html>

<?php
//include 'footer.php';
//?>


