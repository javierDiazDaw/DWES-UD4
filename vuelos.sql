-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-10-2021 a las 14:29:15
-- Versión del servidor: 8.0.26-0ubuntu0.20.04.2
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciaviajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id` int NOT NULL,
  `Origen` text COLLATE utf8mb4_general_ci NOT NULL,
  `Destino` text COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Companya` text COLLATE utf8mb4_general_ci NOT NULL,
  `Modeloavion` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id`, `Origen`, `Destino`, `Fecha`, `Companya`, `Modeloavion`) VALUES
(1, 'Sevilla', 'Madrid', '2021-10-22 13:44:54', 'Ryanair', 'A320'),
(2, 'Sevilla', 'Madrid', '2021-10-22 13:44:54', 'Ryanair', 'A320'),
(3, 'Cadiz', 'Galicia', '2021-10-11 14:04:00', 'Iberia', 'A435'),
(4, 'Cadiz', 'Galicia', '2021-10-11 14:04:00', 'Iberia', 'A435'),
(5, 'Barcelona', 'Madrid', '2021-10-26 14:10:47', 'Singapore Airlines', 'A4578'),
(6, 'Cantabria', 'Islas Baleares', '2021-12-15 14:12:23', 'EVA Air', 'A568'),
(7, 'Madrid', 'Cordoba', '2022-03-17 14:13:23', 'Cathay Pacific Airways', 'A860'),
(8, 'Valencia', 'CiudadReal', '2021-10-24 14:14:07', 'Qantas Airways', 'A346'),
(9, 'Caceres', 'Asturias', '2021-10-12 14:15:20', 'ANA All', 'A385'),
(10, 'Vitoria', 'Albacete', '2022-04-13 14:16:07', 'Iberia', 'A428'),
(11, 'Albacete', 'Bilbao', '2021-10-11 14:19:17', 'Iberia', 'A356'),
(12, 'Almeria', 'Badajoz', '2022-01-12 14:20:33', 'TAME', 'A359');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
