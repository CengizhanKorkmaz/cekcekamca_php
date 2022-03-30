

<script>
    var price;
    var distance_in_kilo;
    var km;
    var result;

    $(function() {

        // add input listeners
        function geoLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {

                    $.ajax({
                        type: 'GET',
                        url: 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + ',' + position.coords.longitude + '&key=AIzaSyAERxhL5DAHslqlOMv7VKd0apqAmT1sKv0',
                        success: function(data) {
                            address = data.results[0].formatted_address;
                            $("#from_places").val(address);
                            $("#origin").val(address);

                        }
                    })
                });
            }
        }
        geoLocation();
        // calculate distance
        function calculateDistance() {
            var origin = $("#origin").val();
            var destination = $("#destination").val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                },
                callback
            );
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $("#result").html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $("#result").html(
                        "Uçağa binsek iyi olur. Arasında yol yok" +
                        origin +
                        " and " +
                        destination
                    );
                } else {
                    console.log(response);
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;

                    console.log(distance, duration);
                    distance_in_kilo = distance.value / 1000; // the kilom
                    km = distance_in_kilo.toFixed(2);



                }
            }
        }

        // print results on submit the form
        function executeCalculation() {
            calculateDistance();
        }
        // Get all input fields.
        var inputs = document.querySelectorAll('.form-control');

        function checkInputs() {
            var allFilled = true;
            // If any of the inputs is not filled, we won't show the alert.
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].value === '') {
                    allFilled = false;
                }
            }
            // If all input fields have been filled.
            if (allFilled) {
                executeCalculation();
            }
        }
        $(document).ready(function() {
            $('#pricecalculate').click(function() {
                priceCalculate();
            });
        });
        function show(){
            console.log("merhaba");
        }
        function priceCalculate() {
            var carTypeFee = 0;
            var carTypes = document.getElementsByName("car-type");
            for (var i = 0; i < carTypes.length; i++) {
                if (carTypes[i].checked) {
                    carTypeFee = carTypes[i].value;
                }
            }

                if ((km < 10.0) && (carTypeFee == 15)) {
                    result = 200;
                    price = result.toFixed(0);
                } else if (carTypeFee == 15) {
                    result = km * 15;
                    price = result.toFixed(0);
                } else if ((km < 10.0) && (carTypeFee == 17)) {
                    result = 250;
                    price = result.toFixed(0);
                } else if (carTypeFee == 17) {
                    result = km * 17;
                    price = result.toFixed(0);
                } else if ((km < 10.0) && (carTypeFee == 20)) {
                    result = 300;
                    price = result.toFixed(0);
                } else if (carTypeFee == 20) {
                    result = km * 20;
                    price = result.toFixed(0);
                } else {
                    price = "Hatalı İşlem";
                }
            
            document.getElementById("priceSpan").style.visibility = "visible";
            document.getElementById("pricetext").style.visibility = "visible";
            document.getElementById("gotopay").style.visibility = "visible";
            document.getElementById("gecicifiyat").value = price;
            $("#pricetext").text(price + " TL");




        }

        google.maps.event.addDomListener(window, "load", function() {
            var from_places = new google.maps.places.Autocomplete(
                document.getElementById("from_places")
            );
            var to_places = new google.maps.places.Autocomplete(
                document.getElementById("to_places")
            );
            google.maps.event.addListener(from_places, "place_changed", function() {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $("#origin").val(from_address);
                checkInputs();
            });
            google.maps.event.addListener(to_places, "place_changed", function() {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $("#destination").val(to_address);
                checkInputs();
            });
        });

    });

    
