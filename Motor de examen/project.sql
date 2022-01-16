-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 10:50 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(2, 'hola@configuroweb.com', '1234abcd..');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('6140e5835b7b3', '6140e5835c062'),
('6140e7a2465d5', '6140e7a246aae'),
('6140e874d6b61', '6140e874d6e7f'),
('6140e935b0029', '6140e935b04cd'),
('614105c7c4a13', '614105c7c4b2d'),
('6141069bbbaa1', '6141069bbbef9'),
('6141074972f61', '6141074974538'),
('61410877d7693', '61410877e0bb7'),
('61410d072486e', '61410d0724bb1'),
('614113fbe45cc', '614113fbe510a'),
('61411513f0176', '61411513f0295'),
('61414c2c60b3a', '61414c2c6160b'),
('61414c2c638e4', '61414c2c6422c');

-- --------------------------------------------------------

--
-- Table structure for table `detallequiz`
--

CREATE TABLE `detallequiz` (
  `eid` int(15) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `materias_id` int(11) NOT NULL,
  `detalle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `detallequiz`
--

INSERT INTO `detallequiz` (`eid`, `semestre_id`, `materias_id`, `detalle_id`) VALUES
(11, 4, 21, 5),
(14, 6, 32, 8),
(15, 8, 57, 9),
(16, 7, 44, 10),
(17, 2, 7, 11),
(18, 1, 2, 12),
(19, 4, 22, 13);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(500) CHARACTER SET utf8 NOT NULL,
  `feedback` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('5f87ca01c593b', 'Usuario', 'configuroweb@gmail.com', 'problemas con la pregunta 3', 'no estoy de acuerdo con la pregunta 3, no me parece una opción exacta, sería mejor una pregunta abierta.', '2020-10-15', '06:03:13am'),
('6144f5b654f37', 'Daniel', 'cdanielgg99@gmail.com', 'xd', 'hola jeje', '2021-09-17', '08:08:22pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `eid` int(15) NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('', 14, 2, 2, 2, 0, '2021-09-17 21:55:07'),
('', 11, 1, 1, 1, 0, '2021-09-17 21:55:58'),
('', 15, 1, 1, 1, 0, '2021-09-18 01:44:16'),
('', 18, 1, 1, 1, 0, '2021-09-19 18:50:26'),
('', 19, 1, 1, 1, 0, '2021-09-22 00:16:43'),
('', 16, 1, 1, 1, 0, '2021-09-22 00:48:43'),
('', 17, 1, 1, 1, 0, '2021-09-22 01:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `materias_id` int(11) NOT NULL,
  `nombremateria` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `semestre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`materias_id`, `nombremateria`, `semestre_id`) VALUES
