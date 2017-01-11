-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: michaelhutchinson.me.mysql:3306
-- Generation Time: Jan 11, 2017 at 05:09 PM
-- Server version: 5.5.53-MariaDB-1~wheezy
-- PHP Version: 5.4.45-0+deb7u6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `michaelhutchinson_me_db_leeds`
--
CREATE DATABASE `michaelhutchinson_me_db_leeds` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `michaelhutchinson_me_db_leeds`;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `body` varchar(4000) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `image`, `body`, `post_category_id`, `date`) VALUES
(1, 'BLOG POST ONE', 'iTsHutchy', 'http://leeds.michaelhutchinson.me/assets/images/blog_default.png', '<p>Hello it has been just over a year since I became the Independent Chair of the HSCB.  I felt it was important to bring you up to date with how the Board is progressing and where we want to make even more of an impact.  I have thoroughly enjoyed the last year and have met and worked with some highly motivated and professional people.  The most re-assuring thing is, despite all the challenges we face no matter who we work for or represent, the desire to do the best for the children and young people of Hartlepool shines through.</p>  <p>I have been pleased with how the Board has developed over the last year.  At a recent development day we identified a number of strengths:</p>  <ul> 	<li>Clear vision and a strong commitment from Board members to deliver it</li> 	<li>Honest and appropriate challenge</li> 	<li>Dynamic partnerships</li> 	<li>Shared ownership and priorities</li> 	<li>Strong and safe operational child protection</li> 	<li>Comprehensive training</li> </ul>  <p>Where we want to get even better include:</p>  <ul> 	<li>More involvement from children and young people, families, carers and front line practitioners</li> 	<li>Improving the effectiveness of early help and reducing incidents of neglect</li> 	<li>A strategic plan to achieve our vision by effective co-ordination of work against our priorities</li> 	<li>Develop enhanced performance management and scrutiny across all partners</li> </ul>  <p>We have agreed that our priorities for 2015-16 will remain the need to effectively address the issues of:</p>  <ul> 	<li>Neglect led on behalf of the Board by Lindsey Robertson of NTHFT</li> 	<li>Domestic Abuse led of behalf of the Board by Claire Clark of HBC</li> 	<li>VEMT (vulnerable, exploited, missing, trafficked children and young people) led on behalf of the Board by Danielle Swainston of HBC and across the Tees Valley by Alastair Simpson of Cleveland Police</li> </ul>  <p>I am delighted to welcome Paige Thomason to the team as the new HSCB Business Manager. Paige will be co-ordinating the new strategic plan to deliver the required improvements.  Work on going for the Board includes leading on a new Performance Management Framework across all four LSCB’s of the Tees Valley, developing a new website and communications/involvement strategy, monitoring the effectiveness of Operation Encompass and the plans for the new MACH shared with Stockton.</p>  <p>The Board meetings are now six weekly and every other Board meeting is set aside for a thematic review of delivery against our priorities.  In November this will be Early Help and Neglect where I hope to explore what we are doing well and where we can do better.  If you have any views on this or any other matter please let me know via <a href="mailto:HSCBChair@hartlepool.gov.uk">HSCBChair@hartlepool.gov.uk</a></p>', 1, '2017-01-10 23:51:36'),
(2, 'BLOG POST TWO', 'iTsHutchy', 'http://leeds.michaelhutchinson.me/assets/images/blog_default.png', '<p>Hello it has been just over a year since I became the Independent Chair of the HSCB.&nbsp; I felt it was important to bring you up to date with how the Board is progressing and where we want to make even more of an impact.&nbsp; I have thoroughly enjoyed the last year and have met and worked with some highly motivated and professional people.&nbsp; The most re-assuring thing is, despite all the challenges we face no matter who we work for or represent, the desire to do the best for the children and young people of Hartlepool shines through.</p>  <p>I have been pleased with how the Board has developed over the last year. &nbsp;At a recent development day we identified a number of strengths:</p>  <ul> 	<li>Clear vision and a strong commitment from Board members to deliver it</li> 	<li>Honest and appropriate challenge</li> 	<li>Dynamic partnerships</li> 	<li>Shared ownership and priorities</li> 	<li>Strong and safe operational child protection</li> 	<li>Comprehensive training</li> </ul>  <p>Where we want to get even better include:</p>  <ul> 	<li>More involvement from children and young people, families, carers and front line practitioners</li> 	<li>Improving the effectiveness of early help and reducing incidents of neglect</li> 	<li>A strategic plan to achieve our vision by effective co-ordination of work against our priorities</li> 	<li>Develop enhanced performance management and scrutiny across all partners</li> </ul>  <p>We have agreed that our priorities for 2015-16 will remain the need to effectively address the issues of:</p>  <ul> 	<li>Neglect led on behalf of the Board by Lindsey Robertson of NTHFT</li> 	<li>Domestic Abuse led of behalf of the Board by Claire Clark of HBC</li> 	<li>VEMT (vulnerable, exploited, missing, trafficked children and young people) led on behalf of the Board by Danielle Swainston of HBC and across the Tees Valley by Alastair Simpson of Cleveland Police</li> </ul>  <p>I am delighted to welcome Paige Thomason to the team as the new&nbsp;HSCB Business Manager.&nbsp;Paige will be co-ordinating the new strategic plan to deliver the required improvements.&nbsp; Work on going for the Board includes leading on a new Performance Management Framework across all four LSCB&rsquo;s of the Tees Valley, developing a new website and communications/involvement strategy, monitoring the effectiveness of Operation Encompass and the plans for the new MACH shared with Stockton.</p>  <p>The Board meetings are now six weekly and every other Board meeting is set aside for a thematic review of delivery against our priorities.&nbsp; In November this will be Early Help and Neglect where I hope to explore what we are doing well and where we can do better.&nbsp; If you have any views on this or any other matter please let me know via&nbsp;<a href="mailto:HSCBChair@hartlepool.gov.uk">HSCBChair@hartlepool.gov.uk</a></p>', 1, '2017-01-10 23:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE IF NOT EXISTS `post_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(1, 'Stay'),
(2, 'See'),
(3, 'Eat');

-- --------------------------------------------------------

--
-- Table structure for table `section_category`
--

CREATE TABLE IF NOT EXISTS `section_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `section_category`
--

INSERT INTO `section_category` (`id`, `name`, `section_id`) VALUES
(1, 'Hotel', 1),
(2, 'Apartment', 1),
(3, 'Shopping', 2),
(4, 'Sport', 2),
(5, 'Restaurant', 3),
(6, 'Pub', 3);

-- --------------------------------------------------------

--
-- Table structure for table `section_sub_category`
--

CREATE TABLE IF NOT EXISTS `section_sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `section_category_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `section_sub_category`
--

INSERT INTO `section_sub_category` (`id`, `name`, `title`, `body`, `section_category_id`, `section_id`) VALUES
(1, 'fdsf`', 'dfdsf', '<p>dsfds</p>', 1, 1),
(2, 'dfds', 'dsfdsdsd', '<p>dfsdfs</p>', 2, 1),
(3, 'Test', 'Test', '<p>Test</p>', 3, 2),
(4, 'Test', 'Test', '<p>Test</p>', 4, 2),
(5, 'Test', 'Test', '<p>Test</p>', 5, 3),
(6, 'Test', 'Test', '<p>Test</p>', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `surname`, `email`, `username`, `password`, `user_role_id`) VALUES
(1, 'Michael', 'Hutchinson', 'hutchyy@hotmail.com', 'iTsHutchy', '8d8d3a78f660fba130379354e12c2e53', 1),
(2, 'Test', 'User', 'testuser@hotmail.com', 'RegularUser', 'Hartlepool09', 1),
(3, 'Regular', 'User', 'regularuser@hotmail.com', 'RegularUser', 'Hartlepool09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'regular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
