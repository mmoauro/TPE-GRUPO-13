-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 21:36:20
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_centro_acopio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartonero`
--

INSERT INTO `cartonero` (`id`, `nombre`, `apellido`, `dni`, `direccion`, `fecha_nacimiento`) VALUES
(0, 'vecino buena onda', '', 0, '', '0000-00-00'),
(3, 'raul', 'medina', 2040201, 'Rebol 667', '1993-10-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_solicitud`
--

CREATE TABLE `imagen_solicitud` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_solicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Aluminio', ''),
(2, 'madera', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesaje`
--

CREATE TABLE `pesaje` (
  `id` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `id_cartonero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pesaje`
--

INSERT INTO `pesaje` (`id`, `peso`, `id_material`, `id_cartonero`) VALUES
(1, 10, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_retiro`
--

CREATE TABLE `solicitud_retiro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `franja_horaria` varchar(15) NOT NULL,
  `volumen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud_retiro`
--

INSERT INTO `solicitud_retiro` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `franja_horaria`, `volumen`) VALUES
(4, 'Fermin', 'Medina', 'Colombia', 2147483647, '9 a 12hs', 'Entra en una caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contrasenia` varchar(60) NOT NULL,
  `rol` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen_solicitud`
--
ALTER TABLE `imagen_solicitud`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_SOLICITUD` (`id_solicitud`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pesaje`
--
ALTER TABLE `pesaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_material` (`id_material`),
  ADD KEY `id_cartonero` (`id_cartonero`);

--
-- Indices de la tabla `solicitud_retiro`
--
ALTER TABLE `solicitud_retiro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `imagen_solicitud`
--
ALTER TABLE `imagen_solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pesaje`
--
ALTER TABLE `pesaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitud_retiro`
--
ALTER TABLE `solicitud_retiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen_solicitud`
--
ALTER TABLE `imagen_solicitud`
  ADD CONSTRAINT `FK_SOLICITUD` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud_retiro` (`id`);

--
-- Filtros para la tabla `pesaje`
--
ALTER TABLE `pesaje`
  ADD CONSTRAINT `pesaje_ibfk_1` FOREIGN KEY (`id_cartonero`) REFERENCES `cartonero` (`id`),
  ADD CONSTRAINT `pesaje_ibfk_2` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
