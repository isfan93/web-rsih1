-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-rsih`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Programing', 'programing', '2023-03-16 18:31:00', '2023-03-16 18:31:00'),
(2, 'Web Design', 'web design', '2023-03-16 18:32:02', '2023-03-16 18:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `poli_id` int(11) DEFAULT NULL,
  `nama_dok` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(2000) DEFAULT NULL,
  `pelatihan` varchar(1000) DEFAULT NULL,
  `keahlian` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `poli_id`, `nama_dok`, `pendidikan`, `pelatihan`, `keahlian`, `foto`, `created_at`, `updated_at`) VALUES
(1, 5, 'dr. Gustomo, Sp. A', 'Dokter Umum : Fakultas Kedokteran TRISAKTI JAKARTA (2006). Spesialis : Ilmu Kesehatan Anak Universitas Diponogoro Semarang (2015)', '•	Advanced Cardiac Life Support (ACLS) PERKI 2007 •	PPGD dan General Emergency Life Support (GELS) KEMENKES-RI-DIRJEN Bina Pelayanan Medik, 2007 •	Tatalaksana Infeksi Dengue RSHS Bandung Dept IKA-FK UNDIP-RSDK, 2008 •	Tatalaksana Kejang RSAB Harapan Kita, 2009  •	Update Demam Berdarah Dengue Pada Anak Dept IKA-FK UNDIP-RSDK, 2010 •	Seminar Nasional Motivator ASI RS St Elisabeth, Semarang, 2010 •	Workshop Antibiotik Guideline Update KEMENKES-RI-DIRJEN Bina Pelayanan Medik, RSUP Dr Kariadi Semarang, 2010 •	CPD Update in Pediatric : Perinatology, Respirology, Nephrology Dept IKA-FK UNDIP-RSDK, 2010 •	Disorders of Sex Development and Endocrinology: from Bench to Clinic Center for Biomedical Research (Cebior- FK UNDIP-RSDK, 2011', 'Dokter Spesialis Anak', 'Gustomo Panantro_web.jpg', '0000-00-00 00:00:00', '2023-09-14 01:47:19'),
(2, 5, 'dr. Mustakim, Sp. A, M.Kes', 'Dokter Umum : Fakultas Kedokteran Hasanuddin (2001 ). Spesialis : Ilmu Kesehatan Anak Fakultas Kedokteran Padjajaran Bandung  (2013) , Megister Kesehatan Kedokteran Padjajaran Bandung (2013)', NULL, 'Dokter Spesialis Anak', 'Mustakim_web.jpg', '0000-00-00 00:00:00', '2023-09-13 21:29:36'),
(5, 4, 'dr. Adhitya Rahadi Yudhadi, Sp. BS', 'Dokter Umum  : Fakultas Kedokteran Maranatha Christian (2006-2012),  Spesialis : Ilmu Bedah Saraf Fakultas Kedokteran Universitas Padjadjaran (2014-selesai)', '•	Workshop Air Medic Evacuation Bandung Concensus In Aerospace Medicine (2012) •	Advanced Cardiac Life Support (2013) •	Advanced Traumatic Life Support (2013) •	Basic Surgical Skill Course (2014), Wound and Stoma Care Course (2014) •	Espen Course (2014) •	Perioperative Care In Acute Care Surgery (2014) •	Neuro  and Spine Endoscopy Academiy (2015) •	Live Surgery Course In Microvascular Neurosurgery with Prof. Juha Hernesniemi (2016)', 'Dokter Spesialis Bedah Saraf', 'Adhitya Yudhadhi_web.jpg', '0000-00-00 00:00:00', '2023-09-14 01:52:45'),
(6, 6, 'dr. Hadiyana Suryadi, Sp. B', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung (1986). Spesialis : Ilmu Kedokteran Bedah Universitas Padjajaran Bandung (1997)', '•	Diklat Pelatihan ATLS-RSHS tahun 1998.  •	Kursus Bedah Definitif Trauma (DST) 2000.  •	Training of trainer (TOT)-RSHS Bandung 2005.', 'Dokter Spesialis Bedah Umum', 'Hadiyana_web.jpg', '0000-00-00 00:00:00', '2023-09-14 01:50:37'),
(7, 6, 'dr. Hendi Anshori, Sp.B', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung (2005). Spesialis : Ilmu Kedokteran Bedah Universitas Padjajaran Bandung  (2018)', '•	WS Bedah Laparoskopi Dasar, Bogor (2019).  •	WS Wound Care, Cirebon (2019).  •	WS Hal & Bar , Riau (2021)', 'Dokter Spesialis Bedah Umum', 'Hendi Anshori_web.jpg', '0000-00-00 00:00:00', '2023-09-14 01:49:37'),
(8, 6, 'dr. Indra Jaya, Sp. B', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung (2001). Spesialis :  Ilmu Kedokteran Bedah Fakultas Kedokteran Padjajaran Bandung (2015)', NULL, 'Dokter Spesialis Bedah Umum', 'Indrajaya_web.jpg', '0000-00-00 00:00:00', '2023-09-14 00:15:00'),
(9, 6, 'dr. Mutiara Pradita, Sp. B', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung (2011). Spesialis : Ilmu Bedah Fakultas Kedokteran Padjajaran Bandung  (2019)', '•	Workshop akses hemodialisa av fistula & cdl pit ikabi pekanbaru. 2019. •	Workshop clipping costa, fk unpad-rshs, bandung, 2019. •	Basic surgical skill ii. Kursus bedah laparoskopi dasar kolegium ilmu bedah indonesia, bali. 2019. •	Workshop basic upper and lower gastrointestinal endoscopy, kolegium ilmu bedah indonesia. Bali, 2019. •	Emergency management of severe burns course. Australian & new zealand burn association. Bandung. 2019. •	Kursus bedah definitif pada penatalaksanaan trauma dan acute care surgery. Dstc & acute care surgery. Kolegium ilmu bedah indonesia, batam. 2017. •	Approach to parenteral nutrition. Espen long life learning programme. Kolegium ilmu bedah indonesia. Bali, 2016. •	Nutrition support in perioperative period. Espen long life learning programme. Kolegium ilmu bedah indonesia. Bali. 2016. •	Approach to oral and enteral course. Espen long life learning programme. Kolegium ilmu bedah indonesia. Bali, 2016.', 'Dokter Spesialis Bedah Umum', 'Mutiara Pradita_web.jpg', '0000-00-00 00:00:00', '2023-09-14 01:29:59'),
(10, 12, 'dr. Johnson Manurung, Sp. PD', 'Dokter Umum : Fakultas Universitas Sriwijaya Palembang (1988). Spesialis : Ilmu Penyakit Dalam Fakultas Kedokteran Universitas Indonesia (1998)', '•	Usg ekokardiografi & vaskular perifer Indonesia\'s wfumb-coe, 2022 •	Program pendidikan keprofesian Berkelanjutan usg tahap 1 Indonesia\'s wfumb-coe, 2021  •	Program pendidikan keprofesian berkelanjutan usg tahap 2 indonesia\'s wfumb-coe, 2022 •	Echo bachelor class echocardiography course 2021', 'Dokter Spesialis Dalam', 'John Manurung_web.jpg', '0000-00-00 00:00:00', '2023-09-14 02:00:03'),
(11, 12, 'dr. Kevin Fachri Muhammad, Sp.PD', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung , 2013. Spesialis : Ilmu Penyakit Dalam Kedokteran Padjajaran Bandung  (2022)', '•	AMSA Unpad Local Paper and Poster Training, 2010 •	SPHERE Standard Basic Course 2013 •	Advanced Cardiac Life Support 2015 •	Symposium Comprehensive Management in Internal Medicine 2015 •	Workshop Insulin Intensification in Daily Practice 2015 •	Advanced Trauma Life Support 2015 •	Palliative Care in Indonesia 2011 •	AMSA\'s National Paper and Poster Training 2010 	Pelatihan Pembuatan Paper 	Pelatihan Pembuatan Poster 	Demo dan Diskusi Emergency Medicine di Indonesia', 'Dokter Spesialis Dalam', 'Kevin Fachri Muhammad_web.jpg', '0000-00-00 00:00:00', '2023-09-14 02:16:55'),
(12, 12, 'dr. Shelvi Febrianti, Sp. PD', 'Dokter Umum :Fakultas Kedokteran Universitas Diponogoro Semarang (1989), Spesialis : Ilmu Penyakit Dalam Universitas Diponogoro Semarang (2004)', NULL, 'Dokter Spesialis Dalam', 'Shelvi_web.jpg', '0000-00-00 00:00:00', '2023-09-14 02:15:08'),
(13, 12, 'dr. Zulkarnain Oesman, Sp. PD', 'Dokter Umum : Fakultas Kedokteran Universitas Gadjah Mada  Yogyakarta (1977). Spesialis : Ilmu Penyakit Dalam Fakultas Kedokteran Universitas Padjajaran Bandung (1989)', NULL, 'Dokter Spesialis Dalam', 'Zulkarnain Oesman_web.jpg', '0000-00-00 00:00:00', '2023-09-14 02:23:39'),
(14, 2, 'drg. Novi Dewandari', 'Dokter Gigi : Universitas Jenderal Achmad Yani Cimahi (2018).', '• Seminar Pekan Ilmiah Tahunan VI | FKG UNJANI • Seminar Pekan Ilmiah Tahunan X | FKG UNJANI • Seminar Bleaching Extra Oral dan Desensitisasi | FKG UNJANI • The 8th World Workshop on Oral Health and Disease in AIDS WW8, Bali', 'Dokter Gigi Umum', 'Novi Dewandari_web.jpg', '0000-00-00 00:00:00', '2023-09-22 00:38:38'),
(15, 2, 'drg. Syifa Aghnia', 'Dokter Gigi : Fakultas Kedokteran Universitas Jenderal Achmad Yani (Cimahi, 2019)', '•	\"Significant Occasion to Accomplish a Transformation to be an Excellent Individual and Leader\" (SINOATRIAL) – 2015 •	Professional Training of Public Communication Abitilies HIMA PROGI – 2017 •	Seminar Karya Tulis dan Poster Ilmiah \"Prosthetic Problem Solving in Writing Scientific Dentistry Paper and Poster with HIMA PROGI\" – 2017 •	PIT UNJANI \"New Thinking In Dentistry\" – 2018 •	Webinar \"Studying Abroad with Scholarship\" GOTRASAWALA 2020 UNPAD-2020 •	Dentistry Journey Webinar DENTIFINITY Ummadent \"How to grasp your perfect dreams to be Indonesia Top Dentist\" – 2020 •	Denstudy Webinar Vol. 4 Ummadent Orthodontic Treatment\" - 2020', 'Dokter Gigi Umum', 'Syifa Aghnia_web.jpg', '0000-00-00 00:00:00', '2023-09-22 00:38:20'),
(16, 2, 'drg. Tutun Rendrawulan', 'Dokter Gigi : Fakultas Kedokteran Universitas Padjajaran Bandung 2007', '•	AMED (Advanced Medical Emergency in Dentistry)  •	AFAMS (Advance First Aid and Medical Support) diselenggarakan oleh Ambulans Gawat Darurat Dinas Kesehatan Provinsi DKI Jakarta, 2015 •	Pelatihan Manajemen Puskesmas yang diselenggarakan oleh Balai Pelatihan Kesehatan Dinas Kesehatan Provinsi Jawa Barat, 2017 •	Pelatihan Enumerator Survei Kesehatan Gigi dan Mulut Terintegrasi Riskesdas 2018 yang diselenggarakan oleh Balai Besam Pelatihan Kesehatan Ciloto, 2018', 'Dokter Gigi Umum', 'Tutun Rendrawulan_web.jpg', '0000-00-00 00:00:00', '2023-09-22 00:37:57'),
(17, 2, 'drg. Yeni Amalia, Sp. Ped', 'Dokter Gigi : Fakultas Kedokteran Universitas Padjajaran Bandung (1985). Spesialis : Ilmu Kedokteran Gigi Anak Fakultas Kedokteran Universitas Padjajaran Bandung 2000', NULL, 'Dokter Spesialis Gigi Anak', 'Yeni Amalia_web.jpg', '0000-00-00 00:00:00', '2023-09-22 00:37:37'),
(18, 22, 'Dr.Siti Nur Fatimah,dr.Sp GK (K), MS', 'Dokter Umum : Fakultas Kedokteran Universitas Maranatha Bandung  (1993). Spesialis : Ilmu Gizi Klinik Universitas Indonesia (2002) , Konsultan Gizi Metabolik Universitas Indonesia (2018)', NULL, 'Dokter Spesialis Gizi Klinik', 'Siti Nur Fatimah_web.jpg', '0000-00-00 00:00:00', '2023-09-14 18:00:39'),
(19, 7, 'dr. Hendy Yogya, Sp. KJ', 'Dokter Umum : Fakultas Kedokteran Atma Jaya (1982). Spesialis : Ilmu kedokteran Jiwa (Psikiatri) Fakultas Kedokteran Gajah Mada Yogyakarta lulus NBCMS (1983) Subspesialis : Psikiatri UNPAD BANDUNG (1994). Subspesialis :  Ilmu Kedokteran Jiwa (Psikiatri) Anak dan Remaja Fakultas Kedokteran Universitas Padjajaran Bandung (1999)', NULL, 'Dokter Spesialis Kedokteran Jiwa', 'Hendy Yogya_web.jpg', '0000-00-00 00:00:00', '2023-09-14 18:59:26'),
(20, 15, 'dr. Irma Fakhrosa, Sp.DV', 'Dokter Umum : Fakultas Kedokteran Padjajaran (Bandung ). Spesialis : Ilmu Kulit dan Kelamin Fakultas Kedokteran Universitas Indonesia', NULL, 'Dokter Spesialis Kulit dan Kelamin', 'Irma Fakhrosa_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:36:27'),
(21, 15, 'dr. Yanto Widiantoro, Sp.DV', 'Dokter Umum : Fakultas Kedokteran Universitas Andalas Padang (1982). Spesialis : Ilmu Kulit dan Kelamin Fakultas Kedokteran Universitas Padjajaran Bandung (1995)', NULL, 'Dokter Spesialis Kulit dan Kelamin', 'Yanto Widiantoro_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:22:14'),
(22, 15, 'dr. Yuli Wulansari, Sp. DV', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung (2010). Spesialis : Ilmu Kulit dan Kelamin Fakultas Kedokteran Universitas Padjajaran Bandung (2021)', NULL, 'Dokter Spesialis Kulit dan Kelamin', 'Yuli Wulansari_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:37:31'),
(24, 18, 'dr. Widjajanti Utojo, Sp. M', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung (1982), Spesialis : Ilmu Mata Fakultas Kedokteran Universitas Padjajaran Bandung (1992) , Magister : Manajemen Rumah Sakit Universitas Padjajaran Bandung (2006)', NULL, 'Dokter Spesialis Mata', 'Widjajanti Utojo_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:39:37'),
(25, 9, 'dr. KMS. M. Aditya Fitrandi, Sp. OG', 'Dokter Umum : Fakultas Universitas Sriwijaya Palembang (2011), Spesialis : Ilmu Obstetrik dan Ginekologi Fakultas Universitas Sriwijaya Palembang (2018)', '•Workshop IVA dan Kolposkopi, Palembang, 2014 - Pelatihan LAPAROSKOPI DASAR, BALI, 2016  •Pelatihan USG Obstetri dan Ginekologi POGI, Palembang, 2018 •Workshop Manajemen Infertilitas dan Inseminasi Intrauterin, Bandung, 2018 •Workshop Fetal Ultrasound 3D/4D, Bandung, 2019', 'Dokter Spesialis Obgyn', 'Aditya Fitrandi_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:44:19'),
(26, 9, 'dr. Rizki Safaat Nurahim, Sp. OG', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung (1998), Spesialis : Ilmu Obstetri Gynekologi Universitas Padjajaran Bandung (2010)', NULL, 'Dokter Spesialis Obgyn', 'rizki safaat_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:45:58'),
(27, 8, 'dr. Husodo Dewo Adi, Sp. OT', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung (1990). Spesialis : Ilmu Ortophaedi dan Traumatologi  Uiversitas Padjajaran Bandung (2000). Subspesialis : Konsultan Spine Fakultas Kedokteran Universitas Indonesia (2003)', NULL, 'Dokter Spesialis Ortopedi', 'Husodo_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:55:07'),
(28, 8, 'dr. Iwan Hipsa Achmad, Sp. OT', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung  (2010). Spesialis : Ilmu Ortophaedi dan Traumatologi Fakultas Kedokteran Universitas Indonesia (2019)', '•	Konferensi Kerja (KONKER) PABOI XII \"Pediatric Orthopaedic (Evidence Based - Practice Delivers Bright Future)\". 2-7 November 2015 Novotel Tangcity, Tangerang. •	IHKS Round Table Disscussion 16 Januari 2016, Amarossa Hotel, Bandung. •	The 1st Biennial Meeting of Indonesian Society for Hand and Microsurgery (PERAMO!) in conjunction with Indonesian Orthopaedic Trauma Society (IOTS) and Indonesian Orthopaedic for Sport Medicine and Arthroscopy (IOSSMA). 29-31 Juni 2016 Holiday Inn Hotel, Kemayoran, Jakarta. •	Kursus Advanced Trauma Life Support (ATLS), Maret 2011 di RS Soetomo, Surabaya. •	In House Training Orthopaedic Cadaveric Study, 10 s.d 14 Januari 2017, Gedung Eijkman FKUP Bandung •	AO Trauma Course - Basic Principles of Fracture Management, 4 s.d 6 Mei 2017 di Shangri-La Jakarta.', 'Dokter Spesialis Ortopedi', 'Iwan Hipsa_web.jpg', '0000-00-00 00:00:00', '2023-09-14 19:54:28'),
(29, 16, 'dr. Fikri Faisal, Sp. P', 'Dokter Umum : Fakultas Kedokteran Universitas Kristen Krida Wacana Jakarta Barat (2000), Spesialis : Ilmu Paru Fakultas Kedokteran Universitas Indonesia 2013', 'Pelatihan Bronchoscopy, RSUP Persahabatan. Departemen Pulmonologi dan Ilmu kedokteran respirasi (UI , 2015). Program pengembangan pendidikan keprofesian berkelanjutan ultrasonografi Toraks Tingkat Dasar, dengan materi Knobologi , USG Toraks (WFUMB_COE, 2015). Pelatihan Upaya Berhenti Merokok Bagi Tenaga Kerja Kesehatan Rumah Sakit (RS) dan FKTP yang diselenggarakan oleh Sari Cipta Training Learning Provider (2017).', 'Dokter Spesialis Paru', 'Fikri Faisal_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:00:52'),
(32, 17, 'dr. Muhammad Mukhlis Faisal Abdulah, Sp. KFR', 'Dokter Umum : Fakultas Kedokteran Padjajaran Jatinangor (2010 ). Spesialis : Ilmu Rehabilitasi Medik Fakultas Kedokteran Padjajaran Bandung  (2022)', '•	Seminar \"Update Stroke Management\" PIT IDI Jawa Barat 2013  •	Workshop Injeksi Intraartikular 2018 •	Taping & Splinting Workshop pada Penatalaksanaan dan Rehabilitasi Upper Extremity (Advance Skill) 2019 •	Bandung Applied Biomedical and Tissue Engineering Conference in Health 2019 •	Pertemuan Ilmiah Regional II Perhimpunan Dokter Spesialis Kedokteran Fisik dan II Rehabilitasi Cabang Kalimantan 2021 •	International Society of Physical and Rehabilitation Medicine Congress 2021', 'Dokter Spesialis Rehabilitasi Medis', 'Muhammad Mukhlis Faisal Abullah_web.jpg', '0000-00-00 00:00:00', '2023-09-21 19:03:52'),
(33, 13, 'dr. Danny Bagus, Sp. N', 'Dokter Umum : Fakultas Kedokteran Universitas Jenderal Achmad Yani Cimahi (2004), Spesialis: Ilmu Neurologi  Fakultas Kedokteran Universitas Padjadjaran (2015)', '•	12 th Asian and Oceanian Epilepsy Congress (AOEC) 2018 •	Review For Continuing Professional Development (CPD) 2017 •	Better Live without pain 2017 •	The Never Ending Battle Againts  2018 •	National scientific Meeting (2016)', 'Dokter Spesialis Saraf', 'Danny Bagus Agfiandi_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:21:45'),
(34, 13, 'dr. Nasir Okbah, Sp. N', 'Dokter Umum : Fakultas Kedokteran Universitas Airlangga Surabaya (1987), Spesialis : Ilmu Neurologi Universitas Padjajaran Bandung (1996)', NULL, 'Dokter Spesialis Saraf', 'Nasir Okbah_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:21:25'),
(36, 19, 'dr. Riki Vita Wisudiana, Sp. THTKL', 'Dokter Umum : Fakultas Kedokteran Universitas Kristen Maranatha Bandung (2007), Spesialis : Ilmu Kesehatan Telinga Hidung Tenggorok Kepala Leher Universitas Dipenogoro Semarang (2018)', NULL, 'Dokter Spesialis THT', 'Riki Vita_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:28:01'),
(37, 19, 'dr. Septia Devi, Sp. THT-KL', 'Dokter Umum : Fakultas Kedokteran Universitas Islam Sumatera Utara (2008), Spesialis : Ilmu Kesehatan Telinga Hidung Tenggorok Kepala Leher Universitas Islam Sumatera Utara (2019)', NULL, 'Dokter Spesialis THT', 'Septia Devi_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:31:38'),
(38, 14, 'dr. Sena Hadeaih, Sp. U', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung (2010), Spesialis : Ilmu Urologi Universitas Padjajaran Bandung, (2020)', '•	Advanced Cardiac Life Support (ACLS) PERKI (Perhimpunan Dokter Spesialis Kardiovaskuler Indonesia) 2012 •	Advanced Trauma Life Support (ATLS) IKABI (Perhimpunan Dokter Spesialis Bedah Indonesia) 2013 •	Program Pengembangan Pendidikan Keprofesian Berkelanjutan USG pada Trauma Abdomen & Trauma Toraks, Kolegium Ilmu Bedah Indonesia - Perhimpunan Ultrasonik Kedokteran Indonesia 2015 •	Basic Surgical Skills, Asia Pacific Surgical Training Center, Bali 2016 •	Kursus Peri-Operative Critical Care dan Acute Care Surgery, Kolegium Ilmu Bedah Indonesia, Bali International Training and Development Centre 2016 •	Workshop on Wound & Stoma Care Kolegium Ilmu Bedah Indonesia, Bali International Training and Development Centre 2016 •	Pelatihan Dasar Keperawatan Kamar Bedah Direktorat Jenderal Pelayanan Kesehatan RSUP dr. Hasan Sadikin Bandung RSUP dr. Hasan Sadikin, Bandung 2016', 'Dokter Spesialis Urologi', 'Sena Hadeaih_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:47:41'),
(39, 20, 'dr. Gusti Made Odi Sidharta, Sp. JP', 'Dokter Umum : Fakultas Kedokteran Universitas Padjadjaran (2013). Spesialis : Ilmu Jantung dan Pembuluh darah Fakultas Kedokteran Universita Padjajaran Bandung (2020).', '•	National Leadership Summit (CIMSA FK UNPAD) •	Asia Pacific Regional Meeting in Thailand (IFMSA) •	Professional Exchange in Cardiology Departement, Giessen University, Germany (SCOPE-IFMSA).  •	Makasar Cardiovascular Update (MCVU 2014).  •	Bandung Cardiology Update (BCU, 2015).  •	Workshop on Acute Coronary Syndrome (BCU 2015) •	Workshop on Heart Failure: An Update on Management of Heart Failure •	24th Annual Scientific Meeting of Indonesian Heart Association (24th ASMIHA) •	Workshop on Electrophysiology and Pacing (24th ASMIHA) •	11th Asia Pacific Congress of Hypertension (11th APCH) •	Workshop Master Course in Hypertension: From A to Z in Clinical Practice (11th APCH)', 'Dokter Spesialis Jantung', 'G. M. Odi Sidharta_web.jpg', '0000-00-00 00:00:00', '2023-09-14 20:57:02'),
(40, 11, 'dr. Maman Wastaman, Sp. B-KBD', 'Dokter Umum : Fakultas Kedokteran Padjajaran Bandung  (1981). Spesialis : Ilmu bedah Kedokteran Padjajaran Bandung  (1990) , Subspesialis : Konsultan Bedah Digestif Padjajaran Bandung (1991 )', '•	Hand Assisted Laparoscopic Surgery •	Singapore General Hospital (SGH). •	Laparoscopic Colorectal Surgery SGH. •	Single Port Laparoscopic Surgery SGH. •	Observership Colonoscopy NUH Singapore. •	Rectal Endosonography SGH. •	Colorectal Observership SGH. •	ATLS dan TOT ATLS', 'Dokter Subspesialis Bedah Digestif', 'Maman Wastaman_web.jpg', '0000-00-00 00:00:00', '2023-09-14 21:08:17'),
(41, 10, 'dr. Dhanny Primantara Johari Santoso, Sp. OG, Subs', 'Dokter Umum : Fakultas Kedokteran Universitas Katolik Soegijapranata ATMAJAYA Jakarta . Spesialis : Ilmu Obstetri Gynekologi Universitas Padjajaran Bandung. Magister : Kesehatan Kedoteran Dasar Universitas Padjajaran Bandung. Subspesialis : Ilmu Kedokteran Fetomaternal Universitas Padjajaran Bandung', NULL, 'Dokter Subspesialis Fetomaternal', 'Dhanny Primantara_web.jpg', '0000-00-00 00:00:00', '2023-09-14 21:14:49'),
(42, 1, 'dr. Adhitya Purnama Putra', 'Dokter Umum : Fakultas Kedokteran Universitas Padjadjaran (2008-2014)', '•	ACLS  (2015) •	ATLS (2015) •	Pelatihan EKG (2015)', 'Dokter Umum', 'Adhitya Purnama Putra_web.jpg', '0000-00-00 00:00:00', '2023-09-15 00:26:25'),
(43, 1, 'dr. Allysa', 'Dokter Umum : Fakultas Kedokteran Universitas Jendral Achmad Yani (Cimahi 2011-2017)', '•	Peserta Workshop \"USG dalam Kehamilan\" dalam Pekan Ilmiah Tahunan ke-9 FK Unjani \"Mempersiapkan Generasi Emas pada 1000 Hari Pertama Kehidupan Guna Membangun Generasi Masa Depan yang Berkualitas\" (2017) •	Peserta Simposium \"Neurosurgery Update for General Practitioner\" (2018) •	Advanced Trauma Life Support (ATLS) (2019) •	Advanced Cardiac Life Support (ACLS) (2019) •	Simposium Nutri : Current Updates and Future Roles of Nutrition in Humas Metabolism (2019) •	Simposium dan workshop The 6th Jakarta Annual Meeting On Clinical Nutrition : Enhancing the Management of Obesity & Related Diseases Through Nutrigenomic Intervention - A New Medical Perspective (2019) •	Pelatihan ELectrocardiografi (EKG)(2019), Pelatihan Sistem Penanggulangan Gawat Darurat Terpadu Saat Bencana (SPGDT-B)', 'Dokter Umum', 'Allysa_web.jpg', '0000-00-00 00:00:00', '2023-09-14 23:35:00'),
(44, 1, 'dr. Danny Khawaritsmi', 'Dokter Umum : Fakultas Kedokteran Universitas Jenderal Achmad Yani (Cimahi, 2008-2014)', '•	Pelatihan HIPERKES  2014   •	Resusitasi Neonatus (Provider) 2022 •	Pelatihan EKG 2016 •	Pelatihan Asuhan Persalinan Normal 2022 •	Pelatihan ACLS 2019 •	Pelatihan USG 2022 •	Pelatihan ATLS 2019 •	Fundamental Critical Care Support Obstetric 2023 •	Pelatihan Basic Intensive Care Course2021 •	Pelatihan PONED 2023', 'Dokter Umum', 'Danny khawaritsmi_web.jpg', '0000-00-00 00:00:00', '2023-09-14 23:47:42'),
(45, 1, 'dr. Resa Shahana Ulfa', 'Dokter Umum : Fakultas Kedokteran Universitas Jenderal Achmad Yani (Bandung ,2014).', '•	Universitas Jenderal Achmad Yani Pelatihan Sistem Penanggulangan Gawat Darurat Terpadu Saat Bencana (SPGDT-B) 2019 •	IMERI Kedokteran Universitas Indonesia Pelatihan Modul Tanggap Pandemi COVID-19 2020 •	RS Mata Cicendo Pelatihan Vaksinator Bagi PPDS PMN RS Mata Cicendo dan PIDI Jawa Barat 2021 •	Balai Besar Pelatihan Kesehatan Ciloto  Workshop Vaksinator COVID-19 bagi Dokter 2021 •	Siloam Hospitals Pelatihan National COVID-19 dan Gangguan Psikiatri 2021 •	PERKI Indonesian Heart Association Advanced Cardiac Life Support (ACLS) 2021 •	PT. Bina Okupasi Indonesia, Pelatihan Hiperkes dan KK (K3) bagi Dokter Sertifikasi Kementrian Kesehatan Republik Indonesia 2021 •	CV. Bina Medika Indonesia, Pelatihan USC ANC bagi Dokter Umum 2022', 'Dokter Umum', 'Resa Shahana Ulfa_web.jpg', '0000-00-00 00:00:00', '2023-09-14 23:54:09'),
(46, 1, 'dr. Shintia Surya Putri', 'Dokter Umum : Fakultas Kedokteran Universitas Andalas Padang (2019)', NULL, 'Dokter Umum', 'Shintia Surya Putri_web.jpg', '0000-00-00 00:00:00', '2023-09-14 23:55:14'),
(47, 1, 'dr. Siti Nashratul Kamillah', 'Dokter Umum : Fakultas Kedokteran Universitas Islam Negeri Syarif Hidayatullah Jakarta ,2011', '•	Seminar dan Workshop Emergency Fair and Festival TBM SM FK UI 2011 •	Workshop Pelatihan BHD & Evakuasi Darat USMR FK UIN 2011 •	Workshop Pelatihan BHD dan Evakuasi Darat TBM USMR FK UIN Jakarta 2012 •	Seminar dan Talkshow Deteksi Dini dan Pencegahan Kanker Serviks \"Save Your Area\" FK UNPAD-RSHS 2012 •	Seminar dan Workshop Kegawatdaruratan Lalu Lintas TBM SM IKM FK UI 2013 •	Symposium Holistic Approaches in Cardiovascular Disease 13 2014 •	Pelatihan BHD Bagi Peserta Didik FK UIN Jakarta-RSUP Fatmawati 2014 •	Seminar First Internal Medicine Annual Update FK UNTAR 2015 •	Seminar Annual Tropical Disease Meeting (ATDM) FK UI-RSCM 2015 •	Lokakarya Masalah Gastrohepatologi Anak Yang Sering Ditemui Sehari-Hari PGHNAI Cabang DKI Jakarta 2017', 'Dokter Umum', 'Siti Nashratul Kamillah_web.jpg', '0000-00-00 00:00:00', '2023-09-15 00:02:50'),
(48, 1, 'dr. Syifa Fauziah Safithri', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung 2015', '•	Seminar Kanker Servik \"Save your area\", PSPD FK UNPAD, tahun 2012 •	Workshop Kesekretariatan, Bendahara, dan Danus, Kesekretariatan dan Bendahara Senat FK UNPAD, tahun 2012 •	Workshop dan Pelatihan Sirkumsisi, Balai Pengobatan, dan Screening, Senat FK UNPAD, tahun 2012 •	Talkshow tentang Kesehatan Telinga \"Ear Care Day\", Departemen THT-KL RSHS Bandung, tahun 2016 •	Pelatihan HIPERKES (Higiene Perusahaan Keselamatan dan Kesehatan Kerja) bagi dokter, Departemen Tenaga Kerja dan Transmigrasi RI, tahun 2017 •	Pelatihan ACLS (Advanced Cardiac Live Support), PERKI-Cimahi, tahun 2018 •	Workshop \"Update Pain Management\", PDUI-Bandung, tahun 2018  •	Simposium \"Meningkatkan Kemampuan dan Profesionalisme Dokter di Fasilitas Kesehatan Primer dan Rujukan Menuju Indonesia Sehat Tahun 2020\" PKB IPD XVI 2019, PAPDI, tahun 2019  •	Workshop \"Update On Heart Failure Management\" PKB IPD XVI 2019, PAPDI, tahu 2019 •	Workshop \"Clinical Approach of Fever\" PKB IPD XVI 2019, PAPDI, tahun 2019', 'Dokter Umum', 'syifa fauziah_web.jpg', '0000-00-00 00:00:00', '2023-09-15 00:19:13'),
(88, 5, 'dr.Theresia Umboh, Sp.A', 'Dokter Umum : Fakultas Kedokteran Universitas Katolik Soegijapranata (Unika) Atmajaya Semarang 2012, Residen Pediatric : Fe Del Mundo Medical Center Manila Filipina 2017, Spesialis : Ilmu Kesehatan Anak Universitas Negeri Sebelas Maret (UNS) 2021', '•	Advanced Pediatric Resuscitation Course 2018 •	Neonatal Resuscitation Course, Manila, 2014 •	Pediatric Advance Life Support, Manila, 2014 •	Basic Life Support, Manila, 2014', 'Dokter Spesialis Anak', 'Theresia Umboh_web.jpg', NULL, '2023-09-17 20:32:46'),
(89, 5, 'dr. Kurniawan Adi Putranto, Sp.A', 'Dokter Umum : Fakultas Kedokteran Universitas Negeri Sebelas Maret (UNS) 2014, Spesialis : Ilmu Kesehatan Anak Universitas Negeri Sebelas Maret (UNS) 2022', '•	7th Indonesia Pediatric Respirology Meeting: Better Respiratory Care to the Health of all Indonesian Child (2017) as Participant •	11th International Congress of Tropical Pediatrics: Global Challenges Interventions (Prevention, Control, Elimination, and Eradication) to Reduce Neglected Tropical Diseases: Improving Quality ofNew Generation (2017) as Participant  •	The 17th Indonesian Congress of Pediatrics: Implementing Advances in Pediatrics for Better Child Health (2017) as Participant •	10th Annual Scientific Meeting of Indonesian Pediatric Society: Strengthening Asia\'s Research Collaboration for Global Child Health (2019) as Participant •	5th Annual Neonatology Update: Better Outcome Achievement in Neonatal Management (2019) as Participant •	The 11th Pediatric Cardiology Update: Current Practical Approach of Congenital Heart Disease (CHD): From Limited Resources to Integrated Management (2023) as Participant •	Early Detection and Intervention Of Rare Diseases (2023) as Speaker', 'Dokter Spesialis Anak', 'Kurniawan_web.jpg', NULL, '2023-09-15 00:46:41'),
(90, 9, 'dr. Kendry Savira Yordian, Sp.OG', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung (2014), Spesialis : Ilmu Obstetri Gynekologi Universitas Padjajaran Bandung (2022)', '•	Advanced Trauma Life Support (ATLS), Tahun 2015. •	Advanced Cardiac Life Support (ACLS), Tahun 2015  •	 Advanced Suture Course (ASC), Tahun 2015 •	Asuhan Persalinan Normal (APN) dan Pelayanan Obstetri dan Neonatologi Dasar (PONED), Tahun 2018 •	Basic Surgical Skill 1 (BSS 1), Tahun 2018 6. Pelatihan USG Obstetri dan Ginekologi Dasar, Tahun 2019  •	Pelatihan Basic Surgical Skill 2 (BSS 2), Tahun 2022', 'Dokter Spesialis Obgyn', 'Kendry Sav_web.jpg', NULL, '2023-09-15 00:41:19'),
(91, 1, 'dr. Algiza Gauthfa', 'Dokter Umum : Fakultas Kedokteran Universitas padjadjaran (2016)', '•	Advanced Cardiovascular Life Support (ACLS) 2019 •	Latihan Kepemimpinan dan Manajemen diselenggarakan oleh Ikatan Senat Mahasiswa Kedokteran Indonesia 2013 •	Best leadership pada MABIM FK UNPAD 2012 •	Basic Organization and Leadership Training 2013', 'Dokter Umum', 'Algiza_web.jpg', '2023-08-08 18:39:56', '2023-09-15 01:34:04'),
(92, NULL, 'dr. Dhadi Ginanjar D, Sp.An', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran (2003), Spesialis : Fakultas Kedokteran Anastesi dan Terapi Intensif (2014)', '•	Neuroanesthesia and Critical Care Course, Semarang, 2010  •	Workshop Anestesi Regional, Bandung, 2011 •	Kursus Penyegar dan Penambah Ilmu Anestesia: Perioperative Management in High-Risk Surgical Patients, Jakarta, 2012 •	3rd Annual Symposium on Anesthesia Complications, Yogyakarta, 2013 5. Acid Base Workshop, Bandung 2015 •	Workshop Regional Anestesi, Palembang, 2016 •	Workshop Mechanical Ventilation, Medan, 2017 •	Workshop WINFOCUS: Ultrasound Life Support for Basic Level 1, Bandu 2017 •	Workshop Pain Management, Surabaya, 2018', 'Dokter Spesialis Anastesi', 'Dhadi Ginanjar_web.jpg', '2023-08-07 20:44:13', '2023-09-21 20:26:15'),
(93, NULL, 'dr. Hayati Usman, Sp.An', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung (1985). Spesialis : Ilmu Kedokteran Anestesi dan Terapi Intensif Universitas Padjajaran Bandung (1997)', '•	Kursus Penyegar dan penambahan ilmu Anesthesia \"Peroperative Management in Hight-Risk Surgical Patient\", Jakarta (2012).  •	Meet The Expert VI (Safety and Awarness in Managing High Risk Patient and Surgery), Balikpapan (2012).  •	CPD Workshop Pain Management , Balikpapan (2012).  •	Meet The Expert &case conference regional Anasthesia, Neuroaxial Block Revisited, Yogyakarta (2017).  •	Pain Management \" Pelayanan bebas nyeri di Rumah Sakit\" Tasikmalaya (2017), •	 Pertemuan Ilmiah Berkala ke XVI Perdatin \"Challenging Issues in Anesthesia Practice: Patient Safety \" Medan  (2017).  •	CPD Workshop Anastesi Obstetri, Bandung (2019)', 'Dokter Spesialis Anastesi', 'Hayati Usman_web.jpg', '2023-08-07 20:44:13', '2023-09-21 20:25:21'),
(94, NULL, 'dr. Rizqi Rosyidah Nur, Sp.Rad', 'Dokter : Fakultas Kedokteran Universitas Padjajaran Bandung , Spesialis : Ilmu Kedokteran Radiologi Universitas Padjajaran Bandung (2012)', '•	Webinar emergency in spine trauma 2020 •	Workshop abdominal imaging 2021  •	Webinar penatalaksanaan trauma integrasi dalam praktek sehari-hari 2021 •	Kuliah ilmiah internal radiologi 2022', 'Dokter Spesialis Radiologi', 'Rizqy Rosyidah_web.jpg', '2023-08-07 20:44:13', '2023-09-21 19:28:56'),
(95, NULL, 'dr. Ridwan Budimansyah, Sp.Rad', 'Dokter Umum : Fakultas Kedokteran Universitas Padjajaran Bandung, Spesialis : Ilmu Kedokteran Radiologi Universitas Padjajaran Bandung (2018)', '•	Online basic ct cardiac course pdsrki, 2020 •	Emergency abdominal radiologi pdsrki, 2020 •	Thorax online course pdsrki, 2020 •	Women & pediatric ultrasound webinarin colaboration with mindray and departemen radiology fkui-rscm pdsrki, 2021 •	hybrid perkumpulan spesialis radiologi anak pdsrki, 2021', 'Dokter Spesialis Radiologi', 'Ridwan RAD_web.jpg', '2023-08-07 20:44:13', '2023-09-21 20:13:21'),
(96, NULL, 'dr. Tena Rosmiati, Sp.Pk', 'Dokter Umum : Fakultas Kedokteran Universitas Maranatha Bandung  (1997). Spesialis : Ilmu Patologi Klinik Fakultas Kedokteran Universitas Padjajaran Bandung (2014).', NULL, 'Dokter Spesialis LAB', 'Tena_web.jpg', '2023-08-07 20:44:13', '2023-09-21 20:20:28'),
(97, NULL, 'dr. Muhamad Ibnu, Sp.An', 'Dokter Umum : Ilmu Kedokteran Universitas Yayasan Rumah Sakit Islam Indonesia Jakarta (2008) Spesialis : Ilmu kedokteran Anestesi dan Terapi Intensif Universitas Padjajaran Bandung (2017)', NULL, 'Dokter Spesialis Anastesi', 'Muhamad Ibnu_web.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokter2`
--

