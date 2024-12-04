-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-05-2024 a las 17:55:42
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id22176090_mumpa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `animal_id` int(11) NOT NULL,
  `animal_nombre` text NOT NULL,
  `animal_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`animal_id`, `animal_nombre`, `animal_desc`) VALUES
(5, 'DOEDICURUS', 'Junto a Panochthus fue el género más \r\ngrande de gliptodontes que existió, con \r\nuna masa corporal de alrededor de 1500 \r\nkilos y unos 4 metros de longitud.\r\nSu larga cola terminaba en una gran “maza” \r\ncon púas que utilizaba para defenderse.'),
(6, 'EQUUS', 'Estos animales, muy similares a los actuales caballos, estaban emparentados con los mismos. Estos mamíferos llegaron a América del Sur hace unos 3 millones de años y se extinguieron hace unos 11 mil años.\r\nSe cree habitaban ambientes abiertos de pastizales y estepas.'),
(7, 'GLYPTODON', 'Originario de América del Sur, este mamífero herbívoro, emparentado con los actuales armadillos, habitaba zonas abiertas de clima templado o frío y con pastizales, de los cuales se alimentaba. Su caparazón estaba compuesto por varias placas que tienen forma de roseta. No poseía dientes, sólo molares trilobulados. Dentro de este género, la especie más grande que se conoce fue Glyptodon clavipes \r\nque llegó a pesar unos 1500 kilos.'),
(8, 'MEGATERIO', 'Su nombre significa “bestia grande”, descripción para este perezoso gigante. En dos patas podía alcanzar hasta 6 metros de altura y llegaba a pesar entre 5 y 6 toneladas. Su dieta era herbívora, aunque algunos investigadores proponen que pudo haber sido también un carnívoro oportunista, es decir que pudo haber comido\r\nanimales heridos o moribundos.'),
(9, 'STEGOMASTODON', 'Este mamífero, emparentado con el elefante\r\nactual, poseía un aspecto similar al mismo\r\naunque un poco más robusto. Poseía una\r\naltura de unos 2.5 metros y llegoa pesar\r\nunos 7500 kilos.'),
(10, 'TOXODON', 'Este mega mamífero sudamericano, similar\r\nen aspecto a un hipopótamo o rinoceronte,\r\naunque sin parentesco, poseía un peso de\r\nalrededor de 1000 kilos, era herbívoro y\r\ntenía la particularidad de tener los dientes\r\nde su maxilar arqueados, de ahí su nombre,\r\n“toxodon”, que significa “diente en forma\r\nde arco”.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_email` text NOT NULL,
  `usuario_username` text NOT NULL,
  `usuario_clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_email`, `usuario_username`, `usuario_clave`) VALUES
(1, 'fau@gmail.com', 'fau', '$2y$10$301b11zHiXpUfN25SURcFODzyGx5XIE/Sr5Fv69juT.7fLeCgnf4O'),
(4, 'anachi@gmail.com', 'anachi', '$2y$10$10NQkmudY3fjhBgrZaWBgesgT67UnkCzcPX0mw.htIH9HXVl.R0Qm'),
(5, 'damisala13@gmail.com', 'damian', '$2y$10$5FZ2qegTLFBYZ59tPUOlX.9ij7HqHvEhRUOZvBFsuzsVU0CCiv1Te'),
(6, 'marta@gmail.com', 'maximiliano acuña', '$2y$10$YYOM/FQUMN8OLSnGlegKU.z3XzLniE0T0mUrGT2hJa3jpg3RJwyLq'),
(7, 'jpfranco_0015@hotmail.com', 'Ingeniero', '$2y$10$BLn3mXif3O4ppedOpOjmNOQfcxd4xMhNs4r9wOCyWnC8D/G1.EiXu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
