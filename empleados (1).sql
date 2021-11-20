-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 06:38:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id` int(2) NOT NULL,
  `Apellido paterno` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido materno` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre(s)` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha de nacimiento` date NOT NULL,
  `Curp` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id`, `Apellido paterno`, `Apellido materno`, `Nombre(s)`, `Fecha de nacimiento`, `Curp`) VALUES
(2, 'Aguilar', 'Alvarez', 'Renata', '1992-09-14', 'AUAR920914MCHGLN32'),
(3, 'Amador', 'Bautista', 'Olivia', '1999-02-12', 'AABO990212MCHMTL45'),
(4, 'Beltran', 'De la cruz', 'Lucy Eleanor', '1989-04-19', 'BEDL890419MCHLLC18'),
(6, 'Esparza', 'Espinoza', 'Mateo Javier', '1997-06-12', 'EAEM970612HCHSST87'),
(7, 'Carrillo', 'Cárdenas', 'Miguel', '1995-03-10', 'CACM950310HCHRÁG46'),
(8, 'Castillo', 'Perez', 'Jamila', '2004-10-12', 'CAPJ041012MCHSRMA6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
