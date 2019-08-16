-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2019 a las 02:49:39
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pocho`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `dni` int(11) NOT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `updated_at` varchar(25) DEFAULT NULL,
  `created_at` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `surname`, `dni`, `genero`, `birthdate`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Leandro', 'Binetti', 22222222, 'Masculino', '1987-04-30', 'leandro87@gmail.com', '$2y$10$kPNWa3sUw.VDuK/imLpNaOsqNKX/o33LYl0diCK92Tk2otmziUuXG', NULL, '2019-08-15 19:33:41', '2019-08-15 19:33:41'),
(2, 'Mirtha', 'Legrand', 123456478, 'Femenino', '1900-01-01', 'mirtha@legrande.com', '$2y$10$djEry.zC3LLzaF2lfs2qQuAYhyiOuVam5FhLQIYOqK9U4x6RS5s8S', NULL, '2019-08-15 21:37:34', '2019-08-15 21:37:34'),
(3, 'Lourdes', 'Miño', 123456489, 'Femenino', '1982-11-29', 'lourdes1@gmail.com', '$2y$10$Unl3U6EHheAeCC6E7b23CudFVESvTWSUc9p7gO07RZqFWDwUfQf4S', NULL, '2019-08-15 21:52:02', '2019-08-15 21:52:02'),
(5, 'Nico', 'Sanchez', 9512357, 'Masculino', '1990-01-01', 'nicosanchez@gmail.com', '$2y$10$/nSrQ88gXnVBt8YqRSgiTOyjNMtXSBMtJNDCvwMAZ6KsX/ahs8QbK', NULL, '2019-08-16 00:16:07', '2019-08-16 00:16:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
