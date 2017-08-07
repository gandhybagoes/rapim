-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Agu 2017 pada 09.29
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rapim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_berkas`
--

CREATE TABLE IF NOT EXISTS `data_berkas` (
`id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `waktu_upload` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_berkas`
--

INSERT INTO `data_berkas` (`id`, `nama_file`, `waktu_upload`) VALUES
(10, '147396455057daea06a275d.jpg', 'August 7, 2017, 1:30 pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_undangan`
--

CREATE TABLE IF NOT EXISTS `data_undangan` (
`id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `band` varchar(5) NOT NULL,
  `lokasi_kerja` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `waktu_absen` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_undangan`
--

INSERT INTO `data_undangan` (`id`, `nik`, `nama`, `posisi`, `band`, `lokasi_kerja`, `unit`, `kota`, `telepon`, `kategori`, `foto`, `status`, `waktu_absen`, `alamat`) VALUES
(1, '660338', 'SUPARWIYANTO, IR.', 'EVP TELKOM REGIONAL V', 'I', 'Telkom Regional V', 'Kantor Telkom Regional V', 'Surabaya', '660338', 'Pegawai_Telkom', 'images/660338.jpg', 'hadir', 'August 7, 2017, 1:29 pm', ''),
(2, '680359', 'DJATMIKO', 'DEPUTY EVP MARKETING', 'I', 'Marketing', 'Kantor Telkom Regional V', 'Surabaya', '680359', 'Pegawai_Telkom', 'images/680359.jpg', 'hadir', 'August 7, 2017, 1:32 pm', ''),
(3, '670169', 'RIJANTO UTOMO, RADEN, IR', 'DEPUTY EVP INFRASTRUCTURE', 'I', 'Infrastructure', 'Kantor Telkom Regional V', 'Surabaya', '670169', 'Pegawai_Telkom', '', 'hadir', 'August 7, 2017, 1:37 pm', ''),
(4, '670155', 'SETYA HERMAWAN', 'SM BUSINESS PLANNING & PERFORMANCE', 'II', 'Business Planning & Performance', 'Kantor Telkom Regional V', 'Surabaya', '08121101055', 'Pegawai_Telkom', 'images/670155.jpg', 'hadir', 'August 7, 2017, 1:58 pm', ''),
(5, '611731', 'MOHAMAD AKBAN KUKUH WARGONO', 'SM PAYMENT COLLECTION & FINANCE', 'II', 'Payment Collection & Finance', 'Kantor Telkom Regional V', 'Surabaya', '611731', 'Pegawai_Telkom', 'images/611731.jpg', 'hadir', 'August 7, 2017, 2:27 pm', ''),
(6, '642219', 'YUSTISIANTO', 'SM HUMAN CAPITAL', 'II', 'Human Capital', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(7, '621402', 'SAIFUL AZHAR', 'SM GENERAL AFFAIR', 'II', 'General Affair', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(8, '651166', 'NOVYAN BALIA,IR', 'ENGINE TEAM BP II', 'II', 'Engine Team Group', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(9, '660414', 'MOH.ANWAR', 'PRINCIPAL EXPERT PREMIUM CLUSTER & APARTEMENT', 'II', 'Engine Team Group', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(10, '720347', 'SAMSURIZAL ARUNI,ST', 'PRINCIPAL EXPERT PREMIUM CLUSTER & APARTEMENT', 'II', 'Engine Team Group', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(11, '650951', 'IMAM MOENCAR', 'OSM REG ENTERPRISE , GOVERNMENT & BIZ SERV', 'II', 'Reg Enterprise , Government & Business Serv', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(12, '730527', 'HENDRO SETYO BUDI', 'SM CONSUMER  MARKETING', 'II', 'Consumer Care & Marketing', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(13, '720152', 'DEDDY SUHENDRY', 'OSM REGIONAL OPERATION CENTER', 'II', 'Regional Operation Center', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(14, '623027', 'ROESTANTO EKA WIDJAJA, IR, MM.', 'OSM MANAGED SERVICE OPERATION', 'II', 'Managed Service Operation', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(15, '680085', 'SINUNG WIBOWO', 'OSM PLANNING ENGINEERING & DEPLOYMENT', 'II', 'Engineering & Deployment', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(16, '660239', 'AGENG HARI MARHENDRA, IR', 'OSM REGIONAL NETWORK OPERATION', 'II', 'Regional Network Operation', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(17, '720099', 'MUHAMAD NASRUN IHSAN', 'GM WITEL SURABAYA', 'II', 'WITEL Surabaya', 'WITEL Surabaya', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(18, '680587', 'SOEMARJANTO', 'GM WITEL KEDIRI', 'II', 'WITEL Kediri', 'WITEL Kediri', 'Kediri', '', 'Pegawai_Telkom', '', '', '', ''),
(19, '720114', 'PUTRO DEWANTO', 'GM WITEL GRESIK & MADURA', 'II', 'WITEL Gresik & Madura', 'WITEL Gresik & Madura', 'Gresik', '', 'Pegawai_Telkom', '', '', '', ''),
(20, '730073', 'SETYAWAN NUGROHO,ST', 'GM WITEL PASURUAN', 'II', 'WITEL Pasuruan', 'WITEL Pasuruan', 'Pasuruan', '', 'Pegawai_Telkom', '', '', '', ''),
(21, '633020', 'BAGUS MUHARRANTO, IR.', 'GM WITEL MADIUN', 'II', 'WITEL Madiun', 'WITEL Madiun', 'Madiun', '', 'Pegawai_Telkom', '', '', '', ''),
(22, '642131', 'JUAKSA SINAGA', 'GM WITEL MALANG', 'II', 'WITEL Malang', 'WITEL Malang', 'Malang', '', 'Pegawai_Telkom', '', '', '', ''),
(23, '710372', 'DJOKO SRIE HANDONO,ST', 'GM WITEL SIDOARJO', 'II', 'WITEL Sidoarjo', 'WITEL Sidoarjo', 'Sidoarjo', '', 'Pegawai_Telkom', '', '', '', ''),
(24, '660121', 'M. AMIN JAUHARI', 'GM WITEL JEMBER', 'II', 'WITEL Jember', 'WITEL Jember', 'Jember', '', 'Pegawai_Telkom', '', '', '', ''),
(25, '700466', 'I KOMANG WIDNYANA KARANG', 'GM WITEL DENPASAR', 'II', 'WITEL Denpasar', 'WITEL Denpasar', 'Denpasar', '', 'Pegawai_Telkom', '', '', '', ''),
(26, '700653', 'I NYOMAN HARDIANA ARTHA,ST', 'GM WITEL SINGARAJA', 'II', 'WITEL Singaraja', 'WITEL Singaraja', 'Singaraja', '', 'Pegawai_Telkom', '', '', '', ''),
(27, '680584', 'BONIFATIUS HENDRIANTO,ST', 'GM WITEL NTB', 'II', 'WITEL Nusa Tenggara Barat', 'WITEL Nusa Tenggara Barat', 'Mataram', '', 'Pegawai_Telkom', '', '', '', ''),
(28, '730264', 'ISMONO ADI JATMIKO, RADEN', 'GM WITEL NTT', 'II', 'WITEL Nusa Tenggara Timur', 'WITEL Nusa Tenggara Timur', 'Kupang', '', 'Pegawai_Telkom', '', '', '', ''),
(29, '651035', 'I GEDE KOMANG BAGYARTA ADNYANA', 'MGR PLAN & BUDGET CONTROL', 'III', 'Plan & Budget Control', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(30, '720163', 'SUGENG WIYOGOTO', 'MGR PERFORMANCE & WAR ROOM', 'III', 'Performance & War Room', 'Kantor Telkom Regional V', 'Surabaya', '720163', 'Pegawai_Telkom', '', '', '', ''),
(31, '800022', 'SITI KHOLIFAH', 'MGR QUALITY & CHANGE MANAGEMENT', 'III', 'Quality & Change Management', 'Kantor Telkom Regional V', 'Surabaya', '08113591099', 'Pegawai_Telkom', 'images/800022.jpg', 'hadir', 'August 7, 2017, 1:51 pm', ''),
(32, '710368', 'LILIK RETNO AGUSTININGSIH,ST', 'OSM CONSUMER CARE', 'III', 'Customer Care', 'WITEL Surabaya', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(33, '940023', 'BIMA PUTRA ARI WIJAYA', 'OFF 3 LEGAL & REGULATORY AFFAIR', 'VI', 'Legal & Regulatory Affair', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(34, '650572', 'EDWARD HENDRA LIMARIN S.', 'MGR SECURITY AND SAFETY', 'III', 'Sas', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(35, '830107', 'DIAN ANNISA', 'OFF 1 PUBLIC RELATION', 'IV', 'Sekdiv & Public Relation', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(36, '642213', 'BAGUS HERDIJANTO', 'GM REGIONAL ACCESS OPERATION', 'II', 'REGIONAL ACCESS OPERATION', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(37, '660438', 'WASITO ADI', 'SM REGIONAL WHOLESALE SERVICE', 'II', 'REGIONAL WHOLESALE SERVICE', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(38, '730450', 'PRASETYO WIDODO,ST', 'KAKANDATEL BANGKALAN', 'III', 'KANDATEL Bangkalan', 'WITEL Gresik & Madura', 'Bangkalan', '', 'Pegawai_Telkom', '', '', '', ''),
(39, '730382', 'OKA INDRYATNO, ST, MM', 'KAKANDATEL BANYUWANGI', 'III', 'KANDATEL Banyuwangi', 'WITEL Jember', 'Banyuwangi', '', 'Pegawai_Telkom', '', '', '', ''),
(40, '710460', 'SYAMSUL BACHRI', 'KAKANDATEL BATU', 'III', 'KANDATEL Batu', 'WITEL Malang', 'Batu', '', 'Pegawai_Telkom', '', '', '', ''),
(41, '670293', 'FIRMAN AROEBOESMAN', 'KAKANDATEL BIMA', 'III', 'KANDATEL Bima', 'WITEL Nusa Tenggara Barat', 'Bima', '', 'Pegawai_Telkom', '', '', '', ''),
(42, '740309', 'ARIF NUGROHO', 'KAKANDATEL BLITAR', 'III', 'KANDATEL Blitar', 'WITEL Kediri', 'Blitar', '', 'Pegawai_Telkom', '', '', '', ''),
(43, '650854', 'MULYAWAN', 'KAKANDATEL BOJONEGORO', 'III', 'KANDATEL Bojonegoro', 'WITEL Gresik & Madura', 'Bojonegoro', '', 'Pegawai_Telkom', '', '', '', ''),
(44, '740136', 'IMAM SAMROZI', 'KAKANDATEL BONDOWOSO', 'III', 'KANDATEL Bondowoso', 'WITEL Jember', 'Bondowoso', '', 'Pegawai_Telkom', '', '', '', ''),
(45, '740129', 'I WAYAN GDE SUKA WIJAYA', 'KAKANDATEL GIANYAR', 'III', 'KANDATEL Gianyar', 'WITEL Singaraja', 'Singaraja', '', 'Pegawai_Telkom', '', '', '', ''),
(46, '670192', 'TJATUR RESMI BUDI UTOMO', 'KAKANDATEL JOMBANG', 'III', 'KANDATEL Jombang', 'WITEL Sidoarjo', 'Jombang', '', 'Pegawai_Telkom', '', '', '', ''),
(47, '800018', 'AJI SETYO RAHARJO', 'KAKANDATEL KEPANJEN', 'III', 'KANDATEL Kepanjen', 'WITEL Malang', 'Kepanjen', '', 'Pegawai_Telkom', '', '', '', ''),
(48, '730271', 'BAHTIAR BARID,ST', 'KAKANDATEL LAMONGAN', 'III', 'KANDATEL Lamongan', 'WITEL Gresik & Madura', 'Lamongan', '', 'Pegawai_Telkom', '', '', '', ''),
(49, '720455', 'HENRY SOEDIDARMA', 'KAKANDATEL LUMAJANG', 'III', 'KANDATEL Lumajang', 'WITEL Pasuruan', 'Lumajang', '', 'Pegawai_Telkom', '', '', '', ''),
(50, '610013', 'LIBERATO DOS REIS SORIANO', 'KAKANDATEL MAUMERE', 'III', 'KANDATEL Maumere', 'WITEL Nusa Tenggara Timur', 'Maumere', '', 'Pegawai_Telkom', '', '', '', ''),
(51, '740241', 'A. IDHAM CHALID', 'KAKANDATEL MOJOKERTO', 'III', 'KANDATEL Mojokerto', 'WITEL Sidoarjo', 'Mojokerto', '', 'Pegawai_Telkom', '', '', '', ''),
(52, '730476', 'YUSUF BUDI MULIA', 'KAKANDATEL NGANJUK', 'III', 'KANDATEL Nganjuk', 'WITEL Kediri', 'Nganjuk', '', 'Pegawai_Telkom', '', '', '', ''),
(53, '730534', 'ARIEF TRIWIBOWO', 'KAKANDATEL NGAWI', 'III', 'KANDATEL Ngawi', 'WITEL Madiun', 'Ngawi', '', 'Pegawai_Telkom', '', '', '', ''),
(54, '740256', 'DONY EKO ARIESANTO, M.ENG', 'KAKANDATEL PAMEKASAN', 'III', 'KANDATEL Pamekasan', 'WITEL Gresik & Madura', 'Pamekasan', '', 'Pegawai_Telkom', '', '', '', ''),
(55, '740038', 'INDRATMOKO SUSANTO', 'KAKANDATEL PANDAAN', 'III', 'KANDATEL Pandaan', 'WITEL Sidoarjo', 'Pandaan', '', 'Pegawai_Telkom', '', '', '', ''),
(56, '720525', 'J. DONY AGUS TATANG IRAWAN', 'KAKANDATEL PONOROGO', 'III', 'KANDATEL Ponorogo', 'WITEL Madiun', 'Ponorogo', '', 'Pegawai_Telkom', '', '', '', ''),
(57, '720397', 'LOUIS SRI LESTARI,ST', 'KAKANDATEL PROBOLINGGO', 'III', 'KANDATEL Probolinggo', 'WITEL Pasuruan', 'Probolinggo', '', 'Pegawai_Telkom', '', '', '', ''),
(58, '720145', 'WAHYU SETIYO UTOMO', 'KAKANDATEL SITUBONDO', 'III', 'KANDATEL Situbondo', 'WITEL Jember', 'Situbondo', '', 'Pegawai_Telkom', '', '', '', ''),
(59, '650166', 'BENYAMIN HAU RADJA', 'KAKANDATEL SUMBA', 'III', 'KANDATEL Sumba', 'WITEL Nusa Tenggara Timur', 'Kupang', '', 'Pegawai_Telkom', '', '', '', ''),
(60, '641402', 'RAFAUL UMAR', 'KAKANDATEL SUMBAWA', 'III', 'KANDATEL Sumbawa', 'WITEL Nusa Tenggara Barat', 'Sumbawa', '', 'Pegawai_Telkom', '', '', '', ''),
(61, '631087', 'DJODI SUPRIATNO, SE.', 'KAKANDATEL SUMENEP', 'III', 'KANDATEL Sumenep', 'WITEL Gresik & Madura', 'Sumenep', '', 'Pegawai_Telkom', '', '', '', ''),
(62, '750024', 'AGUS WIDHIARSANA', 'KAKANDATEL TABANAN', 'III', 'KANDATEL Tabanan', 'WITEL Singaraja', 'Singaraja', '', 'Pegawai_Telkom', '', '', '', ''),
(63, '631932', 'OEMAR POERNOMO', 'KAKANDATEL TUBAN', 'III', 'KANDATEL Tuban', 'WITEL Gresik & Madura', 'Tuban', '', 'Pegawai_Telkom', '', '', '', ''),
(64, '720370', 'MUSTADI,ST', 'KAKANDATEL TULUNG AGUNG', 'III', 'KANDATEL Tulung Agung', 'WITEL Kediri', 'Tulung Agung', '', 'Pegawai_Telkom', '', '', '', ''),
(65, '640292', 'ENDANG DWI YUNI ASTUTI', 'OFF 1 SECRETARY', 'IV', 'Sekdiv & Public Relation', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(66, '720432', 'IVONE ANDAYANI', 'MGR SEKDIV & PUBLIC RELATION', 'III', 'Sekdiv & Public Relation', 'Kantor Telkom Regional V', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(67, '730444', 'AGUS SATRIAWAN', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Kediri', 'Kediri', '', 'Pegawai_Telkom', '', '', '', ''),
(68, '641509', 'AGUS RIYANTOWO', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Gresik & Madura', 'Gresik', '', 'Pegawai_Telkom', '', '', '', ''),
(69, '730322', 'WIJANARKO,ST', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Pasuruan', 'Pasuruan', '', 'Pegawai_Telkom', '', '', '', ''),
(70, '730226', 'BAYU AJI WIDODO', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Madiun', 'Madiun', '', 'Pegawai_Telkom', '', '', '', ''),
(71, '630774', 'SUSILO, SE', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Malang', 'Malang', '', 'Pegawai_Telkom', '', '', '', ''),
(72, '730077', 'YUDHA BHAKTI DWI NUGROHO,ST', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Sidoarjo', 'Sidoarjo', '', 'Pegawai_Telkom', '', '', '', ''),
(73, '720429', 'AHMAD FAZAL MUZAKKI', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Jember', 'Jember', '', 'Pegawai_Telkom', '', '', '', ''),
(74, '631681', 'I NYOMAN WINAYA', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Singaraja', 'Singaraja', '', 'Pegawai_Telkom', '', '', '', ''),
(75, '740021', 'SYARIFUDDIN', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Nusa Tenggara Barat', 'Mataram', '', 'Pegawai_Telkom', '', '', '', ''),
(76, '680173', 'SALVINUS, IR', 'MGR CONSUMER SERVICE', 'III', 'Consumer Service', 'WITEL Nusa Tenggara Timur', 'Kupang', '', 'Pegawai_Telkom', '', '', '', ''),
(77, '650657', 'ISNO WIBOWO MURHADI', 'MGR HOME SERVICE 3', 'III', 'Personal Service', 'WITEL Surabaya', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(78, '700411', 'SABARUDIN', 'MGR HOME SERVICE 2', 'III', 'Home Service 2', 'WITEL Surabaya', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(79, '740291', 'SUTRISMANTO', 'MGR HOME SERVICE 1', 'III', 'Access & Service Operation 1', 'WITEL Surabaya', 'Surabaya', '', 'Pegawai_Telkom', '', '', '', ''),
(80, '770065', 'NI LUH PUTU PUTRI MAHARINI, ST.MM', 'MGR HOME SERVICE 1', 'III', 'Home Service', 'WITEL Denpasar', 'Denpasar', '', 'Pegawai_Telkom', '', '', '', ''),
(82, '730462', 'I GUSTI GDE DONNY WARDHANA', 'MGR PERSONAL SERVICE', 'III', 'Personal Service', 'WITEL Denpasar', 'Denpasar', '', 'Pegawai_Telkom', '', '', '', ''),
(83, '999998', 'RIZKI', 'TKM', '', 'Telkom Regional V', 'Telkom Regional V', 'Surabaya', '', 'Panitia', '', '', '', ''),
(84, '623067', 'ARIFIN', 'OSM Fiber Zone Jawa Timur Balinusra', '', 'TELKOM AKSES', 'WITEL SURABAYA', 'Surabaya', '', 'Pegawai_Telkom_Akses', '', '', '', ''),
(85, '740098', 'TONI SATRIO,ST', 'PM Fiber Construction 5', '', 'TELKOM AKSES', 'WITEL DENPASAR', 'Denpasar', '', 'Pegawai_Telkom_Akses', '', '', '', ''),
(86, '651209', 'ANAK AGUNG NGURAH BAGUS S', 'GM Fiber Zone Balinusra', '', 'TELKOM AKSES', 'WITEL DENPASAR', 'Denpasar', '', 'Pegawai_Telkom_Akses', '', '', '', ''),
(87, '730306', 'ARIEF WIBISONO', 'GM Fiber Zone Jawa Timur 2', '', 'TELKOM AKSES', 'WITEL MALANG', 'Malang', '', 'Pegawai_Telkom_Akses', '', '', '', ''),
(88, '642092', 'IGB EDWIN CRM RANUH, IR.', 'PM Project Migration', '', 'TELKOM AKSES', 'WITEL SURABAYA', 'Surabaya', '', 'Pegawai_Telkom_Akses', '', '', '', ''),
(89, '660194', 'SURADI BAMBANG PUJO SUPENO', 'PM Fiber Zone Jawa Timur Balinusra', '', 'TELKOM AKSES', 'WITEL SURABAYA', 'Surabaya', '', 'Pegawai_Telkom_Akses', '', '', '', ''),
(90, '641904', 'MUHAMMAD SOLEH TRI AGUNG', 'GM Fiber Zone Jawa Timur 1', '', 'TELKOM AKSES', 'WITEL SURABAYA', 'Surabaya', '', 'Pegawai_Telkom_Akses', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_berkas`
--
ALTER TABLE `data_berkas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_undangan`
--
ALTER TABLE `data_undangan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_berkas`
--
ALTER TABLE `data_berkas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `data_undangan`
--
ALTER TABLE `data_undangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
