-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 23:08:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id_sesion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id_sesion`, `id_usuario`, `token`, `fecha_inicio`, `fecha_fin`, `ip`) VALUES
(3, 18, 'adda249272e555a280536a6610631992c3471accea00435495dbc833c13e713f', '2024-11-18 02:15:15', '2024-11-18 02:15:51', '::1'),
(4, 18, 'ffd0bd3901fc387aeb1031516a4622e0c16c532d2b509c384c755d11f94ba5b1', '2024-11-18 02:41:26', '2024-11-18 02:42:49', '::1'),
(5, 18, 'f19abc676f9e050196437596bcf7a6db554baaff402d35001e498a98f7cc6261', '2024-11-18 03:01:38', '2024-11-18 03:13:38', '::1'),
(6, 18, '90b18af019fe327e432145fd46210e8fcd9b74cef15c10f9415854f1d50ba120', '2024-11-18 03:15:12', '2024-11-18 03:16:53', '::1'),
(8, 18, '3738661e746d1bb74b19a35d63d14a39e4b96425ca5872f27116d205f7175451', '2024-11-18 03:50:06', '2024-11-18 03:52:38', '::1'),
(9, 18, 'e60174c41ddf0de5319ca4c2448a291556bebbc068ace579e3cc4e1e16a0ab44', '2024-11-18 03:53:24', '2024-11-18 03:54:58', '::1'),
(10, 18, 'e38e1a16464cb49d63bc48c6d6d54d19459b30619cf58cbd9c39699851990a20', '2024-11-18 04:06:27', '2024-11-18 04:13:13', '::1'),
(11, 18, 'cb983db36f869451ecf79e341df37b448abf7bcc42d2450ffc3f58e8319d00d2', '2024-11-18 07:20:58', '2024-11-18 07:24:45', '::1'),
(12, 18, '7f36f95d362f87d421294eeec1d28e622655d157363fac98777a3ba475cc128c', '2024-11-18 12:21:59', '2024-11-18 14:15:13', '::1'),
(13, 18, 'f8a2255874bf11d3ea431f64623c2439c08dfec3895b1d1ec2a3cb6b81286bd3', '2024-11-18 14:22:56', '2024-11-18 15:05:14', '::1'),
(14, 18, '6713cb9bdca3304afd630c597ec764b99166adc656e6fdaf5da52b606b1e3354', '2024-11-18 15:06:51', '2024-11-19 02:32:26', '::1'),
(15, 18, '7e73dc2e389f7270c7dc63755cf01081cecef7e684e01fe6f51bb0b8ed1588b2', '2024-11-19 02:37:14', '2024-11-19 03:08:46', '::1'),
(16, 18, '71b7acc0a5399671492c852c8e276f587a51d83d924910b1e6ce13c404b53032', '2024-11-19 03:09:00', '2024-11-19 03:44:00', '::1'),
(17, 18, '1143aeff1b66561631b77d7de89bf166af064f3ecc34ec4972c264ec81fa0415', '2024-11-19 03:45:39', '2024-11-19 07:13:39', '::1'),
(18, 18, 'ca54b74b0ed49c9c535e036ccf5d6bb31f0ae63cf79b373fe11207a24c383962', '2024-11-20 08:46:22', '2024-11-20 08:48:24', '::1'),
(19, 18, '7296f284aa4d82e39b0779a133d58b507c0e51b41a42a01823b25518d2c8b4ee', '2024-11-20 08:50:40', '2024-11-20 08:53:02', '::1'),
(20, 18, '98b0f4d9b7e7359eae20548574dd5b07f54b374aa385b1a7ad6131efa954dc90', '2024-11-22 02:35:21', '2024-11-22 02:35:36', '::1'),
(21, 18, 'aa48c081c36b5e727d24d9299b6c1b0fc9bf0f8e3313663b600c5193fcb85ad5', '2024-11-26 03:22:30', '2024-11-26 03:31:44', '::1'),
(22, 18, '10659b79a5284e091d66d29a435bbcc3091990812e2c6987413ebf85e0e8a379', '2024-11-26 03:56:43', '2024-11-26 04:16:52', '::1'),
(23, 18, '87443880be5940770c97aa3bc6b90d28445546856d6fe9966fb6fd095e92b187', '2024-11-26 05:01:32', NULL, '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','huésped','prospecto') NOT NULL DEFAULT 'prospecto',
  `telefono` varchar(12) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`, `rol`, `telefono`, `fecha_registro`, `activo`) VALUES
(1, 'Frida', 'a20214993@alumnos.uady.mx', '$2y$10$oaRW16ESkizCuqhhSk.M.uBrNrKihabFzh34eEMeOR8Ucf0uT3X0a', 'prospecto', '234567', '2024-11-17 07:59:43', 1),
(7, 'fri', 'jjak@gmail.com', '$2y$10$s2vCke7cA/Cf/BNyivNNG.JQrYZG/O.Nr9f5IT7iba6Eoff2ySgR2', 'prospecto', '997812738', '2024-11-17 08:22:47', 1),
(13, 'Emiliano Pineda', 'fridapineda348@gmail.com', '$2y$10$9v0UQOFfouemPNLlDD2Yie3usl6ns64e1k7dCm2nijtHs/d7pcZsG', 'prospecto', '998123456', '2024-11-17 08:51:56', 1),
(17, 'Emiliano Alvarado', 'emi@gmail.com', '$2y$10$7l6dSbbBQ1XGaPLb0YroS.aQqAbg7ZXVoanDP67rRVPorxzpoP/T.', 'prospecto', '9991231234', '2024-11-17 18:05:46', 1),
(18, 'Mariana Pineda', 'mar@gmail.com', '$2y$10$Rnkb5PMb9KRhqbUvJGg6heK53Mc2KgrrT3JSw82wimfiZ7d8wzY5y', 'prospecto', '997812738', '2024-11-17 18:36:06', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id_sesion`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
