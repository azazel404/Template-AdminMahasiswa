-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2018 at 11:07 PM
-- Server version: 10.1.29-MariaDB-6
-- PHP Version: 7.0.27-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminkuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eskul` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`, `hobby`, `eskul`) VALUES
(21, 'asdasdasda', 'dasdasdasd', 'asdasdasd'),
(23, 'hendra', 'hendra', 'hendra'),
(24, 'x', 'z', 'z'),
(25, 'hendraz', 'dota2', 'dota2');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `alamat`, `tgl_lahir`) VALUES
(7, 'xcvvcba2313123', 'sfsdf234234', '0000-00-00'),
(8, '789797hjhkhkhj', 'zxczxchggjg', '2018-02-24'),
(9, 'fghfghghj435345', 'yrty4523123', '2018-02-14'),
(10, '34342asdas', '123213asdasd', '2018-02-14'),
(11, 'hendra gunawan', 'batam', '1970-01-01'),
(19, 'dadsad', 'asda', '2018-03-20'),
(26, 'dsadas', 'asdas', '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_angkatan`
--

CREATE TABLE `tahun_angkatan` (
  `id` int(11) NOT NULL,
  `tahun_angkatan` year(4) NOT NULL,
  `kode_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tahun_angkatan`
--

INSERT INTO `tahun_angkatan` (`id`, `tahun_angkatan`, `kode_nama`, `email`) VALUES
(6, 0000, '1231231', '312312312'),
(7, 2019, '12312312', '3123123'),
(8, 2019, '12312312', '3123213'),
(9, 0000, '13123123123', 'asdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(73, 'hendra', 'hendra@gmail.com', '7c60939f1ca7243e6ba4c1a33c28e1ffc0671844e555ba533cbbee47e1f53404'),
(74, 'ggwp', 'ggwp@gmail.com', '7c60939f1ca7243e6ba4c1a33c28e1ffc0671844e555ba533cbbee47e1f53404'),
(75, 'hendraganteng', 'hendraganteng@gmail.com', '7c60939f1ca7243e6ba4c1a33c28e1ffc0671844e555ba533cbbee47e1f53404'),
(76, 'ganteng', 'gunawan4041@gmail.com', 'b0145cac074d45faa18e77d4fbb31862cb55e038186e8fd20e1bda8f92dfa7e5'),
(77, 'tololololololol', 'asdasdasdasdasdas', 'kok kagak kebikin'),
(79, 'tolololololololasdasd', 'asdasdasdasdasdaasdasds', '6b6a8850d316270e121bc92608bc456f6d182f2601ca2e804a6b456c3da88e55'),
(81, 'kaimook48', 'kaimook48@gmail.com', '517bde6368d6140bf8b2d46f209e90bfe620e509eac172258e4f59a62663642a'),
(82, 'agusmaho', 'agusmaho@gmail.com', '37d4cc4e380b9d4dc8c42ac018dec3c2f58e65b118ef75dadc2d1125857491f6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_angkatan`
--
ALTER TABLE `tahun_angkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tahun_angkatan`
--
ALTER TABLE `tahun_angkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
