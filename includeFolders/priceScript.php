<script>
    var price;
    var distance_in_kilo;
    var km;
    var result;
    var map;

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
            $("#origin2").val(origin);
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

        function priceCalculate() {
            var carTypeFee = 0;
            var kontrol = 0;
            var carTypes = document.getElementsByName("car-type");
            for (var i = 0; i < carTypes.length; i++) {
                if (carTypes[i].checked) {
                    carTypeFee = carTypes[i].value;
                }
            }

          

            if (kontrol == 0) {
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
            
          
            document.getElementById("pricetext").style.visibility = "visible";
            
            $("#pricetext").text(price + " TL");
            }



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