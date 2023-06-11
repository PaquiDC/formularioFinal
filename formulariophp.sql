-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 15:31:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursosql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulariophp`
--

CREATE TABLE `formulariophp` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `PrimerApellido` varchar(50) NOT NULL,
  `SegundoApellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `formulariophp`
--

INSERT INTO `formulariophp` (`ID`, `nombre`, `PrimerApellido`, `SegundoApellido`, `email`, `login`, `password`) VALUES
(1, 'Ana', 'pez', 'pez', 'anapez@gmail.com', 'anapez2', ''),
(2, 'Rosa', 'Flor', 'Flor', 'RosaFlor@gmail.com', 'RoseFlower', ''),
(3, 'Paqui', 'Diaz', 'Contreras', 'Paquidiaz@outlook.com', 'Paqui2110', ''),
(4, 'Paqui', 'Galan', 'Diaz', 'PaquiGalan@gmail.com', 'PaquiGalan30', ''),
(5, 'Jorge', 'Clemente', 'Diaz', 'Clementejorge@outlook.com', 'JorgeClement50', ''),
(6, 'Carmen', 'Diaz', 'Seco', 'CarmenDiaz@gmail.com', 'CarmenDiaz', ''),
(7, 'Jesus', 'Clemente', 'Adrian', 'JesusClemente@gmail.com', 'JesusCleAdri', ''),
(8, 'Prueba', 'PruebaUno', 'PruebaDos', 'Prueba@prueba.es', 'Prueba', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulariophp`
--
ALTER TABLE `formulariophp`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulariophp`
--
ALTER TABLE `formulariophp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
