-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-11-2019 a las 16:34:42
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
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `course`, `slug`, `description`, `image`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'PHP 5', 'php-5', 'Aprenderemos a programar con el lenguaje orientado a la web del lado del servidor llamado PHP en su versión 5.', 'php-5.png', 1, '2015-09-18 18:17:27', 1, '2015-09-18 18:17:27'),
(2, 'MySQL', 'mysql', 'En este curso aprenderemos a usar el motor de bases de datos relacionales más popular en el mundo llamado MySQL.', 'mysql.png', 1, '2015-09-19 14:50:46', 1, '2015-09-19 14:50:46'),
(3, 'Google', 'google', 'En este curso aprenderemos a trabajar con las diferentes herramientas que nos proporciona google: buscador, google+, youtube, analytics, adsense, feedburner, entre otras.', 'google.png', 1, '2015-09-21 12:10:41', 1, '2015-09-21 12:10:41'),
(4, 'Blog con PHP', 'blog-con-php', 'En este curso aprenderemos a crear un blog usando PHP, MySQL, HTML5 y CSS3. Entre la temática aprenderemos cosas como validación de formularios, envío de correos, paginación, entre otras cosas. Estos videos solo se recomiendan como apoyo para mejorar la lógica, ya que mysql_connect no está recomendado, para quienes siguen este curso mi recomendación es que usen PDO.', 'blog-con-php.png', 1, '2015-10-09 09:39:26', 1, '2015-10-09 09:39:26'),
(5, 'YiiFramework 2', 'yiiframework-2', 'En este curso aprenderemos a trabajar con YiiFramework 2, veremos las distintas configuraciones, extensiones y herramientas que brinda. Aprenderemos a crear cualquier aplicación usando los templates basic y advanced.', 'yiiframework-2.png', 1, '2015-10-16 17:49:37', 1, '2015-10-16 17:49:37'),
(6, 'Linux', 'linux', 'En este curso aprenderemos las características básicas del Sitema Operativo GNU/LINUX. Conoceremos algunos conceptos básicos, las diferencias de las distribuciones, instalar aplicaciones y a realizar algunas configuraciones comunes.', 'linux.png', 1, '2016-01-10 20:32:15', 1, '2016-01-10 20:32:15'),
(7, 'HTML 4', 'html-4', 'En este curso aprenderemos a trabajar con el lenguaje de etiquetado HTML en su versión 4. Aprenderemos todos los conceptos necesarios para iniciar en el mundo del desarrollo web.', 'html-4.png', 1, '2016-01-10 21:21:32', 1, '2016-01-10 21:21:32'),
(8, 'Javascript', 'javascript', 'En este curso aprenderemos a usar el lenguaje de programación orientado a la web del lado del cliente. Veremos los conceptos básicos con el que podremos agregar algunas funcionalidades a nuestros sitios o aplicaciones.', 'javascript.png', 1, '2016-01-10 21:23:16', 1, '2016-01-10 21:23:16'),
(9, 'OPenOffice Writer', 'openoffice-writer', 'En este curso aprenderemos a trabajar con el procesador de texto de código abierto llamado Writer del paquete ofimático OpenOffice. Veremos lo necesario para realizar cualquier labor de oficina o proyecto de estudio o investigación.', 'openoffice-writer.png', 1, '2016-01-10 21:47:49', 1, '2016-01-10 21:47:49'),
(10, 'LibreOffice Calc', 'libreoffice-calc', 'En este curso aprenderemos a usar las herramientas básicas de la hoja de cálculo de LibreOffice llamado Calc. Aprenderemos a crear fórmulas, funciones, gráficos, autofiltros, entre otras herramientas.', 'libreoffice-calc.png', 1, '2016-01-12 17:54:58', 1, '2016-01-12 17:54:58'),
(11, 'CodeIgniter 3', 'codeigniter-3', 'En este curso aprenderemos a usar el framework de PHP llamado CodeIgniter en su versión 3. Aprenderemos a trabajar con el patrón MVC (Modelo Vista Controlador), veremos cómo trabajar con templates o layouts, cómo realizar consultas a la base de datos y conoceremos las distintas configuraciones que nos brinda.', 'codeigniter-3.png', 1, '2016-11-03 13:38:08', 1, '2016-11-03 13:38:08'),
(12, 'Linux Mint 18', 'linux-mint-18', 'En este curso aprenderemos a trabajar con Linux Mint en su versión 18. Veremos cómo instalar distintos lenguajes de programación, motores de bases de datos y realizar algunas configuraciones generales.', 'linux-mint-18.png', 1, '2017-01-02 17:14:24', 1, '2017-01-02 17:22:59'),
(13, 'PHP 7', 'php-7', 'Aprenderemos a programar con el lenguaje orientado a la web del lado del servidor llamado PHP en su versión 7.', 'php-7.png', 1, '2019-11-02 10:43:11', 1, '2019-11-02 10:43:11'),
(14, 'Laravel 5.4', 'laravel-54', 'En este curso aprenderemos los conceptos básicos para trabajar con uno de los frameworks PHP más populares de la actualidad.', 'laravel-5.4.png', 1, '2019-11-03 09:55:53', 1, '2019-11-03 09:55:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
