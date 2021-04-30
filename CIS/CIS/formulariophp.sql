-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-07-2020 a las 15:51:01
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulariophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE `leads` (
  `id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoM` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consulta` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `nombre`, `apellidoP`, `apellidoM`, `celular`, `dni`, `correo`, `campus`, `curso`, `consulta`) VALUES
(1, 'Luis ismael', 'Flores ', 'Huamán', '985103373', '77487865', 'luis.ifh12@gmail.com', 'Chepén', 'Computación l', 'Quiero mas informacion acerca de este programa , contactarme'),
(2, 'Luis', 'Flores', 'Huaman', '985103735', '77487865', 'luis.ifh12@gmail.com', 'Callao', 'Computación lll', 'Holaa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
