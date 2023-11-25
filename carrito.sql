-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-11-2023 a las 05:54:47
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

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
-- Estructura de tabla para la tabla `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `theory_grade` decimal(5,2) DEFAULT NULL,
  `practice_grade` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grades`
--

INSERT INTO `grades` (`grade_id`, `student_id`, `location_id`, `subject_id`, `theory_grade`, `practice_grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '0.00', '0.00', '2023-11-24 01:00:30', '2023-11-24 01:00:30', NULL),
(3, 1, 2, 1, '5.00', '6.00', '2023-11-24 01:00:30', '2023-11-24 16:52:52', NULL),
(4, 3, 2, 1, '20.00', '30.00', '2023-11-25 05:43:35', '2023-11-25 05:44:03', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Duran', '2023-11-22 20:53:55', '2023-11-22 20:53:55', NULL),
(2, 'Eloy Alfaro 2', '2023-11-22 20:54:44', '2023-11-22 20:56:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `opcion` varchar(200) NOT NULL,
  `opciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `opcion`, `opciones`) VALUES
(1, 'enfermera', '6.99', 'enfermera.jpg', 'color', 'rojo'),
(2, 'profesora', '5.99', 'profesora.jpg', 'asignatura', 'ingles'),
(3, 'perritos', '4.99', 'perritos.jpg', 'color', 'negro'),
(4, 'gatitos', '4.99', 'gatitos.jpg', 'color', 'negro'),
(9, 'Chupetes', '1.99', 'IMG-20121011-WA0011.jpg', 'color', 'azul'),
(10, 'Campanas', '1.99', 'IMG-20121011-WA0010.jpg', 'color', 'azul'),
(11, 'Cestito', '1.99', 'IMG-20121011-WA0015.jpg', 'color', 'amarillo'),
(12, 'Camping', '1.99', 'IMG-20121011-WA0014.jpg', 'color', 'amarillo'),
(13, 'Cochecito', '2.99', 'IMG-20121011-WA0000.jpg', 'color', 'amarillo'),
(14, 'Flores', '1.99', 'IMG-20121011-WA0018.jpg', 'color', 'amarillo'),
(15, 'Vestidito', '1.99', 'IMG-20121011-WA0008.jpg', 'color', 'amarillo'),
(16, 'Packs', '3.99', 'IMG-20121011-WA0013.jpg', 'color', 'amarillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`student_id`, `user_id`, `first_name`, `last_name`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'JOHN', 'Quezada', 'john_quezada@hotmail.com', '2023-11-22 19:33:07', '2023-11-24 19:45:59', NULL),
(2, NULL, 'nombre', 'apellido', 'jq@gique.com', '2023-11-24 20:19:53', '2023-11-24 20:19:53', NULL),
(3, 3, 'nombre1', 'apellido1', 'xdk@hotmail.com', '2023-11-24 20:22:22', '2023-11-25 05:43:22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subjects_obs` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subjects_obs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Matematicas', 'Trabajo', '2023-11-22 00:19:09', '2023-11-22 00:19:09', NULL),
(2, 'prueba', 'prueba', '2023-11-24 17:01:48', '2023-11-24 17:01:48', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Docente','Estudiante') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `mail`, `password`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'john_quezada@hotmail.com', '$2y$10$gOYmB.U2YMqDElOq/xFFzu7MlxDjoCXDLgO0IHVNVmWxEe02bGN5W', 'Docente', '2023-11-19 17:01:03', '2023-11-19 17:01:03', NULL),
(2, 'xgranda@outlook.com', '$2y$10$9p0RJxgqRgyXSr.igEBu3eifX00VtZMTz3KHYfz8Ymoh7HCUjEUni', 'Estudiante', '2023-11-24 19:41:39', '2023-11-25 05:39:19', NULL),
(3, 'xdk@hotmail.com', '$2y$10$VrDa5bV0aXZnvkwjn0YZUezAu.WcpFiFCPnNupcC.PKRQjU1U03Tu', 'Estudiante', '2023-11-24 20:22:22', '2023-11-24 20:22:22', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `grades_ibfk_3` (`location_id`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `grades_ibfk_3` FOREIGN KEY (`location_id`) REFERENCES `locations` (`location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
