<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$musterisor=$db->prepare("SELECT * FROM musteribilgi");
$musterisor->execute();


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ödemeler<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>


          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Müşter Id</th>
                  <th>İsim</th>
                  <th>Tel</th>
                  <th>Fiyat</th>
                  <th>BulunduguKonum</th>
                  <th>GideceğiKonum</th>
                  <th>Ödeme Tipi</th>
                  <th>Alınan Hizmet</th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($mustericek=$musterisor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                 <td><?php echo $mustericek['musteri_id']?></td>
                 <td><?php echo $mustericek['musteri_isim'] ?></td>
                 <td><?php echo $mustericek['musteri_tel']?></td>
                 <td><?php echo $mustericek['musteri_fiyat']." TL"?></td>
                 <td><?php echo substr($mustericek['musteri_bulundugukonum'] , 0, 55)?></td>
                 <td><?php echo substr($mustericek['musteri_gidecegikonum'] , 0, 55)?></td>
                 <td><?php echo $mustericek['musteri_odemeturu'] ?></td>
                 <td><?php echo $mustericek['musteri_hizmet'] ?></td>

                </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
