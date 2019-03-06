-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 05:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'When was the first Common Wealth Games held?', '1930', '1934', '1938', '1948', '1930'),
(2, 'The term &quot;Butterfly Stroke&quot; is referred in which sport?', 'Tennis', 'Hockey', 'Swimming', 'Billiards', 'Swimming'),
(3, 'Donald Trump and Kim Jong-un have begun their high-profile second summit in ', 'Bangkok,Thailand', 'Hanoi, Vietnam', 'Kuala Lumpur, Malaysia', 'Phnom Penh, Cambodia', 'Hanoi, Vietnam'),
(4, 'Who has been re-elected as President of Nigeria?', 'Hassan Rouhani', 'Bujar Nishani', 'Atiku Abubakar', 'Muhammadu Buhari', 'Muhammadu Buhari'),
(5, 'Which team scored Highest Ever T20 International Score', 'UAE', 'England', 'WestIndies', 'Afghanistan', 'Afghanistan'),
(6, 'Which of the following app did the Election Commission of India develop for the Lok Sabha election 2019?', 'eECI', 'cVIGIL', 'elodgecomplain', 'eciviliancomplaint', 'cVIGIL'),
(7, 'GST on under construction houses cut from 12% to _______%.', '1', '8', '6', '5', '5'),
(8, 'Which is the tallest mountain in Africa?', 'Mount Baker', 'Mount Kilimanjaro', 'Mount Stanley', 'Mount Kenya', 'Mount Kilimanjaro'),
(9, 'Who is the first women into space?', 'Kalpana Chawla', 'Sally Ride', 'Valentina Tereshkova', 'Sunitha Williams', 'Valentina Tereshkova'),
(10, 'Which is the largest city in the world by population? ', 'Tokyo', 'New York', 'Shanghai', 'Moscow', 'Shanghai'),
(11, 'Which station has the longest railway platform in India?', 'Kharaghpur', 'Howrah', 'Gorakhpur', 'Kollam', 'Gorakhpur'),
(12, 'Who wrote the patriotic song &quot;Sare Jahan Se Acha&quot;?', 'Rabindranath Tagore', 'Muhammad Iqbal', 'Bankim Chandra Chattopadhyay', 'Shankarambadi Sundarachari', 'Muhammad Iqbal'),
(13, 'Who was the first Indian to score a Test century?', 'C.K.Naidu', 'M.A.Pataudi', 'Lala Amarnath', 'Kapil Dev', 'Lala Amarnath'),
(14, 'Thomas Cup is related to which sport?', 'Tennis', 'Cricket', 'Badminton', 'Badminton', 'Badminton'),
(15, 'Who won the goal medal for 400 meters run at two consecutive Olympic Games?', 'Carl Lewis', 'Michael Johnson', 'Usain Bolt', 'Yohan Blake', 'Michael Johnson'),
(16, 'Which is the following is another name for a folder?', 'Package', 'Module', 'Directory', 'Container', 'Directory'),
(17, 'Which one is the first search engine in Internet?', 'WAIS', 'Archie', 'Google', 'Altavista', 'Archie'),
(18, 'What is the name of first computer virus?', 'Creeper Virus', 'Rabbit', 'Elk Cloner', 'SCA Virus', 'Creeper Virus'),
(19, 'What is the Full form of PDF? ', 'Printed Document Format', 'Public Document Format', 'Published Document Format', 'Portable Document Format', 'Portable Document Format'),
(20, 'Which of these is used for making IC Chips for computers?', 'Germanium', 'Silicon', 'Copper', 'Aluminium', 'Silicon'),
(21, 'Which of these nerves are connected to ears from eyes?', 'Cerebrum', 'Medulla', 'Cerebellum', 'Spinal Cord', 'Cerebellum'),
(22, 'Antimalarial drug, Quinine, is made from which plant?', 'Arnica', 'Cinchona', 'Konjac', 'Barberry', 'Cinchona'),
(23, 'Name the disease caused by the deficiency of Iron?', 'Rickets', 'Scurvy', 'Pellagra', 'Anaemia', 'Anaemia'),
(24, 'The symbol Sb stands for stibnum or stibnite. What is the modern name of this element?', 'Antimony', 'Samarium', 'Arsenic', 'Seaborgium', 'Antimony'),
(25, 'Which of these planets has no moons?', 'Uranus', 'Mercury', 'Jupitar', 'Neptune', 'Mercury'),
(26, 'Who is the current secretary general of UNO?', 'Kofi Annan', 'Antonio Guterres', 'Ban Ki-moon', 'Boutros Boutros-Ghali', 'Antonio Guterres'),
(27, 'Which is the richest country on the basis of per capita income?', 'Luxembourg', 'Singapore ', 'Qatar', 'Kuwait', 'Qatar'),
(28, 'National Youth Day is celebrated on which date?', 'Jan-14', 'Jan-12', 'Jan-23', 'Jan-21', 'Jan-12'),
(29, 'Who among these is popularly known as Gurudev?', 'Jagadish Vasudev', 'Rabindranath Tagore ', 'Ramakrishna Paramahamsa', 'Madhavacharya', 'Rabindranath Tagore '),
(30, 'How many states share a costal line in India?', '7', '12', '9', '11', '9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'lendi@csi',
  `name1` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `isSubmitted` enum('0','1') NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `name1`, `name2`, `college`, `isSubmitted`, `score`) VALUES
