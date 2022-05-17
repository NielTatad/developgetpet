-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 09:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
(11, 'Getpet', '12423534654', 'Consolacion', 'logo.png', 'getpet2022.test@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization'),
(16, 'PAWS', '2147483647', 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization'),
(17, 'Sagop', '2147483647', 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization'),
(74, 'Animal Welfare', '09012412412', 'Consolacion, Cebu', 'default_logo.png', 'animalwelfare@gmail.com', 'animalwelfare', '123', 'Animal Welfare Organization');

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `charityID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(50) NOT NULL,
  `charityTitle` varchar(100) NOT NULL,
  `charityDescription` varchar(1000) NOT NULL,
  `charityPicture` varchar(225) NOT NULL,
  `charityAmount` varchar(50) NOT NULL,
  `charityTargetamount` varchar(50) NOT NULL,
  `charityGainamount` varchar(50) NOT NULL,
  `charityWebsite` varchar(50) NOT NULL,
  `charityQRcode` varchar(225) NOT NULL,
  `charityStartdate` varchar(50) NOT NULL,
  `charityEnddate` varchar(50) NOT NULL,
  `charityPostdate` varchar(50) NOT NULL,
  `charityStatus` text NOT NULL,
  `charityPoststatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charityID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `charityTitle`, `charityDescription`, `charityPicture`, `charityAmount`, `charityTargetamount`, `charityGainamount`, `charityWebsite`, `charityQRcode`, `charityStartdate`, `charityEnddate`, `charityPostdate`, `charityStatus`, `charityPoststatus`) VALUES
(16, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 'five peso a day', 'we need 5 peso a day for our pet', '2.jpg', '', '222', '₱00', 'www.petadpt.com', '3.jpg', '', '', '05/13/2022 10:38 PM', 'Accepted', 'Fundraising');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `commentContent` varchar(100) NOT NULL,
  `commentDate` varchar(50) NOT NULL,
  `commentStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `postID`, `masterID`, `userID`, `commentContent`, `commentDate`, `commentStatus`) VALUES
(111, 24, 6, 15, 'asdasdasd', '05/11/2022 08:05 PM', 'Short-term care'),
(112, 85, 6, 15, 'fff', '05/11/2022 08:05 PM', 'Short-term care'),
(113, 85, 6, 15, 'fdf', '05/11/2022 08:07 PM', 'Adoption'),
(116, 56, 16, 14, 'DDD', '05/11/2022 09:52 PM', 'Adoption'),
(117, 84, 6, 14, 'fff', '05/11/2022 09:55 PM', 'Adoption'),
(119, 16, 0, 14, 'donate ko\r\n', '05/13/2022 11:06 PM', 'Fundraising'),
(120, 16, 0, 15, 'pwede ra', '05/13/2022 11:06 PM', 'Fundraising'),
(121, 16, 0, 16, 'dog aw2', '05/17/2022 02:15 PM', 'Fundraising');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(50) NOT NULL,
  `donationMessage` text NOT NULL,
  `donationIdentity` varchar(50) NOT NULL,
  `donationReciept` varchar(225) NOT NULL,
  `donationDate` varchar(50) NOT NULL,
  `donationStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `donationMessage`, `donationIdentity`, `donationReciept`, `donationDate`, `donationStatus`) VALUES
(3, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 'asdasdsfdff', 'showidentity', 'adopter.jpg', '05/12/2022 03:33 PM', 'Recieved'),
(4, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'vvvv', 'anonymous', '3.jpg', '05/12/2022 03:33 PM', 'Recieved'),
(5, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'I hope this would help ', 'showidentity', '4.jpg', '05/13/2022 11:19 PM', 'Not Recieved Yet');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `feedbackContent` text NOT NULL,
  `Ratings` text NOT NULL,
  `feedbackDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `requestID` int(11) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(11) NOT NULL,
  `petID` int(50) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `requestDate` varchar(50) NOT NULL,
  `approvalDate` varchar(50) NOT NULL,
  `returnDate` varchar(50) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyID`, `Title`, `requestID`, `masterID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `petID`, `petType`, `petName`, `petBreed`, `requestDate`, `approvalDate`, `returnDate`, `Status`) VALUES
(65, 'Adoption', 111, 53, 6, 'Gen Navarro', 'genesistagsip777@gmail.com', 'Cordova, Cebu', '09060913468', 49, 'Cat', 'Memeng', 'Domestic shorthair cat', '05/10/2022 03:58 PM', '05/10/2022 04:49 PM', '', 'Approved'),
(66, 'Adoption', 113, 16, 53, 'JUAN TAMAD', 'juan@gmail.com', 'Mandaue', '09723124124', 47, 'Dog', 'Kabang', 'Askal', '05/10/2022 05:16 PM', '05/10/2022 05:17 PM', '', 'Approved'),
(67, 'Adoption', 114, 16, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 56, 'Dog', 'Tzen', 'Askal', '05/11/2022 09:55 PM', '05/11/2022 09:57 PM', '', 'Approved'),
(68, 'Short-Term Care', 116, 6, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 85, 'Cat', 'Jengky', 'Domestic shorthair cat', '05/12/2022 01:20 AM', '05/12/2022 01:20 AM', '05/18/2022', 'Approved');

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
  `birthDate` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` text NOT NULL,
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

