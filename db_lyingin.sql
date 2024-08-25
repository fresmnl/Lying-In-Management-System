-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 01:25 AM
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
-- Database: `db_lyingin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `Account_Id` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `City_Municipality` varchar(255) NOT NULL,
  `PSGC Code` varchar(255) NOT NULL,
  `Regional Code` varchar(255) NOT NULL,
  `Provincial Code` varchar(255) NOT NULL,
  `Landline` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`Account_Id`, `Username`, `Password`, `Facility`, `Province`, `City_Municipality`, `PSGC Code`, `Regional Code`, `Provincial Code`, `Landline`, `Contact`, `email`, `latitude`, `longitude`) VALUES
('pho-aurora', 'PHO-AURORA', 'Fabraquel#0813', 'Provincial Health Office - AURORA', 'AURORA', 'BALER', '037700000', '03', '0377', '1234-6654', '09654567686', 'aurora@gmail.com', 12.3445, 24.2456),
('pho-bataan', 'PHO-BATAAN', 'PHOBataan#0308', 'Provincial Health Office - BATAAN', 'BATAAN', 'BALANGA', '030800000', '03', '0308', '234-1234', '09664334311', 'pho@bataan.gov.ph', 14.66001, 120.45001);

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `Admission_Id` varchar(10) NOT NULL,
  `Patient_Id` varchar(10) NOT NULL,
  `Admission_Date` date NOT NULL,
  `Expected_Delivery_Date` date NOT NULL,
  `Doctor_Id` varchar(10) NOT NULL,
  `DeliveryRoom_No` int(25) NOT NULL,
  `RecoveryRoom_No` int(25) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archive_account`
--

