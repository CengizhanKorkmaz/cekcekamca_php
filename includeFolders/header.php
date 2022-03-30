<?php
include 'nedmin/netting/baglan.php';
?>
<?php
header("Access-Control-Allow-Origin: *");
$ayarsor = $db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
    'id' => 0
));
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

$musterisor = $db->prepare("SELECT * FROM musteribilgi");
$musterisor->execute();
$mustericek = $musterisor->fetch(PDO::FETCH_ASSOC);
$servissor = $db->prepare("SELECT * FROM servis where servis_durum=:durum order by servis_sira ");
$servissor->execute(array(
    'durum' => 1
));

$ratingResult=0;
$yorumsor=$db->prepare("select * from yorumlar");
$yorumsor->execute();
while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)){
    $rating=$rating+$yorumcek['yorum_puan'];
    $count++;
}
$ratingResult=$rating/$count;



?>

<head>
    <base href="https://cekcekamca.com">
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=9k2YFNpP"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-190441303-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-190441303-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $ayarcek['ayar_title'] ?></title>
    <meta name="description" content="Oto Çekici ve Oto Kurtarıcı Çağırma, Çekici Fiyatları Öğrenme, Ücretleri Karşılaştır ve Çekici Bul.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ayarcek['ayar_logo'] ?>"><!-- sitenin en başındaki logo-->
    <!--site iconu-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAERxhL5DAHslqlOMv7VKd0apqAmT1sKv0&amp;libraries=places&amp;language=tr"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
   <!-- Google Tag Manager -->


    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "name": "Cekcekamca",
  "image": "assets/logo.png",
  "telephone":"08508851013",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "İstanbul",
    "addressRegion": "IST",
    "postalCode": "34000",
    "streetAddress": "vip plaza ekinler caddesi"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo $ratingResult; ?>",
    "reviewCount": "<?php echo $count; ?>"
  }
}
</script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4JKWQV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo $ayarcek['ayar_logo'];?>" alt="">
                    <!--gif-->
                </div>
            </div>
        </div>
    </div>
    
    
 <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="anasayfa" style="color: black;"><img class="logoedit" src="<?php echo $ayarcek['ayar_logo'] ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <?php

                                        $menusor = $db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 6");
                                        $menusor->execute(array(
                                            'durum' => 1
                                        ));
                                        while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <li><a href="<?php
                                                            if (!empty($menucek['menu_url'])) {
                                                                echo $menucek['menu_url'];
                                                            } else {
                                                                echo $menucek['menu_ad'];
                                                            } ?>">
                                                    <?php echo $menucek['menu_ad'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>