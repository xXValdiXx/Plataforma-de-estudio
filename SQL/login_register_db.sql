-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 16-01-2022 a las 01:56:34
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register_db`
--

--
-- Volcado de datos para la tabla `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('6173309d1c67d', '6173309d1d067'),
('6173803880fdd', '617380388da75'),
('6179a9cf069fc', '6179a9cf0d676'),
('6179ad94e3482', '6179ad94f0d5d'),
('6185f4d2102f3', '6185f4d223e14'),
('6185f4d23ba99', '6185f4d23c035'),
('6185f4d256b99', '6185f4d25732f'),
('6185f4d2592b5', '6185f4d259932'),
('6185f4d26513a', '6185f4d265844'),
('6185f4d267be1', '6185f4d26828a'),
('6185f4d26a367', '6185f4d26aa9c'),
('6185f4d26cce9', '6185f4d26edb8'),
('6185f4d270e0e', '6185f4d2714d3'),
('6185f791201bf', '6185f7912e3ff'),
('6185f79135574', '6185f79135fc9'),
('6185f7913b839', '6185f791472fb'),
('6185f7915e2ae', '6185f7916acbc'),
('6185f7916ccc5', '6185f7916d40d'),
('6185f7916f6e4', '6185f7916fdd8'),
('6185f79171c5c', '6185f79172348'),
('6185f791743d0', '6185f791749d5'),
('6185f79176b21', '6185f79177219'),
('6185f7917aee4', '6185f7917b56c'),
('6185f7917d1df', '6185f7917d8a6'),
('6173309d1c67d', '6173309d1d067'),
('6173803880fdd', '617380388da75'),
('6179a9cf069fc', '6179a9cf0d676'),
('6179ad94e3482', '6179ad94f0d5d'),
('6185f4d2102f3', '6185f4d223e14'),
('6185f4d23ba99', '6185f4d23c035'),
('6185f4d256b99', '6185f4d25732f'),
('6185f4d2592b5', '6185f4d259932'),
('6185f4d26513a', '6185f4d265844'),
('6185f4d267be1', '6185f4d26828a'),
('6185f4d26a367', '6185f4d26aa9c'),
('6185f4d26cce9', '6185f4d26edb8'),
('6185f4d270e0e', '6185f4d2714d3'),
('6185f791201bf', '6185f7912e3ff'),
('6185f79135574', '6185f79135fc9'),
('6185f7913b839', '6185f791472fb'),
('6185f7915e2ae', '6185f7916acbc'),
('6185f7916ccc5', '6185f7916d40d'),
('6185f7916f6e4', '6185f7916fdd8'),
('6185f79171c5c', '6185f79172348'),
('6185f791743d0', '6185f791749d5'),
('6185f79176b21', '6185f79177219'),
('6185f7917aee4', '6185f7917b56c'),
('6185f7917d1df', '6185f7917d8a6'),
('6173309d1c67d', '6173309d1d067'),
('6173803880fdd', '617380388da75'),
('6179a9cf069fc', '6179a9cf0d676'),
('6179ad94e3482', '6179ad94f0d5d'),
('6185f4d2102f3', '6185f4d223e14'),
('6185f4d23ba99', '6185f4d23c035'),
('6185f4d256b99', '6185f4d25732f'),
('6185f4d2592b5', '6185f4d259932'),
('6185f4d26513a', '6185f4d265844'),
('6185f4d267be1', '6185f4d26828a'),
('6185f4d26a367', '6185f4d26aa9c'),
('6185f4d26cce9', '6185f4d26edb8'),
('6185f4d270e0e', '6185f4d2714d3'),
('6185f791201bf', '6185f7912e3ff'),
('6185f79135574', '6185f79135fc9'),
('6185f7913b839', '6185f791472fb'),
('6185f7915e2ae', '6185f7916acbc'),
('6185f7916ccc5', '6185f7916d40d'),
('6185f7916f6e4', '6185f7916fdd8'),
('6185f79171c5c', '6185f79172348'),
('6185f791743d0', '6185f791749d5'),
('6185f79176b21', '6185f79177219'),
('6185f7917aee4', '6185f7917b56c'),
('6185f7917d1df', '6185f7917d8a6'),
('61888b4694c87', '61888b469927b'),
('618aa56ae765d', '618aa56ae961c'),
('61e3775590ce4', '61e3775591620');

--
-- Volcado de datos para la tabla `detallequiz`
--

