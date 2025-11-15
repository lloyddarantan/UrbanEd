-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2025 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubraned`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_scholarships`
--

CREATE TABLE `city_scholarships` (
  `id` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `scholarship_title` varchar(255) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `apply_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_scholarships`
--

INSERT INTO `city_scholarships` (`id`, `city`, `scholarship_title`, `requirements`, `apply_link`) VALUES
(1, 'Victorias City', 'Academic Scholarship', 'Proof of City Residency, for example: Barangay Certificate, Applicant’s Personal ID; Grade 12 or High School Report Card / Form 138 indicating “Eligible to transfer to 1st year college”; PSA Birth Certificate; Good Moral Character; Government Issued IDs of Parents; 1.5 x 1.5 ID Photo with White Background; MMDC Forms.', ''),
(2, 'Bacolod City', 'Public Employment Service Office', 'Certified true copy of grades (School); Certified true copy of registration form / assessment form / certificate of registration / statement of account (School); a. Certified true copy of birth certificate or photocopy of birth – PSA/NSO (PSA); Latest Income Tax Return of parent (for those employed); b. Tax exemption certificate of parent (for low wage earners / self-employed); Certificate of Residency (Barangay); Post-Graduate Studies Scholars: Certified true copy of Applicant’s Diploma (School', ''),
(3, 'Cadiz City', 'Cadiz City Educational Assistance Program', 'This is applicable only for college students and residents of Cadiz City; Ensure that all sections of the application forms are filled out accurately and legibly; Submit all the necessary documents and ensure all documents must be signed by your respective school representative/s: (1) original and (2) photocopies of Certificate of Registration / Assessment Form / School Certification, (1) original and (2) photocopies of Voter\'s Certification / National ID; Ensure that all submitted documents are', '');

-- --------------------------------------------------------

--
-- Table structure for table `gov_scholarships`
--

CREATE TABLE `gov_scholarships` (
  `id` int(55) NOT NULL,
  `government` varchar(255) NOT NULL,
  `scholarship_title` varchar(255) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `apply_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gov_scholarships`
--

INSERT INTO `gov_scholarships` (`id`, `government`, `scholarship_title`, `requirements`, `apply_link`) VALUES
(1, 'Department of Science and Technology', 'S&T Undergraduate Program', 'Personal Information; Household Information Questionnaire; Certificate of Good Moral; Certificate of Good Health; Principal’s Certification; Certificate of Residency; Parent’s Certification; DOST-SEI Scholarship Examination/Award;\r\nSigned Declaration of Applicant and the Parent/Legal Guardian      ', ''),
(2, 'Overseas Worker Welfare Administration', 'Academic Scholarship', 'Must be an active OWWA member or a beneficiary of an active OWWA member; Must pass the TESDA qualifying examination; Have at least one (1) recorded membership contribution; Child not older than 21 years old or spouse of a married OFW; Accomplished application forms; 1”x1” ID pictures; Form 137 / HS report card; Proof of OWWA membership    ', '');

-- --------------------------------------------------------

--
-- Table structure for table `priv_scholarships`
--

CREATE TABLE `priv_scholarships` (
  `id` int(55) NOT NULL,
  `private_company` varchar(255) NOT NULL,
  `scholarship_title` varchar(255) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `apply_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `priv_scholarships`
--

INSERT INTO `priv_scholarships` (`id`, `private_company`, `scholarship_title`, `requirements`, `apply_link`) VALUES
(1, 'SM Foundation', 'College Scholarship', 'Parent’s or Guardian’s Latest Income Tax Return / Certification of Non-Filing of Income / Certificate of Indigency; Latest Grade 12 report card; Birth Certificate / PSA; Latest 2×2 ID picture; Sketch of home to the nearest SM Mall    ', ''),
(2, 'Ayala Foundation', 'U-Go Scholar', 'Must be a Filipino Citizen (Female); They must be an incoming 1st year, 2nd Year, or 3rd Year College Student for the School Year 2024–2025; Must be enrolled in a public or state university; With GPA of 85% or its equivalent; Without any disciplinary issue or administrative case; Must be aspiring to bring positive change in society; Must have proof of financial need; Student Financial Aid / School supplies       ', '');

-- --------------------------------------------------------

--
-- Table structure for table `school_scholarships`
--

CREATE TABLE `school_scholarships` (
  `id` int(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `scholarship_title` varchar(255) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `apply_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_scholarships`
--

INSERT INTO `school_scholarships` (`id`, `city`, `school_name`, `scholarship_title`, `requirements`, `apply_link`) VALUES
(1, 'Bacolod City', 'University of St La Salle', 'Academic Scholarship', 'Online Scholarship Application with Privacy Notice; Certificate of Ranking issued by Registrar or Principal; Entrance Exam Result; Certified True Copy of Grade 12 Report Card; Good Moral Certificate; Proof of Parent’s Income or Tax Exemption.', 'https://forms.gle/A8HyZhXs6siX5op46'),
(2, 'Bacolod City', 'STI West Negros University', 'STI Open Scholarship', 'Grade 10 completers and Grade 12 graduates from any DepEd-recognized public or private high schools in the Philippines; Applicants must not have any record of misconduct from their previous school to be eligible; No grade requirement for application; Scholars must comply with renewal and retention requirements to maintain the scholarship.', ''),
(3, 'Bacolod City', 'Colegio de San Agustin Bacolod', 'Athletic Scholarship', 'Open to Senior High School graduates, transferees, and bona fide CSA-B students; Must be 18 to 24 years old; Must be physically and mentally fit to play; Must carry a minimum academic load of 15 units; Must have no Dropped, No Credit, or Failure subjects; Must be of good moral character; Must not have been subjected to any disciplinary action.                                                                                             ', ''),
(4, 'Bacolod City', 'University of Negros Occidental Recoletos', 'Recoletos Educational Assistance for Deserving Students', '2 pcs 2×2 picture w/ name tag; Original Baptismal Certificate; Parents’ latest Income Tax Return or BIR Exemption; Report Card – SHS graduate; Medical Certificate; Family Picture w/ name caption; Applicant’s house picture w/ brief description; Recommendation from the Parish Priest; Barangay Clearance; College Admission Test Result.', ''),
(5, 'San Carlos City', 'Colegio de Santa Rita de San Carlos', '', '', ''),
(6, 'San Carlos City', 'Colegio de Sto Tomas', '', '', ''),
(7, 'Kabankalan City', 'Central Philippine State University Kabankalan', '', '', ''),
(8, 'Kabankalan City', 'Fellowship Baptist College', '', '', ''),
(9, 'Talisay City', 'Carlos Hilado Memorial State University', 'Tertiary Education Subsidy', 'Certified list of enrolled student-applicants with COR/COE as proof of enrollment and fees; Certified list of PWD student-applicants with PWD ID;ertificate of Residency from the Barangay; Proof of household income', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `contactno`, `birthdate`, `address`) VALUES
(2, 'Lloyd', 'Darantan', 'jnzketaganile@gmail.com', '123', '09998819651', '0000-00-00', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_scholarships`
--
ALTER TABLE `city_scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gov_scholarships`
--
ALTER TABLE `gov_scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priv_scholarships`
--
ALTER TABLE `priv_scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_scholarships`
--
ALTER TABLE `school_scholarships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_scholarships`
--
ALTER TABLE `city_scholarships`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gov_scholarships`
--
ALTER TABLE `gov_scholarships`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `priv_scholarships`
--
ALTER TABLE `priv_scholarships`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_scholarships`
--
ALTER TABLE `school_scholarships`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
