-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 09:27:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eonluxantiques`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido_1` varchar(50) NOT NULL,
  `Apellido_2` varchar(50) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Sexo` varchar(6) DEFAULT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Pais` varchar(60) NOT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `Prefijo` varchar(4) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(15) NOT NULL,
  `Notis` tinyint(1) NOT NULL,
  `Revista` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `Tipo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prefijo`
--

CREATE TABLE `prefijo` (
  `Prefijo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `Sexo_FK` (`Sexo`),
  ADD KEY `Pais_FK` (`Pais`),
  ADD KEY `Prefijo_FK` (`Prefijo`),
  ADD KEY `Email_FK` (`Email`),
  ADD KEY `Contrasena_FK` (`Contrasena`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`Tipo`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `prefijo`
--
ALTER TABLE `prefijo`
  ADD PRIMARY KEY (`Prefijo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Email` (`Email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Contrasena_FK` FOREIGN KEY (`Contrasena`) REFERENCES `usuario` (`Email`),
  ADD CONSTRAINT `Email_FK` FOREIGN KEY (`Email`) REFERENCES `usuario` (`Email`),
  ADD CONSTRAINT `Pais_FK` FOREIGN KEY (`Pais`) REFERENCES `pais` (`Nombre`),
  ADD CONSTRAINT `Prefijo_FK` FOREIGN KEY (`Prefijo`) REFERENCES `prefijo` (`Prefijo`),
  ADD CONSTRAINT `Sexo_FK` FOREIGN KEY (`Sexo`) REFERENCES `genero` (`Tipo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Mail_FK` FOREIGN KEY (`Email`) REFERENCES `cliente` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
