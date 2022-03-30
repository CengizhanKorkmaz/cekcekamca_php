<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<?php require_once 'includeFolders/header.php'; ?>

<?php require_once 'includeFolders/customcss2.php'; ?>
<?php 
$bkonum=$_POST['origin'];
$gkonum=$_POST['destination'];
$aractipi=$_POST['car-type'];
$arackasko=$_POST['car-kasko'];
$aracekstra=$_POST['car-bridge'];
$zaman=$_POST['time'];
$km=$_POST['km'];
$price=$_POST['price'];
$isim=$_POST['musteri_isim'];
$tel=$_POST['musteri_tel'];
     
        $random=rand(1000,9999);
      
        function SMSgonderHttpGET($mesaj,$numara){
    
        
        $password = urlencode("200400"); //
    
    
        $url= "https://api.netgsm.com.tr/sms/send/get/?usercode=8503467815&password=$password&gsmno=$numara&message=$mesaj&msgheader=8503467815";
       
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $http_response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        if($http_code != 200){
          //echo "$http_code $http_response\n";
          return false;
        }
        $balanceInfo = $http_response;
        //echo "MesajID : $balanceInfo";
        return $balanceInfo;
        }
        
        $mesaj="Doğrulama Kodunuz :{$random} ";
        SMSgonderHttpGET(rawurlencode($mesaj),$tel);

   
        if (($km<10.0) && ($aractipi == 15)) {
            $price = 200+$aracekstra;
        } else if ($aractipi == 15) {
            $price = $km * 15+$aracekstra;
        } else if (($km < 10.0) && ($aractipi == 17)) {
            $price = 250+$aracekstra;
        } else if ($aractipi == 17) {
            $price = $km * 17+$aracekstra;
        } else if (($km < 10.0) && ($aractipi == 20)) {
            $price = 300+$aracekstra;
        } else if ($aractipi == 20) {
            $price = $km * 20+$aracekstra;
            
        } else {
            $price = "Hatalı İşlem";
        }
$price=floor($price);
?>




<main>
    <!-- MultiStep Form -->
    <input id="origin" name="origin" value="<?php echo $_POST['origin']?>" type="hidden" />
    <input id="destination" name="destination" value="<?php echo $_POST['destination']?>" type="hidden" />
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Çekçekamca Hizmet Detayları</strong></h2>
                    <p>Alacağınız Hizmet Detaylarını Görebilirsiniz</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="nedmin/netting/islem.php" method="POST">
                               
                                <fieldset id="bir">
                                     <div class="form-card">
                                        <h2 class="fs-title">Doğrulama</h2>
                                        <div class="personalform">
                                                <input type="text" class="form-control" id="musteri_tel_kontrol" name="musteri_tel_kontrol" disabled="" value="<?php echo $_POST['musteri_tel']; ?>" required="">
                                            <input id="login-tel" type="tel" class="form-control" name="mustericheck" placeholder="Telefon no" required="">
                                            <input id="code" type="hidden" name="code" value="<?php echo $random?>"> 
                                             <input id="kmzoom" type="hidden" name="kmzoom" value="<?php echo $km?>"> 
                                        </div>
                                   
                                           
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Devam Et" />
                                </fieldset>
                                
                                
                                 <fieldset id="iki">
                                       <input type="hidden" name="musteri_bulundugukonum" value="<?php echo $bkonum; ?>">
                                       <input type="hidden" name="musteri_gidecegikonum" value="<?php echo $gkonum; ?>">
                                       <input type="hidden" name="musteri_fiyat" value="<?php echo $price; ?>">
                                       <input type="hidden" name="musteri_id" value="<?php echo uniqid(); ?>"> 
                                       <input type="hidden" name="musteri_isim" value="<?php echo $isim; ?>">
                                       <input type="hidden" name="musteri_tel" value="<?php echo $tel; ?>">
                                       <input type="hidden" id="musteri_odemeturu" name="musteri_odemeturu">
                                       

                                         
                                 <div id="map"></div> 
                                 <div class=konumduzenleme>
                                  <span><img src="assets/icon/konum.png">Bulunduğunuz Konum</span><br>
                                    <label class="konumlabel"><?php echo $bkonum; ?></label>
                                    
                                  </div>
                                   <div class=konumduzenleme>
                                  <span><img src="assets/icon/konum.png">Gideceğiniz Konum</span><br>
                                    <label class?"konumlabel"><?php echo $gkonum; ?></label>
                                    

                                  </div>
                                   <div class=konumduzenleme>
                                  <span><img src="assets/icon/zaman.png">Tahmini Varış Süresi</span><br>
                                    <label><?php echo $zaman; ?></label>

                                  </div>
                                  <div class=konumduzenleme>
                                  <span><img src="assets/icon/road.png">Tahmini Mesafe</span><br>
                                    <label><?php echo $km; ?> km</label>
                                  
                                  </div>
                                   <div class=konumduzenleme>
                                  <span><img src="assets/icon/cash-payment.png">Ödeyeceğiniz Tutar</span><br>
                                    <label><?php echo $price;?> TL</label>

                                  </div>

                                    <button type="submit" id="nakit" name="musterikaydet"  class="pricebtn">Nakit Ödeme</button>
                                
                                    <button type="submit" id= "kredi" name="musterikaydet"  class="pricebtn">Kredi Kartı İle Ödeme</button>

                                </fieldset>
                                
                                
                                
                                
                               
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includeFolders/footer.php'; ?>
<script type="text/javascript"> 
         $("#nakit").click(function(){
            document.getElementById("musteri_odemeturu").value="Nakit Ödeme";
         });
          $("#kredi").click(function(){
           document.getElementById("musteri_odemeturu").value="Kredi Kartı İle Ödeme";
         });
         var origin=document.getElementById("origin").value;
            var destination=document.getElementById("destination").value;
            var kmzoom=document.getElementById("kmzoom").value;
         var directionsService = new google.maps.DirectionsService();
         var directionsDisplay = new google.maps.DirectionsRenderer();
    
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom:7,
           mapTypeId: google.maps.MapTypeId.ROADMAP
         });
        
         directionsDisplay.setMap(map);
         directionsDisplay.setPanel(document.getElementById('panel'));
    
         var request = {
           origin: origin, 
           destination :destination,
           travelMode: google.maps.DirectionsTravelMode.DRIVING
         };
    setTimeout(() => {
        if(kmzoom<50){
      this.map.setZoom(12);
        }
      else if(kmzoom>50){
           this.map.setZoom(6);
      }
}, 1000);
         directionsService.route(request, function(response, status) {
           if (status == google.maps.DirectionsStatus.OK) {
             directionsDisplay.setDirections(response);
           }
         });
       </script> 


</body>

</html>