<?php
include 'header.php';
?>
<!-- Page Content -->
<div class="container" style="background-color: #0B243B">
    <div class="row" style="height: 500px;margin-top: 0px">
        <div class="col-md-12">
            <img class="mySlides" src="images/slide_01.jpg" style="width:100%;height: 500px;">
            <img class="mySlides" src="images/slider-2.jpg" style="width:100%;height: 500px;">
            <img class="mySlides" src="images/slider-4.jpg" style="width:100%;height: 500px;">
            <img class="mySlides" src="images/slider-3.jpg" style="width:100%;height: 500px;">
        </div>
    </div>
    <p id="booking"></p>
    <div class="row">
        <!-- Post Content Column -->
        <div class="col-md-12">
            <h1 style="font-family: 'Unlock', cursive;margin-left: 250px;color: white">Home Away Home at Heidi's Home</h1>
            <br>
            <div class="row">
                <div class="card-group" style="margin-left: 30px">
                    <div class="card">
                        <img class="card-img-top" src="images/slider-3.jpg" alt="Card image cap" style="height: 200px">
                        <div class="card-body">
                            <h5 style="font-family: 'Gamja Flower', cursive;" class="card-title">Discover Nuwara
                                Eliya</h5>
                        </div>
                    </div>
                    <div class="card" style="margin-left: 30px">
                        <img class="card-img-top" src="images/yoga.jpg" alt="Card image cap" style="height: 200px">
                        <div class="card-body">
                            <h5 style="font-family: 'Gamja Flower', cursive;" class="card-title">Heal Your Body, Mind &
                                Soul</h5>
                        </div>
                    </div>
                    <div class="card" style="margin-left: 30px">
                        <img class="card-img-top" src="images/room-2.jpg" alt="Card image cap" style="height: 200px">
                        <div class="card-body">
                            <h5 style="font-family: 'Gamja Flower', cursive;" class="card-title">Perfect Sleep</h5>
                        </div>
                    </div>
                </div>
            </div>
            <p id="logIN"></p>
            <br><br>
            <div class="row" style="background-image: url('images/re.jpg')">
                <div class="col-md-6" style="margin-top: 50px">

                    <h4 style="font-weight: bold;font-family: 'Francois One', sans-serif;color: white;text-align: center">Register Now</h4>
                    <form id="registerForm">
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="form" for="cc_name">Name:</label>
                                <input type="text" class="form-control" name="r_name" id="r_name" placeholder="Full Name" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="form" for="cc_email">Email:</label>
                                <input type="text" class="form-control" name="r_Email" id="r_Email" placeholder="Email" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="formOne" for="cc_comment">Address :</label>
                                <textarea class="form-control" name="r_Address" id="r_Address" rows="3" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="formOne" for="cc_subject">Country :</label>
                                <input type="text" class="form-control" name="r_Country" id="r_Country" placeholder="Country" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="formOne" for="cc_subject">Passport ID :</label>
                                <input type="text" class="form-control" name="r_PassportID" id="r_PassportID" placeholder="Passport ID" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="formOne" for="cc_subject">NIC :</label>
                                <input type="text" class="form-control" name="r_NIC" id="r_NIC" placeholder="NIC" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" class="formOne" for="cc_subject">Tell :</label>
                                <input type="text" class="form-control" name="r_Tell" id="r_Tell" placeholder="Tell" value="" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-lg btn-block" id="registrationbtn" type="button">Sing Up</button>
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
                <div class="col-md-6" style="margin-top: 50px">

                    <h4 style="font-weight: bold;font-family: 'Francois One', sans-serif;color: white;text-align: center">Log In</h4>
                    <form id="logInForm" method="post" enctype="application/x-www-form-urlencoded">
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" >Name:</label>
                                <input class="form-control" type="text" id="name" name="name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="color: white;font-weight: bold;" >Email:</label>
                                <input class="form-control" type="text" id="email" name="email" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-lg btn-block" id="loginbtn" type="button">Log In</button>
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12" style="color: white">
                    <br>
                    <p style="font-family: 'Dokdo', cursive;">
                        We are a home stay only caters for the foreigners in the high hills in the country with three
                        cosy
                        rooms and we have private bathrooms with hot water, separate lobby for each room. Interior has
                        been
                        done by the antiques which are more than hundred years old. Once you check in you will fall in
                        love
                        with the place for sure...
                    </p>
                    <br>
                    <p style="font-family: 'Dokdo', cursive;">
                        We are located just few minutes(2Km) from the city center of nuwaraeliya overlooking the lake
                        Gregory and surrounded by Tea carpeted hills just below the heights peak in sri lanka ,called
                        mountain Piduruthalagala and we have much more to offer....
                    </p>
                    <br>
                    <ul style="font-family: 'Dokdo', cursive;margin-left: 300px">
                        <li>Free Wi-Fi</li>
                        <li>you can experience the real sri lankan home</li>
                        <li>You can taste the authentic sri lankan food</li>
                        <li>You can do Yoga in the Yoga Ashram</li>
                        <li>You can do the Sri Lankan cookery classes</li>
                        <li>You can get organized the tours</li>
                    </ul>
                </div>
            </div>
            <p id="thinkTo"></p>
            <br><br>
            <div class="row">
                <h1 style="font-weight: bold;font-family: 'Francois One', sans-serif;margin-left: 400px;color: white;margin-bottom: 50px">Things to Do</h1>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting Horton Plains</strong>
                            <p class="one-font">
                                Horton Plains is protected national park in the central highlands of sri lanka and it is
                                covered by mountain grassland and cloud forest. This plain is at an altitude of 6,900 –
                                7,500 ft is rich with the bio diversity, which is situated just 20 miles from
                                nuwaraeliya.
                                <br>

                                The Horton Plains is the head waters for three major rivers in this beautiful island. In
                                Sinhala the plain is known as Mahawali Plain.The plains vegetation is grassland
                                interspersed with mountain forest and include many woody plants, large herds of sri
                                lankan Samba Deer feature as typical mammals and the park is also an important Bird
                                watching area with many species not only endemic but also restricted to the Horton
                                Plains. The sheer precipice of World’s End and Baker’s Falls are among the tourist
                                attractions of the park.

                            </p>
                        </div>
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/mount.jpg "height="500"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/tea.jpg" width="100" height="280"
                             alt="Card image cap">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting Tea Factory</strong>
                            <p class="one-font">
                                The humidity, cool temperature and the rain fall in the country’s central highlands
                                provide the climate that favours the production of high quality tea. The industry was
                                introduced to the country in the 1867 by James Tayler,the British planter who arrived in
                                sri alnak 1852.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting the Hakgala Botanical
                                Gardens</strong>
                            <p class="one-font">
                                Just few kms from the city of nuwaraeliya.This place was started as a botanical garden
                                by a British botanist Dr.G.H.K.Thwaites who was the director of Peradeniya Botanical
                                Gardens in the year of 1859.Intitaly they grew “sikona”which was used to produce
                                “quiveenen” for malaria.
                            </p>
                        </div>
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/haggala.jpg"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/water.jpeg" height="300"
                             alt="Card image cap">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting the Water Falls</strong>
                            <p class="one-font">
                                Lover’s Leap Falls- It gives the best water in the country can visit at any time since
                                it is close by the city.
                                <br>
                                Baker’s Falls -This water fall is located in the Horton Plains also a one of the most
                                beautiful waterfalls in sri lanka and named after famous explorer sir James Baker.
                                <br>
                                St. clairs water fall – known as one of the widest waterfalls in the Island and the name
                                derived from the near by Tea estate.
                                <br>
                                Devon waterfall – Named after famous coffe planter named Devon.This cascading waterfall
                                continues with three falls and it is approximately 318ft high.
                                <br>
                                Ramboda falls – The 11th heights waterfall best in sri lanka and this place is ideal for
                                having lunch while watching the waterfall, since surrounding area has few nice places to
                                eat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting The Golf Course</strong>
                            <p class="one-font">
                                Occasionally you may feel that you are playing Golf back in the British Isles, but the
                                Course holds many features unique to sri lanka was built by a Scottish soldier of the
                                Goland Highlanders for the British servicemen and officials stationed here in 1889.
                            </p>
                        </div>
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/b5.jpg"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/nuwaratown.jpg" height="300"
                             alt="Card image cap">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting the small city of Nuwaraeliya and
                                walk in the Lake Round</strong>
                            <p class="one-font">
                                The city has been really famous for buying the winter cloths at a cheap rate and people
                                from all over the world visiting sri lanak hardly misses this place and further you can
                                visit the vegetable market where you can see the fresh up country veggies in sri lanka
                                and it is worth to have a walk in the Victoria Park in the city which was established in
                                1897 as for the jubilee of Queen Victoria in completion of sixty years on here thron,
                                where you can experience a typical public park in England.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div style="width: 60%" class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Visiting The Lipton’s Seat</strong>
                            <p class="one-font">
                                This was the famous look out point of Sir Thomas Lipton (A Great planter) when
                                developing the Tea in the surrounding region of his Tea plantation at dambethanna.
                            </p>
                        </div>
                        <img style="width: 40%" class="card-img-right flex-auto d-none d-md-block" src="images/lipton.jpg" height="200" alt=" Card image cap">
                    </div>
                </div>
            </div>
            <p id="contactUs"></p>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-weight: bold;font-family: 'Francois One', sans-serif;color: white">Contact Us</h1>
                    <div class="row" style="color: white">
                        <div class="col-md-4">
                            <h4 style="margin-bottom: 10px">Address</h4>
                            <p>Heidi's Home</p>
                            <p>
                                No.12A Glen Field,<br>
                                Babulla Road,<br>
                                Mahagasthota,<br>
                                Nuwara Eliya<br>
                            </p>
                            <ul>
                                <li>Tel: 052 4545013</li>
                                <li>Mob: 0777 699042</li>
                                <li>Email: heidihome1@gmail.com</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <form id="commentForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label style="color: white;font-weight: bold;" for="cc_name">Name:</label>
                                        <input type="text" class="form-control" name="cc_name" id="cc_name" placeholder="" value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label style="color: white;font-weight: bold;" for="cc_email">Email:</label>
                                        <input type="text" class="form-control" name="cc_email" id="cc_email" placeholder="" value="" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label style="color: white;font-weight: bold;" for="cc_subject">Subject:</label>
                                        <input type="text" class="form-control" name="cc_subject" id="cc_subject" placeholder="" value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label style="color: white;font-weight: bold;" for="cc_comment">comment :</label>
                                        <textarea class="form-control" name="cc_comment" id="cc_comment" rows="3"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary btn-lg btn-block" id="submitCommentbtn" type="button">Submit</button>
                                    </div>
                                </div>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<footer class="py-3 bg-secondary">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © 2018 Heidi's Home. Web Design by YashikaWijeskara.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    $("#submitCommentbtn").click(function () {
        let commentForm = $("#commentForm").serialize();
        $.ajax({
            method: "POST",
            url: "http://localhost/as/api/services/ClientComment.php",
            async: true,
            data:  commentForm,
        }).done(function (res) {
            alert(res);
        });
    });
    $("#registrationbtn").click(function () {
        let registerForm = $("#registerForm").serialize();
        $.ajax({
            method: "POST",
            url: "http://localhost/as/api/services/GestServices.php",
            async: true,
            data:  registerForm,
        }).done(function (res) {
            alert(res);
        });
    });

    $("#loginbtn").click(function () {
        $.ajax({
            url: "http://localhost/as/api/services/GestServices.php",
            method: "GET",
            async: true,
            dataType: "json"
        }).done(function (resp) {
            for (var i in resp) {

                var userName=$("#name").val();
                var password=$('#email').val();
                var tempA = resp[i];
                if(userName==tempA[1] && password==tempA[2] ){
                        window.location.href="bookRoom.php";
                }else{
                }
            }
        });
    });

</script>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>


