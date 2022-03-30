 <!-- Services Area Start -->
 <section class="service-area sky-blue section-padding2">
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
                <?php while($serviscek=$servissor->fetch(PDO::FETCH_ASSOC)){?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="<?php echo $serviscek['servis_icon']?>"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#"><?php echo $serviscek['servis_ad']?></a></h4>
                            <p><?php echo $serviscek['servis_detay']?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>