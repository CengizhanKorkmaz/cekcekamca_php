<?php
ob_start();
session_start();
include '../netting/baglan.php';
error_reporting(0);

//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

  Header("Location:login.php?durum=izinsiz");
  exit;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cekcekamca Script </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  <!-- Dropzone.js -->

  <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">



  <!-- Dropzone.js -->

  <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
  <!-- Ck Editör -->
 
    <script src="ckeditor/ckeditor.js" charset="utf-8"></script>
    <!--  <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>-->


  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  
</head>


<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color: black;">
      <div class="col-md-3 left_col" style="background: black;">
        <div class="left_col scroll-view" style="background-color:black;">
          <div class="navbar nav_title"  style="border: 0; background-color: black;">
            <a href="index.php" class="site_title"><span><?php echo $ayarcek['ayar_author']?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
           
            <div class="profile_info">
              <span>Hoşgeldin</span>
              <h2><?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad'] ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />
        <?php if($kullanicicek['kullanici_yetki']==5){?>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Site Ayarları</h3>
              <ul class="nav side-menu">

                <li><a href="index.php" style="color: orange;"><i class="fa fa-home"></i> Anasayfa </a></li>

                <li><a style="color: orange;"><i class="fa fa-cogs"></i> Site Ayarları <span class="fa fa-cogs" style="color: orange;"></span></a>
                  <ul class="nav child_menu" >
                    <li><a href="genel-ayar.php" style="color: orange;">Genel Ayarlar</a></li>
                    <li><a href="iletisim-ayarlar.php" style="color: orange;">İletişim Ayarlar</a></li>
                    <li><a href="api-ayarlar.php"style="color: orange;">Api Ayarlar</a></li>
                    <li><a href="sosyal-ayar.php"style="color: orange;">Sosyal Ayarlar</a></li>
                    <!--

                    Facebook
                    Twitter
                    Youtube
                    Google


                  -->
                  <li><a href="mail-ayar.php"style="color: orange;">Mail Ayarlar</a></li>

                     <!--

                   Smtp Host
                   Smtp User
                   Smtp Password
                   Smtp Port


                 -->


               </ul>
             </li>

             <li><a href="hakkimizda.php"style="color: orange;"><i class="fa fa-info"></i> Hakkımızda </a></li>

           
             <li><a href="kullanici.php"style="color: orange;"><i class="fa fa-user"></i> Kullanıcılar </a></li>

             <li><a href="odemeler.php"style="color: orange;"><i class="fa fa-user"></i> Müşteriler </a></li>

             <li><a href="menu.php"style="color: orange;"><i class="fa fa-list"></i> Menüler </a></li>
             <li><a href="servis.php"style="color: orange;"><i class="fa fa-server"></i> Servisler </a></li>
             <li><a href="makale.php"style="color: orange;"><i class="fa fa-server"></i> Makaleler </a></li>



             <li><a href="slider.php"style="color: orange;"><i class="fa fa-image"></i> Slider </a></li>





             

           </ul>
         </div>



       </div>
       <?php }else{?>
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Site Ayarları</h3>
              <ul class="nav side-menu">

             <li><a href="makale.php"style="color: orange;"><i class="fa fa-server"></i> Makaleler </a></li>
            </ul>
         </div>



       </div>
<?php }?>
       <!-- /sidebar menu -->

       <!-- /menu footer buttons -->
       <div class="sidebar-footer hidden-small" style="background-color: black;">
       
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>

  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"style="color: black;"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="../../<?php echo $ayarcek['ayar_logo'];?> " alt=""><?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad'] ?>
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Güvenli Çıkış</a></li>
            </ul>
          </li>
          </li>
        </ul>
      </nav>
    </div>
  </div>
        <!-- /top navigation -->