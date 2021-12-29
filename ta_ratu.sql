-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2021 pada 16.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

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
-- Struktur dari tabel `muster`
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
-- Dumping data untuk tabel `muster`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `namaKapal`, `jabatan`, `shipping`, `created_at`, `foto`, `is_active`) VALUES
(1, 'Adminisitrator', 'admin', 'admin@admin.com', '025123456789', 'admin', '$2a$12$wKi09SJYo1QfY/V5SAI8jOyZ5OPsS305gQ3z504/I.y4MpcmqOzzy', 'Pelni', 'Kapten', 'Pelni', 1568689561, 'user.png', 1),
(23, 'Royyan', 'user', 'user@user.com', '123123123', 'user', '$2a$12$wKi09SJYo1QfY/V5SAI8jOyZ5OPsS305gQ3z504/I.y4MpcmqOzzy', 'Pelni', 'Kapten', 'Pelni', 1636535169, 'user.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `muster`
--
ALTER TABLE `muster`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `muster`
--
ALTER TABLE `muster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
