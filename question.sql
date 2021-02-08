-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 12:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL,
  `language` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `language`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'php', 'In php string data are ?', 'delimited by single quote', 'delimited by double quote', 'delimited by  identifier', 'All of above', 'All of above'),
(2, 'php', ' Which of the following functions can be used to determine the integrity of a string?', 'md5()', 'sha1()', 'crc32()', 'all of the above', 'all of the above'),
(3, 'php', 'Which of the following magic constant of PHP returns class name?', '__LINE__', '__FUNCTION__', '__CLASS__', '__FILE__', '__CLASS__'),
(4, 'php', 'Which of the following function is used to redirect a page?', 'redirect()', 'header()', 'reflect()', 'None of the above', 'header()'),
(5, 'php', 'Which of the following is used to access session variables in PHP?', '$_SESSION[]', 'session_start() function', 'session_destroy() function', 'isset() function', '$_SESSION[]'),
(6, 'php', 'The term PHP is an acronym for PHP:_______________.', 'Hypertext Preprocessor', 'Hypertext multiprocessor', ' Hypertext markup Preprocessor', 'Hypertune Preprocessor', 'Hypertext Preprocessor'),
(7, 'php', 'Who among this is the founder of php language?', 'Tim Berners-Lee', 'Brendan Eich', 'Guido van Rossum', 'Rasmus Lerdorf', 'Rasmus Lerdorf'),
(10, 'python', 'What is the maximum possible length of an identifier?', '16', '32', '62', 'None of the above', 'None of the above'),
(11, 'python', ' Who developed the Python language?', 'Zim Den', 'Guido van Rossum', 'Niene Stom', 'Wick van Rossum', 'Guido van Rossum'),
(12, 'python', 'In which year was the Python language developed?', '1989', '1988', '1987', '1985', ' 1989'),
(13, 'python', 'In which language is Python written?', 'English', 'PHP', 'C', 'All of the above', 'C'),
(14, 'python', 'What do we use to define a block of code in Python language?', 'Indentation', 'Brackets', 'None of these', 'Key', 'Indentation'),
(15, 'python', 'Which character is used in Python to make a single line comment?', '#', '//', '/', '/*   */', '#'),
(16, 'python', 'What is the method inside the class in python language?', 'Object', 'Function', 'Attribute', 'Argument', 'Function'),
(17, 'python', 'Which of the following declarations is incorrect?', '_x = 2', '__x = 3', '__xyz__ = 5', 'None of these', 'None of these'),
(18, 'python', 'Which of the following is not a keyword in Python language?', 'val', 'raise', 'try', 'with', 'val'),
(19, 'python', 'Which of the following precedence order is correct in Python?', 'Parentheses, Exponential, Multiplication, Division, Addition, Subtraction', 'Multiplication, Division, Addition, Subtraction, Parentheses, Exponential', 'Division, Multiplication, Addition, Subtraction, Parentheses, Exponential', 'Exponential, Parentheses, Multiplication, Division, Addition, Subtraction', 'Parentheses, Exponential, Multiplication, Division, Addition, Subtraction'),
(20, 'php', 'In which year php was created?', '1994', '1992', '1991', '1995', '1994'),
(21, 'php', 'Which of the following is the latest version of php?', '7.1', '7.2', '7.3', '7.4', '7.2'),
(22, 'php', 'Which of the following is the Release date of latest version (7.2) of php?', '28 November 2017.', '30 November 2017.', '29 November 2017.', '27 November 2017.', '30 November 2017.'),
(23, 'python', 'What is Py', 'O', 'p', 'q', 'w', 'w'),
(24, 'html', 'gdx', 'gf', 'gtf', 'hjkkpk', 'iuyty', 'iuyty'),
(25, 'php', 'PHP files have a default file extension of_______.', '.html', '.xml', '.php', '.hphp', '.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
