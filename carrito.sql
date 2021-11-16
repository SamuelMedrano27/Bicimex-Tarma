-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2021 a las 18:07:04
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` text NOT NULL,
  `apellido` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `celular` text CHARACTER SET swe7 NOT NULL,
  `mensaje` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `apellido`, `email`, `celular`, `mensaje`) VALUES
('Heimi', 'Mayta', 'samu100pre@gmail.com', '', ''),
('Heimi', 'Medrano\r\n', 'samu100pre@gmail.com', '', 'hola'),
('Heimi', 'Mayta', 'samu100pre@gmail.com', '', 'mongol'),
('Zarai', 'asfasf', 'afasfasf@hotmail.com', '', 'asfasfasfasf'),
('Zarai', 'asfasf', 'afasfasf@hotmail.com', '', 'asfasfasfasf'),
('Samuel', 'Mayta', 'samu100pre@gmail.com', '9865646431', 'asfasfasf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `coment` varchar(50) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`) VALUES
(1, 'Bicicleta MTB 26\"', 'Marco Dragón-\r\nAro Doble Pared 26\"-ACTION-\r\n18 Cambios-\r\nFreno Cromado(Qilong)-\r\nAsientos New Century-\r\nAro Doble Pared 26\"', 325, 'bicicleta26.jpg', 10),
(2, 'Bicicleta MTB REPLICA DE ALUMINIO 26\"', 'Marco REPLICA ALUMINIO-\r\nAro Doble Pared 26\"-ACTION-\r\n18 Cambios-\r\nFreno Cromado(Qilong)-\r\nAsientos New Century-\r\nAro Doble Pared 26\"', 375, 'bicireplica.jpg', 8),
(3, 'Asiento NEW CENTURY', 'Asiento 100% calidad -Cuero', 16, 'newcentury.jpg', 10),
(4, 'ARO ALUMINIO 7x24\" ', 'ARO SOLO ALUMINIO 7x24\"  ACTION', 25, 'aro24.jpg', 10),
(5, 'ARO DOBLE PARED  26\"', 'ARO DOBLE PARED COMPLETO 26 ACTION', 35, 'aro26a.jpg', 10),
(6, 'ARO  7x26\" ', 'ARO COMPLETO 7x26\" ACTION', 30, 'aro26s.jpg', 10),
(7, 'CABLE Y FUNDA DE FRENO ', 'CABLE Y FUNDA DE FRENO 1.5 x 1800MM ACTION', 4, 'cablefunda.jpg', 10),
(8, 'CADENA MTB  ', 'CADENA MTB 116 MAYA', 10, 'cadenamaya.jpg', 10),
(9, 'CADENA PASEO ', 'CADENA PASEO 114 MAYA', 8, 'cadenapaseo.jpg', 10),
(10, 'CATALINA TRIPLE PLASTIFICADO ', 'CATALINA TRIPLE PLASTIFICADO GRIS 28/38/48 x 170MM ACTION', 20, 'catalina.jpg', 10),
(11, 'EJE CENTRAL CON TAZA ', 'EJE CENTRAL CON TAZA CENTRAL QILONG', 10, 'ejecentral.jpg', 10),
(12, 'FRENO CROMADO ', 'FRENO V BRAY CROMADO QILONG', 25, 'frenocromado.jpg', 10),
(13, 'FRENO  PLASTIFICADO ', 'FRENO V BRAY PLASTIFICADO QILONG', 24, 'frenoplastificado.jpg', 10),
(14, 'TAZA HORQUILLA ', 'TAZA HORQUILLA CROMADO QILONG', 6, 'tazaorquilla.jpg', 10),
(15, 'MAZA  QILONG', 'MAZA 36H 14G CROMADO QILONG', 8.5, 'maza.jpg', 10),
(16, 'PEDAL MTB-1 ', 'PEDAL MTB-1 CON BILLA QILONG', 9, 'pedal.jpg', 10),
(18, 'TIMON CROMADO ', 'TIMON CROMADO 580MM CON CODO 150x100 Y BRIDGE ACTION', 20, 'timoncromado.jpg', 10),
(19, 'TUBO DE ASIENTO ', 'TUBO DE ASIENTO N° 7 ACTION', 4, 'tuboasiento.jpg', 10),
(20, 'CAMBIO MOTO ', 'CAMBIO MOTO DORADO SAIGUAN', 45, 'cambiosmotos.jpg', 10),
(21, 'LLANTA  26 ', 'LLANTA  26\" x 2.20 ACTION', 24, 'llanta26.jpg', 10),
(22, 'CAMARA 26', 'CAMARA 26\" x 2.20 ACTION', 12, 'camara26.jpg', 10),
(23, 'DESCARRILADOR', 'Descarrilado cambios Moto', 14, 'descarrilador.jpg', 9),
(24, 'DESVIADOR', 'Desviador cambios de bicicleta', 7, 'desviador.jpg', 10),
(25, 'PIÑON TRASERO', 'Piñon trasero 26 dientes -Bicimex', 14, 'piñon.jpg', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `telefono`, `email`, `password`, `nivel`) VALUES
(101, 'Samuel Medrano', '983328458', 'samu100pre@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