INSERT INTO `detallequiz` (`eid`, `id_semestre`, `id_materias`, `email`, `detalle_id`) VALUES
(36, 3, 16, 'cdanielgg99@gmail.com', 30),
(37, 4, 23, 'cdanielgg99@gmail.com', 31),
(38, 1, 4, 'cdanielgg99@gmail.com', 32),
(40, 5, 25, 'cdanielgg99@gmail.com', 33),
(41, 6, 31, 'cdanielgg99@gmail.com', 34),
(42, 7, 38, 'avs@hotmail.com', 35),
(43, 7, 38, 'avs@hotmail.com', 36);

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `nom_editorial`) VALUES
(1, 'NO APLICA'),
(2, 'OTRA'),
(3, 'CECSA'),
(4, 'Thompson'),
(5, 'Grupo Editorial Iberoamericana'),
(6, 'Addison Wesley'),
(7, 'McGraw-Hill '),
(8, 'Sistemas Técnicos de Edición'),
(9, 'Nueva Imagen'),
(10, 'Pearson Education'),
(11, 'Prentice Hall'),
(12, 'Computec-Rama'),
(13, 'Sudamericana'),
(14, 'Editorial Reverte'),
(15, 'Compañía Editorial Continental'),
(16, 'Limusa'),
(17, 'Harla Mexico'),
(18, 'Kapeluz'),
(19, 'Rei'),
(20, 'Trillas'),
(21, 'Siglo XXI'),
(22, 'Jones an Bartlett Publishers'),
(23, 'Academia Circuitos Eléctricos'),
(24, 'PIDOS'),
(25, 'Anagrama'),
(26, 'IPN'),
(27, 'F.C.E.'),
(28, 'Microsoft Corporation'),
(29, 'Sucesores Hermanos'),
(30, 'F.H. Hesselhbein Marshall Goldsmith'),
(31, 'Granica'),
(32, 'Macrobit Editores'),
(33, 'Brooks Cole'),
(34, 'Panorama'),
(35, 'Thomson'),
(36, 'Alfa Omega'),
(37, 'Gedisa'),
(38, 'IEEEComputer Society'),
(39, 'Paraninfo'),
(40, 'Wiley'),
(41, 'Willey and Sons'),
(42, 'Oxford'),
(43, 'Herrero Hermanos'),
(44, 'ECAFSA'),
(45, 'GASCA'),
(46, 'EDITORES MEXICANOS UNIDOS'),
(47, 'IEEE'),
(48, 'IANA'),
(49, 'IETF'),
(50, 'RAMA'),
(51, 'ANALOGIA 2'),
(52, 'EDITORIAL MIT Press'),
(53, 'Gustavo Gili'),
(54, 'Morgan Kaufmann Publishers'),
(55, 'AlGroup');

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('martha@gmail.com', 37, 1, 1, 1, 0, '2021-10-27 23:32:45'),
('martha@gmail.com', 37, 1, 1, 1, 0, '2021-10-27 23:32:45'),
('martha@gmail.com', 36, 1, 1, 1, 0, '2021-11-08 02:14:02'),
('martha@gmail.com', 40, 9, 11, 9, 2, '2021-11-08 02:15:24'),
('agp@gmail.com', 42, 1, 1, 1, 0, '2021-11-09 16:44:58'),
('angelvasa17@gmail.com', 43, 1, 1, 1, 0, '2022-01-16 01:40:48');

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `nom_idioma`) VALUES
(1, 'Español'),
(2, 'Ingles');

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materias`, `id_semestre`, `nom_materia`) VALUES
(1, 1, 'Calculo Diferencial e Integral'),
(2, 1, 'Física Clásica'),
(3, 1, 'Fundamentos de Algebra'),
(4, 1, 'Fundamentos de Programación'),
(5, 1, 'Humanidades I'),
(6, 1, 'Química Básica '),
(7, 2, 'Algebra Lineal'),
(8, 2, 'Calculo Vectorial'),
(9, 2, 'Electricidad y Magnetismo  '),
(10, 2, 'Humanidades II'),
(11, 2, 'Matemáticas Discretas'),
(12, 2, 'Programación Orientada a Objetos '),
(13, 3, 'Circuitos Lógicos I'),
(14, 3, 'Circuitos de CA Y CD'),
(15, 3, 'Ecuaciones Diferenciales'),
(16, 3, 'Estructura de Datos'),
(17, 3, 'Humanidades III'),
(18, 3, 'Lenguajes de Bajo Nivel'),
(19, 4, 'Análisis Numérico '),
(20, 4, 'Circuitos Lógicos II'),
(21, 4, 'Electrónica Analógica '),
(22, 4, 'Humanidades IV'),
(23, 4, 'Teoría de Autómatas '),
(24, 4, 'Variable Compleja '),
(25, 5, 'Análisis de algoritmos  '),
(26, 5, 'Análisis de Señales '),
(27, 5, 'Compiladores '),
(28, 5, 'Humanidades V'),
(29, 5, 'Organización de Computadoras '),
(30, 5, 'Probabilidad y Estadística'),
(31, 6, 'Arquitectura de Computadoras '),
(32, 6, 'Control Analógico '),
(33, 6, 'Metodología de la Investigación'),
(34, 6, 'Modulación Digital'),
(35, 6, 'Sistemas Operativos '),
(36, 6, 'Ingeniería de Software '),
(37, 7, 'Administración de la Ingeniería'),
(38, 7, 'Base de Datos '),
(39, 7, 'Control Digital'),
(40, 7, 'Nuevas Tecnologías '),
(41, 7, 'Teoría de la Información'),
(42, 7, 'Algoritmos de computo I'),
(43, 7, 'Computo Aplicado a Sistemas Ecológicos I'),
(44, 7, 'Interfases Inteligentes I'),
(45, 7, 'Sistemas de Información'),
(46, 7, 'Transferencia y Procesamiento de la información.'),
(47, 8, 'Formulación y Evaluación'),
(48, 8, 'Proyecto de Ingeniería '),
(49, 8, 'Redes de Computo '),
(50, 8, 'Sistemas Distribuidos '),
(51, 8, 'Algoritmos de Computo II '),
(52, 8, 'Computo Aplicado a Sistemas Ecológicos II'),
(53, 8, 'Interfases Inteligentes II'),
(54, 8, 'Sistemas de Información II'),
(55, 8, 'Transferencia y Procesamiento de información II'),
(56, 8, 'Diseño Asistido por Computadora '),
(57, 8, 'Inteligencia Artificial '),
(58, 8, 'Lenguajes de Arquitectura den Paralelo '),
(59, 8, 'Programación Lógica '),
(60, 8, 'Redes Neuronales '),
(61, 8, 'Sistemas Expertos ');

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('6173309d1c67d', '1', '6173309d1d061'),
('6173309d1c67d', '1', '6173309d1d065'),
('6173309d1c67d', '1', '6173309d1d066'),
('6173309d1c67d', '14', '6173309d1d067'),
('6173803880fdd', '1', '617380388da6b'),
('6173803880fdd', '1', '617380388da72'),
('6173803880fdd', '2', '617380388da75'),
('6173803880fdd', '1', '617380388da78'),
('6179a9cf069fc', '15', '6179a9cf0d676'),
('6179a9cf069fc', '1', '6179a9cf0d681'),
('6179a9cf069fc', '1', '6179a9cf0d686'),
('6179a9cf069fc', '1', '6179a9cf0d689'),
('6179ad94e3482', '58i', '6179ad94f0d5d'),
('6179ad94e3482', '58', '6179ad94f0d68'),
('6179ad94e3482', '60', '6179ad94f0d6b'),
('6179ad94e3482', '62', '6179ad94f0d6e'),
('6185f4d2102f3', 'main', '6185f4d223dfe'),
('6185f4d2102f3', 'variables locales', '6185f4d223e0d'),
('6185f4d2102f3', 'funciones', '6185f4d223e11'),
('6185f4d2102f3', 'variables globales', '6185f4d223e14'),
('6185f4d23ba99', 'cabecera de función', '6185f4d23c035'),
('6185f4d23ba99', 'inicialización de función', '6185f4d23c03a'),
('6185f4d23ba99', 'llamada de función', '6185f4d23c03b'),
('6185f4d23ba99', 'cuerpo de función', '6185f4d23c03c'),
('6185f4d256b99', 'public', '6185f4d257324'),
('6185f4d256b99', 'clase ', '6185f4d25732f'),
('6185f4d256b99', 'tipo', '6185f4d257334'),
('6185f4d256b99', 'externa', '6185f4d257337'),
('6185f4d2592b5', 'void funcion(int,y);', '6185f4d25992a'),
('6185f4d2592b5', 'x=funcion(int,int);', '6185f4d259931'),
('6185f4d2592b5', 'float funcion(int,float);', '6185f4d259932'),
('6185f4d2592b5', 'ninguna', '6185f4d259934'),
('6185f4d26513a', 'A=10;', '6185f4d265838'),
('6185f4d26513a', 'A%2;', '6185f4d265841'),
('6185f4d26513a', 'A==200;', '6185f4d265844'),
('6185f4d26513a', 'ninguna', '6185f4d265847'),
('6185f4d267be1', '*', '6185f4d268282'),
('6185f4d267be1', '&', '6185f4d26828a'),
('6185f4d267be1', '%d', '6185f4d26828b'),
('6185f4d267be1', 'ninguna', '6185f4d26828d'),
('6185f4d26a367', 'Fortran', '6185f4d26aa9c'),
('6185f4d26a367', 'C', '6185f4d26aaa5'),
('6185f4d26a367', 'Java', '6185f4d26aaa7'),
('6185f4d26a367', 'Ensamblador', '6185f4d26aaab'),
('6185f4d26cce9', 'tipo Java, C++, Smalltalk, Python, Object Pascal, Delphi, Perl, entre otros.', '6185f4d26edae'),
('6185f4d26cce9', 'Cadena, Boleano, Carácter, Numeros, alfanuemrico, Entero.', '6185f4d26edb6'),
('6185f4d26cce9', 'String, Boolean, Char, Integer, int, etc.', '6185f4d26edb8'),
('6185f4d26cce9', 'Simbólicos, de estructura, de cadena, generales, particulares, entre otros.', '6185f4d26edba'),
('6185f4d270e0e', 'Es un programa informático capaz de analizar y ejecutar otros programas, escritos en un lenguaje de alto nivel.', '6185f4d2714d3'),
('6185f4d270e0e', 'Es un programa que transforma código fuente escrito en java a un código neutral a la plataforma conocido como java.', '6185f4d2714dd'),
('6185f4d270e0e', 'Es un entorno de desarrollo integrado libre, hecho principalmente para el lenguaje de programación Java.', '6185f4d2714e0'),
('6185f4d270e0e', 'Es un atributo de una parte de los datos que indica al ordenador (y/o al programador) algo sobre la clase de datos', '6185f4d2714e3'),
('6185f791201bf', 'Los lenguajes de programación son más importantes que ellos.', '6185f7912e3e5'),
('6185f791201bf', 'Las computadoras son necesarias para resolverlos.', '6185f7912e3f4'),
('6185f791201bf', 'Los lenguajes y las computadoras son imprescindibles sobre ellos.', '6185f7912e3f8'),
('6185f791201bf', 'Sin ellos no existirían los lenguajes de programación y no serviran las computadoras.', '6185f7912e3ff'),
('6185f79135574', 'La utilización del método finito de cálculo.', '6185f79135fac'),
('6185f79135574', 'La aplicación que se le da a los algoritmos.', '6185f79135fc0'),
('6185f79135574', 'Las 5 condiciones ', '6185f79135fc9'),
('6185f79135574', 'Que ambos tienen diferente grado de efectividad', '6185f79135fcf'),
('6185f7913b839', 'La utilización del método finito de cálculo.', '6185f791472fb'),
('6185f7913b839', 'La aplicación que se le da a los algoritmos.', '6185f79147307'),
('6185f7913b839', 'Las 5 condiciones ', '6185f7914730c'),
('6185f7913b839', 'Que ambos tienen diferente grado de efectividad', '6185f7914730f'),
('6185f7915e2ae', 'La utilización del método finito de cálculo.', '6185f7916acaf'),
('6185f7915e2ae', 'La aplicación que se le da a los algoritmos.', '6185f7916acba'),
('6185f7915e2ae', 'Las 5 condiciones', '6185f7916acbc'),
('6185f7915e2ae', 'Que ambos tienen diferente grado de efectividad', '6185f7916acbf'),
('6185f7916ccc5', 'El desarrollado por Ada Augusta Lovelace', '6185f7916d3ff'),
('6185f7916ccc5', 'El de Charles Babbage', '6185f7916d409'),
('6185f7916ccc5', 'El de Euclides', '6185f7916d40d'),
('6185f7916ccc5', 'El del Maximo Común Divisor', '6185f7916d40f'),
('6185f7916f6e4', 'Tenemos que elegir muy bien la computadora a utilizar', '6185f7916fdcb'),
('6185f7916f6e4', 'El lenguaje que vamos a utilizar para codificar', '6185f7916fdd6'),
('6185f7916f6e4', 'Hay que tener muy claro el algoritmo', '6185f7916fdd8'),
('6185f7916f6e4', 'Elegir lenguaje y computador', '6185f7916fdda'),
('6185f79171c5c', 'La Mark I', '6185f79172339'),
('6185f79171c5c', 'La UNIVAC', '6185f79172342'),
('6185f79171c5c', 'La EDVAC', '6185f79172346'),
('6185f79171c5c', 'La Máquina de diferencias', '6185f79172348'),
('6185f791743d0', 'La Máquina de diferencias', '6185f791749ca'),
('6185f791743d0', 'La EDVAC', '6185f791749d3'),
('6185f791743d0', 'La Máquina Analítica', '6185f791749d5'),
('6185f791743d0', 'La Pascalina', '6185f791749d9'),
('6185f79176b21', 'Chomsky', '6185f79177219'),
('6185f79176b21', 'Schützenberger', '6185f79177222'),
('6185f79176b21', 'Turing', '6185f79177226'),
('6185f79176b21', 'Church-Turing', '6185f79177228'),
('6185f7917aee4', 'Estructuras de datos', '6185f7917b563'),
('6185f7917aee4', 'Estructuras de control', '6185f7917b56c'),
('6185f7917aee4', 'Recursión', '6185f7917b570'),
('6185f7917aee4', 'Abstracción', '6185f7917b572'),
('6185f7917d1df', 'Estructuras de datos', '6185f7917d8a6'),
('6185f7917d1df', 'Estructuras de control', '6185f7917d8af'),
('6185f7917d1df', 'Recursión', '6185f7917d8b2'),
('6185f7917d1df', 'Abstracción', '6185f7917d8b5'),
('61888b4694c87', '14', '61888b469927b'),
('61888b4694c87', '1', '61888b469928c'),
('61888b4694c87', '1', '61888b4699290'),
('61888b4694c87', '1', '61888b4699295'),
('618aa56ae765d', 'no se ', '618aa56ae9614'),
('618aa56ae765d', 'no se', '618aa56ae961b'),
('618aa56ae765d', 'datos', '618aa56ae961c'),
('618aa56ae765d', 'no se', '618aa56ae961d'),
('61e3775590ce4', 'no se ', '61e3775591616'),
('61e3775590ce4', 'no se', '61e377559161f'),
('61e3775590ce4', 'datos', '61e3775591620'),
('61e3775590ce4', 'no se', '61e3775591621');

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nom_pais`) VALUES
(1, 'México'),
(2, 'Estados Unidos'),
(3, 'Chile'),
(4, 'Argentina'),
(5, 'España');

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(32, '6173309d1c67d', '1', 4, 1),
(33, '6173803880fdd', 'si ', 4, 1),
(36, '6179a9cf069fc', '1', 4, 1),
(37, '6179ad94e3482', '¿Cuál es el resultado de 34i + 24i?', 4, 1),
(39, '6185f4d2102f3', 'Son accesibles desde cualquier función del programa:', 4, 1),
(39, '6185f4d23ba99', 'Forman parte de la estructura de definición de una función:', 4, 2),
(39, '6185f4d256b99', 'Cuál de los siguientes modificadores define el ámbito de llamada de función:', 4, 3),
(39, '6185f4d2592b5', 'Expresión que representa el prototipo de función:', 4, 4),
(39, '6185f4d26513a', 'Sintaxis en lenguaje C para una expresión de tipo relacional:', 4, 5),
(39, '6185f4d267be1', 'Operador que representa la referencia a un dato:', 4, 6),
(39, '6185f4d26a367', '¿Cuál fue el primer lenguaje de programación de alto nivel que existio?', 4, 7),
(39, '6185f4d26cce9', 'Son los tipos de datos que se manejan en Programación:', 4, 8),
(39, '6185f4d270e0e', '¿Que es un intérprete?', 4, 9),
(40, '6185f791201bf', 'Los algoritmos son la escencia de la ciencia de la computación ya que:', 4, 1),
(40, '6185f79135574', 'La diferencia entre la definición intuitiva y la definición general de algoritmos es:', 4, 2),
(40, '6185f7913b839', 'La diferencia entre definición intuitiva y formal es:', 4, 3),
(40, '6185f7915e2ae', 'La diferencia entre la definición formal y la definición general de algoritmos es:', 4, 4),
(40, '6185f7916ccc5', 'El primer algoritmo de que se tiene conocimiento fue:', 4, 5),
(40, '6185f7916f6e4', 'Antes de escribir un programa de ordenador:', 4, 6),
(40, '6185f79171c5c', 'Charles Baggage construyo:', 4, 7),
(40, '6185f791743d0', 'El modelo que sirvió de base para la computadora actual fue:', 4, 8),
(40, '6185f79176b21', '¿Quién matematizo las gramáticas?', 4, 9),
(40, '6185f7917aee4', 'Es aquella que controla el flujo de la información:', 4, 10),
(40, '6185f7917d1df', 'Es la organización lógica y matemática de los datos:', 4, 11),
(41, '61888b4694c87', '1', 4, 1),
(42, '618aa56ae765d', 'BASE DE DATOS', 4, 1),
(43, '61e3775590ce4', 'base de datos', 4, 1);

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
(33, 'A Ver', 1, 0, 1, 1, '1', '1', '2021-10-23 03:23:23'),
(36, 'Java', 1, 0, 1, 1, '1', '1', '2021-10-27 19:34:31'),
(37, 'Prueba ', 1, 0, 1, 1, '1', '1', '2021-10-27 19:47:00'),
(38, '1er Parcial', 1, 0, 15, 60, 'Examen de fundamentos', 'tag', '2021-11-06 03:11:46'),
(39, '1er Parcial', 1, 0, 9, 60, 'Examen de fundamentos', 'tag', '2021-11-06 03:14:48'),
(40, '1er Parcial', 1, 0, 11, 35, '1', '1', '2021-11-06 03:23:56'),
(41, 'Xd', 1, 0, 1, 1, '1', '1', '2021-11-08 02:28:14'),
(42, 'Db', 1, 1, 1, 1, 'EQUIS', 'equis', '2021-11-09 16:44:11'),
(43, 'Bases', 1, 1, 1, 10, 'lo que sea', 'equis', '2022-01-16 01:39:16');

