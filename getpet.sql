-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 08:06 AM
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
-- Database: `getpet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adID` int(11) NOT NULL,
  `adUsername` varchar(50) NOT NULL,
  `adPassword` varchar(50) NOT NULL,
  `adEmail` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adID`, `adUsername`, `adPassword`, `adEmail`, `Role`) VALUES
(1, 'admin', 'admin123', 'getpet@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `adoptionrequest`
--

CREATE TABLE `adoptionrequest` (
  `requestID` int(11) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(11) NOT NULL,
  `petID` int(11) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petDescription` varchar(100) NOT NULL,
  `requestMessage` varchar(100) DEFAULT NULL,
  `requestDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoptionrequest`
--

INSERT INTO `adoptionrequest` (`requestID`, `masterID`, `userID`, `Name`, `userEmail`, `userAddress`, `userContactNo`, `petID`, `petType`, `petName`, `petBreed`, `petDescription`, `requestMessage`, `requestDate`) VALUES
(12, 11, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 6, 'Dog', 'Puppy', 'Beagle', 'Say hi to puppy', 'i want this', '03/18/2022 10:33 AM'),
(13, 53, 52, 'bars Tatad', '0', '0', '2147483647', 4, 'Cat', 'Max', 'Bengal', 'Max is a stray cat...', 'hey', '03/18/2022 11:34 AM'),
(14, 6, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 2, 'Dog', 'Cloudy', 'Beagle', 'Cloudy was abandoned by his owner', 'i want this', '03/18/2022 11:35 AM'),
(15, 6, 52, 'bars Tatad', '0', '0', '2147483647', 2, 'Dog', 'Cloudy', 'Beagle', 'Cloudy was abandoned by his owner', 'D', '03/18/2022 11:42 AM'),
(16, 6, 52, 'bars Tatad', '0', '0', '2147483647', 1, 'Cat', 'Koko', 'Bengal', 'Koko was a kitten when he was found', 'S', '03/18/2022 11:42 AM'),
(17, 15, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 11, 'dog', 'sam', 'choose breed...', 'sample', 'sample', '03/21/2022 02:37 PM'),
(18, 14, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 15, 'dog', 'sdyz', 'american eskimo dog', 'samplesasfafewfwf', 'ako ni', '03/21/2022 02:44 PM'),
(19, 15, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 14, 'dog', 'barsszXZ', 'cavalier king charles spaniel', 'wows', 'sd', '03/21/2022 02:48 PM'),
(20, 16, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 16, 'cat', 'cattie', 'bombay cat', 'sfdafewfe', 'asf', '03/21/2022 02:48 PM');

-- --------------------------------------------------------

--
-- Table structure for table `animalwelfareorganization`
--

