-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 03:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_service_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `A_Name` varchar(50) DEFAULT NULL,
  `A_Address` varchar(100) DEFAULT NULL,
  `NIC` varchar(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `A_Name`, `A_Address`, `NIC`, `Email`) VALUES
(19, 'Sanjeewa', 'Balapitiya', '961832322v', 'lsanjeewa18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_cabowner`
--

CREATE TABLE `admin_cabowner` (
  `Admin_id` int(10) DEFAULT NULL,
  `C_Owner_id` int(10) DEFAULT NULL,
  `period_of_rent` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cab_owner`
--

CREATE TABLE `cab_owner` (
  `id` int(10) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `CO_Address` varchar(100) DEFAULT NULL,
  `NIC` varchar(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_No` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cab_owner`
--

INSERT INTO `cab_owner` (`id`, `First_Name`, `Last_Name`, `CO_Address`, `NIC`, `Email`, `Phone_No`) VALUES
(6, 'Niwanthi', 'Dilupama', 'Kaluthara', '95634322v', 'niwanthi1018@gmail.com', '0779807320');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `C_Address` varchar(100) DEFAULT NULL,
  `NIC` varchar(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_No` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `First_Name`, `Last_Name`, `C_Address`, `NIC`, `Email`, `Phone_No`) VALUES
(47, 'cdcdds', 'dsds', 'dsss', '5376376367v', 'lsanjeewa@gma', '078847878'),
(50, 'nethu', 'kawya', 'ambalangoda', '961832322v', 'lsanjeewa947@gmail.com', '0775094902'),
(58, 'testTEST', 'test', 'fhggg', '975643255v', 'lasanthasanjeewa21@gmail.com', '0778654321'),
(59, 'Tharuka', 'Vishwaith', 'Kalutara', '945839209V', 'tvs10010@gmail.com', '0770429201'),
(60, 'umee', 'gastty', 'ambalangoda', '9673747887v', 'lsanjeewa947@gmail.com', '0775094902'),
(61, 'hhrfhi', 'jdjjdjjj', 'ambalangoda', '9674377927v', 'lsanjeewa947@gmail.com', '0868785893'),
(62, 'jjfsjhf', 'jfdjfjfj', 'ambalangooda', '9438378892v', 'lsanjeewa947@gmail.com', '0595094377'),
(63, 'fdsfff', 'dsada', 'dadadadda', '9998845444v', 'lsanjeewa947@gmail.com', '5455345353'),
(64, 'lklkklj', 'jl', 'lkkj', 'lkkjj', 'lkkj@hjhj.com', '2145875698'),
(65, 'dfd', 'df', 'sf', 'sf', 'jjljlj@hjh.com', '23'),
(66, 'poree', 'chama', 'galle', '997654344v', 'lsanjeewa947@gail.com', ''),
(67, 'lasanna', 'sdsd', 'asadndnnd', '7378387809', 'lsanjeewa947@gmail.com', ''),
(68, 'lkjl', 'ljl', 'jljl', 'jljlk', 'kljlj@dgdg.com', ''),
(69, 'hhk', 'hkhkh', 'khkhk', 'hkhkh', 'khkhk@hgjf.com', ''),
(70, 'hhcdjh', 'djhhdh', 'hdhjd', 'jjdjdj', 'lsanjeewa947@gmail.com', '0775094902'),
(71, 'cjdcdsj', 'nxdn', 'DHHJDSJJ88948', '747484899v', 'lasanthasanjeewa21@gmail.com', ''),
(72, 'ffj', 'hdjdj', 'weuewu', '8272928-00', 'lasanthasanjeewa21@gmail.com', '3939393398'),
(73, 'niwanthi', 'Dilupma', 'kalutara', '9572320098', 'niwanthi1018@gmail.com', '0778956321'),
(74, 'Niwanthi', 'Dilupama', 'Kalutara', '957220039v', 'niwanthi1018@gmail.com', '0779807320');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(10) NOT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `D_DOB` date DEFAULT NULL,
  `D_Address` varchar(100) DEFAULT NULL,
  `NIC` varchar(11) DEFAULT NULL,
  `D_Licence_No` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_No` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `First_Name`, `Last_Name`, `D_DOB`, `D_Address`, `NIC`, `D_Licence_No`, `Email`, `Phone_No`) VALUES
(0, 'chamantha', 'lahiru', '2018-02-13', 'ambalangoda', '967546322v', '734848748B', 'a.k.chamantha@gmail.com', '0776584352'),
(19, 'hh', 'hjh', '2019-02-11', 'jl', 'ljl', 'jlj', 'jlj', 'jl');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `id` int(10) NOT NULL,
  `Driver_id` int(10) DEFAULT NULL,
  `Admin_id` int(10) DEFAULT NULL,
  `Customer_id` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Plate_No` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`id`, `Driver_id`, `Admin_id`, `Customer_id`, `Date`, `Plate_No`) VALUES
