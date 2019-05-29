<?php
include 'header.php';
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Booking Details</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                <tr style="background-color: darkblue;color: white;height: 50px;margin-bottom: 40px;font-size: 15px">
                    <th scope="col">User Name</th>
                    <th scope="col">Cheak In</th>
                    <th scope="col">Cheak Out</th>
                    <th scope="col">Rooms Count</th>
                    <th scope="col">Adults Count</th>
                    <th scope="col">Childern Count</th>
                    <th scope="col">Room IDS</th>
                </tr>
                </thead>
                <tbody id="roomtable">
                </tbody>
            </table>
        </div>
    </div>
</main>

</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script>
    function loadBooking(){
        $('#roomtable').empty();
        $.ajax({
            url: "http://localhost/as/api/services/RegisterService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                var tempA = resp[i];
                let row = "<tr>" +
                    "<td>" + tempA[1] + "</td>" +
                    "<td>" + tempA[2] +"</td>" +
                    "<td>" + tempA[3] +"</td>" +
                    "<td>" + tempA[4] +"</td>" +
                    "<td>" + tempA[5] +"</td>" +
                    "<td>" +tempA[6] +"</td>" +
                    "<td>" +tempA[7] +"</td>" +
                    "</tr>";
                $('#roomtable').append(row);
            }
        });
    }
    loadBooking();
</script>
</body>
</html>

<?php
//include 'footer.php';
?>