--
-- Volcado de datos para la tabla `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('martha@gmail.com', 11, '2021-11-08 02:15:24'),
('cris@gmail.com', 1, '2021-10-23 04:13:02'),
('eeqbetyg@hotmail.com', 0, '2021-10-25 02:50:59'),
('martha@gmail.com', 11, '2021-11-08 02:15:24'),
('cris@gmail.com', 1, '2021-10-23 04:13:02'),
('eeqbetyg@hotmail.com', 0, '2021-10-25 02:50:59'),
('martha@gmail.com', 11, '2021-11-08 02:15:24'),
('cris@gmail.com', 1, '2021-10-23 04:13:02'),
('eeqbetyg@hotmail.com', 0, '2021-10-25 02:50:59'),
('agp@gmail.com', 1, '2021-11-09 16:44:58'),
('angelvasa17@gmail.com', 1, '2022-01-16 01:40:48');

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Alumno'),
(3, 'Profesor');

--
-- Volcado de datos para la tabla `semestres`
--

INSERT INTO `semestres` (`id_semestre`, `semestre`) VALUES
(1, '1er semestre'),
(2, '2do semestre'),
(3, '3er semestre'),
(4, '4to semestre'),
(5, '5to semestre'),
(6, '6to semestre'),
(7, '7mo semestre'),
(8, '8vo semestre');

--
-- Volcado de datos para la tabla `tipo_recurso`
--

INSERT INTO `tipo_recurso` (`id_tipo_rec`, `recurso`) VALUES
(1, 'Libro'),
(2, 'Apuntes'),
(3, 'Artículos');

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo`, `usuario`, `contrasena`, `id_rol`) VALUES
(2, 'Carlos', 'Cortés', 'Bazan', 'avs@hotmail.com', 'avs', '$2y$10$gA.ABRGSTwJh7vixxKZIBOIIupZmPmNGaydThQL/1mhUlpmKsb0j.', 3),
(3, 'Angel', 'Valdivia', 'Sánchez', 'angelvasa17@gmail.com', 'angelvasa', '$2y$10$gGP/nmOYqykiFpWvSjujNODXNFcOV0iF7qAik4n47y0Ejr3hwZ1Am', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
