<?php 

include 'header.php'; 

$ilsor=$db->prepare("SELECT DISTINCT il FROM iller ");
$ilsor->execute();
$ilcesor=$db->prepare("SELECT * from iller where  CONCAT(il, '-', ilce) not in (SELECT makale_isim from makaleler where makale_isim=CONCAT(iller.il, '-', iller.ilce))");
$ilcesor->execute();



?>


<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Makale Ekleme<small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="../netting/islem.php" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">


            
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl Adı<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <select style="width:200px ; height: 35px;" name="il" id="il-select">
                <option value="">İl Seç</option>
                <?php
                while ($ilcek = $ilsor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $ilcek['il']; ?>" slug="<?php echo $ilcek['il']; ?>"><?php echo $ilcek["il"];?></option>
                <?php }  ?>

                </select>
                
                
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe Adı<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <select style="width:200px ; height: 35px;" name="ilce" id="ilce-select">
                <option value="">İlce Seç</option>
                <?php
                while ($ilcecek = $ilcesor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $ilcecek['ilce']; ?>" il-slug="<?php echo $ilcecek['il']; ?>"><?php echo $ilcecek["ilce"];?></option>
                <?php }  ?>

                </select>
                
                
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Makale Baslik<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="makale_baslik" value="" required="required" placeholder="Makale Başlık Giriniz"class="form-control col-md-7 col-xs-12">
                </div>
              </div>

            
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Makale  <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  class="ckeditor" id="editor1" name="makale_icerik"></textarea>
                </div>
              </div>

              <script type="text/javascript">

               CKEDITOR.replace( 'editor1',

               {

                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                forcePasteAsPlainText: true

              } 

              );

            </script>

            <!-- Ck Editör Bitiş -->
          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Makale Durum<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <select id="heard" class="form-control" name="makale_durum" required>




                  <option value="1">Aktif</option>



                  <option value="0" >Pasif</option>
                 


                 </select>
               </div>
             </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="makalekaydet" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form>



          </div>
        </div>
      </div>
    </div>



    <hr>
    <hr>
    <hr>



  </div>
</div>
<!-- /page <content -->

<?php include 'footer.php'; ?>