</script>
<body concontextmenu='return false' class='snippet-body'>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Çekçekamca Hizmet Bilgileri</strong></h2>
                    <p>Lütfen bilgilerinizi doğru bir şekilde giriniz.</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="../nedmin/netting/islem.php" method="POST">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Konum Bilgileri</strong></li>
                                    <li id="personal"><strong>Kişisel Bilgiler</strong></li>
                                    <li id="personal"><strong>Araç Durum</strong></li>
                                    <li id="personal"><strong>Araç Tipi</strong></li>
                                    <li id="payment"><strong>Köprü Kullanımı</strong></li>
                                    <li id="confirm"><strong>Kasko Seçimi</strong></li>
                                    <li id="payment"><strong>Ödeme Türü</strong></li>
                                </ul>


                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Konum Bilgileri</h2>
                                        <label for="">Bulunduğu Konum</label>
                                        <input class="form-control location" id="from_places" autocomplete="of" placeholder="Bulunduğunuz Yeri Girin ..." />
                                        <input id="origin" name="origin" required="" type="hidden" />
                                        <label for="">Gideceği Konum</label>
                                        <input class="form-control location" id="to_places" placeholder="Gitmek İstediğiniz Yeri Girin ..." />
                                        <input id="destination" name="destination" required="" type="hidden" />
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Devam Et" />
                                </fieldset>



                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Kişisel Bilgiler</h2>
                                        <label for="">İsim Soyisim</label>
                                        <input id="login-username" type="text" class="form-control" name="musteri_isim" value="" placeholder="İsim Soyisim" required="">
                                        <label for="">Cep Numaranız</label>
                                        <input id="login-tel" type="tel" class="form-control" name="musteri_tel" placeholder="Telefon no" required="">
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>


                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Aracınız Hareket Eder Durumda Mı?</h2>
                                        <div class="form-check"> <input type="radio" name="car-status" value="100" class="form-check-input required_form_input" id="yesCheck"> <label for="yesCheck">Evet</label> </div>
                                        <div class="form-check"> <input type="radio" name="car-status" value="200" class="form-check-input required_form_input" id="noCheck"> <label for="noCheck">Hayır</label> </div>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Araç Tipini Seçiniz</h2>
                                        <div class="form-check"> <img src="assets/img/taxi.svg" class="img-fluid" alt=""> <input type="radio" value="15" name="car-type" class="form-check-input required_form_input" id="araba"> <label for="araba">Araba</label> </div>
                                        <div class="form-check"> <img src="assets/img/bus.svg" class="img-fluid" alt=""><input type="radio" value="17" name="car-type" class="form-check-input required_form_input" id="minubus"> <label for=minubus>Minibüs</label></div></input>
                                        <div class="form-check"> <img src="assets/img/truck.svg" class="img-fluid" alt=""><input type="radio" value="20" name="car-type" class="form-check-input required_form_input" id="kamyonet"> <label for="kamyonet">Kamyonet</label> </div></input>

                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Köprü Feribot Kullanımı Olacak Mı ?</h2>
                                        <div class="form-check"> <input type="radio" name="car-road" value="100" class="form-check-input required_form_input" id="yesCheckRoad"> <label for="yesCheckRoad">Hayır</label> </div>
                                        <div class="form-check"> <input type="radio" name="car-road" value="200" class="form-check-input required_form_input" id="noCheckRoad"> <label for="noCheckRoad">Yavuz Sultan Selim Köprüsü</label> </div>
                                        <div class="form-check"> <input type="radio" name="car-road" value="100" class="form-check-input required_form_input" id="noCheck1Road"> <label for="noCheck1Road">Osman Gazi Köprüsü</label> </div>
                                        <div class="form-check"> <input type="radio" name="car-road" value="200" class="form-check-input required_form_input" id="noCheck2Road"> <label for="noCheck2Road">Her İki Köprü</label> </div>
                                        <div class="form-check"> <input type="radio" name="car-road" value="200" class="form-check-input required_form_input" id="noCheck3Road"> <label for="noCheck3Road">Feribot</label> </div>



                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Kasko Durumu</h2>
                                        <div class="form-check"> <input type="radio" name="car-status" value="100" class="form-check-input required_form_input" id="yesKasko"> <label for="yesKasko">Evet(Ekstra Ücretli</label> </div>
                                        <div class="form-check"> <input type="radio" name="car-status" value="200" class="form-check-input required_form_input" id="noKasko"> <label for="noKasko">Hayır</label> </div>

                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Ödeme Türünü Seçiniz</h2>
                                        <div class="form-check"> <input type="radio" name="price-type" value="Nakit Ödeme" class="form-check-input required_form_input" required id="yespriceCheck"> <label for="yespriceCheck">Nakit Olarak Öde</label> </div>
                                        <div class="form-check"> <input type="radio" name="price-type" value="Kredi Kartı Ödeme" class="form-check-input required_form_input" id="nopriceCheck"> <label for="nopriceCheck">Kredi Kartı İle Öde</label></div>

                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            
                                            <input type="button" id="pricecalculate" onclick="show()" value="Fiyat Göster" class="button button-contactForm boxed-btn"/>
                                            <span class="priceSpan" id="priceSpan">Fiyat : <span class="pricetext" id="pricetext">0</span> </span>
                                            <input type="hidden" id="gecicifiyat" name="price" value="">
                                            <input type="submit" href="payinfo.php" value="Ödemeye Geç" id="gotopay" class="button button-contactForm boxed-btn goToPay">
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>