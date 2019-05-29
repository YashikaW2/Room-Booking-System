<?php
include 'header.php';
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Customer</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm">
                <thead>
                    <tr style="background-color: darkblue;color: white;height: 50px;margin-bottom: 40px;font-size: 18px">
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Country</th>
                        <th scope="col">Passport ID</th>
                        <th scope="col">Customer NIC</th>
                        <th scope="col">Customer Tell</th>
                    </tr>
                </thead>
                    <tbody id="customerTable">
                </tbody>
            </table>
        </div>
    </div>
</main>

</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script>
    function loadCustomer(){
        $('#customerTable').empty();
        $.ajax({
            url: "http://localhost/as/api/services/GestServices.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                var tempA = resp[i];
                let row = "<tr>" +
                    // "<td>" + tempA[0] + "</td>" +
                    "<td>" + tempA[1] + "</td>" +
                    "<td>" + tempA[2] +"</td>" +
                    "<td>" + tempA[3] +"</td>" +
                    "<td>" + tempA[4] +"</td>" +
                    "<td>" + tempA[5] +"</td>" +
                    "<td>" + tempA[6] +"</td>" +
                    "<td>" + tempA[7] +"</td>" +
                    "</tr>";
                $('#customerTable').append(row);
            }
        });
    }
    loadCustomer();
</script>
</body>
</html>

<?php
//include 'footer.php';
//?>



