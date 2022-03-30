<!DOCTYPE HTML>
<html class="no-js" lang="zxx">

<?php require_once 'includeFolders/header.php'; ?>


<main>
    <section>
        <div class="car-container">
            


            <div class="car-section">
                <form action="payinfo.php" method="POST">
                    
                    <h2 id="dene" class="statustitle">Nerede Kaldın?</h2>
                    <div id="distance_form">
                        <div class="form-group">
                            <input class="form-control location" id="from_places" autocomplete="of" placeholder="Bulunduğunuz Yeri Girin ..." />
                            <input id="origin" name="origin" required="" type="hidden" />
                            
                        </div>
                        <div class="form-group">
                            <input class="form-control location" id="to_places" placeholder="Gitmek İstediğiniz Yeri Girin ..." />
                            <input id="destination" name="destination" required="" type="hidden" />
                        </div>
                    </div>

                    <h2 class="statustitle">Aracınız hareket eder durumda mı?</h2>
                    <div class="carstatusform">
                        <div class="d-flex">
                  
                            <div class="form-check"> <input type="radio" name="car-status" value="100" class="form-check-input required_form_input" id="yesCheck"> <label for="yesCheck">Evet</label>  </div>
                            <div class="form-check"> <input type="radio" name="car-status" value="200" class="form-check-input required_form_input" id="noCheck"> <label for="noCheck">Hayır</label>  </div>
                        </div>
                    </div>
                    
                    
                    
                    <h2 class="statustitle">Araç tipini seçin?</h2>
                    <div id="cartypeform">
                        <div class="form-check"> <input type="radio" value="15" name="car-type" class="form-check-input required_form_input" required id="araba"> <img src="assets/img/taxi.svg" class="img-fluid" alt=""> <label>Araba</label> <span class="circle"></span> </div>
                        <div class="form-check"> <input type="radio" value="17" name="car-type" class="form-check-input required_form_input" id="minubus"> <img src="assets/img/bus.svg" class="img-fluid" alt=""> <label>Minibüs</label> <span class="circle"></span> </div></input>
                        <div class="form-check"> <input type="radio" value="20" name="car-type" class="form-check-input required_form_input" id="kamyonet"> <img src="assets/img/truck.svg" class="img-fluid" alt=""> <label>Kamyonet</label> <span class="circle"></span> </div></input>


                        <input type="button" id="pricecalculate" value="Fiyat Göster" class="button button-contactForm boxed-btn">
                        <span class="priceSpan" id="priceSpan">Fiyat : <span class="pricetext" id="pricetext">0</span> </span>
                       
                       
                    </div>
                   

                </form>

            </div>
        </div>
    </section>
</main>
<?php require_once 'includeFolders/footer.php'; ?>
<?php require_once 'includeFolders/priceScript.php'; ?>

</body>

</html>