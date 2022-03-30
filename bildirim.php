<?php

## 2. ADIM için örnek kodlar ##

## ÖNEMLİ UYARILAR ##
## 1) Bu sayfaya oturum (SESSION) ile veri taşıyamazsınız. Çünkü bu sayfa müşterilerin yönlendirildiği bir sayfa değildir.
## 2) Entegrasyonun 1. ADIM'ında gönderdiğniz merchant_oid değeri bu sayfaya POST ile gelir. Bu değeri kullanarak
## veri tabanınızdan ilgili siparişi tespit edip onaylamalı veya iptal etmelisiniz.
## 3) Aynı sipariş için birden fazla bildirim ulaşabilir (Ağ bağlantı sorunları vb. nedeniyle). Bu nedenle öncelikle
## siparişin durumunu veri tabanınızdan kontrol edin, eğer onaylandıysa tekrar işlem yapmayın. Örneği aşağıda bulunmaktadır.

$post = $_POST;

####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
#
## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
$merchant_key 	= '29dz1yZPY9QabUNx';
$merchant_salt	= 'ec7K7e2Bs3g8tkkP';
###########################################################################

####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
#
## POST değerleri ile hash oluştur.
$hash = base64_encode(hash_hmac('sha256', $post['merchant_oid'] . $merchant_salt . $post['status'] . $post['payment_amount'], $merchant_key, true));

#
## Oluşturulan hash'i, paytr'dan gelen post içindeki hash ile karşılaştır (isteğin paytr'dan geldiğine ve değişmediğine emin olmak için)
## Bu işlemi yapmazsanız maddi zarara uğramanız olasıdır.
if ($hash != $post['hash'])
	die('PAYTR notification failed: bad hash');
###########################################################################

## BURADA YAPILMASI GEREKENLER
## 1) Siparişin durumunu $post['merchant_oid'] değerini kullanarak veri tabanınızdan sorgulayın.
## 2) Eğer sipariş zaten daha önceden onaylandıysa veya iptal edildiyse  echo "OK"; exit; yaparak sonlandırın.

/* Sipariş durum sorgulama örnek
 	   $durum = SQL
	   if($durum == "onay" || $durum == "iptal"){
			echo "OK";
			exit;
		}
	 */
if ($post['status'] == 'success') { ## Ödeme Onaylandı

$db=new PDO("mysql:host=localhost;dbname=cekcekam_cekcekamca;charset=utf8",'cekcekam_cekcekamca','2004Aa2004@');
$musterisor=$db->prepare("SELECT *FROM musteribilgi");
$musterisor->execute();
$mustericek=$musterisor->fetch(PDO::FETCH_ASSOC);
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
            $mesaj="{$mustericek['musteri_isim']} adlı kullancı {$mustericek['musteri_bulundugukonum']} konumunda kalmıştır. {$mustericek['musteri_gidecegikonum']} konumuna gidecektir.Alınan tutar :  {$mustericek['musteri_fiyat']} tl\'dir. Müşteri numarası : {$mustericek['musteri_tel']}";
            SMSgonderHttpGET(rawurlencode($mesaj),'05364200202');
        }
    }


    
} else { ## Ödemeye Onay Verilmedi

	## BURADA YAPILMASI GEREKENLER
	## 1) Siparişi iptal edin.
	## 2) Eğer ödemenin onaylanmama sebebini kayıt edecekseniz aşağıdaki değerleri kullanabilirsiniz.
	## $post['failed_reason_code'] - başarısız hata kodu
	## $post['failed_reason_msg'] - başarısız hata mesajı

}

## Bildirimin alındığını PayTR sistemine bildir.
echo "OK";
exit;
