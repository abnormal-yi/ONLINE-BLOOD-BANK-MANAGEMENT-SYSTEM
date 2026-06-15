-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 04:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(15) NOT NULL,
  `Passwd` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `DateOfBirth` date NOT NULL,
  `District` text NOT NULL,
  `Street` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstName`, `LastName`, `AdminName`, `Email`, `PhoneNumber`, `Passwd`, `Gender`, `DateOfBirth`, `District`, `Street`) VALUES
(1, 'Nassor', 'Shukran', 'admin', 'valexinjr75@gmail.com', 2147483647, 'admin', 'Male', '2022-08-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `OrganizationName` int(11) NOT NULL,
  `DateOfEvent` int(11) NOT NULL,
  `District` int(11) NOT NULL,
  `Street` int(11) NOT NULL,
  `Email` int(11) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood bank`
--

CREATE TABLE `blood bank` (
  `A` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `AB` int(11) NOT NULL,
  `O` int(11) NOT NULL,
  `-A` int(11) NOT NULL,
  `-B` int(11) NOT NULL,
  `-AB` int(11) NOT NULL,
  `Infected Blood` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood recieved`
--

CREATE TABLE `blood recieved` (
  `AccountID` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Amount` int(5) NOT NULL,
  `District` text NOT NULL,
  `Street` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `HospitalID` int(11) NOT NULL,
  `APos` int(11) NOT NULL,
  `ANeg` int(11) NOT NULL,
  `BPos` int(11) NOT NULL,
  `BNeg` int(11) NOT NULL,
  `ABPos` int(11) NOT NULL,
  `ABNeg` int(11) NOT NULL,
  `OPos` int(11) NOT NULL,
  `ONeg` int(11) NOT NULL,
  `ReqDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`HospitalID`, `APos`, `ANeg`, `BPos`, `BNeg`, `ABPos`, `ABNeg`, `OPos`, `ONeg`, `ReqDate`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00'),
(1, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00'),
(1, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00'),
(1, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00'),
(1, 5, 25, 5, 5, 5, 5, 5, 25, '0000-00-00'),
(1, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00'),
(1, 5, 5, 5, 5, 5, 5, 5, 5, '0000-00-00'),
(1, 15, 15, 25, 15, 25, 30, 20, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `donnations`
--

CREATE TABLE `donnations` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `DateOfDonnation` date NOT NULL,
  `PlaceOfDonnation` text NOT NULL,
  `District` text NOT NULL,
  `Street` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donnations`
--

INSERT INTO `donnations` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `Gender`, `DateOfDonnation`, `PlaceOfDonnation`, `District`, `Street`) VALUES
('manny', 'junior', 'newkiller@gmail.com', '+2565498465', 'FEMALE', '2022-02-01', 'Majengo Sokoni', 'sdfgsdfg', 'kwamsuguli'),
('Jimmy', 'Drone', 'killer@gmail.com', '+2565498465', 'Male', '2022-06-07', 'Majengo Sokoni', 'xxxxxxxx', 'kwamsuguli'),
('Jimmy', 'Drone', 'killer@gmail.com', '+2565498465', 'Male', '2022-05-31', 'dAMU SALAMA ', 'Dodoma Municipal', 'kwamsuguli');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FullName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `HospitalID` int(11) NOT NULL,
  `HospitalName` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `District` text NOT NULL,
  `Street` text NOT NULL,
  `RegistrationState` text NOT NULL,
  `Passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`HospitalID`, `HospitalName`, `Email`, `PhoneNumber`, `District`, `Street`, `RegistrationState`, `Passwd`) VALUES
(1, 'General Hospital Dodoma', 'Hosp@gmail.com', '+255098709', 'Dom Town', 'General', 'APPROVED', ''),
(2, 'John Hospital', 'Jhospital@gmail.com', '+255098709', 'Doma Town', 'osdnlk', 'APPROVED', ''),
(3, 'Mrisho', 'Mrisho@gmail.com', '+255098709', 'Dom Town', 'General', 'APPROVED', ''),
(4, 'General', 'Hosp@gmail.com', '+255098709', 'Dom Town', 'osdnlk', 'APPROVED', ''),
(5, 'Mchongo Hospital', 'Mchongohosp@gmail.com', '+255743029067', 'Dodoma Municipal', 'Majengo', 'APPROVED', ''),
(6, 'Kilwa Hops', 'Hospkilea@gmail.com', '+25654984653', 'Dodoma Municipal', 'Makulu', 'APPROVED', 'HospIklers');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing blood`
--

