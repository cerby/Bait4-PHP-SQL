-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2011 at 02:28 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mymovielist`
--

-- --------------------------------------------------------

--
-- Table structure for table `character`
--

CREATE TABLE IF NOT EXISTS `character` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `C_RoleType` varchar(20) NOT NULL,
  `C_Description` text NOT NULL,
  `P_ID` int(11) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `character`
--

INSERT INTO `character` (`C_ID`, `C_Name`, `C_RoleType`, `C_Description`, `P_ID`) VALUES
(1, 'Marty McFly', 'Lead', 'Marty McFly was born in Hill Valley, CA to parents George and Lorraine (IMDB)', 1),
(2, 'Dr. Emmett Brown', 'Support', 'Emmett "Doc" Brown is a local scientist living in the town of Hill Valley.(IMDB)', 2),
(3, 'Lorraine Baines', 'support', 'Lorraine Baines was the maiden name of Marty McFly''s mother.(IMDB)', 3),
(4, 'George McFly', 'support', 'George and Lorraine (nee Baines) McFly had two sons (IMDB)', 4),
(5, 'Biff Tannen', 'Support', 'Biff Tannen is the man competing for Lorraine', 5);

-- --------------------------------------------------------

--
-- Table structure for table `movieprofile`
--

CREATE TABLE IF NOT EXISTS `movieprofile` (
  `MovieID` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Synopsis` text NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Length` int(11) NOT NULL,
  `Production_Year` int(11) NOT NULL,
  PRIMARY KEY (`MovieID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieprofile`
--

INSERT INTO `movieprofile` (`MovieID`, `Type`, `Name`, `Synopsis`, `Rating`, `Length`, `Production_Year`) VALUES
(1, 'Movie', 'Back To The Future', 'In 1985, Doc Brown invents time travel; in 1955, Marty McFly accidentally prevents his parents from meeting, putting his own existence at stake.(IMDB) ', 'PG', 116, 1985);

-- --------------------------------------------------------

--
-- Table structure for table `people`
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
-- Dumping data for table `people`
--

INSERT INTO `people` (`P_ID`, `P_FirstName`, `P_LastName`, `P_BirthDate`, `P_BirthMonth`, `P_BirthYear`, `P_Information`, `P_CarreerStart`, `P_CarreerEnd`) VALUES
(1, 'Michael_J', 'Fox', 9, 6, 1961, 'Michael J. Fox was born in Edmonton, Alberta, Canada as Michel Andrew Fox. (IMDB)', 1973, 0),
(2, 'Christopher', 'Lloyd', 22, 10, 1938, 'As a young actor, he performed at the Yale Repertory Theater with Meryl Streep.', 1970, 0),
(3, 'Lea ', 'Thompson', 31, 3, 1961, 'Lea Katherine Thompson was born May 31, 1961, in Rochester, Minnesota. She is the youngest of five children. (IMDB)', 1982, 0),
(4, 'Crispin', 'Glover', 20, 4, 1964, 'While he''s never been a typical leading man, Crispin Glover has distinguished himself as one of the most intriguing personalities in the movie business.(IMDB)', 1981, 0),
(5, 'Thomas_F', 'Wilson', 15, 4, 1959, 'Tom Wilson is a creative artist whose professional career has explored almost every imaginable artistic discipline, blending them into a unique and very individual declaration of a life in the arts.', 1984, 0);
