-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 05:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Admin_Email` varchar(255) NOT NULL,
  `Admin_Pass` varchar(255) NOT NULL,
  `Admin_Username` varchar(255) NOT NULL,
  `Admin_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `Firstname`, `Lastname`, `Admin_Email`, `Admin_Pass`, `Admin_Username`, `Admin_type_id`) VALUES
(1, 'John', 'Admin', 'john_admin@example.com', 'adminpass123', 'john_admin', 1),
(2, 'Jane', 'Moderator', 'jane_moderator@example.com', 'modpass456', 'jane_mod', 2),
(16, 'raj', 'kumar', 'raj_kumar@example.com', 'adminpass123', 'raj1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(11) NOT NULL,
  `Admin_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `Admin_type`) VALUES
(1, 'Admin'),
(2, 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `Ap_job_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `ResumeFile` varchar(255) DEFAULT NULL,
  `JobSeeker_Email` varchar(255) DEFAULT NULL,
  `Job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`Ap_job_id`, `FirstName`, `Lastname`, `DOB`, `Mobile`, `ResumeFile`, `JobSeeker_Email`, `Job_id`) VALUES
(4, 'john', 'doe', '1990-04-18', '9664267656', 'Progress.docx', 'john_doe@example.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Comp_id` int(11) NOT NULL,
  `Company_Name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Comp_id`, `Company_Name`, `Description`, `admin`) VALUES
(2, 'tata', 'scsdgkhbvhsdb', 'jane_moderator@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Cont_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Cont_id`, `name`, `Email`, `Subject`, `Message`) VALUES
(1, 'John Doe', 'john@example.com', 'Job Inquiry', 'I would like to inquire about job openings.'),
(2, 'Jane Smith', 'jane@example.com', 'Career Opportunities', 'Are there any positions for freshers?');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Job_id` int(11) NOT NULL,
  `Emp_Email` varchar(255) NOT NULL,
  `Job_Title` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `Category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Job_id`, `Emp_Email`, `Job_Title`, `Description`, `Country`, `State`, `City`, `keyword`, `Category`) VALUES
(1, 'employer@example.com', 'Software Engineer', 'Looking for experienced software engineers.', 'USA', 'California', 'San Francisco', 'software, engineer, development', 1),
(2, 'hr@example.com', 'Marketing Manager', 'Looking for a dynamic marketing manager.', 'USA', 'New York', 'New York City', 'marketing, sales, manager', 2),
(4, 'aarti_sharma@example.com', 'Digital Marketing Specialist', 'eeking a digital marketing specialist to manage online campaigns and increase brand awareness. Key responsibilities include SEO, SEM, and social media marketing.', 'India', 'Gujarat', 'surat', 'SEO, SEM, Social Media, Digital Marketing', 2),
(5, 'jane_moderator@example.com', 'Digital Marketing Specialist', 'Seeking a digital marketing specialist to manage online campaigns and increase brand awareness. Key responsibilities include SEO, SEM, and social media marketing.', 'India', 'Gujarat', 'surat', 'SEO, SEM, Social Media, Digital Marketing', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `Username`, `Email`, `pass`, `Mobile`, `DOB`) VALUES
(1, 'john_doe', 'john_doe@example.com', 'password123', '9876543210', '1985-10-20'),
(2, 'jane_smith', 'jane_smith@example.com', 'password456', '1234567890', '1990-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `title`, `Description`) VALUES
(1, 'Software Development', 'All jobs related to software development.'),
(2, 'Marketing', 'aaaaa'),
(3, 'Finance', 'Jobs in the finance sector, including accounting, financial analysis, and investment banking.'),
(4, 'Human Resources', 'Positions in human resources, including recruitment, employee relations, and HR management.'),
(5, 'Customer Service', 'Roles related to customer support and service, including call center operations, customer care, and support management.'),
(11, 'account', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Pro_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `User_Email` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Pro_id`, `Name`, `DOB`, `Mobile`, `Email`, `User_Email`, `Image`) VALUES
(1, 'Jane Smith', '1990-05-10', '1234567890', 'jane@example.com', 'user123@example.com', 'profile_image.jpg'),
(2, 'John Doe', '1985-10-20', '9876543210', 'john_doe@example.com', 'user456@example.com', 'profile_image_john.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Admin_type_id` (`Admin_type_id`);

--
-- Indexes for table `admin_type`
--
ALTER TABLE `admin_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`Ap_job_id`),
  ADD KEY `JobSeeker_Email` (`JobSeeker_Email`),
  ADD KEY `Job_id` (`Job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Comp_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Cont_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Job_id`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_type`
--
ALTER TABLE `admin_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `Ap_job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `Job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD CONSTRAINT `admin_login_ibfk_1` FOREIGN KEY (`Admin_type_id`) REFERENCES `admin_type` (`id`);

--
-- Constraints for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD CONSTRAINT `applyjob_ibfk_1` FOREIGN KEY (`JobSeeker_Email`) REFERENCES `jobseeker` (`Email`),
  ADD CONSTRAINT `applyjob_ibfk_2` FOREIGN KEY (`Job_id`) REFERENCES `jobs` (`Job_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `job_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
