-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 04, 2025 at 01:23 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resortmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `username` varchar(500) NOT NULL,
  `room_no` int NOT NULL,
  `fees` int NOT NULL,
  `status` int NOT NULL,
  `date` date NOT NULL,
  `datefrom` date NOT NULL,
  `todate` date NOT NULL,
  `days` int NOT NULL,
  `total` int NOT NULL,
  `cid` int NOT NULL,
  `hid` int NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `userid`, `username`, `room_no`, `fees`, `status`, `date`, `datefrom`, `todate`, `days`, `total`, `cid`, `hid`) VALUES
(48, 'abhiram@gmail.com', 'peprah', 104, 5000, 5, '2024-11-30', '2024-12-08', '2024-12-09', 1, 5000, 1, 1),
(74, 'abhiram@gmail.com', 'joel', 201, 8000, 4, '2025-01-06', '2025-01-06', '2025-01-09', 3, 24000, 2, 1),
(45, 'abhiram@gmail.com', 'Suarez', 104, 5000, 5, '2024-11-30', '2024-11-30', '2024-12-07', 7, 35000, 1, 1),
(46, 'abhiram@gmail.com', 'Noah', 105, 5000, 5, '2024-11-30', '2024-11-30', '2024-12-01', 1, 5000, 1, 1),
(50, 'admin', 'Abhiram', 104, 5000, 1, '2024-12-01', '0000-00-00', '0000-00-00', 1, 5000, 1, 1),
(51, 'admin', 'Abhiram', 104, 5000, 1, '2024-12-01', '0000-00-00', '0000-00-00', 1, 5000, 1, 1),
(52, 'admin', '', 103, 5000, 1, '2024-12-01', '2024-12-21', '2024-12-28', 7, 35000, 1, 1),
(70, 'abhiram@gmail.com', 'ABHIRAM', 104, 5000, 5, '2025-01-05', '2025-01-17', '2025-01-18', 1, 5000, 1, 1),
(56, 'jiso@gmail.com', 'Lamine Yamal', 304, 15000, 4, '2024-12-08', '2024-12-17', '2024-12-20', 3, 45000, 3, 1),
(57, 'jiso@gmail.com', 'Dybala', 105, 5000, 5, '2024-12-09', '2024-12-14', '2024-12-28', 14, 70000, 1, 1),
(60, 'abhiram@gmail.com', 'messi', 102, 5000, 5, '2025-01-03', '2025-01-17', '2025-01-18', 1, 5000, 1, 1),
(61, 'antony@gmail.com', 'messi', 101, 5000, 5, '2025-01-04', '2025-01-18', '2025-01-25', 7, 35000, 1, 1),
(62, 'antony@gmail.com', '', 101, 5000, 5, '2025-01-04', '2025-01-18', '2025-01-25', 7, 35000, 1, 1),
(63, 'abhiram@gmail.com', 'Lamine Yamal', 104, 5000, 4, '2025-01-05', '2025-01-17', '2025-01-18', 1, 5000, 1, 1),
(64, 'jiso@gmail.com', 'jiso', 102, 5000, 5, '2025-01-05', '2025-01-17', '2025-01-18', 1, 5000, 1, 3),
(65, 'jiso@gmail.com', 'jiso jose', 105, 5000, 4, '2025-01-05', '2025-01-17', '2025-01-31', 14, 70000, 1, 1),
(66, 'jiso@gmail.com', 'jiso jose', 105, 5000, 5, '2025-01-05', '2025-01-17', '2025-01-31', 14, 70000, 1, 1),
(78, 'abhiram@gmail.com', 'Lamine Yamal', 102, 5000, 2, '2025-10-03', '2025-10-16', '2025-10-23', 7, 35000, 1, 1),
(75, 'abhiram@gmail.com', 'jj', 104, 5000, 2, '2025-01-06', '2025-01-18', '2025-01-23', 5, 25000, 1, 1),
(76, 'abhiram@gmail.com', 'jj', 104, 5000, 2, '2025-01-06', '2025-01-18', '2025-01-23', 5, 25000, 1, 1),
(77, 'abhiram@gmail.com', 'joel', 102, 5000, 2, '2025-01-06', '2025-01-11', '2025-01-13', 2, 10000, 1, 1),
(79, 'abhiram@gmail.com', 'Lamine Yamal', 80000, 7800000, 2, '2025-10-03', '2025-10-20', '2025-10-30', 10, 78000000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `cimage` varchar(150) NOT NULL,
  `cdescription` varchar(200) NOT NULL,
  `cwifi` varchar(50) NOT NULL,
  `ctv` varchar(50) NOT NULL,
  `crate` varchar(50) NOT NULL,
  `camenities` varchar(500) NOT NULL,
  `clongdescription` varchar(500) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `crent` int NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cimage`, `cdescription`, `cwifi`, `ctv`, `crate`, `camenities`, `clongdescription`, `status`, `crent`) VALUES
(1, 'Single Room', 'singlebed.jpeg', '\"Experience ultimate comfort in our elegantly designed single room, featuring modern amenities and serene views for a relaxing stay.\"', 'WiFI', '32\" Smart IPTV', '5000', '32\" Smart IPTV, Wifi, \nFitness Centre, Bathtub, Complimentary mineral water, Pet-friendly, Tea and coffee maker, Luxury bathroom with walk-in shower and bathtub', 'Relish your staycation at this cozy and private 71-square-metre Patio Single bedroom, with spacious living and dining areas, a welcoming primary bedroom and a kitchenette that opens onto an exclusive patio.', 1, 5000),
(2, 'Double room', 'doublebed.jpg', '\"Relax in our spacious double room, thoughtfully designed with modern amenities and cozy ambiance, perfect for a tranquil getaway.\"', 'WiFI', '40\" Smart IPTV', '8000', '40\" Smart IPTV, WiFi, Fitness Centre, Dining, Individual climate control, Tea and coffee maker, Minibar on request, Branded Bath Toiletries, Iron and ironing board', 'Unwind in our spacious 37-square-metre room featuring welcoming Double beds, a marble bath with modern fittings and an ample desk.', 1, 8000),
(3, 'Triple room', 'triplebed.jpeg', '\"Unwind in our comfortable triple room, offering ample space, modern amenities, and a welcoming atmosphere for a perfect group stay.\"', 'WiFI', '42\" Smart IPTV', '15000', 'Broadband internet connectivity, Fitness Centre, 42\" Smart IPTV, Pet-friendly, Branded Bath Toiletries, In-room safe, Magzter, a digital app to read online newspapers and magazines', ' Our spacious triple bed room is designed for comfort, offering a choice of three single beds or a double and single bed combination to suit your needs. The room features an en-suite bathroom, air conditioning, flat-screen TV, and complimentary Wi-Fi, ensuring a relaxing and convenient stay.', 1, 15000),
(4, 'Queen Size room', 'queenbed.jpeg', '\"Indulge in our luxurious queen-size room, featuring elegant decor, modern amenities, and a cozy ambiance for a restful retreat.\"', 'WiFI', '55\" Smart IPTV', '25000', 'Complimentary mineral water, Fitness Centre, Complimentary Wi-Fi, Pet-friendly, 55\" Smart IPTV, Luxury bathroom with walk-in shower and bathtub, Crib available upon request, Iron and ironing board, Branded Bath Toiletries', ' The queen-size room offers a blend of comfort and style, featuring a cozy queen bed perfect for restful nights. Complete with an en-suite bathroom, flat-screen TV, air conditioning, and free Wi-Fi, this room provides everything needed for a comfortable stay', 1, 25000),
(5, 'King Size room', 'kingbed.jpeg', '\"Immerse yourself in luxury in our expansive king-size room, offering premium comfort, modern amenities, and a serene setting for a perfect escape.\"', 'WiFI', '55\" Smart IPTV', '20000', 'Complimentary mineral water, Fitness Centre, Complimentary Wi-Fi, 55\" Smart IPTV, Pet-friendly, Luxury bathroom with walk-in shower and bathtub, Branded Bath Toiletries, Magzter, a digital app to read online newspapers and magazines, In-room safe, Crib available upon request', 'Enjoy a grand staycation in our spacious 38-square-metre Grand room that features a luxurious king bed, marble bath and modern fittings and an ample desk.', 1, 20000),
(6, 'Presidential Suite', '9dd677518b4e03696f405fcaa2a94fda_baae887e7d8cb.jpeg', '\"Experience ultimate luxury and elegance in our Presidential Suite, featuring spacious interiors, premium amenities, and stunning views for an unforgettable stay.\"', 'WiFi', '55\" Smart IPTV', '55,000', '55” smart IPTV, Luxury bathroom with walk-in shower and bathtub, Fitness Centre, Deluxe French Note bathroom amenities, Hair dryer, Coffee maker, Refrigerator, microwave and toaster, Iron and ironing board, In-room safe, Built-in induction hob with hood, Complimentary Wi-Fi, Complimentary bottled mineral water', 'Relax in this exclusive 318-square-metre suite that redefines luxury with two bedrooms, walk-in wardrobes, an entertainment area, a kitchenette and a private balcony with unparalleled views of Vembanad Lake. Also enjoy Grand Club access that features cocktails and canapes on select brands from 5–7 p.m', 1, 55000),
(7, 'Suites', '5b0960d86b8e4c4bb78753ffb9a5e0b1_0b8a1e05bc8e8.webp', '\"Experience ultimate comfort in our elegantly designed suites, featuring modern amenities and serene views for a relaxing stay.\"', 'Wifi', '98\" Smart IPTV', '95000', '98\" Smart IPTV, Wifi,  Fitness Centre, Bathtub, Complimentary mineral water, Pet-friendly, Tea and coffee maker, Luxury bathroom with walk-in shower and bathtub', 'Relish your staycation at this cozy and private 71-square-metre Patio suite bedroom, with spacious living and dining areas, a welcoming primary bedroom and a kitchenette that opens onto an exclusive patio.', 1, 0),
(8, 'double room', '9d72989e349fc9dd9949db157e716283_8f8b0828fac39369.png', '\"Experience ultimate comfort in our elegantly designed suites, featuring modern amenities and serene views for a relaxing stay.\"', 'Wifi', '98\" Smart IPTV', '95000', '98\" Smart IPTV, Wifi,  Fitness Centre, Bathtub, Complimentary mineral water, Pet-friendly, Tea and coffee maker, Luxury bathroom with walk-in shower and bathtub', 'Relish your staycation at this cozy and private 71-square-metre Patio suite bedroom, with spacious living and dining areas, a welcoming primary bedroom and a kitchenette that opens onto an exclusive patio.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `hid` int NOT NULL AUTO_INCREMENT,
  `hname` varchar(50) NOT NULL,
  `himage` varchar(100) NOT NULL,
  `haddress` varchar(100) NOT NULL,
  `hcontact` char(10) NOT NULL,
  `hdescription` varchar(200) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `hname`, `himage`, `haddress`, `hcontact`, `hdescription`, `status`, `email`, `password`) VALUES
(1, 'chic Retreat, Kakkanad', 'resort1.jpeg', 'Kakkanad, Kochi', '7736299405', '\"Experience luxury and tranquility at our premium resort in Kakkanad, offering world-class amenities and serene natural surroundings for the perfect getaway.\"', 1, 'resort1@gmail.com', '1234'),
(2, 'chic Retreat, Kochi', 'resort2.jpeg', 'Kochi, Ernakulam', '8921540117', '\"Escape to tranquil luxury in the heart of Ernakulam, where contemporary comforts meet the charm of Kerala’s natural beauty\"', 1, 'resort2@gmail.com', '1234'),
(3, 'chic Retreat, Perinthalmanna ', 'resort3.jpeg', 'Pulamanthole , Perinthalmanna', '7902249954', '\"Discover peaceful retreat in Perinthalmanna, blending modern comforts with the serene landscapes of Kerala. \"', 1, 'resort3@gmail.com', '1234'),
(4, 'chic Retreat, Angamaly', '54c02897d79263fa18da5638c0840822_2e058e4c67a9b.webp', 'Angamaly, Kochi', '9966332256', '\"Escape to tranquil luxury in the heart of Angamaly, where contemporary comforts meet the charm of Kerala’s natural beauty\"', 1, 'resort4@gmail.com', '1234'),
(5, 'HOTEL GRAND', 'cb4cb2ad89202350b197bcd6f38b871d_463baeea469e19f814.png', 'Angamaly, Kochi', '0101010101', '\"Escape to tranquil luxury in the heart of Angamaly, where contemporary comforts meet the charm of Kerala’s natural beauty\"', 1, 'grand@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

DROP TABLE IF EXISTS `hotel_details`;
CREATE TABLE IF NOT EXISTS `hotel_details` (
  `hdid` int NOT NULL AUTO_INCREMENT,
  `hdimage` varchar(500) NOT NULL,
  `hddining` varchar(500) NOT NULL,
  `hdroom` varchar(500) NOT NULL,
  `hddescription` varchar(500) NOT NULL,
  `hdaddress` varchar(500) NOT NULL,
  `hdlocation` varchar(500) NOT NULL,
  `hid` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`hdid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`hdid`, `hdimage`, `hddining`, `hdroom`, `hddescription`, `hdaddress`, `hdlocation`, `hid`, `status`) VALUES
