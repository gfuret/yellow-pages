-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2014 at 11:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company-directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` varchar(6) NOT NULL,
  `name_en` text NOT NULL,
  `name_ee` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_en`, `name_ee`) VALUES
('532482', 'Investment companies', 'Investment companies'),
('I043', 'Information services', ''),
('I079', 'Internet services', ''),
('T143', 'Telephone services', 'Telephone services');

-- --------------------------------------------------------

--
-- Table structure for table `category_company`
--

CREATE TABLE IF NOT EXISTS `category_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyid` int(8) NOT NULL,
  `categorycode` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category_company`
--

INSERT INTO `category_company` (`id`, `companyid`, `categorycode`) VALUES
(1, 562282, 'I079'),
(3, 307751, 'I043'),
(4, 552287, 'I043'),
(5, 243339, 'I043'),
(6, 552288, 'I043'),
(7, 236005, 'T143'),
(8, 532482, 'I103');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `idcounty` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `idcounty`) VALUES
(1, 'Tallinn', 1),
(2, 'Tartu', 2),
(3, 'Pärnu', 3),
(4, 'Rakvere', 4);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `clientid` int(8) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `street` text NOT NULL,
  `housenumber` text NOT NULL,
  `zipcode` int(5) NOT NULL,
  `city` int(8) NOT NULL,
  `county` int(8) NOT NULL,
  `xcoord` varchar(50) NOT NULL,
  `ycoord` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `fax` text NOT NULL,
  `email` text NOT NULL,
  `www` text NOT NULL,
  `additionalphones` text NOT NULL,
  `opening_hours` text NOT NULL,
  `description_ee` text NOT NULL,
  `description_en` text NOT NULL,
  `trademarks_ee` text NOT NULL,
  `trademarks_en` text NOT NULL,
  `keywords_ee` text NOT NULL,
  `keywords_en` text NOT NULL,
  PRIMARY KEY (`clientid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=562283 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`clientid`, `name`, `slug`, `street`, `housenumber`, `zipcode`, `city`, `county`, `xcoord`, `ycoord`, `phone`, `fax`, `email`, `www`, `additionalphones`, `opening_hours`, `description_ee`, `description_en`, `trademarks_ee`, `trademarks_en`, `keywords_ee`, `keywords_en`) VALUES
