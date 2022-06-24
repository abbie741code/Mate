-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 02 日 19:47
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
(2, 'mock-id-20220527-001', '天母彭于晏', 1, '1988-03-14', 1, 2, 99, '朋友們叫我「天母彭于晏」，因為我對健身重訓很有愛，身材也練得還可以，但如果你也喜歡運動，我們可以一起去健身房，不會的器材我也可以教妳！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 32, 'imgs/people/selfie43.JPG', 'imgs/people/selfie43-1.JPG', 'imgs/people/selfie43-2.JPG', '2022-05-29 11:00:34', 'manual', NULL, NULL),
(3, 'mock-id-20220527-002', '人魚公主', 0, '1980-09-15', 6, 3, 88, '我的綽號是「人魚公主」，絕對不是因為我有公主病，而是因為我非常喜歡大海，夢想是希望可以去遍所有的海島國家旅遊。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 33, 'imgs/people/selfie65.JPG', 'imgs/people/selfie66.JPG', 'imgs/people/selfie67.JPG', '2022-05-29 16:18:57', 'manual', NULL, NULL),
(4, 'mock-id-20220527-003', '煞氣a米奇', 1, '1980-09-15', 6, 1, 33, '我的外號是「米奇」，只因為換了去迪士尼戴米老鼠帽子的大頭貼，辦公室同事就幫我取了這個外號，希望可以找到願意讓我帶妳去迪士尼玩的米妮。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 33, 'imgs/people/selfie69.JPG', 'imgs/people/selfie70.JPG', 'imgs/people/selfie71.JPG', '2022-05-29 16:18:57', 'manual', NULL, NULL),
(5, 'mock-id-20220527-004', 'Ted', 0, '1988-03-14', 7, 0, 11, '希望在有生之年能夠登上馬丘比丘、遊歷波羅的海三小國、逛遍歐洲耶誕市集，歡迎愛冒險的你跟我一起征服世界XD', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 32, 'imgs/people/selfie72.JPG', 'imgs/people/selfie73.JPG', 'imgs/people/selfie74.JPG', '2022-05-29 11:00:34', 'manual', NULL, NULL),
(6, 'mock-id-20220527-005', 'MySQL之神', 1, '1985-12-30', 1, 2, 58, '我是桃園人,北漂到台北,在科技業打拼,目標是成為頂尖\n的軟體工程師。朋友都說我很樂觀,遇到困難也能處之\n泰然,特異功能是,把大家逗得很開心;每天再忙都會\n去健身房運動,滿有恆毅力的,周末常和朋友去郊外踏\n青,特別愛山上的景色和登高望遠的感覺;我欣賞開朗\n敞開的女生,可以一起大笑,也可以分享內心的感受。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/selfie75.JPG', 'imgs/people/selfie76.JPG', 'imgs/people/selfie77.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL),
(7, 'mock-id-20220527-006', '賈桂琳', 1, '1985-12-30', 1, 2, 58, '我是一個對婚姻很有嚮往的人，未來希望可以跟我愛的人一起「一屋、二人、三餐、四季」。', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/selfie60.JPG', 'imgs/people/selfie61.JPG', 'imgs/people/selfie62.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL),
(8, 'mock-id-20220527-007', '阿扁elephant多錢', 1, '1980-09-15', 6, 1, 33, '我是個吃貨，住在中和，喜歡到樂華夜市吃小吃，目標是兩年內把夜市裡所有攤位都吃一遍！歡迎住在中和的貪吃鬼跟我一起挑戰！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 33, 'imgs/people/selfie80.JPG', 'imgs/people/selfie81.JPG', 'imgs/people/selfie82.JPG', '2022-05-29 16:18:57', 'manual', NULL, NULL),
(9, 'mock-id-20220527-008', '徐巧星', 0, '1988-03-14', 7, 0, 11, '大家好,我很內向但我會努力不讓妳尷尬！我很喜歡做菜,不嫌棄的話我可以每天做菜給妳吃唷！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 32, 'imgs/people/selfie85.JPG', 'imgs/people/selfie86.JPG', 'imgs/people/selfie87.JPG', '2022-05-29 11:00:34', 'manual', NULL, NULL),
(10, 'mock-id-20220527-009', '豆芽菜', 1, '1985-12-30', 1, 2, 58, '我是個很有事業心的人，所以就算未來有小孩，也不希望辭職，如果你想找一個家庭主婦，請跳過我！', '[{\"pic1\": \"imgs/michael-burry.png\", \"pic2\": \"imgs/michael-burry.png\",\"pic3\": \"imgs/michael-burry.png\",\"pic4\": \"imgs/michael-burry.png\",\"pic5\": \"imgs/michael-burry.png\"}]', 31, 'imgs/people/selfie88.JPG', 'imgs/people/selfie89.JPG', 'imgs/people/selfie90.JPG', '2022-05-29 10:57:49', 'manual', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`AccountID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
