-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2023 a las 23:22:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_heladeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `helados`
--

CREATE TABLE `helados` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` int(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `helados`
--

INSERT INTO `helados` (`id`, `codigo`, `nombre`, `descripcion`, `precio`, `cantidad`, `estado`) VALUES
(1, 'C001', 'Helado de fresa', 'Helado de fresa artesanal', 3500, 10, 1),
(2, 'C002', 'Helado de chocolate', 'Helado de chocolate artesanal', 3500, 5, 1),
(3, 'C003', 'Helado de maracuya', 'Helado de maracuya artesanal', 2000, 8, 1),
(4, 'C004', 'Helado de limon', 'Helado de limon artesanal', 5000, 9, 1),
(5, 'C005', 'Helado de arequipe', 'Helado de arequipe artesanal', 3800, 4, 1),
(6, 'C006', 'Helado de chicle', 'Helado de chicle artesanal', 4000, 9, 1),
(7, 'C007', 'Helado de coco', 'Helado de coco artesanal', 5000, 9, 1),
(8, 'C008', 'Helado de ron con pasas', 'Helado de ron con pasas artesanal', 2500, 7, 1),
(9, 'C009', 'Helado de mora', 'Helado de mora', 1500, 18, 1),
(10, 'C0010', 'Helado de galleta', 'Helado de galleta artesanal', 5500, 2, 1),
(11, 'C0011', 'Helado de mandarina', 'Helado de mandarina artesanal', 1200, 5, 0),
(12, 'C0012', 'Helado de frutos rojos', 'Helado de frutos rojos artesanal', 1200, 6, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `helados`
--
ALTER TABLE `helados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `helados`
--
ALTER TABLE `helados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
