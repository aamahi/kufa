-- phpMyAdmin SQL Dump
-- version 4.9.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2020 at 06:23 PM
-- Server version: 8.0.19-0ubuntu0.19.10.3
-- PHP Version: 7.3.11-0ubuntu0.19.10.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kufa`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `about_details` text NOT NULL,
  `photo` varchar(55) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `about_details`, `photo`, `status`) VALUES
(2, 'Abdullah Al Mahi', 'This is Mahi, currently studying computer science and engineering at Habigonj Polytechnic Institute.\r\nI am passionate develoaper interest in Web application Develoapment. ', 'mahi.jpg', 1),
(3, 'Asif Nawaz', 'Asif Nazaw is a passoate Softwear engineer, he live at berlin,germany.', 'nawaz.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clint`
--

CREATE TABLE `clint` (
  `id` int NOT NULL,
  `company_name` varchar(125) NOT NULL,
  `company_logo` varchar(125) NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clint`
--

INSERT INTO `clint` (`id`, `company_name`, `company_logo`, `status`) VALUES
(12, 'Dev skill', 'devskill.png', 1),
(14, 'Islami Bank Bangladesh', 'islamibankbangladesh.png', 1),
(15, 'Linkdin', 'linkdin.png', 1),
(16, 'PHP Strom', 'phpstrom.png', 1),
(18, 'Wordpress', 'wordpress.png', 1),
(19, 'WpDeveloaper', 'wpdeveloaper.jpg', 1),
(26, 'Creative it institute', 'creativeitinstitute.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(125) NOT NULL,
  `message` text NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `message`, `status`, `created`) VALUES
(2, 'Hasin Hayder', 'amahi.wp@gmail.com', 'HI', 1, '2020-03-17 22:22:42'),
(3, 'Hasin Hayder', 'amahi.wp@gmail.com', 'HI', 1, '2020-03-17 22:23:55'),
(4, 'Hasin Hayder', 'amahi.wp@gmail.com', 'HI', 1, '2020-03-17 22:23:59'),
(7, 'Sadia Akter Rupa', 'root@hasin.com', 'HI , How are kmon asen ?? Ki koren ?? dinner korse', 0, '2020-03-17 22:30:02'),
(10, 'Kamal Hossin', 'kamal@kk.com', 'Hi, how are you ?', 1, '2020-03-19 00:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `degree_name` varchar(125) NOT NULL,
  `year` int NOT NULL,
  `persentage` int NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree_name`, `year`, `persentage`, `status`) VALUES
(1, 'Becholor of Science', 2020, 89, 0),
(3, 'Diploma in Engineering', 2020, 86, 1),
(4, 'Secondary School Certificate', 2016, 94, 1),
(5, 'Juniour School Certificate', 2013, 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `name` varchar(125) NOT NULL,
  `category` varchar(125) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `photo` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `category`, `status`, `photo`) VALUES
(4, 'Ecommer Project', 'Web Desing', 0, 'project.jpg'),
(5, 'Invertory System', 'Management Softwear', 1, 'system.png'),
(6, 'Open Project card', 'Wordpress Theme develoapment', 0, 'card.png'),
(7, 'Divi Theme', 'Wordpress', 1, 'theme.jpg'),
(8, 'Stracture', 'Web Desing', 0, 'stracture.jpg'),
(9, 'Hasin Hayder', 'Web Application Develoapment', 1, 'hayder.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `name` varchar(125) NOT NULL,
  `icon` varchar(55) NOT NULL,
  `details` text NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `icon`, `details`, `status`) VALUES
(1, 'Web Desing', 'fa-laptop', 'Service Details Service Details Service DetailsService Details', 0),
(2, 'Wordpress ', 'fa-wordpress', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(6, 'Html', 'fa-html5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.\r\n', 0),
(8, 'Photographe', 'fa-camera', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 0),
(10, 'Laravel', 'fa-laravel', 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web.', 1),
(11, 'PHP', 'fa-php', 'PHP is a popular general-purpose scripting language that is especially suited to web development. It was originally created by Rasmus Lerdorf in 1994;', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int NOT NULL,
  `name` varchar(125) NOT NULL,
  `icon` varchar(55) NOT NULL,
  `link` varchar(111) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `name`, `icon`, `link`, `status`) VALUES
(4, 'Facebook', 'fa-facebook-f', 'https://www.facebook.com/aamahi', 1),
(5, 'LinkedIn', 'fa-linkedin-in', 'https://www.linkedin.com/in/abdullahalmahi/', 1),
(6, 'Stack overflow', 'fa-stack-overflow', 'https://stackoverflow.com/users/11554445/abdullah-mahi', 1),
(7, 'Github', 'fa-github', 'https://github.com/aamahi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int NOT NULL,
  `name` varchar(125) NOT NULL,
  `position` varchar(125) NOT NULL,
  `review_message` text NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `photo` varchar(55) NOT NULL DEFAULT 'defult.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `position`, `review_message`, `status`, `photo`) VALUES
(5, 'Abdullah Al Mahi', 'Softwear Engineer', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content', 1, 'mahi.jpg'),
(6, 'Tareq Hasan', 'Chife Technology Officer', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content', 0, 'hasan.jpg'),
(7, 'Obaidul islam', 'Seniour Wordpress Develoaper', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content', 1, 'islam.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `password` varchar(155) NOT NULL,
  `image` varchar(255) DEFAULT 'defult_user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `status`, `password`, `image`) VALUES
(4, 'Asif Nawaz', 'asif', 'asif@nz.com', 1, 'b7f58928ee29f2d2494213527fb504fc', 'asif.jpg'),
(6, 'Obaidul islam', 'obaidul', 'obaidul@obi.com', 1, '6e4c9bf557ffeadaaf46ebe035914fd4', 'obaidul.png'),
(7, 'Fathema Jannat Nishpa', 'nishap', 'nishpa@fatema.com', 0, '7596deadbbba41d9363643f058803a1c', 'nishap.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clint`
--
ALTER TABLE `clint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clint`
--
ALTER TABLE `clint`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
