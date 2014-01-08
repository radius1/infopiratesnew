-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 16 dec 2013 om 15:52
-- Serverversie: 5.5.24-log
-- PHP-versie: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `infopirates`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Gegevens worden uitgevoerd voor tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `date`, `user_ip`) VALUES
(16, 'dsdsé', 'fdfdfdd@dsfdkl.nl', '2013-12-12 13:48:29', ''),
(17, 'sdsdsdaé', 'fdfdf@dffdf.nl', '2013-12-12 14:08:15', ''),
(18, 'corné', 'fdskfl@fdlfkdl.nl', '2013-12-12 14:18:20', ''),
(19, '', 'dfdflk@fkdlfkd.nl', '2013-12-12 14:19:43', ''),
(20, 'dklkeé', 'dfkd@dfkl.nl', '2013-12-12 14:20:52', ''),
(21, 'dsdswé', 'fkdlfkdlk@fdklkfdl.nl', '2013-12-12 14:21:57', ''),
(22, 'dré', 'fdklk@sdkfl.nl', '2013-12-12 14:34:09', ''),
(23, 'djké', 'dsds@dskl.nl', '2013-12-12 14:34:53', ''),
(24, 'éaddésdsé', 'dffdfdf@fdklk.nl', '2013-12-12 14:43:39', ''),
(26, 'lklklklklklké', 'dsdsds@fklkf.nl', '2013-12-12 14:55:04', ''),
(27, 'sdsdsé', 'dsdsdsds@fksdlk.nl', '2013-12-12 14:56:01', ''),
(28, 'dlé', 'dkslk@fkl.nl', '2013-12-12 14:57:03', ''),
(29, 'weré', 'skfldk@fdklk.nl', '2013-12-12 15:00:32', ''),
(34, 'gfgfgf&amp;eacute', 'eddede@fdfdf.nl', '2013-12-12 15:07:01', ''),
(35, 'lkjé', 'fjdlkj@ioeir.nl', '2013-12-12 15:09:55', ''),
(36, 'cornee', 'dshjh@klkl.nl', '2013-12-12 15:16:54', ''),
(37, 'poié', 'klo@pun.lo', '2013-12-12 15:28:55', ''),
(38, 'ddddeeee', 'rerererer@hghgh.nl', '2013-12-13 11:41:19', ''),
(39, 'ueiuwoieu', 'fhdjht@groioi.nl', '2013-12-13 12:53:05', ''),
(40, 'weewew', 'ewew@tioiy.nl', '2013-12-13 12:59:14', ''),
(41, 'Jeffrey', 'fdhfjk@dfjioefjeioj.nl', '2013-12-16 12:26:32', ''),
(42, 'yioptyop', 'gbiopfjbvfioj@yutriougf.nl', '2013-12-16 12:38:58', ''),
(43, 'eriutyeruiy', 'opicm3@sdfdjlk.nl', '2013-12-16 15:50:20', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
