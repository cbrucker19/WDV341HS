-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2022 at 11:23 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbrucker19_wdv341a`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wdv341_events`
--

CREATE TABLE `wdv341_events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_description` longtext NOT NULL,
  `presenter` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `date_inserted` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wdv341_events`
--

INSERT INTO `wdv341_events` (`id`, `event_name`, `event_description`, `presenter`, `date`, `time`, `date_inserted`, `date_updated`) VALUES
(1, 'Cyrus', 'What is up', 'Cyrus or Me', '2022-02-22', '15:18:54', '2022-02-15', '2022-02-22'),
(2, 'Joe', 'What is up Joe mama', 'Joe or Jo', '2022-02-22', '15:18:54', '2022-02-22', '2022-02-22'),
(3, 'Jared', 'What up this is Jared', 'Jared or JDog', '2022-02-22', '00:00:00', '2022-02-22', '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `wdv341_products`
--

CREATE TABLE `wdv341_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_inStock` int(11) NOT NULL,
  `product_status` varchar(250) NOT NULL,
  `product_update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wdv341_products`
--

INSERT INTO `wdv341_products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_image`, `product_inStock`, `product_status`, `product_update_date`) VALUES
(1, '2TB External Hard Drive', '2.0 Terrabytes of storage. This USB devices has fast access speed to safely backup your vital information. A red protective case also included.', '129.99', 'externalHardDrive.jpg', 27, '', '2020-10-05'),
(2, '500GB Flash Drive', '500GB USB flash drive. With sliding protective cover. Bright red body makes it easier to see and find. ', '19.95', 'flashDrive.jpg', 289, 'BONUS: Silver 24GB Flash Drive included!', '2020-10-01'),
(3, 'Office Headset ', 'Home office headset with boom mike. USB connection with 2 meter cable provides flexibility. Comfort ear coverings. Sound dampening for better control. ', '29.95', 'headphones.jpg', 9, '', '2020-10-02'),
(4, 'Desktop Microphone', 'USB Computer Microphone.  24\" cord.  Base mounted pushbutton for Mute/Unmute. Flexible neck allows for better positioning.', '42.99', 'microphone.jpg', 36, 'New item!!', '2020-10-06'),
(5, '27\" Monitor', '27\" LED Flat screen monitor. Solid base for desktop usage. Good choice for home office and school work.', '159.99', 'monitor.jpg', 89, '', '2020-09-16'),
(6, 'Web Camera', 'Flexible mount web camera. Limited angle focus keeps you in the picture and reduces background clutter. Built in microphone available. USB or wireless options available. ', '89.95', 'webCamera.jpg', 2, 'Limited Quantity!', '2020-09-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `wdv341_events`
--
ALTER TABLE `wdv341_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wdv341_products`
--
ALTER TABLE `wdv341_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wdv341_products`
--
ALTER TABLE `wdv341_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
