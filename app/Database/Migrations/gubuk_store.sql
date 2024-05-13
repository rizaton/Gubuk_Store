-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 09:09 AM
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
-- Database: `gubuk_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

USE migrations INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2024-04-24-113109', 'App\\Database\\Migrations\\ProductTable', 'default', 'App', 1715065567, 1),
(6, '2024-04-24-113632', 'App\\Database\\Migrations\\PeopleTable', 'default', 'App', 1715065567, 1),
(7, '2024-04-24-113646', 'App\\Database\\Migrations\\PromoTable', 'default', 'App', 1715065567, 1),
(8, '2024-04-24-113659', 'App\\Database\\Migrations\\TransactionTable', 'default', 'App', 1715065567, 1);
(9, '2024-05-13-012935', 'App\\Database\\Migrations\\CartTable', 'default', 'App', '1715564355', '1');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `people_id` int(3) UNSIGNED NOT NULL,
  `people_name` varchar(50) NOT NULL,
  `people_phone` varchar(15) NOT NULL,
  `people_email` varchar(100) NOT NULL,
  `people_password` varchar(255) NOT NULL,
  `people_city` varchar(25) NOT NULL,
  `people_points` int(7) NOT NULL DEFAULT 0,
  `people_access` char(1) NOT NULL DEFAULT 'm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `people_name`, `people_phone`, `people_email`, `people_password`, `people_city`, `people_points`, `people_access`) VALUES
(1, 'Tony Afriza', '087852042708', 'tonyafriza@gmail.com', '', 'Tangerang', 0, 'm'),

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_qty` int(3) NOT NULL,
  `product_min_qty` int(3) NOT NULL DEFAULT 20,
  `product_max_qty` int(3) NOT NULL DEFAULT 40,
  `product_price_per_qty` int(10) NOT NULL,
  `imageUrl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_qty`, `product_min_qty`, `product_max_qty`, `product_price_per_qty`, `imageUrl`) VALUES
