-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2021 a las 03:05:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lineavida2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `idColor` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`idColor`, `color`) VALUES
(1, 'Azul oscuro'),
(2, 'Coral'),
(3, 'Vinotinto'),
(4, 'Azul claro'),
(5, 'Amarillo'),
(6, 'Rojo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'alexis', 'alexis@protonmail.com', 'carrera 8 #64-42 piso 5 Chapinero', '2021-05-16 00:31:13', '2021-05-16 00:31:13'),
(4, 'Estado', 'omar.caceres@gmail.com', 'carrera 8 #64-42 piso 5 Chapinero', '2021-05-17 08:13:57', '2021-05-17 08:13:57'),
(7, 'ratnik', 'ratnik@ratmik.com', 'calle 26 cra 4', '2021-05-17 08:32:39', '2021-05-17 08:32:39'),
(8, 'Peksimet', 'peksimet@hotmail.com', 'calle 13 # 68-12', '2021-05-17 19:07:32', '2021-05-17 19:07:32'),
(10, 'MasterBot', 'administrador@admin.com', 'calle 26 cra 4', '2021-05-17 19:08:59', '2021-05-17 19:08:59'),
(11, 'omar', 'omar.caceres@gmail.com', 'calle 26 cra 4', '2021-05-17 21:44:43', '2021-05-18 01:49:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificacionlote`
--

CREATE TABLE `especificacionlote` (
  `idEspecificacionLote` int(11) NOT NULL,
  `idLote` bigint(20) NOT NULL,
  `idColor` int(11) DEFAULT NULL,
  `cantidadxxs` int(11) NOT NULL,
  `cantidadxs` int(11) NOT NULL,
  `cantidads` int(11) NOT NULL,
  `cantidadm` int(11) NOT NULL,
  `cantidadl` int(11) NOT NULL,
  `cantidadxl` int(11) NOT NULL,
  `cantidad2xl` int(11) NOT NULL,
  `cantidad3xl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especificacionlote`
--

INSERT INTO `especificacionlote` (`idEspecificacionLote`, `idLote`, `idColor`, `cantidadxxs`, `cantidadxs`, `cantidads`, `cantidadm`, `cantidadl`, `cantidadxl`, `cantidad2xl`, `cantidad3xl`) VALUES
(1, 720008, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nroFactura` int(11) NOT NULL,
  `idLotes` bigint(20) NOT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `idLote` bigint(20) NOT NULL,
  `idNitProveedor` bigint(20) NOT NULL,
  `fechaIngresoLote` date DEFAULT current_timestamp(),
  `fechaInicioLote` date DEFAULT current_timestamp(),
  `fechaEntregaLote` date DEFAULT NULL,
  `descripcionLotes` text NOT NULL,
  `loteen` varchar(15) NOT NULL,
  `cantidadTotalLotes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`idLote`, `idNitProveedor`, `fechaIngresoLote`, `fechaInicioLote`, `fechaEntregaLote`, `descripcionLotes`, `loteen`, `cantidadTotalLotes`) VALUES
(99, 89456, '2021-02-02', '2021-02-02', '2021-02-02', 'camisamangacorta', 'Produccion', 70),
(100, 79654789, '2021-02-02', '2021-02-02', '2021-02-02', 'camisamangacorta', 'Produccion', 70),
(3145, 123456, '2021-06-19', '2021-06-19', '2021-06-20', 'camisamangacorta cuello en v', 'Bodega', NULL),
(35615, 4576, '2021-06-19', '2021-06-19', '2021-06-20', 'camisamangacorta cuello en v', 'Bodega', NULL),
(89456, 889156400, '2021-06-19', '2021-06-19', '2021-06-20', 'camisamangacorta cuello en v', 'Bodega', NULL),
(720008, 99999999999999, '2021-01-01', '2021-02-02', '2021-02-02', 'Camisa manga larga minicuadros', 'Entregado', 50);

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
(3, '2021_05_15_181652_create_customers_table', 2);

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
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idNitProveedor` bigint(20) NOT NULL,
  `nombreProveedor` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `encargadoProveedor` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idNitProveedor`, `nombreProveedor`, `telefono`, `direccion`, `encargadoProveedor`, `created_at`, `updated_at`) VALUES
(1, 'pepe ganga', '7562481', 'afs', 'javier', NULL, NULL),
(4576, 'creaciones alejandra', '4246589', 'calle 68 # 72-15', 'alejandra', NULL, NULL),
(12345, 'sharpie ltda', '4246589', 'calle 12 sur #20-65', 'cecilia', '2021-05-29 04:12:28', '2021-05-29 04:12:28'),
(89456, 'alkosto s.a.', '435325', 'cra 30 #18-56', 'milena', NULL, NULL),
(123456, 'everest creaciohnes', '578842759', 'cra 30 #18-56', 'ernesto mancera', NULL, NULL),
(9858467, 'mario s.a.', '435325', 'cra 30 #18-56', 'mario', NULL, NULL),
(12689156, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(79627887, 'buda-pest ltda', '7225495', 'carrera 13 # 40-67', 'nestor', NULL, NULL),
(79654789, 'nutesa', '56786436', 'transversal 49 sur # 18-09', 'carlos', NULL, NULL),
(98584678, 'unal', '84564853156', 'Carrera12 # 34-65', 'lina', '2021-06-18 11:49:13', '2021-06-18 11:49:13'),
(156518966, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'liliana', NULL, NULL),
(618594156, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(811031385, 'Moda Avanzada S.A', '5120514', 'Centro de la moda centro', 'isabel', NULL, NULL),
(856894567, 'roger', '8765985', 'diagonal53 #90-32', 'rogelio', NULL, NULL),
(889156400, 'confecciones la excelencia', '7562481', 'Carrera12 # 34-65', 'rodrigo', NULL, NULL),
(889156401, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156402, 'Codep2 S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, '2021-06-18 11:50:21'),
(889156403, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156404, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156405, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156478, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156480, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156481, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156486, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(985489165, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(987654321, 'nicolas', '2957824', 'calle 12 sur #20-65', 'nicolas', NULL, NULL),
(999999999, 'dd', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(2147483647, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(9999999999, 'dd', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(99999999999, 'dd', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(999999999999, 'dd', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(99999999999999, 'drake industries', '2953136', 'cra 30 #18-56', 'milena', NULL, '2021-05-28 21:19:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `idTalla` int(11) NOT NULL,
  `talla` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`idTalla`, `talla`) VALUES
(1, 's'),
(2, 'm'),
(3, 'l'),
(4, 'xl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idColor`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especificacionlote`
--
ALTER TABLE `especificacionlote`
  ADD PRIMARY KEY (`idEspecificacionLote`),
  ADD KEY `idLotes` (`idLote`),
  ADD KEY `PK_idColor` (`idColor`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`nroFactura`),
  ADD KEY `PK_idLotes` (`idLotes`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`idLote`),
  ADD KEY `idNitProveedorIndex` (`idNitProveedor`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idNitProveedor`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`idTalla`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `idColor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `especificacionlote`
--
ALTER TABLE `especificacionlote`
  MODIFY `idEspecificacionLote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `nroFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `idTalla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `especificacionlote`
--
ALTER TABLE `especificacionlote`
  ADD CONSTRAINT `PK_idColor` FOREIGN KEY (`idColor`) REFERENCES `color` (`idColor`),
  ADD CONSTRAINT `especificacionlote_ibfk_1` FOREIGN KEY (`idLote`) REFERENCES `lote` (`idLote`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `PK_idLotes` FOREIGN KEY (`idLotes`) REFERENCES `lote` (`idLote`);

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`idNitProveedor`) REFERENCES `proveedor` (`idNitProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
