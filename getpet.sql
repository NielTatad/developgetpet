-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 10:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `animalwelfareorganization`
--

CREATE TABLE `animalwelfareorganization` (
  `orgID` int(11) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `orgManager` varchar(50) NOT NULL,
  `orgContactNo` int(11) NOT NULL,
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

INSERT INTO `animalwelfareorganization` (`orgID`, `orgName`, `orgManager`, `orgContactNo`, `orgAddress`, `orgLogo`, `orgEmail`, `orgUsername`, `orgPassword`, `Role`) VALUES
(11, 'Gepet', 'Jen Baring', 2147483647, 'Consolacions', 'default_logo.png', 'getpet@gmail.coms', 'getpet2022', 'getpet123', 'Animal Welfare Organization'),
(16, 'PAWS', 'Niels', 2147483647, 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization'),
(17, 'Sagop', 'Juan Tamad', 2147483647, 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization'),
(55, 'W', 'W', 2147483647, 'W', 'logo.png', 'W', 'W', 'W', 'Animal Welfare Organization'),
(56, 'D', 'D', 2147483647, 'D', 'default_logo.png', 'D', 'D', 'D', 'Animal Welfare Organization'),
(57, 'T', 'T', 2147483647, 'T', 'default_logo.png', 'T', 'T', 'T', 'Animal Welfare Organization');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `userFirstname` varchar(50) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `userLastname` varchar(50) NOT NULL,
  `orgManager` varchar(50) NOT NULL,
  `contactNo` int(11) NOT NULL,
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

INSERT INTO `login` (`userID`, `userFirstname`, `orgName`, `userLastname`, `orgManager`, `contactNo`, `Address`, `Image`, `Email`, `Username`, `Password`, `Role`, `loginDate`) VALUES
(6, 'Genesis', '', 'Navarro', '', 2147483647, 'Cordova, Cebu', 't1.jpg', 'gen@gmail.com', 'gen17', '', 'Pet Owner', '2022-03-05'),
(11, '', 'Gepet', '', 'Jen Baring', 2147483647, 'Consolacions', 'default_logo.png', 'getpet@gmail.coms', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-03-05'),
(14, 'pet', '', 'adopter', '', 2147483647, 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '', 'Pet Adopter', '2022-03-03'),
(15, 'pet', '', 'owner', '', 2147483647, 'petowner', '', 'petowner@gmail.com', 'owner', '123', 'Pet Owner', '2022-02-08'),
(16, '', 'PAWS', '', 'Niels', 2147483647, 'tokyo', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization', '2022-03-01'),
(17, '', 'Sagop', '', 'Juan Tamad', 2147483647, 'Mandaue City', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '', 2147483647, '0', 't3.jpg', '0', 'A', '', 'Pet Adopter', '2022-03-02'),
(53, 'JUAN', '', 'JUAN', '', 2147483647, 'JUAN', 't3.jpg', 'JUAN', 'JUAN', '', 'Pet Adopter', '2022-03-05'),
(54, 'B', '', 'B', '', 2147483647, 'B', 'default_profile.png', 'B', 'B', 'B', 'Pet Owner', '0000-00-00'),
(55, '', 'W', '', 'W', 2147483647, 'W', 'logo.png', 'W', 'W', 'W', 'Animal Welfare Organization', '2022-03-04'),
(56, '', 'D', '', 'D', 2147483647, 'D', 'default_logo.png', 'D', 'D', 'D', 'Animal Welfare Organization', '2022-03-04'),
(57, '', 'T', '', 'T', 2147483647, 'T', 'default_logo.png', 'T', 'T', 'T', 'Animal Welfare Organization', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `petadopter`
--

CREATE TABLE `petadopter` (
  `adopterID` int(11) NOT NULL,
  `adopterFirstname` varchar(50) NOT NULL,
  `adopterLastname` varchar(50) NOT NULL,
  `adopterContactNo` int(11) NOT NULL,
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
(14, 'pet', 'adopter', 2147483647, 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '123', 'Pet Adopter'),
(52, 'bars', 'Tatad', 2147483647, '0', 't3.jpg', '0', 'A', 'A', 'Pet Adopter'),
(53, 'JUAN', 'JUAN', 2147483647, 'JUAN', 't3.jpg', 'JUAN', 'JUAN', 'JUAN', 'Pet Adopter');

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `ownerID` int(11) NOT NULL,
  `ownerFirstname` varchar(50) NOT NULL,
  `ownerLastname` varchar(50) NOT NULL,
  `ownerContactNo` int(11) NOT NULL,
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
(6, 'Genesis', 'Navarro', 2147483647, 'Cordova, Cebu', 't1.jpg', 'gen@gmail.com', 'gen17', 'gen123', 'Pet Owner'),
(15, 'pet', 'owner', 2147483647, 'petowner', '', 'petowner@gmail.com', 'owner', '123', 'Pet Owner'),
(54, 'B', 'B', 2147483647, 'B', 'default_profile.png', 'B', 'B', 'B', 'Pet Owner');

-- --------------------------------------------------------

--
-- Table structure for table `postforadoption`
--

CREATE TABLE `postforadoption` (
  `petID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userContactNo` int(11) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petSex` varchar(50) NOT NULL,
  `petAge` varchar(50) NOT NULL,
  `petColor` varchar(50) NOT NULL,
  `petWeight` varchar(50) NOT NULL,
  `petDescription` varchar(100) NOT NULL,
  `petPicture` varchar(255) NOT NULL,
  `postDate` date NOT NULL,
  `availabilityStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postforadoption`
--

INSERT INTO `postforadoption` (`petID`, `userID`, `Username`, `Name`, `userEmail`, `userContactNo`, `petType`, `petName`, `petBreed`, `petSex`, `petAge`, `petColor`, `petWeight`, `petDescription`, `petPicture`, `postDate`, `availabilityStatus`) VALUES
(1, 52, 'A', 'bars Tatad', '0', 2147483647, 'Cat', 'Koko', 'Domesticated', 'Male', '1 year old', 'White and Orange', '10 pounds', 'Koko was kitten when he was found', 'cat2.png', '2022-03-03', 'Available'),
(2, 14, 'pet', 'pet adopter', 'pet@gmail.com', 2147483647, 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'G', 'cat2.png', '2022-03-03', 'Available'),
(3, 14, 'pet', 'pet adopter', 'pet@gmail.com', 2147483647, 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'S', 'cat2.png', '2022-03-03', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userID` int(11) NOT NULL,
  `userFirstname` varchar(50) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `userLastname` varchar(50) NOT NULL,
  `orgManager` varchar(50) NOT NULL,
  `contactNo` int(11) NOT NULL,
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

INSERT INTO `register` (`userID`, `userFirstname`, `orgName`, `userLastname`, `orgManager`, `contactNo`, `Address`, `Image`, `Email`, `Username`, `Password`, `Role`, `registerDate`) VALUES
(6, 'Genesis', '', 'Navarro', '', 2147483647, 'Cordova, Cebu', 't1.jpg', 'gen@gmail.com', 'gen17', 'gen123', 'Pet Owner', '2022-01-12'),
(11, '', 'Gepet', '', 'Jen Baring', 2147483647, 'Consolacions', 'default_logo.png', 'getpet@gmail.coms', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-01-13'),
(14, 'pet', '', 'adopter', '', 2147483647, 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '123', 'Pet Adopter', '2022-01-20'),
(15, 'pet', '', 'owner', '', 2147483647, 'petowner', '', 'petowner@gmail.com', 'owner', '', 'Pet Owner', '2022-01-20'),
(16, '', 'PAWS', '', 'Niels', 2147483647, 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '', 'Animal Welfare Organization', '2022-01-20'),
(17, '', 'Sagop', '', 'Juan Tamad', 2147483647, 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', 'sagop2018', '', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '', 2147483647, '0', 't3.jpg', '0', 'A', 'A', 'Pet Adopter', '2022-03-02'),
(53, 'JUAN', '', 'JUAN', '', 2147483647, 'JUAN', 't3.jpg', 'JUAN', 'JUAN', 'JUAN', 'Pet Adopter', '2022-03-04'),
(54, 'B', '', 'B', '', 2147483647, 'B', 'default_profile.png', 'B', 'B', 'B', 'Pet Owner', '2022-03-04'),
(55, '', 'W', '', 'W', 2147483647, 'W', 'logo.png', 'W', 'W', 'W', 'Animal Welfare Organization', '2022-03-04'),
(56, '', 'D', '', 'D', 2147483647, 'D', 'default_logo.png', 'D', 'D', 'D', 'Animal Welfare Organization', '2022-03-04'),
(57, '', 'T', '', 'T', 2147483647, 'T', 'default_logo.png', 'T', 'T', 'T', 'Animal Welfare Organization', '2022-03-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `animalwelfareorganization`
--
ALTER TABLE `animalwelfareorganization`
  ADD PRIMARY KEY (`orgID`);

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
-- AUTO_INCREMENT for table `postforadoption`
--
ALTER TABLE `postforadoption`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
