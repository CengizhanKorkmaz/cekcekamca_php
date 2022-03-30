<!DOCTYPE HTML>
<html class="no-js" lang="TR">

<?php require_once 'includeFolders/header.php'; 
$musterisor = $db->prepare("SELECT * FROM musteribilgi where musteri_id=:musteri_id");
$musterisor->execute(array(
    'musteri_id'=>$_GET['id']));
$mustericek = $musterisor->fetch(PDO::FETCH_ASSOC);

?>

<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    
                    <h2> Ödeme Sayfası</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
    <div style="width: 100%;margin: 0 auto;display: table;">
<?php

if($mustericek['musteri_odemeturu']=="Nakit Ödeme"){


 

   function SMSgonderHttpGET($mesaj,$numara){

    
    $password = urlencode("200400"); //


    $url= "https://api.netgsm.com.tr/sms/send/get/?usercode=8503467815&password=$password&gsmno=$numara&message=$mesaj&msgheader=8503467815";
   
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $http_response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if($http_code != 200){
      echo "$http_code $http_response\n";
      return false;
    }
    $balanceInfo = $http_response;
    echo "MesajID : $balanceInfo";
    return $balanceInfo;
}


    for($i=0;$i<2;$i++){
        if($i==0){
            $mesaj ="Merhaba {$mustericek['musteri_isim']} yolda kaldığınız için çok üzgünüz :( ama merak etmeyin biz sizin için buradayız. Müşteri hizmetleri yetkilimiz birazdan sizinle iletişime geçecek ve yardımcı olacaktır. Çekiciniz en kısa sürede size yönlendirilecek ve  güvenle aracınızı en yakın servise çekecektir. 7 gün 24 saat  Çek çek amca ile daima  sizin yanınızda. Bizi tercih ettiğiniz için teşekkür eder iyi günler dileriz Çekici numarası :05364200202"; 
            SMSgonderHttpGET(rawurlencode($mesaj),$mustericek["musteri_tel"]);
        }
        else{
            $mesaj="{$mustericek['musteri_isim']} adlı kullancı {$mustericek['musteri_bulundugukonum']} konumunda kalmıştır. {$mustericek['musteri_gidecegikonum']} konumuna gidecektir.Alınacak tutar :  {$mustericek['musteri_fiyat']} tl\'dir. Müşteri numarası : {$mustericek['musteri_tel']}";
            SMSgonderHttpGET(rawurlencode($mesaj),'05522567028');
        }
    }

    echo "<script type='text/javascript'>window.top.location='https://cekcekamca.com/odeme_basarili.php';</script>";
    }

        
		## 1. ADIM için örnek kodlar ##

		####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
		#
		## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
		$merchant_id 	= '221525';
		$merchant_key 	= '29dz1yZPY9QabUNx';
		$merchant_salt	= 'ec7K7e2Bs3g8tkkP';
	    
	   
		

		## Müşterinizin sitenizde kayıtlı veya form vasıtasıyla aldığınız eposta adresi
		$email = "info@cekcekamca.com";
		#
		## Tahsil edilecek tutar.
		$payment_amount	=$mustericek['musteri_fiyat']*100; //9.99 için 9.99 * 100 = 999 gönderilmelidir.
		#
		#
		$sayi1 = rand(1000, 9999);
		$sayi2 = rand(1000, 9999);
		$sayi3 = rand(1000, 9999);
		$sayi4 = rand(10, 99);

		$rasgelesayi = "21" . $sayi1 . $sayi2 . $sayi3 . $sayi4;
		## Sipariş numarası: Her işlemde benzersiz olmalıdır!! Bu bilgi bildirim sayfanıza yapılacak bildirimde geri gönderilir.
		$merchant_oid =  $rasgelesayi;
		#
		$gidecegi_konum=$mustericek['musteri_gidecegikonum'];
		## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız ad ve soyad bilgisi
		$user_name = $mustericek['musteri_isim'];
		#
		## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız adres bilgisi
		$user_address = $mustericek['musteri_bulundugukonum'];
		#
		## Müşterinizin sitenizde kayıtlı veya form aracılığıyla aldığınız telefon bilgisi
		$user_phone = $mustericek['musteri_tel'];
		#
		## Başarılı ödeme sonrası müşterinizin yönlendirileceği sayfa
		## !!! Bu sayfa siparişi onaylayacağınız sayfa değildir! Yalnızca müşterinizi bilgilendireceğiniz sayfadır!
		## !!! Siparişi onaylayacağız sayfa "Bildirim URL" sayfasıdır (Bakınız: 2.ADIM Klasörü).
		$merchant_ok_url = "https://www.cekcekamca.com/odeme_basarili.php";
		#
		## Ödeme sürecinde beklenmedik bir hata oluşması durumunda müşterinizin yönlendirileceği sayfa
		## !!! Bu sayfa siparişi iptal edeceğiniz sayfa değildir! Yalnızca müşterinizi bilgilendireceğiniz sayfadır!
		## !!! Siparişi iptal edeceğiniz sayfa "Bildirim URL" sayfasıdır (Bakınız: 2.ADIM Klasörü).
		$merchant_fail_url = "https://www.cekcekamca.com/odeme_hata.php";
		#
		## Müşterinin sepet/sipariş içeriği
		$user_basket = base64_encode(json_encode(array(
			array($mustericek['musteri_hizmet'], $mustericek['musteri_fiyat'], 1)  // 3. ürün (Ürün Ad - Birim Fiyat - Adet )
		)));
		#
		/* ÖRNEK $user_basket oluşturma - Ürün adedine göre array'leri çoğaltabilirsiniz
		$user_basket = base64_encode(json_encode(array(
		array("Örnek ürün 1", "18.00", 1), // 1. ürün (Ürün Ad - Birim Fiyat - Adet )
		array("Örnek ürün 2", "33.25", 2), // 2. ürün (Ürün Ad - Birim Fiyat - Adet )
		array("Örnek ürün 3", "45.42", 1)  // 3. ürün (Ürün Ad - Birim Fiyat - Adet )
		)));
		*/
		############################################################################################

		## Kullanıcının IP adresi
		if (isset($_SERVER["HTTP_CLIENT_IP"])) {
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		} elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		} else {
			$ip = $_SERVER["REMOTE_ADDR"];
		}

		## !!! Eğer bu örnek kodu sunucuda değil local makinanızda çalıştırıyorsanız
		## buraya dış ip adresinizi (https://www.whatismyip.com/) yazmalısınız. Aksi halde geçersiz paytr_token hatası alırsınız.
		$user_ip = $ip;
		##

		## İşlem zaman aşımı süresi - dakika cinsinden
		$timeout_limit = "30";

		## Hata mesajlarının ekrana basılması için entegrasyon ve test sürecinde 1 olarak bırakın. Daha sonra 0 yapabilirsiniz.
		$debug_on = 0;

		## Mağaza canlı modda iken test işlem yapmak için 1 olarak gönderilebilir.
		$test_mode = 0;

		$no_installment	= 0; // Taksit yapılmasını istemiyorsanız, sadece tek çekim sunacaksanız 1 yapın

		## Sayfada görüntülenecek taksit adedini sınırlamak istiyorsanız uygun şekilde değiştirin.
		## Sıfır (0) gönderilmesi durumunda yürürlükteki en fazla izin verilen taksit geçerli olur.
		$max_installment = 0;

		$currency = "TL";

		####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
		$hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $user_basket . $no_installment . $max_installment . $currency . $test_mode;
		$paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $merchant_salt, $merchant_key, true));
		$post_vals = array(
			'merchant_id' => $merchant_id,
			'user_ip' => $user_ip,
			'merchant_oid' => $merchant_oid,
			'email' => $email,
			'payment_amount' => $payment_amount,
			'paytr_token' => $paytr_token,
			'user_basket' => $user_basket,
			'debug_on' => $debug_on,
			'no_installment' => $no_installment,
			'max_installment' => $max_installment,
			'user_name' => $user_name,
			'user_address' => $user_address,
			'user_phone' => $user_phone,
			'merchant_ok_url' => $merchant_ok_url,
			'merchant_fail_url' => $merchant_fail_url,
			'timeout_limit' => $timeout_limit,
			'currency' => $currency,
            'test_mode' => $test_mode
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);

		// XXX: DİKKAT: lokal makinanızda "SSL certificate problem: unable to get local issuer certificate" uyarısı alırsanız eğer
		// aşağıdaki kodu açıp deneyebilirsiniz. ANCAK, güvenlik nedeniyle sunucunuzda (gerçek ortamınızda) bu kodun kapalı kalması çok önemlidir!
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$result = @curl_exec($ch);

		if (curl_errno($ch))
			die("PAYTR IFRAME connection error. err:" . curl_error($ch));

		curl_close($ch);

		$result = json_decode($result, 1);

		if ($result['status'] == 'success')
		{
		    $token = $result['token'];
		}
			
		else
			die("PAYTR IFRAME failed. reason:" . $result['reason']);
		#########################################################################
        
	    ?>

		<!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
		<script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
		<iframe src="https://www.paytr.com/odeme/guvenli/<?php echo $token; ?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
		<script>
			iFrameResize({}, '#paytriframe');
		</script>
		<!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->

	</div>

    </div>
</section>
<!-- ================ contact section end ================= -->

<?php require_once 'includeFolders/footer.php'; ?>

</body>

</html>