(1, 'hdimage1.jpg', '5cffb26bfd4a275cea5c7dbe8b803281_e7f3acfadcea6b0ae282.jpeg', '3f8503460598ecba157ff0930960f77f_4b127ef8bc1d16ec.jpeg', 'good', 'kakanad', 'https://www.google.co.in/maps/place/Kochi,+Kerala/@9.982516,76.1361179,11z/data=!3m1!4b1!4m6!3m5!1s0x3b080d514abec6bf:0xbd582caa5844192!8m2!3d9.9312328!4d76.2673041!16zL20vMGZsMnM?entry=ttu&g_ep=EgoyMDI0MTExMC4wIKXMDSoASAFQAw%3D%3D', 1, 1),
(2, '9dcb27be3be02d773e54e5e2ee0a424e_a2a4e59a3938beb4a.webp', '5b76097ef0d25c39ef2fc38dae5b3803_cbbdfbcc6c82aac2e8d.webp', 'a3a4f3d9a697d05409732848763c577c_3ed0390a41a075.webp', 'Excellent', 'Angamaly, Kochi', 'https://www.google.co.in/maps/place/Angamaly,+Kerala/@9.9825565,76.3009338,9z/data=!4m6!3m5!1s0x3b080665e0bb9959:0x19b75e6b4e671ef1!8m2!3d10.1926394!4d76.3869289!16zL20vMDVyX3hf?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjM0SAFQAw%3D%3D', 4, 1),
(3, '356f480c3ac241038c112923f75889d3_2218945fe5e4e8a66430.png', 'e05e834ee0360cc7d50c9dc10f86b3f6_3149f592c90664d2d9a.png', 'fa969666e7f4ab881f025a349c5dd69e_a5867e760d0a8.png', 'Excellent', 'Angamaly, Kochi', 'https://www.google.co.in/maps/place/Angamaly,+Kerala/@9.9825565,76.3009338,9z/data=!4m6!3m5!1s0x3b080665e0bb9959:0x19b75e6b4e671ef1!8m2!3d10.1926394!4d76.3869289!16zL20vMDVyX3hf?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjM0SAFQAw%3D%3D', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `regid` int NOT NULL AUTO_INCREMENT,
  `regfname` varchar(100) NOT NULL,
  `reglname` varchar(100) NOT NULL,
  `regaddress` varchar(200) NOT NULL,
  `rcontact` char(10) NOT NULL,
  `remail` varchar(30) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`regid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `regfname`, `reglname`, `regaddress`, `rcontact`, `remail`, `rpassword`, `status`) VALUES
(1, 'Abhiram', 'S', 'Aluva', '7736299405', 'abhiram@gmail.com', '1234', 1),
(3, 'Joel', 'Joy', 'Angamaly', '9874563211', 'joel@gmail.com', 'abcd', 1),
(5, 'Jiso', 'Jose', 'Kozhikode', '9525454859', 'jiso@gmail.com', '963', 1),
(6, 'Emil', 'Baiju', 'manjapra', '7744118855', 'emil@gmail.com', 'abcd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `rno` int NOT NULL,
  `rfloor` int NOT NULL,
  `rrent` int NOT NULL,
  `cid` int NOT NULL,
  `hid` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `rno`, `rfloor`, `rrent`, `cid`, `hid`, `status`) VALUES
(1, 101, 1, 5000, 1, 1, 1),
(2, 102, 1, 5000, 1, 1, 1),
(3, 103, 1, 5000, 1, 1, 1),
(4, 104, 1, 5000, 1, 1, 1),
(5, 105, 1, 5000, 1, 1, 1),
(6, 201, 2, 8000, 2, 1, 1),
(7, 202, 2, 8000, 2, 1, 1),
(8, 203, 2, 8000, 2, 1, 1),
(9, 204, 2, 8000, 2, 1, 1),
(10, 205, 2, 8000, 2, 1, 1),
(11, 301, 3, 15000, 3, 1, 1),
(12, 302, 3, 15000, 3, 1, 1),
(13, 303, 3, 15000, 3, 1, 1),
(14, 304, 3, 15000, 3, 1, 1),
(15, 305, 3, 15000, 3, 1, 1),
(16, 401, 4, 25000, 4, 1, 1),
(17, 402, 4, 25000, 4, 1, 1),
(18, 403, 4, 25000, 4, 1, 1),
(19, 404, 4, 25000, 4, 1, 1),
(20, 405, 4, 25000, 4, 1, 1),
(21, 501, 5, 20000, 5, 1, 1),
(22, 502, 5, 20000, 5, 1, 1),
(23, 503, 5, 20000, 5, 1, 1),
(24, 504, 5, 20000, 5, 1, 1),
(25, 505, 5, 20000, 5, 1, 1),
(26, 101, 1, 5000, 1, 2, 1),
(27, 102, 1, 5000, 1, 2, 1),
(28, 103, 1, 5000, 1, 2, 1),
(29, 104, 1, 5000, 1, 2, 1),
(30, 105, 1, 5000, 1, 2, 1),
(31, 201, 2, 8000, 2, 2, 1),
(32, 202, 2, 8000, 2, 2, 1),
(33, 203, 2, 8000, 2, 2, 1),
(34, 204, 2, 8000, 2, 2, 1),
(35, 205, 2, 8000, 2, 2, 1),
(36, 301, 3, 15000, 3, 2, 1),
(37, 302, 3, 15000, 3, 2, 1),
(38, 303, 3, 15000, 3, 2, 1),
(39, 304, 3, 15000, 3, 2, 1),
(40, 305, 3, 15000, 3, 2, 1),
(41, 401, 4, 25000, 4, 2, 1),
(42, 402, 4, 25000, 4, 2, 1),
(43, 403, 4, 25000, 4, 2, 1),
(44, 404, 4, 25000, 4, 2, 1),
(45, 405, 4, 25000, 4, 2, 1),
(46, 501, 5, 20000, 5, 2, 1),
(47, 502, 5, 20000, 5, 2, 1),
(48, 503, 5, 20000, 5, 2, 1),
(49, 504, 5, 20000, 5, 2, 1),
(50, 505, 5, 20000, 5, 2, 1),
(51, 101, 1, 5000, 1, 3, 1),
(52, 102, 1, 5000, 1, 3, 1),
(53, 103, 1, 5000, 1, 3, 1),
(54, 104, 1, 5000, 1, 3, 1),
(55, 105, 1, 5000, 1, 3, 1),
(56, 201, 2, 8000, 2, 3, 1),
(57, 202, 2, 8000, 2, 3, 1),
(58, 203, 2, 8000, 2, 3, 1),
(59, 204, 2, 8000, 2, 3, 1),
(60, 205, 2, 8000, 2, 3, 1),
(61, 301, 3, 15000, 3, 3, 1),
(62, 302, 3, 15000, 3, 3, 1),
(63, 303, 3, 15000, 3, 3, 1),
(64, 304, 3, 15000, 3, 3, 1),
(65, 305, 3, 15000, 3, 3, 1),
(66, 401, 4, 25000, 4, 3, 1),
(67, 402, 4, 25000, 4, 3, 1),
(68, 403, 4, 25000, 4, 3, 1),
(69, 404, 4, 25000, 4, 3, 1),
(70, 405, 4, 25000, 4, 3, 1),
(71, 501, 5, 20000, 5, 3, 1),
(72, 502, 5, 20000, 5, 3, 1),
(73, 503, 5, 20000, 4, 3, 1),
(74, 504, 5, 20000, 5, 3, 1),
(75, 505, 5, 20000, 5, 3, 1),
(76, 101, 1, 5000, 1, 4, 1),
(77, 102, 1, 5000, 1, 4, 1),
(78, 101, 1, 5000, 8, 5, 1),
(79, 101, 1, 5000, 5, 5, 1),
(80, 80000, 8, 7800000, 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
