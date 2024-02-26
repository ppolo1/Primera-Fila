-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 12:52:43
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
  `nombre` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `genero` varchar(6) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `telefono` int(9) DEFAULT NULL,
  `prefijo` varchar(4) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  `notis` tinyint(1) NOT NULL,
  `revista` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `tipo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`nombre`) VALUES
('Afganistán'),
('Albania'),
('Alemania'),
('Andorra'),
('Angola'),
('Anguilla'),
('Antártida'),
('Antigua y Barbuda'),
('Antillas Holandesas'),
('Arabia Saudí'),
('Argelia'),
('Argentina'),
('Armenia'),
('Aruba'),
('Australia'),
('Austria'),
('Azerbaiyán'),
('Bahamas'),
('Bahrein'),
('Bangladesh'),
('Barbados'),
('Bélgica'),
('Belice'),
('Benin'),
('Bermudas'),
('Bielorrusia'),
('Birmania'),
('Bolivia'),
('Bosnia y Herzegovina'),
('Botswana'),
('Brasil'),
('Brunei'),
('Bulgaria'),
('Burkina Faso'),
('Burundi'),
('Bután'),
('Cabo Verde'),
('Camboya'),
('Camerún'),
('Canadá'),
('Chad'),
('Chile'),
('China'),
('Chipre'),
('Ciudad del Vaticano (Santa Sede)'),
('Colombia'),
('Comores'),
('Congo'),
('Congo, República Democrática del'),
('Corea'),
('Corea del Norte'),
('Costa de Marfíl'),
('Costa Rica'),
('Croacia (Hrvatska)'),
('Cuba'),
('Dinamarca'),
('Djibouti'),
('Dominica'),
('Ecuador'),
('Egipto'),
('El Salvador'),
('Emiratos Árabes Unidos'),
('Eritrea'),
('Eslovenia'),
('España'),
('Estados Unidos'),
('Estonia'),
('Etiopía'),
('Fiji'),
('Filipinas'),
('Finlandia'),
('Francia'),
('Gabón'),
('Gambia'),
('Georgia'),
('Ghana'),
('Gibraltar'),
('Granada'),
('Grecia'),
('Groenlandia'),
('Guadalupe'),
('Guam'),
('Guatemala'),
('Guayana'),
('Guayana Francesa'),
('Guinea'),
('Guinea Ecuatorial'),
('Guinea-Bissau'),
('Haití'),
('Honduras'),
('Hungría'),
('India'),
('Indonesia'),
('Irak'),
('Irán'),
('Irlanda'),
('Isla Bouvet'),
('Isla de Christmas'),
('Islandia'),
('Islas Caimán'),
('Islas Cook'),
('Islas de Cocos o Keeling'),
('Islas Faroe'),
('Islas Heard y McDonald'),
('Islas Malvinas'),
('Islas Marianas del Norte'),
('Islas Marshall'),
('Islas menores de Estados Unidos'),
('Islas Palau'),
('Islas Salomón'),
('Islas Svalbard y Jan Mayen'),
('Islas Tokelau'),
('Islas Turks y Caicos'),
('Islas Vírgenes (EEUU)'),
('Islas Vírgenes (Reino Unido)'),
('Islas Wallis y Futuna'),
('Israel'),
('Italia'),
('Jamaica'),
('Japón'),
('Jordania'),
('Kazajistán'),
('Kenia'),
('Kirguizistán'),
('Kiribati'),
('Kuwait'),
('Laos'),
('Lesotho'),
('Letonia'),
('Líbano'),
('Liberia'),
('Libia'),
('Liechtenstein'),
('Lituania'),
('Luxemburgo'),
('Macedonia, Ex-República Yugoslava de'),
('Madagascar'),
('Malasia'),
('Malawi'),
('Maldivas'),
('Malí'),
('Malta'),
('Marruecos'),
('Martinica'),
('Mauricio'),
('Mauritania'),
('Mayotte'),
('México'),
('Micronesia'),
('Moldavia'),
('Mónaco'),
('Mongolia'),
('Montserrat'),
('Mozambique'),
('Namibia'),
('Nauru'),
('Nepal'),
('Nicaragua'),
('Níger'),
('Nigeria'),
('Niue'),
('Norfolk'),
('Noruega'),
('Nueva Caledonia'),
('Nueva Zelanda'),
('Omán'),
('Países Bajos'),
('Panamá'),
('Papúa Nueva Guinea'),
('Paquistán'),
('Paraguay'),
('Perú'),
('Pitcairn'),
('Polinesia Francesa'),
('Polonia'),
('Portugal'),
('Puerto Rico'),
('Qatar'),
('Reino Unido'),
('República Centroafricana'),
('República Checa'),
('República de Sudáfrica'),
('República Dominicana'),
('República Eslovaca'),
('Reunión'),
('Ruanda'),
('Rumania'),
('Rusia'),
('Sahara Occidental'),
('Saint Kitts y Nevis'),
('Samoa'),
('Samoa Americana'),
('San Marino'),
('San Vicente y Granadinas'),
('Santa Helena'),
('Santa Lucía'),
('Santo Tomé y Príncipe'),
('Senegal'),
('Seychelles'),
('Sierra Leona'),
('Singapur'),
('Siria'),
('Somalia'),
('Sri Lanka'),
('St Pierre y Miquelon'),
('Suazilandia'),
('Sudán'),
('Suecia'),
('Suiza'),
('Surinam'),
('Tailandia'),
('Taiwán'),
('Tanzania'),
('Tayikistán'),
('Territorios franceses del Sur'),
('Timor Oriental'),
('Togo'),
('Tonga'),
('Trinidad y Tobago'),
('Túnez'),
('Turkmenistán'),
('Turquía'),
('Tuvalu'),
('Ucrania'),
('Uganda'),
('Uruguay'),
('Uzbekistán'),
('Vanuatu'),
('Venezuela'),
('Vietnam'),
('Yemen'),
('Yugoslavia'),
('Zambia'),
('Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prefijo`
--

CREATE TABLE `prefijo` (
  `prefijo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `Sexo_FK` (`genero`),
  ADD KEY `Pais_FK` (`pais`),
  ADD KEY `Prefijo_FK` (`prefijo`),
  ADD KEY `Email_FK` (`email`),
  ADD KEY `Contrasena_FK` (`contrasena`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `prefijo`
--
ALTER TABLE `prefijo`
  ADD PRIMARY KEY (`prefijo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`),
  ADD KEY `Email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `Sexo_FK` FOREIGN KEY (`genero`) REFERENCES `genero` (`Tipo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Mail_FK` FOREIGN KEY (`Email`) REFERENCES `cliente` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
