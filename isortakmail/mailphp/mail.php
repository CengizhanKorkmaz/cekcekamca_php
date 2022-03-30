<?
require("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();  
	$mail->CharSet="SET NAMES UTF8";                               // send via SMTP
	$mail->Host     = "mail.cekcekamca.com"; // SMTP servers
	$mail->SMTPAuth =  true;     // turn on SMTP authentication
	$mail->Username = "info@cekcekamca.com";  // SMTP username
	$mail->Password = "2004Aa2004@";// SMTP password
	$mail->Port     = 25;
	$mail->From     = "info@cekcekamca.com"; // smtp kullanýcý adýnýz ile ayný olmalý
	$mail->Fromname = " İletisim Maili";
	//Çoklu mail için bu satırı çoğal
	$mail->AddAddress("info@cekcekamca.com","Form Mail");
	

	$mail->Subject  =  $_POST['name'];
	$mail->Body     =  implode("    ",$_POST);

if(!$mail->Send())
{
	echo "Mesaj Gönderilemedi <p>";
	echo "Mailer Error: " . $mail->ErrorInfo;
	exit;
}
else
{
Header("Location:../iletisim?durum=ok");
}?>


<!--<meta http-equiv="refresh" content="0;URL=../iletisim.php?durum=ok">-->