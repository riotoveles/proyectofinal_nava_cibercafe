-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 21:44:23
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cibercafebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `FechaYHoraDeRenta` date NOT NULL,
  `PrecioDeRenta` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadora`
--

CREATE TABLE `computadora` (
  `idSerie` int(100) NOT NULL,
  `MarcaProcesador` varchar(50) NOT NULL,
  `Almacenamiento` varchar(50) NOT NULL,
  `MemoriaRAM` varchar(50) NOT NULL,
  `SistemaOperativo` varchar(50) NOT NULL,
  `idComputadora` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `FechaDeNacimiento` date NOT NULL,
  `RFC` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `Nombre`, `Apellidos`, `Telefono`, `Direccion`, `FechaDeNacimiento`, `RFC`) VALUES
(1, 'Mario Roberto', 'Esquivel Morales', 2147483647, 'Calle del Toro #4545', '2004-10-01', 4589741);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta`
--

CREATE TABLE `renta` (
  `idComputadora` int(20) NOT NULL,
  `TiempoDeRenta` time NOT NULL,
  `PrecioDeRenta` int(100) NOT NULL,
  `FechaDeRenta` date NOT NULL,
  `idCliente` int(10) NOT NULL,
  `idEmpleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `computadora`
--
ALTER TABLE `computadora`
  ADD PRIMARY KEY (`idSerie`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `renta`
--
ALTER TABLE `renta`
  ADD PRIMARY KEY (`idComputadora`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=855933;

--
-- AUTO_INCREMENT de la tabla `computadora`
--
ALTER TABLE `computadora`
  MODIFY `idSerie` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125058;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4548476;

--
-- AUTO_INCREMENT de la tabla `renta`
--
ALTER TABLE `renta`
  MODIFY `idComputadora` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=855935;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
