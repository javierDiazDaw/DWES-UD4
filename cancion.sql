-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-10-2021 a las 18:35:06
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
  `imagencd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `nombre`, `genero`, `autor`, `duracion`, `copyright`, `lanzamiento`, `imagencd`) VALUES
(1, 'Solar System', 'DNB', 'Sub Focus', '4:48', '1304', '2009-08-26 00:00:00.000000', 'https://images.app.goo.gl/4ponp4ZQzsAFDC7p8'),
(2, 'Fanatica sensual', 'Reggaeton', 'Plan B', '4:00', '2256', '2014-09-25 00:00:00.000000', 'https://images.app.goo.gl/v97EQN9ZzsoHLKw58'),
(3, 'Without Me', 'Rap', 'Eminem', '4:50', '3475', '2002-05-26 00:00:00.000000', 'https://images.app.goo.gl/AC81PE6goLHBZW7G9'),
(4, 'Bohemian Rhapsody', 'Rock', 'Queen', '5:54', '3487', '1975-10-31 00:00:00.000000', 'https://images.app.goo.gl/UL753Z7DTdGuT4cv9'),
(5, 'Tsunami', 'Big room', 'Borgeous', '3:56', '3487', '2013-10-02 00:00:00.000000', 'https://images.app.goo.gl/FgLQGusMfmjskb5c6'),
(6, 'High to hell', 'Rock', 'AC/DC', '3:28', '4571', '1979-07-27 00:00:00.000000', 'https://images.app.goo.gl/kUtJXvtzRcwsNRb89'),
(7, 'Duality', 'Heavy Metal', 'Slipknot', '4:12', '6660', '2004-05-04 00:00:00.000000', 'https://images.app.goo.gl/FohFDry7Deteq4bW7'),
(8, 'Rockstar', 'Trap', 'Post Malone', '3:38', '5579', '2028-04-27 00:00:00.000000', 'https://images.app.goo.gl/EGjBBomrEoeHN6Ld6'),
(9, 'Thiller', 'Pop', 'Michael Jackson', '5:57', '6773', '1982-11-30 00:00:00.000000', 'https://images.app.goo.gl/DeitsNWbRyZU5fsa9'),
(10, 'El vals del obrero', 'Ska', 'Ska-p', '4:37', '9673', '1996-03-01 00:00:00.000000', 'https://images.app.goo.gl/iLbp7BdQAjdu6KTu7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
