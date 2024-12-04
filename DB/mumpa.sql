-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2024 a las 19:03:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mumpa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `animal_id` int(11) NOT NULL,
  `animal_nombre` text NOT NULL,
  `animal_desc` text NOT NULL,
  `animal_desc_ingles` text NOT NULL,
  `animal_imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`animal_id`, `animal_nombre`, `animal_desc`, `animal_desc_ingles`, `animal_imagen`) VALUES
(5, 'DOEDICURUS', 'Junto a Panochthus fue el género más \ngrande de gliptodontes que existió, con \nuna masa corporal de alrededor de 1500 \nkilos y unos 4 metros de longitud.\nSu larga cola terminaba en una gran “maza” \ncon púas que utilizaba para defenderse.', 'Along with Panochthus, it was the most important genre in the world. large number of glyptodonts that existed, with a body mass of around 1500 kilos and about 4 meters in length. Its long tail ended in a large \"mace\" with spikes that he used to defend himself.', 'doedicurus.png'),
(6, 'EQUUS', 'Estos animales, muy similares a los actuales caballos, estaban emparentados con los mismos. Estos mamíferos llegaron a América del Sur hace unos 3 millones de años y se extinguieron hace unos 11 mil años. Se cree habitaban ambientes abiertos de pastizales y estepas.', 'These animals, very similar to today\'s horses, were related to them. These mammals arrived in South America about 3 million years ago and became extinct about 11,000 years ago. It is believed that they inhabited open environments of grasslands and steppes.', 'equus.png'),
(7, 'GLYPTODON', 'Originario de América del Sur, este mamífero herbívoro, emparentado con los actuales armadillos, habitaba zonas abiertas de clima templado o frío y con pastizales, de los cuales se alimentaba. Su caparazón estaba compuesto por varias placas que tienen forma de roseta. No poseía dientes, sólo molares trilobulados. Dentro de este género, la especie más grande que se conoce fue Glyptodon clavipes \r\nque llegó a pesar unos 1500 kilos.', 'Native to South America, this herbivorous mammal, related to today\'s armadillos, inhabited open areas of temperate or cold climate and grasslands, on which it fed. Its shell was composed of several plates that are rosette-shaped. He had no teeth, only trilobed molars. Within this genus, the largest known species was Glyptodon clavipes which weighed about 1500 kilos.', 'glyptodon.png'),
(8, 'MEGATERIO', 'Su nombre significa “bestia grande”, descripción para este perezoso gigante. En dos patas podía alcanzar hasta 6 metros de altura y llegaba a pesar entre 5 y 6 toneladas. Su dieta era herbívora, aunque algunos investigadores proponen que pudo haber sido también un carnívoro oportunista, es decir que pudo haber comido\r\nanimales heridos o moribundos.', 'Its name means \"big beast\", a description for this giant sloth. On two legs it could reach up to 6 meters in height and weighed between 5 and 6 tons. Its diet was herbivorous, although some researchers propose that it may also have been an opportunistic carnivore, meaning that it may have eaten injured or dying animals.', 'megaterio.png'),
(9, 'STEGOMASTODON', 'Este mamífero, emparentado con el elefante\r\nactual, poseía un aspecto similar al mismo\r\naunque un poco más robusto. Poseía una\r\naltura de unos 2.5 metros y llegoa pesar\r\nunos 7500 kilos.', 'This mammal, related to the elephant had a similar appearance to the same although a little more robust. He had a height of about 2.5 meters and came to weigh about 7500 kilos.', 'stegomastodon.png'),
(10, 'TOXODON', 'Este mega mamífero sudamericano, similar\r\nen aspecto a un hipopótamo o rinoceronte,\r\naunque sin parentesco, poseía un peso de\r\nalrededor de 1000 kilos, era herbívoro y\r\ntenía la particularidad de tener los dientes de su maxilar arqueados, de ahí su nombre, “toxodon”, que significa “diente en forma de arco”.', 'This South American mega mammal, similar to in appearance to a hippopotamus or rhinoceros, although unrelated, he had a weight of about 1000 kilos, it was herbivorous and It had the particularity of having the teeth of its jaw arched, hence its name, \"Toxodon\", which means \"arch-shaped tooth\".', 'toxodon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `rango_id` int(11) NOT NULL,
  `rango_nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`rango_id`, `rango_nombre`) VALUES
(1, 'Admin'),
(2, 'generico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_email` text NOT NULL,
  `usuario_username` text NOT NULL,
  `usuario_clave` text NOT NULL,
  `usuario_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_email`, `usuario_username`, `usuario_clave`, `usuario_tipo`) VALUES
(1, 'diazcarmodyfausto@gmail.com', 'cread', '$2y$10$llw8CvseOJIHEpBDVAdYEurxXXbfh/kflDLJf93TE5vh0.l8zglOW', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`rango_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `usuario_tipo` (`usuario_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `rango_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `tipo` FOREIGN KEY (`usuario_tipo`) REFERENCES `rangos` (`rango_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
