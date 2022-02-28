-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 10:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `authors` varchar(200) NOT NULL,
  `avgrating` float NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `isbn13` varchar(13) NOT NULL,
  `lang` varchar(8) NOT NULL DEFAULT 'eng',
  `numpages` int(10) UNSIGNED NOT NULL,
  `rating` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `reviews` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `publisher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `title`, `authors`, `avgrating`, `isbn`, `isbn13`, `lang`, `numpages`, `rating`, `reviews`, `publisher`) VALUES
(1, 'Harry Potter and the Half-Blood Prince (Harry Potter  #6)', 'J.K. Rowling/Mary GrandPre', 4.57, '0439785960', '9780439785969', 'eng', 652, 2095690, 27591, 'Scholastic Inc.'),
(2, 'Harry Potter and the Order of the Phoenix (Harry Potter  #5)', 'J.K. Rowling/Mary GrandPre', 4.49, '0439358078', '9780439358071', 'eng', 870, 2153167, 29221, 'Scholastic Inc.'),
(3, 'Harry Potter and the Chamber of Secrets (Harry Potter  #2)', 'J.K. Rowling', 4.42, '0439554896', '9780439554893', 'eng', 352, 6333, 244, 'Scholastic'),
(4, 'Harry Potter and the Prisoner of Azkaban (Harry Potter  #3)', 'J.K. Rowling/Mary GrandPre', 4.56, '043965548X', '9780439655484', 'eng', 435, 2339585, 36325, 'Scholastic Inc.'),
(5, 'Harry Potter Boxed Set  Books 1-5 (Harry Potter  #1-5)', 'J.K. Rowling/Mary GrandPre', 4.78, '0439682584', '9780439682589', 'eng', 2690, 41428, 164, 'Scholastic'),
(6, 'Unauthorized Harry Potter Book Seven News: Half-Blood Prince Analysis and Speculation', 'W. Frederick Zimmerman', 3.74, '0976540606', '9780976540601', 'en-US', 152, 19, 1, 'Nimble Books'),
(7, 'Harry Potter Collection (Harry Potter  #1-6)', 'J.K. Rowling', 4.73, '0439827604', '9780439827607', 'eng', 3342, 28242, 808, 'Scholastic'),
(8, 'The Ultimate Hitchhiker\'s Guide: Five Complete Novels and One Story (Hitchhiker\'s Guide to the Galaxy  #1-5)', 'Douglas Adams', 4.38, '0517226952', '9780517226957', 'eng', 815, 3628, 2, 'Gramercy Books'),
(9, 'The Ultimate Hitchhiker\'s Guide to the Galaxy (Hitchhiker\'s Guide to the Galaxy  #1-5)', 'Douglas Adams', 4.38, '0345453743', '9780345453747', 'eng', 815, 249558, 4080, 'Del Rey Books'),
(10, 'The Hitchhiker\'s Guide to the Galaxy (Hitchhiker\'s Guide to the Galaxy  #1)', 'Douglas Adams', 4.22, '1400052920', '9781400052929', 'eng', 215, 4930, 460, 'Crown'),
(11, 'The Hitchhiker\'s Guide to the Galaxy (Hitchhiker\'s Guide to the Galaxy  #1)', 'Douglas Adams/Stephen Fry', 4.22, '0739322206', '9780739322208', 'eng', 6, 1266, 253, 'Random House Audio'),
(12, 'The Ultimate Hitchhiker\'s Guide (Hitchhiker\'s Guide to the Galaxy  #1-5)', 'Douglas Adams', 4.38, '0517149257', '9780517149256', 'eng', 815, 2877, 195, 'Wings Books'),
(13, 'A Short History of Nearly Everything', 'Bill Bryson', 4.21, '076790818X', '9780767908184', 'eng', 544, 248558, 9396, 'Broadway Books'),
(14, 'Bill Bryson\'s African Diary', 'Bill Bryson', 3.44, '0767915062', '9780767915069', 'eng', 55, 7270, 499, 'Broadway Books'),
(15, 'Bryson\'s Dictionary of Troublesome Words: A Writer\'s Guide to Getting It Right', 'Bill Bryson', 3.87, '0767910435', '9780767910439', 'eng', 256, 2088, 131, 'Broadway Books'),
(16, 'In a Sunburned Country', 'Bill Bryson', 4.07, '0767903862', '9780767903868', 'eng', 335, 72451, 4245, 'Broadway Books'),
(17, 'I\'m a Stranger Here Myself: Notes on Returning to America After Twenty Years Away', 'Bill Bryson', 3.9, '076790382X', '9780767903820', 'eng', 304, 49240, 2211, 'Broadway Books'),
(18, 'The Lost Continent: Travels in Small Town America', 'Bill Bryson', 3.83, '0060920084', '9780060920081', 'eng', 299, 45712, 2257, 'William Morrow Paperbacks'),
(19, 'Neither Here nor There: Travels in Europe', 'Bill Bryson', 3.86, '0380713802', '9780380713806', 'eng', 254, 48701, 2238, 'William Morrow Paperbacks'),
(20, 'Notes from a Small Island', 'Bill Bryson', 3.91, '0380727501', '9780380727506', 'eng', 324, 80609, 3301, 'William Morrow Paperbacks'),
(21, 'The Mother Tongue: English and How It Got That Way', 'Bill Bryson', 3.93, '0380715430', '9780380715435', 'eng', 270, 28489, 2085, 'William Morrow Paperbacks'),
(22, 'J.R.R. Tolkien 4-Book Boxed Set: The Hobbit and The Lord of the Rings', 'J.R.R. Tolkien', 4.59, '0345538374', '9780345538376', 'eng', 1728, 101233, 1550, 'Ballantine Books'),
(23, 'The Lord of the Rings (The Lord of the Rings  #1-3)', 'J.R.R. Tolkien', 4.5, '0618517650', '9780618517657', 'eng', 1184, 1710, 91, 'Houghton Mifflin Harcourt'),
(24, 'The Fellowship of the Ring (The Lord of the Rings  #1)', 'J.R.R. Tolkien', 4.36, '0618346252', '9780618346257', 'eng', 398, 2128944, 13670, 'Houghton Mifflin Harcourt'),
(25, 'The Lord of the Rings (The Lord of the Rings  #1-3)', 'J.R.R. Tolkien/Alan  Lee', 4.5, '0618260587', '9780618260584', 'en-US', 1216, 1618, 140, 'Houghton Mifflin Harcourt'),
(26, 'The Lord of the Rings: Weapons and Warfare', 'Chris   Smith/Christopher  Lee/Richard Taylor', 4.53, '0618391002', '9780618391004', 'eng', 218, 19822, 46, 'Houghton Mifflin Harcourt'),
(27, 'The Lord of the Rings: Complete Visual Companion', 'Jude Fisher', 4.5, '0618510826', '9780618510825', 'eng', 224, 359, 6, 'Houghton Mifflin Harcourt'),
(28, 'Agile Web Development with Rails: A Pragmatic Guide', 'Dave Thomas/David Heinemeier Hansson/Leon Breedt/Mike Clark/Thomas  Fuchs/Andreas  Schwarz', 3.84, '097669400X', '9780976694007', 'eng', 558, 1430, 59, 'Pragmatic Bookshelf'),
(29, 'Hatchet (Brian\'s Saga  #1)', 'Gary Paulsen', 3.72, '0689840926', '9780689840920', 'eng', 208, 270244, 12017, 'Atheneum Books for Young Reade'),
(30, 'Hatchet: A Guide for Using Hatchet in the Classroom', 'Donna Ickes/Edward Sciranko/Keith Vasconcelles', 4, '1557344493', '9781557344496', 'eng', 48, 36, 2, 'Teacher Created Resources'),
(31, 'Guts: The True Stories behind Hatchet and the Brian Books', 'Gary Paulsen', 3.88, '0385326505', '9780385326506', 'eng', 144, 2067, 334, 'Delacorte Press'),
(32, 'Molly Hatchet - 5 of the Best', 'Molly Hatchet', 4.33, '1575606240', '9781575606248', 'eng', 56, 6, 0, 'Cherry Lane Music Company'),
(33, 'Hatchet Jobs: Writings on Contemporary Fiction', 'Dale Peck', 3.45, '1595580271', '9781595580276', 'en-US', 228, 99, 16, 'The New Press'),
(34, 'A Changeling for All Seasons (Changeling Seasons #1)', 'Angela Knight/Sahara Kelly/Judy Mays/Marteeka Karland/Kate Douglas/Shelby Morgen/Lacey Savage/Kate Hill/Willa Okati', 3.76, '1595962808', '9781595962805', 'eng', 304, 167, 4, 'Changeling Press'),
(35, 'Changeling (Changeling  #1)', 'Delia Sherman', 3.6, '0670059676', '9780670059676', 'eng', 256, 978, 111, 'Viking Juvenile'),
(36, 'The Changeling Sea', 'Patricia A. McKillip', 4.06, '0141312629', '9780141312620', 'eng', 137, 4454, 302, 'Firebird'),
(37, 'The Changeling', 'Zilpha Keatley Snyder', 4.17, '0595321801', '9780595321803', 'eng', 228, 1176, 96, 'iUniverse'),
(38, 'The Changeling', 'Kate Horsley', 3.55, '1590301943', '9781590301944', 'eng', 339, 301, 43, 'Shambhala'),
(39, 'The Changeling (Daughters of England  #15)', 'Philippa Carr', 3.98, '0449146979', '9780449146972', 'eng', 369, 345, 12, 'Ivy Books'),
(40, 'The Known World', 'Edward P. Jones', 3.83, '0061159174', '9780061159176', 'eng', 388, 29686, 2626, 'Amistad'),
(41, 'The Known World', 'Edward P. Jones/Kevin R. Free', 3.83, '006076273X', '9780060762735', 'en-US', 14, 55, 12, 'HarperAudio'),
(42, 'The Known World', 'Edward P. Jones', 3.83, '0060749911', '9780060749910', 'eng', 576, 22, 3, 'Harper'),
(43, 'Traders  Guns & Money: Knowns and Unknowns in the Dazzling World of Derivatives', 'Satyajit Das', 3.83, '0273704745', '9780273704744', 'eng', 334, 1456, 82, 'FT Press'),
(44, 'Artesia: Adventures in the Known World', 'Mark Smylie', 4.13, '1932386106', '9781932386103', 'eng', 352, 52, 4, 'Archaia'),
(45, 'The John McPhee Reader (John McPhee Reader  #1)', 'John McPhee/William Howarth', 4.42, '0374517193', '9780374517199', 'eng', 416, 562, 37, 'Farrar  Straus and Giroux'),
(46, 'Uncommon Carriers', 'John McPhee', 3.95, '0374280398', '9780374280390', 'en-US', 248, 1630, 203, 'Farrar Straus Giroux'),
(47, 'Heirs of General Practice', 'John McPhee', 4.17, '0374519749', '9780374519742', 'eng', 128, 268, 22, 'Farrar  Straus and Giroux'),
(48, 'The Control of Nature', 'John McPhee', 4.24, '0374522596', '9780374522599', 'en-US', 288, 3498, 305, 'Farrar Straus and Giroux'),
(49, 'Annals of the Former World', 'John McPhee', 4.34, '0374518734', '9780374518738', 'eng', 720, 3115, 228, 'Farrar Straus and Giroux'),
(50, 'Coming Into the Country', 'John McPhee', 4.22, '0374522871', '9780374522872', 'eng', 448, 5704, 261, 'Farrar Straus and Giroux');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `bookID` bigint(20) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `rentDate` date NOT NULL,
  `returnDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`bookID`, `userID`, `rentDate`, `returnDate`) VALUES
(2, 11, '2022-02-26', '2022-04-26'),
(3, 11, '2022-01-29', NULL),
(4, 11, '2021-03-26', NULL),
(5, 11, '2021-03-23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usernames`
--

CREATE TABLE `usernames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `uName` tinytext NOT NULL,
  `pWord` varchar(300) NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usernames`
--

INSERT INTO `usernames` (`id`, `fName`, `lName`, `uName`, `pWord`, `email`) VALUES
(11, 'Sandesh', 'Sharma', 'uncleiroh007', '4de84304563c707c2d8c4b02565d5ad4596955cc', 'sandeshs.sharma2000@gmail.com'),
(12, 'Travis', 'Dangel', 'tDangel', 'd48419edc783d952b6abcadddf0221e01588e471', 'travis@lmsproject.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `usernames`
--
ALTER TABLE `usernames`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unm` (`uName`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `usernames`
--
ALTER TABLE `usernames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