(1, 'bharathkumar05599@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(2, 'rameshpitta560@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(3, 'navyatejaswi33@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(4, 'BASANABHANUPRAKASH@GMAIL.COM', 'lendi@csi', '', NULL, '', '0', 0),
(5, 'saisirishaganta@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(6, 'badukondasonia@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(7, 'gowthamiyogi37@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(8, '16kd1a0508@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(9, 'alekhyatenneti@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(10, 'naveenkrishnan629@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(11, 'avinash.bhadram@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(12, 'samhithapadala3@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(13, 'aswinbhargav1@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(14, 'jayasandeepr@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(15, 'priyakosana2@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(16, 'ramasagi555@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(17, 'kolaganamadhu123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(18, 'tula.nani2@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(19, 'prasannapatiruni@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(20, 'neelimarla@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(21, 'padmapriyalahari1@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(22, 'vandanakalla55@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(23, 'murthykancharana2016@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(24, 'sudha.kottu777@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(25, 'saitejatalabattular@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(26, 'mounikapenumatsa123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(27, 'tejaswikumar96@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(28, 'mtanusha07@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(29, 'sivani.pakalapati123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(30, 'lakshmi40.maddula@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(31, 'seera.chaitanya999@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(32, 'sunkarijuhi@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(33, 'bhaskarp745@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(34, 'jayanthofficial000@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(35, 'gavidichandu2000@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(36, 'guranasaiteja12345@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(37, 'kspooja999@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(38, 'harishgidijala123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(39, 'perlsandeep9@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(40, 'kameshsai113@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(41, 'mohitkumary99@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(42, 'venkatasupraja99@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(43, 'srujana.mammula99@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(45, 'sanjay.alka17@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(46, 'akhilakalepu22@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(47, 'kranthipothina18@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(48, 'd.devika2310@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(49, 'keerthanakeethu557@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(50, 'nikhita.adari008@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(51, 'mahendra.dannana@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(52, 'kasireddisarathchandra@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(53, 'sai.subash32@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(54, 'balajikakkirala@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(55, 'moulisai19@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(56, 'mongamsaikumar2000@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(57, 'sowmyagumpina9@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(58, 'Chirudeepreddi7075@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(59, 'pushpamasa2328@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(60, 'bodasasikumar2000@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(61, 'malathiyerninti26@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(62, 'akhilbharadwaj826@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(63, 'vyshnavipaluru@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(64, 'sandyguntreddi@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(65, 'tmowlika123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(66, 'reshmadusi.24@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(67, 'arunkishorevoleti@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(68, 'saikirantumula@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(69, 'udaysantosh15@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(70, 'pavanisigilipelli24@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(71, 'shivajyothigangiredla@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(72, 'suryanadupuri333@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(73, 'mukeshkaduru3@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(74, 'sandygedela@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(75, 'gowthamisagarika07@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(76, 'saiharsha.akkajosyula@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(77, 'ramyaallada111@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(78, 'charansaikola71@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(79, 'ramyachaitanyagongada@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(80, 'angajalamrudula@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(81, 'kiranjayageddapu18@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(82, 'krishnasantoshi14@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(83, 'vanapallimallika22@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(84, 'mylapillilahari66@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(85, 'saikrishna76980@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(86, 'sravani.mavuri152@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(87, 'sandhyamaradana2199@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(88, 'pavitra12999@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(89, 'vandanathyadi09@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(90, 'kalyanicse2016@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(91, 'surisettyveena1998@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(92, 'teja9332@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(93, 'revathi20002@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(94, 'sravanpujari949@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(95, 'saipadmajaamara1811@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(96, 'srivarsha315@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(97, 'suryarohith153@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(98, 'dineshkothala333@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(99, 'pavaniballa123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(100, 'moturukavyasree@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(101, 'madugulashivani99@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(102, 'jayasatyasaithachubilli@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(103, 'pavanivadamodulu@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(104, 'luckyprincess9788@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(105, 'sasichukka@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(106, 'saieluru97@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(107, 'ganesh.tulluri@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(108, 'niharikachalla22@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(109, 'ananth.penta@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(110, 'nuthanabotcha99@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(111, 'pavithra.kuppili@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(112, 'mudiliuday@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(113, 'sonalikesali577@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(114, '18331A05C3@mvgrce.edu.in', 'lendi@csi', '', NULL, '', '0', 0),
(115, 'sharmilakagita@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(116, 'hemanthkumar8819@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(117, 'thaddimanikanta@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(118, 'pratyushamothadaka@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(119, 'tarun.digavalli117@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(120, 'bonumaddi55@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(121, 'mohanvamsi2013@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(122, 'sairamesh0986@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(123, 'nihithalovely269@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(124, 'rachanabandi03@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(125, 'girishsakalabhaktula@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(126, 'bannasaisujan@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(127, 'sashikasturi@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(128, 'pravallikapydi3012@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(129, 'lukalapuramadevi2000@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(130, 'manasamalla7705@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(131, 'rohini.rukanana@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(132, 'swathidanthuluri.123@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(133, 'ramasakala1999@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(134, 'gvasundhara999@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(135, 'nikhita.varma03@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(136, 'reddyprashanthi2898@gmail.com', 'lendi@csi', '', NULL, '', '0', 0),
(274, 'Leelaranideepilli@gmail.co', 'lendi@csi', NULL, NULL, NULL, '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
