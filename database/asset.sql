-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `users_id` int(10) unsigned DEFAULT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `good` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` int(255) DEFAULT NULL,
  `quantity` int(255) DEFAULT '1',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(255) DEFAULT NULL,
  `alltotal` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `carts` (`users_id`, `id`, `good`, `cost`, `quantity`, `photo`, `total`, `alltotal`) VALUES
(4,	43,	'手作純肉乾',	520,	1,	'1.jpg',	520,	NULL),
(4,	44,	'寵物食譜國產新配方 (羊肉+七蔬果) 狗飼料 15kg',	1050,	1,	'2.jpg',	1050,	NULL);

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employeename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeaccount` int(11) NOT NULL,
  `employeepassword` int(11) NOT NULL,
  `employmentdate` datetime NOT NULL,
  `cellphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `employee` (`id`, `employeename`, `employeeaccount`, `employeepassword`, `employmentdate`, `cellphone`, `employeeaddress`, `created_at`, `updated_at`) VALUES
(1,	'蘇菜讚',	532001,	123456,	'2018-01-05 00:00:00',	'0923568497',	'臺中市',	NULL,	NULL),
(2,	'蔡桃櫃',	532002,	654321,	'2018-01-05 00:00:00',	'0923568498',	'臺中市',	NULL,	NULL),
(3,	'游至服',	532003,	234567,	'2018-01-20 00:00:00',	'0923568499',	'臺中市',	NULL,	NULL),
(4,	'游渝強',	532004,	765432,	'2018-01-20 00:00:00',	'0923568500',	'臺中市',	NULL,	NULL);

DROP TABLE IF EXISTS `good`;
CREATE TABLE `good` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gooddetail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expirydate` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `good` (`id`, `goodname`, `gooddetail`, `price`, `quantity`, `expirydate`, `created_at`, `updated_at`, `photo`) VALUES
(1,	'手作純肉乾',	'番茄牛肉切條 / 鱉蛋雞肉條 / 蔓越莓雞肉切條 / 起司雞肉方塊 / 蘋果牛肉方塊',	520,	50,	'2019-12-31 00:00:00',	NULL,	NULL,	'1.jpg'),
(2,	'天然手作零食-雞肉脆片100g',	'100%純天然肉品 / 絕不添加任何添加物 / 手工處理食材 / 去除多餘脂肪、碎骨頭 / 低溫烘焙鎖住養分 / 適用於：犬、貓',	199,	20,	'2020-01-31 00:00:00',	NULL,	NULL,	'2.jpg'),
(7,	'烘培點心 水果夾心餅/迷你潔牙餅/蔬菜起司餅 500g',	'富含豐富鈣質 / 補充Omega 3及6脂肪酸 / 天然維他命E及大量纖維質 / 礦物質及天然抗氧化劑 / 低卡路里輕食無負擔',	360,	25,	'2019-12-31 00:00:00',	NULL,	NULL,	'3.jpg'),
(8,	'多效雙刷頭潔牙骨 家庭號桶裝 1400g',	'食用級安心配方 / 維持口腔健康環境 / 有效降低口腔異味',	720,	10,	'2020-11-30 00:00:00',	NULL,	NULL,	'4.jpg');

DROP TABLE IF EXISTS `good2`;
CREATE TABLE `good2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gooddetail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expirydate` datetime NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `good2` (`id`, `goodname`, `gooddetail`, `price`, `quantity`, `expirydate`, `photo`, `created_at`, `updated_at`) VALUES
(1,	'乾狗糧-牛肉口味15kg',	'理想的Omega3&6 / 富含維生素E、D / 複合碳化合物 / 富含鈣、磷、鋅 / 優化蛋白質',	939,	40,	'2020-05-29 00:00:00',	'1.jpg',	NULL,	NULL),
(2,	'寵物食譜國產新配方 (羊肉+七蔬果) 狗飼料 15kg',	'富含DHA&鱈魚油 / 天然紅羅蔔素及維生素A / 幫助寵物提升免疫力 / 毛髮柔亮配方',	1050,	30,	'2022-01-25 00:00:00',	'2.jpg',	NULL,	NULL),
(3,	'健康主義無榖犬糧-放牧羊454g',	'保護胃壁幫助消化 / 促進新陳代謝 / 抗老化 / 尿道系統健康 / 避免寵物罹患皮膚疾病 / 舒緩脹氣及減緩焦慮',	280,	20,	'2021-05-03 00:00:00',	'3.jpg',	NULL,	NULL),
(4,	'成犬7歲以上活力長壽配方 8kg',	'恢復年輕活力的營養 / 臨床實證抗氧化配方 / 不含人工色素及香料',	949,	15,	'2020-12-31 00:00:00',	'4.jpg',	NULL,	NULL);

