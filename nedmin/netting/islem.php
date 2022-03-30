<?php
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyonlar.php';



if (isset($_POST['makalekaydet'])) {
	

	$makalekaydet=$db->prepare("INSERT INTO  makaleler SET
		makale_isim=:makale_isim,
		makale_baslik=:makale_baslik,
		makale_icerik=:makale_icerik,
		makale_durum=:makale_durum
		");
		
		if($_POST['ilce']==""){
			$makale_isim = strtoupper(seo($_POST['il']));
		}
		else{
			$makale_isim= strtoupper(seo($_POST['il']))."-".strtoupper(seo($_POST['ilce']));
		}
	$insert=$makalekaydet->execute(array(
		
		'makale_isim' =>$makale_isim,
		'makale_baslik'=>$_POST['makale_baslik'],
		'makale_icerik' => $_POST['makale_icerik'],
		'makale_durum'=>$_POST['makale_durum']
	));


	if ($insert) {

		header("Location:../production/makale.php?durum=ok");

	} else {
		header("Location:../production/makale.php?durum=no");
	}
	
}
if (isset($_POST['yorumkaydet'])){
   $yorumkaydet=$db->prepare("INSERT INTO yorumlar SET
   yorum_isim=:yorum_isim,
   yorum_detay=:yorum_detay,
   yorum_puan=:yorum_puan
   
   ");
   $insert=$yorumkaydet->execute(array(
    'yorum_isim'=>$_POST['yorum_isim'],
    'yorum_detay'=>$_POST['yorum_detay'],
    'yorum_puan'=>$_POST['rating']
    ));
    if($insert){
        echo "basarili";
        
    }
    else{
        echo "basarisiz";
    }
}
if (isset($_POST['makaleguncelle'])) {
	

	$makalekaydet=$db->prepare("UPDATE makaleler SET
		makale_isim=:makale_isim,
		makale_baslik=:makale_baslik,
		makale_icerik=:makale_icerik,
		makale_durum=:makale_durum
		WHERE makale_id={$_POST['makale_id']}");
		
		if($_POST['ilce']==""){
			$makale_isim = strtoupper(seo($_POST['il']));
		}
		else{
			$makale_isim= strtoupper(seo($_POST['il']))."-".strtoupper(seo($_POST['ilce']));
		}
	$insert=$makalekaydet->execute(array(
		
		'makale_isim' =>$makale_isim,
		'makale_baslik'=>$_POST['makale_baslik'],
		'makale_icerik' => $_POST['makale_icerik'],
		'makale_durum'=>$_POST['makale_durum']
	));


	if ($insert) {

		header("Location:../production/makale.php?durum=ok");

	} else {
		header("Location:../production/makale.php?durum=no");
	}
	
}
if ($_GET['makalesil']=="ok") {

	$sil=$db->prepare("DELETE from makaleler where makale_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['makale_id']
		));


	if ($kontrol) {


		header("location:../production/makale.php?sil=ok");


	} else {

		header("location:../production/makale.php?sil=no");

	}


}


if (isset($_POST['genelayarkaydet'])) {
	
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author']
		));


	if ($update) {

		header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		header("Location:../production/genel-ayar.php?durum=no");
	}
	
}
if (isset($_POST['musterikaydet'])) {
	$musterikaydet=$db->prepare("INSERT INTO musteribilgi SET
	    musteri_id=:id,
	    musteri_isim=:isim,
	    musteri_tel=:tel,
	    musteri_fiyat=:fiyat,
	    musteri_bulundugukonum=:bulundugukonum,
	    musteri_gidecegikonum=:gidecegikonum,
	    musteri_odemeturu=:odemeturu
	");
	$id=$_POST['musteri_id'];
	$insert=$musterikaydet->execute(array(
	    'id'=>$_POST['musteri_id'],
	    'isim'=>$_POST['musteri_isim'],
	    'tel'=>$_POST['musteri_tel'],
	    'fiyat'=>$_POST['musteri_fiyat'],
	    'bulundugukonum'=>$_POST['musteri_bulundugukonum'],
	    'gidecegikonum'=>$_POST['musteri_gidecegikonum'],
	    'odemeturu'=>$_POST['musteri_odemeturu']
    
	    ));
	    
    if ($insert) {

	header("Location:../../pay.php?id=$id");

	} else {

	header("Location:../../pay.php?durum=no");
	}
	
}


if (isset($_POST['iletisimayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai']
		));


	if ($update) {

		header("Location:../production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['apiayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		
		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_zopim=:ayar_zopim
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim']
		));


	if ($update) {

		header("Location:../production/api-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/api-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['kullanicikaydet'])) {

	
	echo $kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']); echo "<br>";
	echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); echo "<br>";

	echo $kullanici_passwordone=trim($_POST['kullanici_passwordone']); echo "<br>";
	echo $kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']); echo "<br>";



	if ($kullanici_passwordone==$kullanici_passwordtwo) {


		if (strlen($kullanici_passwordone)>=6) {


			

			


// Başlangıç

			$kullanicisor=$db->prepare("select * from kullanici where kullanici_mail=:mail");
			$kullanicisor->execute(array(
				'mail' => $kullanici_mail
			));

			//dönen satır sayısını belirtir
			$say=$kullanicisor->rowCount();



			if ($say==0) {

				//md5 fonksiyonu şifreyi md5 şifreli hale getirir.
				$password=md5($kullanici_passwordone);

				$kullanici_yetki=1;

			//Kullanıcı kayıt işlemi yapılıyor...
				$kullanicikaydet=$db->prepare("INSERT INTO kullanici SET
					kullanici_adsoyad=:kullanici_adsoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password,
					kullanici_yetki=:kullanici_yetki
					");
				$insert=$kullanicikaydet->execute(array(
					'kullanici_adsoyad' => $kullanici_adsoyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $password,
					'kullanici_yetki' => $kullanici_yetki
				));

				if ($insert) {


					header("Location:../../index.php?durum=loginbasarili");


				//Header("Location:../production/genel-ayarlar.php?durum=ok");

				} else {


					header("Location:../../register.php?durum=basarisiz");
				}

			} else {

				header("Location:../../register.php?durum=mukerrerkayit");



			}




		// Bitiş



		} else {


			header("Location:../../register.php?durum=eksiksifre");


		}



	} else {



		header("Location:../../register.php?durum=farklisifre");
	}
	


}




if (isset($_POST['sliderkaydet'])) {


	$uploads_dir = '../../assets/img/hero';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:slider_ad,
		slider_detay=:slider_detay,
		slider_sira=:slider_sira,
		slider_link=:slider_link,
		slider_resimyol=:slider_resimyol
		");
	$insert=$kaydet->execute(array(
		'slider_ad' => $_POST['slider_ad'],
		'slider_detay'=>$_POST['slider_detay'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_link' => $_POST['slider_link'],
		'slider_resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}




}





if (isset($_POST['sliderduzenle'])) {


	if($_FILES['slider_resimyol']["size"] > 0)  { 


		$uploads_dir = '../../assets/img/hero';
		@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
		@$name = $_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_detay=:detay,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'detay'=>$_POST['slider_detay'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'resimyol' => $refimgyol,
		));
		

		$slider_id=$_POST['slider_id'];

		if ($update) {

			$resimsilunlink=$_POST['slider_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}



	} else {

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_detay=:detay,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum		
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'detay'=> $_POST['slider_detay'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum']
		));

		$slider_id=$_POST['slider_id'];

		if ($update) {

			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../production/slider-duzenle.php?durum=no");
		}
	}

}


// Slider Düzenleme Bitiş

if ($_GET['slidersil']=="ok") {

	
	$sil=$db->prepare("DELETE FROM slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id' => $_GET['slider_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['slider_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}

}





if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password
		
	));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php");
		exit;



	} else {

		header("Location:../production/login.php?durum=no");
		exit;
	}
	

}


if (isset($_POST['genelayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author']
	));


	if ($update) {

		header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		header("Location:../production/genel-ayar.php?durum=no");
	}
	
}

if (isset($_POST['mailayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'smtphost' => $_POST['ayar_smtphost'],
		'smtpuser' => $_POST['ayar_smtpuser'],
		'smtppassword' => $_POST['ayar_smtppassword'],
		'smtpport' => $_POST['ayar_smtpport']
	));

	if ($update) {

		Header("Location:../production/mail-ayar.php?durum=ok");

	} else {

		Header("Location:../production/mail-ayar.php?durum=no");
	}

}


if (isset($_POST['iletisimayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai']
	));


	if ($update) {

		header("Location:../production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['apiayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		
		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_zopim=:ayar_zopim
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim']
	));


	if ($update) {

		header("Location:../production/api-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/api-ayarlar.php?durum=no");
	}
	
}
if(isset($_POST['sosyalayarkaydet']))
{
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube
	");
	 $update=$ayarkaydet->execute(array(
		 'ayar_facebook'=>$_POST['ayar_facebook'],
		 'ayar_twitter'=>$_POST['ayar_twitter'],
		 'ayar_google'=>$_POST['ayar_google'],
		 'ayar_youtube'=>$_POST['ayar_youtube']
	 ));
	 if ($update) {

		header("Location:../production/sosyal-ayar.php?durum=ok");

	} else {

		header("Location:../production/sosyal-ayar.php?durum=no");
	}
}


