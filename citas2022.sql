-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2022 a las 00:50:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `CodCit` int(11) NOT NULL,
  `Tipocit` varchar(100) NOT NULL,
  `Fechacit` date NOT NULL,
  `Horacit` time NOT NULL,
  `Estadocit` varchar(10) NOT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  `Codconsul` int(11) NOT NULL,
  `Codmedic` int(11) NOT NULL,
  `Codpaci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `NumeroC` int(11) NOT NULL,
  `NombreC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `CodEs` int(11) NOT NULL,
  `NombreE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `DocumentoM` int(11) NOT NULL,
  `NombreM` varchar(200) NOT NULL,
  `ApellidoM` varchar(100) NOT NULL,
  `EmailM` varchar(100) NOT NULL,
  `EspecialidadM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `DocumentoPa` int(11) NOT NULL,
  `NombrePa` varchar(100) NOT NULL,
  `ApellidoPa` varchar(100) NOT NULL,
  `EmailPa` varchar(100) NOT NULL,
  `FechaNaPa` date NOT NULL,
  `GeneroPa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `NombreU` varchar(200) NOT NULL,
  `EmailUs` varchar(100) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `PasswordU` varchar(200) NOT NULL,
  `AvatarU` varchar(200) NOT NULL,
  `Create_fh` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`CodCit`),
  ADD KEY `Codconsul` (`Codconsul`),
  ADD KEY `Codmedic` (`Codmedic`),
  ADD KEY `Codpaci` (`Codpaci`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`NumeroC`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`CodEs`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`DocumentoM`),
  ADD KEY `EspecialidadM` (`EspecialidadM`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`DocumentoPa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD UNIQUE KEY `EmailUs` (`EmailUs`),
  ADD UNIQUE KEY `Usuario` (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `CodCit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `CodEs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`Codconsul`) REFERENCES `consultorios` (`NumeroC`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`Codmedic`) REFERENCES `medicos` (`DocumentoM`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`Codpaci`) REFERENCES `pacientes` (`DocumentoPa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
