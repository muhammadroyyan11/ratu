-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2022 at 11:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_ratu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_umum`
--

CREATE TABLE `data_umum` (
  `id_data_umum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaKapal` varchar(255) NOT NULL,
  `tandaPanggil` varchar(255) NOT NULL,
  `pemilikKapal` varchar(255) NOT NULL,
  `benderaNegara` varchar(255) NOT NULL,
  `pelabuhanTerdaftar` varchar(255) NOT NULL,
  `tahunPembangunan` varchar(255) NOT NULL,
  `tipeKapal` varchar(255) NOT NULL,
  `rutePelayaran` varchar(255) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL,
  `beratKotor` varchar(255) NOT NULL,
  `beratBersih` varchar(255) NOT NULL,
  `beratMati` varchar(255) NOT NULL,
  `panjangKapalKeseluruhan` varchar(255) NOT NULL,
  `panjangAntaraTegakLurus` varchar(255) NOT NULL,
  `lebarKapalMolded` varchar(255) NOT NULL,
  `tinggiMoldedHinggaDeck` varchar(255) NOT NULL,
  `bagianTercelup` varchar(255) NOT NULL,
  `tipeMesinKapal` varchar(255) NOT NULL,
  `kapasitasKargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_umum`
--

INSERT INTO `data_umum` (`id_data_umum`, `id_user`, `namaKapal`, `tandaPanggil`, `pemilikKapal`, `benderaNegara`, `pelabuhanTerdaftar`, `tahunPembangunan`, `tipeKapal`, `rutePelayaran`, `klasifikasi`, `beratKotor`, `beratBersih`, `beratMati`, `panjangKapalKeseluruhan`, `panjangAntaraTegakLurus`, `lebarKapalMolded`, `tinggiMoldedHinggaDeck`, `bagianTercelup`, `tipeMesinKapal`, `kapasitasKargo`) VALUES
(9, 2, 'Nusantara', 'NS', 'Royyan', 'Indonesia', 'Tj Perak', '2016', 'Tongkang', 'Jawa-Kalimantan', '-', '150', '180', '130', '150', '30', '20', '15', '10', 'Diesel', '20');

-- --------------------------------------------------------

--
-- Table structure for table `manif_kargo`
--

CREATE TABLE `manif_kargo` (
  `id_manif_kargo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaKapal` varchar(255) NOT NULL,
  `pelabAsal` varchar(255) NOT NULL,
  `ETD` varchar(255) NOT NULL,
  `pelabTujuan` varchar(255) NOT NULL,
  `ETA` varchar(255) NOT NULL,
  `namaPengirim` varchar(255) NOT NULL,
  `alamatPengirim` varchar(255) NOT NULL,
  `kontakPengirim` varchar(255) NOT NULL,
  `namaShipper` varchar(255) NOT NULL,
  `alamatShipper` varchar(255) NOT NULL,
  `kontakShipper` varchar(255) NOT NULL,
  `nomorKontainer` varchar(255) NOT NULL,
  `tipeKontainer` varchar(255) NOT NULL,
  `beratTara` varchar(255) NOT NULL,
  `beratBersih` varchar(255) NOT NULL,
  `komoditas` varchar(255) NOT NULL,
  `deskripsiMuatan` varchar(255) NOT NULL,
  `ukuranKontainer` varchar(255) NOT NULL,
  `bay` varchar(255) NOT NULL,
  `raw` varchar(255) NOT NULL,
  `tier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manif_kargo`
--

INSERT INTO `manif_kargo` (`id_manif_kargo`, `id_user`, `namaKapal`, `pelabAsal`, `ETD`, `pelabTujuan`, `ETA`, `namaPengirim`, `alamatPengirim`, `kontakPengirim`, `namaShipper`, `alamatShipper`, `kontakShipper`, `nomorKontainer`, `tipeKontainer`, `beratTara`, `beratBersih`, `komoditas`, `deskripsiMuatan`, `ukuranKontainer`, `bay`, `raw`, `tier`) VALUES
(2, 2, 'Nusantara', 'Tj Perak', '09.00', 'Gilimanuk', '20.00', 'Royyan', 'Bali', '123456', 'Ratu', 'Malang', '123456', '12', 'dry', '100', '150', 'Non DG', 'blablabla', '40', '13', '14', '15');

-- --------------------------------------------------------

--
-- Table structure for table `muster`
--

CREATE TABLE `muster` (
  `id` int(11) NOT NULL,
  `rank` varchar(128) NOT NULL,
  `fire` varchar(128) NOT NULL,
  `personal` varchar(128) NOT NULL,
  `oil` varchar(128) NOT NULL,
  `man` varchar(128) NOT NULL,
  `emergency` varchar(128) NOT NULL,
  `flooding` varchar(128) NOT NULL,
  `electric` varchar(128) NOT NULL,
  `collusion` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muster`
