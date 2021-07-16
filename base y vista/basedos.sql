-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2021 a las 23:11:01
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
-- Estructura de tabla para la tabla `calle`
--

CREATE TABLE `calle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_via_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tipo_calle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calle`
--

INSERT INTO `calle` (`id`, `nombre_calle`, `tipo_via_id`, `tipo_calle_id`, `created_at`, `updated_at`) VALUES
(1, '1 de Mayo', 1, 1, '2021-06-25 17:26:46', '0000-00-00 00:00:00'),
(2, 'Las Torres', 1, 3, '2021-06-25 17:26:46', '0000-00-00 00:00:00'),
(3, 'Adolfo Lopez Mateos', 1, 3, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(4, 'Priv. Andres Soler 14', 2, 2, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(5, 'Priv. Morelos', 2, 4, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(6, 'Agustin Millan', 2, 1, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(7, 'Priv. de Matamoros', 2, 2, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(8, 'Vista Hermosa', 2, 4, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(9, 'Pino Suarez', 2, 1, '2021-06-25 17:26:47', '0000-00-00 00:00:00'),
(10, 'Los Cedros', 2, 2, '2021-06-25 17:26:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonia`
--

CREATE TABLE `colonia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colonia`
--

INSERT INTO `colonia` (`id`, `nombre_colonia`, `calle_id`, `created_at`, `updated_at`) VALUES
(1, 'El Porvenir II', 1, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(2, 'El Porvenir II', 4, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(3, 'Reforma', 2, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(4, 'Reforma', 3, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(5, 'Emiliano Zapata', 5, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(6, 'Emiliano Zapata', 6, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(7, 'Irma Patricia', 7, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(8, 'Irma Patricia', 8, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(9, 'La Joya', 9, '2021-06-25 17:32:19', '0000-00-00 00:00:00'),
(10, 'La Joya', 10, '2021-06-25 17:32:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonia_municipio`
--

CREATE TABLE `colonia_municipio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `colonia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `municipio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `colonia_municipio`
--

INSERT INTO `colonia_municipio` (`id`, `colonia_id`, `municipio_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-06-25 17:35:41', '0000-00-00 00:00:00'),
(2, 2, 1, '2021-06-25 17:35:41', '0000-00-00 00:00:00'),
(3, 3, 1, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(4, 4, 1, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(5, 5, 1, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(6, 6, 2, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(7, 7, 2, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(8, 8, 2, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(9, 9, 2, '2021-06-25 17:35:42', '0000-00-00 00:00:00'),
(10, 10, 2, '2021-06-25 17:35:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_carcasa`
--

CREATE TABLE `estado_carcasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_carcasa`
--

INSERT INTO `estado_carcasa` (`id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Bueno', '2021-06-25 17:18:08', '0000-00-00 00:00:00'),
(2, 'Dañada', '2021-06-25 17:18:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_luminaria`
--

CREATE TABLE `estado_luminaria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_luminaria`
--

INSERT INTO `estado_luminaria` (`id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Bueno', '2021-06-25 17:17:45', '0000-00-00 00:00:00'),
(2, 'Dañada', '2021-06-25 17:17:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_poste`
--

CREATE TABLE `estado_poste` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_poste`
--

INSERT INTO `estado_poste` (`id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Buen Estado', '2021-06-25 17:16:21', '0000-00-00 00:00:00'),
(2, 'Mal Estado', '2021-06-25 17:16:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `luminarias`
--

CREATE TABLE `luminarias` (
  `id_luminaria` int(11) UNSIGNED NOT NULL,
  `codigo_luminaria` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `operador` varchar(3) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `colonia_municipio_id` int(11) NOT NULL,
  `tipo_poste_id` int(11) NOT NULL,
  `estado_poste_id` int(11) NOT NULL,
  `tipo_de_luminaria_id` int(11) NOT NULL,
  `estado_luminaria_id` int(11) NOT NULL,
  `tipo_carcasa_id` int(11) NOT NULL,
  `tiempo_uso_id` int(11) NOT NULL,
  `numero_de_lamparas` int(11) NOT NULL,
  `numero_medidor` varchar(15) NOT NULL,
  `carga_aceptada` varchar(2) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `fotografia` varchar(200) NOT NULL,
  `fotografia_2` varchar(200) NOT NULL,
  `conciliada` int(11) DEFAULT NULL,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `luminarias`
--

INSERT INTO `luminarias` (`id_luminaria`, `codigo_luminaria`, `fecha`, `hora`, `operador`, `latitud`, `longitud`, `colonia_municipio_id`, `tipo_poste_id`, `estado_poste_id`, `tipo_de_luminaria_id`, `estado_luminaria_id`, `tipo_carcasa_id`, `tiempo_uso_id`, `numero_de_lamparas`, `numero_medidor`, `carga_aceptada`, `observaciones`, `fotografia`, `fotografia_2`, `conciliada`, `users_id`) VALUES
(1, '162394854019.31145185683402,-99.53342545777559A3', '2021-06-17', '11:49:44', 'A3', 19.31145185683402, -99.53342545777559, 1, 1, 1, 1, 1, 1, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 1, 3),
(3, '162394860019.31115158178605,-99.53336477279663A3', '2021-06-17', '11:55:40', 'A3', 19.31115158178605, -99.53336477279663, 1, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(4, '162394860019.310970593819548,-99.53321121633054A3', '2021-06-17', '11:55:00', 'A3', 19.310970593819548, -99.53321121633054, 1, 3, 1, 3, 1, 3, 2, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(5, '162394860019.310944964388515,-99.53334633260965A3', '2021-06-17', '12:00:00', 'A3', 19.310944964388515, -99.53334633260965, 2, 1, 1, 1, 1, 1, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(6, '162394872019.309592610687474,-99.53312739729881A3', '2021-06-17', '12:05:00', 'A3', 19.309592610687474, -99.53312739729881, 2, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(7, '162394860019.310944964388515,-99.53334633260965A3', '2021-06-17', '12:10:00', 'A3', 19.310009645613917, -99.5332021638751, 2, 3, 1, 3, 1, 3, 2, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(8, '162394890019.310356752021637,-99.53327257186173A3', '2021-06-17', '12:15:00', 'A3', 19.310356752021637, -99.53327257186173, 3, 1, 1, 1, 1, 1, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(9, '162394896019.310603238257578,-99.5332906767726A3', '2021-06-17', '12:20:00', 'A3', 19.310603238257578, -99.5332906767726, 3, 2, 1, 2, 1, 2, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(10, '162394902019.31086111498732,-99.53330643475056A3', '2021-06-17', '12:25:00', 'A3', 19.31086111498732, -99.53330643475056, 3, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(11, '162394902019.31085004053488,-99.53333526849747A3', '2021-06-17', '12:30:00', 'A3', 19.31085004053488, -99.53333526849747, 4, 1, 1, 1, 1, 1, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(12, '162394908019.310844028688972,-99.53340232372284A3', '2021-06-17', '12:35:00', 'A3', 19.310844028688972, -99.53340232372284, 4, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(13, '162394914019.3111389252914,-99.53372653573751A3', '2021-06-17', '12:40:00', 'A3', 19.3111389252914, -99.53372653573751, 4, 3, 1, 3, 1, 3, 1, 3, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(14, '162394920019.311471790774476,-99.53377414494753A3', '2021-06-17', '12:45:00', 'A3', 19.311471790774476, -99.53377414494753, 5, 1, 1, 1, 1, 1, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(15, '162394926019.311800542235684,-99.53383013606071A3', '2021-06-17', '12:50:00', 'A3', 19.311800542235684, -99.53383013606071, 5, 2, 1, 2, 1, 2, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(16, '162394926019.312105245839025,-99.5339035615325A3', '2021-06-17', '12:55:00', 'A3', 19.312105245839025, -99.5339035615325, 5, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 3),
(17, '162394926019.31099432477062,-99.53364439308643A3', '2021-06-17', '12:55:00', 'A3', 19.31099432477062, -99.53364439308643, 6, 1, 1, 1, 1, 1, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(18, '162394932019.311374968755185,-99.53370977193117A3', '2021-06-17', '01:05:00', 'A3', 19.311374968755185, -99.53370977193117, 6, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(19, '162394932019.31163537555917,-99.5337563753128A3', '2021-06-17', '01:10:00', 'A3', 19.31163537555917, -99.5337563753128, 6, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(20, '162394932019.31163537555917,-99.5337563753128A3', '2021-06-17', '01:15:00', 'A3', 19.31163537555917, -99.5337563753128, 7, 1, 1, 1, 1, 1, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(21, '162394938019.31179864376908,-99.53378587961197A3', '2021-06-17', '01:20:00', 'A3', 19.31179864376908, -99.53378587961197, 7, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(22, '162394938019.312080565817524,-99.53383784741163A3', '2021-06-17', '01:25:00', 'A3', 19.312080565817524, -99.53383784741163, 7, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(23, '162394944019.31088516236716,-99.5336202532053A3', '2021-06-17', '01:30:00', 'A3', 19.31088516236716, -99.5336202532053, 8, 1, 1, 1, 1, 1, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(24, '162394950019.311070896615934,-99.53407488763332A3', '2021-06-17', '01:35:00', 'A3', 19.311070896615934, -99.53407488763332, 8, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(25, '162394956019.311301561172932,-99.5341107621789A3', '2021-06-17', '01:40:00', 'A3', 19.311301561172932, -99.5341107621789, 8, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(26, '162394956019.31163189503354,-99.53417580574751A3', '2021-06-17', '01:45:00', 'A3', 19.31163189503354, -99.53417580574751, 9, 1, 1, 1, 1, 1, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(27, '162394962019.312011588301775,-99.53421335667372A3', '2021-06-17', '01:50:00', 'A3', 19.312011588301775, -99.53421335667372, 9, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(28, '162394974019.310916170825408,-99.53435216099022A3', '2021-06-17', '01:55:00', 'A3', 19.310916170825408, -99.53435216099022, 9, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(29, '162394986019.311130382156975,-99.5343903824687A3', '2021-06-17', '02:00:00', 'A3', 19.311130382156975, -99.5343903824687, 10, 1, 1, 1, 1, 1, 1, 2, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(30, '162394992019.311373703107495,-99.53442960977554A3', '2021-06-17', '02:05:00', 'A3', 19.311373703107495, -99.53442960977554, 10, 2, 1, 2, 1, 2, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4),
(31, '162394992019.311594242069713,-99.5344527438283A3', '2021-06-17', '02:10:00', 'A3', 19.311594242069713, -99.5344527438283, 10, 3, 1, 3, 1, 3, 1, 1, '', 'SI', '', '1404642043/2021-06-17 11.50.03.jpg', '', 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_05_27_071429_create_tipo_calle_table', 1),
(4, '2021_05_27_071829_create_tipo_via_table', 1),
(5, '2021_05_27_071921_create_tipo_poste_table', 1),
(6, '2021_05_27_071949_create_tipo_balastro_table', 1),
(7, '2021_05_27_072013_create_tipo_carcasa_table', 1),
(8, '2021_05_27_072048_create_tipo_luminaria_table', 1),
(9, '2021_05_27_072141_create_municipio_table', 1),
(10, '2021_05_27_072229_create_rol_table', 1),
(11, '2021_05_27_072305_create_tiempo_uso_table', 1),
(12, '2021_05_27_072401_create_estado_poste_table', 1),
(13, '2021_05_27_072432_create_estado_balastro_table', 1),
(14, '2021_05_27_072501_create_estado_luminaria_table', 1),
(15, '2021_05_27_072523_create_estado_carcasa_table', 1),
(16, '2021_05_27_072554_create_status_table', 1),
(17, '2021_05_27_072650_create_calle_table', 1),
(18, '2021_05_27_073148_create_colonia_table', 1),
(19, '2021_05_27_073255_create_colonia_municipio_table', 1),
(20, '2021_05_27_073614_add_foreign_key_to_users_table', 1),
(21, '2021_05_27_073720_create_representante_municipio_table', 1),
(22, '2021_05_27_074222_create_informes_table', 1),
(23, '2021_05_27_074356_create_seguridad_table', 1),
(24, '2021_05_27_074629_create_programa_semanal_table', 1),
(25, '2021_05_27_075136_create_luminaria_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre_municipio`, `created_at`, `updated_at`) VALUES
(1, 'Lerma', '2021-06-25 16:09:35', '0000-00-00 00:00:00'),
(2, 'Zinacantepec', '2021-06-25 16:11:48', '0000-00-00 00:00:00'),
(7, 'Xonacatlan', NULL, NULL),
(8, 'Otzolotepec', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_semanal`
--

CREATE TABLE `programa_semanal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_semana` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `eventos` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programa_semanal`
--

INSERT INTO `programa_semanal` (`id`, `no_semana`, `inicio`, `fin`, `eventos`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-12', '2021-04-18', 4000.00, '2021-06-25 17:09:39', '0000-00-00 00:00:00'),
(2, 2, '2021-04-19', '2021-04-25', 5500.00, '2021-06-25 17:09:40', '0000-00-00 00:00:00'),
(3, 3, '2021-04-26', '2021-05-02', 4500.00, '2021-06-25 17:09:40', '0000-00-00 00:00:00'),
(4, 4, '2021-05-03', '2021-05-09', 4500.00, '2021-06-25 17:09:40', '0000-00-00 00:00:00'),
(5, 5, '2021-05-10', '2021-05-16', 5000.00, '2021-06-25 17:09:40', '0000-00-00 00:00:00'),
(6, 6, '2021-05-17', '2021-05-23', 7000.00, '2021-06-25 17:09:40', '0000-00-00 00:00:00'),
(7, 7, '2021-05-24', '2021-05-31', 7500.00, '2021-06-25 17:09:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante_municipio`
--

CREATE TABLE `representante_municipio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `municipio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `representante_municipio`
--

INSERT INTO `representante_municipio` (`id`, `users_id`, `municipio_id`, `cargo`, `representante`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Presidente', 'Lic. Ximena Gonzalez Arias', '2021-06-25 17:02:25', '0000-00-00 00:00:00'),
(2, 4, 2, 'Presidente', 'Ing. Victor León Zanchez', '2021-06-25 17:02:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `tipo_rol`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-06-22 18:16:03', '2021-06-22 18:16:03'),
(2, 'Supervisor', '2021-06-22 18:16:03', '2021-06-22 18:16:03'),
(3, 'Municipio', '2021-06-22 18:16:03', '2021-06-22 18:16:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `id_seguridad` int(11) NOT NULL,
  `dia` varchar(30) NOT NULL,
  `rij` varchar(100) DEFAULT NULL,
  `rim` varchar(100) DEFAULT NULL,
  `supervicion` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguridad`
--

INSERT INTO `seguridad` (`id_seguridad`, `dia`, `rij`, `rim`, `supervicion`, `foto`) VALUES
(4, '12 de abril', 'rij460eb4b04c4f50.jpg', 'rim 460eb4b04c4f56.jpg', 'supervision 460eb4b04c4f58.jpg', 'foto 460eb4b04c4f59.jpg'),
(5, '13 de abril', '', '', '', ''),
(6, '14 de abril', '', '', '', ''),
(7, '15 de abril', '', '', '', ''),
(8, '16 de abril', '', '', '', ''),
(9, '17 de abril', '', '', '', ''),
(10, '18 de abril', '', '', '', ''),
(11, '19 de abril', '', '', '', ''),
(12, '20 de abril', '', '', '', ''),
(13, '21 de abril', '', '', '', ''),
(14, '22 de abril', '', '', '', ''),
(15, '23 de abril', '', '', '', ''),
(16, '24 de abril', '', '', '', ''),
(17, '25 de abril', '', '', '', ''),
(18, '26 de abril', '', '', '', ''),
(19, '27 de abril', NULL, NULL, NULL, NULL),
(20, '28 de abril', '', '', '', ''),
(21, '29 de abril', '', '', '', ''),
(22, '30 de abril', '', '', '', ''),
(23, '1 de mayo', '', '', '', ''),
(24, '2 de mayo', '', '', '', ''),
(25, '3 de mayo', '', '', '', ''),
(26, '4 de mayo', '', '', '', ''),
(27, '5 de mayo', '', '', '', ''),
(28, '6 de mayo', '', '', '', ''),
(29, '7 de mayo', '', '', '', ''),
(30, '8 de mayo', '', '', '', ''),
(31, '9 de mayo', '', '', '', ''),
(32, '10 de mayo', '', '', '', ''),
(33, '11 de mayo', '', '', '', ''),
(34, '12 de mayo', '', '', '', ''),
(35, '13 de mayo', '', '', '', ''),
(36, '14 de mayo', '', '', '', ''),
(37, '15 de mayo', '', '', '', ''),
(38, '16 de mayo', '', '', '', ''),
(39, '17 de mayo', '', '', '', ''),
(40, '18 de mayo', '', '', '', ''),
(41, '19 de mayo', '', '', '', ''),
(42, '20 de mayo', '', '', '', ''),
(43, '21 de mayo', '', '', '', ''),
(44, '22 de mayo', '', '', '', ''),
(45, '23 de mayo', '', '', '', ''),
(46, '24 de mayo', '', '', '', ''),
(47, '25 de mayo', '', '', '', ''),
(48, '26 de mayo', '', '', '', ''),
(49, '27 de mayo', '', '', '', ''),
(50, '28 de mayo', '', '', '', ''),
(51, '29 de mayo', '', '', '', ''),
(52, '30 de mayo', '', '', '', ''),
(53, '31 de mayo', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_uso`
--

CREATE TABLE `tiempo_uso` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `horas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tiempo_uso`
--

INSERT INTO `tiempo_uso` (`id`, `horas`, `created_at`, `updated_at`) VALUES
(1, '12 Horas', '2021-06-25 15:47:27', '0000-00-00 00:00:00'),
(2, '24 Horas', '2021-06-25 15:47:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_calle`
--

CREATE TABLE `tipo_calle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_calle`
--

INSERT INTO `tipo_calle` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Avenida', '2021-06-22 18:53:24', '0000-00-00 00:00:00'),
(2, 'Calle', '2021-06-22 18:53:25', '0000-00-00 00:00:00'),
(3, 'Vialidad', '2021-06-22 18:53:25', '0000-00-00 00:00:00'),
(4, 'Parque o Jardin', '2021-06-22 18:53:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_carcasa`
--

CREATE TABLE `tipo_carcasa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_carcasa`
--

INSERT INTO `tipo_carcasa` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Farol', '2021-06-22 18:51:37', '0000-00-00 00:00:00'),
(2, 'Sub-Urbana', '2021-06-22 18:51:37', '0000-00-00 00:00:00'),
(3, 'Reflector', '2021-06-22 18:51:38', '0000-00-00 00:00:00'),
(4, 'OV-15', '2021-06-22 18:51:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_luminaria`
--

CREATE TABLE `tipo_luminaria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `watts` double NOT NULL,
  `balastro` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porc_balastro` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_luminaria`
--

INSERT INTO `tipo_luminaria` (`id`, `tipo`, `watts`, `balastro`, `porc_balastro`, `created_at`, `updated_at`) VALUES
(1, 'Vapor de Sodio 100', 100, 'SI', 0.25, '2021-06-22 18:38:20', '0000-00-00 00:00:00'),
(2, 'Led 50', 50, 'SI', 0.25, '2021-06-22 18:38:21', '0000-00-00 00:00:00'),
(3, 'Ahorrador 85', 85, 'SI', 0.25, '2021-06-22 18:38:21', '0000-00-00 00:00:00'),
(4, 'Led 100 Solares', 100, 'SI', 0, '2021-06-22 18:38:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_poste`
--

CREATE TABLE `tipo_poste` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_poste`
--

INSERT INTO `tipo_poste` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Poste Concreto', '2021-06-22 18:26:33', '0000-00-00 00:00:00'),
(2, 'Poste Metalico', '2021-06-22 18:26:33', '0000-00-00 00:00:00'),
(3, 'Poste Madera', '2021-06-22 18:26:33', '0000-00-00 00:00:00'),
(4, 'Casa', '2021-06-22 18:26:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_via`
--

CREATE TABLE `tipo_via` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_via`
--

INSERT INTO `tipo_via` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Primaria', '2021-06-22 18:25:03', '0000-00-00 00:00:00'),
(2, 'Secundaria', '2021-06-22 18:25:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_paterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_materno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `municipio_id`, `password`, `name`, `a_paterno`, `a_materno`, `remember_token`, `created_at`, `updated_at`, `rol_id`, `admin`) VALUES
(1, 'admin@gmail.com', NULL, '$2y$10$Ikp7B.CpuKpEW1VvjSj/uOBAdtklUPh7JuQOs7KugSO6ZpdYDaYki', 'Juan', 'Marcos', 'Rodriguez', '0Lxkb6JfPvQ5c4402N1PzCW1VhKsrITOfZe2oIVasGpCrU8C7ixEMzIFI45d', '2021-06-22 18:18:27', '0000-00-00 00:00:00', 1, 1),
(2, 'cfe@gmail.com', NULL, '$2y$10$Ikp7B.CpuKpEW1VvjSj/uOBAdtklUPh7JuQOs7KugSO6ZpdYDaYki', 'Viridiana', 'Sanchez', 'Marquez', '', '2021-06-22 18:19:28', '0000-00-00 00:00:00', 2, 0),
(3, 'lerma@gmail.com', 1, '$2y$10$Ikp7B.CpuKpEW1VvjSj/uOBAdtklUPh7JuQOs7KugSO6ZpdYDaYki', 'Daniel', 'Montes', 'De Oca', '', '2021-06-22 18:21:04', '0000-00-00 00:00:00', 3, 0),
(4, 'zinacantepec@gmail.com', 2, '$2y$10$Ikp7B.CpuKpEW1VvjSj/uOBAdtklUPh7JuQOs7KugSO6ZpdYDaYki', 'Cristian', 'Arias', 'Martinez', '', '2021-06-22 18:21:04', '0000-00-00 00:00:00', 3, 0),
(11, 'osva2211jim@gmail.com', 7, '$2y$10$4oTGED/Hmnr9dVVSjhEcU.5cg88kpJFLD4C0gONokxvLV6yVu6k6y', 'marie', 'moziñoz', 'zepeda', NULL, '2021-07-11 00:35:28', '2021-07-11 00:35:28', 3, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calle`
--
ALTER TABLE `calle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calle_tipo_via_id_foreign` (`tipo_via_id`),
  ADD KEY `calle_tipo_calle_id_foreign` (`tipo_calle_id`);

--
-- Indices de la tabla `colonia`
--
ALTER TABLE `colonia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colonia_calle_id_foreign` (`calle_id`);

--
-- Indices de la tabla `colonia_municipio`
--
ALTER TABLE `colonia_municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colonia_municipio_colonia_id_foreign` (`colonia_id`),
  ADD KEY `colonia_municipio_municipio_id_foreign` (`municipio_id`);

--
-- Indices de la tabla `estado_carcasa`
--
ALTER TABLE `estado_carcasa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_luminaria`
--
ALTER TABLE `estado_luminaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_poste`
--
ALTER TABLE `estado_poste`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informes_municipio_id_foreign` (`municipio_id`),
  ADD KEY `informes_status_id_foreign` (`status_id`);

--
-- Indices de la tabla `luminarias`
--
ALTER TABLE `luminarias`
  ADD PRIMARY KEY (`id_luminaria`),
  ADD KEY `users_id_fk` (`users_id`) USING BTREE;

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indices de la tabla `programa_semanal`
--
ALTER TABLE `programa_semanal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `representante_municipio`
--
ALTER TABLE `representante_municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `representante_municipio_users_id_foreign` (`users_id`),
  ADD KEY `representante_municipio_municipio_id_foreign` (`municipio_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`id_seguridad`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiempo_uso`
--
ALTER TABLE `tiempo_uso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_calle`
--
ALTER TABLE `tipo_calle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_carcasa`
--
ALTER TABLE `tipo_carcasa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_luminaria`
--
ALTER TABLE `tipo_luminaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_poste`
--
ALTER TABLE `tipo_poste`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_via`
--
ALTER TABLE `tipo_via`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_rol_id_foreign` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calle`
--
ALTER TABLE `calle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `colonia`
--
ALTER TABLE `colonia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `colonia_municipio`
--
ALTER TABLE `colonia_municipio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estado_carcasa`
--
ALTER TABLE `estado_carcasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_luminaria`
--
ALTER TABLE `estado_luminaria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_poste`
--
ALTER TABLE `estado_poste`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `luminarias`
--
ALTER TABLE `luminarias`
  MODIFY `id_luminaria` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `programa_semanal`
--
ALTER TABLE `programa_semanal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `representante_municipio`
--
ALTER TABLE `representante_municipio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  MODIFY `id_seguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiempo_uso`
--
ALTER TABLE `tiempo_uso`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_calle`
--
ALTER TABLE `tipo_calle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_carcasa`
--
ALTER TABLE `tipo_carcasa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_luminaria`
--
ALTER TABLE `tipo_luminaria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_poste`
--
ALTER TABLE `tipo_poste`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_via`
--
ALTER TABLE `tipo_via`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calle`
--
ALTER TABLE `calle`
  ADD CONSTRAINT `calle_tipo_calle_id_foreign` FOREIGN KEY (`tipo_calle_id`) REFERENCES `tipo_calle` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `calle_tipo_via_id_foreign` FOREIGN KEY (`tipo_via_id`) REFERENCES `tipo_via` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colonia`
--
ALTER TABLE `colonia`
  ADD CONSTRAINT `colonia_calle_id_foreign` FOREIGN KEY (`calle_id`) REFERENCES `calle` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colonia_municipio`
--
ALTER TABLE `colonia_municipio`
  ADD CONSTRAINT `colonia_municipio_colonia_id_foreign` FOREIGN KEY (`colonia_id`) REFERENCES `colonia` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `colonia_municipio_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `informes`
--
ALTER TABLE `informes`
  ADD CONSTRAINT `informes_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `informes_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `representante_municipio`
--
ALTER TABLE `representante_municipio`
  ADD CONSTRAINT `representante_municipio_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `representante_municipio_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
