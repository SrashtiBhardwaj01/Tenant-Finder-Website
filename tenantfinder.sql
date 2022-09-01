-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 07:10 PM
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
-- Database: `tenantfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `no` int(11) NOT NULL,
  `rate` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no`, `rate`, `fullname`, `email`, `age`, `phoneno`, `message`, `created_at`) VALUES
(1, 'average', 'Sejal Lavania', 'sejallavania13@gmail.com', 18, 8630013788, 'Best', '2022-05-05 11:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mob` bigint(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hno` int(11) NOT NULL,
  `society` varchar(50) NOT NULL,
  `kl` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`id`, `username`, `mob`, `email`, `hno`, `society`, `kl`, `address`, `city`, `created_at`) VALUES
(1, 'sejal Lavania', 8787654567, 'sejallavania13@gmail.com', 92, 'sai darshan', 'near jp mall', '92,Vasant Bihar, sector 5 ,Noida', 'Noida', '2022-05-05 00:23:54'),
(2, 'Khushi', 8976545689, 'khushi@gmail.com', 56, 'sai darshan', 'near pushpa medical', '56,Vasant Bihar, sector 5 ,Delhi', 'Delhi', '2022-05-05 00:38:23'),
(3, 'Khushi Aggrawal', 8965432122, 'btbti19126_khushi@banasthali.i', 45, 'Surya Vihan', 'near ajmer fort', '45,Surya Vihan society ,Jaipur', 'Jaipur', '2022-05-05 08:11:21'),
(4, 'Varsha Singhal', 7656890056, 'singhalvarsha02@gmail.com', 65, 'Sanidhya Township', 'near raj medical', '65,Sanidhya Township,Mk road,Lucknow', 'Lucknow', '2022-05-05 08:58:13'),
(5, 'Srashti Bhardwaj', 6789897767, 'btbti19145_srashti@banasthali.', 89, 'Aanada Bungalows', 'near Brijwasi royal Hotel', '89,Aanada Bungalows,chinna swami road,Chennai', 'Chennai', '2022-05-05 09:09:03'),
(6, 'Khushi', 8977660056, 'khushi@gmail.com', 47, 'yamuna jang', 'near vasant kunj', '47,yamuna jang,Agra', 'Agra', '2022-05-05 09:22:54'),
(7, 'Vishal Sharma', 7865456677, 'vishal@gmail.com', 82, 'padmagiri Nagar', 'near shiva complex', '82,padmagiri Nagar,Badra road,Mumbai', 'Mumbai', '2022-05-05 09:42:59'),
(8, 'Shubham Yadav', 7867564900, 'shubham@gmail.com', 80, 'shubh jang', 'near Omkar residency', '80,yamuna bihar,Udaipur', 'Udaipur', '2022-05-05 09:45:16'),
(9, 'Sejal lavania', 8978667890, 'sejallavania13@gmail.com', 80, 'jamuna jang', 'near lake', '80,jamuna jang,Agra', 'Agra', '2022-05-05 10:14:31'),
(10, 'Abhay', 8878786856, 'abhay@gmail.com', 62, 'sai darshan', 'near mx hospital', '62,sai darshan,Delhi', 'Delhi', '2022-05-05 11:21:59'),
(11, 'Sejal Lavania', 8786765677, 'sejallavania13@gmail.com', 89, 'Panda gali', 'near lake', 'Panda Gali ,Dasvisha,Goverdhan', 'Mathura', '2022-05-05 12:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `multiple-images`
--

CREATE TABLE `multiple-images` (
  `image_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image_status` varchar(20) NOT NULL,
  `l_id` int(11) NOT NULL,
  `image_createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple-images`
--

INSERT INTO `multiple-images` (`image_id`, `image`, `image1`, `image2`, `image_status`, `l_id`, `image_createtime`) VALUES
(1, '1651717746.jpeg', '1651717746.', '1651717746.', '', 1, '0000-00-00 00:00:00'),
(2, '1651717748.jpeg', '1651717748.', '1651717748.', '', 1, '0000-00-00 00:00:00'),
(3, '1651717748.jpeg', '1651717748.', '1651717748.', '', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `propdetails`
--

CREATE TABLE `propdetails` (
  `id` int(11) NOT NULL,
  `AT` varchar(30) NOT NULL,
  `mealtype` varchar(25) NOT NULL,
  `op` varchar(30) NOT NULL,
  `pt` varchar(30) NOT NULL,
  `meal2` varchar(30) NOT NULL,
  `rentalfloor` varchar(10) NOT NULL,
  `beds` varchar(30) NOT NULL,
  `fs` varchar(30) NOT NULL,
  `ff` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `l_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propdetails`
--

INSERT INTO `propdetails` (`id`, `AT`, `mealtype`, `op`, `pt`, `meal2`, `rentalfloor`, `beds`, `fs`, `ff`, `gender`, `descr`, `l_id`, `created_at`) VALUES
(1, 'Residential', 'v', 'Double', 'Student', 'breakfast', '2', '3', 'Un-furnished', 'Available', 'no', 'Null', 1, '2022-05-05 00:25:10'),
(2, 'PG', 'v', 'Double', 'Student', 'lunch', '2', '1', 'Furnished', 'Not Available', 'male', 'null', 2, '2022-05-05 00:41:31'),
(3, 'Co-working', 'v', 'Double', 'Student', 'lunch', '3', '2', 'Un-furnished', 'Not Available', 'no', 'Null', 3, '2022-05-05 08:12:08'),
(4, 'PG', 'v', 'Single', 'family', 'evening snacks', '3', '2', 'Furnished', 'Not Available', 'no', 'null', 4, '2022-05-05 09:00:22'),
(5, 'Residential', 'v', 'Quadruple', 'family', 'lunch', '2', '4', 'Furnished', 'Available', 'no', 'null', 5, '2022-05-05 09:01:40'),
(6, 'Residential', 'v', 'Triple', 'family', 'lunch', '4', '3', 'Furnished', 'Available', 'male', 'null', 5, '2022-05-05 09:10:45'),
(7, 'Residential', 'nv', 'Double', 'Professional', 'evening snacks', '4', '2', 'Unfurnished', 'Not Available', 'no', 'null', 6, '2022-05-05 09:19:46'),
(8, 'PG', 'v', 'Double', 'Student', 'breakfast', '2', '1', 'Unfurnished', 'Not Available', 'male', 'Null', 7, '2022-05-05 09:46:17'),
(9, 'Commercial', 'v', 'Quadruple', 'Student', 'breakfast', '4', '4', 'SemiFurnished', 'Available', 'male', 'Null', 8, '2022-05-05 09:47:58'),
(10, 'Co-working', 'v', 'Double', 'Student', 'breakfast', '5', '1', 'Unfurnished', 'Available', 'female', '', 9, '2022-05-05 10:20:39'),
(11, 'PG', 'nv', 'Quadruple', 'Student', 'evening snacks', '3', '3', 'SemiFurnished', 'Available', 'none', 'null', 10, '2022-05-05 11:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Landmark` varchar(100) NOT NULL,
  `House_type` varchar(100) NOT NULL,
  `BHK` int(11) NOT NULL,
  `Furnished` varchar(30) NOT NULL,
  `Rental_floor` varchar(10) NOT NULL,
  `Price` int(11) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`image1`, `image2`, `image3`, `image4`, `City`, `Address`, `Landmark`, `House_type`, `BHK`, `Furnished`, `Rental_floor`, `Price`, `DateTime`, `Id`) VALUES
('b8.jpeg', 's2.jpeg', 's3.jpeg', 's4.jpeg', 'Delhi', '78,Seva kunj niketan ,delhi', 'near bhagat man halwai', 'Residential', 3, 'Un-furnished', '2', 18000, '2022-05-05 00:22:10', 1),
('b3.jpeg', 's1.jpeg', 's5.jpeg', 's2.jpeg', 'Delhi', '56,Vasant Bihar, sector 5 ,Delhi', 'near pushpa medical', 'PG', 1, 'Furnished', '2', 12000, '2022-05-05 00:23:54', 2),
('b9.jpeg', 's1.jpeg', 's2.jpeg', 's9.jpg', 'Jaipur', '45,Surya Vihan society,Jaipur', 'near ajmer fort', 'Co-working', 2, 'Unfrurnished', '3', 4000, '2022-05-05 08:26:09', 3),
('b6.jpeg', 's6.jpeg', 's4.jpeg', 's10.jpg', 'Lucknow', '65,Sanidhya Township,Mk road,Lucknow', 'near raj medical', 'PG', 2, 'Furnished', '3', 12000, '2022-05-05 08:41:19', 4),
('b5.jpeg', 's1.jpeg', 's4.jpeg', 's7.jpg ', 'Chennai', '89,Aanada Bungalows,chinna swami road,Chennai', 'near Brijwasi royal Hotel', 'Residential', 3, 'Furnished', '4', 20000, '2022-05-05 08:43:39', 5),
('b7.jpeg', 's4.jpeg', 's9.jpg', 's5.jpeg', 'Agra', '47,yamuna jang,Agra', 'near vasant kunj', 'Residential', 2, 'Unfurnished', '4', 16000, '2022-05-05 08:46:13', 6),
('b10.jpeg', 's3.jpeg', 's1.jpeg', 's9.jpg', 'Mumbai', '82,padmagiri Nagar,Badra road,Mumbai', 'near shiva complex', 'PG', 1, 'Unfurnished', '2', 14000, '2022-05-05 08:47:13', 7),
('b3.jpeg', 's4.jpeg', 's12.jpg', 's13.jpg', 'Udaipur', '80,yamuna bihar,Udaipur', 'near Omkar residency', 'Commercial', 4, 'SemiFurnished', '4', 16000, '2022-05-05 08:50:47', 8),
('b5.jpeg', 's5.jpeg', 's6.jpeg', 's12.jpg', 'Agra', '80,jamuna jang,Agra', 'near lake', 'Co-working', 1, 'Unfurnished', '5', 3000, '2022-05-05 09:51:39', 9),
('b6.jpeg', 's6.jpeg', 's12.jpg', 's13.jpg', 'Delhi', '62,sai darshan,Delhi', 'near mx hospital', 'PG', 3, 'SemiFurnished', '3', 8000, '2022-05-05 09:53:52', 10),
('b7.jpeg', 's13.jpg', 's12.jpg', 's1.jpeg', 'Mathura', 'Panda Gali ,Dasvisha,Goverdhan', 'near lake', 'mz', 100, 'mz', '100', 10, '2022-05-05 09:56:56', 11);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `withfood` varchar(30) NOT NULL,
  `withoutfood` varchar(30) NOT NULL,
  `withfur` varchar(30) NOT NULL,
  `withoutfur` varchar(30) NOT NULL,
  `withsemi` varchar(30) NOT NULL,
  `rent5` varchar(30) NOT NULL,
  `parking` varchar(30) NOT NULL,
  `security` int(11) NOT NULL,
  `price` varchar(250) NOT NULL,
  `l_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `withfood`, `withoutfood`, `withfur`, `withoutfur`, `withsemi`, `rent5`, `parking`, `security`, `price`, `l_id`, `created_at`) VALUES
(1, '1500', '1400', '1200', '800', '900', 'parking', '1300', 2000, '18000', 1, '2022-05-05 00:27:13'),
(2, '1000', '1500', '1400', '1200', '1000', 'parking', '1800', 1000, '12000', 2, '2022-05-05 00:39:41'),
(3, '1200', '1000', '1200', '800', '1000', 'non-parking', '800', 1000, '4000', 3, '2022-05-05 08:12:59'),
(4, '1800', '1400', '1200', '850', '900', 'parking', '1800', 4000, '12000', 4, '2022-05-05 08:59:08'),
(5, '1800', '1400', '1200', '900', '1000', 'parking', '2000', 4000, '18000', 5, '2022-05-05 09:02:32'),
(6, '1800', '1500', '2000', '1200', '1600', 'parking', '3000', 4000, '20000', 5, '2022-05-05 09:09:53'),
(7, '1800', '1400', '1200', '850', '1000', 'non-parking', '1200', 2000, '16000', 6, '2022-05-05 09:18:09'),
(8, '1500', '1500', '2000', '800', '900', 'non-parking', '1800', 2000, '14000', 7, '2022-05-05 09:34:02'),
(9, '2000', '1400', '1200', '800', '1000', 'parking', '2000', 3000, '16000', 8, '2022-05-05 09:35:08'),
(10, '900', '800', '2000', '800', '1000', 'parking', '2000', 1200, '3000', 9, '2022-05-05 10:21:22'),
(11, '900', '1400', '1200', '900', '900', 'parking', '1200', 2000, '8000', 10, '2022-05-05 11:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'Sejal', 4, 'Good', 0),
(2, 'sejal Lavania', 3, 'Average', 0),
(3, 'simmi', 5, 'good', 0),
(5, 'khushi', 4, 'good', 0),
(6, 'Srashti', 3, 'Good Website', 1651688125),
(7, 'Varsha', 5, 'time saving and easy to use', 1651688181),
(8, 'Khushi', 5, 'Best Website\n', 1651731722),
(9, 'sejal Lavania', 4, 'Good', 1651735492);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `code`) VALUES
(16, 'Sejal Lavania', 'btbti19110_sejal@banasthali.in', 'f73a5323b122d1c0e063998f52fba161', ''),
(17, 'Sejal ', 'se@gmail.com', '9a15b2f417c1f2409fbb424be8d39aaa', 'bd317e85020dc55cc9d11e3c32186400'),
(18, 'Sejal Lavania', 'sejallavania13@gmail.com', '82f9b8e025bb2fb4cf6d42a74a3613be', '');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_details`
--

CREATE TABLE `tenant_details` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(14) NOT NULL,
  `Current_Address` varchar(100) NOT NULL,
  `Adhaar` varchar(12) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant_details`
--

INSERT INTO `tenant_details` (`Sno`, `Name`, `Email`, `Contact`, `Current_Address`, `Adhaar`, `Date`) VALUES
(1, 'Sejal', 'btbti19110_sejal@banasthali.in', '786678978', 'Niwai, Tonk', '7888-6827-28', '2022-05-05 11:53:53'),
(2, 'Sejal Lavania', 'sejallavania13@gmail.com', '8630013788', 'Niwai', '8976-5645-34', '2022-05-05 12:56:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- Indexes for table `multiple-images`
--
ALTER TABLE `multiple-images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `propdetails`
--
ALTER TABLE `propdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- Indexes for table `tenant_details`
--
ALTER TABLE `tenant_details`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `multiple-images`
--
ALTER TABLE `multiple-images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propdetails`
--
ALTER TABLE `propdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tenant_details`
--
ALTER TABLE `tenant_details`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
