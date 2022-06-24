-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 04 日 13:05
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `Mate`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `ID` varchar(255) NOT NULL COMMENT '識別值',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:inactive;1:active;2:suspend)',
  `Email` varchar(255) DEFAULT NULL COMMENT '電子信箱',
  `EncodedPassword` varchar(50) DEFAULT NULL COMMENT '加密後密碼',
  `Name` varchar(255) DEFAULT NULL COMMENT '名字',
  `Phone` varchar(50) DEFAULT NULL COMMENT '電話',
  `EmailVerified` tinyint(1) DEFAULT NULL COMMENT '登入信箱是否通過驗證',
  `EngineerVerified` tinyint(1) DEFAULT NULL COMMENT '工程師是否通過驗證',
  `EngineerEmail` varchar(255) DEFAULT NULL COMMENT '工程師驗證信箱',
  `GithubLink` varchar(255) DEFAULT NULL COMMENT 'Github 連結',
  `AccountToken` varchar(255) DEFAULT NULL COMMENT '帳號金鑰',
  `RetrieveToken` varchar(255) DEFAULT NULL COMMENT '密碼尋回金鑰',
  `LoginType` tinyint(4) NOT NULL COMMENT '登入類型(0:email;1:facebook;2:google;3:phone)',
  `ThirdPartyLogin` varchar(255) DEFAULT NULL COMMENT '第三方登入識別碼',
  `Disabled` tinyint(1) DEFAULT NULL COMMENT '帳號是否啟用',
  `Deleted` tinyint(1) DEFAULT NULL COMMENT '帳號是否已刪除',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶管理';

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`SID`, `ID`, `Status`, `Email`, `EncodedPassword`, `Name`, `Phone`, `EmailVerified`, `EngineerVerified`, `EngineerEmail`, `GithubLink`, `AccountToken`, `RetrieveToken`, `LoginType`, `ThirdPartyLogin`, `Disabled`, `Deleted`, `CreateTime`, `CreateBy`, `UpdateTime`, `UpdateBy`) VALUES
(1, 'mock-id-20220527', 1, 'lebronjames@nba.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'James LeBron', '0987654321', 1, 1, 'lebronjames@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 10:45:28', 'manual', NULL, NULL),
(3, 'mock-id-20220527-001', 1, 'currystephen@nba.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Stephen Curry', '0987654321', 1, 1, 'currystephen@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 10:53:14', 'manual', NULL, NULL),
(4, 'mock-id-20220527-002', 1, 'jolintsai@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '蔡依林', '0987654321', 1, 1, 'jolintsai@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(5, 'mock-id-20220527-003', 1, 'clone1@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy1', '0987654321', 1, 1, 'clone1@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(6, 'mock-id-20220527-004', 0, 'clone2@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy2', '0987654321', 1, 1, 'clone2@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(7, 'mock-id-20220527-005', 1, 'clone3@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy3', '0987654321', 1, 1, 'clone3@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(8, 'mock-id-20220527-006', 0, 'clone4@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy4', '0987654321', 1, 1, 'clone4@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(9, 'mock-id-20220527-007', 1, 'clone5@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy5', '0987654321', 1, 1, 'clone5@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(10, 'mock-id-20220527-008', 0, 'clone6@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy6', '0987654321', 1, 1, 'clone6@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL),
(12, 'mock-id-20220527-009', 0, 'clone7@idol.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Dummy7', '0987654321', 1, 1, 'clone7@friendface.com', 'https://github.com/shinder', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 0, '2022-05-29 16:17:03', 'manual', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `account_detail`
--

CREATE TABLE `account_detail` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶明細管理';

-- --------------------------------------------------------

--
-- 資料表結構 `account_mate_key`
--

CREATE TABLE `account_mate_key` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:inactive;1:active;2:locked)',
  `Amount` int(11) NOT NULL COMMENT '數量',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶金鑰管理';

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `SID` int(11) NOT NULL,
  `Module` varchar(100) DEFAULT NULL COMMENT '模組',
  `Type` varchar(100) DEFAULT NULL COMMENT '類型',
  `Code` tinyint(4) DEFAULT NULL COMMENT '代碼',
  `Name` varchar(255) DEFAULT NULL COMMENT '顯示文字'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='分類及項目代碼對照參考表';

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`SID`, `Module`, `Type`, `Code`, `Name`) VALUES
(1, 'personality', 'hobby', 0, '肌肉'),
(2, 'personality', 'hobby', 1, '無人機'),
(3, 'personality', 'hobby', 2, '乳牛'),
(4, 'personality', 'hobby', 3, '迴圈'),
(5, 'personality', 'hobby', 4, '發薪日'),
(6, 'personality', 'hobby', 5, '麥當勞'),
(7, 'personality', 'hobby', 6, '健身'),
(8, 'personality', 'hobby', 7, '衝浪'),
(9, 'personality', 'hobby', 8, '可樂'),
(10, 'personality', 'hobby', 9, '看書'),
(11, 'personality', 'hobby', 10, '全糖珍奶'),
(12, 'personality', 'hobby', 11, '雞排'),
(13, 'personality', 'hobby', 12, '雙螢幕'),
(14, 'personality', 'hobby', 13, '美妝'),
(15, 'personality', 'hobby', 14, 'Youtuber'),
(16, 'personality', 'hobby', 15, 'Switch'),
(17, 'personality', 'dogCat', 0, '卯貓'),
(18, 'personality', 'dogCat', 1, '狗勾'),
(19, 'personality', 'longShort', 0, '長期'),
(20, 'personality', 'longShort', 1, '短期'),
(21, 'personality', 'sm', 0, 'S'),
(22, 'personality', 'sm', 1, 'M'),
(23, 'personality', 'tools', 0, '羽毛'),
(24, 'personality', 'tools', 1, '皮鞭'),
(25, 'personality', 'tools', 2, '手銬'),
(26, 'personality', 'tools', 3, '綁繩'),
(27, 'personality', 'trumpPutin', 0, '川普'),
(28, 'personality', 'trumpPutin', 1, '普丁'),
(29, 'personality', 'meals', 0, '台式'),
(30, 'personality', 'meals', 1, '日式'),
(31, 'personality', 'meals', 2, '韓式'),
(32, 'personality', 'meals', 3, '泰式'),
(33, 'personality', 'meals', 4, '美式'),
(34, 'personality', 'meals', 5, '川菜'),
(35, 'personality', 'meals', 6, '全素'),
(36, 'personality', 'meals', 7, '越式'),
(37, 'personality', 'meals', 8, '歐式'),
(38, 'personality', 'meals', 9, '香菜'),
(39, 'personal_data', 'area', 0, '台北市'),
(40, 'personal_data', 'area', 1, '台中市'),
(41, 'personal_data', 'area', 2, '台南市'),
(42, 'personal_data', 'area', 3, '高雄市'),
(43, 'personal_data', 'occupation', 0, 'UI Designer'),
(44, 'personal_data', 'occupation', 1, 'UX Researcher'),
(45, 'personal_data', 'occupation', 2, 'Front-end Web Developer'),
(46, 'personal_data', 'occupation', 3, 'Backend Web Developer'),
(47, 'personal_data', 'occupation', 4, 'Full Stack Web Developer'),
(48, 'personal_data', 'occupation', 5, 'Software Engineer'),
(49, 'personal_data', 'occupation', 6, 'Web Application Developer'),
(50, 'personal_data', 'occupation', 7, 'Cloud Engineer'),
(51, 'personal_data', 'occupation', 8, 'Application Developer'),
(52, 'personal_data', 'occupation', 9, 'System Architecture'),
(53, 'personal_data', 'occupation', 10, 'Data Engineer'),
(54, 'personality', 'hobby', 16, '肯德基'),
(55, 'personality', 'hobby', 17, '太陽'),
(56, 'personality', 'hobby', 18, '布丁'),
(57, 'personality', 'hobby', 19, '果粉'),
(58, 'personality', 'hobby', 20, '無糖綠'),
(59, 'personality', 'hobby', 21, '咖哩飯');

-- --------------------------------------------------------

--
-- 資料表結構 `category_tbo`
--

CREATE TABLE `category_tbo` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `Module` varchar(255) NOT NULL COMMENT '模組',
  `Type` varchar(255) NOT NULL COMMENT '類型',
  `Sort` tinyint(4) DEFAULT NULL COMMENT '排序',
  `Code` varchar(255) NOT NULL COMMENT '代碼',
  `Description` varchar(255) NOT NULL COMMENT '描述',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='分類管理';

-- --------------------------------------------------------

--
-- 資料表結構 `dating`
--

CREATE TABLE `dating` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `ID` varchar(255) NOT NULL COMMENT '識別值',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:editing;1:sent;2:pending;3:replied)',
  `InviterID` varchar(255) DEFAULT NULL COMMENT '邀請者 ID; FK: account.ID',
  `InviteeID` varchar(255) DEFAULT NULL COMMENT '被邀請人 ID; FK: account.ID',
  `PayBillID` varchar(255) DEFAULT NULL COMMENT '付款人 ID; FK: account.ID',
  `Location` varchar(255) DEFAULT NULL COMMENT '約會地址',
  `Time` varchar(100) DEFAULT NULL COMMENT '約會時間',
  `Date` varchar(100) DEFAULT NULL COMMENT '約會日期',
  `Subject` varchar(255) DEFAULT NULL COMMENT '約會主旨',
  `Description` varchar(255) DEFAULT NULL COMMENT '約會描述',
  `Restaurant` tinyint(4) DEFAULT NULL COMMENT '約會餐廳 ID',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='約會管理';

--
-- 傾印資料表的資料 `dating`
--

INSERT INTO `dating` (`SID`, `ID`, `Status`, `InviterID`, `InviteeID`, `PayBillID`, `Location`, `Time`, `Date`, `Subject`, `Description`, `Restaurant`, `CreateTime`, `CreateBy`, `UpdateTime`, `UpdateBy`) VALUES
(1, 'mock-ID-123456', 0, 'test-user-001', 'test-user-002', 'test-user-001', 'test location', '16:00', '2022年5月 18', NULL, NULL, 0, '2022-05-25 13:59:43', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `dating_detail`
--

CREATE TABLE `dating_detail` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `DatingID` varchar(255) NOT NULL COMMENT 'FK: dating.ID',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='約會細節管理';

-- --------------------------------------------------------

--
-- 資料表結構 `dating_message`
--

CREATE TABLE `dating_message` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `DatingID` varchar(255) NOT NULL COMMENT 'FK: dating.ID',
  `Message` varchar(255) NOT NULL COMMENT '訊息內容',
  `SendTime` varchar(255) NOT NULL COMMENT '發出時間',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='約會訊息管理';

-- --------------------------------------------------------

--
-- 資料表結構 `error_code`
--

CREATE TABLE `error_code` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `Code` varchar(255) NOT NULL COMMENT '錯誤代碼',
  `Message` varchar(255) NOT NULL COMMENT '錯誤訊息',
  `ClientIP` varchar(255) NOT NULL COMMENT '客戶端 IP',
  `ModuleMethod` varchar(255) NOT NULL COMMENT '發生錯誤的模組及方法',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='錯誤代碼管理';

-- --------------------------------------------------------

--
-- 資料表結構 `error_log`
--

CREATE TABLE `error_log` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `ID` varchar(255) NOT NULL COMMENT '識別值',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='錯誤訊息';

-- --------------------------------------------------------

--
-- 資料表結構 `following`
--

CREATE TABLE `following` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `FollowingID` varchar(255) NOT NULL COMMENT '追蹤者 ID; FK: account.ID',
  `Deleted` tinyint(1) DEFAULT NULL COMMENT '已移除',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='關注管理';

-- --------------------------------------------------------

--
-- 資料表結構 `image_management`
--

CREATE TABLE `image_management` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `Path` varchar(255) NOT NULL COMMENT '圖片站內相對路徑',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='圖片管理';

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `OrderID` varchar(255) NOT NULL COMMENT 'FK: order.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態',
  `InvoicePrint` varchar(255) DEFAULT NULL COMMENT '帳單列印輸出',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳單管理';

-- --------------------------------------------------------

--
-- 資料表結構 `mate_key`
--

CREATE TABLE `mate_key` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:inactive;1:active;2:locked)',
  `Amount` int(11) NOT NULL COMMENT '數量',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='金鑰管理';

-- --------------------------------------------------------

--
-- 資料表結構 `mate_key_history`
--

CREATE TABLE `mate_key_history` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `ProductID` varchar(255) NOT NULL COMMENT 'FK: product.ID',
  `Cost` int(11) NOT NULL COMMENT '扣除多少金鑰',
  `Gain` int(11) NOT NULL COMMENT '增加多少金鑰',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:inactive;1:active;2:locked)',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶金鑰歷史紀錄';

-- --------------------------------------------------------

--
-- 資料表結構 `meetup`
--

CREATE TABLE `meetup` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `ID` varchar(255) NOT NULL COMMENT '識別值',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:edit;1:published;2:success;3:fail;4:banned;5:verifying)',
  `Location` varchar(255) DEFAULT NULL COMMENT '聚會地點',
  `Address` varchar(255) DEFAULT NULL COMMENT '聚會地址',
  `StartTime` datetime DEFAULT NULL COMMENT '聚會開始日期時間',
  `EndTime` datetime DEFAULT NULL COMMENT '聚會結束日期時間',
  `DeadLine` datetime DEFAULT NULL COMMENT '聚會最後審核日期時間',
  `Subject` varchar(255) DEFAULT NULL COMMENT '聚會主旨',
  `Description` varchar(255) DEFAULT NULL COMMENT '聚會描述',
  `PeopleCount` varchar(255) DEFAULT NULL COMMENT '人數限制',
  `Phone` varchar(255) DEFAULT NULL COMMENT '連絡電話',
  `Meal` tinyint(1) DEFAULT NULL COMMENT '是否用餐',
  `MealMode` tinyint(4) DEFAULT NULL COMMENT '用餐餐費(0:各付各的;1:平均分攤;2:我請客;3:你買單)    ',
  `Budget` decimal(10,0) DEFAULT NULL COMMENT '用餐預算',
  `Promote` tinyint(1) DEFAULT NULL COMMENT '推廣模式',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='聚會管理';

