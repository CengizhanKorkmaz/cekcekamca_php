<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$makalesor=$db->prepare("SELECT * FROM makaleler");
$makalesor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Makale Listeleme <small>

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
              <a href="makale-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"  cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Makale İsim</th>
                  <th>Makale Baslik</th>
                  <th></th>
                  <th></th>
                  <th></th>

                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                while($makalecek=$makalesor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                 <td><?php echo $say ?></td>
                 <td><?php echo $makalecek['makale_isim'] ?></td>
                 <td><?php echo $makalecek['makale_baslik'] ?></td>
                 <td><center><?php 

                  if ($makalecek['makale_durum']==1) {?>

                  <button class="btn btn-success btn-xs">Aktif</button>


                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasif</button>


                <?php } ?>
              </center>


            </td>
                 <td><center><a href="makale-duzenle.php?makale_id=<?php echo $makalecek['makale_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                 <td><center><a href="../netting/islem.php?makale_id=<?php echo $makalecek['makale_id']; ?>&makalesil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                 </tr>



          <?php  } ?>


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
