-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 19:28:57
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
  `prefijo` varchar(10) DEFAULT NULL,
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
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `nombre` varchar(60) NOT NULL,
  `prefijo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`nombre`, `prefijo`) VALUES
('Afganistán', '+93'),
('Albania', '+355'),
('Alemania', '+49'),
('Algeria', '+213'),
('Andorra', '+376'),
('Angola', '+244'),
('Anguila', '+1 264'),
('Antártida', '+672'),
('Antigua y Barbuda', '+1 268'),
('Antillas Neerlandesas', '+599'),
('Arabia Saudita', '+966'),
('Argentina', '+54'),
('Armenia', '+374'),
('Aruba', '+297'),
('Australia', '+61'),
('Austria', '+43'),
('Azerbaiyán', '+994'),
('Bahamas', '+1 242'),
('Bahrein', '+973'),
('Bangladesh', '+880'),
('Barbados', '+1 246'),
('Bélgica', '+32'),
('Belice', '+501'),
('Benín', '+229'),
('Bhután', '+975'),
('Bielorrusia', '+375'),
('Birmania', '+95'),
('Bolivia', '+591'),
('Bosnia y Herzegovina', '+387'),
('Botsuana', '+267'),
('Brasil', '+55'),
('Brunéi', '+673'),
('Bulgaria', '+359'),
('Burkina Faso', '+226'),
('Burundi', '+257'),
('Cabo Verde', '+238'),
('Camboya', '+855'),
('Camerún', '+237'),
('Canadá', '+1'),
('Chad', '+235'),
('Chile', '+56'),
('China', '+86'),
('Chipre', '+357'),
('Ciudad del Vaticano', '+39'),
('Colombia', '+57'),
('Comoras', '+269'),
('Congo', '+242'),
('Congo', '+243'),
('Corea del Norte', '+850'),
('Corea del Sur', '+82'),
('Costa de Marfil', '+225'),
('Costa Rica', '+506'),
('Croacia', '+385'),
('Cuba', '+53'),
('Dinamarca', '+45'),
('Dominica', '+1 767'),
('Ecuador', '+593'),
('Egipto', '+20'),
('El Salvador', '+503'),
('Emiratos Árabes Unidos', '+971'),
('Eritrea', '+291'),
('Eslovaquia', '+421'),
('Eslovenia', '+386'),
('España', '+34'),
('Estados Unidos de América', '+1'),
('Estonia', '+372'),
('Etiopía', '+251'),
('Filipinas', '+63'),
('Finlandia', '+358'),
('Fiyi', '+679'),
('Francia', '+33'),
('Gabón', '+241'),
('Gambia', '+220'),
('Georgia', '+995'),
('Ghana', '+233'),
('Gibraltar', '+350'),
('Granada', '+1 473'),
('Grecia', '+30'),
('Groenlandia', '+299'),
('Guadalupe', ''),
('Guam', '+1 671'),
('Guatemala', '+502'),
('Guayana Francesa', ''),
('Guernsey', ''),
('Guinea', '+224'),
('Guinea Ecuatorial', '+240'),
('Guinea-Bissau', '+245'),
('Guyana', '+592'),
('Haití', '+509'),
('Honduras', '+504'),
('Hong Kong', '+852'),
('Hungría', '+36'),
('India', '+91'),
('Indonesia', '+62'),
('Irak', '+964'),
('Irán', '+98'),
('Irlanda', '+353'),
('Isla Bouvet', ''),
('Isla de Man', '+44'),
('Isla de Navidad', '+61'),
('Isla Norfolk', ''),
('Islandia', '+354'),
('Islas Bermudas', '+1 441'),
('Islas Caimán', '+1 345'),
('Islas Cocos (Keeling)', '+61'),
('Islas Cook', '+682'),
('Islas de Åland', ''),
('Islas Feroe', '+298'),
('Islas Georgias del Sur y Sandwich del Sur', ''),
('Islas Heard y McDonald', ''),
('Islas Maldivas', '+960'),
('Islas Malvinas', '+500'),
('Islas Marianas del Norte', '+1 670'),
('Islas Marshall', '+692'),
('Islas Pitcairn', '+870'),
('Islas Salomón', '+677'),
('Islas Turcas y Caicos', '+1 649'),
('Islas Ultramarinas Menores de Estados Unidos', ''),
('Islas Vírgenes Británicas', '+1 284'),
('Islas Vírgenes de los Estados Unidos', '+1 340'),
('Israel', '+972'),
('Italia', '+39'),
('Jamaica', '+1 876'),
('Japón', '+81'),
('Jersey', ''),
('Jordania', '+962'),
('Kazajistán', '+7'),
('Kenia', '+254'),
('Kirguistán', '+996'),
('Kiribati', '+686'),
('Kuwait', '+965'),
('Laos', '+856'),
('Lesoto', '+266'),
('Letonia', '+371'),
('Líbano', '+961'),
('Liberia', '+231'),
('Libia', '+218'),
('Liechtenstein', '+423'),
('Lituania', '+370'),
('Luxemburgo', '+352'),
('Macao', '+853'),
('Macedonia', '+389'),
('Madagascar', '+261'),
('Malasia', '+60'),
('Malawi', '+265'),
('Mali', '+223'),
('Malta', '+356'),
('Marruecos', '+212'),
('Martinica', ''),
('Mauricio', '+230'),
('Mauritania', '+222'),
('Mayotte', '+262'),
('México', '+52'),
('Micronesia', '+691'),
('Moldavia', '+373'),
('Mónaco', '+377'),
('Mongolia', '+976'),
('Montenegro', '+382'),
('Montserrat', '+1 664'),
('Mozambique', '+258'),
('Namibia', '+264'),
('Nauru', '+674'),
('Nepal', '+977'),
('Nicaragua', '+505'),
('Níger', '+227'),
('Nigeria', '+234'),
('Niue', '+683'),
('Noruega', '+47'),
('Nueva Caledonia', '+687'),
('Nueva Zelanda', '+64'),
('Omán', '+968'),
('Países Bajos', '+31'),
('Pakistán', '+92'),
('Palaos', '+680'),
('Palestina', ''),
('Panamá', '+507'),
('Papúa Nueva Guinea', '+675'),
('Paraguay', '+595'),
('Perú', '+51'),
('Polinesia Francesa', '+689'),
('Polonia', '+48'),
('Portugal', '+351'),
('Puerto Rico', '+1'),
('Qatar', '+974'),
('Reino Unido', '+44'),
('República Centroafricana', '+236'),
('República Checa', '+420'),
('República Dominicana', '+1 809'),
('Reunión', ''),
('Ruanda', '+250'),
('Rumanía', '+40'),
('Rusia', '+7'),
('Sahara Occidental', ''),
('Samoa', '+685'),
('Samoa Americana', '+1 684'),
('San Bartolomé', '+590'),
('San Cristóbal y Nieves', '+1 869'),
('San Marino', '+378'),
('San Martín (Francia)', '+1 599'),
('San Pedro y Miquelón', '+508'),
('San Vicente y las Granadinas', '+1 784'),
('Santa Elena', '+290'),
('Santa Lucía', '+1 758'),
('Santo Tomé y Príncipe', '+239'),
('Senegal', '+221'),
('Serbia', '+381'),
('Seychelles', '+248'),
('Sierra Leona', '+232'),
('Singapur', '+65'),
('Siria', '+963'),
('Somalia', '+252'),
('Sri Lanka', '+94'),
('Sudáfrica', '+27'),
('Sudán', '+249'),
('Suecia', '+46'),
('Suiza', '+41'),
('Surinam', '+597'),
('Svalbard y Jan Mayen', ''),
('Swazilandia', '+268'),
('Tailandia', '+66'),
('Taiwán', '+886'),
('Tanzania', '+255'),
('Tayikistán', '+992'),
('Territorio Británico del Océano Índico', ''),
('Territorios Australes y Antárticas Franceses', ''),
('Timor Oriental', '+670'),
('Togo', '+228'),
('Tokelau', '+690'),
('Tonga', '+676'),
('Trinidad y Tobago', '+1 868'),
('Túnez', '+216'),
('Turkmenistán', '+993'),
('Turquía', '+90'),
('Tuvalu', '+688'),
('Ucrania', '+380'),
('Uganda', '+256'),
('Uruguay', '+598'),
('Uzbekistán', '+998'),
('Vanuatu', '+678'),
('Venezuela', '+58'),
('Vietnam', '+84'),
('Wallis y Futuna', '+681'),
('Yemen', '+967'),
('Yibuti', '+253'),
('Zambia', '+260'),
('Zimbabue', '+263');

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
  `stock` int(11) NOT NULL
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
  ADD KEY `Email_FK` (`email`),
  ADD KEY `Contrasena_FK` (`contrasena`),
  ADD KEY `Pais_Fk` (`pais`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`nombre`,`prefijo`);

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
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
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
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `Pais_Fk` FOREIGN KEY (`pais`) REFERENCES `paises` (`nombre`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Mail_FK` FOREIGN KEY (`email`) REFERENCES `cliente` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