--

INSERT INTO `muster` (`id`, `rank`, `fire`, `personal`, `oil`, `man`, `emergency`, `flooding`, `electric`, `collusion`) VALUES
(1, 'MASTER', 'Overall Command', 'Overall Command', 'Overall Command', 'Overall Command', 'Overall Command', 'Overall Command', 'Overall Command', 'Overall Command'),
(2, '3RD OFFICER', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message', 'Assist Master/Navigation Communication,Record All event, broadcast message'),
(3, 'AB 1', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)', 'At Bridge Relieve A/B on watch (Emg.Steering raise NUC signal)'),
(4, 'CHIEF OFFICER', 'Overall incharge of Emergency Team', 'Overall incharge of Emergency Team', 'Overall incharge of Emergency Team', 'Overall incharge of Emergency Team', 'Stand by at Forward Station', 'Visual Inspection of Damage & calculate ship\'s stability', 'Stand By Forward Station', 'Check Any Damage to Ship, cargo & pollution risk'),
(5, '2ND ENGINEER', 'Boundary Cooling At vicinity', 'Evacuate Victim to Safe location', 'Stop all Pumping System', 'Incharge of Rescue boat engine', 'Overall incharge at emerg.steering room', 'Prepare Pumping System', 'Report Status of M/E & A/E', 'Prepare Ballast & Bilge Pump'),
(6, '3RD ENGINEER', 'Prepare Fire Pump', 'Rig Extra Supply & Exhaust Fan at vicinity', 'Portable Pump', 'Incharge of Rescue Boat Davit', 'Starting Additional Generator', 'Prepare Emergency Generator', 'Check & Rectify the Fault', 'Prepare Emergency Generator'),
(7, 'BOATSWAIN', 'BA Set with Fireman Outfit', 'BA Set & Life Line', 'Clean up Spillage & pollution', 'Prepare Rescue Boat', 'Stand by at Forward Station', 'Sounding All Deck Tank', 'Stand by for Anchore', 'Stand by for Anchore'),
(8, 'AB 2', 'Assist Bosun (BA Set with Fireman Outfit)', 'BA Set & Life Line', 'Clean up Spillage & pollution', 'Prepare Line Throwing Apparatus', 'Assist Bosun (Stand by at Forward Station)', 'Assist Bosun (Sounding All Deck Tank)', 'Assist Bosun (Stand by for Anchore)', 'Assist Bosun (Stand by for Anchore)'),
(9, 'AB 3', 'Portable Fire Extinguisher', 'Assist Prepare BA Set', 'Clean up Spillage & Pollution', 'Additional Look Out on The bridge', 'Assist C/O as Require', 'Assist C/O', 'Additional Look Out The Bridge', 'Sounding All Deck Tank'),
(10, 'OILER 1', 'Assist 2/E (Boundary Cooling At vicinity)', 'Assist 3/E (Rig Extra Supply & Exhaust Fan at vicinity)', 'Assist 3/E (Portable Pump)', 'Assist 2/E (Incharge of Rescue boat engine)', 'Assist 3/E (Starting Additional Generator)', 'Assist 2/E (Prepare Pumping System)', 'Assist 3/E (Check & Rectify the Fault)', 'Assist 3/E (Prepare Emergency Generator)'),
(11, 'CHIEF ENGINEER', 'Overall Incharge of E/R, Provide service as required', 'E/R Team Leader,Provide as required', 'E/R Team Leader,Provide as required', 'E/R Team Leader,Provide as required', 'Overrall Incharge of E/R, service & control, prepare for maneuver', 'E/R Team Leader,Provide as required', 'E/R Team Leader,Provide as required', 'E/R Team Leader,Provide as required'),
(12, '4TH ENGINEER', 'Shut off Ventilation Control & electrical circuit', 'Isolate all Electric Circuit', 'Shut Down all Over board discharge', 'Assist C/E for maneuver', 'Assist as required Emergency steering', 'Isolate all opening Ducts Ventilator & cut of power supply in the vicinity', 'Check & Rectify the fault', 'Portable Pump'),
(13, 'OILER 2', 'Starting Additional generator', 'Removal of Casualty', 'Shut Down all valve', 'Additional Look out on Deck', 'Assist C/E', 'E/R Fuel Tank Sounding', 'Shut Down all valve', 'Shut all Side Valve'),
(14, 'OILER 3', 'Assist 4/E (Shut off Ventilation Control & electrical circuit)', 'Assist 4/E (Isolate all Electric Circuit)', 'Assist 4/E (E/R Team Leader,Provide as required)', 'Assist in E/R as Require', 'Assist 4/E as required', 'E/R Bilge Sounding', 'Assist 4/E (Check & Rectify the fault)', 'Assist 4/E (Portable Pump)'),
(15, '2ND OFFICER', 'Incharge for Medical Treatment', 'Incharge for Medical Treatment', 'Assist in Containment & clean up', 'Provide First Aid, prepare to receive survivor', 'Communicate Steering Gear Room-Bridge Read Rudder Indicator', 'Prepare Life Boat for abandoning', 'Proceed to Bridge & assist as Directed', 'Prepare Life Boat for abandoning'),
(16, 'CHIEF COOK', 'Provide First AID, provision & stretcher', 'First AID & Oxygen resuscitator', 'Clean Up Material', 'First AID & Oxygen resuscitator', 'Assist 2/O as Require (Communicate Steering Gear Room-Bridge Read Rudder Indicator)', 'First AID & Extra Provision', 'Stand by & Assist as required', 'Assist 2/O (Prepare Life Boat for abandoning)'),
(17, 'STEWARD', 'Assist C/COOK (Provide First AID, provision & stretcher)', 'Strecher & Rope', 'Clean Up Material', 'Stretcher & Rope', 'Assist 2/O as Require (Communicate Steering Gear Room-Bridge Read Rudder Indicator)', 'Assist C/COOK (First AID & Extra Provision)', 'Assist C/COOK (Stand by & Assist as required)', 'Assist 2/O (Prepare Life Boat for abandoning)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaKapal` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `namaKapal`, `jabatan`, `shipping`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '0213456789', 'admin', '$2y$10$Jhb9pv1KRnDlZ18ZNaL24.FPdGEzu7ER41w4Yh0d5s8DqZBt8BsEG', 'coba', 'Kapten', 'Pelni', 1568689561, 'user.png', 1),
(2, 'Royyan', 'user', 'royyan@user.com', '0781289379813', 'user', '$2y$10$o2T4VCYeZCbnbIuX7jn0.u/DU6gxRjqXAMCKTPYAKf8n.SAvJuHWG', 'Pelni', 'Kapten', 'Pelni', 1636535169, 'user.png', 1),
(3, 'ratu fernando', 'ratufernando', 'ratub@gmail.com', '0812345678', 'user', '$2y$10$3.M5bZlZYn9htUPvewRib.W7EKPRyHsGhh14crdoBySCMVw2cugfa', 'Kapal Api', 'Kapten', 'JNE', 1642407299, 'user.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_umum`
--
ALTER TABLE `data_umum`
  ADD PRIMARY KEY (`id_data_umum`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `manif_kargo`
--
ALTER TABLE `manif_kargo`
  ADD PRIMARY KEY (`id_manif_kargo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `muster`
--
ALTER TABLE `muster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_umum`
--
ALTER TABLE `data_umum`
  MODIFY `id_data_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manif_kargo`
--
ALTER TABLE `manif_kargo`
  MODIFY `id_manif_kargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `muster`
--
ALTER TABLE `muster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_umum`
--
ALTER TABLE `data_umum`
  ADD CONSTRAINT `data_umum_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manif_kargo`
--
ALTER TABLE `manif_kargo`
  ADD CONSTRAINT `manif_kargo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
