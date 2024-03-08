-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2024 a las 21:29:13
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
  `contrasena` varchar(15) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `genero` varchar(6) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `telefono` int(9) DEFAULT NULL,
  `prefijo` varchar(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `subscripcion` tinyint(1) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `copiar_datos` AFTER INSERT ON `cliente` FOR EACH ROW INSERT INTO usuario(email, contrasena) 
VALUES (new.email, new.contrasena)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `tipo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`tipo`) VALUES
('Hombre'),
('Mujer');

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
  `categoria` varchar(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `categoria`, `imagen`, `stock`) VALUES
(1, 'Aparador castellano', 'Un aparador del siglo XIX de madera de pino', 2500, 'Mueble', 'mueble1.jpg', 0),
(2, 'Secreté Artesanal', 'Secreter hecho amano con madera de haya', 5000, 'Mueble', 'mueble2.jpg', 0),
(3, 'Secreté Escritorio', 'Secreter de pino que sirve para estudiar', 5150, 'Mueble', 'mueble3.jpg', 0),
(4, 'Taburete Rústico', 'Juego de dos taburetes de madera maciza', 850, 'Mueble', 'mueble4.jpg', 0),
(5, 'Mueble Chinero', 'Mueble de madera fabricado en China', 6500, 'Mueble', 'mueble5.jpg', 0),
(6, 'Mesilla de pino Rústica', 'Mesilla de pino', 670, 'Mueble', 'mueble6.jpg', 0),
(7, 'Plato antiguo', 'Plato de tiempos inmemoriables', 250, 'Decoracion', 'decoracion1.jpg', 0),
(8, 'Cibeles de resina', 'Estatuilla de la fuente de Cibeles', 125, 'Decoracion', 'decoracion2.jpg', 0),
(9, 'Busto águila', 'Busto de la cabeza de un águila real', 450, 'Decoracion', 'decoracion3.jpg', 0),
(10, 'Tribord Griego De Cerámica', 'Tribord griego antiguo bien conservado', 570, 'Decoracion', 'decoracion4.jpg', 0),
(11, 'Globo Terráqueo vintage', 'Globo terráqueo bastante antiguo pero funcional', 300, 'Decoracion', 'decoracion5.jpg', 0),
(12, 'Tetera de Latón', 'Una tetera de latón usable', 100, 'Decoracion', 'decoracion6.jpg', 0),
(13, 'Óleo sobre lienzo San Pedro', 'Cuadro óleo sobre lienzo de San Pedro', 7250, 'Arte', 'arte1.jpg', 0),
(14, 'Lamina Virgen y niño', 'Cuadro de la Virgen con el Niño', 1125, 'Arte', 'arte2.jpg', 0),
(15, 'Lamina Renacentista', 'Lamina renacentista de una mujer', 2450, 'Arte', 'arte3.jpg', 0),
(16, 'Racimo de Uvas', 'Cuadro de un racimo de uvas', 1970, 'Arte', 'arte4.jpg', 0),
(17, 'Oleografía de la Adoración', 'Óleo de la Adoración', 2700, 'Arte', 'arte5.jpg', 0),
(18, 'Paseo siglo XVIII', 'Cuadro de un paseo', 3000, 'Arte', 'arte6.jpg', 0),
(19, 'Mesa de Mármol', 'Lámpara con base de mármol', 250, 'Iluminacion', 'iluminacion1.jpg', 0),
(20, 'Redonda de Cerámica', 'Lámpara redonda con base de cerámica', 525, 'Iluminacion', 'iluminacion2.jpg', 0),
(21, 'Lámpara de Bronce', 'Lámpara con base de bronce ', 250, 'Iluminacion', 'iluminacion3.jpg', 0),
(22, 'Lámpara griega', 'Lámpara griega de cerámica', 450, 'Iluminacion', 'iluminacion4.jpg', 0),
(23, 'Antiguo Farol de Pared', 'Lampará antigua de pared', 140, 'Iluminacion', 'iluminacion5.jpg', 0),
(24, 'Farol de Bronce y Latón', 'Farol de pared de bronce y latón', 230, 'Iluminacion', 'iluminacion6.jpg', 0);

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
  ADD KEY `Pais_Fk` (`pais`),
  ADD KEY `contrasena` (`contrasena`);

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
  ADD PRIMARY KEY (`id_usuario`) USING BTREE,
  ADD KEY `Contrasena_FK` (`contrasena`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Contrasena_FK` FOREIGN KEY (`contrasena`) REFERENCES `cliente` (`contrasena`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