--
-- 傾印資料表的資料 `meetup`
--

INSERT INTO `meetup` (`SID`, `ID`, `Status`, `Location`, `Address`, `StartTime`, `EndTime`, `DeadLine`, `Subject`, `Description`, `PeopleCount`, `Phone`, `Meal`, `MealMode`, `Budget`, `Promote`, `CreateTime`, `CreateBy`, `UpdateTime`, `UpdateBy`) VALUES
(2, '123', 0, '大安', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '0987654321', 1, 0, '0', 1, '2022-05-21 22:08:35', NULL, NULL, NULL),
(3, '123456', 0, '大安', 'gfdsg', '2022-06-01 14:41:00', '2022-06-06 14:41:00', '2022-05-31 14:41:00', 'gfdsg', 'dgfsgfd', '5345', '0987654321', 1, 2, '345', 1, '2022-06-01 14:41:36', NULL, NULL, NULL),
(1, 'test_id_123', 0, 'Daan', 'MRT Daan', '2022-05-21 20:31:20', '2022-05-21 20:31:20', '2022-05-21 20:31:20', 'test subject', 'test description', '5', '0987654321', 1, 2, '500', 1, '2022-05-21 20:31:20', 'system', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `meetup_announce`
--

CREATE TABLE `meetup_announce` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `MeetupID` varchar(255) NOT NULL COMMENT 'FK: meetup.ID',
  `AnnounceBy` tinyint(4) DEFAULT NULL COMMENT '公告發布者 ID; FK: account.ID',
  `Content` varchar(255) DEFAULT NULL COMMENT '訊息內容',
  `PublishTime` datetime DEFAULT NULL COMMENT '發出時間',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='聚會公告管理';

-- --------------------------------------------------------

--
-- 資料表結構 `meetup_attendee`
--

CREATE TABLE `meetup_attendee` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `MeetupID` varchar(255) NOT NULL COMMENT 'FK: meetup.ID',
  `AttendeeID` tinyint(4) DEFAULT NULL COMMENT '參加者 ID; FK: account.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:待審核;1:可參加;2:不可參加)',
  `IsAdmin` tinyint(1) DEFAULT NULL COMMENT '是否為聚會管理者',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='聚會參加者管理';

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `ID` varchar(255) NOT NULL COMMENT '識別值',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:pending;1:success;2:fail)',
  `BillingAddress` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '帳單地址',
  `BillingDate` datetime DEFAULT NULL COMMENT '計費日期',
  `TotalPrice` datetime DEFAULT NULL COMMENT '總金額',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='訂單管理';

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE `order_detail` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `OrderID` varchar(255) NOT NULL COMMENT 'FK: order.ID',
  `ProductID` varchar(255) NOT NULL COMMENT 'FK: product.ID',
  `Quantity` varchar(255) NOT NULL COMMENT '數量',
  `UnitPrice` varchar(255) NOT NULL COMMENT '單價',
  `Discount` varchar(255) NOT NULL COMMENT '折扣',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='訂單明細管理';