(236005, 'Kõnekeskuse AS', 'Konekeskuse-AS', 'Madara', '29', 10612, 1, 1, '59.4311528333424403624877054118154660038', '24.7216952564514799983550619461310174468', '3726266560', '3726300301', 'info@callcenter.ee', 'www.callcenter.ee', '', 'Opening Hours:\r\n	E: 8:30 - 17:00\r\n	T: 8:30 - 17:00\r\n	K: 8:30 - 17:00\r\n	N: 8:30 - 17:00\r\n	R: 8:30 - 17:00', '', '', '', '', '', ''),
(243339, 'FCR Media AS', 'FCR-Media-AS', 'Madara', '29', 10612, 1, 1, '59.4311528333424403624877054118154660038', '24.7216952564514799983550619461310174468', '3726300300', '3726300301', 'info@fcrmedia.ee', 'info@fcrmedia.ee', '', '', 'Alates 01.01.2013 kuulub Kontakt FCR Media grupile.\r\n	FCR Media on Euroopa üks juhtivaid kohaliku otsingu gruppe, mis koondab info- ja reklaamiteenust pakkuvaid ettevõtteid lisaks Eestile ka Lätis, Leedus, Iirimaal, Tšehhis, Slovakkias, Rootsis, Venemaal, Rumeenias, Ungaris ja Soomes. Kontserni aastakäive on 100 miljonit eurot, selles töötab ligi 1300 inimest ja ühtekokku teenindatakse 11 riigis 150 000 äriklienti.\r\n	FCR Media tootevalik sisaldab veebi-, mobiili- ja trükimeediaga seotud turundusmeetmeid ning muid reklaamilahendusi erineva suurusega ettevõtetele. Eestis esindab kontserni FCR Media AS.\r\n	FCR Media AS on järgmiste mainekate kaubamärkide omanik: 1182, M-Site, Kontakt, Äri+, delovoi.ee, Estonian Export Directory, Travel Estonia, Outdoor. Muuhulgas pakub FCR Media AS müügiteenust ka Delfi otsingule ja Motors24’le ning on ainus Google Adwords`i ametlik Premium Partner Eestis.', 'FCR Media is one of the leading local search companies in Europe that includes providers of information and advertising services in Estonia, Latvia, Lithuania, Ireland, Czech Republic, Slovakia, Sweden, Russia, Romania, Hungary and Finland. The group’s annual revenues are EUR 100 Million and it employs close to 1.300 employees. Total number of business clients amounts to 150.000 in 11 countries. The product range of FCR Media includes web, mobile and print marketing and advertising solutions targeted at small and medium-sized enterprises. In Estonia the group is represented by FCR Media AS, which represents brands like 1182, M-Site, Kontakt, Äri+, delovoi.ee, Estonian Export Directory, Travel Estonia and Outdoor. Among others, FCR Media AS offers a sale service also for the Delfi search engine, Motors24 and is the only official Premium Partner of Google Adwords in Estonia.', '1182, Teab ja ühendab, M-Site, KONTAKT, Delovoi.ee, Äri+, TravelEstonia.eu, Estonian Export, Google AdWords, EuroPages, Delfi otsing, Motors24', '1182, Teab ja ühendab, M-Site, KONTAKT, Delovoi.ee, Äri+, TravelEstonia.eu, Estonian Export, Google AdWords, EuroPages, Delfi otsing, Motors24', 'info, infoteenused, andmebaasid, infokataloogid, operaatorteenindus, infotelefon, telefonikataloogid, internetikataloogid, kõnekeskus, infomeedia, info otsimine, Eesti info, üritused, eraisik, eraisikute numbrid, telefoninumber, firmade kontaktid, kontaktid', 'information, information services, databases, information catalogues, operator services, hotline, yellow pages, internet catalogues, call center, information search, Estonian information, events, citizen, numbers of individuals, person search, private persons, phone number, company contacts, contacts'),
(307751, 'FCR Media AS Louna Eesti esindus', 'fcr-media', 'Lutsu', '14', 51006, 2, 2, '58.3826675582636338477167682793374152118', '26.7191358698568014331012868246410968466', '3726300300', '', '', '', '', '', '', '', '', '', '', ''),
(532482, 'BaltCap AS', 'BaltCap-AS', 'Tartu mnt', '2', 10145, 1, 1, '59.4346181140938267052713950287095511456', '24.7583870333149733975728470307962864117', '3726650280', '3726650281', 'info@baltcap.com', 'www.baltcap.com', '', 'E: 8:30 - 17:00\r\n	T: 8:30 - 17:00\r\n	K: 8:30 - 17:00\r\n	N: 8:30 - 17:00\r\n	R: 8:30 - 17:00', '', '', '', '', '', ''),
(552287, 'fcr media as lääne-eesti esindus', 'FCR-Media-AS-esindus', 'Rüütli', '14', 80010, 3, 3, '58.3847052167860884392030167554229419074', '24.4990636250825048660200986591429387922', '3726300300', '', '', '', '', '', '', '', '', '', '', ''),
(552288, 'FCR Media AS Ida-Eesti esindus', 'FCR-Media-esindus', 'Laada', '6B', 44310, 4, 4, '59.35040898583956689200136953175165984', '26.3609186145146721265807248322751935212', '3726300300', '', '', '', '', '	E: 8:30 - 17:00\r\n	T: 8:30 - 17:00\r\n	K: 8:30 - 17:00\r\n	N: 8:30 - 17:00\r\n	R: 8:30 - 17:00', '', '', '', '', '', ''),
(562282, 'FCR Tech OÜ', 'fcr-tech', 'Tartu mnt', '43', 10128, 1, 1, '59.4323153137747514675688113131635499596', '24.7669525502334172963712492571135736701', '3726300300', '', 'info@fcrmedia.com', 'www.fcrmedia.com', 'Phone: 3726863032 (Manager)\r\nPhone: 3726863033 (Conference)', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE IF NOT EXISTS `county` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`id`, `name`) VALUES
(1, 'Harjumaa'),
(2, 'Tartumaa'),
(3, 'Pärnumaa'),
(4, 'lääne-virumaa');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `en` text NOT NULL,
  `ee` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `en`, `ee`) VALUES
(1, 'company_name', 'company name', 'ettevõte nimi'),
(2, 'invite_to_search', 'What are you looking for?', 'Mida te otsite?'),
(3, 'what', 'what?', 'Mida?'),
(4, 'where', 'Where?', 'Kus?'),
(5, 'search_result', 'Search results you are looking for', 'Otsingu tulemused'),
(6, 'back', 'back', 'tagasi'),
(7, 'search', 'Search', 'Otsing'),
(8, 'phone', 'phone', 'telefon '),
(9, 'email', 'email', 'email'),
(10, 'keywords', 'keywords', 'märksõnad '),
(11, 'description', 'description', 'kirjeldus'),
(12, 'trademarks', 'trademarks', 'kaubamärgid'),
(13, 'working_hours', 'working hours', 'tööaeg'),
(14, 'fax', 'fax', 'faks'),
(15, 'additional_phones', 'additional phones', 'lisatelefone'),
(16, 'nothing_found', 'nothing found', 'Ei ole ettevõtet'),
(17, 'lost', 'lost', 'ei ole lehekülg'),
(18, 'page_not_exists', 'This page doesn''t exist. If you think there is a problem send us an email', 'See lehekülg ei ole olemas. Kui te arvate, seal on probleem, saatke meile e-kiri'),
(19, 'home', 'home', 'avaleht');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