(1, 'Fundamentos de Programación', 1),
(2, 'Cálculo Diferencial e Integral', 1),
(3, 'Fundamentos de Álgebra', 1),
(4, 'Física Clásica', 1),
(5, 'Química Básica', 1),
(6, 'Humanidades I', 1),
(7, 'Álgebra Lineal', 2),
(8, 'Cálculo Vectorial', 2),
(9, 'Electricidad y Magnetismo', 2),
(10, 'Humanidades II', 2),
(11, 'Matemáticas Discretas', 2),
(12, 'Programación Orientada a Objetos', 2),
(13, 'Ecuaciones Diferenciales', 3),
(14, 'Circuitos de C.A. y C.D.', 3),
(15, 'Circuitos Lógicos I', 3),
(16, 'Lenguajes de Bajo Nivel', 3),
(17, 'Estructuras de Datos', 3),
(18, 'Humanidades III', 3),
(19, 'Análisis Numérico', 4),
(20, 'Variable Compleja y Análisis de Fourier', 4),
(21, 'Circuitos Lógicos II', 4),
(22, 'Electrónica Analógica', 4),
(23, 'Teoría de Autómatas', 4),
(24, 'Humanidades IV', 4),
(25, 'Análisis de Algoritmos', 5),
(26, 'Análisis de Señales Analógicas', 5),
(27, 'Compiladores', 5),
(28, 'Humanidades V', 5),
(29, 'Organización de Computadoras', 5),
(30, 'Probabilidad y Estadística', 5),
(31, 'Arquitectura de Computadoras', 6),
(32, 'Ingeniería de Software', 6),
(33, 'Metodología de la Investigación', 6),
(34, 'Modulación Digital', 6),
(35, 'Sistemas Operativos', 6),
(36, 'Teoría de Control Analógico', 6),
(37, 'Teoría de la Información y Codificación', 7),
(38, 'Teoría de Control Digital', 7),
(39, 'Bases de Datos', 7),
(40, 'Nuevas Tecnologías en la Transferencia de la Información', 7),
(41, 'Administración en la Ingeniería', 7),
(42, 'Algoritmos de Computo I', 7),
(43, 'Computo Aplicado a Sistemas Ecológicos I', 7),
(44, 'Interfaces Inteligentes I', 7),
(45, 'Transferencia y Procesamiento de la Información I', 7),
(46, 'Sistemas de la Información I', 7),
(47, 'Proyecto de Ingeniería', 8),
(48, 'Formulación y Evaluación de Proyectos', 8),
(49, 'Redes de Computadoras', 8),
(50, 'Sistemas distribuidos', 8),
(51, 'Algoritmos de Computo II', 8),
(52, 'Computo Aplicado a Sistemas Ecológicos II', 8),
(53, 'Interfaces Inteligentes II', 8),
(54, 'Transferencia y Procesamiento de la Información II', 8),
(55, 'Sistemas de la Información II', 8),
(56, 'Redes Neuronales', 8),
(57, 'Inteligencia Artificial', 8),
(58, 'Programación Lógica', 8),
(59, 'Diseño Asistido por Computadora', 8),
(60, 'Lenguajes para Arquitectura en Paralelo', 8),
(61, 'Sistemas Expertos', 8);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('6140e43d572d2', '1', '6140e43d57822'),
('6140e43d572d2', '1', '6140e43d57824'),
('6140e43d572d2', '1', '6140e43d57825'),
('6140e43d572d2', '12', '6140e43d57826'),
('6140e4a852706', '1', '6140e4a852e0e'),
('6140e4a852706', '1', '6140e4a852e12'),
('6140e4a852706', '1', '6140e4a852e13'),
('6140e4a852706', '1', '6140e4a852e14'),
('6140e5835b7b3', '1', '6140e5835c05a'),
('6140e5835b7b3', '1', '6140e5835c060'),
('6140e5835b7b3', '1', '6140e5835c062'),
('6140e5835b7b3', '1', '6140e5835c063'),
('6140e7a2465d5', '11', '6140e7a246aa2'),
('6140e7a2465d5', '12', '6140e7a246aaa'),
('6140e7a2465d5', '13', '6140e7a246aad'),
('6140e7a2465d5', '14', '6140e7a246aae'),
('6140e874d6b61', '1', '6140e874d6e76'),
('6140e874d6b61', '1', '6140e874d6e7f'),
('6140e874d6b61', '1', '6140e874d6e82'),
('6140e874d6b61', '1', '6140e874d6e85'),
('6140e935b0029', '13', '6140e935b04cd'),
('6140e935b0029', '1', '6140e935b04cf'),
('6140e935b0029', '1', '6140e935b04d0'),
('6140e935b0029', '1', '6140e935b04d1'),
('614105c7c4a13', '1', '614105c7c4b2d'),
('614105c7c4a13', '1', '614105c7c4b32'),
('614105c7c4a13', '1', '614105c7c4b33'),
('614105c7c4a13', '1', '614105c7c4b35'),
('6141069bbbaa1', '22', '6141069bbbef2'),
('6141069bbbaa1', '22', '6141069bbbef7'),
('6141069bbbaa1', '23', '6141069bbbef9'),
('6141069bbbaa1', '22', '6141069bbbefa'),
('6141074972f61', '11', '614107497452f'),
('6141074972f61', '11', '6141074974535'),
('6141074972f61', '11', '6141074974537'),
('6141074972f61', '15', '6141074974538'),
('61410877d7693', 'de', '61410877e0bab'),
('61410877d7693', 'hola', '61410877e0bb7'),
('61410877d7693', '1', '61410877e0bbd'),
('61410877d7693', '1', '61410877e0bc3'),
('61410d072486e', '1', '61410d0724ba5'),
('61410d072486e', '1', '61410d0724bac'),
('61410d072486e', '1', '61410d0724bad'),
('61410d072486e', '3', '61410d0724bb1'),
('614113fbe45cc', 'porfa dios ', '614113fbe5106'),
('614113fbe45cc', 'xd', '614113fbe5109'),
('614113fbe45cc', '1', '614113fbe510a'),
('614113fbe45cc', '12', '614113fbe510c'),
('61411513f0176', '1', '61411513f0290'),
('61411513f0176', '1', '61411513f0293'),
('61411513f0176', '1', '61411513f0294'),
('61411513f0176', '12', '61411513f0295'),
('61414c2c60b3a', 'si', '61414c2c6160b'),
('61414c2c60b3a', 'no', '61414c2c61617'),
('61414c2c60b3a', 'no', '61414c2c61618'),
('61414c2c60b3a', 'no', '61414c2c61619'),
('61414c2c638e4', 'no', '61414c2c64218'),
('61414c2c638e4', 'no', '61414c2c6422a'),
('61414c2c638e4', 'si', '61414c2c6422c'),
('61414c2c638e4', 'no', '61414c2c6422e');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` int(15) NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(14, '61414c2c60b3a', 'que es', 4, 1),
(14, '61414c2c638e4', 'cuando es', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` int(15) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text CHARACTER SET utf8 NOT NULL,
  `tag` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
