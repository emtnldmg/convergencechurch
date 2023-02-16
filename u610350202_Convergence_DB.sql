-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2022 at 07:45 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u610350202_Convergence_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `id` int(11) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `PhoneNum` int(12) NOT NULL,
  `email` varchar(250) NOT NULL,
  `appointment` varchar(250) NOT NULL,
  `RequestDateTime` datetime NOT NULL,
  `AlterRequestDateTime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `lname`, `fname`, `mname`, `PhoneNum`, `email`, `appointment`, `RequestDateTime`, `AlterRequestDateTime`, `status`) VALUES
(1, 'Villota', 'RJ', 'A', 2147483647, 'Pulo 2', 'Wedding', '2022-02-08 15:27:00', '2022-02-08 15:27:00', 0),
(2, 'Villota', 'RJ', 'A', 2147483647, 'Pulo 2', 'Wedding', '2022-02-08 15:28:00', '2022-02-08 15:28:00', 0),
(3, 'rjvillota1645@gmail.com', 'adasda', '', 2147483647, 'rjvillota1645@gmail.com', 'Baptism', '2022-02-08 15:28:00', '2022-02-08 15:29:00', 0),
(4, 'rjvillota1645@gmail.com', 'adasda', '', 2147483647, 'rjvillota1645@gmail.com', 'Baptism', '2022-02-08 15:29:00', '2022-02-08 15:29:00', 0),
(5, 'rjvillota1645@gmail.com', 'adasda', '', 2147483647, 'rjvillota1645@gmail.com', 'Baptism', '2022-02-08 15:30:00', '2022-02-08 15:30:00', 0),
(6, 'rjvillota1645@gmail.com', 'adasda', '', 2147483647, 'rjvillota1645@gmail.com', 'Baptism', '2022-02-08 15:31:00', '2022-02-08 15:31:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `month` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `aimage` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `month`, `title`, `descrip`, `aimage`, `link`) VALUES
(10, 'january', 'Prayer Power', 'January 2, 2021', 'ppower.jpg', 'https://www.facebook.com/convergencechurchph/videos/1034542247044003/'),
(11, 'january', 'Sunday Service', 'January 3, 2021', 'sunday1.jpg', 'https://www.facebook.com/convergencechurchph/videos/251435876498784/'),
(12, 'january', 'Prayer power', 'January 9, 2021', 'MA-PPOWER-JANTOMAY1.jpg', 'https://www.facebook.com/convergencechurchph/videos/420223342555306/'),
(13, 'january', 'Sunday Service', 'January 10, 2021', 'sunday2.jpg', 'https://www.facebook.com/convergencechurchph/videos/430570731403054/'),
(14, 'january', 'midweek service', 'January 13, 2021', 'midweek.jpg', 'https://www.facebook.com/convergencechurchph/videos/1555522237970453/'),
(15, 'january', 'Prayer power', 'January 15, 2021', 'MA-PPOWER-JANTOMAY2.jpg', 'https://www.facebook.com/convergencechurchph/videos/904185506785801/'),
(16, 'january', 'Sunday Service', 'January 17, 2021', 'sunday3.jpg', 'https://www.facebook.com/convergencechurchph/videos/205837551187182/'),
(17, 'january', 'midweek service', 'January 20, 2021', 'midweek1.jpg', 'https://www.facebook.com/convergencechurchph/videos/850285595790839/'),
(18, 'january', 'Prayer power', 'January 23, 2021', 'MA-PPOWER-JANTOMAY3.jpg', 'https://www.facebook.com/convergencechurchph/videos/4256295377719828/'),
(19, 'january', 'Sunday Service', 'January 24, 2021', 'sunday4.jpg', 'https://www.facebook.com/convergencechurchph/videos/316289193136189/'),
(20, 'january', 'midweek service', 'January 27, 2021', 'midweek2.jpg', 'https://www.facebook.com/convergencechurchph/videos/411932953216976/'),
(21, 'january', 'Prayer power', 'January 30, 2021', 'MA-PPOWER-JANTOMAY4.jpg', 'https://www.facebook.com/convergencechurchph/videos/4061809053853361/'),
(22, 'january', 'Sunday Service', 'January 31, 2021', 'sunday5.jpg', 'https://www.facebook.com/convergencechurchph/videos/237939497799121/');

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `id` int(11) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phoneNum` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `interest` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `dcreated` datetime NOT NULL DEFAULT current_timestamp(),
  `daccepted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`id`, `lname`, `fname`, `mname`, `address`, `phoneNum`, `email`, `interest`, `status`, `dcreated`, `daccepted`) VALUES
(2, 'try', 'try', 't', 'Pulo 2 dalahican Cavite City', '', 'rjvillota1645@gmail.com', 'Ministries', -1, '2021-10-13 14:28:14', '2022-01-06 13:00:52'),
(3, ' ', ' ', ' ', ' ', '', 'convergencechurchbacoor@gmail.com', ' ', -3, '2021-10-13 15:34:59', '2022-01-06 13:17:04'),
(5, 'Aquino', 'Jimwell', 'G', 'Zeus', '092222212121', 'jim@gmail.com', 'Life Groups', 1, '2021-10-14 11:59:01', '2021-10-14 04:01:01'),
(6, 'Villota', 'RJ', 'A', 'Pulo 2 dalahican Cavite City', '09260245884', 'rjvillota1645@gmail.com', 'Life Group Alpha', 1, '2021-11-03 16:19:16', '2021-11-03 08:19:49'),
(7, 'virata', 'arvin', 't', 'jan sa bacoor', '092222212121', 'virata_arvin@yahoo.com', 'Ministry Worship', -1, '2021-12-21 08:50:43', '2022-01-02 20:17:01'),
(8, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', 'Life Group Alpha', -1, '2021-12-28 08:51:34', '2022-01-02 20:27:56'),
(9, 'Villota', 'Rj', 'A', 'Pulo 2 dalahican Cavite City', '09260245884', 'rjvillota1645@gmail.com', 'Ministry Marshal', 2, '2022-01-02 15:30:14', '2022-01-06 13:05:36'),
(10, 'jimwellaquino987@gmail.com', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', 'Life Group Mile', 0, '2022-01-02 20:09:45', '2022-01-02 20:09:45'),
(11, 'Villota', 'RJ', 'A', 'Pulo 2 dalahican Cavite City', '09260245884', 'rjvillota1645@gmail.com', 'Life Group Alpha', 1, '2022-01-13 03:32:19', '2022-01-13 03:39:23'),
(12, 'Villota', 'RJ', 'A', 'Pulo 2 dalahican Cavite City', '09260245884', 'rjvillota1645@gmail.com', 'Ministry Sunflower', -1, '2022-01-13 03:44:08', '2022-01-13 03:44:24'),
(13, 'Quimpo', 'Hans Anthony ', 'L', 'Kawit Cavite', '09475020823', 'hansquimpo14@gmail.com', 'Ministry Worship', 0, '2022-01-14 01:12:06', '2022-01-14 01:12:06'),
(14, 'yownissss@gmail.com', 'Eunice Jem', 'M', '256-B Gumamela Street VFL subdivision san rafael 3 noveleta cavite', '09973572932', 'yownissss@gmail.com', 'Life Group Alpha', 1, '2022-01-14 01:18:56', '2022-01-14 01:22:05'),
(15, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok, Kanluran-Binakayan ZeusCrossing-GamatPhotography)', '09452606162', 'jimwellaquino987@gmail.com', 'Life Group Alpha', 0, '2022-01-14 02:03:00', '2022-01-14 02:03:00'),
(16, 'cgraceruth77@gmail.com', 'GRACE RUTH', 'TAGLE', 'GARNET', '09656838903', 'cgraceruth77@gmail.com', 'Life Group Alpha', 0, '2022-01-14 03:34:33', '2022-01-14 03:34:33'),
(17, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'cjaquino987@gmail.com', 'Ministry Dance', 1, '2022-01-14 04:12:49', '2022-01-14 04:13:57'),
(18, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', 'Life Group Beta', 0, '2022-01-14 08:48:15', '2022-01-14 08:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `ptitle` varchar(250) NOT NULL,
  `pphoto` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `descrip` longtext NOT NULL,
  `sectionID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `pname`, `ptitle`, `pphoto`, `link`, `descrip`, `sectionID`) VALUES
