<style>
    #grad1 {
        margin-top: 160px;
        background-color: #9C27B0;
        background-image: linear-gradient(120deg, #FF4081, #81D4FA)
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
    }

    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue
    }

    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        padding: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #000000
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 16%;
        height: 50px;
        float: left;
        position: relative;

    }



    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #E85A96
    }

    .radio-group {
        position: relative;
        margin-bottom: 25px
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }


    .carstatusform .form-check input[type="radio"] {
        display: none;
    }

    .carstatusform .form-check label {
        font-size: 18px;
        border: 1px solid;
        width: 250px;
         height: 40px;
        text-align: center;
        margin-left: 0px;
        margin-right: 0px;
        padding-top: 7px;
        padding-left: 0px;
        position: relative;
        display: inline-block;
        color: rgb(90, 0, 102);
        cursor: pointer;

    }

    .carstatusform .form-check input[type="radio"]:checked+label {
        background-color: rgb(149, 0, 248);
        color: white;
    }

    .cartypeform .form-check input[type="radio"] {
        display: none;
    }

    .cartypeform .form-check label {
        font-size: 18px;
        border: 1px solid;
        width: 250px;
        height: 40px;
        text-align: center;
        padding-top: 7px;
        position: relative;
        display: inline-block;
        color: rgb(90, 0, 102);
        cursor: pointer;
    }

    .cartypeform .form-check input[type="radio"]:checked+label {
        background-color: rgb(149, 0, 248);
        color: white;
    }


    .carbridgeform .form-check input[type="radio"] {
        display: none;
    }

    .carbridgeform .form-check label {
        font-size: 18px;
        border: 1px solid;
        width: 250px;
         height: 40px;
        text-align: center;
        padding-top: 7px;
        position: relative;
        display: inline-block;
        color: rgb(90, 0, 102);
        cursor: pointer;
    }

    .carbridgeform .form-check input[type="radio"]:checked+label {
        background-color: rgb(149, 0, 248);
        color: white;
    }

    .carkaskoform .form-check input[type="radio"] {
        display: none;
    }

    .carkaskoform .form-check label {
        font-size: 18px;
        border: 1px solid;
        width: 250px;
         height: 40px;
        text-align: center;
        padding-top: 7px;
        position: relative;
        display: inline-block;
        color: rgb(90, 0, 102);
        cursor: pointer;
    }

    .carkaskoform .form-check input[type="radio"]:checked+label {
        background-color: rgb(149, 0, 248);
        color: white;
    }

    .priceSpan {
        margin-left: 0px;
        font-size: 18px;
        font-style: oblique;
        visibility: hidden;
    }
    .btnsms{
   
    height: 60px;
    text-align: center;
    padding-top: 15px;
    background-color: #e85a96;
    color: white !important;
    cursor: pointer;
    font-size: 20px;
}
@media (max-width: 767px) {
   #progressbar {
    color: lightgrey;
    margin-top: -50px;
    }


    #progressbar .active {
    color: #000000;
    width: 230px;
    font-size: 16px;
    visibility: visible;
    
    }
  

    #progressbar li {
    list-style-type: none;
    font-size: 12px;
    height: 50px;
    visibility: hidden;
    position: absolute;

    }



    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
        
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #E85A96
    }
    .fs-title {
    font-size: 17px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
}
#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E;
   
}
.carstatusform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 150px;
    height: 35px;
    text-align: center;
    margin-left: 0px;
    margin-right: 0px;
    padding-top: 7px;
    padding-left: 0px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
  
    cursor: pointer;
 }
 .cartypeform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 120px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
.carbridgeform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 160px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
.carkaskoform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 150px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
}
@media (width:375px) and (height:667px){
    
    #progressbar .active {
    color: #000000;
    width: 230px;
    font-size: 16px;
    visibility: visible;
    margin-left:28px;
    
    }
    .carstatusform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 215px;
    height: 35px;
    text-align: center;
    margin-left: 0px;
    margin-right: 0px;
    padding-top: 7px;
    padding-left: 0px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
  
    cursor: pointer;
 }
 .cartypeform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 178px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
