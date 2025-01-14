-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 01:21 PM
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
-- Database: `laravel06_moolank`
--

-- --------------------------------------------------------

--
-- Table structure for table `combinations`
--

CREATE TABLE `combinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `combination` varchar(2) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combinations`
--

INSERT INTO `combinations` (`id`, `combination`, `message`, `created_at`, `updated_at`) VALUES
(1, '11', 'Aapki soch aur mehnat aapko nayi uchaiyon tak le jayegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(2, '12', 'Aapko apne vyaktitva ko aur behtar banane ka avsar milega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(3, '13', 'Aap apne career mein naye mod dekhne ko milenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(4, '14', 'Aapka bhagyank aapko sahi disha dikhayega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(5, '15', 'Sambhavit hai ki aapki parishram se safalta prapt hogi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(6, '16', 'Aapko apne decisions mein sudhar lane ki zarurat hai', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(7, '17', 'Aapke sambandh mein sukh aur shanti banay rahegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(8, '18', 'Aapki koshish se apke sapne pure honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(9, '19', 'Aapko naye sambandhon aur sambhavnayen mil sakti hain', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(10, '20', 'Yeh samay aapke liye naye aadhar banayega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(11, '21', 'Aapki leadership quality aapko safalta degi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(12, '22', 'Aapki soch naye rang laye gi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(13, '23', 'Aap vyavsayik safalta dekh sakte hain', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(14, '24', 'Aap government job ki taiyari karne par safalta prapt karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(15, '25', 'Aap apne parivar ke saath sukhmay samay bitaenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(16, '26', 'Aapke jeevan mein naye mod aur sambhavnayen aayengi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(17, '27', 'Aap apne kalpana shakti ka sahi upyog karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(18, '28', 'Aapka bhavishya aapki mehnat par adharit hoga', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(19, '29', 'Yeh samay aapke liye naye mod leke aayega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(20, '30', 'Aapke arthik sthiti mein sudhar hoga', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(21, '31', 'Aapke sambandh aur majboot banenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(22, '32', 'Aapke koshishon ke anusar safalta prapt hogi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(23, '33', 'Aapka number 33 hai, aapke jeevan mein balance hoga', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(24, '34', 'Aap naye logon se jude rahenge aur naye avsar paenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(25, '35', 'Aapki mehnat aapke career mein safalta layegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(26, '36', 'Aapka samarthan logon ko prerit karega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(27, '37', 'Aap apni vichardhara ko aur pragatisheel banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(28, '38', 'Aapke bhagyank ke madhyam se naye darwaze khulenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(29, '39', 'Aapke sambandh mein shanti aur samjhota banega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(30, '40', 'Yeh samay aapke liye naye disha mein safar ka prarambh hoga', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(31, '41', 'Aap apni soojh-boojh ka upyog karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(32, '42', 'Aap naye project mein shamil ho sakte hain', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(33, '43', 'Aapki leadership ka fayda aapke team ko milega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(34, '44', 'Aapko apni family se samarthan aur prem milega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(35, '45', 'Aap naye sahyogi aur doston ke saath samarthan banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(36, '46', 'Aap apni life mein naye aayam khojenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(37, '47', 'Aapki life mein naye lakshya aur sambhavnayen prakat hongi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(38, '48', 'Aapki parishram aur vishwas aapke safar ko safal banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(39, '49', 'Aap naye karibiyon ke saath apni journey ko behtar banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(40, '50', 'Aap apne financial goals ko safal karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(41, '51', 'Aapki spirituality aapke vikas ko aur pragatisheel banayegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(42, '52', 'Aapki samasyaon ka samadhan jaldi hoga', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(43, '53', 'Aap naye avsar paenge jo aapko aage badhayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(44, '54', 'Aapki leadership qualities logon ko prerit karegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(45, '55', 'Aap apne jeevan mein naye sangathan aur sambhavnayen prapt karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(46, '56', 'Aap naye lakshya ko achieve karne mein safal honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(47, '57', 'Aapki creativity aur kalpana naye avsar layegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(48, '58', 'Aap apni family aur doston ke saath achha samay bitaenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(49, '59', 'Aapke naye sambandh aur mitrata safal hongi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(50, '60', 'Aapka bhagyank aapko naye lakshya ki disha dikhayega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(51, '61', 'Aap apne kaam aur sambandh mein stability paenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(52, '62', 'Aap apne sapno ko pura karne mein lagatar mehnat karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(53, '63', 'Aap apne ambitions ko safal karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(54, '64', 'Aap naye sadhan aur vyavsayik avsar paenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(55, '65', 'Aap apne parivaar ke saath naye sapne dekhenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(56, '66', 'Aapka bhavishya aapki parishram aur vicharshakti par nirbhar karega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(57, '67', 'Aap naye sambandh aur sambandh ki safalta dekhne ko milega', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(58, '68', 'Aap apne sangathan ke saath naye mod dekh sakte hain', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(59, '69', 'Aapki vyaktigat growth aur dosti banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(60, '70', 'Aap naye avsar aur vyapar mein safal honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(61, '71', 'Aap naye projects mein success paenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(62, '72', 'Aap apne bhagyank ke madhyam se naye darwaze khulenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(63, '73', 'Aap naye sambandhon mein sudhar dekh sakte hain', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(64, '74', 'Aap apne mitron ke saath naye safar ka anubhav karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(65, '75', 'Aap apni health aur parivaar ke liye naye plan banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(66, '76', 'Aap naye vyavsayik sambandhon mein sudhar karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(67, '77', 'Aapki pragatisheel soch naye avsar banayegi', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(68, '78', 'Aap naye sapne dekhenge aur unhe pura karne mein lagatar mehnat karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(69, '79', 'Aap naye career goals achieve karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(70, '80', 'Aapke sambandh aur vichar naye rang layenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(71, '81', 'Aap naye safar aur vyavsay mein naye mod dekhenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(72, '82', 'Aap naye sambandh aur vyavsayik goals achieve karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(73, '83', 'Aap naye lakshya ki disha mein safal honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(74, '84', 'Aap naye avsar aur vyapari sangathan banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(75, '85', 'Aap apne career goals ke liye naye prabhavit karya karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(76, '86', 'Aap naye parivaarik aur vyavsayik sambandh banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(77, '87', 'Aap apne goals ke liye naye sadhan banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(78, '88', 'Aap naye sambandh aur vyavsay mein naye mod paenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(79, '89', 'Aap naye projects aur ambitions ke liye naye avsar dekhenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(80, '90', 'Aap naye career aur parivaar goals ke liye safal honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(81, '91', 'Aap naye avsar aur sambandh ke madhyam se naye safar karenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(82, '92', 'Aap naye sambandh aur vyavsayik safal hote dekh paenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(83, '93', 'Aap naye sapne aur vyavsayik growth dekh sakte hain', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(84, '94', 'Aap naye sangathan aur goals ke liye naye resources banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(85, '95', 'Aap naye lakshya ke liye naye career opportunities dekhenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(86, '96', 'Aap naye vyavsayik mod aur vyaktiyat growth ke liye prerit honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(87, '97', 'Aap naye sapne aur sambhavnayen dekhne ke liye prerit honge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(88, '98', 'Aap naye vyaktiyat sambandh aur growth banayenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45'),
(89, '99', 'Aap apne bhagyank ke madhyam se naye darwaze khulenge', '2024-12-04 17:52:45', '2024-12-04 17:52:45');

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
-- Table structure for table `loshu_numbers`
--

CREATE TABLE `loshu_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `element` varchar(255) NOT NULL,
  `planet` varchar(255) NOT NULL,
  `merit` varchar(255) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loshu_numbers`
--

INSERT INTO `loshu_numbers` (`id`, `number`, `data`, `element`, `planet`, `merit`, `direction`, `created_at`, `updated_at`) VALUES
(1, 1, 'Career, Success, Business, Communication', 'Water', 'Sun', 'Career', 'North', NULL, NULL),
(2, 2, 'Marriage, Love, Sensitivity, Intuition', 'Earth', 'Moon', 'Marriage', 'South-West', NULL, NULL),
(3, 3, 'Health, Planning, Family, Wisdom', 'Hard Wood', 'Jupiter', 'Health, Family', 'East', NULL, NULL),
(4, 4, 'Luck, Money, Discipline, Self-Control', 'Soft Wood', 'Rahu', 'Wealth', 'South-East', NULL, NULL),
(5, 5, 'Balance, Stability, Fortune, Mental Strength', 'Earth', 'Mercury', 'Work Energy', 'Center', NULL, NULL),
(6, 6, 'Friends, Travelling, New Beginnings', 'Hard Metal', 'Venus', 'Friends', 'North-West', NULL, NULL),
(7, 7, 'Children, Creativity, Entertainment, Fun', 'Soft Metal', 'Ketu', 'Children', 'West', NULL, NULL),
(8, 8, 'Knowledge, Motivation, Organization, Spirituality', 'Earth', 'Saturn', 'Knowledge', 'North-East', NULL, NULL),
(9, 9, 'Prosperity, Humanity, Social Life, Fame', 'Fire', 'Mars', 'Fame', 'South', NULL, NULL);

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
(5, '2024_12_04_173112_create_combinations_table', 1),
(6, '2024_12_18_140718_create_loshu_numbers_table', 2),
(7, '2024_12_19_115604_create_loshu_numbers_table', 3);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `combinations`
--
ALTER TABLE `combinations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `combinations_combination_unique` (`combination`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loshu_numbers`
--
ALTER TABLE `loshu_numbers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loshu_numbers_number_unique` (`number`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `combinations`
--
ALTER TABLE `combinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loshu_numbers`
--
ALTER TABLE `loshu_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
