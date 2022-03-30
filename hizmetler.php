<!doctype html>
<html class="no-js" lang="zxx">
    <style>
        .makaledetay .container p  a {
            color:black !important;
        }
        @media (max-width: 767px) {
        .makaledetay .container  img{
               width:100% !important;
               height:150px !important;
        }
  }

    </style>
<?php 
require_once 'includeFolders/header.php';
require_once 'fonksiyonlar.php';
$url =  "/{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$urlArray = explode("/", $url);
$urlArrayLength = count($urlArray);
$tempArray=$urlArray[2];
$sayfabasikontrol=explode("-",$tempArray);
$pagecheck=$sayfabasikontrol[0];
$kontrolil=$db->prepare("SELECT DISTINCT il FROM iller");
$kontrolil->execute();
$sayac=0;
$flag=0;
while($kontrolilcek=$kontrolil->fetch(PDO::FETCH_ASSOC))
{
    if($kontrolilcek['il']==strtoupper($pagecheck))
    {
        
        break;
        
    }
    
    else if($sayac > 80)
    {
       
    echo "<script type='text/javascript'>window.top.location='https://cekcekamca.com/404.php';</script>";
       
        
    }
    $sayac++;
    
}
if($urlArrayLength==3){

$ilUrl =$urlArray[$urlArrayLength-1];

$ilArray = explode("-", $ilUrl);
$ilArrayLength =count($ilArray);
$il =$ilArray[0];
$city=strtoupper($il);
    if (isset($city)) {
       $ilsor = $db->prepare("SELECT *FROM iller where il=:il");
       $ilsor->execute(array(
          'il' => $city
       ));
       $ilcek = $ilsor->fetch(PDO::FETCH_ASSOC);
       $makale_isim = $city;
       $ilget=explode("-",$_GET['sef']);
       $ilkontrol=strtolower($ilget[0]);
    
    }  
}
else{
    $ilUrl =$urlArray[$urlArrayLength-1];
    $ilArray = explode("-", $ilUrl);
    $ilArrayLength =count($ilArray);
    $il =$ilArray[0];
    
    $city=strtoupper($il);
   $ilsor = $db->prepare("SELECT  * FROM iller where ilce=:ilce");
   $ilsor->execute(array(
      'ilce' => $city
   ));
   $ilcecek = $ilsor->fetch(PDO::FETCH_ASSOC);
   $ilisimilkparcasi=$urlArray[$urlArrayLength-2];
   $makale_isim = strtoupper($ilisimilkparcasi . "-" . $city);
   $sehir=strtoupper($ilisimilkparcasi);
   
   $flag=1;
   
}
$ilcekontrol=$city;
$ilsor = $db->prepare("SELECT  * FROM iller");
$ilsor->execute();
while ($ilkontrolcek = $ilsor->fetch(PDO::FETCH_ASSOC))
{
    
    if($ilkontrol==strtolower($ilkontrolcek['il'])||$ilcekontrol==$ilkontrolcek['ilce'])
    {?>
     <div class="services-area">
   <div class="container">
      <!-- Section-tittle -->
      <div class="row d-flex justify-content-center">
         <div class="col-lg-8">
            <div class="section-tittle text-center mb-80">
               <h2>

                  <?php
                  echo $city
                  ?> ÇEKİCİ</h2>
                <div class="hizmetortalama">
               <div class="callbutton">
                  <button class="buttoncall phoneCall" onclick="window.location='tel:0850 885 10 13';">
                     <span>0850 885 10 13</span>
                  </button>
               </div>
                 <div class="pricebutton">
              <button class="buttoncall" onclick="window.location='durum';">
                 <span>Fiyat Al</span>
              </button>
                 </div>
                </div>
             
                 
            </div>
         </div>
      </div>
   </div>
</div>

<div align="center" class="hizmet-image">
   <img src="assets/car_service.jpg" alt="oto çekici">
</div>
<!-- Slider Area End-->
<div align="center" class="hizmet-yardim">
   <h2>Yolda Kalırsan Yapman Gerekenler</h2>
   <div align="center" class="hizmetyardimortalama">
      <div class="yardim"><img src="assets/img/atention.svg" alt="">
         <p> Olası risklere karşı önlemini al.</p>
      </div>
      <div class="yardim"><img class="image2" src="assets/img/atention-button.svg" alt="">
         <p>Çekici çağır butonuna tıkla , konum bildir.</p>
      </div>
      <div class="yardim"><img src="assets/img/tom.svg" alt="">
         <p>Çekicilerimiz en kısa sürede yardımınıza gelsin.</p>
      </div>

   </div>
</div>

<div class="container">
   <!-- Section Tittle -->
   <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
         <div class="section-tittle text-center">
            <h2>Sizin İçin Neler Yapabiliriz ?</h2>
         </div>
      </div>
   </div>
   <!-- Section caption -->
   <div class="row">
      <?php while ($serviscek = $servissor->fetch(PDO::FETCH_ASSOC)) { ?>
         <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="servicess-caption text-center mb-30">
               <div class="service-iconn">
                  <span class="<?php echo $serviscek['servis_icon'] ?>"></span>
               </div>
               <div class="service-cap">
                  <h4><a href="#"><?php echo $serviscek['servis_ad'] ?></a></h4>
                  <p><?php echo $serviscek['servis_detay'] ?></p>
               </div>
            </div>
         </div>
      <?php } ?>
   </div>
</div>



<!-- Start Sample Area -->
<section class="makaledetay">
   
   <?php 
  
         $makalesor=$db->prepare("SELECT * FROM makaleler where lower(makale_isim)=:isim and makale_durum=:durum");
         $makalesor->execute(array(
            'isim'=>strtoupper($makale_isim),
            'durum'=>1
         ));
         $makalecek=$makalesor->fetch(PDO::FETCH_ASSOC);
    ?>
   <div class="container box_1170">
      <h3 class="makale_baslik"><?php echo $makalecek['makale_baslik']?></h3>
      
      <p class="makale_icerik">
         <?php echo $makalecek['makale_icerik']?>
      </p>
      
   </div>
</section>


      <div class="comment col-lg-8">
         <form action="nedmin/netting/islem.php" method="POST">


            <label>Ad Soyad</label>
            <input class="form-control" type="text" placeholder="Adınızı Giriniz..." maxlength="50" name="yorum_isim" required="">
            
            <label>Yorum</label>
            <textarea class="form-control" name="yorum_detay" placeholder="Yorumu  Giriniz..." required="" maxlength="500" type="text"> </textarea>
            
            
             <div class="rateyo" id= "rating"
             data-rateyo-rating="4"
             data-rateyo-num-stars="5"
             data-rateyo-score="3">
             </div>

             <input type="hidden" name="rating">
            <span>(<?php echo $count; ?>)</span><br>
             <span>Ortalama :<?php echo round($ratingResult,2); ?></span>
            
            <button type="submit" class="button button-contactForm boxed-btn" id="commentbtn" name="yorumkaydet">Yorum Yap</button>
             
            
            
           
            
         </form>

      </div>
<!-- End Sample Area -->

<!-- Start Button -->

<!-- End Button -->

<!-- Start Align Area -->
<div class="whole-wrap">
   <div class="available-app-area cities">
      <!-- Say Something End -->

      <h1>Hizmet Verdiğimiz İlçeler</h1>
      <ul>
         <?php
         if($flag==0){
         $ilsor = $db->prepare("SELECT *FROM iller where il=:il");
         $ilsor->execute(array(
            'il' =>$city
         ));
         while ($ilcek = $ilsor->fetch(PDO::FETCH_ASSOC)) { ?>

            <li><a href="/<?php echo strtolower($city);?>/<?=seo($ilcek['ilce']."-oto-cekici")?>"><?php echo $ilcek['ilce'] ?></a></li>
         <?php } 
             
         }else{
         $ilsor = $db->prepare("SELECT *FROM iller where il=:il");
         $ilsor->execute(array(
            'il' =>$sehir
         ));
        
         while ($ilcek = $ilsor->fetch(PDO::FETCH_ASSOC)) { ?>
            
            <li><a href="/<?php echo strtolower($sehir);?>/<?=seo($ilcek['ilce']."-oto-cekici")?>"><?php echo $ilcek['ilce'] ?></a></li>
         <?php }
         }?>
      </ul>

   </div>
</div>
<!-- End Align Area -->
<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
          
        });
       
    });

</script>
<?php require_once 'includeFolders/footer.php' ?>

</body>

</html>   
 <?php }
 
}

?>
<!-- Slider Area Start-->

