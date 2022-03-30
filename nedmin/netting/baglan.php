<?php 


try {



	$db=new PDO("mysql:host=localhost;dbname=cekcekam_cekcekamca;charset=utf8",'root','123456789');
	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOException $e) {



	echo $e->getMessage();

}



 ?>