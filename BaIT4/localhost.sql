-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 19. 05 2011 kl. 20:19:37
-- Serverversion: 5.5.8
-- PHP-version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mymovielist`
--
CREATE DATABASE `mymovielist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mymovielist`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `associations`
--

CREATE TABLE IF NOT EXISTS `associations` (
  `AssociationID` varchar(11) NOT NULL,
  `MovieID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `Roletype` int(2) NOT NULL DEFAULT '2' COMMENT 'sets the role of the character in show or movie, table can later be made an int, that takes on value 1 for main (and will then write main) or 2 for supporting',
  PRIMARY KEY (`AssociationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `associations`
--

INSERT INTO `associations` (`AssociationID`, `MovieID`, `P_ID`, `C_ID`, `Roletype`) VALUES
('BTTF 1,1', 1, 1, 1, 0),
('BTTF 1,2', 1, 2, 2, 0),
('BTTF 1,3', 1, 3, 3, 0),
('BTTF 1,4', 1, 4, 4, 0),
('BTTF 1,5', 1, 5, 5, 0),
('BTTF 1,6', 1, 6, 6, 0),
('BTTF 1,7', 1, 7, 7, 0),
('BTTF 1,8', 1, 8, 8, 0),
('BTTF 1,9', 1, 10, 77, 0),
('BTTF 2,1', 2, 1, 1, 0),
('BTTF 2,2', 2, 2, 2, 0),
('BTTF 2,3', 2, 3, 3, 0),
('BTTF 2,4', 2, 5, 5, 0),
('BTTF 2,5', 2, 10, 77, 0),
('BTTF 2,6', 2, 11, 4, 0),
('BTTF 3,1', 3, 1, 1, 0),
('BTTF 3,10', 3, 8, 8, 0),
('BTTF 3,11', 3, 11, 4, 0),
('BTTF 3,2', 3, 2, 2, 0),
('BTTF 3,3', 3, 12, 12, 0),
('BTTF 3,4', 3, 5, 13, 0),
('BTTF 3,5', 3, 3, 14, 0),
('BTTF 3,6', 3, 3, 15, 0),
('BTTF 3,7', 3, 13, 16, 0),
('BTTF 3,8', 3, 10, 77, 0),
('BTTF 3,9', 3, 7, 7, 0),
('Matr1,1', 10, 38, 41, 0),
('Matr1,2', 10, 39, 42, 0),
('Matr1,3', 10, 40, 43, 0),
('Matr1,4', 10, 41, 44, 0),
('Matr1,5', 10, 42, 45, 0),
('Matr1,6', 10, 43, 46, 0),
('SW1,1', 4, 14, 17, 0),
('SW1,2', 4, 15, 18, 0),
('SW1,3', 4, 16, 19, 0),
('SW1,4', 4, 17, 20, 0),
('SW1,5', 4, 18, 21, 0),
('SW1,6', 4, 19, 22, 0),
('SW1,7', 4, 20, 23, 0),
('SW1,8', 4, 21, 24, 0),
('SW2,1', 5, 14, 17, 0),
('SW2,10', 5, 17, 20, 0),
('SW2,11', 5, 24, 27, 0),
('SW2,12', 5, 25, 28, 0),
('SW2,2', 5, 15, 18, 0),
('SW2,3', 5, 16, 19, 0),
('SW2,4', 5, 22, 25, 0),
('SW2,5', 5, 18, 21, 0),
('SW2,6', 5, 19, 22, 0),
('SW2,7', 5, 21, 24, 0),
('SW2,8', 5, 20, 23, 0),
('SW2,9', 5, 23, 26, 0),
('SW3,1', 6, 14, 17, 0),
('SW3,10', 6, 21, 24, 0),
('SW3,11', 6, 17, 23, 0),
('SW3,2', 6, 15, 18, 0),
('SW3,3', 6, 16, 19, 0),
('SW3,4', 6, 22, 25, 0),
('SW3,5', 6, 18, 21, 0),
('SW3,6', 6, 19, 22, 0),
('SW3,7', 6, 20, 23, 0),
('SW3,8', 6, 25, 28, 0),
('SW3,9', 6, 23, 26, 0),
('TermM1,1', 7, 26, 29, 0),
('TermM1,2', 7, 27, 30, 0),
('TermM1,3', 7, 28, 31, 0),
('TermM2,1', 8, 26, 29, 0),
('TermM2,2', 8, 28, 31, 0),
('TermM2,3', 8, 29, 32, 0),
('TermM2,4', 8, 30, 33, 0),
('TermM2,5', 8, 31, 34, 0),
('TermM2,6', 8, 32, 35, 0),
('TermM2,7', 8, 33, 36, 0),
('TermM2,8', 8, 34, 78, 0),
('TermM3,1', 9, 26, 29, 0),
('TermM3,2', 9, 76, 37, 0),
('TermM3,3', 9, 35, 38, 0),
('TermM3,4', 9, 36, 39, 0),
('TermM3,5', 9, 37, 40, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `character`
--

CREATE TABLE IF NOT EXISTS `character` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `C_Description` text NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `character`
--

INSERT INTO `character` (`C_ID`, `C_Name`, `C_Description`) VALUES
(1, 'Marty McFly', 'Marty McFly was born in Hill Valley, CA to parents George and Lorraine (IMDB)'),
(2, 'Dr. Emmett Brown', 'Emmett "Doc" Brown is a local scientist living in the town of Hill Valley.(IMDB)'),
(3, 'Lorraine', 'Lorraine Baines was the maiden name of Marty McFly''s mother.(IMDB)'),
(4, 'George McFly', 'George and Lorraine (nee Baines) McFly had two sons (IMDB)'),
(5, 'Biff Tannen', 'Biff Tannen is the man competing for Lorraine'),
(6, 'Jennifer Parker', '1'),
(7, 'Dave McFly', '1'),
(8, 'Linda McFly', '1'),
(11, 'Seamus McFly', '1'),
(12, 'Clara Clayton', '1'),
(13, 'Buford Tannen', '1'),
(14, 'Maggie McFly', '1'),
(15, 'Lorraine McFly', '1'),
(16, 'Chester', '1'),
(17, 'Luke Skywalker', '1'),
(18, 'Han Solo', '1'),
(19, 'Princess Leia', '1'),
(20, 'Ben Obi-Wan Kenobi', '1'),
(21, 'C-3PO', '1'),
(22, 'R2D2', '1'),
(23, 'Chewbacca', '1'),
(24, 'Darth Vader', '1'),
(25, 'Lando Calrissian', '1'),
(26, 'Yoda', '1'),
(27, 'Boba Fett', '1'),
(28, 'The Emperor', '1'),
(29, 'The Terminator', '1'),
(30, 'Kyle Reese', '1'),
(31, 'Sarah Connor', 'T1 and T2'),
(32, 'John Connor', 'T2'),
(33, 'T-1000', '1'),
(34, 'Dr. Silberman', '1'),
(35, 'Miles Dyson', '1'),
(36, 'Enrique Salceda', '1'),
(37, 'John Connor', 'T3'),
(38, 'Kate Brewster', '1'),
(39, 'T-X', '1'),
(40, 'Robert Brewster', '1'),
(41, 'Neo', '1'),
(42, 'Morpheus', '1'),
(43, 'Trinity', '1'),
(44, 'Agent Smith', '1'),
(45, 'Oracle', 'Matrix 1'),
(46, 'Cypher', '1'),
(47, 'Power Station Guard', '1'),
(49, 'Soren', '1'),
(50, 'Persephone', '1'),
(51, 'Bane', '1'),
(52, 'The Oracle', 'Matrix 3'),
(53, 'Councillor Grace', '1'),
(54, 'Deus Ex Machina', '1'),
(55, 'Seraph', '1'),
(56, 'Zee', '1'),
(57, 'Sarah Connor', 'Chronicles'),
(58, 'John Connor', 'Chronicles'),
(59, 'Cameron Phillips', '1'),
(60, 'James Ellison', '1'),
(61, 'Derek Reese', '1'),
(62, 'Cromartie ', '1'),
(63, 'Catherine Weaver', '1'),
(64, 'Mr. Spock', 'Star Trek'),
(65, 'Captain Kirk', '1'),
(66, 'Dr. McCoy', '1'),
(67, 'Scott', '1'),
(68, 'TSgt. Donald Malarke', 'Band'),
(69, 'Maj. Richard D. Wint', '1'),
(70, 'Capt. Lewis Nixon', '1'),
(71, 'Cpl. Eugene Roe', '1'),
(72, 'C. Carwood Lipton', '1'),
(73, 'SSgt. Darrel Powers', '1'),
(74, 'Diana', 'V mini'),
(75, 'Robert Maxwell', '1'),
(76, 'Juliet Parrish', '1'),
(77, 'Mr. Strickland', 'BTTF'),
(78, 'Todd Voight', 'T2');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `movieprofile`
--

CREATE TABLE IF NOT EXISTS `movieprofile` (
  `MovieID` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Synopsis` text NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Length` int(11) NOT NULL,
  `Production_Year` int(11) NOT NULL,
  `M_Episodes` int(11) NOT NULL,
  PRIMARY KEY (`MovieID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `movieprofile`
--

INSERT INTO `movieprofile` (`MovieID`, `Type`, `Name`, `Synopsis`, `Rating`, `Length`, `Production_Year`, `M_Episodes`) VALUES
(1, 'Movie', 'Back To The Future', 'In 1985, Doc Brown invents time travel; in 1955, Marty McFly accidentally prevents his parents from meeting, putting his own existence at stake.(IMDB) ', 'PG', 116, 1985, 1),
(2, 'Movie', 'Back To The Future Part II', 'After visiting 2015, Marty McFly must repeat his visit to 1955 to prevent disastrous changes to 1985... without interfering with his first trip.(IMDB) ', 'PG', 108, 1989, 1),
(3, 'Movie', 'Back To The Future Part III', 'Enjoying a peaceable existence in 1885, Doctor Emmet Brown is about to be killed by Buford "Mad Dog" Tannen. Marty McFly travels back in time to save his friend. (IMDB)', 'PG', 118, 1990, 1),
(4, 'Movie', 'Star Wars IV', 'Luke Skywalker leaves his home planet, teams up with other rebels, and tries to save Princess Leia from the evil clutches of Darth Vader. (IMDB)', 'PG', 121, 1977, 1),
(5, 'Movie', 'Star Wars V - The Empire Strik', 'While Luke takes advanced Jedi training from Yoda, his friends are relentlessly pursued by Darth Vader as part of his plan to capture Luke. (IMDB)', 'PG', 124, 1980, 1),
(6, 'Movie', 'Star Wars: Episode VI - Return', 'After rescuing Han Solo from the palace of Jabba the Hutt, the Rebels attempt to destroy the Second Death Star, while Luke Skywalker tries to bring his father back to the Light Side of the Force. (IMDB)', 'PG', 134, 1983, 1),
(7, 'Movie', 'The Terminator', 'A human-looking, apparently unstoppable cyborg is sent from the future to kill Sarah Connor; Kyle Reese is sent to stop it. (IMDB)', 'R', 107, 1984, 1),
(8, 'Movie', 'Terminator 2: Judgment Day ', 'The cyborg who once tried to kill Sarah Connor must now protect her teenage son, John Connor, from an even more powerful and advanced Terminator. (IMDB)', 'R', 137, 1991, 1),
(9, 'Movie', 'Terminator 3: Rise of the Mach', 'John Connor is now in his 20''s, and a female terminator, called T-X or Terminatrix, is after him. Another T-101 is sent back through time to protect John once again on the verge of the rise of the machines. (IMDB)', 'R', 109, 2003, 1),
(10, 'Movie', 'The Matrix', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers. (IMDB)', 'R', 136, 1999, 1),
(11, 'Movie', 'The Matrix Reloaded', 'Neo and the rebel leaders estimate that they have 72 hours until 250,000 probes discover Zion and destroy it and its inhabitants. During this, Neo must decide how he can save Trinity from a dark fate in his dreams. (IMDB)', 'R', 138, 2003, 1),
(12, 'Movie', 'The Matrix Revolutions', 'The human city of Zion defends itself against the massive invasion of the machines as Neo fights to end the war at another front while also opposing the rogue Agent Smith.(IMDB)', 'R', 129, 2003, 1),
(13, 'Series', 'Terminator: The Sarah Connor C', 'Set after the events in ''Terminator 2'' Sarah Connor and her son John, trying to stay under-the-radar from the government as they plot to destroy the computer network Skynet in hopes of preventing Armageddon. (IMDB)', 'PG', 60, 2008, 31),
(14, 'Series', 'Star Trek', 'Capt. Kirk and the crew of the Starship Enterprise explore space and defend the United Federation of Planets. (IMDB) ', 'PG', 50, 1966, 79),
(15, 'Miniseries', 'Band of Brothers', 'The story of Easy Company of the US Army 101st Airborne division and their mission in WWII Europe from Operation Overlord through V-J Day. (IMDB)', 'MA', 705, 2001, 10),
(16, 'Miniseries', 'V: The Original Miniseries', 'When aliens come to Earth to ask for our help, a few suspicious humans discover their horrific true intentions and prepare to resist. (IMDB)', 'UR', 197, 1983, 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `P_ID` int(11) NOT NULL,
  `P_FirstName` varchar(30) NOT NULL,
  `P_LastName` varchar(30) NOT NULL,
  `P_BirthDate` int(11) NOT NULL,
  `P_BirthMonth` int(11) NOT NULL,
  `P_BirthYear` int(11) NOT NULL,
  `P_Information` text NOT NULL,
  `P_CarreerStart` int(11) NOT NULL,
  `P_CarreerEnd` int(11) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `people`
--

INSERT INTO `people` (`P_ID`, `P_FirstName`, `P_LastName`, `P_BirthDate`, `P_BirthMonth`, `P_BirthYear`, `P_Information`, `P_CarreerStart`, `P_CarreerEnd`) VALUES
(0, '', '', 0, 0, 0, '', 0, 0),
(1, 'Michael_J', 'Fox', 9, 6, 1961, 'Michael J. Fox was born in Edmonton, Alberta, Canada as Michel Andrew Fox. (IMDB)', 1973, 0),
(2, 'Christopher', 'Lloyd', 22, 10, 1938, 'As a young actor, he performed at the Yale Repertory Theater with Meryl Streep.', 1970, 0),
(3, 'Lea ', 'Thompson', 31, 3, 1961, 'Lea Katherine Thompson was born May 31, 1961, in Rochester, Minnesota. She is the youngest of five children. (IMDB)', 1982, 0),
(4, 'Crispin', 'Glover', 20, 4, 1964, 'While he''s never been a typical leading man, Crispin Glover has distinguished himself as one of the most intriguing personalities in the movie business.(IMDB)', 1981, 0),
(5, 'Thomas_F', 'Wilson', 15, 4, 1959, 'Tom Wilson is a creative artist whose professional career has explored almost every imaginable artistic discipline, blending them into a unique and very individual declaration of a life in the arts.', 1984, 0),
(6, 'Claudia', 'Wells', 5, 7, 1966, 'info to come', 1979, 0),
(7, 'Marc', 'McClure', 31, 3, 1957, 'Played a character named "Boris" in both the original Freaky Friday, and the remake Freaky Friday (IMDB)', 1975, 2008),
(8, 'Wendie Jo', 'Sperber', 15, 9, 1958, 'Though she was known best for drawing laughs as whiny, excitable characters throughout her raucous film and TV career, actress/comedienne Wendie Jo Sperber showed a brave, compassionate and humane side in the last years of her life.(IMDB)', 1978, 2006),
(10, 'James', 'Tolkan', 20, 6, 1931, 'Fiery, forceful and intimidating character actor James Tolkan has carved out a nice little niche for himself in both movies and television alike as a formidable portrayer of fierce and flinty hard-boiled tough guy types. Tolkan was born on June 20, 1931, in Calumet, Michigan.(IMDB)', 1960, 2006),
(11, 'Jeffrey', 'Weissman', 2, 10, 1958, 'Jeffrey Weissman has been performing as an actor since taking to the stage in 1972. He started in film in 1977, Jeffrey has co-starred in dozens of film and television productions. (IMDB)', 1978, 0),
(12, 'Mary', 'Steenburgen', 8, 2, 1953, 'Mary Steenburgen is an Academy Award-winning American actress. She was born February 8, 1953, in Newport, Arkansas, into a family of Dutch-American heritage Her mother, Nell Steenburgen, was a school-board secretary, and her father, Maurice Steenburgen, was a freight-train conductor.(IMDB)', 1978, 0),
(13, 'Matt', 'Clark', 25, 11, 1936, 'Worked numerous jobs while joining a local D.C. theatre group. Later became a member of New York''s Living Theatre company and worked off-Broadway and in community theatre for a time in the late 1950s. (IMDB)', 1964, 2004),
(14, 'Mark ', 'Hamill', 1, 1, 1, '1', 1, 1),
(15, 'Harrison', 'Ford', 1, 1, 1, '1', 1, 1),
(16, 'Carrie', 'Fisher', 1, 1, 1, '1', 1, 1),
(17, 'Alec', 'Guinness', 1, 1, 1, '1', 1, 1),
(18, 'Anthony', 'Daniels', 1, 1, 1, '1', 1, 1),
(19, 'Kenny', 'Baker', 1, 1, 1, '1', 1, 1),
(20, 'Peter', 'Mayhew', 1, 1, 1, '1', 1, 1),
(21, 'James Earl', 'Jones', 1, 1, 1, 'Darth Vader Voice', 1, 1),
(22, 'Billy Dee', 'Williams', 1, 1, 1, '1', 1, 1),
(23, 'Frank', 'Oz', 1, 1, 1, '1', 1, 1),
(24, 'Jeremy', 'Bulloch', 1, 1, 1, '1', 1, 1),
(25, 'Ian', 'McDiarmid', 1, 1, 1, '1', 1, 1),
(26, 'Arnold', 'Schwarzenegger', 1, 1, 1, '1', 1, 1),
(27, 'Michael', 'Biehn', 1, 1, 1, '1', 1, 1),
(28, 'Linda', 'Hamilton', 1, 1, 1, '1', 1, 1),
(29, 'Edward', 'Furlong', 1, 1, 1, '1', 1, 1),
(30, 'Robert', 'Patrick', 1, 1, 1, '1', 1, 1),
(31, 'Earl', 'Boen', 1, 1, 1, '1', 1, 1),
(32, 'Joe', 'Morton', 1, 1, 1, '1', 1, 1),
(33, 'Castulo', 'Guerra', 1, 1, 1, '1', 1, 1),
(34, 'Xander', 'Berkeley', 1, 1, 1, '1', 1, 1),
(35, 'Claire', 'Danes', 1, 1, 1, '1', 1, 1),
(36, 'Kristanna', 'Loken', 1, 1, 1, '1', 1, 1),
(37, 'David', 'Andrews', 1, 1, 1, '1', 1, 1),
(38, 'Keanu', 'Reeves', 1, 1, 1, '1', 1, 1),
(39, 'Laurence', 'Fishburne', 1, 1, 1, '1', 1, 1),
(40, 'Carrie-Anne', 'Moss', 1, 1, 1, '1', 1, 1),
(41, 'Hugo', 'Weaving', 1, 1, 1, '1', 1, 1),
(42, 'Gloria', 'Foster', 1, 1, 1, '1', 1, 1),
(43, 'Joe', 'Pantoliano', 1, 1, 1, '1', 1, 1),
(44, 'Ray', 'Anthony', 1, 1, 1, '1', 1, 1),
(45, 'Christine', 'Anu', 1, 1, 1, '1', 1, 1),
(46, 'Helmut', 'Bakaitis', 1, 1, 1, '1', 1, 1),
(47, 'Steve', 'Bastoni', 1, 1, 1, '1', 1, 1),
(48, 'Monica', 'Bellucci', 1, 1, 1, '1', 1, 1),
(50, 'Ian', 'Bliss', 1, 1, 1, '1', 1, 1),
(51, 'Mary', 'Alice', 1, 1, 1, '1', 1, 1),
(52, 'Francine', 'Bell', 1, 1, 1, '1', 1, 1),
(53, 'Henry', 'Blasingame', 1, 1, 1, '1', 1, 1),
(54, 'Collin', 'Chou', 1, 1, 1, '1', 1, 1),
(55, 'Nona', 'Gaye', 1, 1, 1, '1', 1, 1),
(56, 'Lena', 'Headley', 1, 1, 1, '1', 1, 1),
(57, 'Thomas', 'Dekker', 1, 1, 1, '1', 1, 1),
(58, 'Summer', 'Glau', 1, 1, 1, '1', 1, 1),
(59, 'Richard T', 'Jones', 1, 1, 1, '1', 1, 1),
(60, 'Brian A', 'Green', 1, 1, 1, '1', 1, 1),
(61, 'Garret', 'Dillahunt', 1, 1, 1, '1', 1, 1),
(62, 'Shirley', 'Manson', 1, 1, 1, '1', 1, 1),
(63, 'Leonard', 'Nimoy', 1, 1, 1, '1', 1, 1),
(64, 'William', 'Shatner', 1, 1, 1, '1', 1, 1),
(65, 'DeForest', 'Kelley', 1, 1, 1, '1', 1, 1),
(66, 'James', 'Doohan', 1, 1, 1, '1', 1, 1),
(67, 'Scott', 'Grimes', 1, 1, 1, '1', 1, 1),
(68, 'Damian', 'Lewis', 1, 1, 1, '1', 1, 1),
(69, 'Ron', 'Livingston', 1, 1, 1, '1', 1, 1),
(70, 'Shane', 'Taylor', 1, 1, 1, '1', 1, 1),
(71, 'Donnie', 'Wahlberg', 1, 1, 1, '1', 1, 1),
(72, 'Peter Y', 'Hills', 1, 1, 1, '1', 1, 1),
(73, 'Jane', 'Badler', 1, 1, 1, '1', 1, 1),
(74, 'Michael', 'Durrell', 1, 1, 1, '1', 1, 1),
(75, 'Faye', 'Grant', 1, 1, 1, '1', 1, 1),
(76, 'Nick', 'Stahl', 1, 1, 1, 'T3 John', 1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Data dump for tabellen `users`
--