-- --------------------------------------------------------

--
-- 資料表結構 `payment_methed`
--

CREATE TABLE `payment_methed` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態',
  `CardType` tinyint(4) DEFAULT NULL COMMENT '卡別(0:visa;1:master;2:jcb)',
  `CardHolderName` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '持卡人姓名',
  `CardLastFourDigit` varchar(50) DEFAULT NULL COMMENT '卡號後四碼',
  `CardExpirationMonth` char(2) DEFAULT NULL COMMENT '信用卡期限月份',
  `CardExpirationYear` char(2) DEFAULT NULL COMMENT '信用卡期限年份',
  `CVV2` varchar(50) DEFAULT NULL COMMENT '檢核碼',
  `PayPal` varchar(255) DEFAULT NULL COMMENT 'PayPal 碼',
  `Deleted` tinyint(1) DEFAULT NULL COMMENT '已刪除',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶付款方法管理';

-- --------------------------------------------------------

--
-- 資料表結構 `personal_data`
--

CREATE TABLE `personal_data` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `NickName` varchar(255) NOT NULL COMMENT '暱稱',
  `Gender` tinyint(4) DEFAULT NULL COMMENT '性別(0:female;1:male;2:undefined)',
  `Birthday` date DEFAULT NULL COMMENT '生日',
  `Occupation` tinyint(4) DEFAULT NULL COMMENT '職業(0:老師;1碼農;2:待業中)',
  `Area` tinyint(4) DEFAULT NULL COMMENT '居住地(0:台北;1:新北;2:基隆)',
  `MatchHow` tinyint(4) DEFAULT NULL,
  `Introduce` varchar(255) DEFAULT NULL,
  `Picture` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Age` tinyint(4) DEFAULT NULL,
  `Pic1` varchar(255) DEFAULT NULL,
  `Pic2` varchar(255) DEFAULT NULL,
  `Pic3` varchar(255) DEFAULT NULL,
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶個人資料';

--
-- 傾印資料表的資料 `personal_data`
--

INSERT INTO `personal_data` (`SID`, `AccountID`, `NickName`, `Gender`, `Birthday`, `Occupation`, `Area`, `MatchHow`, `Introduce`, `Picture`, `Age`, `Pic1`, `Pic2`, `Pic3`, `CreateTime`, `CreateBy`, `UpdateTime`, `UpdateBy`) VALUES
(1, 'mock-id-20220527', 'Wyatt', 1, '1985-12-30', 1, 1, 77, '因為從小就對程式碼很有興趣，長大後決定當一名工程師，現在正在Apple擔任前端工程師中，如果有程式相關的問題，可以問我喔！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/main01.JPG', 'imgs/people/main02.JPG', 'imgs/people/main03.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL),
(2, 'mock-id-20220527-001', 'Ajax', 1, '1988-03-14', 1, 2, 99, '朋友們叫我「天母彭于晏」，因為我對健身重訓很有愛，身材也練得還可以，但如果你也喜歡運動，我們可以一起去健身房，不會的器材我也可以教妳！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 32, 'imgs/people/selfie43.JPG', 'imgs/people/selfie43-1.JPG', 'imgs/people/selfie43-2.JPG', '2022-05-29 11:00:34', 'manual', NULL, NULL),
(3, 'mock-id-20220527-002', '人魚公主', 0, '1980-09-15', 6, 3, 88, '我的綽號是「人魚公主」，絕對不是因為我有公主病，而是因為我非常喜歡大海，夢想是希望可以去遍所有的海島國家旅遊。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 33, 'imgs/people/selfie65.JPG', 'imgs/people/selfie66.JPG', 'imgs/people/selfie67.JPG', '2022-05-29 16:18:57', 'manual', NULL, NULL),
(4, 'mock-id-20220527-003', '煞氣a米奇', 1, '1980-09-15', 6, 1, 33, '我的外號是「米奇」，只因為換了去迪士尼戴米老鼠帽子的大頭貼，辦公室同事就幫我取了這個外號，希望可以找到願意讓我帶妳去迪士尼玩的米妮。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 33, 'imgs/people/selfie69.JPG', 'imgs/people/selfie70.JPG', 'imgs/people/selfie71.JPG', '2022-05-29 16:18:57', 'manual', NULL, NULL),
(5, 'mock-id-20220527-004', '小栗子', 0, '1988-03-14', 7, 0, 11, '希望在有生之年能夠登上馬丘比丘、遊歷波羅的海三小國、逛遍歐洲耶誕市集，歡迎愛冒險的你跟我一起征服世界XD', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 32, 'imgs/people/selfie72.JPG', 'imgs/people/selfie73.JPG', 'imgs/people/selfie74.JPG', '2022-05-29 11:00:34', 'manual', NULL, NULL),
(6, 'mock-id-20220527-005', 'MySQL之神', 1, '1985-12-30', 1, 2, 58, '我是桃園人,北漂到台北,在科技業打拼,目標是成為頂尖\n的軟體工程師。朋友都說我很樂觀,遇到困難也能處之\n泰然,特異功能是,把大家逗得很開心;每天再忙都會\n去健身房運動,滿有恆毅力的,周末常和朋友去郊外踏\n青,特別愛山上的景色和登高望遠的感覺;我欣賞開朗\n敞開的女生,可以一起大笑,也可以分享內心的感受。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/selfie75.JPG', 'imgs/people/selfie76.JPG', 'imgs/people/selfie77.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL),
(7, 'mock-id-20220527-006', '那個女生KK', 1, '1985-12-30', 5, 2, 58, '我是一個對婚姻很有嚮往的人，未來希望可以跟我愛的人一起「一屋、二人、三餐、四季」。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/selfie61.JPG', 'imgs/people/selfie60.JPG', 'imgs/people/selfie62.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL),
(8, 'mock-id-20220527-007', '阿扁elephant多錢', 1, '1980-09-15', 6, 1, 33, '我是個吃貨，住在中和，喜歡到樂華夜市吃小吃，目標是兩年內把夜市裡所有攤位都吃一遍！歡迎住在中和的貪吃鬼跟我一起挑戰！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 33, 'imgs/people/selfie80.JPG', 'imgs/people/selfie81.JPG', 'imgs/people/selfie82.JPG', '2022-05-29 16:18:57', 'manual', NULL, NULL),
(9, 'mock-id-20220527-008', '徐巧星', 0, '1988-03-14', 7, 0, 11, '大家好,我很內向但我會努力不讓妳尷尬！我很喜歡做菜,不嫌棄的話我可以每天做菜給妳吃唷！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 32, 'imgs/people/selfie85.JPG', 'imgs/people/selfie86.JPG', 'imgs/people/selfie87.JPG', '2022-05-29 11:00:34', 'manual', NULL, NULL),
(10, 'mock-id-20220527-009', '豆芽菜', 1, '1985-12-30', 1, 2, 58, '我是個很有事業心的人，所以就算未來有小孩，也不希望辭職，如果你想找一個家庭主婦，請跳過我！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/selfie88.JPG', 'imgs/people/selfie89.JPG', 'imgs/people/selfie90.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `personal_preference`
--

CREATE TABLE `personal_preference` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `DoAtHome` tinyint(4) DEFAULT NULL COMMENT '宅在家最喜歡做什麼(0:sleep;1:gaming;2:cooking)',
  `Sport` tinyint(4) DEFAULT NULL COMMENT '最喜歡的運動(0:swimming;1:jogging;2:bouldering)',
  `MealType` tinyint(4) DEFAULT NULL COMMENT '吃飯喜好(0:none;1:chinese;2:American)',
  `PutinOrKim` tinyint(4) DEFAULT NULL COMMENT '普丁，金正恩，都幾(0:swimming;1:jogging;2:bouldering)',
  `CatOrDog` tinyint(4) DEFAULT NULL COMMENT '貓卯或狗勾(0:swimming;1:jogging;2:bouldering)',
  `LongShort` tinyint(4) DEFAULT NULL,
  `SM` tinyint(4) DEFAULT NULL COMMENT 'S or M(0:none;1:s;2:m)',
  `Kinky` tinyint(4) DEFAULT NULL COMMENT '皮鞭，手銬或是羽毛(0:皮鞭;1:手銬;2:羽毛)',
  `Smoking` tinyint(4) DEFAULT NULL COMMENT '抽菸習慣(0:none;1:heavy;2:seldom)',
  `FilmGenre` tinyint(4) DEFAULT NULL COMMENT '喜歡的電影類型(0:horror;1:jogging;2:bouldering)',
  `SugarInBeverage` tinyint(4) DEFAULT NULL COMMENT '手搖飲是否要加糖(0:none;1:full;2:half)',
  `DayOrNight` tinyint(4) DEFAULT NULL COMMENT '習慣在夜晚或白天活動(0:none;1:night;2:day)',
  `Hobby1` tinyint(4) DEFAULT NULL,
  `Hobby2` tinyint(4) DEFAULT NULL,
  `Hobby3` tinyint(4) DEFAULT NULL,
  `Hobby4` tinyint(4) DEFAULT NULL,
  `Hobby5` tinyint(4) DEFAULT NULL,
  `Meals1` tinyint(4) DEFAULT NULL,
  `Meals2` tinyint(4) DEFAULT NULL,
  `Meals3` tinyint(4) DEFAULT NULL,
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶個人偏好';

--
-- 傾印資料表的資料 `personal_preference`
--

INSERT INTO `personal_preference` (`SID`, `AccountID`, `DoAtHome`, `Sport`, `MealType`, `PutinOrKim`, `CatOrDog`, `LongShort`, `SM`, `Kinky`, `Smoking`, `FilmGenre`, `SugarInBeverage`, `DayOrNight`, `Hobby1`, `Hobby2`, `Hobby3`, `Hobby4`, `Hobby5`, `Meals1`, `Meals2`, `Meals3`, `CreateTime`, `CreateBy`, `UpdateTime`, `UpdateBy`) VALUES
(1, 'mock-id-20220527', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 1, 2, 3, '2022-05-29 12:08:18', 'manual', NULL, NULL),
(3, 'mock-id-20220527-001', 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 5, 6, 7, 8, 9, 6, 9, 7, '2022-05-29 12:10:49', 'manual', NULL, NULL),
(4, 'mock-id-20220527-002', 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 10, 11, 12, 13, 14, 4, 8, 5, '2022-05-29 16:20:10', 'manual', NULL, NULL),
(5, 'mock-id-20220527-003', 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 10, 11, 12, 13, 14, 4, 8, 5, '2022-05-29 16:20:10', 'manual', NULL, NULL),
(6, 'mock-id-20220527-004', 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 5, 6, 7, 8, 9, 6, 9, 7, '2022-05-29 12:10:49', 'manual', NULL, NULL),
(7, 'mock-id-20220527-005', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 1, 2, 3, '2022-05-29 12:08:18', 'manual', NULL, NULL),
(8, 'mock-id-20220527-006', 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 16, 17, 18, 19, 20, 6, 9, 7, '2022-05-29 12:10:49', 'manual', NULL, NULL),
(9, 'mock-id-20220527-007', 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 10, 11, 12, 13, 14, 4, 8, 5, '2022-05-29 16:20:10', 'manual', NULL, NULL),
(10, 'mock-id-20220527-008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 1, 2, 3, '2022-05-29 12:08:18', 'manual', NULL, NULL),
(11, 'mock-id-20220527-009', 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 10, 11, 12, 13, 14, 4, 8, 5, '2022-05-29 16:20:10', 'manual', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `ID` varchar(255) NOT NULL COMMENT '識別值',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:unavailable;1:available;2:soldout)',
  `Limit` int(11) DEFAULT NULL COMMENT '數量(NULL:無限制)',
  `Name` varchar(255) DEFAULT NULL COMMENT '商品名稱',
  `Description` varchar(255) DEFAULT NULL COMMENT '商品描述',
  `UnitPrice` varchar(255) DEFAULT NULL COMMENT '單價',
  `ImageID` varchar(255) DEFAULT NULL COMMENT '圖片',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='商品管理';

-- --------------------------------------------------------

--
-- 資料表結構 `subscription`
--

CREATE TABLE `subscription` (
  `SID` int(11) NOT NULL COMMENT '流水號',
  `AccountID` varchar(255) NOT NULL COMMENT 'FK: account.ID',
  `Status` tinyint(4) DEFAULT NULL COMMENT '狀態(0:inactive;1:active;2:)',
  `Cycle` tinyint(4) DEFAULT NULL COMMENT '0:月訂閱;1:年訂閱',
  `ProductID` varchar(255) NOT NULL COMMENT 'FK: product.ID',
  `CreateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `CreateBy` varchar(255) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  `UpdateBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='帳戶方案訂閱管理';

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `account_detail`
--
ALTER TABLE `account_detail`
  ADD PRIMARY KEY (`AccountID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`SID`);

--
-- 資料表索引 `dating`
--
ALTER TABLE `dating`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `error_log`
--
ALTER TABLE `error_log`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `meetup`
--
ALTER TABLE `meetup`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `payment_methed`
--
ALTER TABLE `payment_methed`
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`AccountID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 資料表索引 `personal_preference`
--
ALTER TABLE `personal_preference`
  ADD PRIMARY KEY (`AccountID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account_detail`
--
ALTER TABLE `account_detail`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `dating`
--
ALTER TABLE `dating`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `error_log`
--
ALTER TABLE `error_log`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `meetup`
--
ALTER TABLE `meetup`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order`
--
ALTER TABLE `order`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `payment_methed`
--
ALTER TABLE `payment_methed`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_preference`
--
ALTER TABLE `personal_preference`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=12;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `personal_preference`
--
ALTER TABLE `personal_preference`
  ADD CONSTRAINT `personal_preference_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
