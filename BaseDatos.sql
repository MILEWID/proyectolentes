-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2021 a las 03:51:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdoptica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre`, `apellido`, `fecha`, `hora`, `motivo`) VALUES
(1, 'Dennys', 'Rojas', '2021-02-25', '18:00:00', 'revisión rutinaria'),
(2, 'Pepito', 'Pérez', '2021-03-10', '10:00:00', 'CAMBIO DE LUNAS DE LENTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(100) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `material` varchar(50) NOT NULL,
  `sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `marca`, `tipo`, `precio`, `material`, `sexo`) VALUES
(1, 'Lentes', 'RayBan', 'Lentes de contacto', 125, 'Vidrio', 'Masculino'),
(4, 'Gafas de sol', 'Cualquiera', 'lentes', 100000, 'Cualquiera', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(50) NOT NULL,
  `idUsuario` int(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipoUsuario` varchar(50) NOT NULL,
  `correoElectronico` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreUsuario`, `idUsuario`, `nombre`, `apellido`, `tipoUsuario`, `correoElectronico`, `contrasena`) VALUES
('dennysprueba', 17, 'Dennys', 'Rojas', 'Administrador', 'abc@abc.abc', '123abc'),
('dennyspruba2', 18, 'Dennys', 'Rojas', 'Cliente', 'abcd@abc.abc', '123abcefg12'),
('dennysrojas11111', 23, 'Dennys', 'Rojas', 'Cliente', 'drsasd@hotmadsail.com', '1235'),
('sebasballesteros1', 24, 'Sebas', 'Ballesteros', 'Cliente', 'jessy@milena.comzrequiredrequired', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usumod`
--

CREATE TABLE `usumod` (
  `ID` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usumod`
--

INSERT INTO `usumod` (`ID`, `nombre`, `apellido`, `usuario`, `correo`) VALUES
(25, 'asdasd', 'sfasd', 'dennysrojas123', 'correods@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nombreUsuario` (`nombreUsuario`),
  ADD UNIQUE KEY `correo` (`correoElectronico`);

--
-- Indices de la tabla `usumod`
--
ALTER TABLE `usumod`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usumod`
--
ALTER TABLE `usumod`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
