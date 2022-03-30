<!doctype html>
<html class="no-js" lang="TR">
  <?php require_once 'includeFolders/header.php';
  $galerisor=$db->prepare("SELECT * FROM galeri where galeri_durum=:durum");
  $galerisor->execute(array(
      'durum'=>1
  ));

  ?>

    <main>

        <!-- Services Area Start -->
        <section class="service-area services-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>Galeri</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <?php while($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)){?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </section>
        <!-- Services Area End -->
   
        <?php require_once 'includeFolders/warning.php';?>
            
    </main>
  <?php require_once 'includeFolders/footer.php';?>
        
    </body>
</html>