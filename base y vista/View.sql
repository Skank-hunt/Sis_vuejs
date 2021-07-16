-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2021 a las 23:11:51
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basedos`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `luminarias_completa`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `luminarias_completa` (
`coodigo_luminaria` varchar(50)
,`fecha` date
,`hora` time
,`operador` varchar(3)
,`latitud` double
,`longitud` double
,`nombre_municipio` varchar(255)
,`nombre_colonia` varchar(255)
,`nombre_calle` varchar(255)
,`tipo_calle` varchar(255)
,`tipo_via` varchar(255)
,`tipo_poste` varchar(255)
,`estado_poste` varchar(255)
,`tipo_luminaria` varchar(255)
,`estado_luminaria` varchar(255)
,`tipo_carcasa` varchar(255)
,`tiempo_uso` varchar(255)
,`numero_lamparas` int(11)
,`numero_medidor` varchar(15)
,`carga_aceptada` varchar(2)
,`observaciones` varchar(100)
,`fotografia` varchar(200)
,`conciliada` int(11)
,`users_id` int(11) unsigned
);

-- --------------------------------------------------------

--
-- Estructura para la vista `luminarias_completa`
--
DROP TABLE IF EXISTS `luminarias_completa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `luminarias_completa`  AS  select `luminarias`.`codigo_luminaria` AS `coodigo_luminaria`,`luminarias`.`fecha` AS `fecha`,`luminarias`.`hora` AS `hora`,`luminarias`.`operador` AS `operador`,`luminarias`.`latitud` AS `latitud`,`luminarias`.`longitud` AS `longitud`,`municipio`.`nombre_municipio` AS `nombre_municipio`,`colonia`.`nombre_colonia` AS `nombre_colonia`,`calle`.`nombre_calle` AS `nombre_calle`,`tipo_calle`.`tipo` AS `tipo_calle`,`tipo_via`.`tipo` AS `tipo_via`,`tipo_poste`.`tipo` AS `tipo_poste`,`estado_poste`.`estado` AS `estado_poste`,`tipo_luminaria`.`tipo` AS `tipo_luminaria`,`estado_luminaria`.`estado` AS `estado_luminaria`,`tipo_carcasa`.`tipo` AS `tipo_carcasa`,`tiempo_uso`.`horas` AS `tiempo_uso`,`luminarias`.`numero_de_lamparas` AS `numero_lamparas`,`luminarias`.`numero_medidor` AS `numero_medidor`,`luminarias`.`carga_aceptada` AS `carga_aceptada`,`luminarias`.`observaciones` AS `observaciones`,`luminarias`.`fotografia` AS `fotografia`,`luminarias`.`conciliada` AS `conciliada`,`luminarias`.`users_id` AS `users_id` from ((((((((((((`luminarias` join `municipio`) join `colonia`) join `calle`) join `tipo_calle`) join `tipo_via`) join `colonia_municipio`) join `tipo_poste`) join `estado_poste`) join `tipo_luminaria`) join `estado_luminaria`) join `tipo_carcasa`) join `tiempo_uso`) where ((`colonia_municipio`.`municipio_id` = `municipio`.`id`) and (`colonia_municipio`.`colonia_id` = `colonia`.`id`) and (`colonia`.`calle_id` = `calle`.`id`) and (`calle`.`tipo_via_id` = `tipo_via`.`id`) and (`calle`.`tipo_calle_id` = `tipo_calle`.`id`) and (`luminarias`.`tipo_poste_id` = `tipo_poste`.`id`) and (`luminarias`.`estado_poste_id` = `estado_poste`.`id`) and (`luminarias`.`tipo_de_luminaria_id` = `tipo_luminaria`.`id`) and (`luminarias`.`estado_luminaria_id` = `estado_luminaria`.`id`) and (`luminarias`.`tipo_carcasa_id` = `tipo_carcasa`.`id`) and (`luminarias`.`tiempo_uso_id` = `tiempo_uso`.`id`) and (`luminarias`.`colonia_municipio_id` = `colonia_municipio`.`id`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
