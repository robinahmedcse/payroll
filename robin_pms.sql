-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 01:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robin_pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `company_details_id` int(10) UNSIGNED NOT NULL,
  `phone_number_1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number_2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_titles`
--

CREATE TABLE `company_titles` (
  `company_titles_id` int(10) UNSIGNED NOT NULL,
  `company_titles` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_titles`
--

INSERT INTO `company_titles` (`company_titles_id`, `company_titles`, `company_logo`, `created_at`, `updated_at`) VALUES
(1, 'Dr.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(2, 'Prof.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(3, 'Ms.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(4, 'Prof.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(5, 'Dr.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(6, 'Dr.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(7, 'Ms.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(8, 'Dr.', 'images/img.jpg', '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(9, 'Dr.', 'images/img.jpg', '2021-03-07 00:50:43', '2021-03-07 00:50:43'),
(10, 'Ms.', 'images/img.jpg', '2021-03-07 00:50:43', '2021-03-07 00:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_02_24_074440_create_tbl_supper_admin_table', 1),
(9, '2021_02_26_170235_create_tbl_emp_departments_table', 2),
(10, '2021_02_26_170330_create_tbl_emp_branches_table', 2),
(11, '2021_02_28_133721_create_tbl_emp_designations_table', 3),
(17, '2021_02_28_135504_create_tbl_emp_designations_table', 4),
(18, '2021_03_07_043324_create_company_details_table', 4),
(19, '2021_03_07_043509_create_company_titles_table', 4),
(20, '2021_03_07_043632_create_tbl_allowances_table', 4),
(21, '2021_03_07_043702_create_tbl_deductions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_allowances`
--

CREATE TABLE `tbl_allowances` (
  `allowances_id` int(10) UNSIGNED NOT NULL,
  `allowances_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allowances_status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_allowances`
--

INSERT INTO `tbl_allowances` (`allowances_id`, `allowances_name`, `allowances_status`, `created_at`, `updated_at`) VALUES
(1, 'Deon Schmeler', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(2, 'Gail Jakubowski', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(3, 'Francesco Wintheiser', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(4, 'Mr. Madison Mann PhD', 'Inactive', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(5, 'Chad Bogisich', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(6, 'Nola Funk', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(7, 'Brandon Grant', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(8, 'Maureen Streich', 'Inactive', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(9, 'Jaylan Romaguera', 'Active', '2021-03-07 00:53:57', '2021-03-07 00:53:57'),
(10, 'Kayla Howell I', 'Inactive', '2021-03-07 00:53:57', '2021-03-07 00:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deductions`
--

CREATE TABLE `tbl_deductions` (
  `deduction_id` int(10) UNSIGNED NOT NULL,
  `deduction_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_deductions`
--

INSERT INTO `tbl_deductions` (`deduction_id`, `deduction_name`, `deduction_status`, `created_at`, `updated_at`) VALUES
(1, 'a', 'Active', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(2, 'b', 'Active', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(3, 'c', 'Active', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(4, 'd', 'Active', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(5, 'f', 'Inactive', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(6, 'r', 'Inactive', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(7, 'o', 'Active', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(8, 'f', 'Inactive', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(9, 'v', 'Inactive', '2021-03-07 00:52:37', '2021-03-07 00:52:37'),
(10, 'z', 'Active', '2021-03-07 00:52:37', '2021-03-07 00:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_branches`
--

CREATE TABLE `tbl_emp_branches` (
  `emp_branch_id` bigint(20) UNSIGNED NOT NULL,
  `emp_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_branch_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_branch_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_emp_branches`
--

INSERT INTO `tbl_emp_branches` (`emp_branch_id`, `emp_branch_name`, `emp_branch_code`, `emp_branch_status`, `created_at`, `updated_at`) VALUES
(1, 'Rajshahi', '81', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(2, 'Rajshahi', '81', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(3, 'Cumilla', '93', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(4, 'Rajshahi', '81', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(5, 'Dhaka', '12', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(6, 'Tangail ', '13', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(7, 'Cumilla', '37', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(8, 'Cumilla', '37', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(9, 'Barishal', '66', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(10, 'Rajshahi', '81', 1, '2021-02-28 07:32:04', '2021-02-28 07:32:04'),
(11, 'Tangail', '13', 1, '2021-03-06 00:19:19', '2021-03-06 00:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_departments`
--

CREATE TABLE `tbl_emp_departments` (
  `emp_department_id` bigint(20) UNSIGNED NOT NULL,
  `emp_department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_department_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_emp_departments`
--

INSERT INTO `tbl_emp_departments` (`emp_department_id`, `emp_department_name`, `emp_department_code`, `emp_department_status`, `created_at`, `updated_at`) VALUES
(1, 'Accounting and Finance', '10', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(2, 'Marketing ', '11', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(3, 'Accounting and Finance', '10', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(4, 'Accounting and Finance', '10', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(5, 'Accounting and Finance', '10', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(6, 'HR', '12', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(7, 'HR', '12', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(8, 'HR', '12', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(9, 'Marketing ', '11', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(10, 'Marketing ', '11', 1, '2021-02-28 07:23:47', '2021-02-28 07:23:47'),
(11, 'Accounting and Finance', '10', 1, '2021-02-28 23:24:24', '2021-02-28 23:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_designations`
--

CREATE TABLE `tbl_emp_designations` (
  `emp_designation_id` bigint(20) UNSIGNED NOT NULL,
  `emp_designation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_designation_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_emp_designations`
--

INSERT INTO `tbl_emp_designations` (`emp_designation_id`, `emp_designation_name`, `emp_designation_status`, `created_at`, `updated_at`) VALUES
(1, 'Chief Marketing Officer (CMO)', 0, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(2, 'Chief Operating Officer (COO) ', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(3, 'Chief Technology Officer (CTO)', 0, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(4, 'Chief Technology Officer (CTO)', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(5, 'Chief Financial Officer (CFO) ', 0, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(6, 'Chief Marketing Officer (CMO)', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(7, 'Chief Marketing Officer (CMO)', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(8, 'Chief Technology Officer (CTO)', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(9, 'Chief Financial Officer (CFO) ', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(10, 'Chief Marketing Officer (CMO)', 1, '2021-03-07 00:50:42', '2021-03-07 00:50:42'),
(11, 'Chief Financial Officer (CFO) ', 0, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(12, 'Chief Marketing Officer (CMO)', 0, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(13, 'Chief Financial Officer (CFO) ', 1, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(14, 'Chief Financial Officer (CFO) ', 0, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(15, 'Chief Financial Officer (CFO) ', 0, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(16, 'Chief Financial Officer (CFO) ', 1, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(17, 'Chief Executive Officer (CEO)', 0, '2021-03-07 00:51:47', '2021-03-07 00:51:47'),
(18, 'Chief Technology Officer (CTO)', 0, '2021-03-07 00:51:48', '2021-03-07 00:51:48'),
(19, 'Chief Marketing Officer (CMO)', 0, '2021-03-07 00:51:48', '2021-03-07 00:51:48'),
(20, 'Chief Technology Officer (CTO)', 1, '2021-03-07 00:51:48', '2021-03-07 00:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supper_admins`
--

CREATE TABLE `tbl_supper_admins` (
  `s_admin_id` bigint(20) UNSIGNED NOT NULL,
  `s_admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_admin_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_admin_role` tinyint(4) NOT NULL,
  `s_admin_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_supper_admins`
--

INSERT INTO `tbl_supper_admins` (`s_admin_id`, `s_admin_name`, `s_admin_username`, `s_admin_email`, `s_admin_password`, `s_admin_role`, `s_admin_status`, `created_at`, `updated_at`) VALUES
(1, 'robin', 'robina', 'supper@gmail.com', '$2y$10$k9ygXO8xbrxwCmAdHGedNeh8QDVd59M2sczNi8U385/VnE0e5TKqC', 1, 1, '2021-02-24 02:04:56', '2021-02-24 02:04:56'),
(2, 'robin', 'robinb', 'robin1@gmail.com', '$2y$10$k9ygXO8xbrxwCmAdHGedNeh8QDVd59M2sczNi8U385/VnE0e5TKqC', 1, 1, '2021-02-24 02:05:38', '2021-02-24 02:05:38'),
(4, 'robinc', 'robincse', 'robinc@gmail.com', '$2y$10$k9ygXO8xbrxwCmAdHGedNeh8QDVd59M2sczNi8U385/VnE0e5TKqC', 1, 1, '2021-02-24 06:04:18', '2021-02-24 06:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Idell Kilback', 'clarissa.williamson@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZIG96K78OI', '2021-02-28 07:01:21', '2021-02-28 07:01:21'),
(2, 'Dr. Grady Gleason I', 'kennith90@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4GeGhg2J49', '2021-02-28 07:01:21', '2021-02-28 07:01:21'),
(3, 'Nestor Haley V', 'marquardt.kris@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WUpDWruPR7', '2021-02-28 07:01:21', '2021-02-28 07:01:21'),
(4, 'Jo Nicolas', 'mpollich@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T8SX9dZobS', '2021-02-28 07:01:21', '2021-02-28 07:01:21'),
(5, 'Jaunita Hayes', 'lind.vivian@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0y5lw2LWRK', '2021-02-28 07:01:21', '2021-02-28 07:01:21'),
(6, 'Ms. Palma Schiller', 'penelope.mcclure@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v3gcDLZpfM', '2021-02-28 07:01:21', '2021-02-28 07:01:21'),
(7, 'Timmothy Swift', 'gunner.mayer@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jgxbRMehW8', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(8, 'Mr. Kennedi Trantow IV', 'burley.hintz@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CovAuXt4zc', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(9, 'Braulio Christiansen', 'lraynor@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4JSCvSuB7w', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(10, 'Prof. Abby Larson', 'damore.rigoberto@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '07OSYsgooX', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(11, 'Jacky Green', 'lgusikowski@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xn20fTmUEN', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(12, 'Allison Bechtelar', 'ihermiston@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vTezHHZChC', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(13, 'Hollis Ebert', 'frances.batz@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4HKFvVvuDr', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(14, 'Dr. Elian Fahey', 'bbernhard@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'khfP4KGTpO', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(15, 'Elinor Cronin', 'nwitting@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ECqjza7MBL', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(16, 'Dr. Clovis Bartoletti', 'payton.cummerata@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RyridfNxpQ', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(17, 'Mollie Roberts', 'janelle44@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YsC3yb0ASR', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(18, 'Hildegard Corwin', 'ttowne@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's6zXhYcWMx', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(19, 'Mrs. Kristy Johnston DVM', 'art28@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e3Pyum3TAs', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(20, 'Mr. Otis Becker', 'legros.melyssa@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'clvZc42Wqg', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(21, 'Ephraim Roberts PhD', 'eldora.stiedemann@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AlROqxUQPf', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(22, 'Cameron Hudson', 'jerrell99@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cODAZtFk7C', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(23, 'Sarina Quigley', 'titus.abshire@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'juGuK0g7v5', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(24, 'Seamus Schmeler IV', 'weissnat.rylan@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qRw3SfktAU', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(25, 'Reece Heathcote', 'maiya92@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FzlAsqb9NG', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(26, 'Kellie Toy', 'xokon@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xorGOUB5kM', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(27, 'Mr. Judah Torphy', 'palma.walker@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cHTWGzMFxT', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(28, 'Vince Kulas', 'dietrich.gianni@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dR0SgYaqEX', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(29, 'Trisha Nitzsche', 'xfunk@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4CVbkWdOUX', '2021-02-28 07:01:22', '2021-02-28 07:01:22'),
(30, 'Mr. Samson O\'Reilly II', 'carroll.gladyce@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2VNeqOraFg', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(31, 'Cicero Bradtke', 'rharvey@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XtRl7cyeD4', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(32, 'Gabe Ondricka', 'jrowe@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tyiKGgspeM', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(33, 'Mr. Tre Pfeffer I', 'gunnar.jakubowski@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6UqxWOzNQp', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(34, 'Xander Pfeffer', 'schiller.royal@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uyrvXGqPwF', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(35, 'Prof. Leslie Kiehn', 'hilma56@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gAz6aJPUzw', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(36, 'Kitty Fritsch I', 'dario.borer@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HvAuTnVUqV', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(37, 'Cordelia Rosenbaum', 'thowe@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MJQDi5aUFH', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(38, 'Ms. Beaulah VonRueden DDS', 'hnader@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'j1WaLprB9M', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(39, 'Major Jast', 'adan.purdy@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3O9KKGplvh', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(40, 'Camden Kshlerin Sr.', 'vkris@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'elIlGH9rbU', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(41, 'Jimmie Balistreri DVM', 'cullen81@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i47v1dhk6m', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(42, 'Prof. Levi Frami', 'tre.armstrong@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JF3M44XvQE', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(43, 'Andres Brakus', 'zmedhurst@example.net', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hwYzJkgW5R', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(44, 'Dr. Ralph Gutmann PhD', 'gabriella68@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eufcRIETCR', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(45, 'Dan Rempel', 'estroman@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qj3cAWpMyn', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(46, 'Lester Feest', 'oswaldo.gusikowski@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gF4y1TvS0M', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(47, 'Prof. Uriah Corwin', 'rahul19@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '37YvlIf6ar', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(48, 'Dominique Stamm', 'kub.aniyah@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H1roJp3xQ9', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(49, 'Miss Madonna Kozey MD', 'watson67@example.com', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5R2IM13NKW', '2021-02-28 07:01:23', '2021-02-28 07:01:23'),
(50, 'Winnifred Bins', 'kuhn.dahlia@example.org', '2021-02-28 07:01:21', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CNexFXHzQj', '2021-02-28 07:01:23', '2021-02-28 07:01:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`company_details_id`);

--
-- Indexes for table `company_titles`
--
ALTER TABLE `company_titles`
  ADD PRIMARY KEY (`company_titles_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_allowances`
--
ALTER TABLE `tbl_allowances`
  ADD PRIMARY KEY (`allowances_id`);

--
-- Indexes for table `tbl_deductions`
--
ALTER TABLE `tbl_deductions`
  ADD PRIMARY KEY (`deduction_id`);

--
-- Indexes for table `tbl_emp_branches`
--
ALTER TABLE `tbl_emp_branches`
  ADD PRIMARY KEY (`emp_branch_id`);

--
-- Indexes for table `tbl_emp_departments`
--
ALTER TABLE `tbl_emp_departments`
  ADD PRIMARY KEY (`emp_department_id`);

--
-- Indexes for table `tbl_emp_designations`
--
ALTER TABLE `tbl_emp_designations`
  ADD PRIMARY KEY (`emp_designation_id`);

--
-- Indexes for table `tbl_supper_admins`
--
ALTER TABLE `tbl_supper_admins`
  ADD PRIMARY KEY (`s_admin_id`);

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
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `company_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_titles`
--
ALTER TABLE `company_titles`
  MODIFY `company_titles_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_allowances`
--
ALTER TABLE `tbl_allowances`
  MODIFY `allowances_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_deductions`
--
ALTER TABLE `tbl_deductions`
  MODIFY `deduction_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_emp_branches`
--
ALTER TABLE `tbl_emp_branches`
  MODIFY `emp_branch_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_emp_departments`
--
ALTER TABLE `tbl_emp_departments`
  MODIFY `emp_department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_emp_designations`
--
ALTER TABLE `tbl_emp_designations`
  MODIFY `emp_designation_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_supper_admins`
--
ALTER TABLE `tbl_supper_admins`
  MODIFY `s_admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
