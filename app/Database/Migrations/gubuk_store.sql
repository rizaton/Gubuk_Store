-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 11:27 AM
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

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2024-04-24-113109', 'App\\Database\\Migrations\\ProductTable', 'default', 'App', 1713960059, 1),
(4, '2024-04-24-113632', 'App\\Database\\Migrations\\PeopleTable', 'default', 'App', 1713960059, 1),
(5, '2024-04-24-113646', 'App\\Database\\Migrations\\PromoTable', 'default', 'App', 1713960059, 1),
(6, '2024-04-24-113659', 'App\\Database\\Migrations\\TransactionTable', 'default', 'App', 1713960059, 1);

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
(1, '坂本 直子', '080-3650-7996', 'akira.hirokawa@suzuki.jp', '#h[7J%2$9h0Es<[', '藤本市', 0, 'm'),
(2, '佐藤 香織', '045-953-2117', 'aota.shota@mail.goo.ne.jp', 'D$NN,;UHA', '藤本市', 0, 'm'),
(3, '中津川 直子', '0667-74-7800', 'rika.nakamura@gmail.com', '*Q(g_b_-XqsuY=\\j|lk', '笹田市', 0, 'm'),
(4, '山本 里佳', '012-138-1828', 'sayuri08@sasaki.com', 'pO<S%vB[Y$q60aT+d', '大垣市', 0, 'm'),
(5, '高橋 幹', '0250-209-582', 'shota.hamada@yahoo.co.jp', 'B()\"PqQ;xc#-A#fR-9C', '坂本市', 0, 'm'),
(6, '山口 稔', '078-374-8167', 'nnomura@yahoo.co.jp', 'sY#sidxv!-[,rg', '田中市', 0, 'm'),
(7, '伊藤 治', '0820-428-170', 'minoru75@hirokawa.jp', '<\\k>\\\\/|;V`pB`Q;x', '宮沢市', 0, 'm'),
(8, '加藤 健一', '090-3075-5600', 'yui35@hamada.com', 'qrDr+pK{v', '中村市', 0, 'm'),
(9, '江古田 陽一', '05484-6-0647', 'kana36@mail.goo.ne.jp', 'wI\'Ku2lY?6', '中津川市', 0, 'm'),
(10, '斉藤 知実', '0040-442-168', 'takahashi.takuma@gmail.com', '!w)Y5w\'1\\4(!TJ&', '吉本市', 0, 'm'),
(11, '杉山 加奈', '020-361-2632', 'naoto.yoshida@gmail.com', 'PMRD2m\'w0G3j*r', '山岸市', 0, 'm'),
(12, '伊藤 聡太郎', '090-5375-9511', 'nyoshimoto@yahoo.co.jp', 'P9A!X5qdnX#', '大垣市', 0, 'm'),
(13, '山岸 裕美子', '080-3293-0599', 'yoshimoto.tsubasa@nagisa.org', 'q;l*6E`)Gc', '廣川市', 0, 'm'),
(14, '田辺 真綾', '0025-56-1200', 'haruka.sugiyama@mail.goo.ne.jp', 'T.\"/KJM?;S[$COTLLf`n', '小泉市', 0, 'm'),
(15, '藤本 直人', '080-9730-0375', 'sato.kana@mail.goo.ne.jp', 'Dl,?I^{,Nwm5^YY_7n{>', '浜田市', 0, 'm'),
(16, '山口 舞', '02-4340-4465', 'msasaki@nishinosono.jp', '(r>]>\"z>L+/t', '伊藤市', 0, 'm'),
(17, '鈴木 和也', '0328-55-3067', 'yosuke61@kimura.biz', '$9kK@8_}A^:@!', '加藤市', 0, 'm'),
(18, '山田 稔', '0890-553-115', 'sato.manabu@kato.com', '=&6?HH2HD9c%', '伊藤市', 0, 'm'),
(19, '村山 和也', '006-225-4172', 'kanou.rei@tsuda.com', '1Dvs1ar~/X}!#]/', '小林市', 0, 'm'),
(20, '近藤 七夏', '076-446-4348', 'ryohei.takahashi@nishinosono.net', 'Ulye!o4_+yV[;', '宇野市', 0, 'm'),
(21, '中村 知実', '0380-050-109', 'yoshida.minoru@gmail.com', ':gMh;}u\"', '工藤市', 0, 'm'),
(22, '藤本 さゆり', '05845-7-7015', 'kudo.yui@kondo.net', 'dF]s_o=uBQpqh\'WN', '大垣市', 0, 'm'),
(23, '中村 翔太', '051-918-1096', 'akemi.kijima@kudo.org', 'Z$lfUI+]^X,3%+=c845', '鈴木市', 0, 'm'),
(24, '坂本 翔太', '05908-7-5664', 'rkijima@gmail.com', 'He8\"GAENG', '吉田市', 0, 'm'),
(25, '山本 結衣', '00-7553-4778', 'kyosuke34@sasaki.biz', 'f@-t9cel1e\\}6^$n', '木村市', 0, 'm'),
(26, '佐々木 舞', '080-1088-2025', 'knakajima@yamamoto.com', 'BrzRx;RXTN.,R8', '野村市', 0, 'm'),
(27, '工藤 裕美子', '09635-5-7354', 'ltakahashi@hotmail.co.jp', '#\\La-yFCyg(', '若松市', 0, 'm'),
(28, '原田 加奈', '090-1869-1202', 'sato.kazuya@sasaki.info', '$jM5BWb%wM?_ZP', '藤本市', 0, 'm'),
(29, '吉田 拓真', '0000-61-8780', 'yoko.yamagishi@nagisa.biz', 'ef(g$Z[),', '杉山市', 0, 'm'),
(30, '工藤 幹', '066-438-5017', 'kazuya.aota@mail.goo.ne.jp', 'y(G+54gr', '原田市', 0, 'm'),
(31, '渡辺 里佳', '090-4278-1116', 'kiriyama.kazuya@ito.com', '^u~@\"sF,}<[j', '近藤市', 0, 'm'),
(32, '中村 亮介', '080-9935-6774', 'miyake.rei@nagisa.jp', '^p$D.erV*|uaFu!J#W?', '斉藤市', 0, 'm'),
(33, '中津川 和也', '0700-230-384', 'hamada.kyosuke@aota.org', '5qPrDwB6|Xx/>t1', '小泉市', 0, 'm'),
(34, '宇野 稔', '080-1748-3203', 'yui.fujimoto@nakamura.jp', '??vovrS{I9', '津田市', 0, 'm'),
(35, '津田 淳', '09294-7-9103', 'yamada.takuma@yamagishi.info', 'kp}Y,Oeyocj', '中村市', 0, 'm'),
(36, '渡辺 里佳', '0017-37-3896', 'ekoda.kumiko@gmail.com', 'u(.QL-{Z', '宇野市', 0, 'm'),
(37, '笹田 美加子', '013-479-3633', 'ekanou@watanabe.jp', '@<Ap(O>`z<XStJ,', '村山市', 0, 'm'),
(38, '佐藤 稔', '021-285-5242', 'ytanaka@kiriyama.jp', '>D;iqP\'}', '鈴木市', 0, 'm'),
(39, '近藤 淳', '080-0573-7933', 'qaota@mail.goo.ne.jp', '_2xNP|k6o}BW2SuIjNI}', '笹田市', 0, 'm'),
(40, '田辺 智也', '0855-15-6870', 'kyosuke.yamaguchi@hotmail.co.jp', 'Cha2wnzg]FobMA\"BGI', '井上市', 0, 'm'),
(41, '斉藤 太一', '0153-83-2030', 'zsugiyama@nagisa.jp', ':v@nY%!sJ&)9kC?jLVTH', '斉藤市', 0, 'm'),
(42, '野村 淳', '0310-794-956', 'kenichi.kondo@kato.info', '*L^!&F(v5~Q', '三宅市', 0, 'm'),
(43, '加納 春香', '00-9702-7246', 'aoyama.mitsuru@gmail.com', 'P5PvP(3nu*\'B#04', '渡辺市', 0, 'm'),
(44, '三宅 陽子', '080-8308-6040', 'sugiyama.kyosuke@fujimoto.net', '\\7z=<YM.\"7', '石田市', 0, 'm'),
(45, '桐山 晃', '090-9131-3714', 'nishinosono.nanami@hotmail.co.jp', 'c.u]RpeCJul0', '山口市', 0, 'm'),
(46, '中村 裕太', '0330-569-870', 'asuka.kondo@idaka.com', ',^mjHU\'\'p', '中津川市', 0, 'm'),
(47, '井高 稔', '0970-673-949', 'hsaito@yahoo.co.jp', ')bLmL~jdtY7b}MdcfiEa', '廣川市', 0, 'm'),
(48, '村山 聡太郎', '0964-71-5470', 'minoru88@ekoda.jp', 'Q},QpQ8cH*@:#u*^^\\D:', '田辺市', 0, 'm'),
(49, '杉山 明美', '0460-941-037', 'ishida.naoto@yahoo.co.jp', 'sr?3x}e+_\'c/', '小林市', 0, 'm'),
(50, '大垣 治', '0677-90-0233', 'mkoizumi@sakamoto.com', 'XT3@8~oGIxk#K(j&X$', '松本市', 0, 'm'),
(51, '喜嶋 聡太郎', '080-7513-4685', 'yoshimoto.hanako@hotmail.co.jp', 'b@4LPJtpQq', '廣川市', 0, 'm'),
(52, '津田 直人', '07-1247-4071', 'minoru.hamada@nakajima.info', 'g$*.mDB$4?\"Bo_kj', '小林市', 0, 'm'),
(53, '村山 陽一', '07-2139-4516', 'yasuhiro.tsuda@hotmail.co.jp', 'zhOY.\\A_1;Ll]eYH^;', '青田市', 0, 'm'),
(54, '渚 翔太', '0510-414-286', 'ekoda.mikako@gmail.com', 'RYV`;sA0yCU{', '田中市', 0, 'm'),
(55, '工藤 淳', '07-6838-2927', 'kaori.ekoda@hotmail.co.jp', 'xetjydr_', '木村市', 0, 'm'),
(56, '江古田 裕樹', '0350-79-3908', 'kenichi25@hotmail.co.jp', ']H=xjxBh', '大垣市', 0, 'm'),
(57, '中津川 学', '0422-39-2987', 'yosuke73@yamagishi.com', '}-H5y2xB%f)', '青山市', 0, 'm'),
(58, '山田 和也', '01-1744-2114', 'ouno@yamamoto.com', 'X\\i\";f^gc?!]*r9', '廣川市', 0, 'm'),
(59, '鈴木 くみ子', '06886-4-1043', 'mai94@ogaki.org', 'YSH!.$TnH', '中島市', 0, 'm'),
(60, '中村 舞', '02412-5-0178', 'rei71@kiriyama.jp', 'ifh>wf>24!ES', '井高市', 0, 'm'),
(61, '杉山 亮介', '06-8125-2391', 'yamagishi.yuta@gmail.com', 'GKd|;;XghDtUuj@iV]', '津田市', 0, 'm'),
(62, '加納 智也', '0020-838-279', 'chiyo04@tanabe.net', 'U:6=[F!,>', '宇野市', 0, 'm'),
(63, '田辺 あすか', '080-0901-7432', 'esugiyama@ito.org', 'At$oY>Mkp|R-_TQLRp/7', '中津川市', 0, 'm'),
(64, '青山 浩', '085-842-5832', 'nakamura.tomoya@watanabe.info', 'N.gK-H<+\'akBK', '山口市', 0, 'm'),
(65, '中島 稔', '090-0075-2427', 'tsubasa.yoshimoto@mail.goo.ne.jp', '++8FwCa@0Fv+', '笹田市', 0, 'm'),
(66, '井上 くみ子', '080-7968-3111', 'sayuri75@kijima.jp', 'xT\'|Nmo.xc@rfwu[I', '喜嶋市', 0, 'm'),
(67, '佐藤 晃', '00-9748-7417', 'atsushi44@tanaka.jp', ';^z:yT4Asm\\0wqI', '井高市', 0, 'm'),
(68, '中島 洋介', '0630-862-007', 'hamada.jun@yoshida.jp', 'vyDI0Z}DP+}R$=\'', '浜田市', 0, 'm'),
(69, '佐藤 花子', '0460-027-547', 'kijima.kenichi@nagisa.net', 'z`Gr}6-)6xi\'\\Dfz)ZN=', '山岸市', 0, 'm'),
(70, '田中 美加子', '0800-931-944', 'ogaki.sayuri@gmail.com', '2cUA@n0GM^kuyX', '宇野市', 0, 'm'),
(71, '坂本 太一', '0910-111-210', 'miyake.minoru@kobayashi.jp', 'As><rkf|', '中島市', 0, 'm'),
(72, '井上 七夏', '080-5284-5279', 'kudo.hiroshi@mail.goo.ne.jp', 'CW*ZglU&1\'FT}Fa-{', '若松市', 0, 'm'),
(73, '津田 明美', '04-5277-1000', 'nakamura.haruka@yahoo.co.jp', ',Dxh)98Bl[lhC2<ww', '山田市', 0, 'm'),
(74, '山岸 加奈', '011-635-0227', 'yuta.sasada@kijima.com', 'Hm8:T++\'YFbQz', '渡辺市', 0, 'm'),
(75, '山口 舞', '090-5749-5905', 'nanami.yamagishi@mail.goo.ne.jp', '+0N~:L\"uMf~I\'eB', '中村市', 0, 'm'),
(76, '小林 七夏', '080-5312-2646', 'fidaka@kobayashi.info', '83bK08Gb', '山田市', 0, 'm'),
(77, '佐藤 直子', '0790-440-214', 'tanabe.kenichi@yahoo.co.jp', 'Pr}j8@w5', '宮沢市', 0, 'm'),
(78, '工藤 直人', '08511-0-0337', 'yuta.kato@mail.goo.ne.jp', '.)e%K1w6w]3', '若松市', 0, 'm'),
(79, '松本 裕太', '090-2259-5232', 'sasada.hideki@mail.goo.ne.jp', '=\"!OzPNplG}SKAA8u', '中村市', 0, 'm'),
(80, '高橋 結衣', '04226-3-6668', 'naoto.sugiyama@ogaki.org', ')+5O0]xXZy,3<20', '中村市', 0, 'm'),
(81, '斉藤 くみ子', '0460-641-601', 'nanami33@kijima.biz', '<*jz12Oz-R\"\'mbA', '松本市', 0, 'm'),
(82, '斉藤 直人', '0740-70-6138', 'taro.ishida@gmail.com', '(v5\"6*^~W*PRd(', '松本市', 0, 'm'),
(83, '坂本 里佳', '0320-107-811', 'kyosuke.ito@gmail.com', 'Cek~J6$t%LYa~\'~nS', '吉田市', 0, 'm'),
(84, '佐々木 和也', '09798-9-5636', 'ryohei.kijima@murayama.jp', 'NJI+Vf?)+.8|(9', '田辺市', 0, 'm'),
(85, '伊藤 幹', '014-460-9919', 'yoko36@yoshida.com', 'xK%6s]~.#<kq<d{rTk', '田中市', 0, 'm'),
(86, '石田 拓真', '090-4305-1716', 'rnagisa@nomura.info', 'f]0}An2K=k', '山本市', 0, 'm'),
(87, '廣川 千代', '0490-159-246', 'yamada.minoru@sakamoto.com', 'x9OThp/!J!].vW=|', '廣川市', 0, 'm'),
(88, '石田 知実', '080-3638-6593', 'mitsuru59@hotmail.co.jp', 'n_I5!;$p@E\'\'V-%(', '青山市', 0, 'm'),
(89, '吉本 学', '0391-44-1262', 'kana57@gmail.com', 'dz!THmeyA:A9', '西之園市', 0, 'm'),
(90, '松本 学', '0650-068-323', 'xnakatsugawa@yahoo.co.jp', 'L:/\\$C#^', '山岸市', 0, 'm'),
(91, '西之園 晃', '080-6022-9001', 'kenichi.sasaki@gmail.com', ')F$f<\'a.lB/\"-L', '大垣市', 0, 'm'),
(92, '吉本 学', '063-442-7481', 'lwakamatsu@mail.goo.ne.jp', 'F`}Ox+p)9eXuUtg', '山本市', 0, 'm'),
(93, '田辺 結衣', '080-1636-0610', 'akira.kijima@saito.com', 'p:fpr@f[k1LkQGoP%dq', '斉藤市', 0, 'm'),
(94, '中島 洋介', '090-8680-0464', 'nishinosono.hanako@sasada.net', 'br/T7`-,6', '渚市', 0, 'm'),
(95, '石田 香織', '0420-616-129', 'yuki69@hotmail.co.jp', ')CBH>IS[', '斉藤市', 0, 'm'),
(96, '大垣 学', '00674-3-0360', 'vwatanabe@gmail.com', 'p:/O|Xj[DB(Vy', '大垣市', 0, 'm'),
(97, '吉田 さゆり', '090-9631-3718', 'ekoda.satomi@hotmail.co.jp', 'QR&HMAO{l\'i!', '中津川市', 0, 'm'),
(98, '宇野 陽子', '080-5083-4926', 'saito.taichi@nagisa.jp', '4f?Bn04>\']I>=ac', '喜嶋市', 0, 'm'),
(99, '大垣 翼', '0891-30-7233', 'yamada.manabu@harada.biz', 'zbr-x&FekzEC6ghn%l>7', '江古田市', 0, 'm'),
(100, '藤本 太一', '03060-0-3723', 'hideki.sasaki@fujimoto.org', 'un[&/Fy5LW7Xz', '野村市', 0, 'm');

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
  `product_price_per_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_qty`, `product_min_qty`, `product_max_qty`, `product_price_per_qty`) VALUES
