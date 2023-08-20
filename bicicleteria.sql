-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 20:27:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bicicleteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProductos` int(50) NOT NULL,
  `Titulos` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Imagenes` varchar(50) NOT NULL,
  `Precios` int(50) NOT NULL,
  `UsuarioAlta` varchar(50) DEFAULT NULL,
  `FechaAlta` date DEFAULT NULL,
  `UsuarioModif` varchar(50) DEFAULT NULL,
  `FechaModif` date DEFAULT NULL,
  `UsuarioBaja` varchar(50) DEFAULT NULL,
  `FechaBaja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProductos`, `Titulos`, `Descripcion`, `Imagenes`, `Precios`, `UsuarioAlta`, `FechaAlta`, `UsuarioModif`, `FechaModif`, `UsuarioBaja`, `FechaBaja`) VALUES
(1, 'Tern Link D8 R20 GB', 'CUADRO: Tern Link de AluminioTRANSMISIÓN: Shimano Claris de 8v', '../imagenes/bici1.jpg', 133500, NULL, NULL, 'Hugo', '2023-06-29', NULL, NULL),
(2, 'Firebird Adventure R29', 'Llantas doble pared con cubierta MTB 29×2.10 con suspensión y bloqueo', '../imagenes/bici2.jpg', 65320, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(3, 'Zenith Andes ELT R29', 'Zenith Andes Aluminio 6061 con frente integrado y cableado interno', '../imagenes/bici3.jpg', 350780, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(4, 'Raleigh Mojave 4.5 R29 ', 'Doble Pared con cubierta MTB 29×2.10', '../imagenes/bici4.jpg', 212563, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(5, 'Moove Cronos R29', 'Disco Hidráulico Shimano BR-MT200 con llantas doble pared', '../imagenes/bici5.jpg', 515000, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(6, 'Fuji Nevada 1.9 R29', 'Llantas doble pared con cubierta MTB 29×2.10', '../imagenes/bici6.jpg', 283500, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(7, 'Wilier 101X XT', 'Rock Shox Recon Gold RL, 100 MM con Disco Hidráulico Shimano BR-M6100', '../imagenes/bici7.jpg', 65800, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(8, 'Zenith Calea CMP R29', 'Zenith Calea Aluminio 6061 con frente integrado y cableado interno', '../imagenes/bici8.jpg', 350000, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(9, 'Zenith Calea Elite R29', 'Rockshox Judy con Bloqueo remoto con Disco Hidraulico Shimano BR-MT410', '../imagenes/bici9.jpg', 178600, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(10, 'Roller Albatros 3.0 R29', ' Llantas doble pared con cubierta MTB 29×2.0 peso de 14.8kg', '../imagenes/bici10.jpg', 105300, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(11, 'Peretti MTB Doble Suspensión R26', 'Horquilla con Suspension, frenos V-Brake y ruedas de Aluminio', '../imagenes/bici11.jpg', 95600, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL),
(12, 'Cannondale Trail 8 R29', 'Nuevo SmartForm, Aluminio C3 con ruteo interno y Tektro  disco mecánico', '../imagenes/bici12.jpg', 650000, NULL, NULL, 'Hugo', '2023-06-28', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Rol` varchar(50) NOT NULL,
  `FechaAlta` date DEFAULT NULL,
  `UsuarioAlta` varchar(50) DEFAULT NULL,
  `UsuarioModif` varchar(50) DEFAULT NULL,
  `FechaModif` date DEFAULT NULL,
  `UsuarioBaja` varchar(50) DEFAULT NULL,
  `FechaBaja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Contraseña`, `Nombre`, `Rol`, `FechaAlta`, `UsuarioAlta`, `UsuarioModif`, `FechaModif`, `UsuarioBaja`, `FechaBaja`) VALUES
(1, 'hugo', '123', 'Hugo', 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'jony1221', 'aabbcc', 'Jonatan', 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'lucas12', 'a1b2c3', 'Lucas', 'users', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProductos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProductos` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
