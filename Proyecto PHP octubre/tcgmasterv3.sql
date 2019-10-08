-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2019 a las 17:07:47
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tcgmasterv3`
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
(4, 'Core');

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
(1, 'Dark Magician', 1, 'Mago oscuro de Structure Deck, rarera common', 50, 2, 'mago.jpg', 1);

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
(2, 'Jujuy'),
(3, 'Mendoza'),
(4, 'Rio Negro'),
(5, 'La Pampa'),
(6, 'Salta');

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
(3, 'madMax', 'Perez', 'Martin', 2, 'madmax@gmail.com', '123456');

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
  ADD PRIMARY KEY (`provincia_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usr_alias` (`usr_alias`),
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
  MODIFY `cat_id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `provincia_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

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
