<!doctype html>
<html class="no-js" lang="zxx">

<?php require_once 'includeFolders/header.php'; 
error_reporting(0);
?>
<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <h2>İletişim Sayfası</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

    <?php 
            if(isset($_GET)){

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;"> Mail Gönderildi...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">Mail Gönderilemedi !!!</b>

              <?php }
            }

              ?>

        <div class="row">

            <div class="col-lg-8">
                <form action="mailphp/mail.php" method="POST">


                    <label>İsim</label>
                    <input class="form-control" type="text" placeholder="Adınızı Giriniz..." maxlength="25" name="name" required="">


                    <label>Soyisim</label>
                    <input class="form-control" maxlength="25" placeholder="Soyadınızı Giriniz..." type="text" name="surname" required="">


                    <label>E-Mail</label>
                    <input class="form-control" placeholder="Email Giriniz..." type="email" name="email" required="">
                    <label>Telefon</label>
                    <input class="form-control" type="phone" placeholder="Tel No Giriniz..." name="pNumber" required="">
                    <label>Açıklama</label>
                    <textarea class="form-control" placeholder="Notunuzu Giriniz..." name="subject" maxlength="500" type="text"> </textarea>
                    <br>
                    <button type="submit" class="button button-contactForm boxed-btn" name="gonder">Gönder</button>
             
                </form>

            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?php echo $ayarcek['ayar_adres'] ?></h3>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><?php echo $ayarcek['ayar_tel'] ?></h3>

                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><?php echo $ayarcek['ayar_mail'] ?></h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<?php require_once 'includeFolders/footer.php'; ?>

</body>

</html>