(6, '1.1Section', 'JOIN <r>US</r>', 'side worship.jpg', 'login.php', '', ''),
(7, '1.3Section', '<r>MESSAGE OF THE</r> SENIOR PASTORS', '122671877_3568175086559712_2688488208380150437_n.jpg', '', '', ''),
(8, '1.2Section', ' ', '7.jpg', 'alpha.php#home', '', 'lgalpha'),
(12, '2.2Section', ' physical service', '141672257_3804032699640615_2252904377323259725_n.jpg', '', '', ''),
(15, '5.1Section', 'give online', 'bilog4.png', 'gcash.php#gcash', '', ''),
(16, '5.2Section', 'give', 'mail.png', '', '', ''),
(17, '5.3Section', '5.3', 'bilog5.png', '', '', ''),
(18, '4.4Section', 'community', 'group of people.jpg', '', '', ''),
(19, 'Pastor', 'Bishop Alex Gramaje', 'IMG_20220103_190215.jpg', 'Senior Pastor', 'Senior Pastor', ''),
(20, 'Pastor', 'Rev. Edna Gramaje', 'edna.jpg', 'Associate Senior Pastor', '', ''),
(21, 'Pastor', 'Ps. Daniel Gramaje', 'IMG_20220103_192123.jpg', 'Youth Pastor', '', ''),
(22, '3.5.1Section', 'convergencechurchbacoor@gmail.com<br>convergencechurchbacoor@cicfmain.com', 'bilog1.png', '', '', ''),
(23, '3.5.1Section', 'Facebook: @convergencechurchph<br>Twitter: @convergencechurch<br>Instagram: @convergencechurchph', 'bilog2.png', '', '', ''),
(24, '3.5.1Section', '(046) 519-8413<br> 0917-888-7310', 'bilog3.png', '', '', ''),
(25, '1.2Section', ' ', '8.jpg', 'beta.php#home', '', 'lgbeta'),
(26, '1.2Section', ' ', 'child.jpg', 'children.php#home', '', 'lgchildren'),
(27, '1.2Section', ' ', 'asfdgghfhjgf.jpg', 'men.php#home', '', 'lgmen'),
(28, '1.2Section', ' ', 'ghfjgv.jpg', 'women.php#home', '', 'lgwomen'),
(29, '1.2Section', ' ', 'kjjhj.jpg', 'mile.php#home', '', 'lgmile'),
(30, '2.1Section', '  JOIN US SUNDAY AS<br>WE GATHER <r>ONLINE</r>', 'front worship.jpg', '', '', ''),
(31, '2.4Section', ' New Year Service', '1.jpg', '', '', ''),
(32, '2.4Section', ' Love Month', '2.jpg', '', '', ''),
(33, '3.1.1Section', ' ', 'dance.jpg', 'dance.php#home', '', ''),
(34, '3.1.1Section', ' ', 'iuiii.jpg', 'marshall.php#home', '', ''),
(35, '3.1.1Section', ' ', 'gvccvbcvb.jpg', 'prayer.php#home', '', ''),
(36, '3.1.1Section', ' ', 'fdhl.jpg', 'sunflower.php#home', '', ''),
(37, '3.1.1Section', ' ', 'ush.jpg', 'usher.php#home', '', ''),
(38, '3.1.1Section', ' ', 'worsh.jpg', 'worship.php#home', '', ''),
(40, '3.3Section', 'unite', 'holy crosss.jpg', '', '', ''),
(41, '3.4Section', 'join alpha', 'go in peace.jpg', '', '', ''),
(42, '4.2Section', ' ', 'stage.jpg', '', '', ''),
(43, 'PrivacyPolicySection', 'Privacy Policy', 'privacy.jpg', '', '', ''),
(45, 'information', 'beta', 'beta.jpg', 'Connect.php#interest', 'The Beta Course is the next great thing after the Alpha Course. It is a one year discipleship course, which is programmed for those who would like to pursue an intensive discipleship program that would prepare them for leadership roles. It covers a whole range of the basic tenets of the Christian faith to make every prospective leader prepared for the use of our Master.', 'lgbeta'),
(46, 'information', 'mile', 'mile.jpg', 'Connect.php#interest', 'Ministry Innovative Learning Environment (MILE) is created to help church leaders overcome these barriers to training and make it easier than ever to start training our volunteers. We want to equip church leaders in their work of equipping the saints for the work of ministry.', 'lgmile'),
(47, 'information', 'children', 'children.jpg', 'Connect.php#interest', 'This group for youngsters contributes to the biological growth of the church by teaching children about their Savior. It provides them with information and experiences that will help them learn about and respond to Jesus. The existence of a ministry for children validates the value of them inside the church.', 'lgchildren'),
(48, 'information', 'men', 'men.jpg', 'Connect.php#interest', 'Men wield the most power in their homes, communities, companies, and churches. As a result, Life Group for Men attempts to train men to be godly leaders in all aspects of life. Men who are R.E.A.L., who reject passivity, expect a bigger reward, rewards of God, accept responsibility, and lead boldly to the glory of God will have best in their lives.', 'lgmen'),
(49, 'information', 'women', 'women.jpg', 'Connect.php#interest', 'Life Group for Women provides an excellent chance for you to connect with other ladies in our church community. We admit to being flawed, Jesus-loving, honest women who want to walk beside you on this exciting, but often tough, journey of faith. You will find a warm environment where ladies accept Jesus as Lord, friendships are formed, and laughing is contagious.', 'lgwomen'),
(50, 'information', 'usher', 'ministry-usherr.jpg', 'Connect.php#interest', 'Ushers assist those in attendance at theaters and stadiums for entertainment and athletic events. Checking everything, directing guests to their allotted seats, distributing programs, answering questions, and assisting people in finding facilities and refreshments are all part of their ministry', 'mnusher'),
(51, 'information', 'worship', 'ministry-worshipp.jpg', 'Connect.php#interest', 'The goal of the Worship Ministry is to lead and assist the congregation in structured corporate worship during church services and other events, and to encourage them towards and model for them a lifestyle of sincere worship that is consistent every day of the week.', 'mnworship'),
(52, 'information', 'dance', 'ministry-dancee.jpg', 'Connect.php#interest', 'Through movement, the dance ministry aims to portray the majesty, power, splendor, and wonder of the Scriptures. We strengthen the believer in his relationship with the Lord and pull the unbelieving to Him in this way. We begin by affirming our affection for God and for one another.', 'mndance'),
(53, 'information', 'marshall', 'ministry-marshalll.jpg', 'Connect.php#interest', 'The Marshal Ministry is made of of individuals who safeguard the security, safety, and orderliness of the church both within and without. They are in responsibility of the security of those attending services, the safety of their goods, as well as the orderliness and crowd control within the church as more and more people come to know the Lord on a weekly basis. Men are specifically picked for this ministry to demonstrate authority and to reinforce security in the surrounding area.', 'mnmarshal'),
(54, 'information', 'prayer', 'ministry-prayerr.jpg', 'Connect.php#interest', 'Prayer is powerful tool for Christian Life. It strenghtens faith of each and everyone. This ministry prays for every pastors and members, upcoming activities, spiritual growth, battles and heart desires. One to two gathered in His name, God hears cry of His people!', 'mnprayer'),
(55, 'information', 'sunflower', 'ministry-sunflowerr.jpg', 'Connect.php#interest', 'Women are born to be leaders.  As leaders, we need to connect to the epitome of being leader- Jesus. This group consist of women who seeks God in every aspect of their life and encourages each one.', 'mnsunflower'),
(56, '4.1Section', 'invlove', '23.jpg', '', 'Find a small group that <br>matches your life point.', ''),
(57, '4.1Section', ' ', '24.jpg', '', 'The best place to start? Join us for a worship service', ''),
(58, '4.1Section', ' ', '25.jpg', '', 'Get to know us more! We share to you who we are and what we believe.', ''),
(61, 'gcash', 'Step 1', 'open.png', '', 'Open your GCash Applicash on your mobile phone.', ''),
(62, 'gcash', 'Step 2', 'scan2.png', '', '<br>Look for Scan QR Code', ''),
(63, 'gcash', 'Step 3', 'send2.png', '', '<br>Scan the QR Code above', ''),
(64, 'gcash', 'Step 4', 'pay2.png', '', '<br>Click Send<br>', ''),
(65, 'gcashqr', 'through <r>gcash</r>', 'convergenceqr (2).png', '', '', ''),
(66, 'information', 'alpha', '119980722_3469888113055077_3041073290124051262_n.jpg', 'Connect.php#interest', 'Alpha is a series of sessions offering the opportunity to explore the Christian faith. It is run in cafes, churches, offices, universities, and homes all around the globe, and everyone is welcome. They have three key things in common: FOOD, a TALK (video sessions), and GOOD CONVERSATIONS', 'alphalg'),
(67, '2.4Section', 'Youth Month', '3.jpg', '', '', ''),
(68, '2.4Section', 'Holy Week Special', '4.jpg', '', '', ''),
(69, '2.4Section', 'Labor Day', '5.jpg', '', '', ''),
(70, '2.4Section', 'Independence Day', '6.jpg', '', '', ''),
(72, 'TermsAndAgreements', ' ', 'termsand.jpg', '', ' ', ''),
(73, 'Pastor', 'Ps. Peter Gramaje', 'IMG_20220104_225941.jpg', 'Youth Pastor', 'as', ''),
(74, 'Pastor', 'Rev. Jojo Gramaje', 'pastorjojo.jpg', 'Beta Director', '', ''),
(75, 'Pastor', ' Ps. Oxy Benedicto', 'IMG_20220104_225510.jpg', 'Pastor-KAWIT 1', '', ''),
(76, 'Pastor', 'Rev. Leah Cardino', 'IMG_20220104_225829.jpg', 'Pastor-KAWIT 2', '', ''),
(77, 'Pastor', 'Rev. Lito Nicodemus', 'lito.jpg', 'Pastor-ALFONSO', '', ''),
(78, 'Pastor', ' Rev. Tino Olores', 'tino.jpg', 'Pastor-BATANGAS', '', ''),
(79, 'Pastor', ' Rev. Ronnie Albaladejo', 'ronnie.jpg', 'Pastor-NOVALICHES', '', ''),
(80, 'metrobank', 'through <r>metrobank</r>', '1799112.png', '', '<r>Account no:</r> 195 3 195 243973', ''),
(81, '4.7Section', 'church campus', 'campuses1.jpg', '', '', ''),
(82, 'Pastor', 'Rev. Rey Mark Quinilitan', 'rey mark.jpg', 'Pastor-MOLINO', '', ''),
(83, 'Pastor', 'Rev. Goodie Banez', 'goodie.jpg', 'Pastor-IMUS', '', ''),
(84, 'Pastor', 'Ps. Edgar Gutierrez', 'edgar.jpg', 'Pastor-PAMPANGA', '', ''),
(85, 'Pastor', 'Rev. Victoria Santos', 'victoria.jpg', 'Pastor-CABANATUAN', '', ''),
(86, 'Pastor', 'Ps. Francis de Aro', 'francis.jpg', 'Pastor-ALIAGA', '', ''),
(87, 'Pastor', 'Rev. Danny Munda', 'danny.jpg', 'Pastor-JAPAN', '', ''),
(88, 'Pastor', 'Ps. Roxanne Cardino', 'ate rox.jpg', 'Youth Pastor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `qsent` timestamp NOT NULL DEFAULT current_timestamp(),
  `respond` longtext NOT NULL,
  `qrecieved` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `email`, `message`, `status`, `qsent`, `respond`, `qrecieved`) VALUES