(1, 0, 19, '47', '2012-12-12', 'TY-7865'),
(2, 0, 19, '47', '2012-12-12', 'TY-7865'),
(3, 0, 19, '47', '2012-12-12', 'TY-7865'),
(4, 0, 19, '47', '2012-12-12', ''),
(5, 0, 19, '47', '2012-12-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userId` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userId`, `username`, `password`, `usertype`, `status`) VALUES
(58, 'makk', '123456', 'customer', 'active'),
(6, 'umee', '1234', 'cab_owner', 'active'),
(18, 'chama', '1234', 'Driver', 'active'),
(47, 'maka', '1234', 'customer', 'active'),
(19, 'sanjeewa', '122345', 'admin', 'active'),
(50, 'nethu', '1234', 'customer', 'active'),
(18, 'mkkk', '3333', 'Driver', 'banned'),
(59, 'tharuka', '1234', 'customer', 'active'),
(62, 'makas', '4784', 'customer', 'banned'),
(18, 'makaaa', '3211', 'Driver', 'banned'),
(62, 'lasantha', '348448', 'customer', 'banned'),
(63, 'dhddhhj', '2333', 'customer', 'active'),
(63, 'niwanthi', '4569874', 'customer', 'pending'),
(63, 'aaa', 'aaa', 'customer', 'pending'),
(64, 'UWU/ST/AC/0', 'aaa', 'customer', 'pending'),
(65, 'vc', 'aaacv', 'customer', 'pending'),
(66, 'makaa', '4567', 'customer', 'pending'),
(67, '12331', 'dmdwk', 'customer', 'pending'),
(68, 'ljlj', 'ljl', 'customer', 'pending'),
(69, 'ljl', 'jkj', 'customer', 'pending'),
(69, 'msjsj', '747487', 'customer', 'pending'),
(69, '5395959', '392', 'customer', 'pending'),
(71, 'jssj7', '3627', 'customer', 'pending'),
(72, 'dghgh', '78387378', 'customer', 'pending'),
(74, 'Dilupama', '1234', 'customer', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `P_Date` date DEFAULT NULL,
  `P_No_of_Date` int(50) DEFAULT NULL,
  `P_Method` varchar(50) DEFAULT NULL,
  `P_Amount` varchar(100) DEFAULT NULL,
  `Admin_id` int(10) DEFAULT NULL,
  `CustomerName` varchar(100) DEFAULT NULL,
  `Driver_id` int(10) DEFAULT NULL,
  `C_Owner_id` int(10) DEFAULT NULL,
  `driver` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `P_Date`, `P_No_of_Date`, `P_Method`, `P_Amount`, `Admin_id`, `CustomerName`, `Driver_id`, `C_Owner_id`, `driver`) VALUES
(1, '2012-12-12', 5, 'creditcard', '35', 0, 'maka', 0, 0, ''),
(2, '2012-12-12', 5, '', '35', 0, 'maka', 0, 0, ''),
(3, '2012-12-12', 5, 'onhand', '35', 0, 'maka', 0, 0, ''),
(4, '2012-12-12', 5, 'creditcard', '35', 0, 'maka', 0, 0, 'yes'),
(5, '2012-12-12', 5, 'onhand', '35', 0, 'maka', 0, 0, 'yes'),
(6, '2012-12-12', 5, 'onhand', '35', 0, 'maka', 0, 0, 'no'),
(7, '2012-12-12', 5, 'creditcard', '35', 0, 'maka', 0, 0, 'yes'),
(8, '2012-12-12', 5, 'onhand', '35', 0, 'maka', 0, 0, 'yes'),
(9, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(10, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(11, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(12, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(13, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(14, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(15, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(16, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(17, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(18, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(19, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(20, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(21, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(22, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(23, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(24, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(25, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(26, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(27, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(28, '2012-12-12', 5, 'onhand', '40', 0, 'sanjeewa', 0, 0, 'yes'),
(29, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(30, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(31, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(32, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(33, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(34, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(35, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(36, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(37, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(38, '2012-12-12', 5, 'onhand', '40', 0, 'tharuka', 0, 0, 'yes'),
(39, '2012-12-12', 5, 'onhand', '100', 0, 'tharuka', 0, 0, 'yes'),
(40, '2012-12-12', 5, 'creditcard', '40', 0, 'tharuka', 0, 0, 'yes'),
(41, '2012-12-12', 5, 'onhand', '40', 0, 'umee', 0, 0, 'no'),
(42, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(43, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(44, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(45, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(46, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(47, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(48, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(49, '2012-12-12', 5, 'onhand', '100', 0, 'umee', 0, 0, 'yes'),
(50, '2012-12-12', 5, 'onhand', '70', 0, 'umee', 0, 0, 'yes'),
(51, '2012-12-12', 5, 'onhand', '70', 0, 'umee', 0, 0, 'yes'),
(52, '2012-12-12', 5, 'onhand', '70', 0, 'umee', 0, 0, 'yes'),
(53, '2012-12-12', 5, 'creditcard', '70', 0, 'tharuka', 0, 0, 'yes'),
(54, '2012-12-12', 5, 'onhand', '70', 0, 'tharuka', 0, 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

CREATE TABLE `vehical` (
  `Reg_No` int(10) NOT NULL,
  `Plate_No` varchar(10) DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Chassy_No` varchar(11) DEFAULT NULL,
  `Seating_capacity` varchar(50) DEFAULT NULL,
  `No_of_Km_Run` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `C_Owner_id` int(10) DEFAULT NULL,
  `cab_owner_price` int(30) NOT NULL,
  `rent_price` int(30) NOT NULL,
  `availability` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`Reg_No`, `Plate_No`, `Model`, `type`, `Status`, `Chassy_No`, `Seating_capacity`, `No_of_Km_Run`, `image`, `C_Owner_id`, `cab_owner_price`, `rent_price`, `availability`) VALUES
(9, 'TY-7865', 'Audi', '', 'Good and Speed', '678999567', '5', '3456km', 'Uploads/audi.jpg', 0, 20, 40, 'not avilable'),
(7, 'BN-7865', 'Benz', '', 'Good and Speed', '678999097', '5', '3456km', 'Uploads/lg_Mercedes-CLA-Shooting-Brake.jpg', 0, 65, 70, 'avilable'),
(17, '5787cnuc', 'dhhj', 'dhh', 'eejjhhh', '78775898789', '46', '854875', 'Uploads/gallery2.jpg', 6, 150, 200, 'avilable');

-- --------------------------------------------------------

--
-- Table structure for table `vehical_assign_driver`
--

CREATE TABLE `vehical_assign_driver` (
  `Reg_No` int(10) DEFAULT NULL,
  `Driver_id` int(10) DEFAULT NULL,
  `Assign_hours` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_cabowner`
--
ALTER TABLE `admin_cabowner`
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `C_Owner_id` (`C_Owner_id`);

--
-- Indexes for table `cab_owner`
--
ALTER TABLE `cab_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Driver_id` (`Driver_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Driver_id` (`Driver_id`),
  ADD KEY `Customer_id` (`CustomerName`),
  ADD KEY `C_Owner_id` (`C_Owner_id`);

--
-- Indexes for table `vehical`
--
ALTER TABLE `vehical`
  ADD PRIMARY KEY (`Reg_No`),
  ADD KEY `C_Owner_id` (`C_Owner_id`);

--
-- Indexes for table `vehical_assign_driver`
--
ALTER TABLE `vehical_assign_driver`
  ADD KEY `Driver_id` (`Driver_id`),
  ADD KEY `Reg_No` (`Reg_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `cab_owner`
--
ALTER TABLE `cab_owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `vehical`
--
ALTER TABLE `vehical`
  MODIFY `Reg_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
