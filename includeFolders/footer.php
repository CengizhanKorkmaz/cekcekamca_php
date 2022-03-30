<footer>
    <div class="harita">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3006.9488618565315!2d29.09411394639662!3d41.09197887900061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cacbc9cb73af4b%3A0x5bed451e62bab579!2zw4dlayDDh2VrIEFtY2EgKCBPdG8gw6dla2ljaSAtIE90byBrdXJ0YXLEsWPEsSAtIDcvMjQgWW9sIFlhcmTEsW0gKQ!5e0!3m2!1str!2str!4v1616163015771!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>
    <!-- Footer Start-->
    <div class="footer-main">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row  justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="anasayfa"><span style="color: black;"><img class="logofooteredit" src="<?php echo $ayarcek['ayar_logo'];?> " alt=""></span></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">
                                    <b>Konumunu bildir.</b><br>
                                    En iyi fiyatını gör.<br>
                                    Kurtarıcın yanında.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Hızlı Erişim</h4>
                                <ul>
                                    <?php

                                    $menusor = $db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 5");
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Destek</h4>
                                <ul>
                                    <li><a href="hakkimizda.php">Yardım</a></li>

                                </ul>
                                <ul>
                                    <li><a href="isortak.php">İş Ortağımız Ol</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Ödeme</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>Kredikartı veya nakit ile ödeme yapabilirsiniz. </p>
                                    <img src="assets/img/logo/payment-logo.png" alt="ödeme,kredikartı,nakit">
                                </div>
                                <!-- Form -->

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copy-Right -->
                <div class="row align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right">
                            <p>

                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> Tüm Hakları | www.cekcekamca.com Saklıdır.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->

</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>