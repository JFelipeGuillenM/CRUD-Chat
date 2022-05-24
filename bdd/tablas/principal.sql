-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 24-05-2022 a las 07:15:55
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
-- Estructura de tabla para la tabla `principal`
--

CREATE TABLE `principal` (
  `IdPrincipal` int(11) NOT NULL,
  `IdTipo` int(11) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Padre` int(11) DEFAULT NULL,
  `Contenido` varchar(500) DEFAULT NULL,
  `Conector` varchar(255) NOT NULL,
  `Estado` int(1) NOT NULL,
  `FechaMod` varchar(55) NOT NULL,
  `HoraMod` varchar(55) NOT NULL,
  `UsuarioModId` varchar(55) NOT NULL,
  `Ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `principal`
--

INSERT INTO `principal` (`IdPrincipal`, `IdTipo`, `Nombre`, `Padre`, `Contenido`, `Conector`, `Estado`, `FechaMod`, `HoraMod`, `UsuarioModId`, `Ip`) VALUES
(1, 1, 'Saludo', 0, '😀 😀 Hola, presiona este mensaje si necesitas ayuda', 'Será un gusto ayudarte, ¿sobre qué es tu consulta?', 1, '0000-00-00', '00:00:00', '0', '0'),
(122, 2, 'Op.1 Pregunta 1', 1, 'Vinculacion con la sociedad', 'Estás buscando:', 1, '0000-00-00', '00:00:00', '0', '0'),
(123, 2, 'Op.2 Pregunta 1	', 1, 'Bienestar - vinculación', 'Estás buscando:', 1, '0000-00-00', '00:00:00', '0', '0'),
(124, 2, 'Respuesta pregunta vinculación', 122, 'vinculacion con personas', 'asdsad', 1, '0000-00-00', '00:00:00', '0', '0'),
(138, 1, 'otra pregunta', 1, 'ascxzzczxcxz', 'prueba editar', 1, '2022-05-24', '05:40:49', 'administrador', ''),
(147, 2, 'csdabdfnasdfa', 1, 'asdvasdbadfbasdvasdrfbad', 'asdfbsdgnadfbadrard', 0, '2022-05-24', '04:03:48', 'administrador', '190.110.47.13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`IdPrincipal`),
  ADD KEY `principal_ibfk_1` (`IdTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `principal`
--
ALTER TABLE `principal`
  MODIFY `IdPrincipal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `principal`
--
ALTER TABLE `principal`
  ADD CONSTRAINT `principal_ibfk_1` FOREIGN KEY (`IdTipo`) REFERENCES `tipo` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