(1, 'Udang Vannamei Kupas Size 50/60 Frozen 200 gram', 21, 20, 40, 37900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/10/f15940e8-f292-441c-acd1-10865b22f714.jpg'),
(2, 'Daging Sapi Semur Australia Frozen 500 gram', 27, 20, 40, 67500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/9/20/68390c95-c62a-4473-bb79-2e6fe36d02ea.jpg'),
(3, 'Daging Sapi Sliced Beef Australia Frozen 250 gram', 30, 20, 40, 41900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/508e36b8-ccc1-41c5-8219-2c88b0114832.jpg'),
(4, 'Daging Sapi Rendang Australia Frozen 500 gram', 35, 20, 40, 79900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/a1dedd13-473d-461d-9ca9-ff4fa640b448.jpg'),
(5, 'Daging Slice Ekonomis Frozen 500 gram', 25, 20, 40, 61400, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/30/a1d0e179-e91d-4a3b-a7c7-b25f7adbda44.jpg'),
(6, 'Daging Rendang Ekonomis 1 kg Frozen', 38, 20, 40, 129900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/1/8/9f4e529b-7c49-4a4a-b427-9eaef340d3fc.png'),
(7, 'Daging Sapi Sliced Beef US Frozen 250 gram', 23, 20, 40, 48900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/17aeb166-d9a5-4819-aaca-fb45e5121176.jpg'),
(8, 'Cumi Ring Frozen 450 gram', 28, 20, 40, 37100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/9/29/fd031cb6-f09c-43b1-9967-c6ee397d9d1f.png'),
(9, 'Dada Ayam Boneless Fillet Frozen 500 gram', 36, 20, 40, 37900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/30/c760113a-340e-40b6-8348-c3bfade6db98.jpg'),
(10, 'Ikan Dori Fillet Frozen 500 gram', 21, 20, 40, 32500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/9/20/a28836b0-257f-4bbe-977f-1e5bb3801299.jpg'),
(11, 'Ikan Kembung Banjar WGGS Frozen 400 gram', 28, 20, 40, 34900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/2/13/f09d8140-ef92-4f04-b782-16da0dfe5514.jpg'),
(12, 'Ayam Negeri Utuh Frozen 1 kg', 26, 20, 40, 49000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/30/6b729976-9613-4b1d-a7ba-a13793760630.png'),
(13, 'Ayam Kampung Potong 600 gram Frozen', 36, 20, 40, 69900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/5/10/a03afb5b-ad97-4ec8-8966-ea0082ac438a.jpg'),
(14, 'Ayam Paha Atas Tulang Frozen 500 gram', 20, 20, 40, 33500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/930495c3-53bc-4abe-8134-48f8db30776a.jpg'),
(15, 'Ayam Paha Bawah Tulang Frozen 500 gram', 32, 20, 40, 32500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/30/4dacf7e2-65e4-4e62-b340-f0c316ac19b5.jpg'),
(16, 'Ayam Kampung Utuh Frozen 600 gram', 26, 20, 40, 59605, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/3/14/64f81e8b-008c-4f0f-8c07-56ebfecf9fc0.png'),
(17, 'Ceker Ayam Frozen 500 gram', 31, 20, 40, 20100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/e73a6373-4e60-4fb7-b88f-00458fc96c04.jpg'),
(18, 'Udang Vannamei Kupas Tail Frozen On Size 50/60 200 gram', 28, 20, 40, 34000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/12/5/789bba26-82ae-42c6-ab36-e807e41ef9d4.png'),
(19, 'Daging Tulang Iga Sapi Frozen 500 gram', 21, 20, 40, 37600, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/d021baec-ea78-49ef-a73a-b36a14187ced.jpg'),
(20, 'Dada Ayam Boneless Frozen 500 gram', 20, 20, 40, 37900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/5/25/5937e843-e303-4045-9b03-c1a2746881f3.png'),
(21, 'Udang Vannamei Utuh Frozen 60/70 200 gram', 34, 20, 40, 29000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/11/7/fabc7a63-93dc-4fa4-80b2-56263926c4e5.png'),
(22, 'Daging Sapi Giling Frozen 500 gram', 37, 20, 40, 58900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/e7ce831a-d8e7-4367-93e9-ff5ffd1f0006.jpg'),
(23, 'Sayap Ayam Frozen 500 gram', 35, 20, 40, 29900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/8/15/b11c53da-34a1-4f19-9286-570371e66c03.jpg'),
(24, 'Ayam Negeri Potong Frozen 900 gram', 22, 20, 40, 47900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/30/37f49ccd-2487-4a0d-9288-9c3df3a0388a.jpg'),
(25, 'Hati Sapi Beef Liver Frozen 500 gr', 23, 20, 40, 41500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/30/ac96aa15-528f-43f2-9053-34054fc97b17.png'),
(26, '[Segar] Ayam Negeri Utuh 1 kg Fresh ', 37, 20, 40, 47500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/222e5bc3-6856-4ea8-a6a7-e5b4c02dba41.jpg'),
(27, '[Segar] Ayam Paha Atas Tulang 500 gram Fresh - Clearance Sale', 34, 20, 40, 16225, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/363379bd-3eb3-4631-9595-cc6de1123639.jpg'),
(28, 'Daging Sapi Has Rendang Australia Frozen 250 gram', 20, 20, 40, 44900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/a0c965bc-428e-4659-a398-3140c7660831.jpg'),
(29, '[Segar] Sayap Ayam Utuh 500 gram Fresh', 22, 20, 40, 28000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/5/1684935e-cd94-49ad-8fcc-bed146c60d99.jpg'),
(30, 'Ayam Negeri Utuh Frozen 750 gram', 23, 20, 40, 41900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/10/ee62c600-f3e5-4bc0-86ca-b710db3cc954.jpg'),
(31, 'Ati Ayam Frozen 500 gram', 40, 20, 40, 21500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/8/23/483d97b0-b4a2-404b-94f5-2d354f09d4f0.png'),
(32, 'Sayap Ayam Wing Stick Frozen 500 gram', 34, 20, 40, 29900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/11/87d412f5-a410-4600-887c-7691b35528fe.png'),
(33, 'Ayam Nanas Potong Frozen 950 gram', 28, 20, 40, 57900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/12/10/b55159a3-e202-47ab-9e01-4446a9aef823.jpg'),
(34, '[Segar] Paha Ayam Boneless 500 gram Fresh - Clearance Sale', 24, 20, 40, 22740, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/495f71b2-98d0-4aab-a204-a0dc79939416.jpg'),
(35, '[Segar] Ayam Negeri Potong 900 gram Fresh ', 32, 20, 40, 47900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/2cdf97ef-f8d2-4292-abc3-f7ba099245f0.jpg'),
(36, '[Segar] Ikan Salmon Fillet 200 gram Fresh', 35, 20, 40, 80900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/3/6/4c1a7880-f32f-4b5b-8b76-255d98146ef4.jpg'),
(37, 'Ikan Salmon Fillet Frozen 200 gram', 25, 20, 40, 64500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/b4fae566-e340-49e0-a809-6be4c8394855.jpg'),
(38, 'Dada Ayam Utuh Frozen 500 gram', 35, 20, 40, 30849, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/1/30/425972eb-e262-42dd-876d-b839764e9ffa.jpg'),
(39, 'Paha Ayam Boneless Frozen 500 gram', 26, 20, 40, 37900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/5/25/c42aa850-5bfd-40d0-936b-2f69b975fbf5.png'),
(40, 'Daging Iga Sapi Short Rib Australia Frozen 500 gram', 36, 20, 40, 78100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/e5a78c91-8040-4719-a1fd-5f8c11097244.jpg'),
(41, 'Ayam Kampung Organik Utuh Frozen 700 gram', 34, 20, 40, 79900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/11/22/5ba086bb-a5f1-4aa8-90a8-ac80a87dea30.jpg'),
(42, '[Segar] Pollo Katsu Daging Ayam 300 gram Fresh', 25, 20, 40, 33500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/0e40a701-2f71-45dd-a098-f2b399292ff9.png'),
(43, '[Segar] Ikan Salmon Steak 200 gram Fresh ', 40, 20, 40, 68500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/3/6/81c40a1d-3a0d-450e-b612-1f1c8f7364a8.jpg'),
(44, '[Segar] Pollo Karaage Daging Ayam 300 gram Fresh', 38, 20, 40, 32500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/2/29/e6ca7455-2877-48d6-a193-c65aa03c4e20.jpg'),
(45, '[Segar] Pollo Stir Fry Daging Ayam 300 gram Fresh', 35, 20, 40, 32900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/2/29/6c5c46f7-d2c0-49e5-8f37-540fb58318a4.jpg'),
(46, '[Segar] Pollo Sayap Tulip Daging Ayam 350 gram Fresh', 32, 20, 40, 30900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/2/29/8bedfb4f-5f4b-40ee-9dc1-8e3a49cbf5f9.jpg'),
(47, 'Java Sea Vanamei Udang Giling 200 gram', 28, 20, 40, 59000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/9/84ab76f9-2153-463c-ab72-d27496b2c956.jpg'),
(48, 'Beef Yakiniku Japanese Wagyu A5 200 gram', 31, 20, 40, 298900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/66a5ab1d-8619-4aac-8c1e-bd7e4ae04c40.jpg'),
(49, '[Segar] Ayam Paha Bawah Tulang 500 gram Fresh ', 40, 20, 40, 29500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/6b563f48-c9d1-4466-a818-6e40501dca8c.jpg'),
(50, 'Daging Sapi Rawon/Sop Frozen 300 gram', 37, 20, 40, 45000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/46dff358-4f38-4250-8b8a-7b7f490e2b1e.jpg'),
(51, '[Segar] Dada Ayam Boneless Fillet Tanpa Kulit 500 gram Fresh', 25, 20, 40, 34500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/27/cf85cd21-4683-40bc-af46-d0389966e7d8.jpg'),
(52, '[Segar] Dada Ayam Boneless Tanpa Kulit 500 gram Fresh ', 29, 20, 40, 37900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/b22b544e-e1a8-493e-8ef8-9c70c9ed0605.jpg'),
(53, 'Ikan Tongkol WGGS Frozen 450 gr', 31, 20, 40, 33500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/1/13/d99be811-2241-4867-980a-d91b4665e990.jpg'),
(54, '[Segar] Paha Ayam Boneless 500 gram Fresh ', 38, 20, 40, 36384, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/7e81591c-f594-4e05-a3f4-1d913453ae57.jpg'),
(55, 'Ikan Tuna Frozen 500 gram', 39, 20, 40, 56900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/1/17/b4291470-0adf-4522-913a-ef6afeb61fd2.jpg'),
(56, 'Cumi Tube Frozen 500 gram', 36, 20, 40, 39500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/525bf115-9170-4c63-9864-cbc4a0418a69.jpg'),
(57, 'Daging Sapi Steak Sirloin Black Angus USDA Grade Choice 200 gram', 39, 20, 40, 98900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/8/21/b34095e1-c71b-4296-abee-3c8f0d312283.png'),
(58, 'Daging Rendang Premium 1 kg Frozen', 21, 20, 40, 139900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/1/8/5ae4e85a-6040-44a2-a19c-5fdcb26c61ed.png'),
(59, 'Baby Cumi Asin 250 gram', 33, 20, 40, 43900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/10/bab4b574-80cc-4343-b166-54cd5f9190e1.jpg'),
(60, 'Ikan Dori Iris Tipis (Fillet) Frozen 1 kg', 36, 20, 40, 49900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/95d7b369-4e5d-4e9f-9eb2-23e82bcc1391.jpg'),
(61, 'Ikan Tenggiri Steak Frozen 450 gram', 29, 20, 40, 51500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/6e0d79e8-1964-4145-b376-9c8c26358b23.jpg'),
(62, 'Ayam Giling Frozen 500 gram', 32, 20, 40, 41500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/11/14/a4d1be67-0888-4ee2-b760-77ce8ad1d36d.jpg'),
(63, 'Ikan Dori Fillet Frozen 250 gram', 33, 20, 40, 17000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/e4b0db17-7b01-455e-9213-42cee5ec09bc.jpg'),
(64, '[Segar] Ayam Negeri Potong 900 gram Fresh - Clearance Sale', 23, 20, 40, 31135, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/10bbcfc9-0862-4fdd-88c7-7d50a08c9a59.jpg'),
(65, '[Segar] Ayam Paha Atas Tulang 500 gram Fresh ', 28, 20, 40, 29500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/b637aecf-db36-400b-a5e7-b14383a316e8.jpg'),
(66, 'Daging Sapi Sengkel Australia Frozen 500 gram', 31, 20, 40, 69500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/25875329-b74a-4fd2-896b-21f81199cd90.jpg'),
(67, 'Sibas Sashimi Ikan Salmon 200 gram', 22, 20, 40, 179500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/16/0c3aa8dc-ff23-4575-8f0b-82ea04740146.png'),
(68, '[Segar] Pollo Dadu Dada Boneless Daging Ayam 250 gram Fresh', 26, 20, 40, 28500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/2/29/ed79a2f7-6d65-4fa4-99af-f16c26358ace.png'),
(69, 'Ayam Nanas Dada Boneles Frozen 450 gram', 37, 20, 40, 39900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/25/c81d0b03-37f6-448f-87b1-239e7fec668b.png'),
(70, '[Segar] Dada Ayam Boneless Tanpa Kulit 500 gram Fresh - Clearance Sale', 34, 20, 40, 22740, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/0fa0c0b1-ef8b-4f64-a26b-e3d1517d2dfe.jpg'),
(71, 'Daging Iga Sapi Back Rib Australia Frozen 500 gram', 39, 20, 40, 58500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/9/28/8f3055bb-921b-44f4-8490-79c0745371da.jpg'),
(72, 'Tenderloin Steak Grade A AUS 150 gram', 38, 20, 40, 50900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/3f3a9c52-a701-40b9-af18-2e0df38dcc06.jpg'),
(73, '[Segar] Ayam Paha Bawah Tulang 500 gram Fresh - Clearance Sale', 33, 20, 40, 16225, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/44b461ba-3a09-4b99-b1c1-730de9bae1fd.jpg'),
(74, '[Segar] Pollo Middle Wing Daging Ayam 300 gram Fresh', 36, 20, 40, 21000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/2/29/307a1827-49d5-428f-bdfe-94b3ae91ac94.jpg'),
(75, 'Ikan Bandeng Tanpa / Cabut Duri Frozen 300 gram', 34, 20, 40, 33000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/f5b32b83-67c3-4bfb-bf97-f17b83ea0449.jpg'),
(76, 'Ayam Negeri Utuh Probiotik Frozen 700 gram', 35, 20, 40, 67500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/9/540134dc-b541-4c03-b00e-e385f1520e65.jpg'),
(77, 'Ikan Lele WGGS Frozen 500 gram', 20, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/71380113-56d7-4eb1-9490-b4851bd912f2.jpg'),
(78, '[Segar] Sayap Ayam Utuh 500 gram Fresh - Clearance Sale', 33, 20, 40, 15400, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/d39750fc-6f89-40b2-af3d-7755027dd96c.jpg'),
(79, 'Cumi Cendol 500 gram', 31, 20, 40, 49500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/11/217453f1-081a-4e03-90bd-59167864b198.png'),
(80, '[Segar] Dada Ayam Boneless Fillet Tanpa Kulit 500 gram- Clearance Sale', 35, 20, 40, 18975, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/dd8ab1ca-6554-4e75-abc4-6509e8130597.jpg'),
(81, 'Daging Sapi Slice Sukiyaki Australia Frozen 250 gram', 26, 20, 40, 43500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/9/28/c4d8f192-68af-407a-b7b7-abee1a0dd226.jpg'),
(82, '[Segar] Ayam Negeri Utuh 1 kg Fresh - Clearance Sale', 21, 20, 40, 28500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/b8ceeab2-c686-4c69-b6df-c672f245e015.jpg'),
(83, 'Daging Sapi Saikoro Frozen 500 gr', 34, 20, 40, 96200, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/886941d1-5617-4343-8b73-8d3df14f1362.jpg'),
(84, 'Ikan Nila Merah WGGS Frozen 400 gram', 30, 20, 40, 36400, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/6b6e7541-52a1-4def-94e0-4df5f319f98e.jpg'),
(85, 'Udang Kupas M 50/60 400 gram', 39, 20, 40, 64900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/30/b166de18-a02a-49f1-9b1f-b86bec2c4781.jpg'),
(86, 'Daging Sapi Ribeye Steak Australia Frozen 200 gram', 38, 20, 40, 47900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/2682c763-5963-4ce2-b96b-0831b02d63b6.jpg'),
(87, 'Marine Place Smoked Slice Salmon 100 gram', 27, 20, 40, 97000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/7/ad751525-70e4-47f4-8396-b60fb7c0a3b4.jpg'),
(88, 'Ikan Gurame WGGS Frozen 500 gram', 23, 20, 40, 41300, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/4c52a876-e8fe-4a81-be0d-d0bb363d6574.jpg'),
(89, 'Prinz Wagyu MB6+ Daging Sapi Steak Sirloin 200 gram', 27, 20, 40, 249000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/14/72a79708-2b8d-4505-9154-7beb6b25f136.jpg'),
(90, 'Buntut Sapi Australia Frozen 500 gram', 20, 20, 40, 118900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/b436ccf0-dc9c-4ce6-94d3-ecaae10ad6a7.jpg'),
(91, '[Segar] Pollo Wing Stick Daging Ayam 250 gram Fresh', 28, 20, 40, 19500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2024/2/29/60b93695-bbf4-4a64-a200-bb169b11cb18.png'),
(92, 'Java Sea Scallop Simping Telur 200 gram', 26, 20, 40, 57900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/16/ae80bf14-7dac-4f0e-8cb7-a15878c1d8bd.jpg'),
(93, 'Picanha Steak Grade S AUS 200 gram', 20, 20, 40, 75000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/e5c16e2f-5ed8-4596-a0ac-0a3d983157fa.png'),
(94, 'Cumi Baby 200 gram', 21, 20, 40, 33100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/10/12/28d5e934-0913-4ea1-a84f-c690a1d624bb.png'),
(95, 'Ikan Kerapu Fillet 500 gram', 31, 20, 40, 66500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/7/13038f49-741d-4502-a5db-cd6e553b3a43.png'),
(96, 'Java Sea Cumi Flower Import 250 gram', 38, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/9ece1932-a567-46b7-9d63-b30cd012da8f.jpg'),
(97, 'Daging Sapi Gulai Australia Frozen 300 gram', 29, 20, 40, 46300, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/06b9e360-d7f9-45e8-b56a-80d099ed32a1.jpg'),
(98, 'Java Sea Udang Pacet Utuh 300 gram', 22, 20, 40, 89000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/9/fa29f671-50d2-4deb-b856-08879eae402f.jpg'),
(99, 'Ikan Shishamo 170 gram', 24, 20, 40, 61900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/8/25/a111da54-4a90-4a01-ab29-29d7237df725.png'),
(100, 'Cumi Bangka Frozen 500 gram', 28, 20, 40, 52900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/12/1/7bbdecad-a10a-4f64-bb11-8eba92541f0f.jpg'),
(101, 'Daging Sapi Rendang / Semur Segar 250 gram', 40, 20, 40, 101000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/ff39703d-843c-4d78-bf26-14313cb0848d.png'),
(102, 'Udang Cooked Frozen 500 gram', 26, 20, 40, 59900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/12/1/f98e3dc1-08d8-4f5d-bede-97b019b4f225.jpg'),
(103, 'Ikan Mujair WGGS Frozen 500 gram', 32, 20, 40, 33900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/eb5e7d5e-957e-4123-aae8-db458bf9e356.jpg'),
(104, 'Sibas Belly Salmon 200 gram', 39, 20, 40, 110300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/16/bbfe3266-cfb0-403b-9a44-4ada2d4b59e4.png'),
(105, 'Ampela Ayam Frozen 500 gram', 28, 20, 40, 23500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/240ef8cf-9428-49c2-99b5-30b7d482fb44.jpg'),
(106, 'Sibas Steak Salmon 200 gram', 34, 20, 40, 109900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/16/8501778f-a414-4b1e-ab3f-8309041f693d.png'),
(107, 'Ryou Chicken Saikoro 200 gram', 39, 20, 40, 41500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/8/4ce59547-c462-4f45-90ad-06ec88e21874.png'),
(108, 'Java Sea Udang Kupas Sisa Ekor 200 gram', 32, 20, 40, 57000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/9/64598e32-cd6e-4501-bb7c-7e955815fb07.jpg'),
(109, 'Daging Sapi Sirloin Steak Meltique 200 gram', 20, 20, 40, 49500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/c583451f-8cc9-41c1-8741-f0026586c511.jpg'),
(110, 'Daging Sapi Has Dalam Tenderloin Reguler 500 gram', 27, 20, 40, 92500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/fe8bb864-daf5-41f0-bdc1-f56cb38b7a96.jpg'),
(111, 'Ikan Kakap Merah Fillet Frozen 500 gram', 37, 20, 40, 66200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/7/1/ff1789d8-6e12-44e0-bc63-5e42beb00096.jpg'),
(112, 'Ikan Patin WGGS Frozen 500 gram', 38, 20, 40, 24000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/9db05a38-ba81-43f8-95f7-008a89059750.png'),
(113, 'Daging Sapi Tenderloin Steak Australia Frozen 180 gram', 35, 20, 40, 59900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/9/28/0b219c90-35e5-4c2c-9f0d-d0a3039ded19.jpg'),
(114, 'Metzger Smoked Beef Rasher 250 gram', 25, 20, 40, 65000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/8/22/179cb2f1-2022-435f-bceb-c0b68cdc7cbc.jpg'),
(115, 'Ikan Kerapu WGGS Frozen 500 gram', 30, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/7bbd4d03-e176-4b10-95d1-4a800f4b50b3.png'),
(116, 'Ikan Gindara Fillet Frozen 500 gram', 21, 20, 40, 58700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/0d607e26-0367-434b-999e-e1d2147d557f.jpg'),
(117, 'Daging Paru Sapi Slice 500 gram', 24, 20, 40, 36500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/9/a8d2a0b7-3bad-45f1-8942-d6dba2685f65.jpg'),
(118, 'Daging Sapi Rib Eye Steak Meltique 200 gram', 28, 20, 40, 49500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/77f50962-b949-4506-aa37-9628aaedbd56.jpg'),
(119, 'Daging Sapi Tenderloin Steak Meltique 200 gram', 20, 20, 40, 49500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/bb29b963-0120-4d94-a1e8-50390b606731.jpg'),
(120, '[Segar] Pollo Stir Fry Daging Ayam 300 gram Fresh - Clearance Sale', 40, 20, 40, 19740, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/ea2d0710-9c8c-4677-a666-7af4bf15cd26.jpg'),
(121, 'Ayam Susu Premium 800 gram', 38, 20, 40, 59900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/6aa089ec-6424-48cf-b8b0-37b1864cf969.png'),
(122, 'Daging Sapi Saikoro Meltique Premium 250 gram Frozen', 23, 20, 40, 48500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/ef204028-416b-40d8-b4d6-6697ccad9462.jpg'),
(123, '[Segar] Pollo Katsu Daging Ayam 300 gram Fresh - Clearance Sale', 25, 20, 40, 20100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/1eaa81fb-a399-4046-bd7c-15ec4f7c0569.jpg'),
(124, 'Sibas Portion Salmon 200 gram', 25, 20, 40, 115900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/16/26b63f05-f0dc-4a3b-bdbc-901998e81523.png'),
(125, 'Java Sea Udang Kupas PUD V 40/50 200 gram', 28, 20, 40, 55000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/1/8/87f2352f-0aed-4b24-b397-9f42014ed824.png'),
(126, '[Segar] Ikan Salmon Fillet 200 gram Fresh - Clearance Sale', 33, 20, 40, 48540, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/dc910a0b-ae85-457d-88cf-d1304ce3ce0c.jpg'),
(127, '[Segar] Pollo Wing Stick Daging Ayam 250 gram Fresh - Clearance Sale', 20, 20, 40, 11700, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/1355b200-4e47-48e1-830c-b4378a2a8ad9.jpg'),
(128, '[Segar] Pollo Karaage Daging Ayam 300 gram Fresh - Clearance Sale', 33, 20, 40, 17875, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/c3f17da2-b49b-42ab-b8e2-72b4f1d29d7b.jpg'),
(129, '[Segar] Pollo Sayap Tulip Daging Ayam 350 gram Fresh - Clearance Sale', 23, 20, 40, 18540, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/b59c2a1b-1c5c-44b0-a952-a0e63a8ab6be.jpg'),
(130, 'Lemak Potong Daging Sapi 250 gram', 31, 20, 40, 19000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/9/7f3b0841-00a4-4176-8046-f4793d7f8ee2.jpg'),
(131, 'Bebek Peking Muda Utuh 1 kg', 34, 20, 40, 82500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/11/f5e00fc7-10a6-4acb-9e54-88b53d631730.png'),
(132, 'Beef Neck Bone AUS 500 gram', 38, 20, 40, 26300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/9940cc50-e098-4400-8200-c83ed2777bf6.jpg'),
(133, '[Segar] Ikan Salmon Steak 200 gram Fresh - Clearance Sale', 31, 20, 40, 41100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/1e797472-22d0-47aa-adad-24cf5d1b3522.jpg'),
(134, 'Ikan Cakalang WGGS Frozen 500 gram', 30, 20, 40, 33000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/6f0a7af2-eba1-42e3-b78b-c1c8e43b47ae.jpg'),
(135, 'Seafood Lovers Udang Kupas Frozen 400 gram', 23, 20, 40, 58000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/5567d72e-bd0c-42f6-9a77-75414405e350.png'),
(136, 'Ayam Negeri Utuh 650 gram', 36, 20, 40, 31000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/3e1293af-ce52-4a06-8621-5d380d5d1dd3.jpg'),
(137, 'Rubbif Daging Sapi Sliced Beef 250 gram Yoshinoya', 32, 20, 40, 47400, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/29/35ce8102-2388-4d9f-b7bb-317c01fc9d42.jpg'),
(138, 'Ayam Paha Boneless Frozen 1 kg', 25, 20, 40, 80000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/88121fee-b227-4660-b676-6088f26b6218.png'),
(139, 'Wellfed Daging Sapi Sliced Beef 250 gram Yoshinoya', 25, 20, 40, 53500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/73e56b33-4ebd-4b77-ad4d-3f04c1c0af96.jpg'),
(140, 'Kerang Dara Frozen 450 gram', 21, 20, 40, 42700, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/df4e80ef-6c5e-4714-b6f2-2d81ad34d96d.jpg'),
(141, 'Paha Ayam Boneless 1 kg', 26, 20, 40, 59700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/9a3e52fb-d5b5-4951-9f95-0e108f5b808e.jpg'),
(142, 'TaniHub Cumi Ring 450 gram', 30, 20, 40, 46300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/61d76062-ce08-48f2-a0e9-c88468fdfc9e.jpg'),
(143, 'Ayam Giling 250 gram', 38, 20, 40, 20400, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/7d132252-a8dd-418e-9b6b-a67bff240c90.jpg'),
(144, 'Ikan Bawal Hitam Laut WGGS Frozen 500 gram', 28, 20, 40, 56000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/595aced8-16e2-40c4-82f6-2cbb29ba801d.png'),
(145, 'Ikan Lele Fillet 200 gram', 29, 20, 40, 37100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/2/8bf2ab9b-361f-4931-9bec-3e3e0ed4c01f.jpg'),
(146, 'Udang Kupas 200 gram', 28, 20, 40, 53400, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/07fbdf3f-618d-442c-8637-10a6ec52c9c6.jpg'),
(147, 'Daging Sapi Sirloin Steak US Frozen 200 gram', 40, 20, 40, 40100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/3/23/1e7b912a-64e7-4259-bf8c-eca919ba4615.jpg'),
(148, 'Udang Kupas PDTO CPA 500 gram', 23, 20, 40, 77000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/194d193d-8fd9-4d50-8cb3-442cb578007b.jpg'),
(149, 'So Good Ayam Potong Dada Paha Berbumbu Pedas Manis 450 gram', 27, 20, 40, 42300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/20e561d0-3f3a-44f6-90c6-7f650026937b.png'),
(150, 'Ikan Kembung 500 gram', 27, 20, 40, 32500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/64103cef-7ec7-4420-8649-d0af8613c786.jpg'),
(151, 'Daging Sapi Has Rendang Frozen 500 gram', 22, 20, 40, 84300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/fa69f2c6-612b-485b-a5bc-d713afc17e4f.jpg'),
(152, 'Paha Ayam Boneless 2 kg', 37, 20, 40, 160000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/01400a49-8bb7-4fe7-b16c-efc3e2fb552f.jpg'),
(153, 'Ikan Ekor Kuning 300 gram', 36, 20, 40, 33700, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/29/44449fb8-044b-46b1-92c2-ada0f75cfc65.jpg'),
(154, 'Paha Ayam Utuh Frozen 500 gram', 25, 20, 40, 34500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/5/9/eaa9bd90-f69b-4778-a81a-928028fbdaed.jpg'),
(155, 'Dada Ayam Boneless 2 kg', 37, 20, 40, 121000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/c0b56d1b-8d40-4afe-9a1b-8c7f82f8ecab.jpg'),
(156, 'Daging Sapi Rawon Frozen 500 gram', 28, 20, 40, 68900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/7a9a4efb-3cd2-41c4-9efc-9daad1763caf.jpg'),
(157, 'Ryou Daging Sapi Tenderloin Steak Meltique Frozen 200 gram', 22, 20, 40, 65000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/6/28/7a77099d-de6a-4239-9b68-aeb802e42c9b.jpg'),
(158, 'Ayam Dada Boneless Segar 450 gram', 23, 20, 40, 27000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/10/3dda97de-fb48-428f-b608-31c3fd66f7c1.jpg'),
(159, 'So Good Paha dan Dada Ayam Bumbu Kuning 450 gram', 22, 20, 40, 41200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/18df97d7-cb20-4780-a082-90f4f39634ec.png'),
(160, 'Ikan Mas WGGS Frozen 500 gram', 28, 20, 40, 34500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/7/27/8d34ba5b-4805-441e-ade1-4b4b89bad0a4.png'),
(161, 'Berkah Udang Kupas 250 gram', 36, 20, 40, 20000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/9c552892-94ff-422b-b13a-7ab5cda9f439.jpg'),
(162, 'So Good Ayam Potong Paha & Dada Premium 450 gram', 20, 20, 40, 29000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/2/13/4bb118cf-96d0-441f-933e-c4e4093c838b.png'),
(163, 'Paha Bawah Ayam Segar 450 gram', 21, 20, 40, 22000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/3d362074-ad17-470d-98a2-b3f969d3e70d.jpg'),
(164, 'Ayam Paha Boneless Segar 450 gram', 37, 20, 40, 33500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/ad3d1286-6285-4f5e-9aee-10a859972f01.png'),
(165, 'So Good Paha dan Dada Ayam Premium 1 kg', 31, 20, 40, 57500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/2/13/3d6c3a3b-6415-40ff-bb4a-c8fc98712561.png'),
(166, 'Ayam Utuh Segar Segar 750 gram', 31, 20, 40, 33900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/10/65a46140-3220-4a9c-9a61-ddd86d9523ea.jpg'),
(167, 'Ryou Daging Sapi Rib Eye Steak Meltique Frozen 200 gram', 36, 20, 40, 65000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/6/28/f8cf17b1-065f-4748-82a5-c27176032a28.jpg'),
(168, 'Ayam Utuh 850 gram', 38, 20, 40, 44200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/53c13481-c3df-400a-80bd-67c07549c548.jpg'),
(169, 'Daging Sapi Sop Tanpa Tulang Frozen 1 kg', 37, 20, 40, 96800, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/cc836d00-2834-4fb3-a7bc-58113c13b990.jpg'),
(170, 'Daging Sapi Tenderloin Steak Meltique 2 x 200 gram', 32, 20, 40, 99500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/76e11df8-4778-4ae0-b605-f481aa2c5cf1.jpg'),
(171, 'Ryou Daging Sapi Striploin Steak Meltique Frozen 200 gram', 26, 20, 40, 65000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/6/28/661ab4cc-b678-44a5-8793-2f806c01b951.jpg'),
(172, 'Ayam Kampung Omega Utuh 800 gram', 24, 20, 40, 66700, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/2/bd4e94b7-272c-4a68-ac5b-50358095d116.jpg'),
(173, 'Cowboy Daging Sapi Sliced Beef 500 gram Yoshinoya', 23, 20, 40, 94800, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/26/f338cc98-9d57-4037-b4db-4bfbfed5eb14.jpg'),
(174, 'Banda Lele Fillet Bumbu Kuning 500 gram', 30, 20, 40, 49200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/4740d4c0-5344-4508-a83a-41222af6df83.jpg'),
(175, 'Paru Sapi 1 kg', 23, 20, 40, 82500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/8/30/2cf4d4de-c406-4736-a823-c90bc42633e3.jpg'),
(176, 'Daging Iga Sapi Back Rib Australia Frozen 1 kg', 28, 20, 40, 99000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/9b561897-0665-418d-8f1c-d37c7c83f651.jpg'),
(177, 'Daging Sapi Sliced Beef Australia Frozen 500 gram', 30, 20, 40, 94800, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/9a3b5a55-4cb6-42a6-a1cd-848891cbe41c.jpg'),
(178, 'Daging Sapi Sirloin Steak Meltique 2 x 200 gram', 37, 20, 40, 93200, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/16/7a1440e8-48b6-4704-854b-ff0980439074.jpg'),
(179, 'CMOOZ Ikan Bandeng Crispy 200 gram', 39, 20, 40, 40200, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/10/066855b5-d5f9-4037-9cce-fd8fd66fe9ac.jpg'),
(180, 'Daging Sapi Oseng Australia Frozen 300 gram', 39, 20, 40, 55400, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/10/28/e1f5a4b5-74e2-4f9f-87af-6b2e3fb8f7f7.jpg'),
(181, 'Ikan Kembung Banjar Frozen 400 gram', 26, 20, 40, 30800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/85d697c9-4109-4915-b260-d03e38447a35.png'),
(182, 'TaniHub Kerang Dara 450 gram', 35, 20, 40, 38400, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/2f88a9ef-6fe7-4d48-a2e2-b74175d7b142.jpg'),
(183, 'FIS Logistik Ikan Dori Fillet 250 gram', 32, 20, 40, 14300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/2f77caeb-9d2c-427f-bad4-f5b47e518624.jpg'),
(184, 'TaniHub Cumi Tube 450 gram', 29, 20, 40, 55000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/0f472b2a-68d8-4e1b-8669-73a56d748795.jpg'),
(185, 'Ayam Potong Segar 8 pcs 1 kg', 20, 20, 40, 42900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/7b3385c9-b722-4d39-83af-32fb049d6667.jpg'),
(186, 'Daging Sapi Rib Eye Steak Meltique 2 x 200 gram', 29, 20, 40, 99200, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/e9cef6f4-43b6-4093-918e-221883cf45c5.jpg'),
(187, 'Ikan Kakap Skinless Fillet 500 gram', 21, 20, 40, 100000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/6/14/91405c42-8a92-49b2-8ee3-fc03331426e1.jpg'),
(188, 'Ayam Kampung Utuh Frozen 700 gram', 32, 20, 40, 51700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/4/3/6ad8090e-d261-422d-9dd1-2d74a54858c5.jpg'),
(189, 'Ikan Bandeng 400 gram', 36, 20, 40, 20000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/52f1256d-7716-466a-ae96-5db36d54a774.jpg'),
(190, 'Bandar Maritim Ikan Salem 500 gram', 20, 20, 40, 27500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/a70c89f8-5d0d-468e-b74c-764cfc3a372c.jpg'),
(191, 'Daging Iga Sapi Short Rib Australia Frozen 1 kg', 22, 20, 40, 160100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/26/e6089de0-223b-45ff-815e-7d0c5169c615.jpg'),
(192, 'Ikan Bandeng Tanpa Duri 300 gram', 22, 20, 40, 31600, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/3/391d12b7-cc40-41d8-ae1d-45c702e9f7a1.jpg'),
(193, 'Daging Sapi Sliced Beef Australia Low Fat Frozen 500 gram', 31, 20, 40, 75900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/e7ad7722-585a-4d1e-b2a3-22bfdf62f508.jpg'),
(194, 'Bandar Maritim Ikan Kakap Merah Fillet 500 gram', 28, 20, 40, 49000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/3daed021-ef80-4d35-ba1c-2be7dbf4fa40.jpg'),
(195, 'Ikan Salmon Norway Fillet 200 gram', 32, 20, 40, 57600, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/261a92ca-a732-48e1-a178-8c98d8d9e18b.jpg'),
(196, 'Sayap Ayam Segar 450 gram', 20, 20, 40, 20900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/fe50b945-c819-450e-99e1-05a34719e908.jpg'),
(197, 'Berkah Chicken Boneless Paha 450 gram', 38, 20, 40, 60000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/3245baa9-6733-4cf5-838c-5db9b4904ee4.jpg'),
(198, 'Ikan Gurame Super (WGGS) Grade A 500 gram', 21, 20, 40, 29100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/48a5faa0-da5b-4f3d-add2-51dca9802ab8.png'),
(199, 'Daging Sapi Sengkel Frozen 1 kg', 33, 20, 40, 126700, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/d5487d0e-8759-48b6-ae6e-427b34f0f391.jpg'),
(200, 'Babat Putih Frozen 1 kg', 21, 20, 40, 67100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/11/19/8e96b5de-fc91-4559-95b6-8c3748c9c183.jpg'),
(201, 'Udang Vannamei uk. 40 500 gram', 30, 20, 40, 61800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/2/25/8c898254-f6fd-475f-9dfc-df991bf88301.jpg'),
(202, 'Bandar Maritim Ikan Kakap Merah Fillet 250 gram', 23, 20, 40, 25000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/1e5b6a4d-aedd-4be0-9043-e4713e883f2a.jpg'),
(203, 'Daging Sapi Sliced Beef US 500 gram', 39, 20, 40, 84300, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/94797472-e829-4ad3-9520-353ac9da34e2.jpg'),
(204, 'Berkah Udang Kupas 500 gram', 26, 20, 40, 62000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/628fc4c2-2050-4924-8cd8-b82d5f7de2c7.jpg'),
(205, 'Ikan Kakap Merah Fillet 250 gram', 20, 20, 40, 47200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/d23d2a6f-297f-4ed4-8e10-95d515eb42df.png'),
(206, 'Berkah Chicken Boneless Dada 450 gram', 31, 20, 40, 61800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/eb514b40-c366-49e2-9e0b-e18ebd79c373.jpg'),
(207, 'Ayam Utuh 950 gram', 22, 20, 40, 35600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/2df2b57b-19c4-4861-9e92-9d9e3111aff2.jpg'),
(208, 'Ikan Dori Fillet Frozen 1 kg', 35, 20, 40, 49500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/cda12cf1-5f93-44ae-8d6f-32c453c2f79b.jpg'),
(209, 'Wellfed Daging Sapi Sop 250 gram', 25, 20, 40, 61200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/b97eff57-3e00-4b95-8fed-4b0edbb8789c.jpg'),
(210, 'Banda Ribeye Steak 200 gram', 38, 20, 40, 44900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/0a4b7d77-8a64-4ff9-8479-8de3a86e65fd.jpg'),
(211, 'Ikan Tuna Parcel Berkah Laut 500 gram', 38, 20, 40, 44600, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/62b6f90a-ad9a-4c16-bfb9-89d5f9b829b1.jpg'),
(212, 'Ikan Tongkol 450 gram', 23, 20, 40, 28000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/bbf954e1-87c2-46ae-a6a4-617d17056df4.jpg'),
(213, 'Daging Lidah Sapi Iris Australia Frozen 500 gram', 30, 20, 40, 86800, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/1/8a87790e-3ade-45a2-aca8-0b941f4a6bf4.jpg'),
(214, 'So Good Ayam Utuh Potong Isi 10 pcs', 31, 20, 40, 49900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/35f86cb4-ebf6-4594-ae4e-abebb54a8cdd.png'),
(215, '4PP Pindang Tongkol 400 gram', 20, 20, 40, 51000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/8490a992-e40d-470a-b297-f16df5d77fe4.jpg'),
(216, 'Ayam Nanas Potong Frozen 450 gram', 35, 20, 40, 20900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/1af97713-ad18-481b-9179-315479bb3d5a.jpg'),
(217, 'Java Sea Baby Squid 200 gram', 33, 20, 40, 31000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/ce960456-4c7b-4aad-b305-8ce88f23a484.jpg'),
(218, 'Ikan Bawal Putih Laut 500 gram', 39, 20, 40, 52300, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/0ada36fa-535a-4396-b1cc-b8a10889e1dc.jpg'),
(219, 'Daging Sapi Has Luar Segar 250 gram', 32, 20, 40, 41800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/ad52ad87-610e-4094-99f2-482837974eac.png'),
(220, 'Dada Ayam Boneless 1 kg', 38, 20, 40, 52800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/f3fa3d63-f027-4562-a1e7-5d6be3f87e05.jpg'),
(221, 'Daging Sapi Saikoro Cube 500 gram', 22, 20, 40, 91000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/8/2/93168956-0cfd-43b4-85da-17f66caaca09.jpg'),
(222, 'Ikan Nila Fillet Frozen 215 gram', 39, 20, 40, 31000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/3/8/6fee611b-ae5c-40f1-8494-40b2a8efb936.png'),
(223, 'Daging Sapi Sop / Rawon Segar 250 gram', 27, 20, 40, 34700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/bcb06e9f-b6f6-4313-816d-7df47fd42cc8.png'),
(224, 'Bandar Maritim Ikan Tenggiri Steak 500 gram', 22, 20, 40, 50000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/d123cca6-8944-465d-a399-d9940c973dec.jpg'),
(225, 'Java Sea Udang Vannamei Kupas 60 80 200 gram', 36, 20, 40, 39500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/9e5de83a-45d3-4586-a787-c4a90f8949af.jpg'),
(226, 'Ayam Kampung Probiotik Utuh 650 gram', 23, 20, 40, 92200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/12/20/e6e64e75-6204-45b3-b5fa-a537a42aea7c.jpg'),
(227, 'Buntut Sapi Australia 500 gram', 29, 20, 40, 238000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/16/d9187349-0c27-4a17-a32f-7d55453906fa.jpg'),
(228, 'Beef Yakiniku US Prime 250 gram', 26, 20, 40, 59500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/17/28cef2ec-a3ee-412a-9873-bedce181c69e.jpg'),
(229, 'Aruna Ikan Tongkol 500 gram', 31, 20, 40, 28000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/ba09eb1b-3b28-4805-bff6-13d07459573d.jpg'),
(230, 'Wellfed Sukiyaki Slice 250 gram', 36, 20, 40, 30000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/65d8f672-e4d8-4c59-8986-ab66e0acfa9d.jpg'),
(231, 'Hati Sapi Frozen 500 gram', 27, 20, 40, 27900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/17/014368f2-4417-4b82-8fbc-2384dee96279.jpg'),
(232, 'Ikan Tenggiri Steak 400 gram', 20, 20, 40, 43600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/9c1bc62c-e38c-40e5-a312-c79b399a7ace.jpg'),
(233, 'Daging Sapi Giling Reguler Fatty 500 gr', 33, 20, 40, 57200, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/4e23853f-b6c4-4d56-8f54-840110cbdd0c.jpg'),
(234, 'Wellfed Shabu Slice Sapi 250 gram', 35, 20, 40, 30000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/b4e13986-f629-433d-8fae-897fd7ba084f.jpg'),
(235, 'Wellfed Daging Sapi Semur 500 gram', 30, 20, 40, 79900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/95b838c5-10ce-432f-b8fa-00152173e6c0.jpg'),
(236, 'Sreeya Ayam Nanas 950 gram', 28, 20, 40, 62700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/28/f3ef8d90-cbea-45ff-aa34-4f2bbd836a14.jpg'),
(237, 'Berkah Chicken Paha Bawah 550 gram', 31, 20, 40, 53200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/86c6f6b3-8f97-4ac2-8e00-c4d95ec27d7f.jpg'),
(238, 'Java Sea Scallop Size M 200 gram', 35, 20, 40, 67500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/e341c538-125e-40a0-8cb6-d5f0d0730e89.jpg'),
(239, 'Daging Sapi Has Dalam Segar 250 gram', 36, 20, 40, 49500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/3474e4bf-57bd-442b-9c11-2db977896abe.png'),
(240, '4PP Cumi Asin 250 gram', 28, 20, 40, 37500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/06899e0a-3f4d-4a37-9fc5-904820320be5.jpg'),
(241, 'Saltee Ikan Asin Japuh Kecil 250 gram', 32, 20, 40, 13500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/2e63fb78-be03-48c7-ba09-cc93aa25f0f1.jpg'),
(242, 'Bandar Maritim Ikan Kerapu 300 gram', 24, 20, 40, 32300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/590d949f-a3a9-4dc7-906a-cb90de2323a7.jpg'),
(243, 'Agripratama Ayam Kampung Probiotik 700 gram', 39, 20, 40, 102600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/8b3fe262-9c61-4ecc-ac86-4803bb152023.jpg'),
(244, 'Ken Agro Dada Ayam Fillet Probiotik 1 kg', 26, 20, 40, 55000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/ad25e248-0f34-41bf-b318-f59c290bfeef.jpg'),
(245, 'Daging Sapi Giling Segar 250 gram', 32, 20, 40, 39600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/f76c6739-7eb8-4edf-aeba-59ee2415f74e.png'),
(246, 'Bandar Maritim Kerang Hijau 500 gram', 33, 20, 40, 34500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/e6c34400-b6f4-4f12-961d-6b96ecf9fe03.jpg'),
(247, 'Saltee Ikan Selar Asin 250 gram', 21, 20, 40, 17000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/6b45621b-e81a-409e-b8d3-054611534162.jpg'),
(248, 'Ikan Gabus Laut Asin 250 gram', 38, 20, 40, 26700, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/26/2a977ccf-3986-4a10-90c5-94f8d41b6392.jpg'),
(249, 'Daging Sapi Sengkel Segar 250 gram', 22, 20, 40, 39600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/cd92aa1e-bfa1-41fa-ad1c-e1bc19220e84.png'),
(250, 'Daging Sapi Giling Low Fat Wellfed 500 gram', 29, 20, 40, 64900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/15/4cb1c92a-ceed-4412-912e-58ff60d2bede.jpg'),
(251, 'Sreeya Ayam Giling 250 gram', 28, 20, 40, 22600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/14/4562fd72-529b-479c-b839-f17a64d1f778.jpg'),
(252, 'Efishery Ikan Patin Steak 500 gram', 40, 20, 40, 45300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/aa7779d7-1cfe-4340-b433-d3e0073f2d92.jpg'),
(253, 'Muara Karya Ikan Asin Pakang 150 gram', 34, 20, 40, 35700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/bf6e4c9b-ee0f-4734-9d4e-5ad1544319e0.jpg'),
(254, 'Daging Ayam Sayap Marinasi Original Etanee 20 pcs', 25, 20, 40, 38100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/8/26/360cbac0-975e-4d3c-a804-5d28d3f466a0.jpg'),
(255, 'Ayam Susu Premium 1 kg', 24, 20, 40, 69900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/2/21/d6174b82-568c-458f-b4bf-55ad432230c7.jpg'),
(256, 'Daging Kambing Muda 500 gram', 22, 20, 40, 120100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/11/18/4654cfcc-86ce-43a1-bac5-adeb72409617.jpg'),
(257, 'Mesakandean Cumi Cumi Besar 500 gram', 30, 20, 40, 25500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/c25cb80f-d5df-4906-af30-7abf96478510.jpg'),
(258, 'Paha Ayam Boneless Ekonomis 450 gram', 32, 20, 40, 36000, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/12/14/461e561d-90f1-48e6-9135-e1a2115e6e6e.jpg'),
(259, 'Bandar Maritim Ikan Bawal Hitam 500 gram', 31, 20, 40, 42500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/9593a968-0f01-4839-ab38-4cd6564cf010.jpg'),
(260, 'Ayam Pejantan Utuh Frozen 700 gram', 36, 20, 40, 60000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/9/20/02e90e4e-6a03-4f26-9382-d07d1408a1a6.png'),
(261, 'Sunone Boneless Dada 1 kg', 40, 20, 40, 53000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/9e7eb6c3-5226-4013-832f-202c3b423c39.jpg'),
(262, 'Indah Seafood Ikan Kakap Merah Fillet 500 gram', 30, 20, 40, 47200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/76178d68-598a-442c-aea9-97f9f5b85d59.jpg'),
(263, 'Bandar Maritim Ikan Kue Bulet 500 gram', 40, 20, 40, 39000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/d538215c-27b7-4ffd-b476-8b7645e1e274.jpg'),
(264, 'Indah Seafood Ikan Tenggiri Steak 500 gram', 21, 20, 40, 35900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/0477aad9-ffb3-4622-9656-c14ed493dbcf.jpg'),
(265, 'FIS Logistik Ikan Patin Frozen 600 gram', 37, 20, 40, 45500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/335b78ac-d4c3-435b-8a9c-763eeec48cb6.jpg'),
(266, 'Aruna Ikan Kembung 500 gram', 28, 20, 40, 18000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/8d2bd7fb-5f6b-488e-a14c-ac5188ee12a5.jpg'),
(267, 'Tetelan / Scarp Ikan Salmon 250 gram', 24, 20, 40, 32500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/16/d9903585-eed6-4081-91d4-1c024eff0fc4.jpg'),
(268, 'Ken Agro Ayam Probiotik Potong 900 gram', 40, 20, 40, 81800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/aee6bb16-b53e-43ac-af45-dbe50efb514c.jpg'),
(269, '4PP Teri Asin 200 gram', 34, 20, 40, 32500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/785a224b-406e-43e8-a943-57e1117a12a1.jpg'),
(270, 'Berkah Chicken Paha Atas Probiotik Organik 550 gram', 24, 20, 40, 56600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/71c57596-a904-4690-9f40-6c10e606cfca.jpg'),
(271, 'Udang Kupas L 30/40 400 gram', 32, 20, 40, 71900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/11/30/12c84a7b-470e-4110-813a-636f87fc8d0c.jpg'),
(272, 'Indah Seafood Ikan Tongkol 475 gram', 35, 20, 40, 24400, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/82256ff1-f535-49ce-95b2-1a34ba106a61.jpg'),
(273, 'Buntut Sapi Wellfed 500 gram', 24, 20, 40, 116100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/2/25/bfced7c6-7cc8-4921-a5a4-506b92ec931b.jpg'),
(274, 'SunOne Boneless Paha 1 kg', 29, 20, 40, 48000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/0f0c33d6-d0ec-4d2f-83d6-16574e156372.jpg'),
(275, 'Wellfed Daging Ayam Giling 500 gram', 40, 20, 40, 36000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/035d02bb-d3b7-45f4-8c7b-03d616f07273.jpg'),
(276, 'Cowboy Meat Daging Giling Special 500 gram', 28, 20, 40, 45000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/067de145-541b-46b1-b2e8-8f40c5a929ef.jpg'),
(277, 'Laukita Bistik Lidah Frozen 250 gram', 23, 20, 40, 74500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/2a0ef33a-2a35-444e-b72c-b0de88fe2f98.jpg'),
(278, 'Indah Seafood Ikan Kembung Banjar 475 gram', 36, 20, 40, 29400, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/8899ebe0-8ab6-471b-8b74-1385ad784721.jpg'),
(279, 'Ikan Kembung Banjar Tidak Beku 350 gram', 21, 20, 40, 37000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/33fc63e4-9051-4ecf-a774-6aa5da2e0f35.jpg'),
(280, 'Green Rebel Beefless Steak 300 gram', 20, 20, 40, 74900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/f6a69ecd-161a-4ca0-83cd-3b66e8d4f4e9.jpg'),
(281, 'Bandar Maritim Kerang Tahu 500 gram', 33, 20, 40, 32300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/a63cd7cd-a936-4fae-b3a9-b4b533f1a011.jpg'),
(282, 'Muara Karya Udang Rebon 150 gram', 40, 20, 40, 13600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/3bf4d005-c2fd-4f71-8a31-6f6b11d7070f.jpg'),
(283, 'Ampela Ayam 1 kg', 25, 20, 40, 28500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/f6c5a7ce-9c52-4db0-aa0a-4b58c1b30ae1.jpg');
INSERT INTO `product` (`product_id`, `product_name`, `product_qty`, `product_min_qty`, `product_max_qty`, `product_price_per_qty`, `imageUrl`) VALUES
(284, 'So Good Ayam Utuh Potong isi 10 pcs 1 kg', 38, 20, 40, 35600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/12/20/011f2f0d-872a-4829-8d3f-63e5306c8d67.jpg'),
(285, 'Indah Seafood Ikan Gindara Slice 500 gram', 30, 20, 40, 33100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/6259d4b7-c518-4c0a-8618-a54ec14a72dd.jpg'),
(286, 'Berkah Chicken Ayam Potong Parting 10 950 gram', 32, 20, 40, 83100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/b9b09957-5212-4b0e-bc84-9b8b80e2da2f.jpg'),
(287, 'SPAA Daging Sapi Giling 500 gram', 34, 20, 40, 68900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/6/3/36ba6d1a-58cb-4756-a730-a89eea9ca386.jpg'),
(288, 'Artha Mina Ikan Kakap Putih Fillet 500 gram', 20, 20, 40, 60000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/b53c8eff-f6e5-4d20-939f-3df736acc46f.jpg'),
(289, 'Lidah Sapi Wellfed 500 gram', 33, 20, 40, 95000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/2/25/cdbbbd47-a174-4106-a59c-fd1f79a11e43.jpg'),
(290, 'Wellfed Daging Sapi Giling Reguler 500 gram', 40, 20, 40, 64900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/e4cf65fe-ae3f-4e0c-bf23-7cfb3f07acdd.jpg'),
(291, 'Berkah Ikan Dori Fillet 500 gram', 23, 20, 40, 34500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/ea393ccb-5697-4cc9-b9cb-4c67b2491c71.jpg'),
(292, 'Daging Kambing Boneless 500 gram', 31, 20, 40, 97900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/11/18/d2805b0e-415f-487b-97b1-9acdc8b65467.jpg'),
(293, 'Indah Seafood Ikan Mackerel 475 gram', 36, 20, 40, 24000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/1b14ac5f-9600-40a6-a3fd-c9a2435bf4a0.jpg'),
(294, 'Anak Empang Ikan Nila 500 gram', 22, 20, 40, 29500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/c5065373-df97-4cf0-bab1-b242c2343fc8.jpg'),
(295, 'Hasil Laut Kita Ikan Teri Buntio 250 gram', 25, 20, 40, 9200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/e127f4e5-0da7-445d-a3e1-06e113dd5d55.jpg'),
(296, 'Indah Seafood Udang Kupas 70 90 500 gram', 23, 20, 40, 55000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/e043ef89-3079-4cb2-8eae-8a7067c4de10.jpg'),
(297, 'Fis Logistik Lele Frozen 500 gram', 36, 20, 40, 55000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/7dae67e5-092f-4682-bac6-7355438214c4.jpg'),
(298, 'Daging Sengkel Sapi 500 gram', 23, 20, 40, 104700, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/5800fd45-60a3-4aa1-abb7-1e2f6ef1b811.jpg'),
(299, 'Ikan Gurame Super Tidak Beku 350 gram', 38, 20, 40, 38500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/5c7967bf-6429-4181-be55-2e2c437bddd8.jpg'),
(300, 'Bandar Ikan Asin Jambal Roti 100 gram', 28, 20, 40, 10300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/5927f0d7-3d1a-434a-b25a-9828405abfb8.jpg'),
(301, 'Golden Seafood Udang Pancet Tiger 500 gram', 29, 20, 40, 70000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/99f5b086-e9e1-4a6c-baba-5bb947231e42.jpg'),
(302, 'Kanasin Ikan Teri Nasi Asin 250 gram', 39, 20, 40, 36500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/5e52d657-7a25-4f6c-9a5f-c74880efa754.jpg'),
(303, 'Dada Ayam Boneless Ekonomis 450 gram', 38, 20, 40, 8600, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/12/14/ed2d31c7-5732-4f9f-920a-03fa7ab9b553.jpg'),
(304, 'Tetelan Daging Sapi 500 gram', 33, 20, 40, 55000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/178823dc-8974-41a4-a40d-14bdcb881b8d.jpg'),
(305, 'Golden Seafood Ikan Bawal Hitam Laut 1 kg', 22, 20, 40, 16500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/27/11ba6026-8f92-41de-b2a2-7786aa3abe02.jpg'),
(306, 'SunOne Kulit Ayam 1 kg', 37, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/d9ae9b88-abfe-4f26-b404-a5eeee1f530d.jpg'),
(307, 'Sreeya Ayam Nanas 950 gram 2 pack Free Daging Ayam Cincang 300 gram', 37, 20, 40, 106200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/a07d4b1f-72aa-453d-8988-1039cd07d9b2.jpg'),
(308, 'Daging Sapi Sliced Beef Low Fat Frozen 500 gram', 29, 20, 40, 79900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/2/25/eb80b7b7-3f32-4387-9a09-675e7eea4c88.jpg'),
(309, 'Hati Ayam 1 kg', 28, 20, 40, 28500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/005dc4cf-38b3-419d-a90c-ecab812ff1eb.jpg'),
(310, 'Ayam Broiler Frozen Etanee 600 gram', 40, 20, 40, 25100, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/11/10/a6311d45-c1b5-45e2-ad59-5b2b550d1ecd.jpg'),
(311, 'Slice Beef Brisket Fatty AUS Shortplate Sukiyaki 250 gram', 40, 20, 40, 41300, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/12/7/a40e9a33-5ade-4ae9-9674-871b02eec4bf.jpg'),
(312, 'Cumi Merah Besar Tidak Beku 450 gram', 37, 20, 40, 72900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/dc112486-583e-4bf4-bed7-ba13a7b02e4a.jpg'),
(313, 'Daging Sapi Sirloin Beef Steak 100% AUS 500 gr', 30, 20, 40, 99900, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/16/b34ff5b0-20cb-4d8f-9d21-ecef54356755.jpg'),
(314, 'Salmon Fillet Norwegian Banda 500 gram', 31, 20, 40, 123200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/1/13/d21abc58-e755-433b-9925-cb9e7bf2c30d.jpg'),
(315, 'Indah Seafood Ikan Teri Nike 250 gram', 39, 20, 40, 19600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/6/14/5f52df88-fc57-4103-b37c-cfd4b3aa6eea.jpg'),
(316, 'Iga Sapi Segar 500 gram', 23, 20, 40, 59800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/10/14/760f0cdf-908d-4a2a-9e83-3e03f67a719a.png'),
(317, 'Daging Sapi Saikoro Wagyu Grade A5 Frozen 200 gram', 26, 20, 40, 293500, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2023/8/21/d7ea7f01-31cb-4feb-965c-1d8b86f77602.png'),
(318, 'Metion Tenderloin Steak Meltique 200 gram', 34, 20, 40, 59900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/b6b2664d-afd8-47fa-adaf-0e8ca1adb7c6.jpg'),
(319, 'Banda Salmon Tasman 200 gram', 30, 20, 40, 54000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/674de20c-dcea-4636-9cd6-f7fd59c23676.jpg'),
(320, 'Saltee Sotong Asin 250 gram', 32, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/e2467566-ef66-4315-ad52-2fea6ad32006.jpg'),
(321, 'Java Sea Cumi Flower 300 gram', 38, 20, 40, 40000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/dea410f9-b643-4de0-be78-937b0bfab1c8.jpg'),
(322, 'Andalas Tenderloin Ayam Kampung 500 gram', 39, 20, 40, 39900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/48229ecd-9d69-4192-9fa4-a956a410e2e9.jpg'),
(323, 'Wellfed Shabu Brisket Slice 250 gram', 21, 20, 40, 54200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/69df21ef-5e63-4949-bca6-b5a85481b007.jpg'),
(324, 'Fis Logistik Udang Kupas 500 gram', 34, 20, 40, 25000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/a7567462-a373-4247-b0d4-ac88bd47554c.jpg'),
(325, 'Banda Sotong Kare 100 gram', 30, 20, 40, 60000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/769c621e-7f97-4ed1-ae0d-9ea6d038e0aa.jpg'),
(326, 'Ken Agro Ayam Utuh Probiotik 900 gram', 28, 20, 40, 82200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/1d43cfb0-04ec-4965-8d27-c3249c082219.jpg'),
(327, 'Wellfed Short Plate Sliced Beef 250 gram', 35, 20, 40, 61200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/bc22eaee-d6d4-4705-a55c-1875c737e54b.jpg'),
(328, 'Kanemory Daging Sapi Yakiniku 260 gram', 35, 20, 40, 66000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/f110d14b-d321-4275-af7d-7d8f8894f140.jpg'),
(329, 'SunOne Dada Giling 1 kg', 24, 20, 40, 70900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/1a0e9c3a-4782-4733-955f-de017d4dce6d.jpg'),
(330, 'Banda Sotong Cabe Bawang Putih 100 gram', 37, 20, 40, 29500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/7abeef5f-dcca-4828-b387-dc4c7aba9b97.jpg'),
(331, 'Banda Ikan Gurame 400 gram', 40, 20, 40, 32000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/b06b148a-776a-4514-90ae-0c3978681228.jpg'),
(332, 'Metion Daging Sapi Tenderloin Steak Meltique 200 gram', 39, 20, 40, 66400, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/12525363-8772-47e2-a183-eec6286ba634.jpg'),
(333, 'Roemah Ikan Baby Tuna Fillet 500 gram', 32, 20, 40, 41500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/a39313cc-6d87-4c50-9383-fc4b7c4063ab.jpg'),
(334, 'HAP Daging Sapi Ribeye Meltiq 200 gram', 39, 20, 40, 49900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/d1e10051-4b4a-4020-8c68-8d8237ed9fbe.jpg'),
(335, 'Bandar Ikan Asin Bulu Ayam 100 gram', 40, 20, 40, 10000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/86ad2f4d-b7b2-4263-b493-976634f02253.jpg'),
(336, 'SPA Ikan Mas 500 gram', 24, 20, 40, 22000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/d6c42098-f0ef-497b-8496-d92a9b7ce04f.jpg'),
(337, 'Andalas Tulang Ayam Kampung 500 gram', 25, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/5640243a-73f1-4c7b-94c8-46a68bb62370.jpg'),
(338, 'Andalas Ayam Kampung Giling 250 gram', 23, 20, 40, 50100, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/879cf580-66f9-4301-9e1c-6b1757d5f979.jpg'),
(339, 'Ayam Kampung Utuh Tidak Beku 700 gram', 21, 20, 40, 65000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/a6b18d80-f40c-498b-adf7-4c960b295c69.jpg'),
(340, 'Roemah Ikan Tenggiri Steak 500 gram', 34, 20, 40, 45800, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/b7eccb38-6c05-44a5-b00e-33eef5ff5335.jpg'),
(341, 'Ayam Kampung Potong 8 Tidak Beku 700 gram', 29, 20, 40, 68600, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/8d9e8f97-d7fa-4068-917a-d3fc45f19257.jpg'),
(342, 'Saltee Udang Ebi Asin 250 gram', 25, 20, 40, 49000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/db8bda51-e1ba-434e-abfe-8b352f2dedbd.jpg'),
(343, 'Muara Karya Ikan Manyung Asap 200 gram', 37, 20, 40, 18000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/2540bbd4-599e-476a-abf7-22b694d40bb0.jpg'),
(344, 'HAP Daging Sapi Beef Soto 250 gram', 38, 20, 40, 49000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/f83a0f25-3f86-4570-ad6b-4ddfe5e2fbf7.jpg'),
(345, 'Bundling Ayam & Pisau', 26, 20, 40, 99900, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/82238e4e-eb69-4605-bd70-eec292d57211.jpg'),
(346, 'Golden Seafood Udang Vaname Kupas PuD 500 gram', 21, 20, 40, 62000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/18/32468d53-18e8-4f7b-bbeb-7b1d7c44d9a4.jpg'),
(347, 'Andalas Ceker Ayam Kampung 500 gram', 38, 20, 40, 95000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/3ff0350d-11ff-4bff-aa6d-7e544cc09c8c.jpg'),
(348, 'DMHI Udang Vanamei size 60 80 500 gram', 34, 20, 40, 62000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/0fea4530-bca7-484d-8a21-02d269ff6a78.jpg'),
(349, 'Cowboy Meat Iga Sop 500 gram', 23, 20, 40, 38500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/007e191e-7488-4234-ae62-876198644540.jpg'),
(350, 'Cumi Tube 500 gram', 32, 20, 40, 35000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2023/1/9/a0898815-4480-442e-87db-519edf34c469.jpg'),
(351, 'Andalas Ayam Kampung Giling 500 gram', 24, 20, 40, 84500, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/8/8/d379590f-338c-4480-9dfe-cd3c2737642d.jpg'),
(352, 'Daging Sandung Lemur Brisket 500 gram', 28, 20, 40, 72000, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2021/12/2/f22dadfd-fe95-4920-a35c-42a80c6816fc.png'),
(353, 'Banda Ikan Kakap Merah 500 gram', 36, 20, 40, 47200, 'https://images.tokopedia.net/img/cache/200-square/hDjmkQ/2022/4/8/b632e7bf-771a-43af-8ab8-0441dce7836d.jpg'),
(354, '[Segar] Pollo Middle Wing Daging Ayam 300 gram Fresh - Clearance Sale', 31, 20, 40, 11550, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2024/3/19/068ca81e-c185-4c9f-af55-07c86875bde2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `promo_id` int(3) UNSIGNED NOT NULL,
  `promo_name` varchar(100) NOT NULL,
  `promo_sold` int(4) NOT NULL,
  `promo_active` char(1) NOT NULL DEFAULT 'n',
  `promo_price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `transaction_date` int(10) NOT NULL,
  `transaction_promo` char(1) NOT NULL,
  `transaction_points` int(7) NOT NULL,
  `transaction_amount` int(7) NOT NULL,
  `transaction_product_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `promo_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