CREATE TABLE `outgoing blood` (
  `hospitalid` int(50) NOT NULL,
  `A` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `AB` int(11) NOT NULL,
  `O` int(11) NOT NULL,
  `-A` int(11) NOT NULL,
  `-B` int(11) NOT NULL,
  `-AB` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffaccounts`
--

CREATE TABLE `staffaccounts` (
  `StaffID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `UserName` text NOT NULL,
  `Email` text NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Gender` text NOT NULL,
  `Passwd` varchar(128) NOT NULL,
  `Confirmed` text NOT NULL,
  `DateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffaccounts`
--

INSERT INTO `staffaccounts` (`StaffID`, `FirstName`, `LastName`, `UserName`, `Email`, `PhoneNumber`, `Gender`, `Passwd`, `Confirmed`, `DateOfBirth`) VALUES
(1, 'General', 'Staff', 'gstaff', 'gstaff@gmail.com', '+25590870234', 'Male', 'killler', 'GRANTED', '2022-06-06'),
(2, 'Alister', 'Bandkeys', 'AliBandy', 'alibandy23@gmail.com', '+25590870234', 'Female', 'AliKiller.', 'DENIED', '2022-07-19'),
(3, 'Anarold', 'Kesler', 'AndyKes', 'Anddykesler@gmail.com', '+25512345678', 'Male', 'AndyKesler.', 'DENIED', '1992-02-04'),
(5, 'January', 'Kalisto', 'JKali', 'jkali@gmail.com', '+25578899445', 'Male', 'JKaliMnyama.', 'DENIED', '2001-07-26'),
(6, 'Nassor', 'Shukran', 'admin', 'valexinjr75@gmail.com', '+255738877620', 'Male', 'admin', 'DENIED', '2022-08-02'),
(7, 'Deus', 'Haruni', 'DHaruni', 'dharuni@gmail.com', '+25590870234', 'Male', 'DHaruni.', 'DENIED', '1993-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` text NOT NULL,
  `District` text NOT NULL,
  `Street` text NOT NULL,
  `BloodGroup` text NOT NULL,
  `AccountType` varchar(50) NOT NULL,
  `Passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `DateOfBirth`, `Gender`, `District`, `Street`, `BloodGroup`, `AccountType`, `Passwd`) VALUES
(1, 'Antony', 'mrisho', 'antomrisho@gmail.com', '+255620234098', '2022-06-14', 'FEMALE', 'Dodoma Municipal', 'sokoni', 'B + ', 'User', 'xxxxxxxxxxxxx'),
(2, 'Harun', 'Mbishi', 'haruninimbishi@mpakabasi.com', '+2565498465', '2022-06-16', 'Male', 'xxxxxxxx', 'xxxxxxxx', 'A - ', 'User', 'asdasdasdasdasd'),
(3, 'Haruni', 'junior', 'HJunior@gmail.com', '+255620234098', '2022-06-04', 'CallMeKiller', 'Dodoma Municipal', 'Relini', 'A +', 'User', 'CallMeKiller'),
(4, 'Killer', 'junior', 'HJunior@gmail.com', '+25654989769465', '2022-06-16', 'Male', 'Dodoma Municipal', 'sokoni', 'A +', 'User', 'jhgkjhlkjhl'),
(5, 'Harun', 'Mapesa', 'hkmp@gmail.com', '+2565498465', '2022-06-16', 'Female', 'Dodoma Municipal', 'Relini', 'A +', 'User', 'IgotGenderCodeRight'),
(6, 'Junior', 'Jumbo', 'jjumbo@gmail.com', '+2565498465', '2022-02-21', 'KillerJumbop.', 'Dodoma Municipal', 'jummbani', 'O + ', 'User', 'KillerJumbop.'),
(7, 'Jimmy', 'Mgogo', 'JPM@gmail.com', '+2565498465', '2022-06-08', 'Passcode', 'sdfgsdfg', 'xxxxxxxx', 'AB + ', '0', 'Passcode'),
(8, 'Juma', 'Ally', 'JumaAlly@gmail.com', '+255712222253', '1994-02-02', 'Male', 'Dodoma Municipal', 'Makulu', 'O + ', 'User', 'JAlly.'),
(9, 'Chudy', 'Kibaka', 'Kibakachudy@yahoo.com', '0714808249', '2022-06-30', 'Male', 'Chamwino', 'Nala', 'AB - ', 'User', '2222'),
(10, 'Jimmy', 'Drone', 'killer@gmail.com', '+2565498465', '2022-06-14', 'zczxczxczxc', 'xxxxxxxx', 'xxxxxxxx', 'AB + ', '0', 'zczxczxczxc'),
(11, 'Killer', 'Samuel', 'killer@gmail.com', 'sergsdfgdfg', '1998-12-28', 'sergsdfgdfg', 'sergsdfgdfg', 'sergsdfgdfg', 'A +', '0', 'sergsdfgdfg'),
(12, 'Killer', 'Drone', 'killkiller@gmail.com', '+2565498465', '2022-06-08', 'sdfsdpoij', 'xxxxxxxx', 'xxxxxxxx', 'A - ', '0', 'sdfsdpoij'),
(13, 'Jimmy', 'Drone', 'killkiller@gmail.com', '0714808249', '2022-06-16', 'Male', 'xxxxxxxx', 'xxxxxxxx', 'O + ', 'User', 'wedwdwedwdwed'),
(14, 'Jimmy', 'Samuel', 'newkiller@gmail.com', '+25654984653', '2022-05-30', 'xxxxx', 'sdfgsdfg', 'jummbani', 'AB + ', '0', 'xxxxx'),
(15, 'Renew', 'Site', 'newsite@gmail.com', '+2565498465', '2022-07-06', 'Male', 'Dodoma Municipal', 'Majengo', 'AB + ', 'User', 'KillerDrone.'),
(16, 'Kilwa', 'Malebu', 'malebo5@gmail.com', '+25654989769465', '1998-10-10', 'Female', 'Dodoma Municipal', 'Makulu', 'notadded', 'User', 'malebo123'),
(17, 'Elizabeth', 'Thomas', 'LizTommy@gmail.com', '+25654989769465', '0000-00-00', '', '', '', '', '', 'MsengeeeHuyuDem.'),
(18, 'Easter', 'Malugu', 'maluguclub@gmail.com', '+25654984653', '0000-00-00', '', '', '', 'AB - ', '', 'iahsdoifhpsoi'),
(20, 'Easter', 'Malugu', 'maluguclub2@gmail.com', '+25654984653', '0000-00-00', 'Female', '', '', 'B - ', '', 'asdasdasdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`HospitalID`);

--
-- Indexes for table `staffaccounts`
--
ALTER TABLE `staffaccounts`
  ADD PRIMARY KEY (`StaffID`),
  ADD UNIQUE KEY `Email` (`Email`,`PhoneNumber`) USING HASH,
  ADD UNIQUE KEY `Email_2` (`Email`,`PhoneNumber`) USING HASH;

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`,`PhoneNumber`),
  ADD UNIQUE KEY `Email_2` (`Email`,`PhoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `HospitalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffaccounts`
--
ALTER TABLE `staffaccounts`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