CREATE TABLE `animalwelfareorganization` (
  `orgID` int(11) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `orgContactNo` varchar(11) NOT NULL,
  `orgAddress` varchar(50) NOT NULL,
  `orgLogo` varchar(255) NOT NULL,
  `orgEmail` varchar(50) NOT NULL,
  `orgUsername` varchar(50) NOT NULL,
  `orgPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalwelfareorganization`
--

INSERT INTO `animalwelfareorganization` (`orgID`, `orgName`, `orgContactNo`, `orgAddress`, `orgLogo`, `orgEmail`, `orgUsername`, `orgPassword`, `Role`) VALUES
(11, 'Getpet', '12423534654', 'Consolacion', 'logo.png', 'getpet@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization'),
(16, 'PAWS', '2147483647', 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization'),
(17, 'Sagop', '2147483647', 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogID` int(50) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `blogTitle` varchar(50) NOT NULL,
  `blogContent` text NOT NULL,
  `blogPicture` varchar(255) NOT NULL,
  `blogStatus` varchar(50) NOT NULL,
  `postDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogID`, `userID`, `Name`, `userEmail`, `blogTitle`, `blogContent`, `blogPicture`, `blogStatus`, `postDate`) VALUES
(18, '16', 'PAWS', 'paws@gmail.com', 'tipspaws', 'tipspaws\r\ntipsdasdasd', '', 'Tips', '03/25/2022 05:55 PM'),
(19, '16', 'PAWS', 'paws@gmail.com', 'advicepaws', 'advicepaseqqwd', '', 'Advice', '03/25/2022 05:55 PM'),
(20, '15', 'pet owner', 'petowner@gmail.com', 'step how to ligo the cat', '1. wash and clean\r\n2. tootbrush', '', 'Tips', '03/25/2022 07:25 PM'),
(21, '15', 'pet owner', 'petowner@gmail.com', 'dapat hingotoan ang iro', 'dili dapat i buwad sa init ', '', 'Tips', '03/25/2022 07:26 PM'),
(22, '16', 'PAWS', 'paws@gmail.com', 'advice sa iro', 'dapat ligoan', '', 'Advice', '03/25/2022 07:26 PM'),
(23, '15', 'pet owner', 'petowner@gmail.com', 'asdas', 'aswed2', '', 'Tips', '03/25/2022 08:10 PM'),
(24, '15', 'pet owner', 'petowner@gmail.com', 'tatad', 'tatadaca', '', 'Advice', '03/25/2022 08:11 PM'),
(25, '15', 'pet owner', 'petowner@gmail.com', 'bulltetin', '• asdasd\r\n• asdasda\r\n• sdasdas\r\n• dasdasdasd\r\n• asdasdas\r\n• asd', '', 'Tips', '03/28/2022 08:34 AM'),
(26, '15', 'pet owner', 'petowner@gmail.com', 'sddfsd', '• asdasdasda\r\n• dasda\r\n• sdasd\r\n• asdas\r\n• das', '', 'Tips', '03/28/2022 08:35 AM'),
(27, '15', 'pet owner', 'petowner@gmail.com', 'wr3234', '• asda\r\n• sda2we\r\n• 1', '', 'Tips', '03/28/2022 08:35 AM'),
(28, '15', 'pet owner', 'petowner@gmail.com', 'how to dog', '• asdasdasd\r\n• asdasdas\r\n• dasdas\r\n• dasdasd\r\n• asdasd\r\n• asdasd\r\n• asd', '', 'Tips', '03/28/2022 11:14 AM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `userFirstname` varchar(50) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `userLastname` varchar(50) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` text NOT NULL,
  `loginDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userID`, `userFirstname`, `orgName`, `userLastname`, `contactNo`, `Address`, `Image`, `Email`, `Username`, `Password`, `Role`, `loginDate`) VALUES
(6, 'Gen', '', 'Navarro', '09060913468', 'Cordova, Cebu', 'Genesis.jpg', 'gen@gmail.com', 'gen17', '', 'Pet Owner', '2022-03-17'),
(11, '', 'Getpet', '', '12423534654', 'Consolacion', 'logo.png', 'getpet@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-03-17'),
(14, 'pet', '', 'adopter', '2147483647', 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '', 'Pet Adopter', '2022-03-28'),
(15, 'pets', '', 'owner', '2147483647', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '', 'Pet Owner', '2022-03-28'),
(16, '', 'PAWS', '', '2147483647', 'tokyo', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization', '2022-03-28'),
(17, '', 'Sagop', '', '2147483647', 'Mandaue City', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '2147483647', '0', 't3.jpg', '0', 'A', '', 'Pet Adopter', '2022-03-18'),
(53, 'JUAN', '', 'TAMAD', '09723124124', 'Mandaue', 't1.jpg', 'juan@gmail.com', 'JUAN', '', 'Pet Adopter', '2022-03-17'),
(67, 'John', '', 'Jalosjos', '09876214354', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner', '2022-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `petadopter`
--

CREATE TABLE `petadopter` (
  `adopterID` int(11) NOT NULL,
  `adopterFirstname` varchar(50) NOT NULL,
  `adopterLastname` varchar(50) NOT NULL,
  `adopterContactNo` varchar(11) NOT NULL,
  `adopterAddress` varchar(50) NOT NULL,
  `adopterPicture` varchar(255) NOT NULL,
  `adopterEmail` varchar(50) NOT NULL,
  `adopterUsername` varchar(50) NOT NULL,
  `adopterPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petadopter`
--

INSERT INTO `petadopter` (`adopterID`, `adopterFirstname`, `adopterLastname`, `adopterContactNo`, `adopterAddress`, `adopterPicture`, `adopterEmail`, `adopterUsername`, `adopterPassword`, `Role`) VALUES
(14, 'pet', 'adopter', '2147483647', 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '123', 'Pet Adopter'),
(52, 'bars', 'Tatad', '2147483647', '0', 't3.jpg', '0', 'A', 'A', 'Pet Adopter'),
(53, 'JUAN', 'TAMAD', '09723124124', 'Mandaue', 't1.jpg', 'juan@gmail.com', 'JUAN', 'JUAN', 'Pet Adopter');

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `ownerID` int(11) NOT NULL,
  `ownerFirstname` varchar(50) NOT NULL,
  `ownerLastname` varchar(50) NOT NULL,
  `ownerContactNo` varchar(11) NOT NULL,
  `ownerAddress` varchar(50) NOT NULL,
  `ownerPicture` varchar(255) NOT NULL,
  `ownerEmail` varchar(50) NOT NULL,
  `ownerUsername` varchar(50) NOT NULL,
  `ownerPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petowner`
--

INSERT INTO `petowner` (`ownerID`, `ownerFirstname`, `ownerLastname`, `ownerContactNo`, `ownerAddress`, `ownerPicture`, `ownerEmail`, `ownerUsername`, `ownerPassword`, `Role`) VALUES
(6, 'Gen', 'Navarro', '09060913468', 'Cordova, Cebu', 'Genesis.jpg', 'gen@gmail.com', 'gen17', 'gen123', 'Pet Owner'),
(15, 'pets', 'owner', '2147483647', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '123', 'Pet Owner'),
(54, 'B', 'B', '2147483647', 'B', 'default_profile.png', 'B', 'B', 'B', 'Pet Owner'),
(67, 'John', 'Jalosjos', '09876214354', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner');

-- --------------------------------------------------------

--
-- Table structure for table `postforadoption`
--

CREATE TABLE `postforadoption` (
  `petID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(11) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petSex` varchar(50) NOT NULL,
  `petAge` varchar(50) NOT NULL,
  `petColor` varchar(50) NOT NULL,
  `petWeight` varchar(50) NOT NULL,
  `vaccinationStatus` varchar(50) NOT NULL,
  `dewormingStatus` varchar(50) NOT NULL,
  `petDescription` varchar(100) NOT NULL,
  `petPicture` varchar(255) NOT NULL,
  `postDate` varchar(50) NOT NULL,
  `availabilityStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postforadoption`
--

INSERT INTO `postforadoption` (`petID`, `userID`, `Name`, `userEmail`, `userAddress`, `userContactNo`, `petType`, `petName`, `petBreed`, `petSex`, `petAge`, `petColor`, `petWeight`, `vaccinationStatus`, `dewormingStatus`, `petDescription`, `petPicture`, `postDate`, `availabilityStatus`) VALUES
(1, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '2147483647', 'Cat', 'Koko', 'Bengal', 'Male', '1 year old', 'White and orange', '12 pounds', 'Vaccinated', 'Deworm', 'Koko was a kitten when he was found', 'm6.jpg', '03/08/2022 04:57 AM', 'Available'),
(2, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '2147483647', 'Dog', 'Cloudy', 'Beagle', 'Male', '1 year old', 'White ', '25 pounds', 'Vaccinated', 'Deworm', 'Cloudy was abandoned by his owner', 'Dog.jpg', '03/08/2022 11:12 AM', 'Available'),
(4, 53, 'JUAN TAMAD', 'JUAN', 'liloan', '2147483647', 'Cat', 'Max', 'Bengal', 'Male', '1 year old', 'Gray ', '8 pounds', 'Not vaccinated', 'Not deworm', 'Max is a stray cat...', 'm2.jpg', '03/14/2022 03:15 AM', 'Available'),
(5, 53, 'JUAN TAMAD', 'JUAN', 'toledo', '2147483647', 'Dog', 'Bossing', 'Beagle', 'Male', '3 years old', 'White spotted black', '20 pounds', 'Not vaccinated', 'Not deworm', 'say hello to Bossing', 'bossing.jpg', '03/14/2022 03:36 PM', 'Available'),
(6, 11, 'Gepet', 'getpet@gmail.coms', 'Consolacions', '2147483647', 'Dog', 'Puppy', 'Beagle', 'Male', '2 years old', 'Brown', '14 pounds', 'Not vaccinated', 'Not deworm', 'Say hi to puppy', 'images.jpg', '03/14/2022 11:12 PM', 'Available'),
(8, 15, 'pet owner', 'petowner@gmail.com', 'carcar', '2147483647', 'Cat', 'teds', 'German shepherd', 'Female', '4', 'whitish', '34 pounds', 'Vaccinated', 'Deworm', 'nays', '1.jpg', '03/19/2022 12:31 PM', 'Available'),
(10, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 'dog', 'sample', 'bangalore', 'Male', '3 years old', 'White ', '15 pounds', 'Vaccinated', 'Deworm', 'js', '3.jpg', '03/20/2022 12:45 PM', 'Available'),
(11, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 'dog', 'sam', 'choose breed...', 'Male', '35 years old', 'Brown', '11 pounds', 'Vaccinated', 'Deworm', 'sample', '1.jpg', '03/20/2022 12:48 PM', 'Not available'),
(12, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 'dog', 'Tadskie', 'mumbai', 'Male', '3 years old', 'pink', '25 pounds', 'Vaccinated', 'Deworm', 'sd', 'bg.jpg', '03/20/2022 12:54 PM', 'Available'),
(13, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 'dog', 'shiba', 'shiba inu', 'Male', '23', 'Gray ', '23', 'Vaccinated', 'Not deworm', 'samplesss', 'bg3.jpg', '03/21/2022 01:38 PM', 'Available'),
(14, 15, 'pet owner', 'petowner@gmail.com', 'petowner', '2147483647', 'dog', 'barsszXZ', 'cavalier king charles spaniel', 'Male', '2 ', 'White ', '231', 'Vaccinated', 'Not deworm', 'wows', 'd5.jpg', '03/21/2022 02:17 PM', 'Available'),
(15, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 'dog', 'sdyz', 'american eskimo dog', 'Male', '23', 'White ', '2355', 'Vaccinated', 'Not deworm', 'samplesasfafewfwf', 'd3.jpg', '03/21/2022 02:42:39 PM', 'Not available'),
(16, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 'cat', 'cattie', 'bombay cat', 'Female', '235', 'asewe', '2312', 'Vaccinated', 'Not deworm', 'sfdafewfe', '1.jpg', '03/21/2022 02:48 PM', 'Not available');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userID` int(11) NOT NULL,
  `userFirstname` varchar(50) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `userLastname` varchar(50) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` text NOT NULL,
  `registerDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userID`, `userFirstname`, `orgName`, `userLastname`, `contactNo`, `Address`, `Image`, `Email`, `Username`, `Password`, `Role`, `registerDate`) VALUES
(6, 'Gen', '', 'Navarro', '09060913468', 'Cordova, Cebu', 'Genesis.jpg', 'gen@gmail.com', 'gen17', 'gen123', 'Pet Owner', '2022-01-12'),
(11, '', 'Getpet', '', '12423534654', 'Consolacion', 'logo.png', 'getpet@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-01-13'),
(14, 'pet', '', 'adopter', '2147483647', 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '123', 'Pet Adopter', '2022-01-20'),
(15, 'pets', '', 'owner', '2147483647', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '123', 'Pet Owner', '2022-01-20'),
(16, '', 'PAWS', '', '2147483647', 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '', 'Animal Welfare Organization', '2022-01-20'),
(17, '', 'Sagop', '', '2147483647', 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', 'sagop2018', '', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '2147483647', '0', 't3.jpg', '0', 'A', 'A', 'Pet Adopter', '2022-03-02'),
(53, 'JUAN', '', 'TAMAD', '09723124124', 'Mandaue', 't1.jpg', 'juan@gmail.com', 'JUAN', 'JUAN', 'Pet Adopter', '2022-03-04'),
(67, 'John', '', 'Jalosjos', '09876214354', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner', '2022-03-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `animalwelfareorganization`
--
ALTER TABLE `animalwelfareorganization`
  ADD PRIMARY KEY (`orgID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `petadopter`
--
ALTER TABLE `petadopter`
  ADD PRIMARY KEY (`adopterID`);

--
-- Indexes for table `petowner`
--
ALTER TABLE `petowner`
  ADD PRIMARY KEY (`ownerID`);

--
-- Indexes for table `postforadoption`
--
ALTER TABLE `postforadoption`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptionrequest`
--
ALTER TABLE `adoptionrequest`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `postforadoption`
--
ALTER TABLE `postforadoption`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