(11, 'Matematicas', 1, 0, 1, 1, '1', '1', '2021-09-14 23:18:42'),
(14, 'P1', 1, 0, 2, 1, '1', '1', '2021-09-15 01:27:44'),
(15, 'Ia', 1, 0, 1, 2, 'este es un examen de IA ', 'ia', '2021-09-18 01:19:46'),
(16, '2do Parcial', 1, 0, 1, 3, '1', '1', '2021-09-18 01:23:49'),
(17, 'Python', 1, 0, 1, 1, '1', '1', '2021-09-18 01:41:22'),
(18, '3er Parcial', 1, 0, 1, 1, '1', '1', '2021-09-19 18:39:33'),
(19, 'Python2', 1, 0, 1, 2, 'esto es una descripcion ', '#python', '2021-09-22 00:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('usuario@cweb.com', 1, '2020-10-15 08:58:39'),
('operador@cweb.com', 1, '2020-10-15 09:25:31'),
('', 19, '2021-09-22 01:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `semestre`
--

CREATE TABLE `semestre` (
  `semestre_id` int(11) NOT NULL,
  `nombre_semestre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `semestre`
--

INSERT INTO `semestre` (`semestre_id`, `nombre_semestre`) VALUES
(1, '1er Semestre'),
(2, '2do Semestre'),
(3, '3er Semestre'),
(4, '4to Semestre'),
(5, '5to Semestre'),
(6, '6to Semestre'),
(7, '7mo Semestre'),
(8, '8vo Semestre');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(5) CHARACTER SET utf8 NOT NULL,
  `college` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Operador', 'M', 'operador', 'operador@cweb.com', 3122344523, '4b67deeb9aba04a5b54632ad19934f26'),
('Usuario', 'M', 'usuario', 'usuario@cweb.com', 3102451327, '4b67deeb9aba04a5b54632ad19934f26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `detallequiz`
--
ALTER TABLE `detallequiz`
  ADD PRIMARY KEY (`detalle_id`),
  ADD KEY `eid` (`eid`),
  ADD KEY `materias_id` (`materias_id`),
  ADD KEY `semestre_id` (`semestre_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`materias_id`),
  ADD KEY `semestre_id` (`semestre_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD KEY `questions_ibfk_1` (`eid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`semestre_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detallequiz`
--
ALTER TABLE `detallequiz`
  MODIFY `detalle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `eid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detallequiz`
--
ALTER TABLE `detallequiz`
  ADD CONSTRAINT `detallequiz_ibfk_2` FOREIGN KEY (`materias_id`) REFERENCES `materias` (`materias_id`),
  ADD CONSTRAINT `detallequiz_ibfk_3` FOREIGN KEY (`semestre_id`) REFERENCES `semestre` (`semestre_id`),
  ADD CONSTRAINT `detallequiz_ibfk_4` FOREIGN KEY (`eid`) REFERENCES `quiz` (`eid`) ON DELETE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `quiz` (`eid`) ON DELETE CASCADE;

--
-- Constraints for table `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `semestre_id` FOREIGN KEY (`semestre_id`) REFERENCES `semestre` (`semestre_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `quiz` (`eid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
