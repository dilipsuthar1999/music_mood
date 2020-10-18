-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 06:18 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_mood`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `song` varchar(500) DEFAULT NULL,
  `singer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `name`, `image`, `song`, `singer`) VALUES
(11, 'Allah Waariyan', 'http://localhost/music_mood/assest/upload/song23.png', 'http://localhost/music_mood/assest/upload/Allah_Waariyan.mp3', 'Yaariyan'),
(15, 'Whistle Baja', 'http://localhost/music_mood/assest/upload/song1.png', 'http://localhost/music_mood/assest/upload/01_-_Whistle_Baja_(Heropanti)_FreshMaza_Info.mp3', 'Sajid-Wajid'),
(16, 'Teri Mere Kahaani', 'http://localhost/music_mood/assest/upload/song3.png', 'http://localhost/music_mood/assest/upload/01_-_Teri_Mere_Kahaani_Songspk_LINK.mp3', 'Chirantan Bhatt'),
(17, 'Aao Raja', 'http://localhost/music_mood/assest/upload/song31.png', 'http://localhost/music_mood/assest/upload/0_Aao_Raja_(Gabbar_Is_Back)_Yo_Yo_Honey_Singh_190Kbps.mp3', 'Yo Yo Honey Singh, Neha Kakkar'),
(19, 'Sukh Ke Sab Saathi', 'http://localhost/music_mood/assest/upload/song4.png', 'http://localhost/music_mood/assest/upload/01_SUKH_KE_SAB_SAATHI1.mp3', 'Vipin Sachdeva'),
(20, 'Sun Saathiya', 'http://localhost/music_mood/assest/upload/song41.png', 'http://localhost/music_mood/assest/upload/Sun_Saathiya_-_ABCD_-_Any_Body_Can_Dance_2(AllMp3Song_com).mp3', 'Divya Kumar, Priya Saraiya'),
(21, 'Jeena Jeena', 'http://localhost/music_mood/assest/upload/song5.png', 'http://localhost/music_mood/assest/upload/Jeena_Jeena.mp3', 'Sachi-Jagar'),
(22, 'Pehli Mohabbat', 'http://localhost/music_mood/assest/upload/song6.png', 'http://localhost/music_mood/assest/upload/Pehli_Mohabbat.mp3', 'Raw Star'),
(23, 'Wafa Ne Bewafai', 'http://localhost/music_mood/assest/upload/song7.png', 'http://localhost/music_mood/assest/upload/Wafa_Ne_Bewafai.mp3', 'Arijit Singh, Neeti Mohan, Suzanne DMello'),
(24, 'Kabira', 'http://localhost/music_mood/assest/upload/song8.png', 'http://localhost/music_mood/assest/upload/YJHD.mp3', 'Pritam');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `email` varchar(100) DEFAULT NULL,
  `id` int(100) NOT NULL COMMENT 'song_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`email`, `id`) VALUES
('user@gmail.com', 15),
('music@gmail.com', 19),
('music@gmail.com', 21),
('music@gmail.com', 23),
('music@gmail.com', 24);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `userid` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `create_acc_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`userid`, `email`, `password`, `create_acc_time`) VALUES
(1, 'music@gmail.com', '18d6769919266cd0bd6cd78aa405d5d0', '2020-10-05 17:12:00'),
(11, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2020-10-07 15:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
