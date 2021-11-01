-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-11-2021 a las 20:37:50
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

DROP TABLE IF EXISTS `cancion`;
CREATE TABLE IF NOT EXISTS `cancion` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `duracion` varchar(50) NOT NULL,
  `copyright` varchar(4) NOT NULL,
  `lanzamiento` datetime(6) NOT NULL,
  `imagencd` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `nombre`, `genero`, `autor`, `duracion`, `copyright`, `lanzamiento`, `imagencd`) VALUES
(1, 'Solar System', 'DNB', 'Sub Focus', '4:48', '1304', '2009-08-26 00:00:00.000000', 'https://m.media-amazon.com/images/I/81qe-cCVBRL._SS500_.jpg'),
(2, 'Fanatica sensual', 'Reggaeton', 'Plan B', '4:00', '2256', '2014-09-25 00:00:00.000000', 'https://m.media-amazon.com/images/I/51MjLVPA1LL._SY355_.jpg'),
(3, 'Without Me', 'Rap', 'Eminem', '4:50', '3475', '2002-05-26 00:00:00.000000', 'https://lastfm.freetls.fastly.net/i/u/770x0/634a5cd4f2e24ce0ccb7da5fa90ac9d2.jpg'),
(4, 'Bohemian Rhapsody', 'Rock', 'Queen', '5:54', '3487', '1975-10-31 00:00:00.000000', 'https://upload.wikimedia.org/wikipedia/ko/f/f4/%ED%80%B8_-_Queen_II.jpg'),
(5, 'Tsunami', 'Big room', 'Borgeous', '3:56', '3487', '2013-10-02 00:00:00.000000', 'https://img.discogs.com/fxzVa62PVABoJ6PvRgaJHKNFpRg=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-14873413-1583231034-8604.jpeg.jpg'),
(6, 'High to hell', 'Rock', 'AC/DC', '3:28', '4571', '1979-07-27 00:00:00.000000', 'https://img.discogs.com/swRwxxzx37idNzfdu19Zs6etLsU=/fit-in/464x470/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-1944933-1254146469.jpeg.jpg'),
(7, 'Duality', 'Heavy Metal', 'Slipknot', '4:12', '6660', '2004-05-04 00:00:00.000000', 'https://static.qobuz.com/images/covers/06/58/0016861815806_600.jpg'),
(8, 'Rockstar', 'Trap', 'Post Malone', '3:38', '5579', '2028-04-27 00:00:00.000000', 'https://ae01.alicdn.com/kf/HTB1ZmVLcROD3KVjSZFFq6An9pXaL/P-steres-e-impresiones-de-postone-Malone-Rockstar-rapero-lbum-de-M-sica-de-Hip-Hop.jpg'),
(9, 'Thiller', 'Pop', 'Michael Jackson', '5:57', '6773', '1982-11-30 00:00:00.000000', 'https://m.media-amazon.com/images/I/81J3U6sT-iL._SL1500_.jpg'),
(10, 'El vals del obrero', 'Ska', 'Ska-p', '4:37', '9673', '1996-03-01 00:00:00.000000', 'https://m.media-amazon.com/images/I/71lHbMoxDHL._SY355_.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
