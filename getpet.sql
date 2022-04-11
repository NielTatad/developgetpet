-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 12:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

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
  `orgBirthdate` varchar(50) NOT NULL,
  `orgUsername` varchar(50) NOT NULL,
  `orgPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animalwelfareorganization`
--

INSERT INTO `animalwelfareorganization` (`orgID`, `orgName`, `orgContactNo`, `orgAddress`, `orgLogo`, `orgEmail`, `orgBirthdate`, `orgUsername`, `orgPassword`, `Role`) VALUES
(11, 'Getpet', '12423534654', 'Consolacion', 'logo.png', 'getpet@gmail.com', '', 'getpet2022', 'getpet123', 'Animal Welfare Organization'),
(16, 'PAWS', '2147483647', 'tokyo', 'default_logo.png', 'paws@gmail.com', '', 'paws', '123', 'Animal Welfare Organization'),
(17, 'Sagop', '2147483647', 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', '', 'sagop2018', 'sagop123', 'Animal Welfare Organization');

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
  `charTitle` varchar(100) NOT NULL,
  `charDescription` varchar(1000) NOT NULL,
  `charPicture` varchar(225) NOT NULL,
  `charBank` varchar(50) NOT NULL,
  `charPinnumber` varchar(50) NOT NULL,
  `charAmount` varchar(50) NOT NULL,
  `charStartdate` varchar(50) NOT NULL,
  `charEnddate` varchar(50) NOT NULL,
  `charPostdate` varchar(50) NOT NULL,
  `charCharitystatus` text NOT NULL,
  `charPoststatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charityID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `charTitle`, `charDescription`, `charPicture`, `charBank`, `charPinnumber`, `charAmount`, `charStartdate`, `charEnddate`, `charPostdate`, `charCharitystatus`, `charPoststatus`) VALUES
(8, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'esseet', 'We need some help for my pet that having a surgery tommorrow morning im asking a little bit money to save my dog through this disaster.', 'c6.jpg', 'BDO', '2354421123', '8777', '', '', '04/09/2022 10:47 PM', 'Unaccepted', 'Donation'),
(9, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'Need money', 'need ko money kay para sa akong iro please help me mga ka pet lovers i hope naa moy maitabang.', 'bossing.jpg', 'Union Bank', '21153232312', '2465', '', '', '04/10/2022 05:07 PM', 'Unaccepted', 'Donation'),
(10, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 'test PA', 'ASDASDKLA DKASKLFCSKLDCKA KCKASDCKLASKLCA KLSKLRF QWKJERKJQWEFKLWSDKFQWKE FKQWE DKLSDFC', 'c1.jpg', 'Union Bank', '4523412312', '23', '', '', '04/10/2022 07:06 PM', 'Unaccepted', 'Donation'),
(12, 16, 'PAWS', 'paws@gmail.com', 'tokyo', '2147483647', 'Test', 'sagip mi mga lods asasdasdasdasd wow magic', 'domestic-shorthair-cat.jpg', 'BDO', '21153232312', '565', '', '', '04/10/2022 10:05 PM', 'Unaccepted', 'Donation');

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
(40, 12, 16, 15, 'yow', '04/10/2022 10:14 PM', 'Donation'),
(41, 12, 16, 16, 'test', '04/10/2022 10:14 PM', 'Donation'),
(42, 10, 14, 15, 'test', '04/10/2022 10:23 PM', 'Donation'),
(43, 10, 14, 14, 'we', '04/10/2022 10:24 PM', 'Donation'),
(44, 10, 14, 16, 'sd', '04/10/2022 10:26 PM', 'Donation'),
(45, 23, 68, 16, 'check this\r\n', '04/10/2022 10:27 PM', 'Adoption'),
(46, 23, 68, 68, 'where', '04/10/2022 10:27 PM', 'Adoption'),
(47, 31, 0, 14, 'asd', '04/10/2022 11:09 PM', 'Adoption'),
(48, 31, 0, 14, 'asd', '04/10/2022 11:10 PM', 'Tips'),
(49, 31, 0, 14, 'asd', '04/10/2022 11:15 PM', 'Tips'),
(50, 31, 15, 14, 'test', '04/10/2022 11:16 PM', 'Tips'),
(51, 24, 15, 14, 'test', '04/11/2022 12:24 AM', 'Tips'),
(52, 24, 15, 14, 'test', '04/11/2022 12:24 AM', 'Advice'),
(53, 31, 15, 15, 'a', '04/11/2022 12:27 AM', 'Tips'),
(54, 31, 15, 15, 'a', '04/11/2022 12:27 AM', 'Advice'),
(55, 24, 15, 15, 'G', '04/11/2022 12:28 AM', 'Tips'),
(56, 24, 15, 15, 'G', '04/11/2022 12:28 AM', 'Advice'),
(57, 22, 16, 15, 'V', '04/11/2022 12:29 AM', 'Tips'),
(58, 22, 16, 15, 'V', '04/11/2022 12:29 AM', 'Advice'),
(59, 23, 68, 15, 'he', '04/11/2022 10:32 AM', 'Adoption');

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
(8, 'Adoption', 15, 68, 69, 'ann2 cagong2', 'ann2@gmail.com', 'Cansaga district 5 Consolacion Cebu', '23213123123', 23, 'Cat', 'ann', 'Bombay', '04/05/2022 03:24 PM', '04/05/2022 03:25 PM', '', 'Approved'),
(9, 'Adoption', 16, 14, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 21, 'Cat', 'dak', 'Brazilian Shorthair', '04/06/2022 03:53 PM', '04/06/2022 03:54 PM', '', 'Approved');

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
(6, 'Gen', '', 'Navarro', '09060913468', 'Cordova, Cebu', 'Genesis.jpg', 'gen@gmail.com', 'gen17', '', 'Pet Owner', '2022-03-30'),
(11, '', 'Getpet', '', '12423534654', 'Consolacion', 'logo.png', 'getpet@gmail.com', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-03-17'),
(14, 'pet', '', 'adopter', '2147483647', 'petadopters', 't3.jpg', 'pet@gmail.com', 'pet', '', 'Pet Adopter', '2022-04-10'),
(15, 'pets', '', 'owner', '31235423532', 'petowner', 't4.jpg', 'petowner@gmail.com', 'owner', '', 'Pet Owner', '2022-04-11'),
(16, '', 'PAWS', '', '2147483647', 'tokyo', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'paws@gmail.com', 'paws', '123', 'Animal Welfare Organization', '2022-04-11'),
(17, '', 'Sagop', '', '2147483647', 'Mandaue City', '????\\0JFIF\\0\\0H\\0H\\0\\0??@ICC_PROFILE\\0\\0\\00ADBE\\0\\0mntrRGB XYZ ?\\0\\0\\0\\03\\0;acspAPPL\\0\\0\\0\\0none\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0??\\0\\0\\0\\0\\0?-ADBE\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0', 'sagop@gmail.com', 'sagop2018', 'sagop123', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '2147483647', '0', 't3.jpg', '0', 'A', '', 'Pet Adopter', '2022-03-18'),
(53, 'JUAN', '', 'TAMAD', '09723124124', 'Mandaue', 't1.jpg', 'juan@gmail.com', 'JUAN', '', 'Pet Adopter', '2022-03-17'),
(67, 'John', '', 'Jalosjos', '09876214354', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', 'john22', 'john123', 'Pet Owner', '2022-03-15'),
(68, 'ann', '', 'cagong', '09231231231', 'lapulapu', 'adopter.jpg', 'ann@gmail.com', 'ann', '123', 'Pet Owner', '2022-04-11'),
(69, 'ann2', '', 'cagong2', '23213123123', 'Cansaga district 5 Consolacion Cebu', '3.jpg', 'ann2@gmail.com', 'ann2', 'ann', 'Pet Adopter', '2022-04-05'),
(70, 'Niel', '', 'Tatad', '09231212903', 'Cansaga district 5 Consolacion Cebu', 'default_profile.png', 'asd', 'asdaasd', 'asdas', 'Pet Adopter', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
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

INSERT INTO `notification` (`notificationID`, `activityID`, `notificationTitle`, `masterID`, `userID`, `notificationDescription`, `notificationDate`, `notificationStatus`) VALUES
(63, 40, 'Comment on Your Post', 16, 15, 'yow', '04/10/2022 10:14 PM', 'Unread'),
(64, 42, 'Comment on Your Post', 14, 15, 'test', '04/10/2022 10:23 PM', 'Unread'),
(65, 44, 'Comment on Your Post', 14, 16, 'sd', '04/10/2022 10:26 PM', 'Unread'),
(66, 45, 'Comment on Your Post', 68, 16, 'check this\r\n', '04/10/2022 10:27 PM', 'Unread'),
(67, 47, 'Comment on Your Post', 0, 14, 'asd', '04/10/2022 11:09 PM', 'Unread'),
(68, 48, 'Comment on Your Post', 0, 14, 'asd', '04/10/2022 11:10 PM', 'Unread'),
(69, 49, 'Comment on Your Post', 0, 14, 'asd', '04/10/2022 11:15 PM', 'Unread'),
(70, 50, 'Comment on Your Post', 15, 14, 'test', '04/10/2022 11:16 PM', 'Unread'),
(71, 51, 'Comment on Your Post', 15, 14, 'test', '04/11/2022 12:24 AM', 'Unread'),
(72, 52, 'Comment on Your Post', 15, 14, 'test', '04/11/2022 12:24 AM', 'Unread'),
(73, 57, 'Comment on Your Post', 16, 15, 'V', '04/11/2022 12:29 AM', 'Unread'),
(74, 58, 'Comment on Your Post', 16, 15, 'V', '04/11/2022 12:29 AM', 'Unread'),
(75, 59, 'Comment on Your Post', 68, 15, 'he', '04/11/2022 10:32 AM', 'Unread');

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
  `adopterBirthdate` date NOT NULL,
  `adopterUsername` varchar(50) NOT NULL,
  `adopterPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petadopter`
--

INSERT INTO `petadopter` (`adopterID`, `adopterFirstname`, `adopterLastname`, `adopterContactNo`, `adopterAddress`, `adopterPicture`, `adopterEmail`, `adopterBirthdate`, `adopterUsername`, `adopterPassword`, `Role`) VALUES
(14, 'pet', 'adopter', '2147483647', 'petadopters', 't3.jpg', 'pet@gmail.com', '0000-00-00', 'pet', '123', 'Pet Adopter'),
(52, 'bars', 'Tatad', '2147483647', '0', 't3.jpg', '0', '0000-00-00', 'A', 'A', 'Pet Adopter'),
(53, 'JUAN', 'TAMAD', '09723124124', 'Mandaue', 't1.jpg', 'juan@gmail.com', '0000-00-00', 'JUAN', 'JUAN', 'Pet Adopter'),
(69, 'ann2', 'cagong2', '23213123123', 'Cansaga district 5 Consolacion Cebu', '3.jpg', 'ann2@gmail.com', '0000-00-00', 'ann2', 'ann', 'Pet Adopter'),
(70, 'Niel', 'Tatad', '09231212903', 'Cansaga district 5 Consolacion Cebu', 'default_profile.png', 'asd', '0000-00-00', 'asdaasd', 'asdas', 'Pet Adopter');

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
  `ownerBirthdate` varchar(50) NOT NULL,
  `ownerUsername` varchar(50) NOT NULL,
  `ownerPassword` varchar(50) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petowner`
--

INSERT INTO `petowner` (`ownerID`, `ownerFirstname`, `ownerLastname`, `ownerContactNo`, `ownerAddress`, `ownerPicture`, `ownerEmail`, `ownerBirthdate`, `ownerUsername`, `ownerPassword`, `Role`) VALUES
(6, 'Gen', 'Navarro', '09060913468', 'Cordova, Cebu', 'Genesis.jpg', 'gen@gmail.com', '', 'gen17', 'gen123', 'Pet Owner'),
(15, 'pets', 'owner', '31235423532', 'petowner', 't4.jpg', 'petowner@gmail.com', '', 'owner', '123', 'Pet Owner'),
(54, 'B', 'B', '2147483647', 'B', 'default_profile.png', 'B', '', 'B', 'B', 'Pet Owner'),
(67, 'John', 'Jalosjos', '09876214354', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', '', 'john22', 'john123', 'Pet Owner'),
(68, 'ann', 'cagong', '09231231231', 'lapulapu', 'adopter.jpg', 'ann@gmail.com', '', 'ann', '123', 'Pet Owner');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `postTitle` varchar(50) NOT NULL,
  `postContent` text NOT NULL,
  `postPicture` varchar(255) NOT NULL,
  `postStatus` varchar(50) NOT NULL,
  `postDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `userID`, `Name`, `userEmail`, `postTitle`, `postContent`, `postPicture`, `postStatus`, `postDate`) VALUES
(19, 16, 'PAWS', 'paws@gmail.com', 'advicepaws', 'advicepaseqqwd', '', 'Advice', '03/25/2022 05:55 PM'),
(22, 16, 'PAWS', 'paws@gmail.com', 'advice sa iro', 'dapat ligoan', '', 'Advice', '03/25/2022 07:26 PM'),
(24, 15, 'pet owner', 'petowner@gmail.com', 'tatad', 'tatadaca', '', 'Advice', '03/25/2022 08:11 PM'),
(25, 15, 'pet owner', 'petowner@gmail.com', 'bulltetin', '• asdasd\r\n• asdasda\r\n• sdasdas\r\n• dasdasdasd\r\n• asdasdas\r\n• asd', '', 'Tips', '03/28/2022 08:34 AM'),
(26, 15, 'pet owner', 'petowner@gmail.com', 'sddfsd', '• asdasdasda\r\n• dasda\r\n• sdasd\r\n• asdas\r\n• das', '', 'Tips', '03/28/2022 08:35 AM'),
(27, 15, 'pet owner', 'petowner@gmail.com', 'wr3234', '• asda\r\n• sda2we\r\n• 1', '', 'Tips', '03/28/2022 08:35 AM'),
(28, 15, 'pet owner', 'petowner@gmail.com', 'how to dog', '• asdasdasd\r\n• asdasdas\r\n• dasdas\r\n• dasdasd\r\n• asdasd\r\n• asdasd\r\n• asd', '', 'Tips', '03/28/2022 11:14 AM'),
(29, 16, 'PAWS', 'paws@gmail.com', 'new', '• asdasdasd\r\n• asdasd\r\n• asda\r\n• sdasd', '', 'Tips', '03/28/2022 08:30 PM'),
(30, 16, 'PAWS', 'paws@gmail.com', 'PET OWNER SIDE', '• ASDASD\r\n• ASDA\r\n• SDAS\r\n• DAS\r\n• DASDWE32123\r\n• ASD', '', 'Tips', '03/28/2022 08:38 PM'),
(31, 15, 'pets owner', 'petowner@gmail.com', 'PO', '• ASDA\r\n• SDAS\r\n• DAS\r\n• DA\r\n• SDA\r\n• E 213E', '', 'Tips', '03/28/2022 08:39 PM');

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
  `petAge` varchar(50) NOT NULL,
  `petColor` varchar(50) NOT NULL,
  `petWeight` varchar(50) NOT NULL,
  `vaccinationStatus` varchar(50) NOT NULL,
  `dewormingStatus` varchar(50) NOT NULL,
  `selectedRange` varchar(50) NOT NULL,
  `totalDays` int(11) NOT NULL,
  `petDescription` varchar(100) NOT NULL,
  `petPicture` varchar(255) NOT NULL,
  `postDate` varchar(50) NOT NULL,
  `petStatus` text NOT NULL,
  `postStatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postpet`
--

INSERT INTO `postpet` (`petID`, `userID`, `userName`, `userEmail`, `userAddress`, `userContactNo`, `petType`, `petName`, `petBreed`, `petSex`, `petAge`, `petColor`, `petWeight`, `vaccinationStatus`, `dewormingStatus`, `selectedRange`, `totalDays`, `petDescription`, `petPicture`, `postDate`, `petStatus`, `postStatus`) VALUES
(20, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'Dog', 'Cloudy', 'Border collie', 'Female', '2 month', 'whitish', '1 kg', 'Vaccinated', 'Not deworm', '', 0, 'This pet is an loveable pet it can be your companion in your life.', '3.jpg', '04/04/2022 09:51 PM', 'Available', 'Adoption'),
(21, 14, 'pet adopter', 'pet@gmail.com', 'petadopters', '2147483647', 'Cat', 'dak', 'Brazilian Shorthair', 'Female', '3 month', 'Gray ', '4 kg', 'Vaccinated', 'Not deworm', '', 0, 'Adopt me i need some companion in my life please adopt me i can be your bestfriend', '4.jpg', '04/04/2022 09:58:30 PM', 'Available', 'Adoption'),
(22, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 'Cat', 'sdyzvfcvf', 'Brazilian Shorthair', 'Female', '3 month', 'fedf', '3 kg', 'Vaccinated', 'Not deworm', '', 0, 'Im a great pet i can be your bestpal in your life i can be your guard at night i need some owner to ', '1.jpg', '04/05/2022 01:40 PM', 'Available', 'Adoption'),
(23, 68, 'ann cagong', 'ann@gmail.com', 'lapulapu', '09231231231', 'Cat', 'ann', 'Bombay', 'Female', '3 year', 'Brown', '4 kg', 'Vaccinated', 'Deworm', '', 0, 'kinsay ganahan mo adopt ani', '2.jpg', '04/05/2022 03:23 PM', 'Available', 'Adoption');

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
  `Birthdate` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` text NOT NULL,
  `registerDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userID`, `userFirstname`, `orgName`, `userLastname`, `contactNo`, `Address`, `Image`, `Email`, `Birthdate`, `Username`, `Password`, `Role`, `registerDate`) VALUES
(6, 'Gen', '', 'Navarro', '09060913468', 'Cordova, Cebu', 'Genesis.jpg', 'gen@gmail.com', '', 'gen17', 'gen123', 'Pet Owner', '2022-01-12'),
(11, '', 'Getpet', '', '12423534654', 'Consolacion', 'logo.png', 'getpet@gmail.com', '', 'getpet2022', 'getpet123', 'Animal Welfare Organization', '2022-01-13'),
(14, 'pet', '', 'adopter', '2147483647', 'petadopters', 't3.jpg', 'pet@gmail.com', '', 'pet', '123', 'Pet Adopter', '2022-01-20'),
(15, 'pets', '', 'owner', '31235423532', 'petowner', 't4.jpg', 'petowner@gmail.com', '', 'owner', '123', 'Pet Owner', '2022-01-20'),
(16, '', 'PAWS', '', '2147483647', 'tokyo', 'default_logo.png', 'paws@gmail.com', '', 'paws', '', 'Animal Welfare Organization', '2022-01-20'),
(17, '', 'Sagop', '', '2147483647', 'Mandaue City', 'default_logo.png', 'sagop@gmail.com', '', 'sagop2018', '', 'Animal Welfare Organization', '2022-02-01'),
(52, 'bars', '', 'Tatad', '2147483647', '0', 't3.jpg', '0', '', 'A', 'A', 'Pet Adopter', '2022-03-02'),
(53, 'JUAN', '', 'TAMAD', '09723124124', 'Mandaue', 't1.jpg', 'juan@gmail.com', '', 'JUAN', 'JUAN', 'Pet Adopter', '2022-03-04'),
(67, 'John', '', 'Jalosjos', '09876214354', 'Lapu-lapu', 'default_profile.png', 'john@gmail.com', '', 'john22', 'john123', 'Pet Owner', '2022-03-15'),
(68, 'ann', '', 'cagong', '09231231231', 'lapulapu', 'adopter.jpg', 'ann@gmail.com', '', 'ann', '123', 'Pet Owner', '2022-04-05'),
(69, 'ann2', '', 'cagong2', '23213123123', 'Cansaga district 5 Consolacion Cebu', '3.jpg', 'ann2@gmail.com', '', 'ann2', 'ann', 'Pet Adopter', '2022-04-05'),
(70, 'Niel', '', 'Tatad', '09231212903', 'Cansaga district 5 Consolacion Cebu', 'default_profile.png', 'asd', '', 'asdaasd', 'asdas', 'Pet Adopter', '2022-04-08'),
(71, 'test', '', 'test', '23154215231', 'talamban', 'default_profile.png', 'test@gmail.com', '1998-06-16', 'test', '123', 'Pet Adopter', '2022-04-10'),
(72, 'test', '', 'test123', '02353456345', 'test', 'default_profile.png', 'test@gmail.com', '1998-06-16', 'test', '123', 'Pet Adopter', '2022-04-10'),
(73, 'test', '', 'test', '12312342353', 'test', 'default_profile.png', 'test@gmail.com', '2022-04-13', 'test', '123', 'Pet Adopter', '2022-04-10');

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
(15, 'Adoption Request', 68, 69, 'ann2 cagong2', 'ann2@gmail.com', 'Cansaga district 5 Consolacion Cebu', '23213123123', 23, 'Cat', 'ann', 'Bombay', 'kinsay ganahan mo adopt ani', 'i would like to adopt your pet', '04/05/2022 03:24 PM', '', '', '04/05/2022 03:25 PM', 'Approved'),
(16, 'Adoption Request', 14, 15, 'pets owner', 'petowner@gmail.com', 'petowner', '31235423532', 21, 'Cat', 'dak', 'Brazilian Shorthair', 'Adopt me i need some companion in my life please adopt me i can be your bestfriend', 'dsada', '04/06/2022 03:53 PM', '', '', '04/06/2022 03:54 PM', 'Approved');

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
  MODIFY `charityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `postpet`
--
ALTER TABLE `postpet`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
