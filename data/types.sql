-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-11-2019 a las 16:35:10
-- Versión del servidor: 5.7.27-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blonder413`
--

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `type`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'article', 1, '2015-06-06 14:20:16', 1, '2015-06-06 19:28:32'),
(2, 'code', 1, '2015-06-06 19:20:17', 1, '2015-06-06 19:20:17'),
(3, 'document', 1, '2015-06-06 19:21:19', 1, '2015-06-06 19:21:19'),
(4, 'video', 1, '2015-06-06 19:21:25', 1, '2015-06-06 19:21:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