(4, 'rjvillota1645@gmail.com', 'pabile', -1, '2021-10-20 05:47:25', '', '2022-01-13 04:09:07'),
(5, 'rjvillota1645@gmail.com', 'ekoc omsim gimalam', -1, '2021-10-20 05:47:48', '', '2022-01-13 04:23:03'),
(20, 'rjvillota1645@gmail.com', 'hello??? its me', 1, '2021-11-02 14:05:10', 'ASDADA', '2021-11-02 14:22:58'),
(21, 'rjvillota1645@gmail.com', 'hello??? its me', 1, '2021-11-02 14:06:30', 'hi there', '2021-11-02 14:13:06'),
(23, 'rjvillota1645@gmail.com', 'ngayun po ay natapus kona ang website huhuhuhu', 1, '2021-11-03 07:57:20', 'ang galing', '2021-11-15 15:01:15'),
(28, 'rjvillota1645@gmail.com', '12:14', 1, '2021-11-19 04:14:35', '1:10 am 1/1/22', '2022-01-02 17:10:50'),
(34, 'rjvillota1645@gmail.com', 'try sa cicf hihi', 1, '2021-12-21 06:48:46', 'hala ', '2022-01-02 16:59:10'),
(43, 'rjvillota1645@gmail.com', 'thankyou Lord po God', 1, '2022-01-02 17:43:55', 'hi', '2022-01-14 09:16:53'),
(44, 'rjvillota1645@gmail.com', 'pwede po bang mag mag tanong', 1, '2022-01-07 02:05:14', 'yes ano yun ', '2022-01-07 02:16:45'),
(45, 'rjvillota1645@gmail.com', 'okay ka lang ??', 1, '2022-01-13 04:07:26', 'yes of course, you?\r\n', '2022-01-13 04:07:49'),
(46, 'hansquimpo14@gmail.com', 'Is this website only for the main church? ', 0, '2022-01-14 01:16:15', '', '2022-01-14 01:16:15'),
(47, 'jimwellaquino987@gmail.com', 'Hi', 0, '2022-01-14 02:20:34', '', '2022-01-14 02:20:34'),
(48, 'rafaelkennethcuasay20@gmail.com', 'Pwede magtanong?', 0, '2022-01-14 03:02:43', '', '2022-01-14 03:02:43'),
(49, 'cjaquino987@gmail.com', 'wala po', 1, '2022-01-14 04:13:05', 'good grape', '2022-01-14 04:14:27'),
(50, 'jimwellaquino987@gmail.com', 'tanong', 0, '2022-01-14 09:07:58', '', '2022-01-14 09:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `login` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`, `login`, `logout`, `image`) VALUES
(19, 'admin1', 'admin@admin.c', '123', 'admin', '2021-11-02 13:10:21', '2021-11-02 13:10:21', ''),
(22, 'jimwell', 'cincinati@gmail.com', '123', 'admin', '2021-11-02 13:10:21', '2021-11-02 13:10:21', ''),
(23, 'judeee', 'rjvillota1645@gmail.com', 'dreamteam', 'admin', '2022-01-14 01:28:09', '2022-01-13 07:09:47', '240388146_4280461605364088_3418148614474843142_n.jpg'),
(25, 'rjlang po', 'convergencechurchbacoor@gmail.com', '123qweqwe', 'admin', '2022-01-14 09:13:57', '2022-01-06 06:40:19', 'logo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `num` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `serTime` varchar(50) NOT NULL,
  `resNum` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `lname`, `fname`, `mname`, `address`, `num`, `email`, `serTime`, `resNum`, `status`, `date`) VALUES
(20, 'Doe', 'a', 'a', 'as', '223', 'rj.villota@cvsu.edu.ph', 'a', 1, 3, '2021-11-03 08:40:26'),
(25, 'Doe', 'rj', '', 'as', '11', 'convergencechurchbacoor@gmail.com', '7:00 - 10:00 am', 2, 3, '2022-01-02 19:08:24'),
(37, 'Villota', 'RJ', 'A', 'Pulo 2 dalahican Cavite City', '09164377751', 'convergencechurchbacoor@gmail.com', '3:00 - 5:00 pm', 4, 3, '2022-01-02 19:08:02'),
(40, 'virata', 'arvin', '', 'Pulo 2 dalahican Cavite City', '09164377751', 'virata_arvin@yahoo.com', '7:00 - 10:00 am', 5, -1, '2022-01-02 19:15:18'),
(42, 'Villota', 'RJ', 'A', 'Pulo 2', '90260245884', 'jmangtomas@gmail.com', '3:00 - 5:00 pm', 5, 1, '2022-01-02 19:16:37'),
(43, 'Villota', 'Rj', '', 'Pulo 2 dalahican Cavite City', '09260245884', 'rjvillota1645@gmail.com', '10:00 - 12:00 pm', 2, 1, '2022-01-02 19:17:13'),
(44, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 5, -1, '2022-01-02 19:32:57'),
(45, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 5, 3, '2022-01-02 19:15:21'),
(46, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 4, 1, '2022-01-02 22:06:58'),
(47, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 4, -1, '2022-01-06 13:06:06'),
(50, 'Quimpo', 'Hans Anthony', 'L', 'Kawit Cavite', '09475020823', 'hansquimpo14@gmail.com', '10:00 - 12:00 pm', 1, -1, '2022-01-14 01:16:27'),
(51, 'Villota', 'RJ', 'A', 'Pulo 2 dalahican Cavite City', '09260245884', 'rjvillota1645@gmail.com', '08:00 - 09:30 am', 1, 1, '2022-01-14 03:54:43'),
(55, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 1, -1, '2022-01-14 04:03:02'),
(56, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 1, 1, '2022-01-14 09:15:23'),
(57, 'Toledo', 'Carlo', 'B', '178 Batong Dalig, Kawit, Cavite', '09512208999', 'carlotoledo123@gmail.com', '10:00 - 12:00 pm', 1, 0, '2022-01-14 02:28:25'),
(58, 'Ocharan', 'Adrian', 'V.', '325 Medicion 2-C Imus Cavite', '09973550291', 'avochara@pcu.edu.ph', '10:00 - 12:00 pm', 1, 0, '2022-01-14 02:44:30'),
(59, 'Ocharan', 'Adrian', 'V.', '325 Medicion 2-C Imus Cavite', '09973550291', 'avochara@pcu.edu.ph', '10:00 - 12:00 pm', 1, 0, '2022-01-14 02:45:10'),
(60, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 1, 0, '2022-01-14 02:47:58'),
(61, 'Cuasay', 'Rafael', 'G', 'San Juan II Noveleta Cavite', '09999999999', 'rafaelkennethcuasay20@gmail.com', '08:00 - 09:30 am', 1, 1, '2022-01-14 03:00:14'),
(62, 'CARDINO', 'GRACE RUTH', 'TAGLE', 'GARNET', '09656838903', 'cgraceruth77@gmail.com', '08:00 - 09:30 am', 3, 0, '2022-01-14 03:32:40'),
(63, 'CARDINO', 'GRACE RUTH', 'TAGLE', 'GARNET', '09656838903', 'cgraceruth77@gmail.com', '08:00 - 09:30 am', 3, 0, '2022-01-14 03:33:29'),
(64, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'cjaquino987@gmail.com', '08:00 - 09:30 am', 1, 1, '2022-01-14 04:13:42'),
(65, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '08:00 - 09:30 am', 1, 0, '2022-01-14 08:44:13'),
(66, 'Aquino', 'Carlos Jimwell', 'G', '1728 Tulay Malamok', '09452606162', 'jimwellaquino987@gmail.com', '10:00 - 12:00 pm', 2, 0, '2022-01-14 08:45:42'),
(67, 'Ocharan', 'Adrian', 'V.', '325 Medicion 2-C Imus Cavite', '09973550291', 'avochara@pcu.edu.ph', '10:00 - 12:00 pm', 1, 0, '2022-01-14 09:45:00'),
(68, 'Ocharan', 'Adrian', 'V.', '325 Medicion 2-C Imus Cavite', '09973550291', 'avochara@pcu.edu.ph', '10:00 - 12:00 pm', 1, 0, '2022-01-15 06:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `stitle` varchar(250) NOT NULL,
  `sdescrip` longtext NOT NULL,
  `secbtn1` varchar(250) NOT NULL,
  `secbtn2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `sname`, `stitle`, `sdescrip`, `secbtn1`, `secbtn2`) VALUES
(1, '2.1Section', ' JOIN US SUNDAY AS<br>WE GATHER <r>ONLINE</r>', 'You can join us in our Sunday service with just a few clicks of your mouse, no matter where you are or where you have been.', ' https://fb.watch/agYxcELKvr/', ' https://fb.watch/agYxcELKvr/'),
(2, '2.2Section', 'ATTEND THE<BR><R>PHYSICAL SERVICE</R>', 'Worship is for everyone who yearns for God-believers and seekers alike.\r\n<br><br>\r\nWorship is about worshiping and worshipping our Lord and Savior. It is a moment when we unite to feel the presence of the Holy Spirit and share our delight and thankfulness. The power of the message of God reaches out to the suffering and gives hope to the hopeless. We invite you to celebrate the good news in Jesus Christ, whether you choose traditional or contemporary worship.', 'Reservation.php#home', ' '),
(7, '1.1Section', ' <r>JOIN US</r> FOR A WORSHIP SERVICE', 'If you are new here, new to church, or simply looking for a fresh start, our Sunday morning worship services provide an opportunity to strengthen your faith in God and meet new people. By reserving your spot, you will be able to join us in our limited physical service.<br><br>Still afraid of COVID-19 and hesitant to attend a mass gathering? You can also watch online as we extend the goodness of our Father through your devices so that you can continue to feel His wonderful grace.', 'https://fb.watch/agYxcELKvr/', 'ChurchEvents.php#reserve'),
(8, '1.2Section', 'CONNECT .<r>GROW.</r> SERVE.', 'Our church believes in the power of being one together because we believe that we are not meant to do life alone.<br>No matter what you are facing today, we are here for you.<br><br> We have small groups that we would love for you to join. These provide opportunities to form strong communities<br>with people who are in similar stages of life.So, let us get together!', 'login.php', 'login.php'),
(9, '1.3Section', 'MESSAGE FROM THE <r>SENIOR PASTORS</r>', 'The heartbeat of our church has always been to bring people back to God and create momentum for people to encounter God’s love, mercy and power. We pray that as we journey together in this season as His church, our faith will become unshakeable and firm in His word, and more so we will have a spirit that longs to seek more to Him and a heart that cries out for souls to be added to God’s kingdom.<br> <br>People of God, it is about time to receive your portion and fulfill God’s purposes and calling. Your season of divine acceleration has come. Believe and receive it in Jesus Name, Amen!', 'About.php', ''),
(10, '1.4Section', 'TRY <r> ALPHA</r>', ' ', 'alpha.php#home', ' '),
(11, '2.3Section', 'MEDIA <r>ARCHIVE</r>', ' ', 'videosection.php', ' '),
(12, '2.4Section', '<r>UPCOMING</r> EVENTS', 'Hello, Church! We have more events planned for you that you should not miss.', '', ''),
(13, '2.5Section', 'Title', '\r\n', '', ''),
(16, '3.1Section', 'JOIN OUR <r>MINISTRIES</r>', 'Ministry is not just sitting all day in prayer or reading your Bible, this job takes work. <br> You have to get out and talk to people; you need to feed your own spirit; <br> you minister to others, help out in communities, and more. ', '', ''),
(17, '3.2Section', 'JOIN OUR <r>LIFE GROUP</r>', 'Becoming a church member entails deliberately giving up the comfort of individualism and <br> allowing yourself to be connected to others. It is a lovely depiction of the Gospel. And we do so because <br> Jesus willingly left his comfort behind and tied himself to us.', '', ''),
(18, '3.3Section', 'UNITE YOUTH', 'Investing in youth nowadays is critical to the growth of the body of Christ. Teaching young people in the church to develop their relationship with the Lord prepares them to serve Christ in everything they do. As a result, the congregation is nurtured and the church is able to develop.\r\n<br><br>\r\nLet us build this generation for Jesus!', '#interest', ''),
(19, '3.4Section', 'MINISTRY INNOVATIVE LEARNING <r> ENVIRONMENT </r>', 'It is created to help church leaders overcome these barriers to training and make it easier than ever to start training our volunteers. we want to equip church leaders in their work of equipping the saints for the work of ministry.', '#interest', ''),
(20, '3.5Section', 'CHURCH <r>CONTACTS</r>', '', '', ''),
(21, '3.6Section', 'SEND US YOUR<r> PRAYER REQUESTS</r>', '', '', ''),
(23, '4.2Section', 'WHO <r>WE</r> ARE', 'Hey there! <br> <br>\r\nIs today your first time here? Or Maybe your first time in a while? If so, maybe you are wondering exactly who we are and what this church is all about. Well, we would like you to know that we are a group of ordinary people, who are on an amazing journey together following Christ. Our guide is the Bible because it is the divinely inspired Word of God and it will never take us in the wrong direction. \r\n<br><br>\r\nAlong the way, we hope you will see that we are welcoming and spiritually passionate and that getting to know you is a big deal to us. We know that the road is rough sometimes but we work really hard to bring you practical and relevant messages to equip and encourage you through ups and downs. We want you to know that we care about this community and we believe that it is our job to make it a better place. \r\n<br><br>\r\nSo, no matter who you are or where you have been, we are glad you are here with us today and we hope that you will join us on our journey following Christ and living out his plan for us.', '', ''),
(24, '4.3Section', 'HISTORY', '\r\nWhen we started gathering as a cohesive body of believers, God spoke these words to me that all of us coming from different churches and affiliations will be one for the purpose of establishing a vibrant and dynamic Christ-centered Church that focuses on worship,the Word, fellowship, discipleship and evangelism. From 2008 to 2011, we gathered as a church at the function hall of ISHRM School System called the “Eleonor Hall”. From a small body of believers, the church has grown to 200 family members.\r\n', '', ''),
(25, '4.3Section', 'VALUES', 'C - Christ-centered (it is about integrated priority) <br>\r\nO - One in Mission (it is about highest pursuit) <br>\r\nN- No to Division (it is about promoting unity) <br>\r\nV - Valiant for the Gospel (it is about United Forces of Christ) <br>\r\nE- Empowered Spiritually (it is about active faith) <br>\r\nR - Refreshed (it is about real fellowship) <br>\r\nG - Glorify God (it is about our highest aim) <br>\r\nE - Equipped (it is about the education of the heart) <br>\r\n', '', ''),
(26, '4.3Section', 'VISION', 'To be a multi-generational and dynamic Christ-centered witness in the world.', '', ''),
(27, '4.3Section', 'MISSION', 'We exist to glorify God by making disciples who are growing in Christ, committed in the ministry, and bold in their faith.\r\n', '', ''),
(28, '4.4Section', 'COMMUNITY', 'God spoke to me to build a f-storey building that can be used for the school and for the church. In 2012, we transferred to the E-Beneu which can accommodate 400 people. The church has drastically grown during this time and C7 Discipleship Groups began. Due to the growing membership of the church, God spoke to me again to transfer the church to a much bigger place that can reach people from every walk of life. In November 2015, by God’s grace, we were able to move to our current location at SM City Bacoor Cinema 3 which can accommodate 700 people.\r\n<br> <br>\r\nBy God’s power and grace, we shall continue to expand His kingdom here on Earth for the greater glory of God.\r\n', '', ''),
(29, '4.5.1Section', 'What time is your Sunday service?', 'We offer two services on Sundays at 8:00 AM to 9:30 AM and 10:00 AM to 12:00 PM.', '', ''),
(30, '4.5.1Section', 'Do you have other church services?', 'Every Wednesday, we hold a mid-week prayer meeting from 6:00 PM to 7:00 PM. Also, every Saturday morning at 6:00 AM to 7:00 AM, we have our prayer power and anyone is welcome to attend those times.', '', ''),
(31, '4.5.1Section', 'How and where I can go to attend church services?', 'Due to the COVID-19 pandemic, we do not have our physical services. We can be together and visit our Facebook page as we extend our community online. Once it is lifted, you can make a schedule here since we only have limited capacity due to the public health protocols. For essential reasons, you can drop by at MCHS Bldg., Habay, Bacoor City, Cavite, or contact us on our <b><a class=\"m-link\" target=\"_blank\" href=\"https://web.facebook.com/convergencechurchph?_rdc=1&_rdr\">Facebook page.</a></b>', '', ''),
(33, '5.1Section', 'GIVE <r>ONLINE</r>', 'God loves a cheerful giver and since we are still in the pandemic, we are following some protocols. However, you can give your contributions by  <b><r>clicking the photo beside this text.</r></b>', '', ''),
(34, '5.2Section', 'GIVE BY <r>EMAIL</r>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quis!', '', ''),
(35, '5.3Section', 'GIVE IN <r>PERSON</r>', 'You can also give your in-kind donations at CICF Main Office, MCHS Building, Habay 2, Bacoor City, Cavite.', '', ''),
(36, 'Pastors', '<r>MEET</r> THE PASTORS', 'As we grow further, our church spread all over the place. <br> Let us introduce you to the people behind the building of this community.', '', ''),
(37, '3.5.1Section', 'username123@gmail.com', 'samplemail000@gmail.com', '', ''),
(38, 'PrivacyPolicySection', 'HELLO<r> CHURCH!</r>', 'The data from this  will be treated according to the Data Privacy Act (DPA) of 2012 and will only be used for this study alone. <br><br> Data Privacy Act of 2012 (DPA) \"to protect the fundamental human right of privacy, of communication while ensuring free flow of information to promote innovation and growth. The State recognizes the vital role of information and communications technology in nation- building and its inherent obligation to ensure that personal information in information and communications systems in the government and in the private sector are secured and protected.\"', '', ''),
(39, 'lgalpha', 'life group <r>alpha</r>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(40, 'lgbeta', 'life group <r>beta</r>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(41, 'lgmile', 'life group <r>mile</r>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(42, 'lgchildren', 'life group <r>children</r>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(43, 'lgmen', 'life group <r>men</r>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(44, 'lgwomen', 'life group <r>women</r>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(45, 'mnworship', '<r>worship</r> ministry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(46, 'mndance', '<r>dance</r> ministry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(47, 'mnmarshal', '<r>marshal</r> ministry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(48, 'mnsunflower', '<r>sunflower</r> ministry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(49, 'mnusher', '<r>usher</r> ministry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(50, 'mnprayer', '<r>Prayer</r> ministry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'Connect.php#interest', ''),
(51, 'TermsAndAgreements', 'terms of <r>service</r>', 'This website is run by the Convergence International Christian Fellowship. This page explains our policies for collecting, using, and disclosing personal information collected from site visitors.<br><br>    We only use your personal information to provide and improve our site, as well as to further our mission of extending the Word of God to other communities and platforms.<br>  <br>    We only collect the information you choose to give us, and we process it with your consent or on another legal basis. We only require the bare minimum of personal information to fulfill the purpose of your interaction with us. <br>  <br>   You agree to the collection and use of information in accordance with this policy by using our website.', '', ''),
(52, '4.5.1Section', 'Do you offer small groups?', 'Small groups have always been an important part of our church community and we see them as an essential place to grow in relationship with our Lord and other. <b><a class=\"m-link\" target=\"_blank\" href=\"Connect.php\">You can click this to see our various groups.</a></b>', '', ''),
(53, '4.5.1Section', 'How can I give my offerings/donations?', 'As we virtually grow further, we also use different online platforms to continue our church giving. <b><a class=\"m-link\" target=\"_blank\"href=\"Give.php\">You can click this to show more details.</a></b>', '', ''),
(54, '4.5.1Section', 'Is there someone who can pray with me?', 'Every prayer is important for us. You can send us your prayer request here and let us pray together. For other concerns, you can also sent us a message    <b><a class=\"m-link\" target=\"_blank\" href=\"Connect.php#contactus\">here.</a></b>', '', ''),
(55, '4.5Section', '<r>FREQUENTLY</r> ASKED QUESTIONS', '', '', ''),
(56, '4.6Section', 'DO YOU HAVE ANY <r> QUESTIONS </r>', ' ', 'https://www.facebook.com/convergencechurchph', ''),
(57, '4.7Section', 'Church <r>Campuses</r>', '- Dasmarinas Campus   - Kawit 1 Campus<br>- Kawit 2 Campus      - Molino Campus<br>- Imus Campus     &thinsp;  - Alfonso Campus<br>- Batangas Campus      &thinsp; - Novaliches Campus<br>- Pampanga Campus   - Cabanatuan Campus<br>- Aliaga Campus     &thinsp;   - Cebu Campus<br><br><br>International Satellites:<br>- Japan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `verification_code` varchar(250) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `name`, `verification_code`, `email_verified_at`) VALUES
(2, 'jimboy1', 'as@g.c', '202cb962ac59075b964b07152d234b70', 'jimwell1', '', '2021-10-15 06:26:40'),
(3, 'admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'admin', '', '2021-10-15 06:26:40'),
(5, 'arvinvirata', 'virata_arvin@yahoo.com', 'f6a5bbb23bfb319204763419586be91f', 'arvin virata', '', '2021-11-08 06:04:55'),
(7, 'jimwell9876', 'jimwellaquino987@gmail.com', '202cb962ac59075b964b07152d234b70', 'Carlos Jimwell G Aquino', '', '2021-12-28 08:48:50'),
(8, 'pidsified', 'paultuazon@rocketmail.com', 'd242e9e5f5fa5d3d5533429248d8360d', 'Pids Tuazon', '', '2021-12-29 09:39:33'),
(9, 'Imshirleyann', 'shirley26.villota@gmail.com', 'fc07dd921f8416d98d47e6dea6305cf9', 'shirley ann villota', '', '2022-01-02 03:05:04'),
(10, 'Jude Manga', 'judemanga9@gmail.com', 'cbae2f3722ea9c205c227da3c5e2865d', 'Jude manga', '', '2022-01-02 06:58:18'),
(11, 'Jamby123', 'johnleosubire@yahoo.com', '811a7e507be187d432f0e8df4ce783c2', 'John Subire', '', '2022-01-02 08:53:12'),
(12, 'jamby', 'subirej2@gmail.com', '811a7e507be187d432f0e8df4ce783c2', 'John Leo', '', '2022-01-02 08:55:25'),
(13, 'laurence099', 'johnlaurence.aceron@gmail.com', 'bfddb1ad2a7bd1257abc325ea3b06ee3', 'John Laurence Aceron', '', '2022-01-02 08:56:19'),
(14, 'Iamravillota', 'richelvillota@yahoo.com', '1bb77938714a35d767a31d6f93b128d5', 'Richel Villota', '', '2022-01-02 10:31:08'),
(15, 'annahallare18', 'annahallare18@gmail.com', 'bc8b54e37565082fae108ab9e4b372f9', 'Annabelle Hallare', '', '2022-01-02 13:19:08'),
(16, 'fddsf', 'jim@gmail.com', '202cb962ac59075b964b07152d234b70', 'Carlos Jimwell G Aquino', '', '2022-01-02 16:56:04'),
(17, 'Hans Anthony', 'hansquimpo14@gmail.com', 'dfc7a899da3c0f6bc5ebcd3a0ad3ca49', 'Hans Quimpo', '', '2022-01-14 01:10:09'),
(18, 'yunisstt', 'yownissss@gmail.com', '8fe6c42f4de7bf59e0e081066147283b', 'Eunice Jem Avelin', '', '2022-01-14 01:13:59'),
(19, 'humblegod', 'johnpatricksolis6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'John Patrick Solis', '', '2022-01-14 01:18:13'),
(20, 'carlotoledo123', 'carlotoledo123@gmail.com', '69a81c6d92cb6165641d7c74c596a3bf', 'Carlo', '', '2022-01-14 01:27:19'),
(21, 'AeronlovesJesus', 'aeronpedroso0201@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'AERON JUSTINE PEDROSO', '', '2022-01-14 01:46:20'),
(22, 'cgraceruth', 'cgraceruth77@gmail.com', '66e6f54e208726b8adf4f58d6c751fe3', 'Grace Cardino', '', '2022-01-14 01:48:53'),
(23, 'adrnochrn@gmail.com', 'avocharan@pcu.edu.ph', '4a69cbe158436e3f4ce079afa343cd54', 'Adrian Ocharan', '', '2022-01-14 02:12:53'),
(24, 'Usernumber1', 'usernumber1@gmail.com', 'ecddd72b4f47858247099553784a9879', 'usernumber1', '', '2022-01-14 02:46:40'),
(25, '123', 'cjaquino987@gmail.com', '202cb962ac59075b964b07152d234b70', 'Carlos Jimwell G Aquino', '', '2022-01-14 04:11:17'),
(26, 'sharmainekye', 'sharmaine.rosales@cvsu.edu.ph', '09d1c05f0bb372dafde6b58e84e4d0c7', 'Sharmaine', '', '2022-01-14 08:40:42'),
(27, 'rjmanga', 'rjmanga@gmail.com', '202cb962ac59075b964b07152d234b70', 'RJ Manga', '', '2022-01-14 08:41:25'),
(28, 'sharmkye', 'sharmainekyerosales@gmail.com', '7c14f325a6cf5d2fd6ffc61c0d0d1596', 'kye', '', '2022-01-14 08:42:26'),
(29, 'sharmaine kye', 'kyerosales@gmail.com', 'd7a055e4b6a64a99d5bcdd3a8fc654d5', 'sharm', '', '2022-01-14 08:43:12'),
(30, 'hello kye', 'rsharmainekye@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hello', '', '2022-01-14 08:44:58'),
(31, 'KyeSharmaine', 'sharmainekyer@gmail.com', 'b329ce4bcef908e21905ca1a08a2db65', 'Kaye', '', '2022-01-14 08:51:11'),
(32, 'test', 'test@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'test', '', '2022-01-14 09:16:39'),
(37, 'kel', 'michael@gmail.com', '0d4d8527844214daf84198dbcb7ca445', 'michael', '186944', '2022-01-23 11:51:15'),
(38, 'RJ', 'rjvillota1645@gmail.com', '5dcd9fb08f0968ffe728fef9652b368b', 'RJ VILLOTA', '339020', '2022-01-23 11:55:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect`
--
ALTER TABLE `connect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
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
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `connect`
--
ALTER TABLE `connect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