DROP TABLE IF EXISTS `good3`;
CREATE TABLE `good3` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gooddetail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expirydate` datetime NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `good3` (`id`, `goodname`, `gooddetail`, `price`, `quantity`, `expirydate`, `photo`, `created_at`, `updated_at`) VALUES
(1,	'全護營養系列-高齡犬配方（農場鮮雞+糙米+地瓜）7kg',	'優質鮮肉 / 有助維持認知健康 / 維持健康的抵抗力 / 有助皮膚健康、毛髮亮麗 / 有助於關節保健 七歲以上高齡犬專用 / ',	1750,	20,	'2023-01-22 00:00:00',	'1.jpg',	'2019-01-07 12:42:47',	NULL),
(2,	'成犬骨關節強化配方 7kg',	'潤滑關節維持軟骨組織 / 大顆粒，慢食幫助潔牙 / 整腸助消化 營養好吸收 / 全面升級添加藜麥',	1080,	22,	'2023-05-09 00:00:00',	'2.jpg',	'2019-01-07 12:43:40',	NULL),
(3,	'原生營養保健-幼犬成長發育配方 50g',	'幫助初生幼齡犬成長所需 / 豐富原生天然營養 / 補充維他命A至Zinc / 富含珍貴海洋食材 / 任何年齡適用(特別是幼犬) / ',	429,	10,	'2022-05-01 00:00:00',	'3.jpg',	'2019-01-07 12:44:01',	NULL),
(4,	'愛犬專用綜合維他命+葡萄糖胺',	'健康皮膚及毛髮 / 補充活力 / 膳食纖維幫助消化 / 100%純天然配方 / cGMP製造標準',	1390,	15,	'2021-12-31 00:00:00',	'4.jpg',	'2019-01-07 12:44:47',	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_01_02_081721_create_good_table',	1),
(4,	'2019_01_02_082514_create_employee_table',	2),
(5,	'2019_01_02_082822_create_good_table',	3),
(6,	'2019_01_02_083423_create_order_table',	4),
(7,	'2019_01_02_084456_create_orderdetail_table',	5);

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useraddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`users_id`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `order` (`id`, `users_id`, `username`, `userphone`, `useraddress`, `created_at`, `updated_at`) VALUES
(30,	2,	'3A532008',	'123123123',	'12312321312',	'2019-01-16 23:56:25',	'2019-01-16 23:56:25'),
(31,	2,	'0960070509@itw',	'213123213',	'12312321312',	'2019-01-16 23:57:40',	'2019-01-16 23:57:40');

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE `orderdetail` (
  `order_id` int(10) unsigned DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `order_id` (`order_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orderdetail` (`order_id`, `product`, `id`, `price`, `quantity`, `created_at`, `updated_at`, `users_id`) VALUES
(30,	'手作純肉乾',	9,	520,	1,	NULL,	NULL,	2),
(31,	'健康主義無榖犬糧-放牧羊454g',	10,	280,	1,	NULL,	NULL,	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `migrations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'123',	'123@gmail.com',	NULL,	'*23AE809DDACAF96AF0FD78ED04B6A265E05AA257',	NULL,	NULL,	NULL),
(2,	'123',	'1234@gmail.com',	NULL,	'$2y$10$gmNj04Yo.neLRcTsXFnfyu/mqtaDFKvkCydW9RvmMuZ7Bn23TPNJq',	'xqVr9hiZre2Xs7nZP4hUqp4bPZROLRIzvcZWLFOUGgztA5P3Q52HZcy90T0Q',	'2019-01-09 04:04:45',	'2019-01-09 04:04:45'),
(3,	'123',	'isme178@yahoo.com.tw',	NULL,	'$2y$10$jgcnunnGG2GYP7rjYixBteQkhrvrIVb6klsUZoIIpRVnvFSUkapV.',	'tdDpJ9yaEHtTx2kzTm9C7XVnwYIln0kGMjaKqOnV9KTgVH3KmNwMzs9JExfq',	'2019-01-11 18:15:47',	'2019-01-11 18:15:47'),
(4,	'123',	'123@yahoo.com.tw',	NULL,	'$2y$10$JATd08bTeLNNa.oIk3ePDeIcGnXIdQcry9q2AF65G5P5AL1Pzidr6',	NULL,	'2019-01-11 23:32:38',	'2019-01-11 23:32:38');

-- 2019-01-17 10:33:15
