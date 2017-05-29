-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2015 at 06:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamelogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
`AdminID` int(11) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `AdminPassword` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`AdminID`, `AdminName`, `AdminPassword`) VALUES
(1, 'alvi', 'alvi'),
(2, 'sadman', 'sadman');

-- --------------------------------------------------------

--
-- Table structure for table `gametable`
--

CREATE TABLE IF NOT EXISTS `gametable` (
`ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `DEVELOPER` varchar(25) NOT NULL,
  `RATING` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `LOGO` varchar(30) DEFAULT NULL,
  `RATING_IMAGE` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `gametable`
--

INSERT INTO `gametable` (`ID`, `NAME`, `TYPE`, `YEAR`, `DEVELOPER`, `RATING`, `DESCRIPTION`, `LOGO`, `RATING_IMAGE`) VALUES
(1, 'Mass Effect 2', 'Action', '2010', 'EA', 'ESSENTIAL', 'Mass Effect 2 is the perfect fusion of the shooter and RPG genres. When you''re not playing it, you wish you were. When you are playing it, you can''t imagine doing anything else. Engrossing. Stunning.', 'image/Masaft2.jpg', ''),
(2, 'Call of Duty: Black Ops', 'Action', '2010', 'ACTIVISION', 'GOOD', 'Call of Duty: Black Ops is a far more accomplished experience than Treyarch''s previous efforts.', 'image/codblacops.jpg', ''),
(3, 'Darksiders', 'RPG', '2010', 'THQ', 'GOOD', 'Darksiders deserves attention. It''s a highly entertaining adventure, with some gorgeous visuals, devilish puzzles and exciting action. Fingers crossed the sequel will build on this impressive debut.', 'image/ds.jpg', ''),
(4, 'The Witcher 2: Assassins of Kings', 'RPG', '2011', '#CD_Project_RED', 'ESSENTIAL', 'Regardless of some occasional wobbles this is one of the most ambitious, darkest, and legitimately smart additions to the genre you''ll have the luck of playing. Just get yourself a bloody decent PC.', 'image/witcher2.jpg', ''),
(5, 'Driver: San Francisco', 'Racing', '2011', 'Ubisoft', 'GOOD', 'Driver San Francisco could have been a one-trick pony but it has managed to use that trick in a variety of clever and interesting ways, ensuring the driving gameplay never becomes tiresome or generic.', 'image/driver.jpg', ''),
(6, 'Far Cry 3', 'Action', '2012', 'Ubisoft', 'ESSENTIAL', 'Far Cry 3 shines in its campaign, which is more layered and compelling than any game proffering a power trip through escapist ultraviolence has any right to be.', 'image/farcry3.jpg', ''),
(7, 'Need For Speed: Most Wanted (2012)', 'Racing', '2012', 'EA ', 'GOOD', 'Need for Speed: Most Wanted''s greatest achievement is how it sets such a firm focus on racing. Criterion set out to make an open-world arcade racer where competition is king, and succeeded.', 'image/nfsmw2012.jpg', ''),
(8, 'Alan Wake', 'Adventure', '2012', 'Remedy', 'ESSENTIAL', 'Alan Wake is still a superbly scripted adventure on PC.', 'image/alanwake.jpg', ''),
(9, 'Darksiders II', 'RPG', '2012', 'THQ', 'GOOD', 'With Darksiders II Vigil has managed to capture a sense of one of the rarest feelings in video games: a genuine adventure. This is a fascinatingly hokey journey.', 'image/ds2.jpg', ''),
(10, 'Assassins Creed 4: Black Flag', 'Action', '2013', 'Ubisoft', 'AVERAGE', 'Flawed yet addictive, Assassin''s Creed may be in need of a change.', 'image/asbf4.jpg', ''),
(11, 'Tomb Raider', 'Adventure', '2013', 'Square_ENIX', 'GOOD', 'Tomb Raider is not a brave game. Nor is it one that’ll likely live long in the memory, but while you’re walking in Lara’s muddy size fours, it is spellbinding.', 'image/tr.jpg', ''),
(12, 'BioShock Infinite', 'Narrative', '2013', '2K_GAMES', 'GOOD', 'Despite its many flaws, BioShock Infinite might just be one of the most compelling games of this generation', 'image/bsi.jpg', ''),
(13, 'Call of Duty: Ghosts', 'Action', '2013', 'ACTIVISION', 'AVERAGE', 'Diminishing with every return, Ghosts'' addictive nature is tempered by over-familiarity.', 'image/codbopsg.jpg', ''),
(14, 'FIFA 15', 'Sports', '2015', 'EA', 'AVERAGE', 'There''s a sublime game of football in here, but overpowered goalkeepers and a lack of innovation sour the experience.', 'image/F15.jpg', ''),
(15, 'Titanfall', 'RPG', '2014', 'EA', 'GOOD', 'A very good first instalment, but the best is yet to come.', 'image/tf.jpg', ''),
(16, 'Dark Souls 2: Crown of the Sunken King', 'RPG', '2014', 'Bethesda', 'ESSENTIAL', 'A great amount of content, if a little unbalanced and with a high entry barrier.', 'image/dsii.jpg', ''),
(17, 'The Evil Within', 'Horror', '2014', 'Bethesda', 'GOOD', 'A Mikami megamix of sorts that doesn''t hit the heights of the director''s previous work, but is enjoyable all the same.', 'image/tew.jpg', ''),
(18, 'Call of Duty: Advanced Warfare', 'Action', '2014', 'ACTIVISION', 'GOOD', 'Mixing futuristic tech with established fundamentals, Sledgehammer has created the first truly impressive Call of Duty in years.', 'image/codadw.jpg', ''),
(19, 'Dragon Age: Inquisition', 'Action_3rd Person', '2014', 'EA', 'ESSENTIAL', 'A worthy addition to the Dragon Age series, but it takes some time to prove it.', 'image/dai.jpg', ''),
(20, 'Assassins Creed Unity', 'Action', '2014', 'Ubisoft', 'AVERAGE', 'Evolution rather than revolution, and better for it, Far Cry 4 is the best the series has to offer.', 'image/fr4.jpg', ''),
(21, 'Middle-earth: Shadow of Mordor', 'RPG', '2014', 'WB', 'GOOD', 'A triumph of emergent gameplay, slightly let down by a heavily scripted ending.', 'image/mesom.jpg', ''),
(22, 'Batman: Arkham Knight', 'Action', '2015', 'WB', 'ESSENTIAL', 'Batman: Arkham Knight is the best Batman game ever made and a classic in its own right.', 'image/bak.jpg', ''),
(23, 'Grand Theft Auto 5', 'Action', '2015', 'Rockstar', 'ESSENTIAL', 'The definitive version of Rockstar''s biggest world to date.', 'image/gta5.jpg', ''),
(24, 'Mortal Kombat X', 'Action', '2015', ' NetherRealm Studios', 'GOOD', 'Mortal Kombat X is a gruesome brawler, but it''s also absurd and ridiculously fun.', 'image/mkx.jpg', ''),
(25, 'Wolfenstein: The Old Blood', 'Action', '2015', 'Bethesda', 'GOOD', 'Shorter, more tonally cohesive, and outright better than its predecessor.', 'image/wtob.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviewtable`
--

CREATE TABLE IF NOT EXISTS `reviewtable` (
`ReviewID` int(11) NOT NULL,
  `GameID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewMSG` varchar(400) NOT NULL,
  `UserRating` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reviewtable`
--

INSERT INTO `reviewtable` (`ReviewID`, `GameID`, `UserID`, `ReviewMSG`, `UserRating`) VALUES
(1, 6, 1, 'The best game i ever played xD', 0),
(2, 6, 1, 'I just love the game graphics ...', 0),
(3, 4, 3, 'Awesome game it is', 0),
(4, 4, 3, 'Best', 0),
(5, 8, 1, 'Nice one', 0),
(6, 23, 3, 'The best game i ever played GTA 5 xD', 0),
(7, 3, 3, 'Impressive game play', 0),
(8, 22, 3, 'Super game ', 0),
(9, 22, 3, 'Nice game', 0),
(10, 17, 2, 'Aweome game !!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upcominggame`
--

CREATE TABLE IF NOT EXISTS `upcominggame` (
`UpcomingGame` int(11) NOT NULL,
  `UpcomingGameName` varchar(50) NOT NULL,
  `UpcomingGameTrailer` varchar(100) NOT NULL,
  `UpcomingGameImage` varchar(50) NOT NULL,
  `UpcomingGameReleaseDate` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `upcominggame`
--

INSERT INTO `upcominggame` (`UpcomingGame`, `UpcomingGameName`, `UpcomingGameTrailer`, `UpcomingGameImage`, `UpcomingGameReleaseDate`) VALUES
(1, 'FIFA 16', 'https://www.youtube.com/embed/bwz98athxQ8', 'image/Upcoming_FIFA16.jpg', 'Sep 22, 2015'),
(2, 'PES 2016', 'https://www.youtube.com/embed/HshfqDVGWJU', 'image/Upcoming_PES16.jpg', 'Sep 17, 2015'),
(3, 'Need for Speed', 'https://www.youtube.com/embed/Y5wssYZHVWc', 'image/Upcoming_NFS.jpg', 'Nov 3, 2015'),
(4, 'Call of Duty: Black Ops III', 'https://www.youtube.com/embed/58Pspqx0XGs', 'image/Upcoming_COD3.jpg', 'Nov 6, 2015'),
(5, 'Assassin''s Creed Syndicate', 'https://www.youtube.com/embed/HFFcXwIBMPc', 'image/Upcoming_AC.jpg', 'Nov 19, 2015');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
`UserID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `UserEmail` varchar(20) NOT NULL,
  `UserPassword` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`UserID`, `UserName`, `UserEmail`, `UserPassword`) VALUES
(1, 'SADMAN', 'SADMAN@GMAIL.COM', 'SADMAN'),
(2, 'ALVI', 'ALVI@GMAIL.COM', 'ALVI'),
(3, 'Sadman Sakib', 'SS@YAHOO.COM', 'SS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
 ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `gametable`
--
ALTER TABLE `gametable`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviewtable`
--
ALTER TABLE `reviewtable`
 ADD PRIMARY KEY (`ReviewID`), ADD KEY `GameID` (`GameID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `upcominggame`
--
ALTER TABLE `upcominggame`
 ADD PRIMARY KEY (`UpcomingGame`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
 ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `UserEmail` (`UserEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gametable`
--
ALTER TABLE `gametable`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `reviewtable`
--
ALTER TABLE `reviewtable`
MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `upcominggame`
--
ALTER TABLE `upcominggame`
MODIFY `UpcomingGame` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviewtable`
--
ALTER TABLE `reviewtable`
ADD CONSTRAINT `reviewtable_ibfk_1` FOREIGN KEY (`GameID`) REFERENCES `gametable` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reviewtable_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `usertable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
