-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 05:35:45
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aeropuerto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avion`
--

CREATE TABLE `avion` (
  `id` int(25) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `opinion` text NOT NULL,
  `recomendacion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `avion`
--

INSERT INTO `avion` (`id`, `nombre`, `email`, `calificacion`, `opinion`, `recomendacion`) VALUES
(1, 'ruby', 'rubyangelicadav', 10, 'ESTA GENIAL', 'no'),
(2, 'maria', 'maria@gmail.com', 10, 'ESTA GENIAL', 'si'),
(3, 'ruby', 'angela@gmail.co', 9, 'me gusto', 'si'),
(4, 'carlos', 'carlos@gmail.co', 4, 'no me gusto', 'no'),
(5, 'paris', 'grecia@gmail.co', 7, 'no hay papel en el baño', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avion`
--
ALTER TABLE `avion`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
