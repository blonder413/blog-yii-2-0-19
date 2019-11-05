-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-11-2019 a las 16:34:26
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
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `category`, `slug`, `image`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Writer', 'writer', 'writer.png', 'Video Tutoriales Sobre OpenOffice/LibreOffice Writer', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(2, 'Calc', 'calc', 'calc.png', 'Video Tutoriales Sobre OpenOffice/LibreOffice Calc', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(3, 'PHP', 'php', 'php.png', 'Códigos y Video Tutoriales sobre PHP y MYSQL', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(4, 'HTML', 'html', 'html.png', 'Códigos y Video Tutoriales sobre HTML', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(5, 'Otros', 'otros', 'otros.png', 'Opiniones personales, tips, recomendaciones  y conceptos varios', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(6, 'Multimedia', 'multimedia', 'multimedia.png', 'Archivos y tips útiles de imágenes y videos', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(7, 'Twitch', 'twitch', 'twitch.png', 'Transmisiones de Juegos en Twitch', 1, '2014-08-16 11:08:02', 1, '2014-08-16 11:08:02'),
(8, 'Javascript', 'javascript', 'javascript.png', 'Códigos y Video Tutoriales sobre Javascript', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(9, 'PostgreSQL', 'postgresql', 'postgresql.png', 'Consultas y Video Tutoriales sobre el motor de bases de datos PostgreSQL', 1, '2014-04-20 19:23:02', 1, '2016-01-12 18:36:01'),
(10, 'Linux', 'linux', 'linux.png', 'Tutoriales, noticias y opiniones sobre el Sistema Operativo GNU/LINUX', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(11, 'SEO', 'seo', 'seo.png', 'Video Tutoriales y tips sobre el mejoramiento de posicionamiento de Sitios Web', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(12, 'Google', 'google', 'google.png', 'Video Tutoriales y tips sobre servicios de Google', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(13, 'jQuery', 'jquery', 'jquery.png', 'Video Tutoriales y códigos sobre la librería javascript jQuery', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(14, 'HTML5', 'html5', 'html5.png', 'Video Tutoriales y códigos sobre el lenguaje de etiquetas HTML5', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(15, 'Hangouts', 'hangouts', 'hangouts.png', 'Charlas en vivo a través de Hangout y otros medios', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(16, 'MySQL', 'mysql', 'mysql.png', 'video tutoriales y consultas sobre el motor de bases de datos relacional MySQL', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(17, 'CodeIgniter', 'codeigniter', 'codeigniter.png', 'Video tutoriales y consejos sobre el uso del Framework PHP CodeIgniter', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(18, 'Laravel', 'laravel', 'laravel.png', 'Video tutoriales y artículos sobre Laravel Framework', 1, '2014-04-20 19:23:02', 1, '2014-04-20 19:23:02'),
(19, 'Yii Framework', 'yii-framework', 'yii-framework-2.png', 'Video tutoriales y códigos sobre Yii Framework', 1, '2015-09-17 09:11:24', 1, '2015-09-18 16:01:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
