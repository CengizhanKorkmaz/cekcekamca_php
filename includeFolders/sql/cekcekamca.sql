-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 26 Şub 2021, 13:41:25
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cekcekamca`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_url` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_url`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, 'assets/img/31305logo.png', 'cekcekamca', 'Çekici Bulmanın En Kolay Yolu Cekcekamca :)', 'Yolda Kaldın Diye Dert Etme Cekcekamca Yanında', 'cekici,yolda kaldık,cekicicagir,yol arıza', 'cekcekamca', '0555 555 55 55', '0555 555 55 55 ', '000000000001', 'info@cekcekamca.com.tr', 'istanbul', 'istanbul', 'istanbul', 'asdas', '', '', '', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banka`
--

CREATE TABLE `banka` (
  `banka_id` int(11) NOT NULL,
  `banka_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `banka_iban` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `banka_hesapadsoyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `banka_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`) VALUES
(0, 'Hakkımızda', '<p>Biz kimiz?</p><p>Sekt&ouml;rde yetişen profesyonel operat&ouml;r ve &ccedil;alışanlarla kurulmuş bir şirket olmakla beraber uzun yıllardır bu alanda hizmet vermiş kişilerin oluşturduğu bir firmayız.</p><p>Neler Yapıyoruz?</p><p>Her t&uuml;rl&uuml; motorlu taşıtlara yol yardım hizmeti sunuyoruz. Bunların i&ccedil;inde &ccedil;ekici, kurtarıcı, lastik, ak&uuml; takviye gibi konularda donanımlı ara&ccedil;larımızla hizmet veriyoruz.</p><p>Nerelerdeyiz?</p><p>Başta b&uuml;y&uuml;k şehirler olmak &uuml;zere yaklaşık 120 &ccedil;&ouml;z&uuml;m ortağımız firmalarla bir&ccedil;ok lokasyonda hizmet veriyoruz. Nerede olursanız olun &ccedil;ekici &ccedil;ağırabilirsiniz.</p><p>Neden tercih etmelisiniz?</p><p>Hızlı, g&uuml;venli, profesyonel destek almak i&ccedil;in ve ayrıca sadık m&uuml;şteri avantajlarından yararlanmak i&ccedil;in bizi aramanız yeterli. Sorunsuz işlemler i&ccedil;in &ouml;zveriyle &ccedil;alışmaktayız.</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_onecikar` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_seourl` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(2) NOT NULL,
  `kategori_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_tc` varchar(11) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_vdaire` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_vno` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_tc`, `kullanici_ad`, `kullanici_soyad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_vdaire`, `kullanici_vno`, `kullanici_yetki`) VALUES
(1, '18447708244', 'cengo', 'korkmazz', 'cengizhann55@gmail.com', '05453823673', '64bc8e65a4d2015fde8afb45745603cc', 'kran', 'samsunn', 'ilkadımm', 'a vergi', '00000001', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(2, 'Anasayfa', '<p>anasaayfa dety</p>', 'anasayfa', 1, '1', 'anasayfa'),
(3, 'Hakkımızda', '<p>hakkimizda detay</p>', 'hakkimizda', 2, '1', 'hakkimizda'),
(4, 'Servislerimiz', '<p>servislerimiz</p>', 'servisler', 3, '1', 'servislerimiz'),
(5, 'İletişim', '<p>iletisim</p>', 'iletisim', 4, '1', 'iletisim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `servis`
--

CREATE TABLE `servis` (
  `servis_id` int(11) NOT NULL,
  `servis_ad` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `servis_detay` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `servis_icon` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `servis_sira` int(2) NOT NULL,
  `servis_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `servis`
--

INSERT INTO `servis` (`servis_id`, `servis_ad`, `servis_detay`, `servis_icon`, `servis_sira`, `servis_durum`) VALUES
(2, 'Oto Kurtarma', '<p>Haraket alanı kısıtlanan veya kendi motor g&uuml;c&uuml;yle bulunduğu yerden &ccedil;ıkayaman ara&ccedil;lar &Ccedil;ekici &Ccedil;ağır&#39;dan oto kurtarma konusunda destek alabilirler.</p>', 'flaticon-tow-truck', 2, '1'),
(3, 'Çoklu Araç Taşıma', '<p>Uzun mesafelerde şehirler arası &ccedil;ekici hizmetimizi kullanarak ara&ccedil;larınızı istediğiniz yerden yaşadığınız şehre getirtebilirsiniz.</p>', 'flaticon-car', 3, '1'),
(4, 'VIP Araç Taşıma', '<p>&Ouml;zellikle şehirler arası ara&ccedil; taşımada 12 ve 24 saatte teslimat se&ccedil;eneğinden yararlanabilirsiniz.</p>', 'flaticon-rich', 4, '1'),
(5, 'Akü Takviye', '<p>Yol yardım ara&ccedil;larımıza ulaşarak size yakın olan mobil ara&ccedil;tan yardım isteyebilir, &ccedil;ok sık karşılaşılan bu durum i&ccedil;in artık &Ccedil;ekici &Ccedil;ağır&#39;dan yardım talep edebilirsiniz.</p>', 'flaticon-battery', 5, '1'),
(6, 'Kamyon/Otobüs Kurtarma', '<p>B&uuml;y&uuml;k ticari ara&ccedil;larlarınız i&ccedil;in yol yardım bulmak genelde zor gibi g&ouml;r&uuml;n&uuml;r. Fakat &Ccedil;ekici &Ccedil;ağır b&uuml;nyesinde yer alan firmalarla b&uuml;y&uuml;k ara&ccedil;lara da kolaylıkla hizmet verebiliyoruz.</p>', 'flaticon-public-transport', 6, '1'),
(7, 'Oto Çekici', '<p>&Ccedil;ekici ve kurtarıcı olarak hizmet veren ara&ccedil;larla yolda kalan taşıt sahiplerine hızlı şekilde ulaşarak ara&ccedil;larını belirttikleri yere &ccedil;ekiyoruz.</p>', 'flaticon-car', 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_detay` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(2) NOT NULL,
  `slider_link` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `slider_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_detay`, `slider_resimyol`, `slider_sira`, `slider_link`, `slider_durum`) VALUES
(9, 'Çekici Bulmanın En Kısa Yolu', '<p>Herahngi bir a&ccedil;ıklama yazılabilir</p>', 'assets/img/hero/27209255752585426784Varlık 4.png', 1, 'yok', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `banka`
--
ALTER TABLE `banka`
  ADD PRIMARY KEY (`banka_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`servis_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banka`
--
ALTER TABLE `banka`
  MODIFY `banka_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `servis`
--
ALTER TABLE `servis`
  MODIFY `servis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
