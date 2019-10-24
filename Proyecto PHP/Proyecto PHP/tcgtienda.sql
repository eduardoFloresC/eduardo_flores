-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2019 a las 04:14:18
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tcgtienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_productos`
--

CREATE TABLE `categorias_productos` (
  `cat_id` tinyint(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_productos`
--

INSERT INTO `categorias_productos` (`cat_id`, `nombre_categoria`) VALUES
(1, 'Monstruo'),
(2, 'Magia'),
(3, 'Trampa'),
(4, 'Core'),
(5, 'Playmat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `prod_id` int(11) NOT NULL,
  `prod_nombre` varchar(50) NOT NULL,
  `prod_cantidad` smallint(6) NOT NULL,
  `prod_descripcion` varchar(200) NOT NULL,
  `prod_precio` smallint(6) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `prod_imagen` varchar(50) NOT NULL,
  `cat_id` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`prod_id`, `prod_nombre`, `prod_cantidad`, `prod_descripcion`, `prod_precio`, `usr_id`, `prod_imagen`, `cat_id`) VALUES
(1, 'Dark Magician', 1, 'Mago oscuro de Structure Deck, rareza common', 50, 2, 'mago.jpg', 1),
(2, 'Evilswarm Exciton Knight', 1, 'Evilswarm Exciton Knight, Secret de Megatin 2014', 250, 2, 'exciton.jpg', 1),
(3, 'Blue-Eyes White Dragon', 3, 'Dragon Blanco de Ojos Azules, estado 10/10.', 100, 8, 'blueyes.png', 1),
(4, 'Orgoth the Relentless', 1, 'Orgoth the Relentless, rareza Secret. Excelente estado.', 180, 2, 'orgoth.jpg', 1),
(5, 'Monster Reborn', 1, 'Monster Reborn, Lost Art, rareza ultra, estdo 10/10.', 1500, 2, 'reborn.jpg', 2),
(6, 'Raigeki', 2, 'Raigeki, rareza Secret.', 500, 3, 'raigeki.png', 2),
(7, 'Solemn Warning', 1, 'Solemn Warning, rareza Gold', 150, 8, 'warning.jpg', 3),
(8, 'Elemental HERO Flame Wingman', 1, 'HEROE Elemental Flame Wingman, rareza Rare.', 140, 2, 'flame.jpg', 1),
(9, 'Odd-Eyes Pendulum Dragon', 4, 'Odd--Eyes Pendulum Dragon, rareza Secret Platinum de Megatin 2016. Excelente estado.', 130, 3, 'odd.jpg', 1),
(10, 'Dark Magician Girl', 1, 'Dark Magician Girl, rareza Secret de Booster.', 200, 9, 'black_m_girl.jpg', 1),
(11, 'Kiwi Magician Girl', 2, 'Kiwi Magician Girl. rareza Gold.\r\nExcelente estado.', 90, 9, 'kiwi.jpg', 1),
(12, 'Apple Magician Girl', 3, 'Apple Magician Girl, rareza Super.', 50, 9, 'apple.jpg', 1),
(13, 'Dark Burning Attack', 1, 'Dark Burning Attack, rareza Secret, carta promo de Caja.', 120, 9, 'darkburning.png', 2),
(14, 'Palladium Oracle Mahad', 1, 'Palladium Oracle Mahad, rareza Ultra Rare. Edicion limitada.', 200, 9, 'mahad.jpg', 1),
(15, 'Stardust Dragon', 1, 'Dragon Polvo de Estrellas, rareza Super. Edicion Limitada.', 150, 11, 'stardust.jpg', 1),
(16, 'Playmat WCQ regional 2014, Gravekeeper', 1, 'Playmat WCQ de Regional 2014, excelente estado, sin uso. 10 de 10.', 1500, 9, 'playmatG.png', 5),
(17, 'Gagaga Cowboy', 1, 'Gagaga Cowboy Rareza Super.', 80, 10, 'cowboy.jpg', 1),
(18, 'Playmat Phantom Knights', 1, 'Playmat Phantom Knights de World Championshio Qualifier 2016, estado 7/10.', 1000, 13, 'playmatpk.webp', 5),
(19, 'compul', 2, 'com', 20, 2, 'compul.jpg', 3),
(20, 'Contrast HERO Chaos', 2, 'Contrast HERO Chaos, rareza Super.', 60, 2, 'chaosh.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `provincia_id` tinyint(4) NOT NULL,
  `nombre_provincia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`provincia_id`, `nombre_provincia`) VALUES
(1, 'Buenos Aires'),
(10, 'Catamarca'),
(7, 'Cordoba'),
(20, 'Formosa'),
(2, 'Jujuy'),
(5, 'La Pampa'),
(3, 'Mendoza'),
(19, 'Misiones'),
(4, 'Rio Negro'),
(6, 'Salta'),
(15, 'San Juan'),
(11, 'San Luis'),
(12, 'Santa Cruz'),
(8, 'Santa Fe'),
(13, 'Santiago Del Estero'),
(16, 'Tierra del Fuego'),
(9, 'Tucuman'),
(14, 'Usuhaia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_alias` varchar(50) NOT NULL,
  `usr_apellido` varchar(50) NOT NULL,
  `usr_nombre` varchar(50) NOT NULL,
  `provincia_id` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_alias`, `usr_apellido`, `usr_nombre`, `provincia_id`, `email`, `password`) VALUES
(2, 'edward', 'Flores', 'Eduardo', 1, 'x_edu88@hotmail.com', '1234'),
(3, 'madMax', 'Perez', 'Martin', 2, 'madmax@gmail.com', '123456'),
(4, 'tristan', 'Tobar', 'Tristan', 4, 'tristan.tobar@hotmail.com', 'kkkk'),
(7, 'admin', 'Fernandez', 'Diego', 1, 'fernandez@diego.com', 'admin'),
(8, 'leanbreak', 'Ojeda', 'Leandro', 1, 'leandro@gmail.com', '4321'),
(9, 'rose', 'Rosales', 'Claudia', 3, 'rosali@rose.com', 'rose'),
(10, 'serx', 'Cabrera', 'Sergio', 19, 'sergio@xer.com.ar', 'serx'),
(11, 'ryu', 'Hoshi', 'Ryu', 16, 'ryu@zen.com.ar', 'ken'),
(13, 'Alex', 'Cabrera', 'Alex', 1, 'alex@mimundo.com.ar', 'alex'),
(14, 'Loki', 'Mega', 'Bernard', 14, 'loki@lok.com', 'loki'),
(20, 'Pegasus', 'Pegasus', 'edward', 14, 'ilusion@empresa.com', 'jaja'),
(24, 'pepe', 'Martinez', 'Jose', 1, 'pepe@pepe.com.ar', 'pepe'),
(26, 'NEOS', 'Anderson', 'Neo', 19, 'matrix@matrix.com', 'matrix'),
(27, 'tupac', 'Amaru', 'tupac', 5, 'tuy@tuy.org', '9876');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_vendedor` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `cantidad` smallint(6) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_productos`
--
ALTER TABLE `categorias_productos`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `usr_id` (`usr_id`),
  ADD KEY `prod_categoria` (`cat_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`provincia_id`),
  ADD UNIQUE KEY `nombre_provincia` (`nombre_provincia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usr_alias` (`usr_alias`),
  ADD UNIQUE KEY `usr_alias_2` (`usr_alias`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_vendedor`),
  ADD UNIQUE KEY `id_comprador` (`id_comprador`),
  ADD KEY `id_vendedor` (`id_vendedor`,`id_comprador`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_productos`
--
ALTER TABLE `categorias_productos`
  MODIFY `cat_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `provincia_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `usuarios` (`usr_id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `categorias_productos` (`cat_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`provincia_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
