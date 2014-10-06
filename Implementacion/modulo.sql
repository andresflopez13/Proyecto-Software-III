-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2014 a las 20:39:18
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `modulo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigador`
--

CREATE TABLE IF NOT EXISTS `investigador` (
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Tipo_Documento` text NOT NULL,
  `Numero_Documento` int(11) NOT NULL,
  `Nacionalidad` text NOT NULL,
  `Datos_contacto` text NOT NULL,
  `Evaluador` tinyint(1) NOT NULL DEFAULT '0',
  `justificacion` text NOT NULL,
  `Hoja_vida` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigador`
--

INSERT INTO `investigador` (`Nombres`, `Apellidos`, `Tipo_Documento`, `Numero_Documento`, `Nacionalidad`, `Datos_contacto`, `Evaluador`, `justificacion`, `Hoja_vida`) VALUES
('esteban rodriguez', 'e', 'cedula', 1094, 'brasilenho', '320', 0, '', 'https://www.dane.gov.co/aplicativos/convocatorias/inscripcion/files/HOJA_VIDA_FUNCION.doc'),
('juan', 'moreno', 'cedula', 1231222, 'colombiano', '3207329971', 0, '', 'https://www.google.com.co/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=0CCYQFjAC&url=http%3A%2F%2Fwww.mineducacion.gov.co%2F1621%2Farticles-296037_angel_alberto_garzon.pdf&ei=xN8yVLrfCYjCggT_i4GADg&usg=AFQjCNFExglJDCmsxN4s_Xft55-I-rb-iA&sig2=iIWIfNuQ0bGpawnHGDGH_A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE IF NOT EXISTS `organizaciones` (
  `Nit` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` text NOT NULL,
  `Nombre` text NOT NULL,
  `motivoCambioOrganizacion` text NOT NULL,
  `Ciudad` text NOT NULL,
  `validar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizaciones`
--

INSERT INTO `organizaciones` (`Nit`, `Email`, `Direccion`, `Telefono`, `Nombre`, `motivoCambioOrganizacion`, `Ciudad`, `validar`) VALUES
(1212, 'DROGUERIA23@gmail.com', '13#13', '7413131', 'drogueria', 'se valida', 'armenia', 'si'),
(1227, 'lamanuela@gmail.com', 'entre armnia y montnegro', '7404985', 'manuela hotel', '', 'montenegro', ''),
(1569, 'fotocopias200@yahoo.es', 'cr 13#21', '7440338', 'fotocopias200', '', 'pereira', ''),
(1993, 'espumas@hotmail.com', 'centro carrera 19', '7412049', 'espumas del quindio', '', 'Armenia', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `investigador`
--
ALTER TABLE `investigador`
 ADD PRIMARY KEY (`Numero_Documento`);

--
-- Indices de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
 ADD PRIMARY KEY (`Nit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
