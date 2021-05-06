-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-05-2021 a las 02:25:57
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produccionwebtp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `id_marca`) VALUES
(1, 'Hardware', 2),
(2, 'Software', 4),
(3, 'Perifericos', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `fecha` varchar(30) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `calificacion` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`fecha`, `id_producto`, `descripcion`, `calificacion`, `email`) VALUES
('12-12-2020 15:12:15', 1, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:13:27', 2, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:13:33', 3, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:15:15', 4, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:15:24', 5, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:16:39', 6, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:16:49', 7, 'kjn l', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:17:02', 8, 'kjn l', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:17:08', 9, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:18:33', 10, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:19:09', 11, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 15:20:55', 12, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:16:08', 15, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:33:36', 13, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:37:27', 14, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:37:45', 15, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:38:24', 16, 'Me encanto, rapida la entrega ', '', 'sdnajdsdn@sdasdnjkd.com'),
('12-12-2020 17:38:59', 17, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:42:01', 18, 'Me encanto, rapida la entrega ', '', 'mjknj@smsdkdsn'),
('12-12-2020 17:42:06', 19, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:42:58', 20, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:43:32', 21, 'Me encanto, rapida la entrega ', '', 'hjhjkh@njknb'),
('12-12-2020 17:45:14', 22, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:46:12', 23, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:46:22', 24, 'Me encanto, rapida la entrega ', '', 'ghvgh@dsajkdh'),
('12-12-2020 17:52:34', 25, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 17:52:48', 26, 'Me encanto, rapida la entrega ', '', 'bhgbhjb@jjkn'),
('12-12-2020 18:01:18', 1, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 18:04:33', 2, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 18:08:54', 3, 'Me encanto, rapida la entrega ', '', 'bamiledo@hotmail.com'),
('12-12-2020 18:09:45', 4, 'Me encanto, rapida la entrega ', '', 'njnjkn@sdjkdns'),
('12-12-2020 18:13:47', 5, 'hbjkhjk', '', 'njnjkn@sdjkdns'),
('12-12-2020 18:13:55', 6, 'jbnjk', '', 'lklkl@nmjkn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(1, 'HYPERX SAVAGE'),
(2, 'WD BLUE'),
(3, 'ADOBE'),
(4, 'WINDOWS'),
(5, 'LOGITECH'),
(6, 'ZOWIE'),
(7, 'SteelSeries');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id_categoria` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id_categoria`, `nombre`, `id_marca`, `id_orden`) VALUES
(1, 'A-Z', 2, 1),
(2, 'Z-A', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `destacado` tinyint(1) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `nuevo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`destacado`, `id_producto`, `nombre`, `id_categoria`, `id_marca`, `descripcion`, `precio`, `img`, `nuevo`) VALUES
(0, 1, 'Placa de Video Savagex8900', 1, 1, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 180000, 'img/Hardware/0.jpg', 1),
(0, 2, 'Placa de Video Essentialx2900', 1, 1, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 150000, 'img/Hardware/1.jpg', 0),
(0, 3, 'Placa de Video Phanterx5900', 1, 1, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 80000, 'img/Hardware/2.jpg', 1),
(0, 4, 'Placa de Video Tigerx2950', 1, 2, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 60000, 'img/Hardware/3.jpg', 0),
(0, 5, 'Placa de Video Leox5200XT', 1, 2, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 130000, 'img/Hardware/4.jpg', 1),
(0, 6, 'Placa de Video Golpex5700RT', 1, 2, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 150000, 'img/Hardware/5.jpg', 1),
(1, 7, 'Placa de Video GoGox8730', 1, 2, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 120000, 'img/Hardware/6.jpg', 0),
(1, 8, 'Placa de Video onfIREx200PR', 1, 1, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 90000, 'img/Hardware/7.jpg', 1),
(0, 9, 'Placa de Video Extasix-100XT', 1, 2, 'Ofrece velocidades increíbles de hasta 560MB/s de lectura y 530MB/s de escritura, con hasta 100000/8', 150000, 'img/Hardware/8.jpg', 0),
(0, 10, 'ID', 2, 3, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 2500, 'img/Software/9.jpg', 0),
(0, 11, 'LrC', 2, 3, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 4000, 'img/Software/10.jpg', 1),
(1, 12, 'Photoshop CS8', 2, 3, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 7500, 'img/Software/11.jpg', 1),
(1, 13, 'Windows XP', 2, 3, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 9000, 'img/Software/12.jpg', 0),
(0, 14, 'X', 2, 4, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 3000, 'img/Software/13.jpg', 1),
(0, 15, 'Windows 10', 2, 4, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 14000, 'img/Software/14.jpg', 1),
(1, 16, 'XBOX Live', 2, 4, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 4000, 'img/Software/15.jpg', 0),
(1, 17, 'Illustrator', 2, 4, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 6500, 'img/Software/16.jpg', 1),
(0, 18, 'Windows 10 Pro', 2, 4, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 12000, 'img/Software/17.jpg', 0),
(1, 19, 'Mouse 8700', 3, 5, 'La función principal es servir como un puente entre la persona y la máquina, facilitando así la cone', 3200, 'img/Perifericos/18.jpg', 0),
(0, 20, 'Mouse 879', 3, 5, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 5500, 'img/Perifericos/19.jpg', 1),
(1, 21, 'Pad elGallo', 3, 6, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 4500, 'img/Perifericos/20.jpg', 1),
(1, 22, 'Pad Almendra', 3, 6, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 4000, 'img/Perifericos/21.jpg', 1),
(0, 23, 'Teclado Rayos', 3, 7, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 15000, 'img/Perifericos/22.jpg', 0),
(0, 24, 'Teclado Libertad', 3, 7, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 12300, 'img/Perifericos/23.jpg', 1),
(0, 25, 'Headset onBoard', 3, 7, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 11000, 'img/Perifericos/24.jpg', 1),
(0, 26, 'headset RedGlory', 3, 6, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 8000, 'img/Perifericos/25.jpg', 1),
(1, 27, 'Headset ReadGlory2', 3, 6, 'Con este periferico podras lograr una mejor eficiencia tanto en tu trabajo como en tu entretenimient', 6000, 'img/Perifericos/26.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
