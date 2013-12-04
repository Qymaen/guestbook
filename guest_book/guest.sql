-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2013 at 04:31 PM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guest`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `homepage` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `browser` varchar(255) NOT NULL DEFAULT '',
  `msg` mediumtext NOT NULL,
  `send_time` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `email`, `homepage`, `ip`, `browser`, `msg`, `send_time`) VALUES
(3, 'Borgia', 'ilove@lucrecia.rome', 'www.chesare.best', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Хо-хо-хо! У меня всё.', '2013-12-02 19:18:05'),
(16, 'khaleesi', 'Mother@of.dr', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'No one will take my dragons.', '2013-12-03 17:42:31'),
(5, 'Heofeo', 'lao-mao@opa.opa', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Люблю рифмы', '2013-12-02 19:24:23'),
(15, 'Gollum', 'some@cave.sh', 'www.my.precious.sh', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'He wants the precious. Always he is looking for it.', '2013-12-03 17:25:07'),
(14, 'Gollum', 'some@cave.sh', 'www.my.precious.sh', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'He wants the precious. Always he is looking for it.', '2013-12-03 17:24:30'),
(9, 'Django', 'Dgango@unchained.com', 'www.freeatlast.com', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Django!\nDjango, have you always been alone?\nDjango!\nDjango, have you never loved again?\nLove will live on, oh oh oh…\nLife must go on, oh oh oh…\nFor you cannot spend your life regreatting.\n', '2013-12-03 12:54:53'),
(24, 'Kirkorov', 'kirka@mail.ru', 'www.kirka.ru', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Супер сайт! Давно тут зависаю. Все классно сделано, рекламы нет! Рекомендую!', '2013-12-04 15:19:49'),
(13, 'Gollum', 'some@cave.sh', 'my.precious.sh', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'He wants the precious. Always he is looking for it.', '2013-12-03 17:24:21'),
(12, 'Bilbo', 'bilbo@baggins.sh', 'www.ring.shire', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'I will give you a name,” he said to it, “and I shall call you Sting.', '2013-12-03 17:16:51'),
(17, 'gsfdgs', 'dwdas@adw.ru', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'ololololololo', '2013-12-03 18:07:42'),
(18, 'gsfdgs', 'dwdas@adw.ru', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'ololololololo12', '2013-12-03 18:08:18'),
(19, 'QQWeqw', 'ahaha@adw.ru', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'pew-pew-pew', '2013-12-03 18:08:48'),
(20, 'Ned Stark', 'winter@coming.is', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'I''m so dead...', '2013-12-03 19:23:14'),
(21, 'Bran Stark', 'Love@climb.to', '', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'How great to get up in the morning, knowing that you will  not need to go somewhere!', '2013-12-03 19:26:01'),
(22, 'Tony Stark', 'stark@all.my', 'www.Stark.com', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'I''m Batman!', '2013-12-04 15:03:20'),
(23, 'Superman', 'superman@rambler.ru', 'www.krypton.kr', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'I''m Batman too!', '2013-12-04 15:09:19'),
(25, 'Miladze', 'milka@mail.ru', 'www.milka.ru', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Киркоров не врет. Сайт и вправду огонь! Теперь зарабатываю по 500$ в день!', '2013-12-04 15:23:25'),
(26, 'Pugacheva', 'puga@che.va', 'www.aisberg.vok', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Всем своим рассказала! Скоро буду петь тут, вообще зацветём!', '2013-12-04 15:27:10'),
(27, 'Pikachu', 'pika@pika.pi', 'www.pakachu.chu', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'pika-pika', '2013-12-04 15:28:51'),
(28, 'Pe4kin', 'pechkin@pasport.byc', 'www.pechka.ru', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'У меня для Вас посылка, но я Вам ее не отдам. Потому, что я так захотел. Муа-ха-ха-ха!', '2013-12-04 15:33:09'),
(29, 'Leonardo', 'leo@tnmt.com', 'www.tnmt.com', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Teenage Ninja Mutant Tortles!!', '2013-12-04 15:34:53'),
(30, 'Cheetah', 'lol@100miles.ho', 'www.fast.sh', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', '*Вшиииить*', '2013-12-04 15:36:30'),
(31, 'Thrall', 'orgri@mar.org', 'www.azeroth.az', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0', 'Son of Durotar!', '2013-12-04 15:40:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
