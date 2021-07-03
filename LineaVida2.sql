-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2021 a las 19:51:33
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
(1, 720008, 2, 2, 3, 1, 1, 1, 1, 1, 1),
(2, 100, 1, 3, 0, 0, 0, 0, 0, 0, 0),
(3, 720008, 1, 0, 0, 5, 0, 0, 0, 0, 0),
(4, 987, 1, 3, 0, 0, 0, 0, 0, 0, 0),
(5, 720008, 1, 0, 0, 0, 0, 6, 0, 0, 0),
(7, 3145, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 89456, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 35615, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 3145, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 99, 1, 9, 10, 112, 0, 44, 0, 52, 0),
(13, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 720008, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(448, 99, 5, 13, 9, 11, 9, 15, 10, 12, 14),
(7896, 100, 6, 10, 3, 5, 5, 4, 6, 7, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nroFactura` int(11) NOT NULL,
  `idLote` bigint(20) NOT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nroFactura`, `idLote`, `valor`) VALUES
(258, 99, 7581),
(12315, 100, 500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `idLote` bigint(20) NOT NULL,
  `idNitProveedor` bigint(20) NOT NULL,
  `fechaIngresoLote` date DEFAULT current_timestamp(),
  `fechaInicioLote` date DEFAULT NULL,
  `fechaEntregaLote` date DEFAULT NULL,
  `descripcionLotes` text NOT NULL,
  `loteen` varchar(15) NOT NULL,
  `cantidadTotalLotes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`idLote`, `idNitProveedor`, `fechaIngresoLote`, `fechaInicioLote`, `fechaEntregaLote`, `descripcionLotes`, `loteen`, `cantidadTotalLotes`) VALUES
(99, 89456, '2021-02-02', '2021-02-02', '2021-07-02', 'camisamangacorta', 'Entregado', 70),
(100, 79654789, '2021-02-02', '2021-02-02', '2021-02-02', 'camisamangacorta', 'Produccion', 70),
(987, 79654789, '2021-06-19', '2021-06-19', '2021-06-20', 'Camisa manga larga minicuadros', 'Bodega', NULL),
(3145, 123456, '2021-06-19', '2021-06-19', '2021-06-20', 'camisamangacorta cuello en v', 'Bodega', NULL),
(35615, 4576, '2021-06-19', '2021-06-19', '2021-06-20', 'camisamangacorta cuello en v', 'Terminacion', NULL),
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

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('javier_h_n@hotmail.com', '$2y$10$s7SfL/oZwioiwI4fhAs72Ot4/9CQkszOyw35/i6r3luf204IFVfoy', '2021-06-27 19:34:49');

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
(1, 'pepe ganga', '7562481', 'calle 22d # 82-37', 'martha', NULL, '2021-06-23 20:50:02'),
(4576, 'creaciones alejandra', '4246589', 'calle 68 # 72-15', 'alejandra', NULL, NULL),
(12345, 'sharpie ltda', '4246589', 'calle 12 sur #20-65', 'cecilia', '2021-05-29 04:12:28', '2021-05-29 04:12:28'),
(89456, 'alkosto s.a.', '435325', 'cra 30 #18-56', 'milena', NULL, NULL),
(123456, 'everest creaciohnes', '578842759', 'cra 30 #18-56', 'ernesto', NULL, '2021-06-28 02:06:44'),
(9858467, 'mario s.a.', '435325', 'cra 30 #18-56', 'mario', NULL, NULL),
(12689156, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(79627887, 'buda-pest ltda', '7225495', 'carrera 13 # 40-67', 'nestor', NULL, NULL),
(79654789, 'nutesa', '56786436', 'transversal 49 sur # 18-09', 'carlos', NULL, NULL),
(98584678, 'UNION S.A.', '84564853156', 'Carrera12 # 34-65', 'lina', '2021-06-18 11:49:13', '2021-06-23 20:48:34'),
(156518966, 'Codep S.A.', '7562481', 'Carrera12 # 34-65', 'liliana', NULL, NULL),
(618594156, 'Coltextil S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, '2021-06-23 20:38:42'),
(811031385, 'Moda Avanzada S.A', '5120514', 'Centro de la moda centro', 'isabel', NULL, NULL),
(856894567, 'Roger\'s LTDA', '8765985', 'diagonal53 #90-32', 'rogelio', NULL, '2021-06-23 20:49:10'),
(889156400, 'confecciones la excelencia', '7562481', 'Carrera12 # 34-65', 'rodrigo', NULL, NULL),
(889156401, 'Nacional de Confecciones S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, '2021-06-23 20:39:29'),
(889156402, 'Nueva Moda S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, '2021-06-23 20:40:20'),
(889156403, 'Giorgy S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156404, 'Naturals S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156405, 'Revolution S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156478, 'Creaciones Excelsas S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156480, 'KMO S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156481, 'Relevant S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(889156486, 'Bahia S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(985489165, 'Prescot S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(987654321, 'nicolas', '2957824', 'calle 12 sur #20-65', 'nicolas', NULL, NULL),
(999999999, 'Dany Creaciones', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(2147483647, 'Chewbaka S.A.', '7562481', 'Carrera12 # 34-65', 'jorge', NULL, NULL),
(9999999999, 'Dorian\'s', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(99999999999, 'Bening Creaciones', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(999999999999, 'Ropa a la Moda', '4246589', 'calle 12 sur #20-65', 'mario', NULL, NULL),
(99999999999999, 'Quick Creaciones S.A.', '2953136', 'cra 30 #18-56', 'milena', NULL, '2021-05-28 21:19:21');

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'javier', 'javier_h_n@hotmail.com', '$2y$10$kYFVAnMgjbBYWshBvyilmeUVc6R.PjlfIGGZWwQHMQ6HZh0/aWlSa', 'p0rXMPaqR5yG3ml1CV32POr9xB3KKfwt6IvBKFm5CK3kF636xWxKlGlMnT31', '2021-06-27 19:31:13', '2021-06-27 19:31:13'),
(2, 'jose', 'jose.zapata@gmail.com', '$2y$10$wmFchvm3VczkEKv2kb/e/e5.AgcXf0tABY/HkCmdqwSYY0Hs2fT.u', 'uLXKMfOE67KKJ1R5gJudoxaJedEJfYDoFPzlQFcySFNIYz9kj3XnmJUXrO7J', '2021-07-01 11:18:53', '2021-07-01 11:18:53'),
(3, 'admin', 'admin@lineadevida.com', '$2y$10$yCpgMeKsgWJZjEoyfU9PeuT4opyCy/ViazgeXVox79TPKHXHWBkLy', 'EmPmCdJxQBPcjcMyz5iMfLCqSLIEUbgi2u6HDAIbvvAZUxlOIlhJv8GIiY7B', '2021-07-02 02:21:10', '2021-07-02 02:21:10');

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
  ADD KEY `PK_idLotes` (`idLote`);

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
  MODIFY `idEspecificacionLote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7897;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `nroFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12316;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `PK_idLotes` FOREIGN KEY (`idLote`) REFERENCES `lote` (`idLote`);

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`idNitProveedor`) REFERENCES `proveedor` (`idNitProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
