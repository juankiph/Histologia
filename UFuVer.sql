-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 16-02-2017 a las 17:39:37
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `UFuber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE `coche` (
  `id_coche` int(128) NOT NULL,
  `marca` varchar(128) COLLATE utf8_bin NOT NULL,
  `modelo` varchar(128) COLLATE utf8_bin NOT NULL,
  `color` varchar(128) COLLATE utf8_bin NOT NULL,
  `antiguedad` int(128) NOT NULL,
  `capacidad` int(128) NOT NULL,
  `foto` varchar(128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`id_coche`, `marca`, `modelo`, `color`, `antiguedad`, `capacidad`, `foto`) VALUES
(1, 'ferrrari', 'testarosa', 'rojo', 2008, 2, NULL),
(2, 'ferrrari', 'testarosa', 'rojo', 2008, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_conductor` int(128) NOT NULL,
  `nombre` varchar(128) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `foto` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `edad` int(128) NOT NULL,
  `fuma` tinyint(1) NOT NULL,
  `habla` tinyint(1) NOT NULL,
  `musica` tinyint(1) NOT NULL,
  `nobel` tinyint(1) NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_conductor`, `nombre`, `apellido`, `email`, `foto`, `edad`, `fuma`, `habla`, `musica`, `nobel`, `password`) VALUES
(1, 'juan', 'perez', 'sfgiyaf@dnsdv.com', '1', 26, 1, 1, 1, 0, '1234'),
(2, 'manolo', 'sanchez', 'lopez', '2', 19, 1, 0, 0, 1, '1234'),
(3, 'esther', 'barroso', 'diaz', '3', 99, 0, 1, 0, 1, '1234'),
(4, 'esther', 'barroso', 'diaz', '4', 99, 0, 1, 0, 1, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

CREATE TABLE `pasajero` (
  `id_pasajero` int(128) NOT NULL,
  `nombre` varchar(128) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(128) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `foto` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `tipo` tinyint(1) NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pasajero`
--

INSERT INTO `pasajero` (`id_pasajero`, `nombre`, `apellido`, `email`, `foto`, `tipo`, `password`) VALUES
(1, 'lola', 'tetona', 'djvbdf', NULL, 1, '1234'),
(2, 'lola', 'tetona', 'djvbdf', NULL, 1, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `id_viaje` int(128) NOT NULL,
  `id_conductor` int(128) NOT NULL,
  `id_pasajero` int(128) NOT NULL,
  `id_coche` int(128) NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime NOT NULL,
  `origen` varchar(128) COLLATE utf8_bin NOT NULL,
  `destino` varchar(128) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`id_viaje`, `id_conductor`, `id_pasajero`, `id_coche`, `fecha`, `hora`, `origen`, `destino`) VALUES
(3, 1, 1, 1, '2017-02-13', '2017-02-13 00:00:00', 'UFV', 'Carabanchel alto'),
(5, 2, 1, 2, '2017-02-16', '2017-02-23 11:32:00', 'Aravaca', 'UFV'),
(6, 3, 1, 1, '2017-02-25', '2017-02-16 17:35:00', 'UFV', 'POLONIA'),
(9, 4, 2, 2, '2017-02-15', '2017-02-23 19:00:00', 'UFV', 'Cuzco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coche`
--
ALTER TABLE `coche`
  ADD PRIMARY KEY (`id_coche`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_conductor`);

--
-- Indices de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`id_pasajero`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`id_viaje`),
  ADD KEY `id_conductor` (`id_conductor`),
  ADD KEY `id_pasajero` (`id_pasajero`),
  ADD KEY `id_coche` (`id_coche`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coche`
--
ALTER TABLE `coche`
  MODIFY `id_coche` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_conductor` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  MODIFY `id_pasajero` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `id_viaje` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`id_conductor`) REFERENCES `conductor` (`id_conductor`),
  ADD CONSTRAINT `viaje_ibfk_2` FOREIGN KEY (`id_pasajero`) REFERENCES `pasajero` (`id_pasajero`),
  ADD CONSTRAINT `viaje_ibfk_3` FOREIGN KEY (`id_coche`) REFERENCES `coche` (`id_coche`);