CREATE TABLE `archive_account` (
  `archive_account_Id` varchar(10) NOT NULL,
  `Account_Id` varchar(10) NOT NULL,
  `province` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive_account`
--

INSERT INTO `archive_account` (`archive_account_Id`, `Account_Id`, `province`, `username`, `password`) VALUES
('rhu-1', 'rhu-1', 'BATAAN', 'rhu-orion-bataan', 'OrionBataan#012801');

-- --------------------------------------------------------

--
-- Table structure for table `archive_rhu_info`
--

CREATE TABLE `archive_rhu_info` (
  `RHU_Id` varchar(10) NOT NULL,
  `RHU_Name` varchar(255) NOT NULL,
  `City_Municipality` varchar(255) NOT NULL,
  `Street_Address` varchar(255) NOT NULL,
  `Barangay_Address` varchar(255) NOT NULL,
  `Municipality_Address` varchar(255) NOT NULL,
  `Province_Address` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Mname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Landline_No` int(25) NOT NULL,
  `Mobile_No` int(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `lying_In` varchar(255) NOT NULL,
  `beds_number` int(255) NOT NULL,
  `available_beds` int(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive_rhu_info`
--

INSERT INTO `archive_rhu_info` (`RHU_Id`, `RHU_Name`, `City_Municipality`, `Street_Address`, `Barangay_Address`, `Municipality_Address`, `Province_Address`, `Fname`, `Mname`, `Lname`, `Designation`, `Landline_No`, `Mobile_No`, `Email`, `lying_In`, `beds_number`, `available_beds`, `latitude`, `longitude`) VALUES
('rhu-1', 'ORION RURAL HEALTH UNIT', 'ORION', 'WAWA', 'WAWA', 'ORION', 'BATAAN', 'CORAZON', 'CORAZON', 'CORAZON', 'MD', 244, 244, 'orionrhu@yahoo.com', 'with', 12, 9, 14.6241994, 120.5832462);

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `Billing_Id` int(255) NOT NULL,
  `Patient_Id` varchar(10) NOT NULL,
  `Schedule_Time` date NOT NULL,
  `Exit_Time` date NOT NULL,
  `Total_Bill` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkup_records`
--

CREATE TABLE `checkup_records` (
  `Checkup_Id` int(11) NOT NULL,
  `Patient_Id` varchar(10) NOT NULL,
  `Record_Id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `AOG` varchar(255) NOT NULL,
  `Blood_Pressure` varchar(255) NOT NULL,
  `Weight` int(25) NOT NULL,
  `Fundal_Height` int(25) NOT NULL,
  `Fetal_Heart_Tones` varchar(255) NOT NULL,
  `Presentation` varchar(255) NOT NULL,
  `EFW` varchar(255) NOT NULL,
  `IE_Findings` varchar(255) NOT NULL,
  `LMP` date NOT NULL,
  `Doctor_Instruction` text NOT NULL,
  `Next_Schedule` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkup_schedule`
--

CREATE TABLE `checkup_schedule` (
  `Checkup_Schedule_Id` int(255) NOT NULL,
  `Account_Id` varchar(255) NOT NULL,
  `Patient` varchar(255) NOT NULL,
  `RHU_Receiver` varchar(255) NOT NULL,
  `Date_Requested` date NOT NULL,
  `Schedule` date NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `Delivery_Id` varchar(10) NOT NULL,
  `Admission_Id` varchar(10) NOT NULL,
  `Delivery_Date` date NOT NULL,
  `Delivery_Time` time NOT NULL,
  `Delivery_Type` varchar(255) NOT NULL,
  `Offspring_Detail` varchar(255) NOT NULL,
  `Doctor_Id` varchar(10) NOT NULL,
  `Midwife_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_Id` varchar(10) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Contact_No` int(25) NOT NULL,
  `Telephone_No` int(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PRC_LN` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Hospital_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Sector` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_notification`
--

CREATE TABLE `group_notification` (
  `Message_Id` int(255) NOT NULL,
  `Account_Id` varchar(255) NOT NULL,
  `Recepients` text NOT NULL,
  `Contact_Nos` int(25) NOT NULL,
  `Date` date NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_facility_info`
--

CREATE TABLE `health_facility_info` (
  `Health_Facility_Id` varchar(25) NOT NULL,
  `Account_Id` varchar(25) NOT NULL,
  `Health_Facility_Name` varchar(255) NOT NULL,
  `City_Municipality` varchar(255) NOT NULL,
  `Landline_Number` varchar(255) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `highrisk_patient`
--

CREATE TABLE `highrisk_patient` (
  `Highrisk_Id` int(255) NOT NULL,
  `Account_Id` varchar(10) NOT NULL,
  `Patient_Id` varchar(10) NOT NULL,
  `Age` int(25) NOT NULL,
  `Schedule_Time` date NOT NULL,
  `Exit_Time` date NOT NULL,
  `Doctor_Id` varchar(10) NOT NULL,
  `Midwife_Id` varchar(10) NOT NULL,
  `Suggested_Doctor` varchar(255) NOT NULL,
  `Record` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individual_notification`
--

CREATE TABLE `individual_notification` (
  `Message_Id` int(255) NOT NULL,
  `Account_Id` varchar(10) NOT NULL,
  `Contact_No` int(25) NOT NULL,
  `Recepient` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lyingin_appointment`
--

CREATE TABLE `lyingin_appointment` (
  `Lyingin_Appointment` int(255) NOT NULL,
  `Account_Id` varchar(10) NOT NULL,
  `Patient_Id` varchar(10) NOT NULL,
  `Age` int(25) NOT NULL,
  `Child_Number` int(25) NOT NULL,
  `Expected_Due` date NOT NULL,
  `Birth_Date` date NOT NULL,
  `Doctor_Id` varchar(10) NOT NULL,
  `Midwife_Id` varchar(10) NOT NULL,
  `Requester` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Schedule_Time` date NOT NULL,
  `Exit_Time` date NOT NULL,
  `Confirmation` varchar(255) NOT NULL,
  `Done_Patient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `Record_Id` varchar(255) NOT NULL,
  `Patient_Id` varchar(255) NOT NULL,
  `Doctor_Id` varchar(255) NOT NULL,
  `Admission_Id` varchar(255) NOT NULL,
  `Record_Date` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `RecordedBy` varchar(255) NOT NULL,
  `Expected_Due` date NOT NULL,
  `Child_Number` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `midwife`
--

CREATE TABLE `midwife` (
  `Midwife_Id` varchar(10) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Contact_No` int(25) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointment`
--

CREATE TABLE `patient_appointment` (
  `Appointment_Id` varchar(10) NOT NULL,
  `Account_Id` varchar(10) NOT NULL,
  `Doctor_Id` varchar(10) NOT NULL,
  `Appontment_Date` date NOT NULL,
  `Appointment_Time` time NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `History_Id` int(255) NOT NULL,
  `Patient_Id` varchar(25) NOT NULL,
  `Previous_Operation` varchar(255) NOT NULL,
  `Operation_Date` varchar(255) NOT NULL,
  `Smoker` varchar(10) NOT NULL,
  `Packs_Per_Year` varchar(255) NOT NULL,
  `Drinker` varchar(10) NOT NULL,
  `Bottle_Per_Month` varchar(255) NOT NULL,
  `Hypertension` varchar(255) NOT NULL,
  `Asthma` varchar(255) NOT NULL,
  `Blood_Disorder` varchar(255) NOT NULL,
  `Heart_Disorder` varchar(255) NOT NULL,
  `Liver_Disorder` varchar(255) NOT NULL,
  `Kidney_Disorder` varchar(255) NOT NULL,
  `Pulmonary_Tuberculosis` varchar(255) NOT NULL,
  `Diabetes_Mellitus` varchar(255) NOT NULL,
  `Diabetes_Mellitus_Type` varchar(255) NOT NULL,
  `Cancer` varchar(255) NOT NULL,
  `Cancer_Type` varchar(255) NOT NULL,
  `Stage` varchar(255) NOT NULL,
  `Skin_Disease` varchar(255) NOT NULL,
  `Skin_Disease_Type` varchar(255) NOT NULL,
  `Allergy` varchar(255) NOT NULL,
  `Allergy_Type` varchar(255) NOT NULL,
  `Others` varchar(255) NOT NULL,
  `Others_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `Patient_Id` varchar(25) NOT NULL,
  `Account_Id` varchar(25) NOT NULL,
  `Health_Facility` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Mname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Street_Address` varchar(255) NOT NULL,
  `Barangay_Address` varchar(255) NOT NULL,
  `Municipality_Address` varchar(255) NOT NULL,
  `Province_Address` varchar(255) NOT NULL,
  `Contact_No` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `Educational_Attainment` varchar(255) NOT NULL,
  `Employment_Status` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `DSWD_NHTS` varchar(255) NOT NULL,
  `4PS_MEMBER` varchar(255) NOT NULL,
  `Identification` varchar(255) NOT NULL,
  `Id_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `Account_Id` varchar(25) NOT NULL,
  `User_Id` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`Account_Id`, `User_Id`, `Username`, `Email`, `Password`, `Role`) VALUES
('A202408-0001', 'Admin01', 'Admin01', 'trusttracklyingin@gmail.com', 'trusttrack4-2023', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`Account_Id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`Admission_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`);

--
-- Indexes for table `archive_account`
--
ALTER TABLE `archive_account`
  ADD KEY `archive_account_Id` (`archive_account_Id`);

--
-- Indexes for table `archive_rhu_info`
--
ALTER TABLE `archive_rhu_info`
  ADD KEY `Account_Id` (`RHU_Id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`Billing_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`);

--
-- Indexes for table `checkup_records`
--
ALTER TABLE `checkup_records`
  ADD PRIMARY KEY (`Checkup_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`,`Record_Id`),
  ADD KEY `Record_Id` (`Record_Id`);

--
-- Indexes for table `checkup_schedule`
--
ALTER TABLE `checkup_schedule`
  ADD PRIMARY KEY (`Checkup_Schedule_Id`),
  ADD KEY `Account_Id` (`Account_Id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`Delivery_Id`),
  ADD KEY `Admission_Id` (`Admission_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`),
  ADD KEY `Midwife_Id` (`Midwife_Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_Id`);

--
-- Indexes for table `group_notification`
--
ALTER TABLE `group_notification`
  ADD PRIMARY KEY (`Message_Id`),
  ADD KEY `Account_Id` (`Account_Id`);

--
-- Indexes for table `health_facility_info`
--
ALTER TABLE `health_facility_info`
  ADD PRIMARY KEY (`Health_Facility_Id`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Account_Id` (`Account_Id`);

--
-- Indexes for table `highrisk_patient`
--
ALTER TABLE `highrisk_patient`
  ADD PRIMARY KEY (`Highrisk_Id`),
  ADD KEY `Account_Id` (`Account_Id`,`Patient_Id`,`Doctor_Id`,`Midwife_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`),
  ADD KEY `Midwife_Id` (`Midwife_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`);

--
-- Indexes for table `individual_notification`
--
ALTER TABLE `individual_notification`
  ADD PRIMARY KEY (`Message_Id`),
  ADD KEY `Account_Id` (`Account_Id`);

--
-- Indexes for table `lyingin_appointment`
--
ALTER TABLE `lyingin_appointment`
  ADD PRIMARY KEY (`Lyingin_Appointment`),
  ADD KEY `Account_Id` (`Account_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`,`Doctor_Id`,`Midwife_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`),
  ADD KEY `Midwife_Id` (`Midwife_Id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`Record_Id`),
  ADD KEY `Admission_Id` (`Admission_Id`),
  ADD KEY `RecordedBy` (`RecordedBy`),
  ADD KEY `Account_Id` (`Patient_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`);

--
-- Indexes for table `midwife`
--
ALTER TABLE `midwife`
  ADD PRIMARY KEY (`Midwife_Id`);

--
-- Indexes for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  ADD PRIMARY KEY (`Appointment_Id`),
  ADD KEY `Account_Id` (`Account_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`History_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`Patient_Id`),
  ADD KEY `Account_Id` (`Account_Id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`Account_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `Billing_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkup_records`
--
ALTER TABLE `checkup_records`
  MODIFY `Checkup_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkup_schedule`
--
ALTER TABLE `checkup_schedule`
  MODIFY `Checkup_Schedule_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `group_notification`
--
ALTER TABLE `group_notification`
  MODIFY `Message_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `highrisk_patient`
--
ALTER TABLE `highrisk_patient`
  MODIFY `Highrisk_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individual_notification`
--
ALTER TABLE `individual_notification`
  MODIFY `Message_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lyingin_appointment`
--
ALTER TABLE `lyingin_appointment`
  MODIFY `Lyingin_Appointment` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `History_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission`
--
ALTER TABLE `admission`
  ADD CONSTRAINT `admission_ibfk_1` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`);

--
-- Constraints for table `checkup_records`
--
ALTER TABLE `checkup_records`
  ADD CONSTRAINT `checkup_records_ibfk_2` FOREIGN KEY (`Record_Id`) REFERENCES `medical_record` (`Record_Id`);

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`Admission_Id`) REFERENCES `admission` (`Admission_Id`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`),
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`Midwife_Id`) REFERENCES `midwife` (`Midwife_Id`);

--
-- Constraints for table `health_facility_info`
--
ALTER TABLE `health_facility_info`
  ADD CONSTRAINT `health_facility_info_ibfk_1` FOREIGN KEY (`Account_Id`) REFERENCES `user_account` (`Account_Id`);

--
-- Constraints for table `highrisk_patient`
--
ALTER TABLE `highrisk_patient`
  ADD CONSTRAINT `highrisk_patient_ibfk_2` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`),
  ADD CONSTRAINT `highrisk_patient_ibfk_3` FOREIGN KEY (`Midwife_Id`) REFERENCES `midwife` (`Midwife_Id`);

--
-- Constraints for table `lyingin_appointment`
--
ALTER TABLE `lyingin_appointment`
  ADD CONSTRAINT `lyingin_appointment_ibfk_2` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`),
  ADD CONSTRAINT `lyingin_appointment_ibfk_3` FOREIGN KEY (`Midwife_Id`) REFERENCES `midwife` (`Midwife_Id`);

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`Admission_Id`) REFERENCES `admission` (`Admission_Id`),
  ADD CONSTRAINT `medical_record_ibfk_2` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`),
  ADD CONSTRAINT `medical_record_ibfk_4` FOREIGN KEY (`RecordedBy`) REFERENCES `rhu_staff` (`Employee_Id`);

--
-- Constraints for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  ADD CONSTRAINT `patient_appointment_ibfk_2` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`);

--
-- Constraints for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD CONSTRAINT `patient_history_ibfk_1` FOREIGN KEY (`Patient_Id`) REFERENCES `patient_info` (`Patient_Id`);

--
-- Constraints for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD CONSTRAINT `patient_info_ibfk_1` FOREIGN KEY (`Account_Id`) REFERENCES `user_account` (`Account_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