if (isset($_POST['hakkimizdakaydet'])) {
	

	$ayarkaydet=$db->prepare("INSERT INTO  hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik
		");

	$insert=$ayarkaydet->execute(array(
		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik']
	));


	if ($insert) {

		header("Location:../production/hakkimizda.php?durum=ok");

	} else {

		header("Location:../production/hakkimizda.php?durum=no");
	}
	
}
if (isset($_POST['hakkimizdaguncelle'])) {
	

	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik
		WHERE hakkimizda_id={$_POST['hakkimizda_id']}
		");

	$insert=$ayarkaydet->execute(array(
		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik']
	));


	if ($insert) {

		header("Location:../production/hakkimizda.php?durum=ok");

	} else {

		header("Location:../production/hakkimizda.php?durum=no");
	}
	
}
if (isset($_POST['menukaydet'])) {


	$menu_seourl=$_POST['menu_ad'];


	$ayarekle=$db->prepare("INSERT INTO menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		");

	$insert=$ayarekle->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
	));


	if ($insert) {

		Header("Location:../production/menu.php?durum=ok");

	} else {

		Header("Location:../production/menu.php?durum=no");
	}

}


if (isset($_POST['menuduzenle'])) {

	$menu_id=$_POST['menu_id'];

	$menu_seourl=$_POST['menu_ad'];

	
	$ayarkaydet=$db->prepare("UPDATE menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		WHERE menu_id={$_POST['menu_id']}");

	$update=$ayarkaydet->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
	));


	if ($update) {

		Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");

	} else {

		Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");
	}

}


