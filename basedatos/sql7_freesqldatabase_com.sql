-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql7.freesqldatabase.com
-- Tiempo de generación: 07-11-2024 a las 15:38:23
-- Versión del servidor: 5.5.62-0ubuntu0.14.04.1
-- Versión de PHP: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sql7743089`
--
CREATE DATABASE IF NOT EXISTS `sql7743089` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql7743089`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sedes`
--

CREATE TABLE `Sedes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Horario` varchar(50) NOT NULL,
  `Direccion` text NOT NULL,
  `CodigoPostal` int(11) NOT NULL,
  `Localizacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Sedes`
--

INSERT INTO `Sedes` (`ID`, `Nombre`, `Horario`, `Direccion`, `CodigoPostal`, `Localizacion`) VALUES
(1, 'SedeMadrid', '09:00-17:00', 'Carr. Canada Real, 23, Vallecas, 28051 Madrid', 28051, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.627570441305!2d-3.5734332235499826!3d40.35060705966049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423b45fd0c1d4b%3A0x6af7b2639667aaf!2sCarr.%20Ca%C3%B1ada%20Real%2C%2023%2C%20Vallecas%2C%2028051%20Madrid!5e0!3m2!1ses!2ses!4v1729521897584!5m2!1ses!2ses\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, 'SedeBarcelona', '10:00-18:00', 'C. de Joaquin Costa, 33, Ciutat Vella, 08001 Barcelona', 8001, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.618593660553!2d2.163334876489125!3d41.382370596305606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f5158e62ab%3A0xb4098dba2151719c!2sC.%20de%20Joaqu%C3%ADn%20Costa%2C%2033%2C%20Ciutat%20Vella%2C%2008001%20Barcelona!5e0!3m2!1ses!2ses!4v1729521937935!5m2!1ses!2ses\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`ID`, `Nombre`, `Contrasena`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Sedes`
--
ALTER TABLE `Sedes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Sedes`
--
ALTER TABLE `Sedes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
