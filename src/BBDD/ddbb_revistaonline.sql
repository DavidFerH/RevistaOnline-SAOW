-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2023 a las 20:04:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ddbb_revistaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `COD_ART` int(11) NOT NULL,
  `TITULO` varchar(150) NOT NULL,
  `CONTENIDO` varchar(10000) NOT NULL,
  `COD_REV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`COD_ART`, `TITULO`, `CONTENIDO`, `COD_REV`) VALUES
(19, 'Articulo de prueba 1', 'Articulo de prueba 1', 5),
(20, 'Articulo de prueba 2', 'Este es otro artículo de prueba para la app web hecha con PHP para la asignatura de SAOW', 5),
(28, 'Aston Martin ilegal', 'Es ilegalisimo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `DNI` varchar(9) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`DNI`, `NOMBRE`, `APELLIDOS`, `DESCRIPCION`) VALUES
('71185239D', 'David', 'Ferrero Herrera', 'Soy el autor de prueba'),
('87654123F', 'Fernando', 'Alonso', 'El nano ae');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_articulos`
--

CREATE TABLE `autor_articulos` (
  `DNI` varchar(9) NOT NULL,
  `COD_ART` int(11) NOT NULL,
  `FECHA_PUB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor_articulos`
--

INSERT INTO `autor_articulos` (`DNI`, `COD_ART`, `FECHA_PUB`) VALUES
('71185239D', 28, '2023-02-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revistas`
--

CREATE TABLE `revistas` (
  `COD_REV` int(11) NOT NULL,
  `TITULO` varchar(150) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `EDITORIAL` varchar(150) NOT NULL,
  `FECHA` date NOT NULL,
  `PORTADA` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `revistas`
--

INSERT INTO `revistas` (`COD_REV`, `TITULO`, `NUMERO`, `EDITORIAL`, `FECHA`, `PORTADA`) VALUES
(5, 'Revista de prueba 1', 1, 'ACME', '2023-02-21', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`COD_ART`),
  ADD KEY `FK_COD_REV` (`COD_REV`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `autor_articulos`
--
ALTER TABLE `autor_articulos`
  ADD PRIMARY KEY (`DNI`,`COD_ART`),
  ADD KEY `FK_COD_ART` (`COD_ART`),
  ADD KEY `FK_DNI` (`DNI`);

--
-- Indices de la tabla `revistas`
--
ALTER TABLE `revistas`
  ADD PRIMARY KEY (`COD_REV`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `COD_ART` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `revistas`
--
ALTER TABLE `revistas`
  MODIFY `COD_REV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `FK_COD_REV` FOREIGN KEY (`COD_REV`) REFERENCES `revistas` (`COD_REV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autor_articulos`
--
ALTER TABLE `autor_articulos`
  ADD CONSTRAINT `FK_COD_ART` FOREIGN KEY (`COD_ART`) REFERENCES `articulos` (`COD_ART`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DNI` FOREIGN KEY (`DNI`) REFERENCES `autor` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
