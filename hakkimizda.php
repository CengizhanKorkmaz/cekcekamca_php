<!doctype html>
<html class="no-js" lang="zxx">
<?php require_once 'includeFolders/header.php';
$hakkimizdasor = $db ->prepare("SELECT* FROM  hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id' => 0
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>

	<div class="services-area">
		<div class="container">
			<!-- Section-tittle -->
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="section-tittle text-center mb-80">
						<h2>Hakkımızda</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Area End-->

	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<h3 class="text-heading"><?php echo $hakkimizdacek['hakkimizda_baslik']?></h3>
			<p class="sample-text">
				<?php echo $hakkimizdacek['hakkimizda_icerik']?>
			</p>
		</div>
	</section>
	<!-- End Sample Area -->
	
	<?php require_once "includeFolders/warning.php"?>
	<!-- Start Button -->
	
	<!-- End Button -->

	
	<?php require_once "includeFolders/footer.php"?>
</body>
</html>