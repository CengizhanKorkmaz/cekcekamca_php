<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<?php require_once 'includeFolders/header.php'; ?>

<?php require_once 'includeFolders/customcss.php'; 
  ?>


<main>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Çekçekamca Hizmet Bilgileri</strong></h2>
                    <p>Lütfen Bilgilerinizi Doğru Giriniz</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="smsonay.php" method="POST">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Konum Bilgileri</strong></li>
                                    <li id="personal"><strong>Araç Durumu</strong></li>
                                    <li id="payment"><strong>Araç Tipi</strong></li>
                                    <li id="payment"><strong>Köprü Feribot </strong></li>
                                    <li id="payment"><strong>Taşıma Kaskosu</strong></li>
                                    <li id="payment"><strong>Kişisel Bilgiler</strong></li>
                                  
                                    
                              
                                </ul> <!-- fieldsets -->
                                <fieldset id="bir">
                                    <div class="form-card">
                                        <h2 class="fs-title">Konum Bilgilerini Giriniz</h2>
                                        <input class="form-control location" id="from_places" autocomplete="of" placeholder="Bulunduğunuz Yeri Girin ..." />
                                        <input id="origin" name="origin" required="" type="hidden" />
                                            
                                        <input id="time" name="time" required="" type="hidden" />
                                        <input id="km" name="km" required="" type="hidden" />
                                        <input id="price" name="price" required="" type="hidden" />
                                        


                                        <input class="form-control location" id="to_places" placeholder="Gitmek İstediğiniz Yeri Girin ..." />
                                        <input id="destination" name="destination" required="" type="hidden" />
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Devam Et" />
                                </fieldset>
                                <fieldset id="iki">
                                    <div class="form-card">
                                        <h2 class="fs-title">Aracınız Hareket Eder Durumuda Mı?</h2>
                                        <div class="carstatusform">
                                            <div class="form-check"> <input type="radio" name="car-status" value="100" class="form-check-input required_form_input" id="yesCheck"> <label for="yesCheck">Evet</label> </div>
                                            <div class="form-check"> <input type="radio" name="car-status" value="200" class="form-check-input required_form_input" id="noCheck"> <label for="noCheck">Hayır</label> </div>
                                        </div>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Geri Dön" /> <input type="button" name="next" class="next action-button" value="Devam Et" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Araç Tipi Seçiniz</h2>
                                        <div class="cartypeform">
                                            <div class="form-check"> <img src="assets/img/taxi.svg" class="img-fluid" alt=""><input type="radio" value="15" name="car-type" class="form-check-input required_form_input" required id="araba"> <label for="araba">Araba</label> <span class="circle"></span> </div>
                                            <div class="form-check"> <img src="assets/img/bus.svg" class="img-fluid" alt=""> <input type="radio" value="17" name="car-type" class="form-check-input required_form_input" id="minubus"> <label for="minubus">Minibüs</label> <span class="circle"></span> </div></input>
                                            <div class="form-check"> <img src="assets/img/truck.svg" class="img-fluid" alt=""><input type="radio" value="20" name="car-type" class="form-check-input required_form_input" id="kamyonet"> <label for="kamyonet">Kamyonet</label> <span class="circle"></span> </div></input>
                                        </div>
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Geri Dön" /> <input type="button" name="next" class="next action-button" value="Devam Et" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Köprü Feribot Kullanımı Olacak Mı?</h2>
                                        <div class="carbridgeform">
                                            <div class="form-check"> <input type="radio" name="car-bridge" value="0" class="form-check-input required_form_input" id="nobridge"> <label for="nobridge">Hayır</label> </div>
                                            <div class="form-check"> <input type="radio" name="car-bridge" value="78" class="form-check-input required_form_input" id="yavuzsultankoprusu"> <label for="yavuzsultankoprusu">Yavuz Sultan Köprüsü</label> </div>
                                            <div class="form-check"> <input type="radio" name="car-bridge" value="246" class="form-check-input required_form_input" id="osmangazikoprusu"> <label for="osmangazikoprusu">Osman Gazi Köprüsü</label> </div>
                                            <div class="form-check"> <input type="radio" name="car-bridge" value="314" class="form-check-input required_form_input" id="twobridge"> <label for="twobridge">Her İki Köprü</label> </div>
                                            <div class="form-check"> <input type="radio" name="car-bridge" value="260" class="form-check-input required_form_input" id="feribot"> <label for="feribot">Feribot</label> </div>

                                        </div>

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Geri Dön" />
                                    <input type="button" name="next" class="next action-button" value="Devam Et " />

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Araç Taşıma Kaskosu İster Misiniz?</h2>
                                        <div class="carkaskoform">
                                            <div class="form-check"> <input type="radio" name="car-kasko" value="100" class="form-check-input required_form_input" id="evet"> <label for="evet">Evet(Ekstra Ücretli)</label> </div>
                                            <div class="form-check"> <input type="radio" name="car-kasko" value="200" class="form-check-input required_form_input" id="hayir"> <label for="hayir">Hayır</label> </div>

                                        </div>

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Geri Dön" />
                                    <input type="button" name="next" class="next action-button" value="Devam Et" />

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Kişisel Bilgiler</h2>
                                        <div class="personalform">
                                            <input id="login-username" type="text" class="form-control"  name="musteri_isim" value="" required="" placeholder="İsim Soyisim">
                                            <input id="login-tel" type="tel" class="form-control" name="musteri_tel" required="" placeholder="Telefon no">
                                        </div>

                                    </div>
                                     

                                    <input type="button" name="previous" class="previous action-button-previous" value="Geri Dön" />
                                  <input type="submit" name="next" class="next action-button" value="Devam Et" />
                                    
                                    
                                </fieldset>
                                
                                
                                
                               
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includeFolders/footer.php'; ?>



</body>

</html>