<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$servissor=$db->prepare("SELECT * FROM servis order by servis_sira ASC");
$servissor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Servis Listeleme <small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="servis-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Servis Ad</th>
                  <th style="width: 250px;">Servis Detay</th>
                  <th>Servis Sira</th>
                  <th>Servis İcon</th>
                  <th>Servis Durum</th>
                  
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($serviscek=$servissor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $serviscek['servis_ad'] ?></td>
                 <td style="width: 250px;"><?php echo $serviscek['servis_detay'] ?></td>
                 <td><?php echo $serviscek['servis_sira'] ?></td>
                 <td width="20"><?php echo $serviscek['servis_icon'] ?></td>
                 <td><center><?php 

                  if ($serviscek['servis_durum']==1) {?>

                  <button class="btn btn-success btn-xs">Aktif</button>


                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasif</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="servis-duzenle.php?servis_id=<?php echo $serviscek['servis_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
            <td><center><a href="../netting/islem.php?servis_id=<?php echo $serviscek['servis_id']; ?>&servissil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
