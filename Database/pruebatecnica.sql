-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2020 a las 17:39:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebatecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `id_tipo_id` int(11) NOT NULL,
  `numero_id` varchar(20) NOT NULL,
  `id_programa` int(11) NOT NULL,
  `semestre` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_tipo_sangre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombres`, `apellidos`, `id_tipo_id`, `numero_id`, `id_programa`, `semestre`, `edad`, `fecha_nacimiento`, `id_tipo_sangre`) VALUES
(2, 'Pepe', 'Gonzales', 5, '1000235698', 2, '5', 18, '2001-01-31', 2),
(3, 'miguel', 'ordoñez', 1, '1234569874', 3, '2', 24, '1996-12-02', 4),
(4, 'Juan Nicolas', 'Ordoñez Velasquez', 1, '1000464327', 1, '6', 20, '1999-09-11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `id_tipo_id` int(11) NOT NULL,
  `numero_id` varchar(20) NOT NULL,
  `id_programa` int(11) NOT NULL,
  `semestre` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_tipo_sangre` int(11) NOT NULL,
  `nomina` varchar(20) NOT NULL,
  `id_tipo_vinculacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombres`, `apellidos`, `id_tipo_id`, `numero_id`, `id_programa`, `semestre`, `edad`, `fecha_nacimiento`, `id_tipo_sangre`, `nomina`, `id_tipo_vinculacion`) VALUES
(2, 'Jose ', 'Galindo', 1, '120054', 1, '2', 45, '1975-02-27', 6, '1200000', 1),
(3, 'Carolina', 'torres', 1, '1300245859', 1, '6', 24, '1996-07-12', 2, '1200000', 1),
(4, 'Jose Hernando', 'Perez', 1, '1254789632', 2, '5', 26, '1993-06-09', 4, '1400000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `descripcion`) VALUES
(1, 'Tecnologo en analisis y desarrollo en sistemas de informacion'),
(2, 'Tecnico en mantenimiento de computo'),
(3, 'Tecnologo en gestion de mercados y logistica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoid`
--

CREATE TABLE `tipoid` (
  `id` int(11) NOT NULL,
  `tipo_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipoid`
--

INSERT INTO `tipoid` (`id`, `tipo_id`) VALUES
(1, 'CC'),
(2, 'CE'),
(3, 'PA'),
(4, 'RC'),
(5, 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposangre`
--

CREATE TABLE `tiposangre` (
  `id` int(11) NOT NULL,
  `tipo_sangre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposangre`
--

INSERT INTO `tiposangre` (`id`, `tipo_sangre`) VALUES
(1, 'O+'),
(2, 'O-'),
(3, 'A-'),
(4, 'A+'),
(5, 'B-'),
(6, 'B+'),
(7, 'AB-'),
(8, 'AB+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovinculacion`
--

CREATE TABLE `tipovinculacion` (
  `id` int(11) NOT NULL,
  `tipo_vinc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipovinculacion`
--

INSERT INTO `tipovinculacion` (`id`, `tipo_vinc`) VALUES
(1, 'Planta'),
(2, 'Contrato'),
(3, 'Otro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrograma_FK` (`id_programa`),
  ADD KEY `idTipoId_FK` (`id_tipo_id`),
  ADD KEY `idTipoSangre_FK` (`id_tipo_sangre`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTipoIdP_FK` (`id_tipo_id`),
  ADD KEY `idProgramaP_FK` (`id_programa`),
  ADD KEY `idTipoSangreP_FK` (`id_tipo_sangre`),
  ADD KEY `idTipoVinc_FK` (`id_tipo_vinculacion`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoid`
--
ALTER TABLE `tipoid`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposangre`
--
ALTER TABLE `tiposangre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipovinculacion`
--
ALTER TABLE `tipovinculacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipoid`
--
ALTER TABLE `tipoid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tiposangre`
--
ALTER TABLE `tiposangre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipovinculacion`
--
ALTER TABLE `tipovinculacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `idPrograma_FK` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id`),
  ADD CONSTRAINT `idTipoId_FK` FOREIGN KEY (`id_tipo_id`) REFERENCES `tipoid` (`id`),
  ADD CONSTRAINT `idTipoSangre_FK` FOREIGN KEY (`id_tipo_sangre`) REFERENCES `tiposangre` (`id`);

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `idProgramaP_FK` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id`),
  ADD CONSTRAINT `idTipoIdP_FK` FOREIGN KEY (`id_tipo_id`) REFERENCES `tipoid` (`id`),
  ADD CONSTRAINT `idTipoSangreP_FK` FOREIGN KEY (`id_tipo_sangre`) REFERENCES `tiposangre` (`id`),
  ADD CONSTRAINT `idTipoVinc_FK` FOREIGN KEY (`id_tipo_vinculacion`) REFERENCES `tipovinculacion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
