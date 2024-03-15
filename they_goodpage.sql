-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 15 Mar 2024, 09:12:40
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `they_goodpage`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `maintable`
--

CREATE TABLE `maintable` (
  `id` int(11) NOT NULL,
  `tableName` varchar(255) NOT NULL,
  `tableLink` varchar(255) NOT NULL,
  `tableText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `maintable`
--

INSERT INTO `maintable` (`id`, `tableName`, `tableLink`, `tableText`) VALUES
(1, 'Kırklareli Hakkında', 'KirklareliHakkinda', 'aaaa'),
(2, 'Sayılarla Üniversitemiz', 'SayilarlaUniversite', 'aaaa'),
(3, 'İdari Birimler', 'IdariBirimler', 'aaaa'),
(4, 'Bölümler', 'Bolumler', 'aaaa'),
(5, 'Kurallar - Komisyonlar', 'kurallarKomisyon', 'aaaa'),
(6, 'Bilgi ve Belgeler', 'bilgiVeBelgeler', 'aaaa'),
(7, 'Mevzuat', 'mevzuat', 'aaaa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subtable`
--

CREATE TABLE `subtable` (
  `id` int(11) NOT NULL,
  `tableName` varchar(255) NOT NULL,
  `tableLink` varchar(255) NOT NULL,
  `tableText` text NOT NULL,
  `topTable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `subtable`
--

INSERT INTO `subtable` (`id`, `tableName`, `tableLink`, `tableText`, `topTable`) VALUES
(1, 'Hakkında', 'supHakkinda', 'aaaasda', 1),
(2, 'Yönetim', 'supYonetim', 'aaaasda', 1),
(3, 'Senato', 'supSenato', 'aaaasda', 1),
(4, 'Yönetim Kurulu', 'supYonetimKurul', 'aaaasda', 1),
(5, 'Genel Sekreterlik', 'supGenelSekreter', 'aaaasda', 1),
(6, 'Vizyon & Misyon', 'supVizMisyon', 'aaaasda', 1),
(7, 'Etik Kodlar', 'supEtikKodlar', 'aaaasda', 1),
(8, 'Kurumsal Kimlik', 'supKurumsalKimlik', 'aaaasda', 1),
(9, 'İletişim Bilgileri', 'supIletisimBilgileri', 'aaaasda', 1),
(10, 'Organizasyon Şeması', 'supOrganizasyonSeması', 'aaaasda', 1),
(11, 'Taban - Tavan Puanları', 'supTabanTavan', 'aaaasda', 2),
(12, 'Personel Sayıları', 'supPersonelSayilari', 'aaaasda', 2),
(13, 'Öğrenci Sayıları', 'supOgrenciSayilari', 'aaaasda', 2),
(14, 'Döner Sermaye İşletme Müdürlüğü', 'supDonerSermayeIsletmeMudurlugu', 'aaaasda', 3),
(15, 'Basımevi Müdürlüğü', 'supBasimeviMudurlugu', 'aaaasda', 3),
(16, 'İç Denetim Birim Başkanlığı', 'supIcDenetimBirimBsk', 'aaaasda', 3),
(17, 'Hukuk Müşavirliği', 'supHukukMusavirligi', 'aaaasda', 3),
(18, 'Kurumsal İletişim Koordinatörlüğü', 'supKurumsalIletisimKoordinatorlugu', 'aaaasda', 3),
(19, 'Kütüphane ve Dokümantasyon Daire Başkanlığı', 'supKutuphaneVeDokumantasyonDaireBsk', 'aaaasda', 3),
(20, 'Öğrenci İşleri Daire Başkanlığı', 'supOgrenciIsleriDaireBsk', 'aaaasda', 3),
(21, 'Personel Daire Başkanlığı', 'supPersonelDaireBsk', 'aaaasda', 3),
(22, 'Rektörlük Özel Kalem', 'supRektorlukOzelKalem', 'aaaasda', 3),
(23, 'Sağlık, Kültür ve Spor Daire Başkanlığı', 'supSaglikKulturSporDaireBsk', 'aaaasda', 3),
(24, 'Strateji Geliştirme Daire Başkanlığı', 'supStratejiGelistirmeDaireBsk', 'aaaasda', 3),
(25, 'Yapı İşleri ve Tenik Daire Başkanlığı', 'supYapiIsleriVeTeknikDaireBsk', 'aaaasda', 3),
(26, 'Atatürk İlkeleri ve İnkilap Tarihi Bölümü', 'supAtaturkIlkeleriVeInkilapTableBolumu', 'aaaasda', 4),
(27, 'Beden Eğitimi Bölümü', 'supAtaturkIlkeleriVeInkilapTableBolumu', 'aaaasda', 4),
(28, 'Enformatik Bölümü', 'supAtaturkIlkeleriVeInkilapTableBolumu', 'aaaasda', 4),
(29, 'Güzel Sanatlar Bölümü', 'supAtaturkIlkeleriVeInkilapTableBolumu', 'aaaasda', 4),
(30, 'Türk Dili Bölümü', 'supAtaturkIlkeleriVeInkilapTableBolumu', 'aaaasda', 4),
(31, 'Yabancı Diller Bölümü', 'supAtaturkIlkeleriVeInkilapTableBolumu', 'aaaasda', 4),
(32, 'Kalite Komisyonu', 'supKaliteKomisyon', 'aaaasda', 5),
(33, 'Bilimsel Arastırma ve Yayın Etiği Kurulları', 'supBilimselArastirmaYayinEtigiKurulları', 'aaaasda', 5),
(34, 'Kurum Arabuluculuk Komisyonu', 'supKurumArabuluculukKomisyon', 'aaaasda', 5),
(35, 'Akademik Teşvik Düzenleme, Denetleme ve Itiraz Komisyonu', 'supAkademikTesvikDuzenleme', 'aaaasda', 5),
(36, 'BAP Komisyonu', 'supBapKomisyonu', 'aaaasda', 5),
(37, 'Danışma Kurulu', 'supDanismaKurulu', 'aaaasda', 5),
(38, 'Eğitim Komisyonu', 'supEgitimKomisyon', 'aaaasda', 5),
(39, 'Mevzuat Komisyonu', 'supMevzuatKomisyon', 'aaaasda', 5),
(40, 'Strateji Geliştirme Kurulu', 'supStratejiGelistirmeK', 'aaaasda', 5),
(41, 'Yayın Komisyonu', 'supYayinKomisyon', 'aaaasda', 5),
(42, 'Program İzleme ve İyileştirme Komisyonu', 'supProgramIzlemeVeIyilestirme', 'aaaasda', 5),
(43, 'Yemek Servisi Yürütme Kurulu - Yemek Servisi Denetleme Kurulu', 'supYemekServisiYurutmeKurulu', 'aaaasda', 5),
(44, 'Bağımlılıkla Mücadele Komisyonu', 'supBagimliliklaMucadeleKomisyonu', 'aaaasda', 5),
(45, 'Taşınmaz Kiralama Komisyonu', 'supTasinmazKiralamaKomisyonu', 'aaaasda', 5),
(46, 'Lojman Tahsis Komisyonu', 'supLojmanTahsisKomisyonu', 'aaaasda', 5),
(47, 'Kişisel Verilerin Korunması Kanunu', 'supKisiselVerilerinKorunmasıKanunu', 'aaaasda', 6),
(48, 'Bilgi Edinme', 'supBilgiEdinme', 'aaaasda', 6);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `maintable`
--
ALTER TABLE `maintable`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `subtable`
--
ALTER TABLE `subtable`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `maintable`
--
ALTER TABLE `maintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `subtable`
--
ALTER TABLE `subtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