INSERT INTO `login` (`userID`, `userFirstname`, `orgName`, `userLastname`, `contactNo`, `birthDate`, `Age`, `Gender`, `Address`, `Image`, `Email`, `Username`, `Password`, `Role`, `loginDate`) VALUES
(6, 'Gen', '', 'Navarro', '09060913468', '05/17/1999', 23, 'Male', 'Cordova, Cebu', 'Genesis.jpg', 'genesistagsip777@gmail.com', 'gen17', 'gen123', 'Pet Owner', '2022-05-12'),
(11, '', 'Getpet', '', '12423534654', '', 0, '', 'Consolacion', 'logo.png', 'getpet2022.test@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-03-17'),
(14, 'pet', '', 'adopter', '2147483647', '', 0, '', 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '', 'Pet Adopter', '2022-05-17'),
(15, 'pets', '', 'owner', '31235423532', '', 0, '', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '', 'Pet Owner', '2022-05-17'),
(16, '', 'PAWS', '', '2147483647', '', 0, '', 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization', '2022-05-17'),
(17, '', 'Sagop', '', '2147483647', '', 0, '', 'Mandaue City', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '2147483647', '', 0, '', '0', 't3.jpg', '0', 'A', '', 'Pet Adopter', '2022-03-18'),
(53, 'JUAN', '', 'TAMAD', '09723124124', '', 0, '', 'Mandaue', 't1.jpg', 'juan@gmail.com', 'JUAN', '', 'Pet Adopter', '2022-05-10'),
(67, 'John', '', 'Jalosjos', '09876214354', '', 0, '', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner', '2022-03-15'),
(68, 'ann', '', 'cagong', '09231231231', '', 0, '', 'lapulapu', 'adopter.jpg', 'ann@gmail.com', 'ann', '123', 'Pet Owner', '2022-04-14'),
(69, 'ann2', '', 'cagong2', '23213123123', '', 0, '', 'Cansaga district 5 Consolacion Cebu', '3.jpg', 'ann2@gmail.com', 'ann2', 'ann', 'Pet Adopter', '2022-04-05'),
(70, 'Niel', '', 'Tatad', '09231212903', '', 0, '', 'Cansaga district 5 Consolacion Cebu', 'default_profile.png', 'asd', 'asdaasd', 'asdas', 'Pet Adopter', '0000-00-00'),
(74, '', 'Animal Welfare', '', '09012412412', '', 0, '', 'Consolacion, Cebu', 'default_logo.png', 'animalwelfare@gmail.com', 'animalwelfare', '123', 'Animal Welfare Organization', '2022-05-02'),
(78, 'Jose', '', 'Harvey', '09124151522', '08/17/1999', 23, 'Select Gender...', 'Mandaue ', 'default_profile.png', 'harvey@gmail.com', 'joseharvey11', 'jeeya123', 'Pet Adopter', '2022-05-02'),
(90, 'Stacy Kate', '', 'Silvano', '09123214324', '02/27/2001', 21, 'Female', 'Balud, Sanfernando, Cebu', 'default_profile.png', 'istisidelacerna@gmail.com', 'stacy21', 'stacy123', 'Pet Owner', '2022-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` int(11) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `roomID` varchar(50) NOT NULL,
  `messageContent` text NOT NULL,
  `messageDate` varchar(50) NOT NULL,
  `messageStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `masterID`, `userID`, `roomID`, `messageContent`, `messageDate`, `messageStatus`) VALUES
(12, 15, 6, '15-6', 'miss ipa deliver ra nimo ang pet?', '05/17/2022 02:22 AM', 'Read'),
(29, 6, 15, '15-6', 'yes sir', '05/17/2022 03:14 AM', 'Read'),
(43, 15, 6, '15-6', 'miss wala pa lage?', '05/17/2022 01:41 PM', 'Read'),
(44, 6, 15, '15-6', 'paabot lang sa sir', '05/17/2022 01:41 PM', 'Read'),
(45, 15, 6, '15-6', 'miss kanang ipa deliver ra nimo?', '05/17/2022 01:48 PM', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `newsfeedID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(50) NOT NULL,
  `newsfeedDonatorsname` varchar(50) NOT NULL,
  `newsfeedMessage` text NOT NULL,
  `newsfeedDate` varchar(50) NOT NULL,
  `newsfeedStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `notificationTitle` varchar(50) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `notificationDescription` varchar(100) NOT NULL,
  `notificationDate` varchar(50) NOT NULL,
  `notificationStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationID`, `activityID`, `postID`, `notificationTitle`, `masterID`, `userID`, `notificationDescription`, `notificationDate`, `notificationStatus`) VALUES
(308, 111, 49, 'Adoption Request', 53, 6, 'I want to adopt this cat', '05/10/2022 03:58 PM', 'Read'),
(309, 112, 46, 'Short-Term Care Request', 53, 6, 'I can take care your cat sir ', '05/10/2022 04:06 PM', 'Unread'),
(310, 111, 49, 'Approved Adoption Request', 6, 53, 'Approved your adoption request', '05/10/2022 04:49 PM', 'Unread'),
(311, 113, 47, 'Adoption Request', 16, 53, 'bet', '05/10/2022 05:16 PM', 'Read'),
(312, 113, 47, 'Approved Adoption Request', 53, 16, 'Approved your adoption request', '05/10/2022 05:17 PM', 'Unread'),
(314, 111, 24, 'Comment on Your Post', 6, 15, 'asdasdasd', '05/11/2022 08:05 PM', 'Unread'),
(315, 112, 85, 'Comment on Your Post', 6, 15, 'fff', '05/11/2022 08:05 PM', 'Unread'),
(316, 113, 85, 'Comment on Your Post', 6, 15, 'fdf', '05/11/2022 08:07 PM', 'Unread'),
(319, 116, 56, 'Comment on Your Post', 16, 14, 'DDD', '05/11/2022 09:52 PM', 'Read'),
(320, 117, 84, 'Comment on Your Post', 6, 14, 'fff', '05/11/2022 09:55 PM', 'Unread'),
(321, 114, 56, 'Adoption Request', 16, 14, 'i want', '05/11/2022 09:55 PM', 'Read'),
(322, 114, 56, 'Approved Adoption Request', 14, 16, 'Approved your adoption request', '05/11/2022 09:57 PM', 'Unread'),
(323, 115, 85, 'Short-Term Care Request', 6, 15, 'ill take care', '05/12/2022 01:18 AM', 'Unread'),
(324, 116, 85, 'Short-Term Care Request', 6, 15, 'v', '05/12/2022 01:20 AM', 'Read'),
(325, 116, 85, 'Approved Short-Term Care Request', 15, 6, 'Approved your short-term care request', '05/12/2022 01:20 AM', 'Unread'),
(327, 119, 0, 'Comment on Your Post', 0, 14, 'donate ko\r\n', '05/13/2022 11:06 PM', 'Unread'),
(328, 120, 0, 'Comment on Your Post', 0, 15, 'pwede ra', '05/13/2022 11:06 PM', 'Unread'),
(329, 121, 0, 'Comment on Your Post', 0, 16, 'dog aw2', '05/17/2022 02:15 PM', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `petadopter`
--

CREATE TABLE `petadopter` (
  `adopterID` int(11) NOT NULL,
  `adopterFirstname` varchar(50) NOT NULL,
  `adopterLastname` varchar(50) NOT NULL,
  `adopterContactNo` varchar(11) NOT NULL,
  `ownerBirthdate` varchar(50) NOT NULL,
  `ownerAge` int(11) NOT NULL,
  `ownerGender` text NOT NULL,
  `adopterAddress` varchar(50) NOT NULL,
  `adopterPicture` varchar(255) NOT NULL,
  `adopterEmail` varchar(50) NOT NULL,
  `adopterBirthdate` varchar(50) NOT NULL,
  `adopterAge` int(11) NOT NULL,
  `adopterGender` text NOT NULL,
  `adopterUsername` varchar(50) NOT NULL,
  `adopterPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petadopter`
--

INSERT INTO `petadopter` (`adopterID`, `adopterFirstname`, `adopterLastname`, `adopterContactNo`, `ownerBirthdate`, `ownerAge`, `ownerGender`, `adopterAddress`, `adopterPicture`, `adopterEmail`, `adopterBirthdate`, `adopterAge`, `adopterGender`, `adopterUsername`, `adopterPassword`, `Role`) VALUES
(14, 'pet', 'adopter', '2147483647', '', 0, '', 'petadopters', 't3.jpg', 'pet@gmail.com', '0000-00-00', 0, '', 'pet', '123', 'Pet Adopter'),
(52, 'bars', 'Tatad', '2147483647', '', 0, '', '0', 't3.jpg', '0', '0000-00-00', 0, '', 'A', 'A', 'Pet Adopter'),
(53, 'JUAN', 'TAMAD', '09723124124', '', 0, '', 'Mandaue', 't1.jpg', 'juan@gmail.com', '0000-00-00', 0, '', 'JUAN', 'JUAN', 'Pet Adopter'),
(69, 'ann2', 'cagong2', '23213123123', '', 0, '', 'Cansaga district 5 Consolacion Cebu', '3.jpg', 'ann2@gmail.com', '0000-00-00', 0, '', 'ann2', 'ann', 'Pet Adopter'),
(78, 'Jose', 'Harvey', '09124151522', '', 0, '', 'Mandaue ', 'default_profile.png', 'harvey@gmail.com', '08/17/1999', 23, 'Select Gender...', 'joseharvey11', 'jeeya123', 'Pet Adopter');

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `ownerID` int(11) NOT NULL,
  `ownerFirstname` varchar(50) NOT NULL,
  `ownerLastname` varchar(50) NOT NULL,
  `ownerContactNo` varchar(11) NOT NULL,
  `ownerBirthdate` varchar(50) NOT NULL,
  `ownerAge` int(11) NOT NULL,
  `ownerGender` text NOT NULL,
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

INSERT INTO `petowner` (`ownerID`, `ownerFirstname`, `ownerLastname`, `ownerContactNo`, `ownerBirthdate`, `ownerAge`, `ownerGender`, `ownerAddress`, `ownerPicture`, `ownerEmail`, `ownerUsername`, `ownerPassword`, `Role`) VALUES
(6, 'Gen', 'Navarro', '09060913468', '05/17/1999', 23, 'Male', 'Cordova, Cebu', 'Genesis.jpg', 'genesistagsip777@gmail.com', 'gen17', 'gen123', 'Pet Owner'),
(15, 'pets', 'owner', '31235423532', '', 0, '', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '123', 'Pet Owner'),
(54, 'B', 'B', '2147483647', '', 0, '', 'B', 'default_profile.png', 'B', 'B', 'B', 'Pet Owner'),
(67, 'John', 'Jalosjos', '09876214354', '', 0, '', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner'),
(68, 'ann', 'cagong', '09231231231', '', 0, '', 'lapulapu', 'adopter.jpg', 'ann@gmail.com', 'ann', '123', 'Pet Owner'),
(90, 'Stacy Kate', 'Silvano', '09123214324', '02/27/2001', 21, 'Female', 'Balud, Sanfernando, Cebu', 'default_profile.png', 'istisidelacerna@gmail.com', 'stacy21', 'stacy123', 'Pet Owner');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userContactNo` varchar(50) NOT NULL,
  `postTitle` varchar(50) NOT NULL,
  `postContent` text NOT NULL,
  `postLocation` varchar(100) NOT NULL,
  `postTime` varchar(50) NOT NULL,
  `postEventdate` varchar(50) NOT NULL,
  `postPicture` varchar(255) NOT NULL,
  `postStatus` varchar(50) NOT NULL,
  `postDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `userID`, `userName`, `userEmail`, `userContactNo`, `postTitle`, `postContent`, `postLocation`, `postTime`, `postEventdate`, `postPicture`, `postStatus`, `postDate`) VALUES
(19, 16, 'PAWS', 'paws@gmail.com', '', 'advicepaws', 'advicepaseqqwd', '', '00:00:00.000000', '', '', 'Advice', '03/25/2022 05:55 PM'),
(22, 16, 'PAWS', 'paws@gmail.com', '', 'advice sa iro', 'dapat ligoan', '', '00:00:00.000000', '', '', 'Advice', '03/25/2022 07:26 PM'),
(24, 15, 'pet owner', 'petowner@gmail.com', '', 'tatad', 'tatadaca', '', '00:00:00.000000', '', '', 'Advice', '03/25/2022 08:11 PM'),
(25, 15, 'pet owner', 'petowner@gmail.com', '', 'bulltetin', '• asdasd\r\n• asdasda\r\n• sdasdas\r\n• dasdasdasd\r\n• asdasdas\r\n• asd', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 08:34 AM'),
(26, 15, 'pet owner', 'petowner@gmail.com', '', 'sddfsd', '• asdasdasda\r\n• dasda\r\n• sdasd\r\n• asdas\r\n• das', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 08:35 AM'),
(27, 15, 'pet owner', 'petowner@gmail.com', '', 'wr3234', '• asda\r\n• sda2we\r\n• 1', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 08:35 AM'),
(28, 15, 'pet owner', 'petowner@gmail.com', '', 'how to dog', '• asdasdasd\r\n• asdasdas\r\n• dasdas\r\n• dasdasd\r\n• asdasd\r\n• asdasd\r\n• asd', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 11:14 AM'),
(29, 16, 'PAWS', 'paws@gmail.com', '', 'new', '• asdasdasd\r\n• asdasd\r\n• asda\r\n• sdasd', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 08:30 PM'),
(30, 16, 'PAWS', 'paws@gmail.com', '', 'PET OWNER SIDE', '• ASDASD\r\n• ASDA\r\n• SDAS\r\n• DAS\r\n• DASDWE32123\r\n• ASD', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 08:38 PM'),
(31, 15, 'pets owner', 'petowner@gmail.com', '', 'PO', '• ASDA\r\n• SDAS\r\n• DAS\r\n• DA\r\n• SDA\r\n• E 213E', '', '00:00:00.000000', '', '', 'Tips', '03/28/2022 08:39 PM'),
(42, 16, 'PAWS', 'paws@gmail.com', '2147483647', 'Free deworm', 'Free deworming for all pets', 'Cansaga Consolacion', '07:36 PM', '2022-04-25', 'dogcat.jpg', 'Event', '04/14/2022 07:36 PM'),
(43, 16, 'PAWS', 'paws@gmail.com', '2147483647', 'test', 'test run', 'Cansaga Consolacion', '10:58 PM', '2022-04-19', '4.jpg', 'Event', '04/14/2022 10:58 PM'),
(44, 16, 'PAWS', 'paws@gmail.com', '2147483647', 'Cat Lovers Live Longer', 'We are often urged to do various tasks for the sake of our health, some more complicated and expensive than others. However, one of the healthiest things we can do is simple, traditional and pleasant - we can care for a pet.\r\n\r\nPeople have enjoyed the companionship of animals for thousands of years, and it\'s common knowledge that having a dog encourages you to go for healthy walks. Recently, though, research scientists have been trying to discover if there are actual, measurable health benefits associated with pet ownership, and how these benefits come about.\r\n\r\nThese researchers have found that pets are not only valuable for maintaining our well-being, but they can alleviate specific health problems.', '', '', '', '4.jpg', 'Articles', '04/25/2022 12:59 AM');

-- --------------------------------------------------------

--
-- Table structure for table `postpet`
--

CREATE TABLE `postpet` (
  `petID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(11) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petSex` varchar(50) NOT NULL,
  `petAge` varchar(50) DEFAULT NULL,
  `petColor` varchar(50) NOT NULL,
  `petWeight` varchar(50) DEFAULT NULL,
  `SpayNeuter` text DEFAULT NULL,
  `rabiesVaccine` text DEFAULT NULL,
  `Deworming` text DEFAULT NULL,
  `threeinoneVaccine` text DEFAULT NULL,
  `petDiet` varchar(100) DEFAULT NULL,
  `selectedRange` varchar(50) DEFAULT NULL,
  `totalDays` int(11) DEFAULT NULL,
  `Charge` int(11) NOT NULL,
  `petDescription` varchar(100) DEFAULT NULL,
  `petPicture` varchar(255) DEFAULT NULL,
  `petPicture2` varchar(255) DEFAULT NULL,
  `petPicture3` varchar(255) DEFAULT NULL,
  `petPicture4` varchar(255) DEFAULT NULL,
  `postDate` varchar(50) NOT NULL,
  `petStatus` text NOT NULL,
  `postStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postpet`
--

INSERT INTO `postpet` (`petID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `petType`, `petName`, `petBreed`, `petSex`, `petAge`, `petColor`, `petWeight`, `SpayNeuter`, `rabiesVaccine`, `Deworming`, `threeinoneVaccine`, `petDiet`, `selectedRange`, `totalDays`, `Charge`, `petDescription`, `petPicture`, `petPicture2`, `petPicture3`, `petPicture4`, `postDate`, `petStatus`, `postStatus`) VALUES
(20, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'Dog', 'Cloudy', 'Border collie', 'Female', '2 month', 'whitish', '1 kg', '✔', '✔', '✔', '', '', '', 0, 0, 'This pet is an loveable pet it can be your companion in your life.', 'Dog.jpg', 'Dogs1.jpg', '', '', '04/04/2022 09:51 PM', 'Available', 'Adoption'),
(21, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 'Cat', 'dak', 'Brazilian Shorthair', 'Female', '3 month', 'Gray ', '4 kg', '', '', '', '', '', '', 0, 0, 'Adopt me i need some companion in my life please adopt me i can be your bestfriend', '4.jpg', '2.jpg', '', '', '04/04/2022 09:58:30 PM', 'Available', 'Adoption'),
(22, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'Cat', 'sdyz', 'Brazilian Shorthair', 'Female', '3 month', 'fedf', '3 kg', '', '', '', '', '', '', 0, 0, 'Im a great pet i can be your bestpal in your life i can be your guard at night i need some owner to ', '1.jpg', '', '', '', '04/05/2022 01:40 PM', 'Not available', 'Deleted'),
(23, 68, 'ann cagong', 'ann@gmail.com', 'lapulapu', '09231231231', 'Cat', 'ann', 'Bombay', 'Female', '3 year', 'Brown', '4 kg', '', '', '', '', '', '', 0, 0, 'kinsay ganahan mo adopt ani', '2.jpg', '', '', '', '04/05/2022 03:23 PM', 'Available', 'Adoption'),
(24, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '09060913468', 'Cat', 'Be er', 'Domestic shorthair cat', 'Male', '1 month', 'Gray spotted black', '6 lb', '', '', '', '', '', '6 days', 6, 0, 'Please take my cat', 'f4.jpg', '', '', '', '04/23/2022 10:54 PM', 'Available', 'Short-term care'),
(25, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '09060913468', 'Cat', 'Max', 'Domestic shorthair cat', 'Male', '1 year', 'Gray spotted black', '2 kg', '', '', '', '', '', '', 0, 0, 'Please adopt my cat', 'm2.jpg', '', '', '', '04/26/2022 02:11 AM', 'Available', 'Adoption'),
(26, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '09060913468', 'Dog', 'Brownie', 'Askal', 'Male', '1 year', 'Brown', '26 lb', '', '', '', '', '', '', 0, 0, 'please adopt my dog', 'images.jpg', '', '', '', '04/26/2022 02:52 PM', 'Available', 'Adoption'),
(38, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '09060913468', 'Dog', 'Bossing', 'Askal', 'Male', '', 'White and black', '', '✔', '✔', '✔', '', 'Isda, Manok ug Baboy', NULL, NULL, 0, 'Please adopt my dog', 'bossing.jpg', '', '', '', '04/27/2022 03:18 PM', 'Available', 'Adoption'),
(40, 6, 'Gen Navarro', 'gen@gmail.com', 'Cordova, Cebu', '09060913468', 'Cat', 'Koko', 'Domestic shorthair cat', 'Male', ' ', 'White and Orange', '', NULL, NULL, NULL, NULL, 'Fish', '3 days', 3, 5000, 'Please take care my cat', 'm6.jpg', '', '', '', '04/27/2022 08:30 PM', 'Available', 'Short-term care'),
(46, 53, 'JUAN TAMAD', 'juan@gmail.com', 'Mandaue', '09723124124', 'Cat', 'Menggay', 'Domestic shorthair cat', 'Female', '1 month', 'White', '', NULL, NULL, NULL, NULL, 'Whiskas and Fish', '1 week', 7, 10000, 'Please take care my cat', 'f2.jpg', '', '', '', '04/28/2022 01:02 AM', 'Available', 'Short-term care'),
(47, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 'Dog', 'Kabang', 'Askal', 'Male', '', 'White and brown', ' ', '', '', '', '', 'Baboy, Manok ug Isda', NULL, NULL, 0, 'Please adopt my dog', 'kabang.jpg', '', '', '', '04/28/2022 04:58 AM', 'Adopted', 'Adoption'),
(49, 53, 'JUAN TAMAD', 'juan@gmail.com', 'Mandaue', '09723124124', 'Cat', 'Memeng', 'Domestic shorthair cat', 'Female', '6 year', 'Orange', '1 kg', '', '✔', '✔', '', 'Fish', NULL, NULL, 0, 'Please adopt my cat', 'f6.jpg', '', '', '', '04/29/2022 04:06:12 AM', 'Adopted', 'Adoption'),
(56, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 'Dog', 'Tzen', 'Askal', 'Male', '2 year', 'Brown', '', '', '', '', '', 'bisag onsa', NULL, NULL, 0, 'please adopt my dog', 'images.jpg', '', '', '', '05/05/2022 04:43 PM', 'Adopted', 'Adoption'),
(84, 6, 'Gen Navarro', 'genesistagsip777@gmail.com', 'Cordova, Cebu', '09060913468', 'Cat', 'Snow', 'Domestic shorthair cat', 'Female', '1 year', 'White', '3.9 kg', NULL, '✔', '✔', '✔', 'Whiskas and Fish', NULL, NULL, 0, 'Please adopt my cat', 'twenty20_e47b3798-dd9b-40b1-91ef-1d820337966e-5aa3f798642dca00363b0df1.jpg', 'white-female-cat-names.jpg', '', '', '05/07/2022 05:15 PM', 'Available', 'Adoption'),
(85, 6, 'Gen Navarro', 'genesistagsip777@gmail.com', 'Cordova, Cebu', '09060913468', 'Cat', 'Jengky', 'Domestic shorthair cat', 'Female', '1 year', 'Gray', '3.7 kg', NULL, NULL, NULL, NULL, 'Fish', '6 days', 6, 6000, 'Please ko atiman sa ako iring kay mo adto ko ug manila', 'f5.jpg', '', '', '', '05/09/2022 11:58 PM', 'Short-Term Care', 'Short-term care');

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
  `birthDate` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` text NOT NULL,
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

INSERT INTO `register` (`userID`, `userFirstname`, `orgName`, `userLastname`, `contactNo`, `birthDate`, `Age`, `Gender`, `Address`, `Image`, `Email`, `Username`, `Password`, `Role`, `registerDate`) VALUES
(6, 'Gen', '', 'Navarro', '09060913468', '05/17/1999', 23, 'Male', 'Cordova, Cebu', 'Genesis.jpg', 'genesistagsip777@gmail.com', 'gen17', 'gen123', 'Pet Owner', '2022-01-12'),
(11, '', 'Getpet', '', '12423534654', '', 0, '', 'Consolacion', 'logo.png', 'getpet2022.test@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-01-13'),
(14, 'pet', '', 'adopter', '2147483647', '', 0, '', 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '123', 'Pet Adopter', '2022-01-20'),
(15, 'pets', '', 'owner', '31235423532', '', 0, '', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '123', 'Pet Owner', '2022-01-20'),
(16, '', 'PAWS', '', '2147483647', '', 0, '', 'tokyo', 'default_logo.png', 'paws@gmail.com', 'paws', '', 'Animal Welfare Organization', '2022-01-20'),
(17, '', 'Sagop', '', '2147483647', '', 0, '', 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', 'sagop2018', '', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '2147483647', '', 0, '', '0', 't3.jpg', '0', 'A', 'A', 'Pet Adopter', '2022-03-02'),
(53, 'JUAN', '', 'TAMAD', '09723124124', '', 0, '', 'Mandaue', 't1.jpg', 'juan@gmail.com', 'JUAN', 'JUAN', 'Pet Adopter', '2022-03-04'),
(67, 'John', '', 'Jalosjos', '09876214354', '', 0, '', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner', '2022-03-15'),
(68, 'ann', '', 'cagong', '09231231231', '', 0, '', 'lapulapu', 'adopter.jpg', 'ann@gmail.com', 'ann', '123', 'Pet Owner', '2022-04-05'),
(69, 'ann2', '', 'cagong2', '23213123123', '', 0, '', 'Cansaga district 5 Consolacion Cebu', '3.jpg', 'ann2@gmail.com', 'ann2', 'ann', 'Pet Adopter', '2022-04-05'),
(70, 'Niel', '', 'Tatad', '09231212903', '', 0, '', 'Cansaga district 5 Consolacion Cebu', 'default_profile.png', 'asd', 'asdaasd', 'asdas', 'Pet Adopter', '2022-04-08'),
(71, 'test', '', 'test', '23154215231', '', 0, '', 'talamban', 'default_profile.png', 'test@gmail.com', 'test', '123', 'Pet Adopter', '2022-04-10'),
(72, 'test', '', 'test123', '02353456345', '', 0, '', 'test', 'default_profile.png', 'test@gmail.com', 'test', '123', 'Pet Adopter', '2022-04-10'),
(73, 'test', '', 'test', '12312342353', '', 0, '', 'test', 'default_profile.png', 'test@gmail.com', 'test', '123', 'Pet Adopter', '2022-04-10'),
(74, '', 'Animal Welfare', '', '09012412412', '', 0, '', 'Consolacion, Cebu', 'default_logo.png', 'animalwelfare@gmail.com', 'animalwelfare', '123', 'Animal Welfare Organization', '2022-05-02'),
(78, 'Jose', '', 'Harvey', '09124151522', '08/17/1999', 23, 'Select Gender...', 'Mandaue ', 'default_profile.png', 'harvey@gmail.com', 'joseharvey11', 'jeeya123', 'Pet Adopter', '2022-05-02'),
(90, 'Stacy Kate', '', 'Silvano', '09123214324', '02/27/2001', 21, 'Female', 'Balud, Sanfernando, Cebu', 'default_profile.png', 'istisidelacerna@gmail.com', 'stacy21', 'stacy123', 'Pet Owner', '2022-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestID` int(50) NOT NULL,
  `requestTitle` varchar(50) NOT NULL,
  `masterID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userContactNo` varchar(50) NOT NULL,
  `petID` int(11) NOT NULL,
  `petType` varchar(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petDescription` varchar(100) NOT NULL,
  `requestReason` varchar(100) NOT NULL,
  `requestDate` varchar(50) NOT NULL,
  `cancellationDate` varchar(50) NOT NULL,
  `cancellationReason` varchar(100) NOT NULL,
  `approvalDate` varchar(50) NOT NULL,
  `requestStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestID`, `requestTitle`, `masterID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `petID`, `petType`, `petName`, `petBreed`, `petDescription`, `requestReason`, `requestDate`, `cancellationDate`, `cancellationReason`, `approvalDate`, `requestStatus`) VALUES
(111, 'Adoption Request', 53, 6, 'Gen Navarro', 'genesistagsip777@gmail.com', 'Cordova, Cebu', '09060913468', 49, 'Cat', 'Memeng', 'Domestic shorthair cat', 'Please adopt my cat', 'I want to adopt this cat', '05/10/2022 03:58 PM', '', '', '05/10/2022 04:49 PM', 'Approved'),
(112, 'Short-Term Care Request', 53, 6, 'Gen Navarro', 'genesistagsip777@gmail.com', 'Cordova, Cebu', '09060913468', 46, 'Cat', 'Menggay', 'Domestic shorthair cat', 'Please take care my cat', 'I can take care your cat sir ', '05/10/2022 04:06 PM', '', '', '', ''),
(113, 'Adoption Request', 16, 53, 'JUAN TAMAD', 'juan@gmail.com', 'Mandaue', '09723124124', 47, 'Dog', 'Kabang', 'Askal', 'Please adopt my dog', 'bet', '05/10/2022 05:16 PM', '', '', '05/10/2022 05:17 PM', 'Approved'),
(114, 'Adoption Request', 16, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 56, 'Dog', 'Tzen', 'Askal', 'please adopt my dog', 'i want', '05/11/2022 09:55 PM', '', '', '05/11/2022 09:57 PM', 'Approved'),
(116, 'Short-Term Care Request', 6, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 85, 'Cat', 'Jengky', 'Domestic shorthair cat', 'Please ko atiman sa ako iring kay mo adto ko ug manila', 'v', '05/12/2022 01:20 AM', '', '', '05/12/2022 01:20 AM', 'Approved');

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
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`charityID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`newsfeedID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationID`);

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
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `postpet`
--
ALTER TABLE `postpet`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `charityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `newsfeedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `postpet`
--
ALTER TABLE `postpet`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
