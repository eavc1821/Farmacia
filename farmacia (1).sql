-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-07-2021 a las 18:34:54
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `IdCat` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCat` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin7 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`IdCat`, `NombreCat`) VALUES
(1, 'Analgesico '),
(2, 'Antibioticos'),
(3, 'Protectores'),
(4, 'Antihipertensiv'),
(5, 'Antidiabeticos'),
(6, 'Formulas Lactea'),
(7, 'Inyectables'),
(8, 'Ceras'),
(9, 'Antidiarreicos'),
(10, 'Vitaminas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `IdCli` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TelCli` int(11) NOT NULL,
  `NomCli` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ApeCli` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DirCli` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdCli`, `TelCli`, `NomCli`, `ApeCli`, `DirCli`) VALUES
('0703199209368', 95286395, 'Carlos Adan', 'Cruz Maradiaga', 'Barrio la Reforma '),
('0703199804049', 94558427, 'Erlyn Alejandro', 'Vallecillo Carcamo', 'Col Nueva Esperanza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `IdCompra` int(11) NOT NULL AUTO_INCREMENT,
  `FechaCompra` date NOT NULL,
  `IdProv` int(11) NOT NULL,
  `NomUsr` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Estado` bit(2) NOT NULL,
  PRIMARY KEY (`IdCompra`),
  KEY `IdProv` (`IdProv`),
  KEY `NomUsr` (`NomUsr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE IF NOT EXISTS `detallecompra` (
  `IdCompra` int(11) NOT NULL,
  `IdProd` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`IdCompra`,`IdProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE IF NOT EXISTS `detalleventa` (
  `CodVentas` int(11) NOT NULL,
  `IdProd` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `PrecVenta` decimal(10,2) NOT NULL,
  PRIMARY KEY (`CodVentas`,`IdProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `IdPer` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TelPer` int(15) NOT NULL,
  `NomPer` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ApePer` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DirPer` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdPer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`IdPer`, `TelPer`, `NomPer`, `ApePer`, `DirPer`, `Email`) VALUES
('0703199804049', 95286395, 'Dinora ', 'Carcamo Valladares ', 'Col Nueva Esperanza 2', 'alejandro@gmail.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `IdProd` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NomProd` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PrecProd` decimal(10,2) NOT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `IdProv` int(11) NOT NULL,
  `Estado` bit(2) NOT NULL,
  `IdCat` int(11) NOT NULL,
  `FehaCad` date NOT NULL,
  PRIMARY KEY (`IdProd`),
  KEY `IdProv` (`IdProv`),
  KEY `IdCat` (`IdCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `IdProv` int(11) NOT NULL AUTO_INCREMENT,
  `NomEmp` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TelEmp` int(10) NOT NULL,
  `DirEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NacProv` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdProv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin7 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`IdProv`, `NomEmp`, `TelEmp`, `DirEmpresa`, `NacProv`) VALUES
(1, 'Bayer', 94558427, 'Muchen', ''),
(2, 'Anpfor', 95286395, 'La Reforma ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `NomUsr` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `IdPer` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Estado` bit(2) NOT NULL,
  PRIMARY KEY (`NomUsr`),
  KEY `IdPer` (`IdPer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `CodVentas` int(11) NOT NULL AUTO_INCREMENT,
  `FechaVenta` date NOT NULL,
  `IdCli` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NomUsr` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Estado` bit(2) NOT NULL,
  `TipoPago` bit(2) NOT NULL,
  `TotalPago` decimal(10,2) NOT NULL,
  PRIMARY KEY (`CodVentas`),
  KEY `IdCli` (`IdCli`),
  KEY `NomUsr` (`NomUsr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin7 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`NomUsr`) REFERENCES `usuarios` (`NomUsr`),
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`IdProv`) REFERENCES `proveedores` (`IdProv`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`IdCat`) REFERENCES `categorias` (`IdCat`),
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`IdProv`) REFERENCES `proveedores` (`IdProv`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdPer`) REFERENCES `personal` (`IdPer`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`NomUsr`) REFERENCES `usuarios` (`NomUsr`),
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`IdCli`) REFERENCES `clientes` (`IdCli`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
