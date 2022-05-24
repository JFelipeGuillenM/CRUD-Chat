-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 24-05-2022 a las 18:05:30
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbotcrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `IdBitacora` int(11) NOT NULL,
  `UsuarioIngId` varchar(50) NOT NULL,
  `FechaIng` varchar(50) NOT NULL,
  `Ip` varchar(50) DEFAULT NULL,
  `IngresoExitoso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`IdBitacora`, `UsuarioIngId`, `FechaIng`, `Ip`, `IngresoExitoso`) VALUES
(72, 'administrador', '05-24-2022 10:43:05 am', '190.110.47.13', 1),
(73, 'admintester', '05-24-2022 11:04:32 am', '190.110.47.13', 1),
(74, 'admintester', '05-24-2022 11:04:52 am', '190.110.47.13', 0),
(75, 'administrador', '05-24-2022 11:05:04 am', '190.110.47.13', 0),
(76, 'administrador', '05-24-2022 11:05:11 am', '190.110.47.13', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`IdBitacora`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `IdBitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
