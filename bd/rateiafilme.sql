-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Mar-2022 às 04:07
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rateiafilme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `moviedata`
--

CREATE TABLE `moviedata` (
  `id` int(50) NOT NULL,
  `usersendedid` int(50) NOT NULL,
  `moviename` varchar(300) NOT NULL,
  `moviedir` varchar(240) NOT NULL,
  `moviesinopse` varchar(450) NOT NULL,
  `movieyear` varchar(150) NOT NULL,
  `movietrailer` varchar(260) NOT NULL,
  `movieposter` varchar(500) NOT NULL,
  `moviepostercss` varchar(499) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `moviedata`
--

INSERT INTO `moviedata` (`id`, `usersendedid`, `moviename`, `moviedir`, `moviesinopse`, `movieyear`, `movietrailer`, `movieposter`, `moviepostercss`) VALUES
(2, 9, 'The Batman', 'Matt Reeves', 'O Batman é estrelado por Robert Pattinson agora, com Nirvana na trilha sonora!!!!', '2022', 'https://youtu.be/NLOp_6uPccQ', '../images/movieposters/623a8301ecc86_thebatman.jpg', 'images/movieposters/623a8301ecc86_thebatman.jpg'),
(3, 9, 'Into the SpiderVerse', 'Rodney Rothman, Peter Ramsey, Bob Persichetti', 'Miles Morales is juggling his life between being a high school student and being a spider-man. When Wilson “Kingpin” Fisk uses a super collider, others from across the Spider-Verse are transported to this dimension.', '2018', 'https://youtu.be/NsJ1Ozx5_oU', '../images/movieposters/623a84450a242_intothespiderverse.jpg', 'images/movieposters/623a84450a242_intothespiderverse.jpg'),
(6, 9, 'La La Land', 'Damien Chazelle', 'Mia, an aspiring actress, serves lattes to movie stars in between auditions and Sebastian, a jazz musician, scrapes by playing cocktail party gigs in dingy bars, but as success mounts they are faced with decisions that begin to fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.', '2016', 'https://youtu.be/0pdqf4P9MB8', '../images/movieposters/623a887960b80_lalaland.jpg', 'images/movieposters/623a887960b80_lalaland.jpg'),
(7, 9, 'Parasite', 'Bong Joon-ho', 'All unemployed, Ki-taek’s family takes peculiar interest in the wealthy and glamorous Parks for their livelihood until they get entangled in an unexpected incident.', '2019', 'https://youtu.be/PhPROyE0OaM', '../images/movieposters/623a898018b40_parasite.jpg', 'images/movieposters/623a898018b40_parasite.jpg'),
(8, 9, 'Turning Red', 'Domee Shi', 'Thirteen-year-old Mei is experiencing the awkwardness of being a teenager with a twist – when she gets too excited, she transforms into a giant red panda.', '2022', 'https://youtu.be/XdKzUbAiswE', '../images/movieposters/623a8a858c9db_turningred.jpg', 'images/movieposters/623a8a858c9db_turningred.jpg'),
(9, 9, 'Spider-Man No Way Home', 'Jon Watts', 'Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.', '2021', 'https://youtu.be/pBvH8hvnJPk', '../images/movieposters/623a8ae787c64_spider-mannowayhome.jpeg', 'images/movieposters/623a8ae787c64_spider-mannowayhome.jpeg'),
(10, 9, 'Dont Look Up', 'Adam McKay', 'Two low-level astronomers, upon discovering that a meteor will strike the Earth in six months, go on a media tour to try to warn the world but find an unreceptive and unbelieving populace.', '2021', 'https://youtu.be/RbIxYm3mKzI', '../images/movieposters/623a8ba2301b8_dontlookup.jpg', 'images/movieposters/623a8ba2301b8_dontlookup.jpg'),
(11, 9, 'Encanto', 'Byron Howard, Jared Bush', 'The tale of an extraordinary family, the Madrigals, who live hidden in the mountains of Colombia, in a magical house, in a vibrant town, in a wondrous, charmed place called an Encanto. The magic of the Encanto has blessed every child in the family with a unique gift from super strength to the power to heal—every child except one, Mirabel. But when she discovers that the magic surrounding the Encanto is in danger, Mirabel decides that she, the onl', '2021', 'https://youtu.be/bjMFebB2Coo', '../images/movieposters/623a8c456e51f_encanto.jpg', 'images/movieposters/623a8c456e51f_encanto.jpg'),
(12, 9, 'A Quiet Place', 'John Krasinski', 'A family is forced to live in silence while hiding from creatures that hunt by sound.', '2018', 'https://youtu.be/rqEnM25BsNQ', '../images/movieposters/623a8ce60dde2_aquietplace.jpg', 'images/movieposters/623a8ce60dde2_aquietplace.jpg'),
(13, 9, 'Godzilla vs Kong', 'Adam Wingard', 'In a time when monsters walk the Earth, humanity’s fight for its future sets Godzilla and Kong on a collision course that will see the two most powerful forces of nature on the planet collide in a spectacular battle for the ages.', '2021', 'https://youtu.be/odM92ap8_c0', '../images/movieposters/623a8db8b3217_godzillavskong.png', 'images/movieposters/623a8db8b3217_godzillavskong.png'),
(14, 9, 'Last Night in Soho', 'Edgar Wright', 'A young girl, passionate about fashion design, is mysteriously able to enter the 1960s where she encounters her idol, a dazzling wannabe singer. But 1960s London is not what it seems, and time seems to be falling apart with shady consequences.', '2021', 'https://youtu.be/XgNrL4Kf7yU', '../images/movieposters/623a8e0a4b428_lastnightinsoho.png', 'images/movieposters/623a8e0a4b428_lastnightinsoho.png'),
(15, 9, 'Dune', 'Denis Villeneuve', 'Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet’s exclusive supply of the most precious resource in existence-a commodity capable of unlocking humanity’s greatest potential-only those who can conquer their fear will survive.', '2021', 'https://youtu.be/w0HgHet0sxg', '../images/movieposters/623a8e5a27db2_dune.jpg', 'images/movieposters/623a8e5a27db2_dune.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviewdata`
--

CREATE TABLE `reviewdata` (
  `userid` int(50) NOT NULL,
  `movieid` int(50) NOT NULL,
  `review` varchar(600) NOT NULL,
  `rate` int(20) NOT NULL,
  `reviewid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdata`
--

CREATE TABLE `userdata` (
  `id` int(50) NOT NULL,
  `username` varchar(240) NOT NULL,
  `usermail` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `userpic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `usermail`, `password`, `userpic`) VALUES
(9, 'thedoridot', 'thedoridot@outlook.com', '9f951fc378b8a758e907aa223103d6b9', './images/userimages/6238d4e3d7137_thedoridot.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `moviedata`
--
ALTER TABLE `moviedata`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reviewdata`
--
ALTER TABLE `reviewdata`
  ADD PRIMARY KEY (`reviewid`);

--
-- Índices para tabela `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `moviedata`
--
ALTER TABLE `moviedata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `reviewdata`
--
ALTER TABLE `reviewdata`
  MODIFY `reviewid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
