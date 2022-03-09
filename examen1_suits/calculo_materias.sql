-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2022 a las 21:55:25
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calculo_materias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materias` int(11) NOT NULL,
  `sueldo` varchar(10) NOT NULL,
  `edad` varchar(3) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `antiguedad` varchar(20) DEFAULT NULL,
  `php` tinyint(1) NOT NULL,
  `asp` tinyint(1) NOT NULL,
  `vb` tinyint(1) NOT NULL,
  `java` tinyint(1) NOT NULL,
  `oracle` tinyint(1) NOT NULL,
  `bd` tinyint(1) NOT NULL,
  `bono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
