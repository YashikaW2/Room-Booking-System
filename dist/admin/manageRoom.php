<?php
include 'header.php';
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Rooms</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form id="roomForm">
                <div class="row">
                   <div class="col-sm-8">
                       <input type="text" class="form-control" name="r_id" id="r_id" placeholder="Room ID">
                   </div>
                   <div class="col-sm-4">
                       <button id="btnUpdate" type="button" class="btn btn-info">Search</button>
                   </div>
                   <div class="col-sm-1"></div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="r_roomtype" id="r_roomtype" placeholder="Room Type">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="r_roomfloor" id="r_roomfloor" placeholder="Room Floor">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="r_bedtype" id="r_bedtype" placeholder="Bead Type">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="r_roomdescription" id="r_roomdescription" placeholder="Description">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="r_roomnumber" id="r_roomnumber" placeholder="Room Number">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="r_price" id="r_price" placeholder="Room Price">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <button id="saveRoomBtn" type="button" class="btn btn-primary">Save</button>
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
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                <tr style="background-color: darkblue;color: white;height: 50px;margin-bottom: 40px;font-size: 15px">
                    <th scope="col">Room ID</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Room Floor</th>
                    <th scope="col">Bead Type</th>
                    <th scope="col">Room Description</th>
                    <th scope="col">Room Number</th>
                    <th scope="col">Room Price</th>
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
<!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->
<!--<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>-->
<!--<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>-->
<!--<script>-->
<!--    $(function () {-->
<!--        $('#dtBasicExample').DataTable({-->
<!--            'paging'      : true,-->
<!--            'lengthChange': false,-->
<!--            'searching'   : false,-->
<!--            'ordering'    : true,-->
<!--            'info'        : true,-->
<!--            'autoWidth'   : false-->
<!--        })-->
<!--    })-->
<!--</script>-->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $('#dtOrderExample').DataTable({-->
<!--            "order": [[ 3, "desc" ]]-->
<!--        });-->
<!--        $('.dataTables_length').addClass('bs-select');-->
<!--    });-->
<!--</script>-->
<script>

    $("#saveRoomBtn").click(function () {

        let roomForm = $("#roomForm").serialize();
        $.ajax({
            method: "POST",
            url: "http://localhost/as/api/services/RoomService.php",
            async: true,
            data:  roomForm,
        }).done(function (res) {
            alert(res);
        });
        loadRoom();
    });

    function loadRoom(){
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
                    "<td>" + tempA[2] +"</td>" +
                    "<td>" + tempA[3] +"</td>" +
                    "<td>" + tempA[4] +"</td>" +
                    "<td>" + tempA[5] +"</td>" +
                    "<td>" +tempA[6] +"</td>" +
                    "</tr>";
                $('#roomtable').append(row);
            }
        });
    }
    loadRoom();
</script>
</body>
</html>

<?php
//include 'footer.php';
?>
