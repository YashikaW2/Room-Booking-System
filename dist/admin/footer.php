</div>
</div>

<script src="css/js/JQuery.js"></script>
<script>
    $('#saveFaclitiesBtn').click(function () {
        var formData = $('#FaclitiesForm').serialize();
        $.ajax({
            url: "api/services/FaclitiesService.php",
            method: "GET",
            async: true,
            data: formData,
        }).done(function (resp) {
            alert(resp);
        });
    });
    function loadCustomer(){
        var customerCount=0;
        $.ajax({
            url: "http://localhost/as/api/services/GestServices.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                customerCount++;
            }
            $('#customerCount').append(customerCount);
        });
    }
    function loadFaclity(){
        var count=0;
        $.ajax({
            url: "http://localhost/as/api/services/FaclitiesService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                count++;
            }
            $('#facilityCount').append(count);
        });
    }
    function loadRoom(){
        var count=0;
        $('#roomCount').empty();
        $.ajax({
            url: "http://localhost/as/api/services/RoomService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                count++;
            }
            $('#roomCount').append(count);
        });
    }
    function loadService(){
        var count=0;
        $.ajax({
            url: "http://localhost/as/api/services/ServicesService.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                count++;
            }
            $('#servicesCount').append(count);
        });
    }
    function loadUser(){
        var count=0;
        $.ajax({
            url: "http://localhost/as/api/services/SystemUser.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {
                count++;
            }
            $('#systemUserCount').append(count);
        });
    }
    loadUser();
    loadService();
    loadRoom();
    loadFaclity();
    loadCustomer();

</script>
</body>
</html>