.carbridgeform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 215px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
.carkaskoform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 215px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
}
@media (width:414px) and (height:736px){
    
    #progressbar .active {
    color: #000000;
    width: 230px;
    font-size: 16px;
    visibility: visible;
    margin-left:45px;
    
    }
    .carstatusform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 240px;
    height: 35px;
    text-align: center;
    margin-left: 0px;
    margin-right: 0px;
    padding-top: 7px;
    padding-left: 0px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
  
    cursor: pointer;
 }
 .cartypeform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 200px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
.carbridgeform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 240px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
.carkaskoform .form-check label {
    font-size: 14px;
    border: 1px solid;
    width: 240px;
    height: 35px;
    text-align: center;
    padding-top: 7px;
    position: relative;
    display: inline-block;
    color: rgb(90, 0, 102);
    cursor: pointer;
}
}

</style>

<script>
 var price;
    var distance_in_kilo;
    var km;
    var result;
    var map;
    var zaman;

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
               
                    distance_in_kilo = distance.value / 1000; // the kilom
                    km = distance_in_kilo.toFixed(2);
                    zaman = duration.text;
                    console.log("kilometre",km);
                    console.log("zaman",zaman);
                    document.getElementById("time").value=zaman;
                    document.getElementById("km").value=km;



                }
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
                
            });
            google.maps.event.addListener(to_places, "place_changed", function() {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $("#destination").val(to_address);
             
            });
        });

   
        
    
        var sayac = 0;
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        $(".next").click(function() {
            sayac++;
            console.log("sayac :", sayac);
            if (sayac == 1) {
                var firstLoc = document.getElementById("origin").value.length;
                var secondLoc = document.getElementById("destination").value.length;
                if (firstLoc > 0 && secondLoc > 0) {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    calculateDistance();
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                } else {
                    alert("Lütfen Konum Bilgilerinizi Giriniz");
                    sayac--;

                }

            } else if (sayac == 2) {
                var carStatus = 0;
                var i;
                var carStatus = document.getElementsByName("car-status");
                console.log("car status", carStatus);
                for (i = 0; i <= carStatus.length; i++) {
                    if (carStatus[i].checked) {
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        break;
                    } else {
                        if (i > 0) {
                            alert("Araba Durumunu Seçiniz");
                            sayac--;

                        }


                    }
                }
            } else if (sayac == 3) {
                var carType = 0;

                var carType = document.getElementsByName("car-type");
                for (x = 0; x < carType.length; x++) {
                    if (carType[x].checked) {
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        break;
                    } else {
                        if (x > 1) {
                            alert("Araç Tipini Seçiniz");
                            sayac--;
                        }

                    }
                }


            } else if (sayac == 4) {
                var carBridge = 0;

                var carBridge = document.getElementsByName("car-bridge");
                for (y = 0; y < carBridge.length; y++) {
                    if (carBridge[y].checked) {
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        break;
                    } else {
                        if (y > 3) {
                            alert("Lütfen Bir Seçim Yapınz");
                            sayac--;
                        }

                    }
                }


            } else if (sayac == 5) {
                var carKasko = 0;

                var carKasko = document.getElementsByName("car-kasko");
                for (z = 0; z < carKasko.length; z++) {
                    if (carKasko[z].checked) {
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                         
                        break;
                    } else {
                        if (z > 0) {
                            alert("Lütfen Bir Seçim Yapınz");
                            sayac--;
                        }

                    }
                }


            } else if (sayac == 6) {
                var name = document.getElementById("login-username").value.length;
                var phone = document.getElementById("login-tel").value.length;
                var phonecontrol=document.getElementById("login-tel").value;
                if (name > 0 && phone > 0) {
                     document.getElementById("musteri_tel_kontrol").value=phonecontrol;
                    
                     current_fs = $(this).parent();
                     next_fs = $(this).parent().next();
                     $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                
                        
                    
                }
                else{
                    alert("Lütfen Bilgilerinizi Giriniz");
                    sayac--;
                }
                

            }
            //Add Class Active
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {
            sayac--;
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
             $("#progressbar li").eq($("fieldset").index(previous_fs)).addClass("active");
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
   
    
</script>
<script>
   
</script>