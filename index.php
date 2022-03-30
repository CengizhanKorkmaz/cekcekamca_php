<!doctype html>
<html class="no-js" lang="TR">
<?php require_once 'includeFolders/header.php';
require_once 'fonksiyonlar.php';
$slidersor = $db->prepare("SELECT * FROM slider where slider_durum=:durum order by slider_sira ASC LIMIT 1");
$slidersor->execute(array(
    'durum' => 1
));
$slidercek = $slidersor->fetch(PDO::FETCH_ASSOC);

?>
<main>
    
    <!-- Slider Area Start-->
    
    <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    
                                    <h1 data-animation="fadeInUp" data-delay=".6s"><?php echo $slidercek['slider_ad'];?></h1>
                                    <p data-animation="fadeInUp" data-delay=".8s"><?php echo $slidercek['slider_detay'];?></p>
                                    <!-- Slider btn -->
                                   <div class="hizmetbutton">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="durum" class="btn radius-btn">Fiyat Al</a>
                                        <!-- Video Btn -->
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="<?php echo $slidercek['slider_resimyol'];?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
               
            </div>
        </div>
    <!-- Slider Area End -->
    <!-- Best Features Start -->
    <section class="best-features-area section-padd4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-10">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="section-tittle">
                                <h2>Yolda Kalırsan Ne Yapmalasın !</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                  <?php require_once 'includeFolders/notification.php'?>    
                </div>
            </div>
        </div>
        <!-- Shpe -->
        <div class="features-shpae d-none d-lg-block">
            <img class="slider2edit" src="assets/img/shape/slider2.jpg" alt="">
        </div>
    </section>
    <!-- Best Features End -->
    <!-- Services Area Start -->
    <?php require_once 'includeFolders/service.php'?>

    <?php require_once 'includeFolders/warning.php'?>
    <!-- Available App End-->
    <!-- Say Something Start -->
    <div class="say-something-aera pt-90 pb-90 fix">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                    <div class="say-something-cap">
                        <h2>Bizimle Çalışmak İster Misiniz?</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="say-btn">
                        <a href="isortak.php" class="btn radius-btn">İş Ortağımız Ol</a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <?php 
    $ilsor=$db->prepare("SELECT DISTINCT plaka,il FROM iller ");
    $ilsor->execute();
    
    ?>
 <div class="available-app-area cities"><!-- Say Something End -->
    <h1 class="cities_title">Hizmet Verdiğimiz İller</h1>
        <ul class="cities_ul" >
            <?php while($ilcek=$ilsor->fetch(PDO::FETCH_ASSOC)){
            try{?>
            <li><a href="<?=seo($ilcek['il']."-oto-cekici")?>"><?php echo $ilcek['il'] ?></a></li>
            
          <?php }catch(Exception $e){
                 echo $e->getMessage();
          }?>
            <?php }?>
        </ul>

 </div>
</main>

<?php require_once 'includeFolders/footer.php' ?>


</body>

</html>