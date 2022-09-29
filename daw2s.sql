-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 14:26:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw2s`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `daw2s`
--

CREATE TABLE `daw2s` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` int(50) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `daw2s`
--

INSERT INTO `daw2s` (`id`, `nombre`, `codigo`, `cantidad`, `empresa`, `descripcion`) VALUES
(17, 'nitro5', 56547, 45, 'acer', 'potencia'),
(18, 'nitro5', 56547, 6, 'acer', 'potencia'),
(19, 'nitro5', 56547, 6, 'acer', 'potencia'),
(20, 'samsung galaxy s22', 436, 34, 'samsung', 'potencia'),
(21, 'nitro5', 56547, 568, 'acer', 'potencia'),
(22, 'g', 0, 4, 'dgfgdgf', 'argdfhfd'),
(23, 'chevrolet camaro ZL1', 345435646, 3, 'chevrolet', 'v8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `daw2s`
--
ALTER TABLE `daw2s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `daw2s`
--
ALTER TABLE `daw2s`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
