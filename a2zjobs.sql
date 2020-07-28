-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 01:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2zjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` mediumtext DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `image`, `created_at`) VALUES
(1, '         \r\n          <div class=\"col-md-6\">\r\n           \r\n             <h3>RELIABLE QUALITY AND CARE</h3>\r\n             <h4>Essential IT Tools and Service</h4>\r\n             <h5>\r\n            We work round the clock to provide the support services you need\r\n\r\n            ...when you need them.</h5><br>\r\n            <p>About Us</p>\r\n            <p>A2ZJOBS IT Company. provides a range of Information Technology services designed for business productivity. From expert installation, outsourcing and implementation to Hosted Solutions.</p>\r\n            <p>Today, we deliver the most comprehensive suite of managed IT services. Our proven service portfolio meets the varying needs of customers with implementation services or complete outsourced and Hosted IT solutions. Our known Quality Service allows us to provide all our customers with an efficient, seamless and worry-free \"Remote IT department\".</p>\r\n            <p>The result? Thanks to a proven track record of providing proactive managed services and technical expertise, IT Companies customers are able to:</p>\r\n            <div class=\"social mt-4\">\r\n              <a href=\"https://www.facebook.com/shasi.kant.71\" target=\"_blanck\"><span class=\"icon-facebook\"></span></a>\r\n              <a href=\"https://mobile.twitter.com/Shashik84079314\" target=\"_blanck\"><span class=\"icon-twitter\"></span></a>\r\n              <a href=\"https://www.instagram.com/kantshashi518/\" target=\"_blanck\"><span class=\"icon-instagram\"></span></a>\r\n               <a href=\"https://www.youtube.com/channel/UCroOffETtEXkczRvOfKCU7Q?view_as=subscriber\" target=\"_blanck\"><span class=\"icon-youtube\"></span></a>\r\n                <a href=\"https://api.whatsapp.com/send?phone=919451018768&text=&source=&data=\" target=\"_blanck\"><span class=\"icon-whatsapp\"></span></a>\r\n            </div> \r\n          </div>', 'shashikant.jpg', '2020-05-21 11:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `body` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `body`, `created_at`) VALUES
(9, 'Major Relief For Borrowers! RBI Extends Loan Moratorium By Another Three Months.', 'The RBI announced an extension of loan moratorium by another three months. It will be extended until August 31, 2020.<br>\r\n<b>New Delhi:</b> The RBI announced an extension of loan moratorium by another three months to ease financial stress.  The governor Shaktikanta Das held a press conference today and announced a slew of measures in order to control the economic loss of the country caused due to the pandemic and the lockdown. The loan moratorium measure was announced in March after the lockdown was declared by the Prime Minister Narendra Modi. It will now be extended till August this year.<br >\r\n\r\n“ In view of the extension of lockdown and continuing disruptions on account of Covid-19 the above measures are being further extended by another three months from June 1 to August 31 taking the total period applicability of the measures to six months i.e from March 1 to August 31, 2020,” said Das during the conference.<br >\r\n\r\nThis step taken by the central bank comes as a relief to many borrowers whose income may have been severely hit due to the pandemic and the resulting lockdown.<br >\r\n\r\nDuring the conference today the RBI announced other steps to mitigate the financial losses. These include a Repo rate cut by 40 bps to 4 percent and the reverse repo rate to 3.35 percent. Some steps have been announced for exporters and importers to help them tide over the period. Das has also said that the global macroeconomic indicators are grim and that the GDP growth of India may remain in the negative. This is because the demand and production both globally and in the domestic market have been impacted severely due to the coronavirus pandemic.', '2020-05-22 20:20:54'),
(10, 'Second Pages.', 'This is second pages.', '2020-05-22 20:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `message` varchar(10000) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `f_name`, `l_name`, `email`, `mobile`, `message`, `created_at`) VALUES
(1, 'Shashikant', 'Verma', 'skv1220@gmail.com', '9451018768', 'Hello!', '2020-05-11 11:00:45'),
(2, 'Shashikant', 'Verma', 'sk@gamil.com', '9451018768', 'Hii', '2020-05-11 11:12:44'),
(3, 'Shashikant', 'Verma', 'sk@gamil.com', '9451018768', 'Hii', '2020-05-11 11:15:13'),
(4, 'Shashikant', 'Verma', 'skv1218@gmail.com', '9451018768', 'Hii', '2020-05-11 11:16:29'),
(5, 'Shashikant', 'Verma', 'skv1218@gmail.com', '9451018768', 'Hii', '2020-05-11 11:26:01'),
(6, 'Shashikant', 'Verma', 'shashikantv782@gmail.com', '9451018768', 'Hello!!!!!', '2020-05-11 11:30:22'),
(7, 'Shashikant', 'Verma', 'shashikantv782@gmail.com', '9451018768', 'Hello!!!!!', '2020-05-11 11:32:11'),
(8, 'Shashikant', 'Verma', 'skv0940@gmail.com', '9451018768', 'Hiiii', '2020-05-18 15:26:55'),
(9, 'Shashikant', 'Verma', 'shashikantv778@gmail.com', '9451018768', 'Hiiii', '2020-05-18 15:28:10'),
(10, 'Shashikant', 'Verma', 'skv1220@gmail.com', '9451018768', 'hi', '2020-05-18 15:29:53'),
(11, 'Shashikant', 'Verma', 'shobhitkumar1990@gmail.com', '9451018768', 'hi', '2020-05-18 15:30:31'),
(12, 'Shashikant', 'Verma', 'shobhitkumar1990@gmail.com', '9451018768', 'hi', '2020-05-18 15:31:59'),
(13, 'Shashikant', 'Verma', 'shobhitkumar1990@gmail.com', '9451018768', 'hi', '2020-05-18 15:33:52'),
(14, 'Shashikant', 'Verma', 'skv1217@gmail.com', '9451018768', 'Hello Shri.', '2020-05-19 13:14:58'),
(15, 'Shashikant', 'Verma', 'skv0940@gmail.com', '9451018768', 'hii', '2020-05-19 15:27:19'),
(16, 'Shashikant', 'Verma', 'skv1216@gmail.com', '9451018768', 'Hiiii', '2020-05-19 16:54:21'),
(17, 'Shashikant', 'Verma', 'skv1216@gmail.com', '9451018768', 'Hiiii', '2020-05-19 16:57:59'),
(18, 'Shashikant', 'Verma', 'shashikantv782@gmail.com', '9451018768', 'Hiii', '2020-05-19 17:11:24');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `created_at`) VALUES
(1, 'skv1220@gmail.com', '2020-05-09 09:52:52');

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
(1, 'Shashikant Developer', 'skv1220@gmail.com', NULL, '$2y$10$zFI0XANCzBeURkxUt3BGWuHyHPdasetmx3xZHj5hpIltfpnXynUyC', NULL, '2020-05-09 04:29:16', '2020-05-09 04:29:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
