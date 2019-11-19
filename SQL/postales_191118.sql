-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 04:25:16
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `postales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_categoria` int(4) NOT NULL,
  `nombre_Categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionCategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `url_ImagenCateogria` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_categoria`, `nombre_Categoria`, `descripcionCategoria`, `url_ImagenCateogria`) VALUES
(1, 'Festividades', 'Descricpion Festividades', 'img/categorias/festividades.png'),
(2, 'Sentimientos', 'Descricpion Sentiminetos', 'img/categorias/festividades.png'),
(3, 'Invitaciones', 'Descripcion Invitaciones', 'img/categorias/festividades.png'),
(4, 'Cumpleaños', 'Descripcion Cumpleaños', 'img/categorias/festividades.png'),
(5, 'Variadas', 'Descirpcion Variadas', 'img/categorias/festividades.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postales`
--

CREATE TABLE `postales` (
  `ID_postal` bigint(6) NOT NULL,
  `id_categoria` int(4) NOT NULL,
  `nombre_postal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `vistas_postal` bigint(6) NOT NULL,
  `urlImagen` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `postales`
--
ALTER TABLE `postales`
  ADD PRIMARY KEY (`ID_postal`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_categoria` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `postales`
--
ALTER TABLE `postales`
  MODIFY `ID_postal` bigint(6) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postales`
--
ALTER TABLE `postales`
  ADD CONSTRAINT `postales_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`ID_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
