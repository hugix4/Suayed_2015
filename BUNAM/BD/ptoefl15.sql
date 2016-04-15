-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2015 a las 20:52:16
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ptoefl15`
--

CREATE TABLE IF NOT EXISTS `ptoefl15` (
  `Numero` tinyint(4) NOT NULL,
  `Pregunta` tinytext COLLATE latin1_general_ci NOT NULL,
  `A` tinytext COLLATE latin1_general_ci NOT NULL,
  `B` tinytext COLLATE latin1_general_ci NOT NULL,
  `C` tinytext COLLATE latin1_general_ci NOT NULL,
  `D` tinytext COLLATE latin1_general_ci NOT NULL,
  `Respuesta` tinytext COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `ptoefl15`
--

INSERT INTO `ptoefl15` (`Numero`, `Pregunta`, `A`, `B`, `C`, `D`, `Respuesta`) VALUES
(1, 'Refrigerating meats ________ the spread of bacteria.', ' retards', ' retarding', ' to retard', ' is retarded', ' retards'),
(2, 'Throughout the animal kingdom, ________ bigger than the elephant.', ' whale is only the', ' only the whale is', ' is the whale only', ' only whale is the', ' only the whale is'),
(3, 'The fact ________ money orders can usually be easily cashed has made them a popular form of payment.', ' of', ' that', ' is that', ' which is', ' that'),
(4, 'The first article of the United States Constitution gives Congress ________ to pass laws', ' the power', ' has the power', ' the power is', ' of the power', ' the power'),
(5, 'The president ________ the election by a landslide. ', ' won', ' he won', ' yesterday', ' fortunately ', ' won'),
(6, 'When ________the conference?', ' the doctor attended', ' did the doctor attend', ' the doctor will attend ', ' the doctor''s attendance ', ' did the doctor attend'),
(7, 'In the early 1900s, Eastman ________ inexpensive Brownie box cameras. ', ' it develop', ' it was developed', ' developed', ' developing ', ' developed'),
(8, '.________the discovery of the fossilized remnants of tides in one-billion-year-old rocks. ', ' Geological reports', ' Geologists report', ' The report of geologists', ' Geologists'' reports', ' The report of geologists'),
(9, 'The Brooklyn Bridge ________ took thirteen years to complete. ', ' in New York', ' is in New York', ' it is in New York', ' which New York ', ' in New York'),
(10, 'Genes control all of the physical ________ we inherit. ', ' that traits', ' that are traits', ' traits that', ' traits are that ', ' traits that'),
(11, 'Indigo can be extracted from a plant, and then ________ to dye cloth blue. ', ' it', ' using', ' using it', ' it can be used ', ' it can be used '),
(12, '________ in the United States spends 900 hours per year in class and 1,170 hours in front of the television. ', ' The average third-grader', ' The third grade is average', ' There are three grades', ' Three average grades ', ' The average third-grader'),
(13, 'Researchers have begun studying what ________ is on human circadian rhythms. ', ' it is the effect of light', ' the light affects', ' is affecting the light', ' the effect of light ', ' the effect of light '),
(14, 'If calcium oxide remains exposed to air, ________to calcium carbonate.', ' turning', ' turns', ' it turns', ' the turn ', ' it turns'),
(15, 'Some early batteries use concentrated nitric acid, ________gave off poisonous fumes. ', ' they', ' then they', ' but they', ' but they had ', ' but they'),
(16, 'In 1732, coach TRAVELERS could GOT from New York TO Philadelphia in about two DAYS. ', 'TRAVELERS', 'GOT', 'TO', 'DAYS', 'GOT'),
(17, 'Some OF THE District of Columbia ARE on LOW-LYING, marshy GROUND. ', 'OF THE', 'ARE', 'LOW-LYING', 'GROUND', 'ARE'),
(18, 'GEORGIA''S economy is BASED  MAIN on AGRICULTURE. ', 'GEORGIA''S', 'BASED', 'MAIN', 'AGRICULTURE', 'MAIN'),
(19, 'ELECTRICAL disturbances on Earth ARE FREQUENTLYcaused WITH \r\nstorms ON THE SURFACE of the sun.\r\n', 'ELECTRICAL', 'ARE FREQUENTLY', 'WITH', 'ON THE SURFACE', 'WITH'),
(20, 'Inventor Granville Woods received HIM first patent ON  January 3, 1884, FOR a STEAM boiler furnace. ', 'HIM', 'ON', 'FOR', 'STEAM', 'HIM'),
(21, 'A DEFICIENT of folic acid is RARELY FOUND in humans BECAUSE the vitamin is contained IN a wide variety of foods. ', 'DEFICIENT', 'RARELY FOUND', 'BECAUSE', 'IN', 'DEFICIENT'),
(22, 'The gopher DIGS with the big strong claws of ITS  two front FOOT and with its OVERHANGING front teeth. ', 'DIGS', 'ITS', 'FOOT', 'OVERHANGING', 'FOOT'),
(23, 'An internationally FAMOUS BALLERINA, Maria Tallchief DEMONSTRATED that THE  quality of ballet in North America could equal THOSE  of the ballet in Europe. ', 'FAMOUS BALLERINA', 'DEMOSTRATED', 'THE', 'THOSE', 'THOSE'),
(24, 'AS two nuclei move closer together, their MUTUAL electrostatic POTENTIAL energy becomes MORE LARGE and more positive. ', 'AS', 'MUTUAL', 'POTENTIAL', 'MORE LARGE', 'MORE LARGE'),
(25, 'Guppies are sometimes CALL  rainbow FISH because of THE  MALE''S  bright colors. ', 'CALL', 'FISH', 'THE', 'MALE''S', 'CALL'),
(26, 'The RESEARCH FOR THE book Roots TAKING  Alex Haley TWELVE YEARS.', 'RESEARCH', 'FOR THE', 'TAKING', 'TWELVE YEARS', 'TAKING'),
(27, 'The Paul REVERSE HOUSE  was BUILT in 1676, and today ITS the OLDEST  wooden building in Boston. ', 'REVERE HOUSE', 'BUILT', 'ITS', 'OLDEST', 'ITS'),
(28, 'Conifers SUCH AS  cedars, firs and pines BEAR ITS seeds in CONES. ', 'SUCH AS', 'BEAR', 'ITS', 'CONES', 'ITS'),
(29, 'A DOME is a semispherical STRUCTURES ON TOP OF a BUILDING. ', 'DOME', 'STRUCTURES', 'ON TOP OF', 'BUILDING', 'STRUCTURES'),
(30, 'Succulents SUCK UP  water in just a few HOUR, but they CAN STORE it in THEIR STEMS for months. ', 'SUCK UP', 'HOUR', 'CAN STORE', 'THEIR STEMS', 'HOUR'),
(31, '', ' In a barber shop. ', ' In an eye''s doctor''s office.', ' In a picture framing shop.', ' In a jewelry store.', ' In an eye''s doctor''s office.'),
(32, '', ' To find a new frame for her picture. ', ' A replacement for the glass she has broken. ', ' To have her glasses repaired. ', ' An eye examination. ', ' To have her glasses repaired. '),
(33, '', ' Ask someone else to help her. ', ' Choose new frames. ', ' Take his catalogue', ' Choose a different picture', ' Choose new frames. '),
(34, '', 'Wait a few weeks.', ' Look in another store. ', ' Look for a few more hours. ', ' Order from a catalogue', ' Order from a catalogue'),
(35, '', ' He is indifferent. ', ' He is angry. ', ' He thinks it is a joke. ', ' He is surprised. ', ' He is surprised. '),
(36, '', ' The man told her about it. ', ' She received a letter about it. ', ' She spoke to the teacher. ', ' She was notified at preregistration', ' She received a letter about it. '),
(37, '', ' Go home.', ' Go to the register''s office. ', ' Go to the lecture series. ', ' Go to the library ', ' Go to the library '),
(38, '', ' Find water.', ' Get settled in one place. ', ' Look for food. ', ' Start walking in a likely direction. ', ' Get settled in one place. '),
(39, '', ' You will lower your body temperature too much', ' You will become ill. ', ' It is hard to take in enough snow. ', ' Snow doesn''t really quench your thirst. ', ' You will lower your body temperature too much'),
(40, '', ' Keep extremely active. ', ' Wear a hat. ', ' Dress warmly. ', ' Stay dry. ', ' Wear a hat. '),
(41, '', 'They have just heard the talk. ', ' They have done this many times before. ', ' they will be well equipped.', ' They will be accompanied by guides. ', ' They will be accompanied by guides. '),
(42, '', 'People will tell him after the talk.', ' People will raise their hands. ', ' People will send in a registration. ', ' People have notified him prior to the talk.', ' People will raise their hands. '),
(43, '', 'In science fiction ', ' In every ocean on earth ', ' Under the ocean floor', ' In the wilderness', ' In every ocean on earth '),
(44, '', 'They are the most abundant animals in the midwater.', 'They have razor sharp teeth. ', 'They have no skeleton.', 'They can link together to form very long chains.', 'They can link together to form very long chains.'),
(45, '', 'Because people are afraid to go there ', ' Because it is so vast. ', ' Because it is not easy to get there. ', ' Because no one knows exactly where it is. ', ' Because it is not easy to get there. '),
(46, '', 'Their ability to glow.', ' Their huge stomachs. ', ' Their mating behavior. ', ' Their ability to find prey. ', 'Their ability to glow.'),
(47, 'What''s the best title for this passage?', ' Diamond Cutting', ' The World''s Biggest Diamond. Uncut and Cut.', ' Measuring Diamonds in Carats', 'The British Crown Jewels. ', ' The World''s Biggest Diamond. Uncut and Cut.'),
(48, 'The word ''uncut'' in the first line is closest in meaning to which of the following?', ' Finished', ' Unnatural', ' Pear', ' Whole', ' Whole'),
(49, 'The word ''discovered'' in the second line is closest in meaning to ___.', ' created', ' found', ' buried', ' weighed', ' found'),
(50, 'It can be inferred from the passage that the Cullinan Diamond was cut into how many total stones?\r\n\r\n', '9', '96', '105', '3,10', '105'),
(51, 'The word ''major'' in the third line could be best replaced by___.', ' well-known', ' military', ' natural', ' big ', ' big '),
(52, 'Which of the following is NOT true \r\n about Cullinan I?\r\n', ' It was cut from the Cullinan Diamond.', ' It weighs 3,106 carats.', ' It is the biggest cut diamond in the world.', 'It is sometimes called the Greater Star of Africa.', ' It weighs 3,106 carats.'),
(53, 'All of the following are true about the shape of the Greater Star of Africa EXCEPT that ', ' it is in the shape of a pear.', ' it is 5.4 centimeters long.', ' It is longer than it is wide.', ' It is 4.4 inches wide. ', ' It is 4.4 inches wide. '),
(54, 'According to the passage, what \r\n happened to Cullinan I?\r\n', ' It remained in Africa. ', ' It was cut into smaller stones.', ' It was cut and changed into the Greater Star of Africa.\r\n', 'It became the property of the BritishRoyal family. ', 'It became the property of the BritishRoyal family. '),
(55, 'Where in the passage does the author \r\n mention the Cullinan Diamond''s weight \r\n when it was mined?\r\n\r\n', ' Lines 1-2', ' Line 3', ' Lines 4 -5', ' Lines 6-7 ', ' Lines 1-2'),
(56, 'The passage mainly discusses', ' the success of the Coca-Cola Company', ' the unusual ingredients in Coca-Cola.', ' John S. Pemberton', ' Coca-Cola''s recipe and who developed it.', ' Coca-Cola''s recipe and who developed it.'),
(57, 'According to the passage, who created \r\n Coca-Cola?\r\n', ' The Coca-Cola Company', ' John S. Pemberton', ' Pemberton''s assistant', ' Frank Robinson ', ' John S. Pemberton'),
(58, 'The word ''unusual'' in line 2 in closest in \r\n meaning to___. \r\n', ' uncommon', ' important', ' unused', ' tasty ', ' uncommon'),
(59, 'Which of the following is NOT true about \r\n the name Coca-Cola? \r\n', ' The name ''coca'' comes from the coca leaf.', ' The name ''cola'' comes from the cola nut.', ' Frank Robinson suggested the name. ', ' The inventor came up with the name. ', ' The inventor came up with the name. '),
(60, 'A ''recipe'' in line 4 is____. ', ' information about drugs for a pharmacy. ', ' a description of how to prepare something.', ' an accounting statement', ' a corporate organizational plan. ', ' a description of how to prepare something.'),
(61, 'The passage states that the recipe for Coca-Cola is___. ', ' well-known', ' known by only a limited number of people', ' unknown', ' published information ', ' known by only a limited number of people'),
(62, 'Which of the following is NOT \r\n mentioned as an ingredient of Coca- Cola?\r\n', ' Orange leaves', ' Nutmeg', ' Citrus fruits', ' Sugar ', ' Orange leaves'),
(63, 'The word ''secret'' in line 6 could best be replaced by___. ', ' unrevealed', ' delicious', ' business', ' speechless', ' unrevealed'),
(64, 'It can be inferred from the passage that \r\n ___.\r\n', ' the public knows all the ingredients in Coca-Cola. ', ' the public is not sure that coca leaves are used in Coca-Cola. ', 'the public does not know how many cola nuts are used in a batch of Coca-Cola. ', ' No one knows the exact proportion of ingredients used in Coca-Cola.', 'the public does not know how many cola nuts are used in a batch of Coca-Cola. '),
(65, 'The word ''senior'' in line 7 could be best replaced by ___. ', ' trustworthy', ' high-level', ' more mature', ' really decisive', ' high-level');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ptoefl15`
--
ALTER TABLE `ptoefl15`
  ADD UNIQUE KEY `Numero` (`Numero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
