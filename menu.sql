-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 09, 2026 at 09:30 AM
-- Server version: 8.4.8
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `naam` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `categorie` varchar(15) NOT NULL,
  `beschrijving` varchar(130) NOT NULL,
  `prijs` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `naam`, `categorie`, `beschrijving`, `prijs`) VALUES
(4, 'Bulgogi Gyoza (6 st.)', 'Small Plates', 'Koreaans gemarineerd rundvlees in Japanse gyoza skin, geserveerd met gochujangsaus.', 10.00),
(5, 'Bulgogi Bao Duo', 'Bao & Rice', 'Twee gestoomde bao gevuld met Koreaans gemarineerd rundvlees, kimchi-slaw en sriracha mayo.', 11.00),
(6, 'Adobo Ramen', 'Ramen', 'Filipijns adobo-geglazuurde chashu in tonkotsu-bouillon, met rijstazijn, laurierblad, knoflookchips en soja ei. Masarap!', 14.00),
(7, 'Shoyu Ramen Classique', 'Ramen', 'Lichte soja-bouillon met bamboescheuten, menma, narutomaki, chashu en groene ui. Puur comfort food.', 13.00),
(8, 'Matcha Shio Ramen', 'Ramen', 'Zout-bouillon met een vleugje matcha, sakura ebi, enoki, en yuzu-boter. Fris, licht en elegant.', 14.00),
(9, 'Miso Ramen Kimchi Bomb', 'Ramen', 'Japanse miso bouillon met Koreaanse kimchi, tofu, shiitake en zelfgemaakte sesampasta. Pikant & umami.', 14.00),
(10, 'Spicy Tan Tan Men', 'Ramen', 'Romige sesam-miso soep met gehakt, bok choy en chili-olie. Geïnspireerd op Sichuan dandanmian.', 15.00),
(11, 'Black Garlic Tonkotsu', 'Ramen', 'Onze rijkste bouillon verrijkt met zelfgemaakte ma-yu (zwart knoflookolie), ei en zwarte sesam.', 15.00),
(13, 'Lumpia Shanghai', 'Small Plates', 'Filipijnse loempia\'s gevuld met seasoned varkensvlees, geserveerd met zoetzure ananassaus.', 7.00),
(14, 'Sisig Tacos (3 st.)', 'Small Plates', 'Filipijns sisig — gehakt varkensoor en -wang met calamansi, chili en ei — geserveerd in crispy wonton shells.', 10.50),
(15, 'Taiwanese Popcorn Chicken', 'Small Plates', 'Crispy basilicumkip uit de frituurtenten van Taipei, met zoet-zure dipsaus.', 8.00),
(16, 'Tteokbokki Fusion', 'Small Plates', 'Koreaanse rijstcakes in gochujang-tomatensaus met mozzarella, gebakken knoflook en kimchi.', 8.50),
(17, 'Edamame Chili Crisp', 'Small Plates', 'Geroosterde edamame met Sichuan chili crisp olie, zeezout en citroenschil.', 5.50),
(18, 'Kare-Kare Gyoza (6 st.)', 'Small Plates', 'Japanse gyoza gevuld met Filipijnse kare-kare stoofvlees (oxtail & groenten in pindasaus), met bagoong dippertje.', 10.00),
(19, 'Takoyaki Mash-up', 'Small Plates', 'Octopus bollen met Japanse mayonaise, Worcestershire glaze en katsuobushi. Knappend & hot.', 9.50),
(20, 'Tofu King Oyster Bao', 'Bao & Rice', 'Gepaneerde eryngii-paddenstoelen met pikante miso, avocado en yuzu-ponzusaus.', 10.00),
(21, 'Bibimbap Seoul Style', 'Bao & Rice', 'Koreaanse rijstkom met gekleurde groenten, gochujang, gebakken ei, bulgogi en krokante rijst onderin.', 12.50),
(22, 'Crispy Pork Belly Bao', 'Bao & Rice', 'Knapperig gestoofd buikspek, hoisinsaus, komkommer en gebakken sjalotten in zachte baoskin.', 11.50),
(23, 'Tuna Poke Donburi', 'Bao & Rice', 'Japanse rijstkom met verse tonijn sashimi, edamame, mango, tobiko en soya-sesam dressing.', 13.50),
(24, 'Garlic Fried Rice', 'Bao & Rice', 'Filipijnse sinangag-stijl gefrituurde rijst met zwarte knoflook, ei, chorizon en kemangi-basilicum.', 9.00),
(25, 'Sundubu Jjigae', 'Soepen', 'Zachte Koreaanse tofusoep met zeevruchten, ei, kimchi en gochugaru. Rood, heet, heerlijk.', 11.50),
(26, 'Pancit Canton Fusion', 'Soepen', 'Filipijnse pancit canton noedels gewokt met calamansi-sojasaus, groenten, garnalen en knapperig chicharon.', 12.00),
(27, 'Taiwanese Beef Noodle Soup', 'Soepen', 'Langzaam gestoofd rundvlees in star anise bouillon met dikke wheat noodles en bok choy.', 13.50),
(28, 'Laksa Lemak', 'Soepen', 'Rijke kokos-curry bouillon met rijstvermicelli, garnalen, tofu puff en kemangi. Zuidoost-Aziatisch comfort.', 12.50),
(29, 'Sinigang na Hipon', 'Soepen', 'Traditionele Filipijnse zure garnalen-soep met tamarinde, radijs, bok choy en groene peper. Zuur, hartig, troostend.', 13.00),
(30, 'Matcha Tiramisu', 'Desserts', 'Italiaanse klassieker met een Japanse twist: ceremonial grade matcha, mascarpone en ladyfingers gedrenkt in hojicha.', 7.50),
(31, 'Mango Sticky Rice', 'Desserts', 'Thaise kleverige rijst met verse Ataulfo mango, kokosmelk en zwarte sesamcrunch.', 6.60),
(32, 'Taro Soft Serve', 'Desserts', 'Romig paars taro-ijs in wafelhoorn met mochi-stukjes, condensedmelk en kokos topping.', 5.50),
(33, 'Black Sesame Panna Cotta', 'Desserts', 'Zijdezachte Italiaanse panna cotta met zwarte sesamgelei, yuzu-coulis en goudfolie.', 7.00),
(34, 'Halo-Halo Sundae', 'Desserts', 'Filipijns ijs-dessert: shaved ice, leche flan, ube ijs, sago parel, nata de coco en zoete kidneybonen.', 8.00),
(35, 'Dorayaki Fusion Stack', 'Desserts', 'Japanse pannenkoekjes gevuld met matcha-anko en slagroom. Geserveerd met hojicha-ijs.', 6.00),
(36, 'Pandan Leche Flan', 'Desserts', 'Filipijns roomkaramel-flan geparfumeerd met versgemalen pandan. Zijdezacht, gekarameliseerd en magisch groen.', 6.50),
(37, 'Ube Mochi Brownie', 'Desserts', 'Paarse Filipino ube-brownie met een taai mochi-hart, witte chocolade drizzle en gedroogde sampaguita-bloesem.', 7.00),
(38, 'Black Sesame Latte', 'Dranken', 'Stomende melk met zelfgemaakte zwarte-sesamlikeur. Notachtig, warm en ongelooflijk bevredigend.', 5.00),
(39, 'Calamansi Yuzu Cooler', 'Dranken', 'Filipijnse calamansi met Japanse yuzu, sprankelend water, honing en verse munt. Zomer in een glas.', 5.00),
(40, 'Hojicha Rose Latte', 'Dranken', 'Geroosterde Japanse groene thee met rozensiroop en schuimige havermelk. Roze & dreamy. 🌸', 5.50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
