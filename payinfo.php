<!DOCTYPE HTML>
<html class="no-js" lang="TR">

<?php require_once 'includeFolders/header.php';

error_reporting(0) ?>
<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <h2>Kişisel Bilgiler</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

        <div class="person_section">
            <form id="loginform" action="nedmin/netting/islem.php" method="POST" class="form-horizontal">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="musteri_isim" value="" placeholder="İsim Soyisim" required="">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input id="login-tel" type="tel" class="form-control" name="musteri_tel" placeholder="Telefon no" required="">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i></i></span>
                        <input type="text" class="form-control" name="tutar" disabled="" value="<?php echo $_POST['price']; ?> TL" required="">
                        <input type="hidden" name="musteri_fiyat" value="<?php echo $_POST['price']; ?>">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i></i></span>
                        <input type="text" class="form-control" name="konumbir" disabled="" value="<?php echo $_POST["origin"]; ?>" placeholder="Nerden" required="">
                        <input type="hidden" name="musteri_bulundugukonum" value="<?php echo $_POST['origin']; ?>">

                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i></i></span>
                        <input type="text" class="form-control" name="konumiki" disabled="" value="<?php echo $_POST["destination"]; ?>" placeholder="Nereye" required="">
                        <input type="hidden" name="musteri_gidecegikonum" value="<?php echo $_POST['destination']; ?>">

                    </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i></i></span>
                        <input type="text" class="form-control" name="odemetipi" disabled="" value="<?php echo $_POST['price-type'];?>"  required="">
                        <input type="hidden" name="musteri_odemeturu" value="<?php echo $_POST['price-type'];?>" >
                     

                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i></i></span>
                        <input type="text" class="form-control" name="hizmet" disabled="" value="Oto Çekici" placeholder="Aldığınız Hizmet" required="">
                        <input type="hidden" name="musteri_hizmet" value="Oto Cekici">
                        <input type="hidden" name="musteri_id" value="<?php echo uniqid(); ?>">

                    </div>
                    
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" name="musterikaydet" id="btn-login" class="btn btn-primary">Devam Et</button>
                            <button onclick="window.location.href='anasayfa'" id="btn-login" type="submit" href="anasayfa" class="btn btn-danger">Vazgeç </button>
                        </div>
                    </div>

            </form>
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