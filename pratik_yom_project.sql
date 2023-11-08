-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 01:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pratik_yom_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `Thought` text NOT NULL,
  `Name` text NOT NULL,
  `City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `Thought`, `Name`, `City`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.', 'Pratik R Ginoya', 'Surat,Gujarat'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! A sdfa asfwe  sd', 'Admin AA', 'Surat, Gujarat'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.', 'Demo Demo', 'Rajkot, Gujarat'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.', 'Admin A Amin', 'Vadodara, Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Short_Details` text NOT NULL,
  `Full_Details` text NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Title`, `Short_Details`, `Full_Details`, `Image`) VALUES
(1, 'Blogs 1', 'Nature, in the broadest sense, is the physical world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the onl', 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or \"essential qualities, innate disposition\", and in ancient times, literally meant \"birth\".[2] In ancient philosophy, natura is mostly used as the Lati', 0x352e6a7067),
(2, 'Blog 2', 'Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.', 'During the advent of modern scientific method in the last several centuries, nature became the passive reality, organized and moved by divine laws.[5][6] With the Industrial revolution, nature increasingly became seen as the part of reality deprived ', 0x31332e6a7067),
(3, 'Blog 3', 'Nature, in the broadest sense, is the physical world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the onl', 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or \"essential qualities, innate disposition\", and in ancient times, literally meant \"birth\".[2] In ancient philosophy, natura is mostly used as the Lati', 0x30312d706f7274666f6c696f2e6a7067),
(4, 'Blog 4', 'Nature, in the broadest sense, is the physical world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the onl', 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or \"essential qualities, innate disposition\", and in ancient times, literally meant \"birth\".[2] In ancient philosophy, natura is mostly used as the Lati', 0x32382e6a7067),
(5, 'Blog 5', 'Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.', 'During the advent of modern scientific method in the last several centuries, nature became the passive reality, organized and moved by divine laws.[5][6] With the Industrial revolution, nature increasingly became seen as the part of reality deprived ', 0x32352e6a7067),
(6, 'Blog 8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ips', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat ist', 0x32362e6a7067),
(7, 'Blog 9', 'Lorem ipsum dolor sit amet, consectetur . Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat ist', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat ist icing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit', 0x312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`ID`, `UserID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(6, 1, 'Pratik R', 'sadsad@g', 'Comment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.'),
(10, 4, 'Admin ', 'session@gmail.com', 'Comment', 'Nature, in the broadest sense, is the physical world or universe. \"Nature\" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the onl'),
(12, 2, 'Pratik R', 'session@gmail.com', 'COmment', 'Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.'),
(17, 1, 'Admin', 'sadsad@g', 'Comment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.'),
(18, 7, 'Admin A', 'session@gmail.com', 'Comment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `Name`, `Image`) VALUES
(3, 'Tour Wrist', 0x30372d636c69656e742e706e67),
(4, 'Share Point', 0x30382d636c69656e742e706e67),
(5, 'Hunter', 0x31302d636c69656e742e706e67),
(6, 'Inkling', 0x30332d636c69656e742e706e67),
(7, 'AO Smith', 0x31312d636c69656e742e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Subject`, `Message`, `status`) VALUES
(1, 'Pratik R', 'pratik.g@gmail.com', 'Inquiry', 'Inquiry about Web development', 1),
(2, 'Admin A', 'session@gmail.com', 'Comment', 'Inquiry about the full-stake development..', 1),
(3, 'Pratik R', 'session@gmail.com', 'Comment', 'demo', 1),
(4, 'Pratik Ginoya', 'pratikginoya194@gmai', 'Demo', 'Demo', 1),
(5, 'Pratik R', 'pratikginoya194@gmai', 'Demo', 'Demo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Admin', 'pratikginoya194@gmail.com', 'admin'),
(2, 'Pratik R', 'pratikginoya123@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Details` text NOT NULL,
  `Type` text NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`ID`, `Title`, `Details`, `Type`, `Image`) VALUES
(12, 'Image 1', 'Details of Image 1', 'nature', 0x352e6a7067),
(13, 'Image 2A', 'Details of Image 2A', 'wallpaper', 0x31352e6a7067),
(14, 'Image 3', 'Details of Image 3', 'nature', 0x31332e6a7067),
(15, 'Image 4', 'Details of Image 4', 'branding', 0x646f776e6c6f61642e706e67),
(17, 'Image 6', 'Details of Image 6', 'wallpaper', 0x32362e6a7067),
(18, 'Image 7', 'Details of Image 7', 'nature', 0x312e6a7067),
(19, 'Image 8', 'Details of Image 8', 'furniture', 0x32322e6a7067),
(20, 'Image 9', 'Details of Image 9', 'wallpaper', 0x31372e6a7067),
(21, 'Image 10', 'Details of Image 10', 'nature', 0x31382e6a7067),
(23, 'Image 12', 'Details of Image 12', 'wallpaper', 0x312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Title`, `Details`) VALUES
(2, 'Service 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat iste blanditiis assumenda dolorum ducimus ab.'),
(3, 'Service 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat iste blanditiis assumenda dolorum ducimus ab.'),
(4, 'Service 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat iste blanditiis assumenda dolorum ducimus ab.'),
(5, 'Service 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat iste blanditiis assumenda dolorum ducimus ab.'),
(7, 'Service 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat iste blanditiis assumenda dolorum ducimus ab.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Details` text NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `Title`, `Details`, `Image`) VALUES
(3, 'Slider 3', 'Details of Slider 3', 0x31352e6a7067),
(8, 'test', 'fdfs', 0x352e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
