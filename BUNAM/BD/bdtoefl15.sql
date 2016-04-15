-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2015 a las 21:29:38
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdtoefl15`
--

CREATE TABLE IF NOT EXISTS `bdtoefl15` (
  `Id` tinyint(4) NOT NULL,
  `Cuenta` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Clave` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `Nombre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Etapa` varchar(2) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `Bin1` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Bin2` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Bin3` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Bin4` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Bin5` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Bin6` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Bin7` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '-',
  `Rc1` text COLLATE latin1_general_ci NOT NULL,
  `Rc2` text COLLATE latin1_general_ci NOT NULL,
  `Rc3` text COLLATE latin1_general_ci NOT NULL,
  `Rc4` text COLLATE latin1_general_ci NOT NULL,
  `Rc5` text COLLATE latin1_general_ci NOT NULL,
  `Rc6` text COLLATE latin1_general_ci NOT NULL,
  `Rc7` text COLLATE latin1_general_ci NOT NULL,
  `Calificacion` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `Resultado` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `Inicio` timestamp NULL DEFAULT NULL,
  `Salida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Termino` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `bdtoefl15`
--

INSERT INTO `bdtoefl15` (`Id`, `Cuenta`, `Clave`, `Nombre`, `Etapa`, `Bin1`, `Bin2`, `Bin3`, `Bin4`, `Bin5`, `Bin6`, `Bin7`, `Rc1`, `Rc2`, `Rc3`, `Rc4`, `Rc5`, `Rc6`, `Rc7`, `Calificacion`, `Resultado`, `Inicio`, `Salida`, `Termino`) VALUES
(1, '9011994', 'nuevoMexicoCGL', 'ALANIS RODRIGUEZ SONIA VIVIANA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(2, '1021993', 'nuevoMexicoCGL', 'ALCANTARA MORAN JUAN CARLOS ALI', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(3, '6051991', 'nuevoMexicoCGL', 'AMAYA GARCIA LLUVIA MARISOL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(4, '12211995', 'nuevoMexicoCGL', 'ANGELES TOVAR VICTOR JESUS', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(5, '12271958', 'nuevoMexicoCGL', 'BARRAGAN FERNANDEZ MARCO ANTONIO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(6, '6161992', 'nuevoMexicoCGL', 'BONILLA RODRIGUEZ ANDRES', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(7, '11011971', 'nuevoMexicoCGL', 'CASIMIRO CASTRO SANTOS', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(8, '8241994', 'nuevoMexicoCGL', 'CENTENO BERNAL JUAN DANIEL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(9, '9101979', 'nuevoMexicoCGL', 'CRUZ REYES NICOLASA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(10, '3111994', 'nuevoMexicoCGL', 'DE LOS SANTOS PEREZ JESUS', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(11, '11231994', 'nuevoMexicoCGL', 'DELGADO HERNANDEZ CARLA LILIANA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(12, '7081994', 'nuevoMexicoCGL', 'ESCAMILLA GARCIA JUAN RICARDO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(13, '4081994', 'nuevoMexicoCGL', 'FERNANDEZ ALDUCIN ALBERTO BRIAN', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(14, '5311994', 'nuevoMexicoCGL', 'GALINDO URIBE CARLOS DANIEL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(15, '12101989', 'nuevoMexicoCGL', 'GALLARDO FERRERA HECTOR ERICK', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(16, '7061995', 'nuevoMexicoCGL', 'GODOY RODRIGUEZ DIDIAN YAMILETH', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(17, '1221962', 'nuevoMexicoCGL', 'GONZALEZ GUERRERO MARIA DEL ROCIO ROSA MARIA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(18, '8051994', 'nuevoMexicoCGL', 'GONZALEZ PACHECO KATIA CECILIA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(19, '6021995', 'nuevoMexicoCGL', 'GONZALEZ SUAREZ JADE CAROLINA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(20, '12081993', 'nuevoMexicoCGL', 'GUILLEN SERRATO LORELEI', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(21, '5161958', 'nuevoMexicoCGL', 'HERRERA CARRILLO JUAN HECTOR HUGO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(22, '7241990', 'nuevoMexicoCGL', 'IBARRA FLORES ARANTXA PAOLA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(23, '1271959', 'nuevoMexicoCGL', 'JIMENEZ MENDOZA ARACELI', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(24, '9111995', 'nuevoMexicoCGL', 'JURADO NU?EZ RAFAEL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(25, '2051960', 'nuevoMexicoCGL', 'LEON OLIVARES FELIPE', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(26, '1251994', 'nuevoMexicoCGL', 'LOPEZ OSORIO JESSICA ELVIRA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(27, '5241979', 'nuevoMexicoCGL', 'MIRANDA RAMOS EDNA CYNTHIA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(28, '3081957', 'nuevoMexicoCGL', 'OLVERA TREVI?O MARIA DE LOS ANGELES PATRICIA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(29, '9181989', 'nuevoMexicoCGL', 'ORDU?O GOMEZ MOISES', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(30, '4281993', 'nuevoMexicoCGL', 'PERALTA SERNA JESUS ROBERTO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(31, '8191984', 'nuevoMexicoCGL', 'PINEDA MARTINEZ DIEGO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(32, '4211993', 'nuevoMexicoCGL', 'RAMIREZ ALVARADO MONSERRATH', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(33, '10281993', 'nuevoMexicoCGL', 'RIVERA MARTINEZ ALEJANDRO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(34, '2191984', 'nuevoMexicoCGL', 'RODRIGUEZ CASTA?EDA ILEANA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(35, '10281992', 'nuevoMexicoCGL', 'RODRIGUEZ PAEZ ALEJANDRA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(36, '11191993', 'nuevoMexicoCGL', 'ROMANO TANGASSI GILDA ISAMAR', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(37, '11291991', 'nuevoMexicoCGL', 'ROSAS MENA JAIR AXEL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(38, '11171994', 'nuevoMexicoCGL', 'SALAZAR MARQUEZ ISRAEL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(39, '10191994', 'nuevoMexicoCGL', 'SAMANIEGO MUCI?O DIANA LAURA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(40, '11231991', 'nuevoMexicoCGL', 'SANCHEZ ENCISO GIOVANNA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(41, '10261982', 'nuevoMexicoCGL', 'SOLIS DE LOS REYES EDGAR ENRIQUE', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(42, '3051995', 'nuevoMexicoCGL', 'SOLIS SOTELO OCTAVIO', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(43, '12021993', 'nuevoMexicoCGL', 'VILLAFA?A RIVERA GRISELDA MARIA', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(44, '4251995', 'nuevoMexicoCGL', 'ZARATE RODRIGUEZ RICARDO GIOVANNY', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(45, '1151996', 'nuevoMexicoCGL', 'SALDIVAR MALDONADO MARIAN', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(46, '4321', 'cgl', 'CGL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(47, '9876', 'cgl', 'CGL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N'),
(48, '4444', 'cgl', 'CGL', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'N');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bdtoefl15`
--
ALTER TABLE `bdtoefl15`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bdtoefl15`
--
ALTER TABLE `bdtoefl15`
  MODIFY `Id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
