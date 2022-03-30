<?php  header('Content-type:application/xml; charset="utf-8"',true);?>


<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"

xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"

xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"

xmlns:example="http://www.example.com/schemas/example_schema"> <!-- namespace extension -->

<?php
include 'fonksiyonlar.php';
include 'nedmin/netting/baglan.php';


?>
<url>
<loc>https://<?php echo $_SERVER['HTTP_HOST'];?>/</loc>
<lastmod><?php echo date("Y-m-d") ?></lastmod>
<changefreq>daily</changefreq> 
<priority>1.00</priority>     
</url>
<?php 
$servissor=$db->prepare("Select * from servisler");
$servissor->execute();
while($serviscek=$servissor->fetch(PDO::FETCH_ASSOC)){?>

<url>
<loc>https://<?php echo $_SERVER['HTTP_HOST'];?>/<?php echo seo($serviscek['servis_ad']) ?></loc>
<lastmod><?php echo date("Y-m-d") ?></lastmod>
<changefreq>daily</changefreq> 
<priority>1.00</priority>     
</url>

<?php }?>

<?php 
$makalesor=$db->prepare("Select * from makaleler");
$makalesor->execute();
while($makalecek=$makalesor->fetch(PDO::FETCH_ASSOC)){?>

<url>
<loc>https://<?php echo $_SERVER['HTTP_HOST'];?>/<?php echo seo($makalecek['makale_isim']) ?></loc>
<lastmod><?php echo date("Y-m-d") ?></lastmod>
<changefreq>daily</changefreq> 
<priority>1.00</priority>     
</url>

<?php }?>


</urlset>