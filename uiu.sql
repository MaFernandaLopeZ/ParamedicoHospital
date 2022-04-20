-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2022 a las 18:11:48
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uiu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambulancias`
--

CREATE TABLE `ambulancias` (
  `id_ambulancia` int(10) NOT NULL,
  `numero` int(10) NOT NULL,
  `placa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_persona` int(10) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `apellidoP` varchar(75) NOT NULL,
  `apellidoM` varchar(75) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` int(1) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `telefono` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id_expediente` int(10) NOT NULL,
  `id_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(10) NOT NULL,
  `id_expediente` int(10) NOT NULL,
  `id_persona` int(10) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  `fecha_atencion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes_padecimientos`
--

CREATE TABLE `pacientes_padecimientos` (
  `id_persona` int(10) NOT NULL,
  `id_padecimiento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padecimientos`
--

CREATE TABLE `padecimientos` (
  `id_padecimiento` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_ambulancia`
--

CREATE TABLE `personal_ambulancia` (
  `id_ambulancia` int(10) NOT NULL,
  `id_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(35) NOT NULL,
  `id_persona` int(10) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ambulancias`
--
ALTER TABLE `ambulancias`
  ADD PRIMARY KEY (`id_ambulancia`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`id_expediente`),
  ADD KEY `FKexpediente674020` (`id_persona`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `FKhistorial909518` (`id_persona`),
  ADD KEY `FKhistorial698988` (`id_expediente`);

--
-- Indices de la tabla `pacientes_padecimientos`
--
ALTER TABLE `pacientes_padecimientos`
  ADD PRIMARY KEY (`id_persona`,`id_padecimiento`),
  ADD KEY `FKpacientes_599457` (`id_padecimiento`);

--
-- Indices de la tabla `padecimientos`
--
ALTER TABLE `padecimientos`
  ADD PRIMARY KEY (`id_padecimiento`);

--
-- Indices de la tabla `personal_ambulancia`
--
ALTER TABLE `personal_ambulancia`
  ADD PRIMARY KEY (`id_ambulancia`,`id_persona`),
  ADD KEY `FKpersonal_a546174` (`id_persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FKusuarios801063` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambulancias`
--
ALTER TABLE `ambulancias`
  MODIFY `id_ambulancia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_persona` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  MODIFY `id_expediente` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `padecimientos`
--
ALTER TABLE `padecimientos`
  MODIFY `id_padecimiento` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD CONSTRAINT `FKexpediente674020` FOREIGN KEY (`id_persona`) REFERENCES `datos_personales` (`id_persona`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `FKhistorial698988` FOREIGN KEY (`id_expediente`) REFERENCES `expedientes` (`id_expediente`),
  ADD CONSTRAINT `FKhistorial909518` FOREIGN KEY (`id_persona`) REFERENCES `datos_personales` (`id_persona`);

--
-- Filtros para la tabla `pacientes_padecimientos`
--
ALTER TABLE `pacientes_padecimientos`
  ADD CONSTRAINT `FKpacientes_599457` FOREIGN KEY (`id_padecimiento`) REFERENCES `padecimientos` (`id_padecimiento`),
  ADD CONSTRAINT `FKpacientes_891277` FOREIGN KEY (`id_persona`) REFERENCES `datos_personales` (`id_persona`);

--
-- Filtros para la tabla `personal_ambulancia`
--
ALTER TABLE `personal_ambulancia`
  ADD CONSTRAINT `FKpersonal_a376803` FOREIGN KEY (`id_ambulancia`) REFERENCES `ambulancias` (`id_ambulancia`),
  ADD CONSTRAINT `FKpersonal_a546174` FOREIGN KEY (`id_persona`) REFERENCES `datos_personales` (`id_persona`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FKusuarios801063` FOREIGN KEY (`id_persona`) REFERENCES `datos_personales` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