(1, 'Udang Vannamei Kupas Size 50/60 Frozen 200 gram', 30, 20, 40, 37900),
(2, 'Daging Sapi Semur Australia Frozen 500 gram', 21, 20, 40, 67500),
(3, 'Daging Sapi Sliced Beef Australia Frozen 250 gram', 22, 20, 40, 41900),
(4, 'Daging Sapi Rendang Australia Frozen 500 gram', 30, 20, 40, 79900),
(5, 'Daging Slice Ekonomis Frozen 500 gram', 26, 20, 40, 61400),
(6, 'Daging Rendang Ekonomis 1 kg Frozen', 33, 20, 40, 129900),
(7, 'Daging Sapi Sliced Beef US Frozen 250 gram', 25, 20, 40, 48900),
(8, 'Cumi Ring Frozen 450 gram', 39, 20, 40, 37100),
(9, 'Dada Ayam Boneless Fillet Frozen 500 gram', 21, 20, 40, 37900),
(10, 'Ikan Dori Fillet Frozen 500 gram', 32, 20, 40, 32500),
(11, 'Ikan Kembung Banjar WGGS Frozen 400 gram', 30, 20, 40, 34900),
(12, 'Ayam Negeri Utuh Frozen 1 kg', 21, 20, 40, 49000),
(13, 'Ayam Kampung Potong 600 gram Frozen', 28, 20, 40, 69900),
(14, 'Ayam Paha Atas Tulang Frozen 500 gram', 21, 20, 40, 33500),
(15, 'Ayam Paha Bawah Tulang Frozen 500 gram', 37, 20, 40, 32500),
(16, 'Ayam Kampung Utuh Frozen 600 gram', 36, 20, 40, 59605),
(17, 'Ceker Ayam Frozen 500 gram', 38, 20, 40, 20100),
(18, 'Udang Vannamei Kupas Tail Frozen On Size 50/60 200 gram', 32, 20, 40, 34000),
(19, 'Daging Tulang Iga Sapi Frozen 500 gram', 23, 20, 40, 37600),
(20, 'Dada Ayam Boneless Frozen 500 gram', 37, 20, 40, 37900),
(21, 'Udang Vannamei Utuh Frozen 60/70 200 gram', 35, 20, 40, 29000),
(22, 'Daging Sapi Giling Frozen 500 gram', 32, 20, 40, 58900),
(23, 'Sayap Ayam Frozen 500 gram', 25, 20, 40, 29900),
(24, 'Ayam Negeri Potong Frozen 900 gram', 40, 20, 40, 47900),
(25, 'Hati Sapi Beef Liver Frozen 500 gr', 40, 20, 40, 41500),
(26, '[Segar] Ayam Negeri Utuh 1 kg Fresh ', 33, 20, 40, 47500),
(27, '[Segar] Ayam Paha Atas Tulang 500 gram Fresh - Clearance Sale', 20, 20, 40, 16225),
(28, 'Daging Sapi Has Rendang Australia Frozen 250 gram', 33, 20, 40, 44900),
(29, '[Segar] Sayap Ayam Utuh 500 gram Fresh', 31, 20, 40, 28000),
(30, 'Ayam Negeri Utuh Frozen 750 gram', 40, 20, 40, 41900),
(31, 'Ati Ayam Frozen 500 gram', 29, 20, 40, 21500),
(32, 'Sayap Ayam Wing Stick Frozen 500 gram', 30, 20, 40, 29900),
(33, 'Ayam Nanas Potong Frozen 950 gram', 39, 20, 40, 57900),
(34, '[Segar] Paha Ayam Boneless 500 gram Fresh - Clearance Sale', 39, 20, 40, 22740),
(35, '[Segar] Ayam Negeri Potong 900 gram Fresh ', 21, 20, 40, 47900),
(36, '[Segar] Ikan Salmon Fillet 200 gram Fresh', 30, 20, 40, 80900),
(37, 'Ikan Salmon Fillet Frozen 200 gram', 28, 20, 40, 64500),
(38, 'Dada Ayam Utuh Frozen 500 gram', 37, 20, 40, 30849),
(39, 'Paha Ayam Boneless Frozen 500 gram', 27, 20, 40, 37900),
(40, 'Daging Iga Sapi Short Rib Australia Frozen 500 gram', 21, 20, 40, 78100),
(41, 'Ayam Kampung Organik Utuh Frozen 700 gram', 25, 20, 40, 79900),
(42, '[Segar] Pollo Katsu Daging Ayam 300 gram Fresh', 28, 20, 40, 33500),
(43, '[Segar] Ikan Salmon Steak 200 gram Fresh ', 22, 20, 40, 68500),
(44, '[Segar] Pollo Karaage Daging Ayam 300 gram Fresh', 25, 20, 40, 32500),
(45, '[Segar] Pollo Stir Fry Daging Ayam 300 gram Fresh', 26, 20, 40, 32900),
(46, '[Segar] Pollo Sayap Tulip Daging Ayam 350 gram Fresh', 28, 20, 40, 30900),
(47, 'Java Sea Vanamei Udang Giling 200 gram', 38, 20, 40, 59000),
(48, 'Beef Yakiniku Japanese Wagyu A5 200 gram', 20, 20, 40, 298900),
(49, '[Segar] Ayam Paha Bawah Tulang 500 gram Fresh ', 31, 20, 40, 29500),
(50, 'Daging Sapi Rawon/Sop Frozen 300 gram', 25, 20, 40, 45000),
(51, '[Segar] Dada Ayam Boneless Fillet Tanpa Kulit 500 gram Fresh', 38, 20, 40, 34500),
(52, '[Segar] Dada Ayam Boneless Tanpa Kulit 500 gram Fresh ', 23, 20, 40, 37900),
(53, 'Ikan Tongkol WGGS Frozen 450 gr', 25, 20, 40, 33500),
(54, '[Segar] Paha Ayam Boneless 500 gram Fresh ', 26, 20, 40, 36384),
(55, 'Ikan Tuna Frozen 500 gram', 28, 20, 40, 56900),
(56, 'Cumi Tube Frozen 500 gram', 22, 20, 40, 39500),
(57, 'Daging Sapi Steak Sirloin Black Angus USDA Grade Choice 200 gram', 39, 20, 40, 98900),
(58, 'Daging Rendang Premium 1 kg Frozen', 39, 20, 40, 139900),
(59, 'Baby Cumi Asin 250 gram', 26, 20, 40, 43900),
(60, 'Ikan Dori Iris Tipis (Fillet) Frozen 1 kg', 20, 20, 40, 49900),
(61, 'Ikan Tenggiri Steak Frozen 450 gram', 20, 20, 40, 51500),
(62, 'Ayam Giling Frozen 500 gram', 29, 20, 40, 41500),
(63, 'Ikan Dori Fillet Frozen 250 gram', 34, 20, 40, 17000),
(64, '[Segar] Ayam Negeri Potong 900 gram Fresh - Clearance Sale', 39, 20, 40, 31135),
(65, '[Segar] Ayam Paha Atas Tulang 500 gram Fresh ', 22, 20, 40, 29500),
(66, 'Daging Sapi Sengkel Australia Frozen 500 gram', 38, 20, 40, 69500),
(67, 'Sibas Sashimi Ikan Salmon 200 gram', 22, 20, 40, 179500),
(68, '[Segar] Pollo Dadu Dada Boneless Daging Ayam 250 gram Fresh', 36, 20, 40, 28500),
(69, 'Ayam Nanas Dada Boneles Frozen 450 gram', 28, 20, 40, 39900),
(70, '[Segar] Dada Ayam Boneless Tanpa Kulit 500 gram Fresh - Clearance Sale', 40, 20, 40, 22740),
(71, 'Daging Iga Sapi Back Rib Australia Frozen 500 gram', 38, 20, 40, 58500),
(72, 'Tenderloin Steak Grade A AUS 150 gram', 36, 20, 40, 50900),
(73, '[Segar] Ayam Paha Bawah Tulang 500 gram Fresh - Clearance Sale', 27, 20, 40, 16225),
(74, '[Segar] Pollo Middle Wing Daging Ayam 300 gram Fresh', 33, 20, 40, 21000),
(75, 'Ikan Bandeng Tanpa / Cabut Duri Frozen 300 gram', 28, 20, 40, 33000),
(76, 'Ayam Negeri Utuh Probiotik Frozen 700 gram', 28, 20, 40, 67500),
(77, 'Ikan Lele WGGS Frozen 500 gram', 38, 20, 40, 35000),
(78, '[Segar] Sayap Ayam Utuh 500 gram Fresh - Clearance Sale', 30, 20, 40, 15400),
(79, 'Cumi Cendol 500 gram', 39, 20, 40, 49500),
(80, '[Segar] Dada Ayam Boneless Fillet Tanpa Kulit 500 gram- Clearance Sale', 38, 20, 40, 18975),
(81, 'Daging Sapi Slice Sukiyaki Australia Frozen 250 gram', 32, 20, 40, 43500),
(82, '[Segar] Ayam Negeri Utuh 1 kg Fresh - Clearance Sale', 37, 20, 40, 28500),
(83, 'Daging Sapi Saikoro Frozen 500 gr', 23, 20, 40, 96200),
(84, 'Ikan Nila Merah WGGS Frozen 400 gram', 33, 20, 40, 36400),
(85, 'Udang Kupas M 50/60 400 gram', 23, 20, 40, 64900),
(86, 'Daging Sapi Ribeye Steak Australia Frozen 200 gram', 37, 20, 40, 47900),
(87, 'Marine Place Smoked Slice Salmon 100 gram', 27, 20, 40, 97000),
(88, 'Ikan Gurame WGGS Frozen 500 gram', 22, 20, 40, 41300),
(89, 'Prinz Wagyu MB6+ Daging Sapi Steak Sirloin 200 gram', 33, 20, 40, 249000),
(90, 'Buntut Sapi Australia Frozen 500 gram', 26, 20, 40, 118900),
(91, '[Segar] Pollo Wing Stick Daging Ayam 250 gram Fresh', 34, 20, 40, 19500),
(92, 'Java Sea Scallop Simping Telur 200 gram', 30, 20, 40, 57900),
(93, 'Picanha Steak Grade S AUS 200 gram', 23, 20, 40, 75000),
(94, 'Cumi Baby 200 gram', 40, 20, 40, 33100),
(95, 'Ikan Kerapu Fillet 500 gram', 31, 20, 40, 66500),
(96, 'Java Sea Cumi Flower Import 250 gram', 32, 20, 40, 35000),
(97, 'Daging Sapi Gulai Australia Frozen 300 gram', 35, 20, 40, 46300),
(98, 'Java Sea Udang Pacet Utuh 300 gram', 33, 20, 40, 89000),
(99, 'Ikan Shishamo 170 gram', 31, 20, 40, 61900),
(100, 'Cumi Bangka Frozen 500 gram', 24, 20, 40, 52900),
(101, 'Daging Sapi Rendang / Semur Segar 250 gram', 27, 20, 40, 101000),
(102, 'Udang Cooked Frozen 500 gram', 21, 20, 40, 59900),
(103, 'Ikan Mujair WGGS Frozen 500 gram', 26, 20, 40, 33900),
(104, 'Sibas Belly Salmon 200 gram', 40, 20, 40, 110300),
(105, 'Ampela Ayam Frozen 500 gram', 32, 20, 40, 23500),
(106, 'Sibas Steak Salmon 200 gram', 31, 20, 40, 109900),
(107, 'Ryou Chicken Saikoro 200 gram', 30, 20, 40, 41500),
(108, 'Java Sea Udang Kupas Sisa Ekor 200 gram', 23, 20, 40, 57000),
(109, 'Daging Sapi Sirloin Steak Meltique 200 gram', 38, 20, 40, 49500),
(110, 'Daging Sapi Has Dalam Tenderloin Reguler 500 gram', 39, 20, 40, 92500),
(111, 'Ikan Kakap Merah Fillet Frozen 500 gram', 25, 20, 40, 66200),
(112, 'Ikan Patin WGGS Frozen 500 gram', 37, 20, 40, 24000),
(113, 'Daging Sapi Tenderloin Steak Australia Frozen 180 gram', 28, 20, 40, 59900),
(114, 'Metzger Smoked Beef Rasher 250 gram', 23, 20, 40, 65000),
(115, 'Ikan Kerapu WGGS Frozen 500 gram', 36, 20, 40, 35000),
(116, 'Ikan Gindara Fillet Frozen 500 gram', 33, 20, 40, 58700),
(117, 'Daging Paru Sapi Slice 500 gram', 34, 20, 40, 36500),
(118, 'Daging Sapi Rib Eye Steak Meltique 200 gram', 28, 20, 40, 49500),
(119, 'Daging Sapi Tenderloin Steak Meltique 200 gram', 37, 20, 40, 49500),
(120, '[Segar] Pollo Stir Fry Daging Ayam 300 gram Fresh - Clearance Sale', 27, 20, 40, 19740),
(121, 'Ayam Susu Premium 800 gram', 38, 20, 40, 59900),
(122, 'Daging Sapi Saikoro Meltique Premium 250 gram Frozen', 35, 20, 40, 48500),
(123, '[Segar] Pollo Katsu Daging Ayam 300 gram Fresh - Clearance Sale', 26, 20, 40, 20100),
(124, 'Sibas Portion Salmon 200 gram', 35, 20, 40, 115900),
(125, 'Java Sea Udang Kupas PUD V 40/50 200 gram', 21, 20, 40, 55000),
(126, '[Segar] Ikan Salmon Fillet 200 gram Fresh - Clearance Sale', 23, 20, 40, 48540),
(127, '[Segar] Pollo Wing Stick Daging Ayam 250 gram Fresh - Clearance Sale', 24, 20, 40, 11700),
(128, '[Segar] Pollo Karaage Daging Ayam 300 gram Fresh - Clearance Sale', 32, 20, 40, 17875),
(129, '[Segar] Pollo Sayap Tulip Daging Ayam 350 gram Fresh - Clearance Sale', 33, 20, 40, 18540),
(130, 'Lemak Potong Daging Sapi 250 gram', 40, 20, 40, 19000),
(131, 'Bebek Peking Muda Utuh 1 kg', 25, 20, 40, 82500),
(132, 'Beef Neck Bone AUS 500 gram', 36, 20, 40, 26300),
(133, '[Segar] Ikan Salmon Steak 200 gram Fresh - Clearance Sale', 28, 20, 40, 41100),
(134, 'Ikan Cakalang WGGS Frozen 500 gram', 34, 20, 40, 33000),
(135, 'Seafood Lovers Udang Kupas Frozen 400 gram', 38, 20, 40, 58000),
(136, 'Ayam Negeri Utuh 650 gram', 21, 20, 40, 31000),
(137, 'Rubbif Daging Sapi Sliced Beef 250 gram Yoshinoya', 36, 20, 40, 47400),
(138, 'Ayam Paha Boneless Frozen 1 kg', 38, 20, 40, 80000),
(139, 'Wellfed Daging Sapi Sliced Beef 250 gram Yoshinoya', 36, 20, 40, 53500),
(140, 'Kerang Dara Frozen 450 gram', 36, 20, 40, 42700),
(141, 'Paha Ayam Boneless 1 kg', 29, 20, 40, 59700),
(142, 'TaniHub Cumi Ring 450 gram', 35, 20, 40, 46300),
(143, 'Ayam Giling 250 gram', 21, 20, 40, 20400),
(144, 'Ikan Bawal Hitam Laut WGGS Frozen 500 gram', 21, 20, 40, 56000),
(145, 'Ikan Lele Fillet 200 gram', 24, 20, 40, 37100),
(146, 'Udang Kupas 200 gram', 27, 20, 40, 53400),
(147, 'Daging Sapi Sirloin Steak US Frozen 200 gram', 20, 20, 40, 40100),
(148, 'Udang Kupas PDTO CPA 500 gram', 31, 20, 40, 77000),
(149, 'So Good Ayam Potong Dada Paha Berbumbu Pedas Manis 450 gram', 28, 20, 40, 42300),
(150, 'Ikan Kembung 500 gram', 39, 20, 40, 32500),
(151, 'Daging Sapi Has Rendang Frozen 500 gram', 28, 20, 40, 84300),
(152, 'Paha Ayam Boneless 2 kg', 31, 20, 40, 160000),
(153, 'Ikan Ekor Kuning 300 gram', 37, 20, 40, 33700),
(154, 'Paha Ayam Utuh Frozen 500 gram', 36, 20, 40, 34500),
(155, 'Dada Ayam Boneless 2 kg', 38, 20, 40, 121000),
(156, 'Daging Sapi Rawon Frozen 500 gram', 39, 20, 40, 68900),
(157, 'Ryou Daging Sapi Tenderloin Steak Meltique Frozen 200 gram', 21, 20, 40, 65000),
(158, 'Ayam Dada Boneless Segar 450 gram', 20, 20, 40, 27000),
(159, 'So Good Paha dan Dada Ayam Bumbu Kuning 450 gram', 21, 20, 40, 41200),
(160, 'Ikan Mas WGGS Frozen 500 gram', 31, 20, 40, 34500),
(161, 'Berkah Udang Kupas 250 gram', 22, 20, 40, 20000),
(162, 'So Good Ayam Potong Paha & Dada Premium 450 gram', 36, 20, 40, 29000),
(163, 'Paha Bawah Ayam Segar 450 gram', 25, 20, 40, 22000),
(164, 'Ayam Paha Boneless Segar 450 gram', 29, 20, 40, 33500),
(165, 'So Good Paha dan Dada Ayam Premium 1 kg', 26, 20, 40, 57500),
(166, 'Ayam Utuh Segar Segar 750 gram', 29, 20, 40, 33900),
(167, 'Ryou Daging Sapi Rib Eye Steak Meltique Frozen 200 gram', 28, 20, 40, 65000),
(168, 'Ayam Utuh 850 gram', 35, 20, 40, 44200),
(169, 'Daging Sapi Sop Tanpa Tulang Frozen 1 kg', 38, 20, 40, 96800),
(170, 'Daging Sapi Tenderloin Steak Meltique 2 x 200 gram', 26, 20, 40, 99500),
(171, 'Ryou Daging Sapi Striploin Steak Meltique Frozen 200 gram', 22, 20, 40, 65000),
(172, 'Ayam Kampung Omega Utuh 800 gram', 39, 20, 40, 66700),
(173, 'Cowboy Daging Sapi Sliced Beef 500 gram Yoshinoya', 23, 20, 40, 94800),
(174, 'Banda Lele Fillet Bumbu Kuning 500 gram', 39, 20, 40, 49200),
(175, 'Paru Sapi 1 kg', 23, 20, 40, 82500),
(176, 'Daging Iga Sapi Back Rib Australia Frozen 1 kg', 37, 20, 40, 99000),
(177, 'Daging Sapi Sliced Beef Australia Frozen 500 gram', 39, 20, 40, 94800),
(178, 'Daging Sapi Sirloin Steak Meltique 2 x 200 gram', 34, 20, 40, 93200),
(179, 'CMOOZ Ikan Bandeng Crispy 200 gram', 34, 20, 40, 40200),
(180, 'Daging Sapi Oseng Australia Frozen 300 gram', 38, 20, 40, 55400),
(181, 'Ikan Kembung Banjar Frozen 400 gram', 40, 20, 40, 30800),
(182, 'TaniHub Kerang Dara 450 gram', 30, 20, 40, 38400),
(183, 'FIS Logistik Ikan Dori Fillet 250 gram', 28, 20, 40, 14300),
(184, 'TaniHub Cumi Tube 450 gram', 23, 20, 40, 55000),
(185, 'Ayam Potong Segar 8 pcs 1 kg', 33, 20, 40, 42900),
(186, 'Daging Sapi Rib Eye Steak Meltique 2 x 200 gram', 25, 20, 40, 99200),
(187, 'Ikan Kakap Skinless Fillet 500 gram', 38, 20, 40, 100000),
(188, 'Ayam Kampung Utuh Frozen 700 gram', 29, 20, 40, 51700),
(189, 'Ikan Bandeng 400 gram', 32, 20, 40, 20000),
(190, 'Bandar Maritim Ikan Salem 500 gram', 36, 20, 40, 27500),
(191, 'Daging Iga Sapi Short Rib Australia Frozen 1 kg', 27, 20, 40, 160100),
(192, 'Ikan Bandeng Tanpa Duri 300 gram', 32, 20, 40, 31600),
(193, 'Daging Sapi Sliced Beef Australia Low Fat Frozen 500 gram', 38, 20, 40, 75900),
(194, 'Bandar Maritim Ikan Kakap Merah Fillet 500 gram', 29, 20, 40, 49000),
(195, 'Ikan Salmon Norway Fillet 200 gram', 34, 20, 40, 57600),
(196, 'Sayap Ayam Segar 450 gram', 29, 20, 40, 20900),
(197, 'Berkah Chicken Boneless Paha 450 gram', 29, 20, 40, 60000),
(198, 'Ikan Gurame Super (WGGS) Grade A 500 gram', 32, 20, 40, 29100),
(199, 'Daging Sapi Sengkel Frozen 1 kg', 35, 20, 40, 126700),
(200, 'Babat Putih Frozen 1 kg', 32, 20, 40, 67100),
(201, 'Udang Vannamei uk. 40 500 gram', 36, 20, 40, 61800),
(202, 'Bandar Maritim Ikan Kakap Merah Fillet 250 gram', 29, 20, 40, 25000),
(203, 'Daging Sapi Sliced Beef US 500 gram', 37, 20, 40, 84300),
(204, 'Berkah Udang Kupas 500 gram', 31, 20, 40, 62000),
(205, 'Ikan Kakap Merah Fillet 250 gram', 26, 20, 40, 47200),
(206, 'Berkah Chicken Boneless Dada 450 gram', 27, 20, 40, 61800),
(207, 'Ayam Utuh 950 gram', 21, 20, 40, 35600),
(208, 'Ikan Dori Fillet Frozen 1 kg', 38, 20, 40, 49500),
(209, 'Wellfed Daging Sapi Sop 250 gram', 30, 20, 40, 61200),
(210, 'Banda Ribeye Steak 200 gram', 40, 20, 40, 44900),
(211, 'Ikan Tuna Parcel Berkah Laut 500 gram', 23, 20, 40, 44600),
(212, 'Ikan Tongkol 450 gram', 39, 20, 40, 28000),
(213, 'Daging Lidah Sapi Iris Australia Frozen 500 gram', 39, 20, 40, 86800),
(214, 'So Good Ayam Utuh Potong Isi 10 pcs', 29, 20, 40, 49900),
(215, '4PP Pindang Tongkol 400 gram', 25, 20, 40, 51000),
(216, 'Ayam Nanas Potong Frozen 450 gram', 27, 20, 40, 20900),
(217, 'Java Sea Baby Squid 200 gram', 20, 20, 40, 31000),
(218, 'Ikan Bawal Putih Laut 500 gram', 38, 20, 40, 52300),
(219, 'Daging Sapi Has Luar Segar 250 gram', 38, 20, 40, 41800),
(220, 'Dada Ayam Boneless 1 kg', 40, 20, 40, 52800),
(221, 'Daging Sapi Saikoro Cube 500 gram', 31, 20, 40, 91000),
(222, 'Ikan Nila Fillet Frozen 215 gram', 34, 20, 40, 31000),
(223, 'Daging Sapi Sop / Rawon Segar 250 gram', 25, 20, 40, 34700),
(224, 'Bandar Maritim Ikan Tenggiri Steak 500 gram', 40, 20, 40, 50000),
(225, 'Java Sea Udang Vannamei Kupas 60 80 200 gram', 33, 20, 40, 39500),
(226, 'Ayam Kampung Probiotik Utuh 650 gram', 28, 20, 40, 92200),
(227, 'Buntut Sapi Australia 500 gram', 35, 20, 40, 238000),
(228, 'Beef Yakiniku US Prime 250 gram', 25, 20, 40, 59500),
(229, 'Aruna Ikan Tongkol 500 gram', 23, 20, 40, 28000),
(230, 'Wellfed Sukiyaki Slice 250 gram', 29, 20, 40, 30000),
(231, 'Hati Sapi Frozen 500 gram', 30, 20, 40, 27900),
(232, 'Ikan Tenggiri Steak 400 gram', 38, 20, 40, 43600),
(233, 'Daging Sapi Giling Reguler Fatty 500 gr', 35, 20, 40, 57200),
(234, 'Wellfed Shabu Slice Sapi 250 gram', 38, 20, 40, 30000),
(235, 'Wellfed Daging Sapi Semur 500 gram', 36, 20, 40, 79900),
(236, 'Sreeya Ayam Nanas 950 gram', 40, 20, 40, 62700),
(237, 'Berkah Chicken Paha Bawah 550 gram', 35, 20, 40, 53200),
(238, 'Java Sea Scallop Size M 200 gram', 32, 20, 40, 67500),
(239, 'Daging Sapi Has Dalam Segar 250 gram', 30, 20, 40, 49500),
(240, '4PP Cumi Asin 250 gram', 33, 20, 40, 37500),
(241, 'Saltee Ikan Asin Japuh Kecil 250 gram', 33, 20, 40, 13500),
(242, 'Bandar Maritim Ikan Kerapu 300 gram', 33, 20, 40, 32300),
(243, 'Agripratama Ayam Kampung Probiotik 700 gram', 29, 20, 40, 102600),
(244, 'Ken Agro Dada Ayam Fillet Probiotik 1 kg', 26, 20, 40, 55000),
(245, 'Daging Sapi Giling Segar 250 gram', 20, 20, 40, 39600),
(246, 'Bandar Maritim Kerang Hijau 500 gram', 35, 20, 40, 34500),
(247, 'Saltee Ikan Selar Asin 250 gram', 24, 20, 40, 17000),
(248, 'Ikan Gabus Laut Asin 250 gram', 31, 20, 40, 26700),
(249, 'Daging Sapi Sengkel Segar 250 gram', 27, 20, 40, 39600),
(250, 'Daging Sapi Giling Low Fat Wellfed 500 gram', 30, 20, 40, 64900),
(251, 'Sreeya Ayam Giling 250 gram', 31, 20, 40, 22600),
(252, 'Efishery Ikan Patin Steak 500 gram', 38, 20, 40, 45300),
(253, 'Muara Karya Ikan Asin Pakang 150 gram', 31, 20, 40, 35700),
(254, 'Daging Ayam Sayap Marinasi Original Etanee 20 pcs', 32, 20, 40, 38100),
(255, 'Ayam Susu Premium 1 kg', 24, 20, 40, 69900),
(256, 'Daging Kambing Muda 500 gram', 22, 20, 40, 120100),
(257, 'Mesakandean Cumi Cumi Besar 500 gram', 24, 20, 40, 25500),
(258, 'Paha Ayam Boneless Ekonomis 450 gram', 38, 20, 40, 36000),
(259, 'Bandar Maritim Ikan Bawal Hitam 500 gram', 29, 20, 40, 42500),
(260, 'Ayam Pejantan Utuh Frozen 700 gram', 39, 20, 40, 60000),
(261, 'Sunone Boneless Dada 1 kg', 30, 20, 40, 53000),
(262, 'Indah Seafood Ikan Kakap Merah Fillet 500 gram', 29, 20, 40, 47200),
(263, 'Bandar Maritim Ikan Kue Bulet 500 gram', 27, 20, 40, 39000),
(264, 'Indah Seafood Ikan Tenggiri Steak 500 gram', 33, 20, 40, 35900),
(265, 'FIS Logistik Ikan Patin Frozen 600 gram', 36, 20, 40, 45500),
(266, 'Aruna Ikan Kembung 500 gram', 30, 20, 40, 18000),
(267, 'Tetelan / Scarp Ikan Salmon 250 gram', 39, 20, 40, 32500),
(268, 'Ken Agro Ayam Probiotik Potong 900 gram', 29, 20, 40, 81800),
(269, '4PP Teri Asin 200 gram', 24, 20, 40, 32500),
(270, 'Berkah Chicken Paha Atas Probiotik Organik 550 gram', 36, 20, 40, 56600),
(271, 'Udang Kupas L 30/40 400 gram', 22, 20, 40, 71900),
(272, 'Indah Seafood Ikan Tongkol 475 gram', 33, 20, 40, 24400),
(273, 'Buntut Sapi Wellfed 500 gram', 21, 20, 40, 116100),
(274, 'SunOne Boneless Paha 1 kg', 22, 20, 40, 48000),
(275, 'Wellfed Daging Ayam Giling 500 gram', 27, 20, 40, 36000),
(276, 'Cowboy Meat Daging Giling Special 500 gram', 33, 20, 40, 45000),
(277, 'Laukita Bistik Lidah Frozen 250 gram', 28, 20, 40, 74500),
(278, 'Indah Seafood Ikan Kembung Banjar 475 gram', 31, 20, 40, 29400),
(279, 'Ikan Kembung Banjar Tidak Beku 350 gram', 28, 20, 40, 37000),
(280, 'Green Rebel Beefless Steak 300 gram', 33, 20, 40, 74900),
(281, 'Bandar Maritim Kerang Tahu 500 gram', 28, 20, 40, 32300),
(282, 'Muara Karya Udang Rebon 150 gram', 37, 20, 40, 13600),
(283, 'Ampela Ayam 1 kg', 30, 20, 40, 28500),
(284, 'So Good Ayam Utuh Potong isi 10 pcs 1 kg', 38, 20, 40, 35600),
(285, 'Indah Seafood Ikan Gindara Slice 500 gram', 22, 20, 40, 33100),
(286, 'Berkah Chicken Ayam Potong Parting 10 950 gram', 21, 20, 40, 83100),
(287, 'SPAA Daging Sapi Giling 500 gram', 34, 20, 40, 68900),
(288, 'Artha Mina Ikan Kakap Putih Fillet 500 gram', 34, 20, 40, 60000),
(289, 'Lidah Sapi Wellfed 500 gram', 20, 20, 40, 95000),
(290, 'Wellfed Daging Sapi Giling Reguler 500 gram', 38, 20, 40, 64900),
(291, 'Berkah Ikan Dori Fillet 500 gram', 26, 20, 40, 34500),
(292, 'Daging Kambing Boneless 500 gram', 22, 20, 40, 97900),
(293, 'Indah Seafood Ikan Mackerel 475 gram', 32, 20, 40, 24000),
(294, 'Anak Empang Ikan Nila 500 gram', 24, 20, 40, 29500),
(295, 'Hasil Laut Kita Ikan Teri Buntio 250 gram', 36, 20, 40, 9200),
(296, 'Indah Seafood Udang Kupas 70 90 500 gram', 33, 20, 40, 55000),
(297, 'Fis Logistik Lele Frozen 500 gram', 22, 20, 40, 55000),
(298, 'Daging Sengkel Sapi 500 gram', 33, 20, 40, 104700),
(299, 'Ikan Gurame Super Tidak Beku 350 gram', 33, 20, 40, 38500),
(300, 'Bandar Ikan Asin Jambal Roti 100 gram', 29, 20, 40, 10300),
(301, 'Golden Seafood Udang Pancet Tiger 500 gram', 35, 20, 40, 70000),
(302, 'Kanasin Ikan Teri Nasi Asin 250 gram', 35, 20, 40, 36500),
(303, 'Dada Ayam Boneless Ekonomis 450 gram', 31, 20, 40, 8600),
(304, 'Tetelan Daging Sapi 500 gram', 20, 20, 40, 55000),
(305, 'Golden Seafood Ikan Bawal Hitam Laut 1 kg', 30, 20, 40, 16500),
(306, 'SunOne Kulit Ayam 1 kg', 31, 20, 40, 35000),
(307, 'Sreeya Ayam Nanas 950 gram 2 pack Free Daging Ayam Cincang 300 gram', 36, 20, 40, 106200),
(308, 'Daging Sapi Sliced Beef Low Fat Frozen 500 gram', 22, 20, 40, 79900),
(309, 'Hati Ayam 1 kg', 37, 20, 40, 28500),
(310, 'Ayam Broiler Frozen Etanee 600 gram', 30, 20, 40, 25100),
(311, 'Slice Beef Brisket Fatty AUS Shortplate Sukiyaki 250 gram', 21, 20, 40, 41300),
(312, 'Cumi Merah Besar Tidak Beku 450 gram', 22, 20, 40, 72900),
(313, 'Daging Sapi Sirloin Beef Steak 100% AUS 500 gr', 38, 20, 40, 99900),
(314, 'Salmon Fillet Norwegian Banda 500 gram', 28, 20, 40, 123200),
(315, 'Indah Seafood Ikan Teri Nike 250 gram', 30, 20, 40, 19600),
(316, 'Iga Sapi Segar 500 gram', 31, 20, 40, 59800),
(317, 'Daging Sapi Saikoro Wagyu Grade A5 Frozen 200 gram', 34, 20, 40, 293500),
(318, 'Metion Tenderloin Steak Meltique 200 gram', 38, 20, 40, 59900),
(319, 'Banda Salmon Tasman 200 gram', 35, 20, 40, 54000),
(320, 'Saltee Sotong Asin 250 gram', 27, 20, 40, 35000),
(321, 'Java Sea Cumi Flower 300 gram', 33, 20, 40, 40000),
(322, 'Andalas Tenderloin Ayam Kampung 500 gram', 28, 20, 40, 39900),
(323, 'Wellfed Shabu Brisket Slice 250 gram', 20, 20, 40, 54200),
(324, 'Fis Logistik Udang Kupas 500 gram', 40, 20, 40, 25000),
(325, 'Banda Sotong Kare 100 gram', 23, 20, 40, 60000),
(326, 'Ken Agro Ayam Utuh Probiotik 900 gram', 22, 20, 40, 82200),
(327, 'Wellfed Short Plate Sliced Beef 250 gram', 36, 20, 40, 61200),
(328, 'Kanemory Daging Sapi Yakiniku 260 gram', 38, 20, 40, 66000),
(329, 'SunOne Dada Giling 1 kg', 29, 20, 40, 70900),
(330, 'Banda Sotong Cabe Bawang Putih 100 gram', 25, 20, 40, 29500),
(331, 'Banda Ikan Gurame 400 gram', 24, 20, 40, 32000),
(332, 'Metion Daging Sapi Tenderloin Steak Meltique 200 gram', 24, 20, 40, 66400),
(333, 'Roemah Ikan Baby Tuna Fillet 500 gram', 36, 20, 40, 41500),
(334, 'HAP Daging Sapi Ribeye Meltiq 200 gram', 40, 20, 40, 49900),
(335, 'Bandar Ikan Asin Bulu Ayam 100 gram', 22, 20, 40, 10000),
(336, 'SPA Ikan Mas 500 gram', 22, 20, 40, 22000),
(337, 'Andalas Tulang Ayam Kampung 500 gram', 40, 20, 40, 35000),
(338, 'Andalas Ayam Kampung Giling 250 gram', 31, 20, 40, 50100),
(339, 'Ayam Kampung Utuh Tidak Beku 700 gram', 38, 20, 40, 65000),
(340, 'Roemah Ikan Tenggiri Steak 500 gram', 35, 20, 40, 45800),
(341, 'Ayam Kampung Potong 8 Tidak Beku 700 gram', 38, 20, 40, 68600),
(342, 'Saltee Udang Ebi Asin 250 gram', 25, 20, 40, 49000),
(343, 'Muara Karya Ikan Manyung Asap 200 gram', 26, 20, 40, 18000),
(344, 'HAP Daging Sapi Beef Soto 250 gram', 37, 20, 40, 49000),
(345, 'Bundling Ayam & Pisau', 25, 20, 40, 99900),
(346, 'Golden Seafood Udang Vaname Kupas PuD 500 gram', 39, 20, 40, 62000),
(347, 'Andalas Ceker Ayam Kampung 500 gram', 40, 20, 40, 95000),
(348, 'DMHI Udang Vanamei size 60 80 500 gram', 26, 20, 40, 62000),
(349, 'Cowboy Meat Iga Sop 500 gram', 25, 20, 40, 38500),
(350, 'Cumi Tube 500 gram', 39, 20, 40, 35000),
(351, 'Andalas Ayam Kampung Giling 500 gram', 36, 20, 40, 84500),
(352, 'Daging Sandung Lemur Brisket 500 gram', 31, 20, 40, 72000),
(353, 'Banda Ikan Kakap Merah 500 gram', 39, 20, 40, 47200),
(354, '[Segar] Pollo Middle Wing Daging Ayam 300 gram Fresh - Clearance Sale', 33, 20, 40, 11550);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
