-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Mohammad', 'moe@orange.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `discreption`
--

CREATE TABLE `discreption` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discreption`
--

INSERT INTO `discreption` (`id`, `image`, `details`) VALUES
(6, 'https://imgresizer.eurosport.com/unsafe/1200x0/filters:format(jpeg):focal(1481x576:1483x574)/origin-imgresizer.eurosport.com/2021/11/24/3259416-66705588-2560-1440.jpg', 'France and Real Madrid striker Karim Benzema has been found guilty of conspiring to blackmail a fellow French footballer with a sex tape.\n\nA judge handed Benzema a one-year suspended jail term and ordered him to pay a €75,000 (£63,000; $84,000) fine.\n\nBenzema, 33, was one of five people put on trial last month over an attempt to extort Frenchman Mathieu Valbuena.\n\nThe scandal has stunned the football community in France and both players lost their national team places.\n\nThe case dates back to June 2015, when the two footballers were at a French training camp.\n\nAt the camp, Benzema put pressure on Valbuena to pay off the blackmailers, whom he had conspired with to act as an intermediary, prosecutors said.\n\nBenzema has always denied the allegations and insisted he was only trying to help Valbuena get rid of the compromising video.\n\nBenzema has since returned to the France team and is expected to start for Real Madrid on Wednesday night when they play FC Sheriff Tiraspol in the Champions League.\n\nBenzema was not present in court in Versailles for the verdict, nor was Valbuena, who plays for Greek club Olympiakos.\n\nFour of Benzema\'s co-defendants in the trial were also found guilty on Wednesday. They were handed jail sentences ranging from 18 months suspended to two-and-a-half years in prison.\n\nBenzema\'s lawyers said they would appeal his conviction. \"The reaction is ultimately an angry one to this judgment which is perfectly contradictory,\" his lawyer, Sylvain Cormier, told reporters outside court.\n\nBut when delivering the verdict, the judge said Benzema had \"implicated himself personally, through subterfuge and lies, to convince his teammate to submit to the blackmail\".\n\nBenzema made a surprise comeback to the French national team in May, five years after he was exiled from the side when the allegations first surfaced in 2015.\n\nBut last month, the French football federation said a guilty verdict would not necessarily jeopardise Benzema\'s position in the national side.\n\nSince being called back by France manager Didier Deschamps, Benzema has been in prolific form, scoring nine times in 13 games for his country. He\'s also scored 10 goals this season for his club, Real Madrid, who are yet to comment on the verdict.\n\nFor his performances on the pitch, Benzema was named a candidate for the Ballon d\'Or footballer of the year award which will be announced next week.\n\n'),
(7, 'https://ichef.bbci.co.uk/news/1024/branded_news/066F/production/_121774610_gettyimages-1319690083.jpg', 'Blinding Lights by Canadian pop star The Weeknd has become the number one song of all time on Billboard\'s music charts.\r\n\r\nAccording to Billboard, Blinding Lights has now spent 90 weeks in the top 100 chart.\r\n\r\nThe song ousted Chubby Checker\'s 1960s hit The Twist to clinch the top spot.\r\n\r\nThe Billboard 100 has been charting top songs according to radio plays, sales and streaming for the past 63 years.\r\n\r\nThe Weeknd, real name Abel Tesfaye, released Blinding Lights in November 2019. By September 2021, it had been streamed more than 2.5 billion times on Spotify.\r\n\r\nIts popularity has been helped by a TikTok dance challenge during the pandemic and The Weeknd\'s performance during the Super Bowl half-time show in 2021.\r\n\r\nTop 10 Billboard top songs of all time\r\nBlinding Lights - The Weeknd\r\nThe Twist - Chubby Checker\r\nSmooth - Santana feat. Rob Thomas\r\nMack the Knife - Bobby Darin\r\nUptown Funk! - Mark Ronson feat Bruno Mars\r\nHow do I Live - LeAnn Rimes\r\nParty Rock Anthem - LMFAO feat Lauren Nemmett & Goonrock\r\nI Gotta Feeling - The Black Eyed Peas\r\nMacarena (Bayside Boys Remix) - Los Del Rio\r\nShape of You - Ed Sheeran'),
(8, 'https://www.exasol.com/app/uploads/2020/06/football-analytics-1.jpg', 'Manchester United have contacted former Barcelona boss Ernesto Valverde about the role of interim manager.\r\n\r\nValverde, 57, is one of a handful of potential candidates to take charge until the end of the season before United hire a permanent manager.\r\n\r\nUnited are focusing on an interim boss to replace Ole Gunnar Solskjaer.\r\n\r\nThey feel recruiting Paris St-Germain coach Mauricio Pochettino immediately may not be as straightforward as has been suggested.\r\n\r\nFormer Tottenham manager Pochettino said on Tuesday he was \"so happy\" at PSG and that he will not be distracted by links to the United job.\r\n\r\nValverde fits the template of an experienced coach who may not expect to get the job on a permanent basis after the stint as interim manager.\r\n\r\nThe Spaniard\'s last managerial role was with Barcelona, whom he guided to successive La Liga titles and the 2018 Copa del Rey before being sacked in January 2020.\r\nHe also won the Greek title on three occasions with Olympiakos and had successful spells in charge of Espanyol, Valencia and Athletic Bilbao, whom he managed for more than 300 games across two spells.\r\n\r\nValverde has had no direct involvement in the English game but does speak the language.\r\n\r\nUnited feel an experienced interim manager, likely working alongside current coaches including Michael Carrick, who took charge for Tuesday\'s Champions League win against Villarreal, will bring stability and the space to have a comprehensive assessment of the managerial situation.\r\n\r\nHe also won the Greek title on three occasions with Olympiakos and had successful spells in charge of Espanyol, Valencia and Athletic Bilbao, whom he managed for more than 300 games across two spells.\r\n\r\nValverde has had no direct involvement in the English game but does speak the language.\r\n\r\nUnited feel an experienced interim manager, likely working alongside current coaches including Michael Carrick, who took charge for Tuesday\'s Champions League win against Villarreal, will bring stability and the space to have a comprehensive assessment of the managerial situation.\r\n\r\nHe also won the Greek title on three occasions with Olympiakos and had successful spells in charge of Espanyol, Valencia and Athletic Bilbao, whom he managed for more than 300 games across two spells.\r\n\r\nValverde has had no direct involvement in the English game but does speak the language.\r\n\r\nUnited feel an experienced interim manager, likely working alongside current coaches including Michael Carrick, who took charge for Tuesday\'s Champions League win against Villarreal, will bring stability and the space to have a comprehensive assessment of the managerial situation.\r\n\r\n'),
(9, 'images//messi.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(12, 'https://phantom-marca.unidadeditorial.es/961da70c048952f910f56bc4d1668b42/resize/1320/f/jpg/assets/multimedia/imagenes/2021/11/14/16369097394317.jpg', 'Xavier Hernández\" redirects here. For the former Major League Baseball player, see Xavier Hernandez (baseball). For other uses, see Xavi (given name).\r\nIn this Spanish name, the first or paternal surname is Hernández and the second or maternal family name is Creus.\r\nXavi\r\nXavi Hernandez (31521652051).jpg\r\nXavi in 2016\r\nPersonal information\r\nFull name	Xavier Hernández Creus[1]\r\nDate of birth	25 January 1980 (age 41)[1]\r\nPlace of birth	Terrassa, Spain\r\nHeight	1.70 m (5 ft 7 in)[2]\r\nPosition(s)	Midfielder\r\nClub information\r\nCurrent team	Barcelona (manager)\r\nYouth career\r\n1984–1985	Jàbac Terrassa\r\n1985–1991	Terrassa\r\n1991–1997	Barcelona\r\nSenior career*\r\nYears	Team	Apps	(Gls)\r\n1997–1999	Barcelona B	55	(3)\r\n1998–2015	Barcelona	505	(58)\r\n2015–2019	Al Sadd	82	(21)\r\nTotal		642	(82)\r\nNational team\r\n1997	Spain U17	10	(2)\r\n1997–1998	Spain U18	10	(0)\r\n1999	Spain U20	6	(2)\r\n1998–2001	Spain U21	26	(7)\r\n2000	Spain U23	6	(2)\r\n2000–2014	Spain	133	(13)\r\nTeams managed\r\n2019–2021	Al Sadd\r\n2021–	Barcelona\r\nHonours\r\n* Senior club appearances and goals counted for the domestic league only\r\nXavier Hernández Creus (born 25 January 1980), known as Xavi, is a Spanish professional football manager and former player who is the manager of La Liga club Barcelona. Widely considered one of the best midfielders of all time,[3][4] Xavi was renowned for his passing, vision, ball retention, and positioning.[5][6][7][8]\r\n\r\nXavi joined La Masia, the Barcelona youth academy, at age 11, and made his first-team debut against Mallorca in August 1998. In all, he played 767 official matches, a former club record–now held by Lionel Messi–and scored 85 goals.[9] Xavi is the first player in the club\'s history to play 150 European and FIFA Club World Cup matches combined.[10] With Barcelona, Xavi won eight La Liga titles and four UEFA Champions League titles. Xavi came third in the 2009 FIFA World Player of the Year, followed by third place for its successor award, the FIFA Ballon d\'Or, in 2010 and 2011. In 2011, he was runner up to Lionel Messi for the UEFA Best Player in Europe Award. In 2015, he departed Barcelona for Al Sadd, where he won four trophies before retiring in 2019. He is one of the few recorded players to have made over 1,000 professional career appearances.\r\n\r\nWith Spain, Xavi won the FIFA World Youth Championship in 1999, and the Olympic silver medal at the 2000 Olympics. After making his senior team debut in 2000, he was capped 133 times for his country, and was an influential figure in the team\'s successes. He played an integral role in Spain\'s victory at the 2010 FIFA World Cup, as well as their wins at UEFA Euro 2008 and UEFA Euro 2012. He was named Player of the Tournament at UEFA Euro 2008,[11] and was named in the UEFA Euro Team of the Tournament in 2008 and 2012. With two assists in the UEFA Euro 2012 Final, Xavi became the first player to register assists in two separate European finals, after setting up the only goal in the final four years earlier.[12] After the 2014 FIFA World Cup, Xavi announced his retirement from international football.[13]\r\n\r\nXavi was awarded the IFFHS World\'s Best Playmaker award four times, all straight between 2008 and 2011. He was included in the FIFA FIFPro World XI on six occasions: 2008 to 2013, and the UEFA Team of the Year five times: 2008 to 2012. In 2020 Xavi was named in the Ballon d\'Or Dream Team, a greatest all-time XI published by France Football magazine.[14] Xavi was awarded the Prince of Asturias Award in 2012, and he won 32 trophies in his career, making him the second-most decorated Spanish player in history, behind former teammate Andrés Iniesta.[15][16][17] After retirement, Xavi transitioned to coaching, and he was named the manager at Qatar Stars League club Al Sadd in May 2019. In November 2021, Xavi was appointed as manager at his former club Barcelona.');

-- --------------------------------------------------------

--
-- Table structure for table `titlenews`
--

CREATE TABLE `titlenews` (
  `id` int(11) NOT NULL,
  `type` enum('sport','wether','sounds','') NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titlenews`
--

INSERT INTO `titlenews` (`id`, `type`, `title`) VALUES
(6, 'sport', 'Benzima come back!'),
(7, 'sounds', 'Weeknd\'s Blinding Lights becomes Billboard\'s No. 1 song of all time'),
(8, 'sport', 'Man Utd contact Ernesto Valverde over interim manager role'),
(9, 'sport', 'messi to jordan !'),
(12, 'sport', 'xavi back to BCF !');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discreption`
--
ALTER TABLE `discreption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titlenews`
--
ALTER TABLE `titlenews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discreption`
--
ALTER TABLE `discreption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `titlenews`
--
ALTER TABLE `titlenews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discreption`
--
ALTER TABLE `discreption`
  ADD CONSTRAINT `discreption_ibfk_1` FOREIGN KEY (`id`) REFERENCES `titlenews` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