CREATE TABLE `dokter2` (
  `id` int(11) NOT NULL,
  `poli_id` int(11) DEFAULT NULL,
  `nama_dok` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `keahlian` varchar(50) DEFAULT NULL,
  `pelatihan` varchar(1000) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `dokter2`
--

INSERT INTO `dokter2` (`id`, `poli_id`, `nama_dok`, `pendidikan`, `keahlian`, `pelatihan`, `foto`, `created_at`, `updated_at`) VALUES
(25, 0, 'dr. Dhadi Ginanjar D, Sp. An', 'Fakultas Kedokteran Universitas padjajaran (1996-2', 'Neuroanesthesia and critical care course, Semarang', 'Dokter Spesialis Anastesi', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 0, 'dr. Hayati Usman, Sp. An', 'Fakultas Kedokteran Padjajaran (Bandung 1985). Spe', 'Kursus Penyegar dan penambahan ilmu Anesthesia \"Pe', 'Dokter Spesialis Anastesi', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 0, 'dr. Rizqi Rosyidah Nur, Sp. Rad', 'Fakultas Kedokteran Universitas Padjajaran Bandung', '', 'Dokter Spesialis Radiologi', 'Rizqy Rosyidah_web.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 0, 'dr. Ridwan Budimansyah, Sp. Rad', 'Fakultas Kedokteran Universitas Padjajaran Bandung', '', 'Dokter Spesialis Radiologi', 'Ridwan RAD_web.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 0, 'dr. Tena Rosmiati, Sp. Pk', 'Fakultas Kedokteran Universitas Maranatha (Bandung', '', 'Dokter Spesialis LAB', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gizi`
--

CREATE TABLE `gizi` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gizi`
--

INSERT INTO `gizi` (`id`, `nama_menu`, `gambar`) VALUES
(3, 'Ayam Asam Manis', 'Ayam Asam Manis.jpg'),
(4, 'Ayam Bumbu Bali', 'Ayam Bumbu Bali.jpg'),
(5, 'Ayam Rempah', 'Ayam Rempah.jpg'),
(6, 'Ayam Saus Inggris', 'Ayam Saus Inggris.jpg'),
(7, 'Ayam Tempura', 'Ayam Tempura.jpg'),
(8, 'Ayam Ungkep Bumbu Kari', 'Ayam Ungkep Bumbu Kari.jpg'),
(9, 'Beef Black Papper', 'Beef Black Papper.jpg'),
(10, 'Beef Steak', 'Beef Steak.jpg'),
(11, 'Bola Bola Daging', 'Bola Bola Daging.jpg'),
(12, 'Chicken Cordon Bleu', 'Chicken Cordon Bleu.jpg'),
(13, 'Chiken Bulgogi', 'Chiken Bulgogi.jpg'),
(14, 'Chiken Katsu', 'Chiken Katsu.jpg'),
(15, 'Chiken Kung Pao', 'Chiken Kung Pao.jpg'),
(16, 'Chiken Parmigiana', 'Chiken Parmigiana.jpg'),
(17, 'Chiken Rolade', 'Chiken Rolade.jpg'),
(18, 'Chiken Rolade', 'Chiken Rolade.jpg'),
(19, 'Chiken Wing', 'Chiken Wing.jpg'),
(20, 'Fish With Butter Sauce', 'Fish With Butter Sauce.jpg'),
(21, 'Kakap Asam Manis', 'Kakap Asam Manis.jpg'),
(22, 'Loaf Ayam Sambal Goreng Kacang Merah', 'Loaf Ayam Sambal Goreng Kacang Merah.jpg'),
(23, 'Mix Fruit Oat', 'Mix Fruit Oat.jpg'),
(24, 'Nasi Bumbu Kari', 'Nasi Bumbu Kari.jpg'),
(25, 'Nasi Goreng', 'Nasi Goreng.jpg'),
(26, 'Nasi Gulung Nori', 'Nasi Gulung Nori.jpg'),
(27, 'Nasi Hainan', 'Nasi Hainan.jpg'),
(28, 'Nasi Hainan', 'Nasi Hainan.jpg'),
(29, 'Nasi Kuning', 'Nasi Kuning.jpg'),
(30, 'Nasi Loaf Tempe Sup Bakso', 'Nasi Loaf Tempe Sup Bakso.jpg'),
(31, 'Nasi Omelete', 'Nasi Omelete.jpg'),
(32, 'Nasi Tamagoyaki', 'Nasi Tamagoyaki.jpg'),
(33, 'Nasi Uduk', 'Nasi Uduk.jpg'),
(34, 'Opor Ayam Tumis Tahu', 'Opor Ayam Tumis Tahu.jpg'),
(35, 'Sandwitch Susu', 'Sandwitch Susu.jpg'),
(36, 'Scramble Egg', 'Scramble Egg.jpg'),
(37, 'Semur Ayam Sayur Labu', 'Semur Ayam Sayur Labu.jpg'),
(38, 'Semur Ayam Tempe', 'Semur Ayam Tempe.jpg'),
(39, 'Soto Ayam', 'Soto Ayam.jpg'),
(40, 'Spaghetti Bolognes', 'Spaghetti Bolognes.jpg'),
(41, 'Spanish Omelete', 'Spanish Omelete.jpg'),
(42, 'Stotch Egg', 'Stotch Egg.jpg'),
(43, 'Telur Dadar Sayur Lodeh', 'Telur Dadar Sayur Lodeh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `dokter_id` int(11) DEFAULT NULL,
  `senin` varchar(50) DEFAULT NULL,
  `selasa` varchar(50) DEFAULT NULL,
  `rabu` varchar(50) DEFAULT NULL,
  `kamis` varchar(50) DEFAULT NULL,
  `jumat` varchar(50) DEFAULT NULL,
  `sabtu` varchar(50) DEFAULT NULL,
  `minggu` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `dokter_id`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`, `created_at`, `updated_at`) VALUES
(15, 1, '09.00 - 15.00', '09.00 - 15.00', '09.00 - 15.00', '09.00 - 15.00', '09.00 - 15.00', NULL, '08.00 - 12.00', '2023-07-10 01:35:04', '2023-09-08 19:38:05'),
(16, 5, '14.00 - 16.00', NULL, '14.00 - 16.00', '14.00 - 16.00', NULL, NULL, NULL, '2023-07-10 02:03:35', '2023-07-10 02:03:35'),
(17, 6, '09.00 - 11.00', '09.00 - 11.00', '09.00 - 11.00', '08.00 - 10.00', '08.00 - 10.00', NULL, NULL, '2023-07-11 20:32:58', '2023-07-11 20:32:58'),
(18, 7, '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', NULL, NULL, NULL, '2023-07-11 20:33:52', '2023-07-11 20:33:52'),
(19, 8, NULL, NULL, NULL, NULL, NULL, '13.00 - 14.00', NULL, '2023-07-11 20:34:42', '2023-07-11 20:34:42'),
(20, 9, '11.00 - 13.00', '11.00 - 13.00', '11.00 - 13.00', '11.00 - 13.00', NULL, NULL, NULL, '2023-07-11 20:42:02', '2023-07-11 20:42:02'),
(21, 10, NULL, '11.00 - 13.00', NULL, '11.00 - 13.00', NULL, NULL, NULL, '2023-07-11 20:43:23', '2023-07-11 20:43:23'),
(22, 11, '07.00 - 09.00', NULL, '07.00 - 09.00', NULL, '07.00 - 09.00', NULL, NULL, '2023-07-11 20:43:53', '2023-07-11 20:43:53'),
(23, 12, '14.00 - 16.00', NULL, '14.00 - 16.00', NULL, '13.00 - 15.00', NULL, NULL, '2023-07-11 20:44:40', '2023-07-11 20:44:40'),
(24, 13, '16.30 - 18.00', '16.30 - 18.00', '16.30 - 18.00', '16.30 - 18.00', '16.30 - 18.00', NULL, NULL, '2023-07-11 20:45:13', '2023-09-08 19:41:50'),
(25, 14, '16.00 - 20.00', '16.00 - 20.00', '16.00 - 20.00', NULL, '16.00 - 20.00', NULL, NULL, '2023-07-11 20:45:45', '2023-09-08 19:42:15'),
(26, 15, '08.00 - 12.00', NULL, '08.00 - 12.00', NULL, NULL, NULL, NULL, '2023-07-11 20:46:11', '2023-07-11 20:46:11'),
(27, 16, NULL, NULL, NULL, '16.00 - 20.00', NULL, '09.00 - 15.00', NULL, '2023-07-11 20:46:43', '2023-09-08 19:42:47'),
(28, 17, NULL, '08.00 - 12.00', NULL, '08.00 - 12.00', '08.00 - 12.00', NULL, NULL, '2023-07-11 20:47:10', '2023-07-11 20:47:10'),
(29, 18, '16.00 - 18.00', NULL, NULL, '09.00 - 12.00', NULL, NULL, NULL, '2023-07-11 20:47:45', '2023-07-11 20:47:45'),
(30, 19, NULL, NULL, NULL, '16.00 - 19.00', NULL, NULL, NULL, '2023-07-11 20:49:25', '2023-07-11 20:49:25'),
(31, 20, '08.00 - 10.00', '11.00 - 13.00', NULL, '08.00 - 10.00', NULL, NULL, NULL, '2023-07-11 20:50:08', '2023-09-08 19:43:46'),
(32, 21, NULL, NULL, '11.00 - 14.00', NULL, NULL, '09.00 - 13.00', NULL, '2023-07-11 20:51:29', '2023-07-11 20:51:29'),
(33, 22, '10.30 - 13.30', '14.30 - 16.00', '08.30 - 10.30', '14.30 - 16.00', '13.30 - 15.30', NULL, NULL, '2023-07-11 20:52:25', '2023-09-08 19:44:32'),
(34, 24, NULL, NULL, '13.00 - 15.00', NULL, '09.00 - 11.00', NULL, NULL, '2023-07-11 20:53:01', '2023-07-11 20:53:01'),
(35, 25, '13.30 - 15.30', '13.30 - 15.30', '13.30 - 15.30', '13.30 - 15.30', '13.30 - 15.30', NULL, NULL, '2023-07-11 20:53:46', '2023-07-11 20:53:46'),
(36, 26, '08.30 -09.30', '07.00 - 08.30', '07.00 - 08.30', '07.00 - 08.30', '07.00 - 08.30', NULL, NULL, '2023-07-11 20:54:35', '2023-07-11 20:55:24'),
(37, 27, '17.00 - 19.00', '17.00 - 19.00', NULL, '17.00 - 19.00', '17.00 - 19.00', NULL, NULL, '2023-07-11 20:56:44', '2023-09-08 19:45:39'),
(38, 28, '13.00 - 14.00', NULL, '13.00 - 14.00', NULL, NULL, NULL, NULL, '2023-07-11 20:57:18', '2023-07-11 20:57:18'),
(39, 29, '16.00 - 17.30', NULL, NULL, '16.00 - 17.30', NULL, NULL, NULL, '2023-07-11 20:57:49', '2023-09-08 19:47:15'),
(40, 32, '08.00 - 12.00', '08.00 - 12.00', NULL, '08.00 - 12.00', NULL, NULL, NULL, '2023-07-11 20:58:49', '2023-09-08 19:47:38'),
(41, 33, '18.00 - 19.00', '18.00 - 19.00', '18.00 - 19.00', '18.00 - 19.00', '18.00 - 19.00', '08.00 - 10.00', NULL, '2023-07-11 20:59:55', '2023-09-08 19:48:41'),
(42, 34, '11.00 - 13.00', '10.00 - 13.00', NULL, '11.00 - 13.00', '09.00 - 11.00', '10.00 - 12.00', NULL, '2023-07-11 21:00:39', '2023-09-08 19:49:10'),
(43, 35, NULL, '15.00 - 17.00', NULL, '14.00 - 16.00', NULL, NULL, NULL, '2023-07-11 21:03:02', '2023-07-11 21:03:02'),
(44, 36, '14.30 - 16.00', '14.30 - 16.00', '14.30 - 16.00', '14.30 - 16.00', '14.30 - 16.00', NULL, NULL, '2023-07-11 21:07:52', '2023-07-11 21:07:52'),
(45, 37, '10.00 - 12.00', '10.00 - 12.00', '10.00 - 12.00', '10.00 - 12.00', '10.00 - 12.00', NULL, NULL, '2023-07-11 21:08:25', '2023-07-11 21:08:25'),
(46, 38, NULL, '14.00 - selesai', NULL, '14.00 - selesai', NULL, NULL, NULL, '2023-07-11 21:09:02', '2023-07-11 21:09:02'),
(47, 39, '07.00 - 08.00', '08.00 - 13.00', '07.00 - 08.00', '08.00 - 13.00', '07.00 - 08.00', '09.00 - 12.00', NULL, '2023-07-11 21:09:56', '2023-07-11 21:09:56'),
(48, 40, NULL, NULL, NULL, NULL, '10.00 - 11.30 | 16.00 - 18.00', '09.00 - 11.00', NULL, '2023-07-11 21:10:55', '2023-07-11 21:10:55'),
(49, 41, '08.30 - 10.00 | 19.30 - selesai', '08.30 - 10.00 | 19.30 - selesai', NULL, '08.30 - 10.00 | 19.30 - selesai', NULL, NULL, NULL, '2023-07-11 21:12:29', '2023-07-11 21:12:29'),
(50, 88, NULL, NULL, '10.00 - 12.00', NULL, '14.00 - 16.00', NULL, NULL, '2023-07-11 21:13:32', '2023-07-11 21:13:32'),
(51, 89, '18.00 - 20.00', '18.00 - 20.00', '18.00 - 20.00', '18.00 - 20.00', '18.00 - 20.00', NULL, NULL, '2023-07-11 21:14:03', '2023-09-08 19:51:36'),
(52, 90, '16.30 - 17.30', '16.30 - 17.30', NULL, '16.30 - 17.30', '16.30 - 17.30', '07.00 - 08.00', NULL, '2023-07-11 21:14:58', '2023-09-08 19:52:23'),
(53, 42, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, '2023-07-11 21:16:27', '2023-07-11 21:16:27'),
(54, 43, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, '2023-07-11 21:16:43', '2023-07-11 21:16:43'),
(55, 44, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, NULL, '2023-07-11 21:16:59', '2023-07-11 21:16:59'),
(56, 45, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, NULL, '2023-07-11 21:17:15', '2023-07-11 21:17:15'),
(57, 46, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, '2023-07-11 21:17:40', '2023-07-11 21:17:40'),
(58, 47, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, NULL, '2023-07-11 21:18:06', '2023-07-11 21:18:06'),
(59, 48, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, '2023-07-11 21:19:56', '2023-07-11 21:19:56'),
(60, 49, '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', '07.30  - 20.00', NULL, '2023-07-11 21:20:11', '2023-07-11 21:20:11'),
(61, 2, '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '16.00 - 18.00', '10.30 - 12.00', NULL, '2023-07-11 23:25:59', '2023-09-08 19:39:13'),
(62, 91, '07.30 - 20.00', '07.30 - 20.00', '07.30 - 20.00', '07.30 - 20.00', '07.30 - 20.00', '07.30 - 20.00', NULL, '2023-09-08 19:40:16', '2023-09-08 19:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL,
  `nama_keahlian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama_keahlian`) VALUES
(1, 'Dokter Umum'),
(2, 'Dokter Spesialis Gigi'),
(3, 'Dokter Spesialis Obgyn');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama_layanan`, `gambar`, `created_at`, `updated_at`) VALUES
(19, 'Operasi Amandel', 'Layanan WEB_Operasi Amandel.jpg', '2023-08-03 18:00:14', '2023-08-03 18:00:14'),
(20, 'Operasi Eracs', 'Layanan WEB_Operasi ERACS update.jpg', '2023-08-03 18:00:49', '2023-09-25 01:01:09'),
(21, 'Operasi Khitan', 'Layanan WEB_Operasi KHITAN.jpg', '2023-08-03 18:01:08', '2023-08-03 18:01:08'),
(22, 'X Ray Panoramic', 'Layanan WEB_X-ray Panoramic & Cephalometri.jpg', '2023-08-03 18:01:55', '2023-08-03 18:01:55'),
(23, 'Operasi Usus Buntu', 'Layanan WEB_Operasi Usus Buntu copy.jpg', '2023-08-06 20:05:53', '2023-08-06 20:05:53'),
(24, 'Operasi Saluran Perkemihan', 'Layanan WEB_Operasi Saluran perkemihan update.jpg', '2023-08-06 20:06:34', '2023-09-25 01:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `mcu`
--

CREATE TABLE `mcu` (
  `id` int(11) NOT NULL,
  `paket_mcu` varchar(500) DEFAULT NULL,
  `tarif_personal` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mcu`
--

INSERT INTO `mcu` (`id`, `paket_mcu`, `tarif_personal`, `created_at`, `updated_at`) VALUES
(1, 'MCU Basic', 369000, '2023-12-20 14:31:05', '2023-12-20 14:31:06'),
(2, 'MCU Simple', 572000, '2023-12-20 14:31:07', '2023-12-20 14:31:07'),
(3, 'MCU Standar', 929000, '2023-12-20 14:31:21', '2023-12-20 14:31:21'),
(4, 'MCU Lengkap', 1595000, '2023-12-20 14:31:40', '2023-12-20 14:31:42'),
(5, 'MCU Pra-Nikah Wanita', 6919000, '2023-12-20 14:32:08', '2023-12-20 14:32:12'),
(6, 'MCU Pra-Nikah Pria', 2184000, '2023-12-20 14:32:28', '2023-12-20 14:32:34'),
(7, 'MCU Jantung', 1922000, '2023-12-20 14:32:53', '2023-12-20 14:32:55'),
(8, 'MCU Tumor Marker', 6306000, '2023-12-20 14:33:19', '2023-12-20 14:33:21'),
(9, 'MCU Pra-Kerja Basic Wanita', 328000, '2023-12-20 14:34:42', '2023-12-20 14:34:44'),
(10, 'MCU Pra-Kerja Basic Pria', 307000, '2023-12-20 14:39:55', '2023-12-20 14:39:57'),
(11, 'MCU Pra-Kerja Standar Wanita', 503000, '2023-12-20 14:40:17', '2023-12-20 14:40:19'),
(12, 'MCU Pra-Kerja Basic Pria', 482000, '2023-12-20 14:40:35', '2023-12-20 14:40:36'),
(13, 'MCU Pra-Study', 398000, '2023-12-20 14:40:52', '2023-12-20 14:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_022148_create_posts_table', 1),
(6, '2023_03_17_012336_create_categories_table', 1),
(7, '2023_03_07_043601_create_jadwal_a_s_table', 2),
(8, '2023_03_08_025432_create_jadwal_b_s_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penunjang`
--

CREATE TABLE `penunjang` (
  `id` int(11) NOT NULL,
  `penunjang` varchar(500) DEFAULT NULL,
  `layanan_p` varchar(500) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `p1` varchar(500) DEFAULT NULL,
  `p2` varchar(500) DEFAULT NULL,
  `p3` varchar(500) DEFAULT NULL,
  `p4` varchar(500) DEFAULT NULL,
  `p5` varchar(500) DEFAULT NULL,
  `p6` varchar(500) DEFAULT NULL,
  `p7` varchar(500) DEFAULT NULL,
  `p8` varchar(500) DEFAULT NULL,
  `p9` varchar(500) DEFAULT NULL,
  `p10` varchar(500) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penunjang`
--

INSERT INTO `penunjang` (`id`, `penunjang`, `layanan_p`, `keterangan`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'lab', 'Hematologi ', 'Pelayanan Hematologi merupakan pemeriksaan penunjang yang dilakukan untuk mendiagnosis penyakit tertentu yang mempengaruhi jumlah, ukuran rata-rata sel darah, pemeriksaannya meliputi :', '- Darah Rutin (Hemoglobin, Hematokrit, Jumlah Leukosit, Jumlah Trombosit, dan eritrosit)', '- Darah Lengkap (Hemoglobin, Hematokrit, Jumlah Leukosit, Hitung Jenis Leukosit, Jumlah Trombosit, Jenis Trombosit (MCV, MCH, MCHC), eritrosit dan Laju Endap Darah/LED)', '- Golongan Darah + Rhesus', '- Apus Darah Tepi ', '- Preparat Malaria, dll', '-', '-', '-', '-', '-', '1. Lab 001 copy quatron m1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'lab', 'Kimia Klinik ', 'Pelayanan Kimia Klinik merupakan analisa sampel darah menggunakan reaksi kimia, pemeriksaan ini meliputi :', '- Fungsi Hati merupakan salah satu organ penting dalam tubuh manusia yaitu untuk membantu proses metabolisme tubuh serta menghasilkan cairan empedu yang membantu proses pencernaan. Pemeriksaan yang bisa dilakukan diantaranya : (SGOT, SGPT, Bilirubin Total, Bilirubin Direk’, Protein Total, Albumin, dll )', '- Fungsi Ginjal merupakan pemeriksaan yang dilakuan untuk mengetahui seberapa baik organ ginjal bekerja, fungsi ginjal sendiri yaitu membuang racun, kadar garam, air dan mineral berlebih yang ada dalam tubuh. Pemeriksaannya yaitu :(Ureum, Kreatinin, Asam Urat)', '- Profil Lipid (Profil Lemak) merupakan salah satu pemeriksaan yang digunakan untuk mengukur risiko seseorang terhadap penyakit kardiovaskuler/jantung, pemeriksaannya yaitu: (Cholestrol Total, Cholestrol HDL, Cholestrol LDL, Trigliserida)', '- Skrining Jantung, adapun proses pemeriksaan yang dilakukan untuk mendeteksi kemungkinan adanya gangguan jantung atau sebagai tindakan pencegahan terhadap penyakit jantung diantaranya:(CKMB,Tropinin-I )', 'Glukosa Darah (Glukosa Darah Sewaktu dapat dilakukan kapan saja, Glukosa Darah Puasa dilakukan setelah pasien berpuasa 10-12 jam, Glukosa 2 Jam PP (Post Pradial/Setelah Makan, HbA1c )', '- Elektrolit merupakan pemeriksaan untuk mengetahui kadar mineral dalam darah, diantaranya: (Natrium, Kalium, Clorida, Calcium)', '- Analisa Gas Darah untuk mengetahui derajat keasaman (pH) dalam tubuh, pemeriksaan ini biasanya dilakukan untuk pasien yang menderita cedera', '-', '-', '-', '2. Laboratorium 2023.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'lab', 'Imunoserologi', '', '- Anti Dengue NS1 merupakan pemeriksaan yang dapat mendeteksi infeksi virus dengue dengan lebih awal dan bahkan dapat terdeteksi pada hari pertama mulai demam.', '- Dengue IgG/IgM merupakan pemeriksaan yang dapat mendeteksi infeksi virus dengue di hari ke 3 setelah demam muncul', '- Tubex T merupakan pemeriksaan yang dilakukan untuk mendeteksi tifoid atau infeksi tipes', '- Pemeriksaan Hepatitis merupakan pemeriksaan untuk mengidentifikasi peradangan dalam liver, berikut adalah pemeriksaan hepatitis yang paling umum : (Hepatitis A (Anti HAV), Hepatitis B (HbsAg), Hepatitis C (Anti HCV))', '- Pemeriksaan HIV/AIDS', '- Tshs', '- T3', '- T4', '-', '-', '3. Lab 002 copy ichroma.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'lab', 'Urinalisia', 'Pelayanan Urinalisia merupakan pemeriksaan sampel urin yang bertujuan untuk mendeteksi keshatan dan fungsi ginjal, urinalisia juga dilakukan sebagai bagian dari pemeriksaan kehamilan dan Tes Narkoba. Pemeriksaannya antara lain:', '- Urin Rutin (protein, glukosa, keton, bilirubin, urobilinogen, nitrit, sel darah, derajar keasaman)', 'Tes Kehamilan', '- Pemeriksaan Narkoba (amphetamin, metamphetamin, benzodiazepin, morphine, ', '-', '-', '-', '-', '-', '-', '-', '4. Lab 004 copy mision.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'lab', 'Produk Darah', 'Pelayanan produk darah di Rumah Sakit Intan Husada juga dilakukan kerjasama dengan UTD PMI Kab. Garut', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '6. hand-holding-bag-blood.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poli_a`
--

CREATE TABLE `poli_a` (
  `id` int(11) NOT NULL,
  `nama_poli` varchar(50) DEFAULT NULL,
  `keterangan` varchar(999) DEFAULT NULL,
  `kondisi` varchar(999) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli_a`
--

INSERT INTO `poli_a` (`id`, `nama_poli`, `keterangan`, `kondisi`, `gambar`, `logo`, `updated_at`, `created_at`) VALUES
(1, 'Poliklinik Umum', 'Poli umum merupakan salah satu dari jenis layanan yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.', '•	Semua jenis penyakit\r\n•	MCU\r\n', 'Klinik UMUM.jpg', 'umum.jpg', '2023-09-07 20:54:17', NULL),
(2, 'Poliklinik Gigi', 'Poli Gigi merupakan salah satu dari jenis layanan yang memberikan pelayanan kesehatan gigi dan mulut berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut seperti pencabutan gigi. Poli gigi adalah layanan seputar kesehatan mulut dan gigi. Mulai dari pemeriksaan kesehatan, pembersihan, pengobatan, hingga tindakan medis lebih lanjut.', 'Pemeriksaan dan tindakan di Poli Gigi, diantaranya :  \r\n\r\n•	Pencabutan gigi\r\n•	Gigi berlubang\r\n•	Bau mulut\r\n•	Karang gigi\r\n•	Penyakit gusi\r\n•	Sariawan\r\n•	Gigi sensitive\r\n•	Gigi patah atau retak\r\n•	Gigi palsu\r\n•	Bleaching\r\n•	Perawatan saluran akar', 'Klinik Gigi.jpg', 'gigi.jpg', '2023-08-08 18:36:20', NULL),
(4, 'Poliklinik Bedah Syaraf', 'Poliklinik Bedah Saraf didedikasikan untuk menangani pencegahan, diagnosis, tindakan pembedahan dan rehabilitasi kelainan pada sistem saraf termasuk Otak, saraf tulang belakang, sistem saraf pusat dan sistem saraf tepi, dan sistem pembuluh darah otak. Bedah saraf adalah suatu prosedur medis yang bertujuan untuk melakukan diagnosis atau mengobati penyakit yang melibatkan sistem saraf.', '•	Perawatan sistem saraf, termasuk otak, sumsum tulang belakang, seluruh saraf yang memanjang dari sumsum tulang belakang.\r\n•	Aneurisma otak / Pecahnya pembuluh darah otak \r\n•	Kanker atau tumor di otak, tengkorak, serta tulang belakang\r\n', 'Klinik Bedah Saraf.jpg', 'bedah_saraf.jpg', NULL, NULL),
(5, 'Poliklinik Anak', 'Poli Spesialis Anak adalah layanan pemeriksaan dan pengobatan terhadap bayi dan anak sakit langsung oleh Dokter Spesialis Anak yang berkompeten di bidangnya. ', '•	Pemeriksaan Kesehatan Anak\r\n•	Pemeriksaan Tumbuh Kembang Anak\r\n•	Imunisasi\r\n', 'Klinik Anak.jpg', 'anak.jpg', NULL, NULL),
(6, 'Poliklinik Bedah Umum', 'Poli Bedah Umum merupakan pelayanan kesehatan dalam proses pembedahan umum yang ditangani oleh Dokter Spesialis Bedah Umum yang sudah berpengalaman di bidangnya.\r\nBedah umum adalah disiplin bedah atau spesialisasi yang meliputi, tetapi tidak terbatas pada prosedur bedah yang dilakukan pada usus, hati, usus besar, pankreas, kantung empedu, perut dan kelenjar tiroid. \r\n', '•	Apendiksitis / Usus buntu\r\n•	Peritonitis / peradangan yang terjadi pada peritoneum (selaput perut) seperti usus buntu pecah\r\n•	Tumor jinak, seperti lipoma (benjolan lemak yang tumbuh secara perlahan di antara kulit dan lapisan otot), fibroma (benjolan lemak yang tumbuh secara perlahan di antara kulit dan lapisan otot), dan adenoma (benjolan lemak yang tumbuh secara perlahan di antara kulit dan lapisan otot)\r\n•	Tumor atau kanker pada organ tertentu, seperti kanker payudara, kanker usus, dan kanker lambung\r\n•	Hernia / turun berok\r\n•	Hemoroid / wasir\r\n•	Cedera atau luka, seperti luka tusuk dan bakar\r\n', 'bedah.jpg', 'bedah umum.jpg', NULL, NULL),
(7, 'Poliklinik Kedokteran Jiwa', 'Poli Psikiatri melayani pemeriksaan, pengobatan, tindakan dan konsultasi berbagai penyakit yang berhubungan dengan kejiwaan.Psikiater adalah ahli medis yang fokus menangani masalah kesehatan mental dan perilaku melalui upaya pencegahan, kuratif, dan rehabilitatif dengan pemberian konseling, psikoterapi, dan obat-obatan. ', '•	Pelayanan Farmakoterapi / pemberian obat-obatan penyakit kejiwaan\r\n•	Psikoterapi / terapi yang diberikan melalui pendekatan psikis\r\n•	Psikiatri anak dan remaja merupakan seputar kesehatan kejiwaan anak dan remaja usia 1-17 tahun\r\n•	Test TOVA (Test of Variables of Attention) adalah tes untuk memeriksa tingkat perhatian anak, biasa dipakai untuk diagnosis anak ADHD (Attention Deficit Hyperactivity Disorder)\r\n•	Hipnoterapi / terapi dengan metode hipnosis (memasuki alam bawah sadar)\r\n', 'Klinik Kedokteran Jiwa.jpg', 'poli-jiwa.jpg', '2023-09-07 20:57:56', NULL),
(8, 'Poliklinik Bedah Ortopedi', 'Dokter Spesialis Ortopedi dan Traumatologi. Secara umum, peran spesialis ortopedi adalah mendiagnosis dan mengobati cedera yang disebabkan oleh olahraga atau aktivitas fisik pada pasien dari segala usia, baik itu bayi, dewasa, maupun lanjut usia (lansia)', '•	Osteoporosis / pengeroposan tulang\r\n•	Osteoarthritis / radang tulang rawan sendi\r\n•	Traumatologi / penanganan beberapa luka, seperti patah tulang, cedera jaringan lunak, luka kulit, dan cedera pada organ lainnya yang disebabkan oleh kecelakaan atau kekerasan \r\n•	Pertolongan emergensi\r\n•	Reumatik / penyakit yang ditandai dengan nyeri dan peradangan pada sendi\r\n•	Kasus-kasus ortopedi lainnya\r\n', 'Klinik Orthopaedi.jpg', 'orthopedi.jpg', NULL, NULL),
(9, 'Poliklinik Kebidanan dan Kandungan', 'Poli obsgin adalah bagian layanan di rumah sakit yang dijalankan oleh dokter spesialis obstetrik (kebidanan) dan ginekologi (penyakit kandungan). Selain mengatasi masalah kandungan, Poli Obsgin juga mengatasi tipe gangguan pada sistem reproduksi wanita. Ahli ginekologi memiliki prioritas untuk menangani semua jenis masalah yang dihadapi oleh wanita baik keluhan fisik atau psikologis.', '•	Antenatal care (perawatan selama masa kehamilan) <br>\r\n•	Masalah menstruasi dan menopause, penyakit menular seksual, gangguan kesehatan seksual, dan masalah pada organ reproduksinya.\r\n•	Masalah kesuburan wanita.\r\n•	Diagnosa dan mengobati masalah hormon terkait reproduksi wanita.\r\n•	Menangani masalah perdarahan setelah melahirkan.\r\n', 'poli-obgyn.jpg', 'obgyn.jpg', NULL, NULL),
(10, 'Poliklinik Fetomaternal', 'Fetomaternal merupakan subspesialis bidang kandungan dan kebidanan yang berfokus pada deteksi dan diagnosis kelainan pada janin (fetal) dan ibu (maternal). Fetomaternal dilakukan dengan USG yang disebut USG fetomaternal, dengan tujuan mencari tahu adanya kelainan sedini mungkin jika memang ada.', NULL, 'Klinik Fetomaternal.jpg', 'subsp-fetomaternal.jpg', '2023-09-07 20:58:49', NULL),
(11, 'Poliklinik Bedah Digestif', 'Layanan Bedah Digestif memiliki peran penting dalam mendiagnosa sekaligus menangani permasalahan gangguan pada sistem pencernaan pasien. Bedah Digestif dengan metode Laparoskopi merupakan teknik operasi menggunakan alat khusus yang memungkinkan dokter melakukan pembedahan tanpa membuka dinding perut. Teknik operasi ini hanya sebesar lubang kunci dan proses penyembuhannya lebih cepat daripada teknik operasi biasa.', '•	Tumor, kanker, cedera, dan perdarahan pada saluran cerna\r\n•	Kanker hati dan pankreas\r\n•	Akalasia / kelainan langka yang membuat makanan atau cairan sulit masuk ke lambung\r\n•	Hernia / turun berok\r\n•	Prolaps rectum / kondisi di mana usus menonjol keluar melalui anus\r\n•	Penyakit kantung empedu, seperti Cholelitiasis / batu empedu\r\n•	Gangguan pada usus, seperti radang usus, usus buntu, divertikulitis, penyakit Crohn, dan kolitis ulseratif\r\n•	Gastroesophageal Reflux Disease (GERD) / penyakit asam lambung   \r\n•	Barrett esofagus, yaitu rusaknya lapisan di kerongkongan akibat GERD\r\n•	Obesitas yang memerlukan tindakan operasi, seperti pemotongan lambung\r\n•	Kasus-kasus saluran cerna lainnya\r\n', 'Klinik Bedah Digestif.jpg', 'subs-bedah-digestif.jpg', '2023-09-07 20:59:48', NULL),
(12, 'Poliklinik Penyakit Dalam', 'Poli penyakit dalam merupakan poliklinik yang menangani orang dewasa dan lansia dengan penanganan penyakit yang meliputi non-bedah. Poli penyakit dalam memberikan penanganan kesehatan preventif, pemeriksaan fisik, memberikan penanganan darurat dan sejenisnya. Dokter spesialis penyakit dalam adalah dokter spesialis organ dalam, seperti jantung, ginjal, hati dan paru-paru. ', '•	Imunologi / sistem kekebalan tubuh\r\n•	Gastroenterohepatologi / gangguan pada saluran cerna seperti lambung, pankreas, hati, empedu, usus, dan rektum\r\n•	Geriatrik / pasien Lanjut Usia dengan multi penyakit dan/atau gangguan akibat penurunan fungsi organ, psikologi, sosial, ekonomi dan lingkungan yang membutuhkan pelayanan kesehatan secara terpadu\r\n•	Hipertensi / darah tinggi\r\n•	Diabetes Melitus / kencing manis\r\n•	Hematologi onkologi yaitu gabungan hematologi (studi tentang fisiologi darah) dan onkologi medik (studi tentang pengobatan kanker seperti kemoterapi, target terapi, hormonal terapi dan imunoterapi)\r\n•	Kardiologi / gangguan pada jantung dan pembuluh darah\r\n•	Endokrin / jaringan kelenjar yang memproduksi dan melepaskan hormon\r\n•	Psikosomatik / keluhan fisik yang timbul atau dipengaruhi oleh pikiran atau emosi, bukannya oleh alasan fisik yang jelas\r\n\r\n', 'comprof_3 x_WEB.jpg', 'dalam.jpg', NULL, NULL),
(13, 'Poliklinik Neurologi / Saraf', 'Poli Neurologi adalah poliklinik yang menangani kelainan pada sistem saraf yang ditangani langsung oleh dokter spesialis Neurologi dengan memiliki kemampuan untuk mendiagnosis, merawat, dan memanejemen pasien dan kelainan saraf.', '•	Stroke / Kerusakan otak akibat gangguan suplai darah', 'klinik saraf.jpg', 'saraf.jpg', NULL, NULL),
(14, 'Poliklinik Urologi', 'Poli urologi adalah poliklinik yang menangani masalah kesehatan pada sistem saluran kemih, termasuk ginjal, kandung kemih, kelenjar adrenal, dan saluran kemih. Dokter urologi juga dapat menangani masalah pada organ reproduksi pria, seperti penis, testis, dan kelenjar prostat.', '•	Infeksi saluran kemih\r\n•	Batu ginjal\r\n•	Disfungsi ereksi\r\n•	Pembesaran kelenjar dan kanker prostat\r\n•	Kanker kandung kemih\r\n•	Vasektomi / kontrasepsi pada pria yang dilakukan dengan cara memutus saluran sperma dari buah zakar (testis)\r\n•	Benign Prostatic Hyperplasia (BPH) / pembesaran kelenjar prostat\r\n•	Perbaikan saluran kandung kemih dan saluran reproduksi pria\r\n•	Program hamil\r\n', 'urologi.jpg', 'urologi.jpg', NULL, NULL),
(15, 'Poliklinik Kulit dan Kelamin', 'Poliklinik Kulit dan Kelamin adalah Poliklinik yang bertujuan untuk membantu pasien yang memiliki permasalahan kulit, kecantikan dan penyakit kelamin dengan didukung beberapa dokter ahli spesialis kulit dan kelamin. ', '•	Alergi Kulit\r\n•	Infeksi Jamur\r\n•	Herpes Zoster / penyakit yang ditandai dengan munculnya ruam berisi cairan pada kulit\r\n•	Psoriasis / peradangan pada kulit yang menyebabkan kulit bersisik, menebal, mudah terkelupas, dan kadang juga terasa gatal\r\n•	Kanker Kulit\r\n•	Sifilis (raja singa) / penyakit menular seksual yang disebabkan oleh infeksi bakteri\r\n•	Gonore / penyakit menular seksual yang ditandai dengan munculnya nanah pada urine\r\n•	Chlamydia / Penyakit menular seksual umum yang mungkin tidak menimbulkan gejala\r\n•	Human Papillomavirus (HPV) / Infeksi yang menyebabkan kutil di berbagai bagian tubuh\r\nAdapun Tindakan yang dilakukan oleh dokter spesialis kulit dan kelamin diantaranya :\r\n•	Bedah Listrik\r\n•	Laser \r\n•	Penghapusan tahi lalat\r\n•	Bedah eksisi\r\n', 'kulit & kelamin.jpg', 'kulit-kelamin.jpg', NULL, NULL),
(16, 'Poliklinik Paru', 'Poli Paru merupakan pelayanan Kesehatan Paru paru yang di tangani langsung oleh Dokter Spesialis Paru yang sudah berpengalaman.', '•	Pneumonia / peradangan paru-paru yang disebabkan oleh infeksi\r\n•	Asma \r\n•	Bronkitis / peradangan atau iritasi pada dinding saluran bronkus, tepatnya pipa yang menyalurkan udara dari tenggorokan menuju paru-paru\r\n•	Bronkiektasis / kerusakan dan pelebaran permanen pada bronkus dan saluran pernapasan)\r\n•	Penyakit Paru Obstruktif Kronik (PPOK)\r\n•	Jenis penyakit pernafasan lainnya\r\nPemeriksaan penunjang yang bisa dilakukan di poli paru diantaranya :\r\n•	Spirometri / tes untuk menilai fungsi paru\r\n', 'klinik paru.jpg', 'paru.jpg', NULL, NULL),
(17, 'Poliklinik Rehabilitasi Medik', 'Poli rehabilitasi medik adalah pelayanan kesehatan terhadap gangguan fisik dan fungsi yang diakibatkan oleh keadaan/kondisi sakit, penyakit atau cidera, melalui paneduan intervensi medik, keterampilan fisik, keteknisian medik dan atau rehabilitatif untuk mencapai kemampuan fungsi yang optimal.', '•	Laser  berfungsi untuk Menghilangkan rasa nyeri\r\n•	Taping berfungsi untuk pencegahan cedera, meningkatkan fungsi kerja otot, dan merelaksasi otot yang mengalami kontraksi berlebih\r\n•	Jenis keluhan pada bagian otot\r\n', 'rehab-medik.jpg', 'rehab medis.jpg', NULL, NULL),
(18, 'Poliklinik Mata', 'Poli mata merupakan pelayanan mata secara menyeluruh secara nyaman dan terpercaya, yang meliputi aspek preventif, kuratif, promotif dan rehabilitatif bedah maupun non bedah dengan harapan dapat menurunkan angka kebutaan di Indonesia.', '•	Visus / ketajaman penglihatan\r\n•	Buta warna\r\n•	Slit lamp / pemeriksaan untuk mendiagnosis penyakit Mata\r\n•	Refractometer / metode pengukuran kelainan refraksi (kelainan mata yang memerlukan bantuan penggunaan kacamata) secara obyektif, dengan kata lain tidak mengandalkan pasien secara penuh dalam proses perhitungannya\r\n•	Tonometri / alat untuk mengukur tekanan bola mata\r\n•	Funduskopi / alat bantu untuk menerangi dan memperbesar gambaran dalam mata\r\nTindakan Yang bisa dilakukan di poli mata diantaranya :\r\n•	Insisi hordeolum / bintitan \r\n•	Eksisi pterygium / lamad putih \r\n•	Korpus alienum konjungtiva / adanya benda asing seperti terciprat elasan\r\n•	Spooling fluorescin test / membersihkan mata dengan diberikan tetes fluorescin agar trauma seperti goresan atau robekan dapat terlihat \r\n•	Tindakan mata lainnya\r\n', 'poli-mata.jpg', 'mata.jpg', NULL, NULL),
(19, 'Poliklinik THT', 'Poli THT merupakan Poliklinik yang menangani dan melayani pemeriksaan telinga/hidung/tenggorok, ditangani oleh dokter spesialis THT-KL yang berpengalaman di bidangnya. Pemeriksaan THT adalah prosedur untuk melihat adanya masalah terkait telinga, hidung, dan tenggorokan (THT) merupakan bagian dari sistem pernapasan bagian atas.', '•	Endoskopi  telinga / Teropong telinga\r\n•	Nasofaringoskopi / Teropong tenggorokan\r\n•	Nasoendoskopi / Teropong hidung\r\n•	Oto Accoustic Emission (OAE) / alat untuk melakukan screening pada bayi baru lahir  untuk melihat kemungkinan terjadi gangguan ketulian atau tidak\r\n•	Jenis Tindakan THT lainnya\r\n', 'poli-tht.jpg', 'tht.jpg', NULL, NULL),
(20, 'Poliklinik Jantung', 'Poli Jantung merupakan salah satu unit poliklinik rawat jalan dengan konsentrasi layanan pasien yang mengalami kelainan/gangguan jantung dan pembuuh darah (kardiovaskuler). Penyakit yang ditangani oleh dokter spesialis jantung', '•	Aterosklerosis / penyempitan pembuluh darah yang disebabkan oleh penumpukan lemak, kolesterol, dan zat lain di dalam dan di dinding arteri. \r\n•	Fibrilasi atrium / Denyut jantung tidak teratur dan sering kali cepat yang umumnya menyebabkan aliran darah tidak lancar\r\n•	Aritmia / gangguan yang terjadi pada irama jantung\r\n•	Penyakit jantung bawaan\r\n•	Penyakit jantung koroner\r\n•	Penyakit jantung kongestif\r\n•	Kolesterol dan trigliserida\r\n•	Hipertensi atau tekanan darah tinggi\r\nPemeriksaan jantung yang bisa dilakukan diantaranya :\r\n•	EKG (Elektrokardiografi) / Rekam Jantung\r\n•	Echocardiography / USG Jantung\r\n•	Treadmill / monitoring kinerja jantung\r\n', 'poli-jantung.jpg', 'jantung.jpg', NULL, NULL),
(22, 'Poliklinik Gizi Klinik', 'Poli gizi klinik merupakan layanan yang menangani berbagai masalah gizi akibat kondisi/penyakit tertentu dan komplikasinya. Dokter gizi klinik akan memberikan diagnosis, edukasi dan terapi medis gizi pada pasien secara personal. Poli Gizi Klinik juga mrmbantu menangani masalah kebugaran/physical fitness yang dapat membantu meningkatkan produktivjtas kerja dan performa fisik.', '•	Obesitas \r\n•	Kurang gizi\r\n•	Gangguan nutrisi yang sering terjadi pada kelompok orang yang rentan seperti bayi, anak-anak, remaja, wanita hamil dan menyusui, serta lansia.\r\n•	Menangani berbagai penyakit lainnya untuk kebutuhan diet', 'Klinik Gizi Klinik.jpg', 'gizi.jpg', '2023-08-08 17:59:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `excerpt` varchar(50) DEFAULT NULL,
  `body` varchar(500) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `excerpt`, `body`, `gambar`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 'Judul Kedua', 'consequat. Duis aute irure dolor in reprehenderit ', 'incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'gallery-4.webp', '2023-03-17 01:35:23', '2023-03-17 01:35:26', '2023-03-17 01:35:27'),
(10, 'sdasd', 'asdasda', 'aku daldalh anak gembala selau riang serta gembira, karena aku senagn bekkerja memebaln slajd', 'bakso.jpg', NULL, '2023-06-21 19:15:25', '2023-06-21 19:15:25'),
(11, 'hadeh', 'adad', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'coffee.png', NULL, '2023-06-21 20:53:48', '2023-06-21 20:53:48'),
(12, 'gagagg', 'agagaaggggggggggggg', 'agggggggggggggggggggggggggggggggggg', 'curry.png', NULL, '2023-06-21 20:54:55', '2023-06-21 20:54:55'),
(13, 'qe', 'qeq', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'seblak.jpg', NULL, '2023-06-21 21:04:35', '2023-06-21 21:04:35'),
(14, 'tqtq', 'qtqtqtq', 'tttttttttttttttttttt', 'loggweb.png', NULL, '2023-06-21 21:18:24', '2023-06-21 21:18:24'),
(15, 'gaga', 'gagag', 'ggggggggggggggg', 'Logo-rsih.png', NULL, '2023-06-21 21:21:52', '2023-06-21 21:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `ranap`
--

CREATE TABLE `ranap` (
  `id` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `fas1` varchar(100) NOT NULL,
  `fas2` varchar(100) NOT NULL,
  `fas3` varchar(100) NOT NULL,
  `fas4` varchar(100) NOT NULL,
  `fas5` varchar(100) NOT NULL,
  `fas6` varchar(100) NOT NULL,
  `fas7` varchar(100) NOT NULL,
  `fas8` varchar(100) NOT NULL,
  `fas9` varchar(100) NOT NULL,
  `fas10` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ranap`
--

INSERT INTO `ranap` (`id`, `kelas`, `fas1`, `fas2`, `fas3`, `fas4`, `fas5`, `fas6`, `fas7`, `fas8`, `fas9`, `fas10`, `harga`, `gambar`, `gambar2`, `video`, `created_at`, `update_at`) VALUES
(1, 'VVIP', 'Luas Kamar 32 m?', 'Kapasitas 1 bed/kamar', '1 Bedside Cabinet', 'Led TV + TV Kabel', 'Dispenser + Kulkas + AC + Lemari Pakaian', 'Kursi Penunggu + Sofa Bed', 'Bell Pasien', 'Meja Dan Kursi Makan', 'Toilet + Shower', 'Free Wifi', 'Rp. 1.200.000 / hari', 'x vvip ok web.jpg', 'vvip.jpg', 'VVIP.mp4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'VIP', 'Luas Ruangan 32m2', '1 Bed/Kamar', '1 Bedside Cabinat', 'Led Tv + Tv Kabel', 'Dispenser+Kulkas+Ac + Lemari Pakaian', 'Sofa Bed', 'Bell Pasien', 'Bed + Meja Makan Pasien', 'Toilet + Shower', '-', 'Rp. 1.000.000 / hari', 'x VIP web.jpg', 'vip.jpg', 'VIP.mp4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Utama', 'Luas Ruangan 15M2', 'Kapasitas 1 Bed /Kamar', '1 Bedside Cabinet', 'Bed+Meja Makan Pasien', 'Tv + Dispenser+Ac', 'Sofa Bed', 'Bell Pasien ', 'Toilet+Shower', '-', '-', 'Rp. 850.000 / hari', 'x Utama web.jpg', 'utama.jpg', 'utama.mp4', '2023-09-06 04:37:05', '0000-00-00 00:00:00'),
(4, 'Kelas 1', 'Luas Ruangan 10M2', 'Kapasitas 1Bed /Kamar', '1 Bedside Cabinet', 'Bed+Meja Makan Pasien', 'Tv + Ac', 'Sofa penunggu pasien', 'Bed Pasien', 'Toilet + Shower', '-', '-', 'Rp. 650.000 / hari', 'x Kelas 1 web.jpg', 'kelas1.jpg', 'kelas1.mp4', '2023-09-06 04:36:49', '0000-00-00 00:00:00'),
(5, 'Kelas 2', 'Luas Kamar 30 M', 'Kapasitas 2 Bed/Kamar', 'Kamar Isolasi', 'Dilengkapi Bedside Cabinet', 'Bed + Meja Makan Pasien', 'Sofa Bed', '2 Bed Ruang Isolasi Tekanan Negatif', 'Di Lengkapi Balkon', 'Toilet + Shower(Bersama)', '-', 'Rp. 500.000 / hari', 'x Kelas 2 web.jpg', 'kelas2.jpg', 'kelas2.mp4', '2023-09-09 02:24:46', '0000-00-00 00:00:00'),
(6, 'Kelas 3', 'Luas Ruangan 30M2', 'Kapasitas 6 Dan 8 Bed/Kamar', 'Kamar Isolasi(Bedside Cabinet)', 'Bed + Meja Makan Pasien', 'Tv + Ac(Bersama)', 'Bell Pasien', 'Toilet + Shower', '-', '-', '-', 'Rp. 225.000 / hari', 'x Kelas 3 web.jpg', 'kelas3.jpg', 'kelas3.mp4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Isolasi', 'Luas Kamar 30 M', 'Kapasitas 2 Bed/Kamar', ' Kamar Isolasi', 'Dilengkapi Bedside Cabinet\r\n', 'Bed + Meja Makan Pasien', ' Sofa Bed\r\n', ' 2 Bed Ruang Isolasi Tekanan Negatif\r\n', ' Di Lengkapi Balkon\r\n', ' Toilet + Shower(Bersama)\r\n', 'Exhaust Fan', 'Rp.650.000 / hari', 'x-iso.jpg', 'isolasi.jpg', 'Isolasi Tekanan Negatif.mp4', '2023-09-09 02:24:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rekanan_m`
--

CREATE TABLE `rekanan_m` (
  `id` int(11) NOT NULL,
  `nama_rekan` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekanan_m`
--

INSERT INTO `rekanan_m` (`id`, `nama_rekan`, `logo`, `updated_at`, `created_at`) VALUES
(1, 'AA Internasional', 'Logo Asuransi_aa international-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ABDA', 'Logo Asuransi_ABDA-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ACA', 'Logo Asuransi_ACA-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ADMedika', 'Logo Asuransi_ADMedika-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'AIA', 'Logo Asuransi_AIA-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Allianz', 'Logo Asuransi_Allianz-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Asuransi MAG', 'Logo Asuransi_Asuransi MAG-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'avrist', 'Logo Asuransi_avrist-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'AXA', 'Logo Asuransi_AXA-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Bank bjb syariah', 'Logo Asuransi_Bank bjb syariah-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'BCA life', 'Logo Asuransi_BCA life-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'BNI Life', 'Logo Asuransi_BNI Life-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'BPJS bpjamsostek', 'Logo Asuransi_BPJS bpjamsostek-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'BRI Life', 'Logo Asuransi_BRI Life-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'CAR', 'Logo Asuransi_CAR-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Equity Life', 'Logo Asuransi_Equity Life-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Fullerton Health', 'Logo Asuransi_Fullerton Health-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Garda Medika', 'Logo Asuransi_Garda Medika-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Generali', 'Logo Asuransi_Generali-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Halodoc', 'Logo Asuransi_Halodoc-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'HCML', 'Logo Asuransi_HCML-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Indonesia Power', 'Logo Asuransi_Indonesia Power-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Inova Care Asia', 'Logo Asuransi_Inova Care Asia-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'International SOS', 'Logo Asuransi_International SOS-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'ISOmedik', 'Logo Asuransi_ISOmedik-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Jasa Raharja', 'Logo Asuransi_Jasa Raharja-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Jasindo', 'Logo Asuransi_Jasindo-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Mandiri Inhealth', 'Logo Asuransi_Mandiri Inhealth-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Medlinx', 'Logo Asuransi_Medlinx-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'MP', 'Logo Asuransi_MP-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Nayaka', 'Logo Asuransi_Nayaka-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Owlexa', 'Logo Asuransi_Owlexa-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'PAMA', 'Logo Asuransi_PAMA-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Pertamedika', 'Logo Asuransi_Pertamedika-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Phoenix', 'Logo Asuransi_Phoenix-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'PLN', 'Logo Asuransi_PLN-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Prima Sarana Jasa', 'Logo Asuransi_Prima Sarana Jasa-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Prudential', 'Logo Asuransi_Prudential-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'PT HM Sampoerna Tbk.', 'Logo Asuransi_PT HM Sampoerna Tbk.-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Sequislife', 'Logo Asuransi_Sequislife-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Sinarmas', 'Logo Asuransi_Sinarmas-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Smilynks', 'Logo Asuransi_Smilynks-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Sompo', 'Logo Asuransi_Sompo-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'SSA', 'Logo Asuransi_SSA-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Star Energy', 'Logo Asuransi_Star Energy-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Syntech', 'Logo Asuransi_Syntech-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Takaful Keluarga', 'Logo Asuransi_Takaful Keluarga-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'taspen', 'Logo Asuransi_taspen-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Tugu Kresna Pratama', 'Logo Asuransi_Tugu Kresna Pratama-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Tugu Mandiri', 'Logo Asuransi_Tugu Mandiri-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Yakes Pertamina', 'Logo Asuransi_Yakes Pertamina-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Yakes Telkom', 'Logo Asuransi_Yakes Telkom-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'YKP Bank bjb', 'Logo Asuransi_YKP Bank bjb-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Zurich', 'Logo Asuransi_Zurich-01.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `isi_testimoni` varchar(9999) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `foto`, `isi_testimoni`, `created_at`, `updated_at`) VALUES
(2, 'Darisman Salam', 'Screenshot 2023-08-11 154507.png', 'Untuk pelayanannya sangat memuaskan', '2023-08-11 01:46:01', '2023-08-11 01:46:01'),
(3, 'Florence Rats', 'unnamed.png', 'Nyaman, bersih, semua pelayanan memuaskan', '2023-08-11 01:47:55', '2023-08-11 01:49:28'),
(4, 'Handi Herdiana', 'unnamed (1).png', 'nice improvement for services and facilities (e.g masjid)....pelayanan bagus..termasuk dari pendaftaran pasien sudah bisa online / pakai aplikasi', '2023-08-11 01:51:04', '2023-08-11 01:51:04'),
(5, 'Lestari putri Andarianti', 'unnamed (2).png', 'Alhamdulillah sangat memuaskan,pelayanan sangat baik,perawat dan dokter sangat sigap dalam menangani pasien, fasilitas yang memadai\r\nRs intan husada...succes yaa !!!best wishes for all crew', '2023-08-11 01:53:08', '2023-08-11 01:53:08'),
(6, 'Ilma Erpiana', 'unnamed (3).png', 'Jujur, setelah bingung pilih rumah sakit mana buat rawat anak, akhirnya pilihan jatuh pada RSIH, pas pertama masuk RS udah di sambut satpam yang ramah, masuk ruang IGD suster dan dokter nya langsung cepat tanggap menangani anakku, blm lagi ngurus surat2  dan pendaftaran,yang sat set cepat sekali, kamar kelas 3 nya senyaman itu, kamar mandinya pun juga sama nyaman bersih,, pkknya lingkungan rumah sakitnya sangat sangat  nyaman dan bersih, di tambah perawat nya yang  ramah , cepat tanggap, . Pkknya pelayanan nya bagus banget gak nyesel udah pilih RSIH. Semoga rumah sakit intan Husada selalu sukses , pertahankan  pelayanan sebagus ini. Terimakasih', '2023-08-11 01:56:08', '2023-08-11 01:56:08'),
(7, 'Alvian Ramadhan', 'unnamed (4).png', 'Pelayanan cepat+baik,dokter+perawat ramah, fasilitas baik', '2023-08-11 01:59:22', '2023-08-11 01:59:22'),
(8, 'Eka Rivana', 'unnamed (5).png', 'Bukan karena ingin tapi selalu menjadi pilihan pertama kalau darurat, alhamdulillah pelayanan disini terbaik, dokter nya, perawat nya dan fasilitas nya', '2023-08-11 02:02:08', '2023-08-11 02:02:08'),
(9, 'Maysa evalina hazel', 'unnamed (6).png', 'the best hospital in town .. ga perna kecewa dengan pelayanan nya disini ..\r\ntempat nya nyaman bersih pelayanan nya jg ramah ..\r\nterima kasih n sukses selalu intan husada garut ..', '2023-08-11 02:05:48', '2023-08-11 02:05:48'),
(10, 'Rosad Muhlisin', 'unnamed (7).png', 'Pelayanan nya mantap', '2023-08-11 02:08:18', '2023-08-11 02:08:18'),
(11, 'Enung Nurhayati', 'unnamed (8).png', 'Tempat bersih, nyaman, seluruh dr, perawat ramah dan pelayanan full service', '2023-08-11 02:10:21', '2023-08-11 02:10:21'),
(12, 'Fariduddin Al Attar', 'unnamed (9).png', 'Bagus sekali pelayanannya, dokter dan pelayanannya profesional', '2023-08-11 02:11:46', '2023-08-11 02:11:46'),
(13, 'said doank', 'unnamed (10).png', 'RS intan husada pelayanan nya cepat dan perawat nya pada ramah,, ruangan nya enak, bersih', '2023-08-11 02:12:32', '2023-08-11 02:12:32'),
(14, 'Azran Halim', 'unnamed (11).png', 'Alhamdulilah tempatnya nyaman sekali, pelayananya juga bagus, dokter dan perawatnya pun ramah ramah', '2023-08-11 02:17:25', '2023-08-11 02:17:25'),
(15, 'elsa oktaviani', 'unnamed (8).png', 'Pelayanannya bagus, perawat nya juga ramah aku operasi jari kelingking karena kecelakaan, pas di ruang operasi nya juga perawatnya pada ngelawak jadi aku nggak tegang hihi', '2023-08-11 02:19:09', '2023-08-13 20:17:19'),
(16, 'Ngali Buchori', 'unnamed (12).png', 'Saya pernah di rawat di rs intan husada untuk pelayananya terhadap pasien ramah-ramah,  lanjutkan', '2023-08-11 02:23:00', '2023-08-11 02:23:00'),
(17, 'Lilis Hernaherlina', 'unnamed (13).png', 'Bagus pelayanannya tempat nya bersih nyaman sekali perawat-perawat nya  ramah tamah pokok nya mh saya seneng banget dengan pelayanan nya. thank you', '2023-08-11 02:25:20', '2023-08-11 02:25:20'),
(18, 'SILMI NURFADHILAH IRAWAN', 'unnamed (14).png', 'Pelayanan nya bagus sekali,nyaman,aman,tenang', '2023-08-11 02:26:50', '2023-08-11 02:26:50'),
(19, 'Galih M Ramdan', 'unnamed (15).png', 'Pelayanan cepat, perawat sigap, dokter ahli bidang nya', '2023-08-11 02:27:44', '2023-08-11 02:27:44'),
(20, 'Gina Gina', 'unnamed (16).png', 'Pelayanan cepat . Perawatnya ramah2', '2023-08-11 02:29:14', '2023-08-11 02:29:14'),
(21, 'widi ginanjar', 'unnamed (17).png', 'Pelayanan ramah, kamar bersih dan nyaman', '2023-08-11 02:30:18', '2023-08-11 02:30:18'),
(22, 'Faisal Nadhir', 'unnamed (18).png', 'Pelayanan memuaskan, susternya ramah ramah tempatnya nyaman dan bersih', '2023-08-11 02:31:54', '2023-08-11 02:31:54'),
(23, 'arnie nur ramadhani', 'unnamed (19).png', 'fasilitas dan pelayanan sangat memuaskan', '2023-08-11 02:32:54', '2023-08-11 02:32:54'),
(24, 'Ginna widi', 'unnamed (20).png', 'Pelayanan , servis semuanyah memuaskan.. Terimakasih RSIH', '2023-08-11 02:33:33', '2023-08-11 02:33:33'),
(25, 'dewi sulastri', 'unnamed (21).png', 'Alhamdulillah tempat nyaman sekalib,perawatnya baik , pelayanannya juga baik', '2023-08-11 02:36:35', '2023-08-11 02:36:35'),
(26, 'Fauzi Mochammad R', 'unnamed (22).png', 'Pelayanan nya enak sangat baik,nyaman dan perawat nya ramah\" semoga aja setelah pulang sehat lagi seperti hari biasa seterusnya dan biaya administrasi ringan terjangkau', '2023-08-13 19:54:51', '2023-08-13 19:54:51'),
(27, 'Risma Yusuf', 'unnamed (23).png', 'Pelayanan yg prima, gercep, tenaga kesehatan yg ramah2, ruangan yg nyaman .', '2023-08-13 20:07:48', '2023-08-13 20:07:48'),
(28, 'Muhammad Joisundava', 'unnamed (24).png', 'Pelayanan nya sangat bagus, pkoknya terbaik', '2023-08-13 20:09:00', '2023-08-13 20:09:13'),
(29, 'Anida Kusumawardani', 'unnamed (25).png', 'Mantaaappppp pokoknya dokter, ruangannya dan pelayanannnya', '2023-08-13 20:10:29', '2023-08-13 20:10:29'),
(30, 'Nono sujono', 'unnamed (26).png', 'Alhamdulillah pelayanan bagus sigap dan temptnya nyaman', '2023-08-13 20:11:46', '2023-08-13 20:11:46'),
(31, 'Arfi Suhendar', 'unnamed (27).png', 'Pelayanannya bagus, perawat dan stafnya ramah-ramah.', '2023-08-13 20:12:49', '2023-08-13 20:12:49'),
(32, 'Hilmi sitah', 'Screenshot 2023-08-14 101500.png', 'Alhamdulillah baru semalam disini pelayanan nya baik dan ramah2.. Semoga semakin maju dan sukses RSIH', '2023-08-13 20:15:21', '2023-08-13 20:15:21'),
(33, 'Hilma Lailil Mukarromah', 'unnamed (28).png', 'Perawatnya ramah2 dr spesialis nya banyak dn bgus2\r\nRuang rawat inap pun nyaman', '2023-08-13 20:19:00', '2023-08-13 20:19:00'),
(34, 'Dedi Supiandi', 'unnamed (29).png', 'Pelayanannya sangat baik', '2023-08-13 20:19:49', '2023-08-13 20:19:49'),
(35, 'Ina Wahyuni', 'unnamed (30).png', 'Alhamdulillah selama d rawat di sini,dr segi pelayanan pkony terbaik..perawatnya ramah2 pula,,fasilitas juga bagus..RSIH terbaik pkonya,,pertahankan sllu kenyamanan nya buat semua pasien', '2023-08-13 20:21:30', '2023-08-13 20:21:30'),
(36, 'Bismillah (Anen hidayat)', 'Screenshot 2023-08-14 102515.png', 'Alhamdulilah Pelayan RSIH Garut sangat baik, Para Medis nya Ramah\", keluhan cepat direspon....\r\nTks, Paramedis RSIH semoga pelayanan, pengobatan dan perawatan saya di RSIH  menjadi ladang amal ibadah paramedis semua, dan saya semoga lekas sembuh kembali kerumah berkumpul sama keluarga, terus terang walaupun  segalanya baik, ruang ranap baik tapi saya harapkan tidak kembali ke RS....\r\nDalam artian saya sehat selalu......\r\nSemoga RSIH lebih maju dan tingkatan terus pelayanan kepada pasien\" nya', '2023-08-13 20:25:41', '2023-08-13 20:26:29'),
(37, 'Dedeh Mira', 'unnamed (31).png', 'Alhamdulillah memuaskan pelayanan di rs intan husada cepat, dan pelayanan nya memuaskan terutama para perawat nya yang sangat baik2 dan sabar2.. terima kasih rsih garut..', '2023-08-13 20:27:53', '2023-08-13 20:27:53'),
(38, 'Rahma khoerunisa', 'unnamed (32).png', 'nyaman tempatnya,ramah seluruhnya', '2023-08-13 20:28:51', '2023-08-13 20:28:51'),
(39, 'Leni Marlina', 'Screenshot 2023-08-14 102953.png', 'Kelas 3 serasa kelas 1', '2023-08-13 21:17:37', '2023-08-13 21:17:37'),
(40, 'Ayu Latifah', 'unnamed (33).png', 'Pelayanan memuaskan', '2023-08-13 21:18:46', '2023-08-13 21:18:46'),
(41, 'Silvia Widiarahmi', 'unnamed (14).png', 'Pelayanan baik, dokternya cpt tanggap,susternya pun sangat membantu setiap saat. Ruangannya bersih dan nyaman.', '2023-08-13 21:20:08', '2023-08-13 21:20:08'),
(42, 'Andhika Surya Pratama', 'unnamed (35).png', 'Pelayanan bagus, Rawat inap dengan Mandiri Inhealth bisa upgrade kelas karna ada kerja sama dgn intan husada, Dan mungkin jadi RS terbaik saat ini di Garut.', '2023-08-13 21:21:17', '2023-08-13 21:21:17'),
(43, 'siti hajar Beladini', 'unnamed (37).png', 'Alhamdulillah dua kali lahiran disini,anak pertama lahiran normal anak kedua lahiran sc,pelayanan disini sangat memuaskan, ramah\", ruangannya bersih, dokternya juga sangat baik.. Terima kasih Dr rizky', '2023-08-13 21:23:06', '2023-08-13 21:23:06'),
(44, 'Winda Budiarti', 'unnamed (38).png', 'Tempat yg nyaman bersih pelayanan nya baik sekali', '2023-08-13 21:24:15', '2023-08-13 21:24:15'),
(45, 'Debi Debi', 'unnamed (39).png', 'Pelayanan bagus,, Dokter sama Perawatnya juga ramah    termasuk semua staf admin security sama staf kebersihannya ramah ramah  \r\nBalasSuka', '2023-08-13 21:24:58', '2023-08-13 21:24:58'),
(46, 'Ismy Merdekawati', 'unnamed (40).png', 'perwatan di RS intan husada sangat memuaskan, semuanya sangat baik dan membatu. terimaksih banyak RS intan husada, semakin sukses\r\nBalasSuka', '2023-08-13 21:25:32', '2023-08-13 21:25:32'),
(47, 'cicah chacha', 'unnamed (41).png', 'Assalamu\'alaikum\r\nSaya perwakilan keluarga ibu didah ingin memberikan sedikit rating kami terhadap pelayanan di RS. Intan Husada.\r\nPelayanan nya sangat baik, ramah, sopan, santun, lingkungan dan ruangan pasien sangat dijaga kebersihannya.\r\n5Starr pokoknyaa', '2023-08-14 01:27:14', '2023-08-14 01:27:14'),
(48, 'MI Alkindi', 'unnamed (42).png', 'Pelayanannya bagus, dokter dan perawatnya ramah, fasilitas jg bagus. Rumah sakit terlihat memberikan perbaikan menjadi lebih baik secara berkelanjutan', '2023-08-14 01:28:35', '2023-08-14 01:28:35'),
(50, 'Agus Bargo', 'unnamed (44).png', 'Sangat baik dan pelayanan nya sangat sopan...dan sigap...dan slalu siap menangani pasieun dlam keluhan apa pun', '2023-08-14 01:31:27', '2023-08-14 01:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@rsintanhusada.com', NULL, '$2y$10$CjMdsUFdBTUKSLpzfqLVO.TVFTt5lREup7/hsC4bIOKzMFDdZ0W.6', NULL, '2023-04-16 19:20:52', '2023-04-16 19:20:52'),
(2, 'admin', 'admin@mail.com', NULL, '$2y$10$CjMdsUFdBTUKSLpzfqLVO.TVFTt5lREup7/hsC4bIOKzMFDdZ0W.6', NULL, '2023-05-04 21:09:09', '2023-05-04 21:09:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter2`
--
ALTER TABLE `dokter2`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcu`
--
ALTER TABLE `mcu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penunjang`
--
ALTER TABLE `penunjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poli_a`
--
ALTER TABLE `poli_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranap`
--
ALTER TABLE `ranap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekanan_m`
--
ALTER TABLE `rekanan_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `dokter2`
--
ALTER TABLE `dokter2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gizi`
--
ALTER TABLE `gizi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mcu`
--
ALTER TABLE `mcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penunjang`
--
ALTER TABLE `penunjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poli_a`
--
ALTER TABLE `poli_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ranap`
--
ALTER TABLE `ranap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rekanan_m`
--
ALTER TABLE `rekanan_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
