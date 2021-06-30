-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 11:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengaduan`
--

CREATE TABLE `data_pengaduan` (
  `id` int(11) NOT NULL,
  `pengaduan` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengaduan`
--

INSERT INTO `data_pengaduan` (`id`, `pengaduan`, `nama`) VALUES
(6, 'saya yang telah memakan makanan bakso', 'aaa'),
(7, 'Sebanyak 1000 sopir angkutan kota di Kota Medan dan Kabupaten Deli Serdang mendukung Joko Widodo untuk kembali maju dalam pertarungan memperebutkan kursi Presiden Republik Indonesia. Aksi dukungan tersebut disampaikan dengan menggelar konvoi dengan mengendarai  armada mereka dimulai dari titik nol Kota Medan di Lapangan Merdeka Medan menuju Lapangan Garuda Tanjung Morawa, Deliserdang, Sumatera Utara, Selasa 18 September 2018. Dengan rute konvoi sejauh 20 kilometer. Dukungan tersebut dideklarasikan Ketua Kesatuan Pemilik dan Sopir Angkutan (Kesper) Sumut, Israel Situmeang; Ketua Organisasi Angkutan Darat (Organda) Sumut, Haposan Sialagan, serta tokoh masyarakat Sumut lainnya seperti Gelmok Samosir.\r\n\r\nSelain itu, dukung disampaikan juga oleh tiga mantan pemain tim sepakbola PSMS Medan, Jampi Hutauruk, Parlin Siagian, dan Amrus Sibadarida. Aksi deklarasi dukungan kepada Jokowi mengusung Konvoi Kerakyatan yang melibatkan serta keluarga para sopir dan pengusaha angkutan itu, dilakukan sebagai bentuk dukungan masyarakat transportasi di Sumatera Utara terhadap Jokowi. \"Hari ini kami semua, sopir, pengusaha angkot dan keluarga kami, serta para penumpang kami, menyatakan dukungan kami kepada bapak Joko Widodo untuk kembali maju sebagai Presiden. Ini bentuk kecintaan kami kepada Pak Jokowi. Kami untuk Jokowi 2 Periode,\" kata Israel Situmeang dalam orasi deklarasinya disambut dengan tepukan tangan. Israel menilai Jokowi layak didukung kembali dengan melihat kinerjanya dalam pembangunan infrastruktur untuk rakyat, seperti dibangunnya jalan tol Binjai-Tebingtinggi di Sumatera Utara, yang telah memangkas jarak tempuh dan efisiensi transportasi yang begitu besar di Sumut.\r\n\r\n\"Kami tidak paham soal gonjang-ganjing politik. Yang terpenting buat kami bagaimana kami lebih mudah cari makan. Selama ini kami sangat terbantu dengan program-program Pak Jokowi. Dan hari ini kami menunjukkan kecintaan kami kepada beliau dan juga kepada Negara Kesatuan Republik Indonesia ini. Kami ingin dia (Jokowi) dua periode,\" tutur Israel. Meski mereka (para sopir) mendukung, para sopir tersebut juga mengkritik soal pelayanan publik. Namun, Israel mengatakan sebagai catatan untuk diperbaiki lagi ke depannya. Agar pelayanan publik dapat dirasakan oleh masyarakat sendiri.\r\n\r\n\"Tapi memang masih ada yang menjadi catatan kami dalam pemerintahan Pak Jokowi. Yakni soal perizinan yang masih sulit dan belum sesuai janji Pak Jokowi. Ini yang kita dorong agar bisa diselesaikan Pak Jokowi di periode selanjutnya,\" kata Israel. Israel menyebutkan pihaknya juga punya catatan selama masa periode Jokowi untuk regulasi tranportasi online dan jterminal liar. Mereka melihat ini sudah diupayakan dan hanya tinggal menunggu koordinasi dari Pemerintah Daerah dan Kepolisian.\r\n\r\n\"Secara prinsip, kebijakan pemerintahan Jokowi sudah memihak pada kita pada sopir dan pengusaha angkuran,\" kata Israel. ', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengaduan`
--
ALTER TABLE `data_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengaduan`
--
ALTER TABLE `data_pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
