-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2021 a las 07:48:45
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todohardware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abastecimiento_stock`
--

CREATE TABLE `abastecimiento_stock` (
  `codigo_producto` int(10) NOT NULL,
  `codigo_proveedor` int(10) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nombre categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre categoria`) VALUES
(1, 'MOTHERBOARD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni_cuilt` int(8) NOT NULL,
  `numero_contacto` varchar(25) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE `compra_producto` (
  `codigo_pedido` int(10) NOT NULL,
  `codigo_producto` int(10) NOT NULL,
  `cantidad_comprada` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `codigo` int(4) NOT NULL,
  `dni_cuilt` int(8) NOT NULL,
  `direccion_entrega` varchar(25) NOT NULL,
  `metodo_de_pago` varchar(20) NOT NULL,
  `monto` int(30) NOT NULL,
  `estado_pago` tinyint(1) NOT NULL,
  `estado_pedido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nombre` varchar(25) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `codigo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `codigo` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `precio` double(10,2) DEFAULT NULL,
  `especificaciones` varchar(200) DEFAULT NULL,
  `imagen` varchar(20) DEFAULT NULL,
  `categoria` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`codigo`, `nombre`, `marca`, `cantidad`, `precio`, `especificaciones`, `imagen`, `categoria`) VALUES
(8, 'TECLADO', 'CORSAIR', 14, 2600.00, 'Esto es un teclado que se especializa en...\r\nSirve para.....', 'img02.png', 6),
(12, 'ESTO ES UNA PRUEBA', 'MARCAPRUEBA', 2, 231.00, 'estas son las especificaciones del producto', 'img03.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipousuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abastecimiento_stock`
--
ALTER TABLE `abastecimiento_stock`
  ADD KEY `codigo_proveedor` (`codigo_proveedor`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dni_cuilt`);

--
-- Indices de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD KEY `codigo` (`codigo_producto`),
  ADD KEY `dni_cuilt` (`codigo_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `dni_cuilt` (`dni_cuilt`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `categoria` (`categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `codigo` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abastecimiento_stock`
--
ALTER TABLE `abastecimiento_stock`
  ADD CONSTRAINT `producto_cod` FOREIGN KEY (`codigo_producto`) REFERENCES `stock` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `proveedor_cod` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedores` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categoria` FOREIGN KEY (`id`) REFERENCES `stock` (`categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `realiza` FOREIGN KEY (`dni_cuilt`) REFERENCES `pedidos` (`dni_cuilt`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD CONSTRAINT `codgo_pedido` FOREIGN KEY (`codigo_pedido`) REFERENCES `pedidos` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codigo_producto` FOREIGN KEY (`codigo_producto`) REFERENCES `stock` (`codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
