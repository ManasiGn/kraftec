-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `fdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `user_id`, `feedback`, `uname`, `fdate`) VALUES
(1, 3, 'nice', 'SoudhaRaymond', '2021/10/13');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `maid` varchar(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mid`, `name`, `email`, `phone`, `dob`, `address`, `maid`, `image`, `date`, `password`) VALUES
(5, 'rahul', 'rahul@gmail.com', 976786442, '1980-08-08', 'neermarga,manglore', '1', 'uploads/ac.jpg', '2021-06-16', '12345'),
(6, 'manoj', 'naikveena45@gmail.com', 8553553715, '1990-09-30', 'urva', 'mn12', 'uploads/team-4.jpg', '2021-10-13', 'Manoj@123'),
(7, 'Rashmi', 'rashmi@gmail.com', 8745123690, '1987-08-31', 'kaikamba', 'rs12', 'uploads/team-3.jpg', '2021-10-13', 'Rashmi@123'),
(8, 'Poorvi Amin', 'poorviamin8@gmail.com', 7795025402, '1990-12-18', 'kudroli', 'pr13', 'uploads/team-2.jpg', '2021-10-13', 'Poorvi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orid` int(11) NOT NULL,
  `usid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `odate` date NOT NULL,
  `ostatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orid`, `usid`, `prid`, `qty`, `cost`, `total`, `odate`, `ostatus`) VALUES
(1, 3, 3, 2, 9999, 19998, '2021-10-13', 'Dispatched'),
(2, 3, 3, 2, 9999, 19998, '2021-10-13', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `odid` int(11) NOT NULL,
  `orid` int(11) NOT NULL,
  `usid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `odate` date NOT NULL,
  `ostatus` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`odid`, `orid`, `usid`, `prid`, `qty`, `cost`, `total`, `odate`, `ostatus`) VALUES
(1, 1, 3, 3, 2, 9999, 19998, '2021-10-13', 'Dispatched'),
(2, 2, 3, 3, 2, 9999, 19998, '2021-10-13', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paid` int(11) NOT NULL,
  `usrid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `padate` date NOT NULL,
  `pastatus` varchar(30) NOT NULL,
  `tid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paid`, `usrid`, `amount`, `padate`, `pastatus`, `tid`) VALUES
(1, 3, 19998, '2021-10-13', 'Paid', 2147483647),
(2, 3, 19998, '2021-10-13', 'Paid', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `description` varchar(300) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `pimage` varchar(250) NOT NULL,
  `stock` int(11) NOT NULL,
  `catg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `description`, `cost`, `qty`, `pimage`, `stock`, `catg`) VALUES
(1,'Anniversary cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',500,5,'uploads/anniversary1.png',3, 'cake topper'),
(2,'Anniversary cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',550,6,'uploads/anniversary2.png',3, 'cake topper'),
(3,'Anniversary cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',1500,3,'uploads/anniversary3.png',3, 'cake topper'),
(4,'Anniversary cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',900,5,'uploads/anniversary4.png',3, 'cake topper'),
(5,'Baby shower cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',920,2,'uploads/babyshower1.png',3, 'cake topper'),
(6,'Baby shower cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',1900,1,'uploads/babyshower2.png',3, 'cake topper'),
(7,'Baby shower cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',670,9,'uploads/babyshower3.png',3, 'cake topper'),
(8,'Baby shower cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',490,5,'uploads/babyshower4.png',3, 'cake topper'),
(9,'Birthday cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',500,4,'uploads/birthday1.png',3, 'cake topper'),
(10,'Birthday cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',1200,5,'uploads/birthday2.png',3, 'cake topper'),
(11,'Birthday cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',500,3,'uploads/birthday3.png',3, 'cake topper'),
(12,'Birthday cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',600,8,'uploads/birthday4.png',3, 'cake topper'),
(13,'Bride to be cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',1000,10,'uploads/bidetobe1.png',3, 'cake topper'),
(14,'Bride to be cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',500,1,'uploads/bidetobe2.png',3, 'cake topper'),
(15,'Bride to be cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',510,2,'uploads/bidetobe3.png',3, 'cake topper'),
(16,'Bride to be cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',690,3,'uploads/bidetobe4.png',3, 'cake topper'),
(17,'Bride to be cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',700,5,'uploads/engaged1.png',3, 'cake topper'),
(18,'Bride to be cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',900,7,'uploads/engaged2.png',3, 'cake topper'),
(19,'Engaged cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',1500,4,'uploads/engaged3.png',3, 'cake topper'),
(20,'Engaged cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',1000,8,'uploads/engaged4.png',3, 'cake topper'),
(21,'Engaged cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',900,9,'uploads/w1cake_topper.png',3, 'cake topper'),
(22,'Engaged cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',990,3,'uploads/w2cake_topper.png',3, 'cake topper'),
(23,'Wedding cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',500,2,'uploads/w3cake_topper.png',3, 'cake topper'),
(24,'Wedding cake topper', 'This is the cake topper you need for your Bride to be party. You can quickly and easily decorate your party cake.',800,1,'uploads/Wcake_topper.png',3, 'cake topper');


-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `sid` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `gty` int(11) NOT NULL,
  `rem` int(11) NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `uemail` varchar(25) NOT NULL,
  `uphone` bigint(10) NOT NULL,
  `uaddress` varchar(150) NOT NULL,
  `udate` date NOT NULL,
  `upassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `uaddress`, `udate`, `upassword`) VALUES
(2, 'adminss', 'test@test.com', 7894561237, 'qwqwq', '2021-10-02', 'Moshin@123123'),
(3, 'soudha', 'soudha@gmail.com', 9663535392, 'manglore', '2021-10-13', 'Soudha()890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orid`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`odid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `odid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