if ($_GET['menusil']=="ok") {

	$sil=$db->prepare("DELETE from menu where menu_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['menu_id']
		));


	if ($kontrol) {


		header("location:../production/menu.php?sil=ok");


	} else {

		header("location:../production/menu.php?sil=no");

	}


}


if (isset($_POST['serviskaydet'])) {



	$ayarekle=$db->prepare("INSERT INTO servis SET
		servis_ad=:servis_ad,
		servis_detay=:servis_detay,
		servis_icon=:servis_icon,
		servis_sira=:servis_sira,
		servis_durum=:servis_durum
		");

	$insert=$ayarekle->execute(array(
		'servis_ad' => $_POST['servis_ad'],
		'servis_detay' => $_POST['servis_detay'],
		'servis_icon' =>$_POST['servis_icon'],
		'servis_sira' => $_POST['servis_sira'],
		'servis_durum' => $_POST['servis_durum']
	));


	if ($insert) {

		Header("Location:../production/servis.php?durum=ok");

	} else {

		Header("Location:../production/servis.php?durum=no");
	}

}
if (isset($_POST['servisduzenle'])) {

	$servis_id=$_POST['servis_id'];
	
	$ayarkaydet=$db->prepare("UPDATE servis SET
		servis_ad=:servis_ad,
		servis_detay=:servis_detay,
		servis_icon=:servis_icon,
		servis_sira=:servis_sira,
		servis_durum=:servis_durum
		WHERE servis_id={$_POST['servis_id']}");

	$update=$ayarkaydet->execute(array(
		'servis_ad' => $_POST['servis_ad'],
		'servis_detay' => $_POST['servis_detay'],
		'servis_icon'=>$_POST['servis_icon'],
		'servis_sira' => $_POST['servis_sira'],
		'servis_durum' => $_POST['servis_durum']
	));


	if ($update) {

		Header("Location:../production/servis-duzenle.php?servis_id=$servis_id&durum=ok");

	} else {

		Header("Location:../production/servis-duzenle.php?servis_id=$servis_id&durum=no");
	}

}


if ($_GET['servissil']=="ok") {

	$sil=$db->prepare("DELETE from servis where servis_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['servis_id']
		));


	if ($kontrol) {


		header("location:../production/servis.php?sil=ok");


	} else {

		header("location:../production/servis.php?sil=no");

	}


}



?>