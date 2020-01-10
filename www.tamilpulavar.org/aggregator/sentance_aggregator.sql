-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2016 at 03:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sentance_aggregator`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Tamil'),
(2, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `for_admin`
--

CREATE TABLE IF NOT EXISTS `for_admin` (
  `sno` int(11) NOT NULL,
  `sentance_no` varchar(500) NOT NULL,
  `users` varchar(5000) NOT NULL,
  `Tamil` varchar(255) NOT NULL,
  `English` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_admin`
--

INSERT INTO `for_admin` (`sno`, `sentance_no`, `users`, `Tamil`, `English`) VALUES
(58, '1', 'USER1', '1', '0'),
(59, '2', 'USER1', '1', '1'),
(60, '3', 'USER1', '0', '0'),
(61, '4', 'USER1', '0', '0'),
(62, '5', 'USER1', '0', '0'),
(63, '6', 'USER1', '0', '0'),
(64, '7', 'USER1', '0', '0'),
(65, '8', 'USER1', '1', '0'),
(66, '9', 'USER1', '1', '0'),
(67, '10', 'USER1', '1', '1'),
(68, '1', 'USER1\r\n', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(11) NOT NULL,
  `keywords` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `keywords`) VALUES
(1, 'Static'),
(2, 'Dynamic'),
(3, 'Daily'),
(4, 'Weekly');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL,
  `links` varchar(20000) NOT NULL,
  `links_id` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `links`, `links_id`, `user_id`, `created_at`) VALUES
(1, 'www.healingsiddhas.com', '14593277531828', 'USER1', '30-03-2016 14:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `sno` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sno`, `user_id`, `user_name`, `password`, `role`) VALUES
(1, 'ID1', 'admin', 'admin', 1),
(2, 'USER1', 'user', 'user', 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `sno` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `value` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`sno`, `role`, `value`) VALUES
(1, 'ADMIN', 1),
(2, 'SUPERUSER', 2),
(3, 'USER', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sentance`
--

CREATE TABLE IF NOT EXISTS `sentance` (
  `sno` int(11) NOT NULL,
  `sentances` varchar(9000) CHARACTER SET utf8 NOT NULL,
  `link_id` varchar(500) NOT NULL,
  `USER1finished` tinyint(4) NOT NULL,
  `ID1finished` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=548 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentance`
--

INSERT INTO `sentance` (`sno`, `sentances`, `link_id`, `USER1finished`, `ID1finished`) VALUES
(1, 'Healing Siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us              	 		Content', '14593277541757', 1, 1),
(2, 'This is to be updated', '14593277541757', 1, 1),
(3, 'Content1 				This is to be updated', '14593277541757', 1, 1),
(4, 'Content2 				This is to be updated', '14593277541757', 1, 1),
(5, 'Content3 				This is to be updated', '14593277541757', 1, 1),
(6, '&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277541757', 1, 1),
(7, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 					 		     			     		             About us             Contact us                 	  		                                                                  Vasi Therapy                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Human being is a part of Nature, and SHE (Nature) organises every moment of livingness in every human being', '1459327754546', 1, 1),
(8, 'This way, say the Siddhas, that man is part of the macrocosm and he himself its microcosm', '1459327754546', 1, 1),
(9, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is out there is equally in here', '1459327754546', 1, 1),
(10, 'In which case, if the macrocosm never gets sick or dies then why do we', '1459327754546', 1, 1),
(11, 'This is the question Healer Pal asked himself for years', '1459327754546', 0, 0),
(12, 'The answer awaited hidden within his healing journey and personal sadhana; which ultimately amalgamated as his own healing style which he names Vasi Therapy', '1459327754546', 0, 0),
(13, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddha tradition repeatedly teaches that man is no different from the grand cosmos and the rules that apply out there, apply within too, which is why in Siddha healing both levels of existence are considered; the individual level as well as the transcendental as we are always in connect with it', '1459327754546', 0, 0),
(14, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contrary to this wholistic approach, most conventional medical systems use a specialised approach in diagnosis and treatment', '1459327754546', 0, 0),
(15, 'In case of hepatitis â€“ the liver is treated; it is a specialised approach', '1459327754546', 0, 0),
(16, 'But the Siddha system holds a larger perspective for the same case', '1459327754546', 0, 0),
(17, 'Along with medicine, a seasonal diet and lifestyle changes are required for a lasting complete cure', '1459327754546', 0, 0),
(18, 'The connect between us and our surrounding (the cosmos) is indomitable', '1459327754546', 0, 0),
(19, 'VASI THERAPY   Whenever treatment is given based on the wholistic principles rather than the obvious symptoms, the results are self explanatory', '1459327754546', 0, 0),
(20, '"Imagine yourself as a house with several rooms and both a front and a back door', '1459327754546', 0, 0),
(21, 'To clean the rooms you can either enter through the Front or the back door', '1459327754546', 0, 0),
(22, 'The front door (the obvious or visible one) is the temporal, ephemeral or tangible and represents our physical body', '1459327754546', 0, 0),
(23, 'The back door, the more discreet one, represents an intangible or subtle entrance into our deep and potent connect with the Transcendental', '1459327754546', 0, 0),
(24, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The different modes of Vasi Therapy revolve around these approaches of access', '1459327754546', 0, 0),
(25, 'The approach from the gross body level is called Varma therapy and from the causal level is called Amritha Kalai', '1459327754546', 0, 0),
(26, 'Whilst employing different accesses, he systemically treats the common thread that integrates Health within us', '1459327754546', 0, 0),
(27, 'The 3 methods', '1459327754546', 0, 0),
(28, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Varma Therapy(vital point therapy) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalari Therapeutics(alignment)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amritha Kalai (higher dimension of Vasi therapy)</ul>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Varma therapy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Varma points are locations on the body having access to the vital flow (of subtler body sheaths) and are materially undetectable', '1459327754546', 0, 0),
(29, 'Varmams are connects between the physical and subtle body and can be applied for internal diseases as well as injury', '1459327754546', 0, 0),
(30, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalari therapeutics    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This mode of treatment is for the intermediary sheath and facilitates re-alignment at various levels', '1459327754546', 0, 0),
(31, 'It involves gentle touch and/ or massage', '1459327754546', 0, 0),
(32, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amritha kalai therapy    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is the highest dimension of Vasi therapy and allows the person to reclaim his connection to his transcendental aspect for deep rooted healing', '1459327754546', 0, 0),
(33, 'See more', '1459327754546', 0, 0),
(34, '</p>\r\n </p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siddhas fundamental perspective\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas see the human form as a multi sheathed inter woven organism with its origin in the sky (Ether element) and its rooting within the Earth (Earth element)', '1459327754546', 0, 0),
(35, 'The remaining three primary elements (air, fire and water) are what compose the intermediate form, the human body', '1459327754546', 0, 0),
(36, 'We are more than just the frame of our physical body', '1459327754546', 0, 0),
(37, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The origin, the Siddhas name in their manuscripts as, Thiru Vasi', '1459327754546', 0, 0),
(38, '(Each ancient tradition has its own name for it)', '1459327754546', 0, 0),
(39, 'Thiru Vasi remains as our source of livingness throughout our lifespan', '1459327754546', 0, 0),
(40, 'Once it withdraws we die', '1459327754546', 0, 0),
(41, 'The Siddhas revere Thiru Vasi as the flawless cosmic blueprint of all creation, sustenance and dissolution', '1459327754546', 0, 0),
(42, 'The rhythmically breathing Thiru Vasi enfolds space which gives birth to form', '1459327754546', 0, 0),
(43, 'This process of enfoldment can be easily identified in the early stages of a human embryo', '1459327754546', 0, 0),
(44, 'To put it very simply, the very breath (inhalation and exhalation) of this Primary Source is what gives forth all forms, cradles it and dissolves it as well', '1459327754546', 0, 0),
(45, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No form exists independent of Thiruvasi', '1459327754546', 0, 0),
(46, 'as the macro so the micro', '1459327754546', 0, 0),
(47, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thiru Vasi exists even on an individual level', '1459327754546', 0, 0),
(48, 'The Siddhas name it Vasi', '1459327754546', 0, 0),
(49, 'Vasi is the guarding intelligence / energy that provides the fuel of core livingness by its inherent rhythmic breath and connectivity with its grander counterpart, Thiru Vasi', '1459327754546', 0, 0),
(50, 'In the Siddha tradition, Vasi is of great spiritual importance', '1459327754546', 0, 0),
(51, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vasi, from its pulsating core spurts a fountain of fuel, bringing us to life and provides for  involuntary functions such as breathing, digestion, blood circulation, assimilation, even blinking and a host of other survival gestures', '1459327754546', 0, 0),
(52, 'These are existential essentials', '1459327754546', 0, 0),
(53, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to walk, run, see, feel, think and have urges and desires, which demand more energy, we contribute to this primal fuel through our breath and by eating, drinking', '1459327754546', 0, 0),
(54, 'This combined fuel or energy supply allows for an organised and meaningful life', '1459327754546', 0, 0),
(55, 'The 5 bodies we are', '1459327754546', 0, 0),
(56, 'The Siddhas describe 5 sheaths in the human form', '1459327754546', 0, 0),
(57, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Food Sheath or Gross body', '1459327754546', 0, 0),
(58, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pranic body or Vital-air Sheath', '1459327754546', 0, 0),
(59, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mental Sheath (Manomaya Kosam)', '1459327754546', 0, 0),
(60, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intellectual Sheath (Vigyanmaya Kosam)', '1459327754546', 0, 0),
(61, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bliss Sheath (Anandamaya Kosa)</ul> \r\n\r\n            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The same vital energy flows through all five sheaths keeping them interrelated by way of Nadis or a network of channels that carry this rippling energy to its destined locations for internal bodily processes to take place', '1459327754546', 0, 0),
(62, 'VARMAMS    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At its core actual Vasi energy, like its grander counterpart, is bland in nature (no specific attributes are active)', '1459327754546', 0, 0),
(63, 'For complex physiological and motor functions this energy is transmuted at predetermined locations called Varmams and then distributed to the destined region', '1459327754546', 0, 0),
(64, 'The Siddhas describe more than 800 Varmams (Vital points) each performing a distinctive activity in synch with others', '1459327754546', 0, 0),
(65, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To summarise the above', '1459327754546', 0, 0),
(66, 'The Siddhas liken the human form to a tree, whose origin is from the sky and rooting is to the earth below', '1459327754546', 0, 0),
(67, 'we can see that the micro form of Thiruvasi exists within our body as Vasi', '1459327754546', 0, 0),
(68, 'Vital energy ripples through the Nadis and is being transmuted to fit the purpose at junctures called Varmams', '1459327754546', 0, 0),
(69, 'How is this relevant in terms of health and disease', '1459327754546', 0, 0),
(70, 'Disease is either a deviation of the vital flow or a malfunction of one or multiple varmams; this instantly influences the health across all five sheaths in the human organism', '1459327754546', 0, 0),
(71, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Treatment aims to return the vital flow to its intended manner and encourage the varmams to perform their vital functions', '1459327754546', 0, 0),
(72, 'Read Less', '1459327754546', 0, 0),
(73, 'Â© 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '1459327754546', 0, 0),
(74, 'Healing siddhas                   	  		Healing Siddhas  	    	  		  			  		  		  			  				Home  				Vasi Therapy                  Healer Pal  				Healing Dimensions   				Activities                  Articles                  Products                  Related Links  			  		  	    	  		  			  			  			  			  			  		PrevNext12345                  			        		              About us              Contact us                    	  		                                                                  Herbo-Mineral dimension of the Siddha clan                           Introduction         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas repertoire of herbs is filled with millions of single and combined formulations for all types of disorders', '14593277547460', 0, 0),
(75, 'Each Siddha describes hundreds of remedies for each disease', '14593277547460', 0, 0),
(76, 'The challenge faced by present day Siddha practitioners is just that â€“ the colossal nature of information and possibilities leaves them perplexed in their ability to select the right one', '14593277547460', 0, 0),
(77, 'It is the experience carried by the lineage that guides one through the maze of possibilities and supports your healing platform in a consistent manner', '14593277547460', 0, 0),
(78, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal has worked intensively in this dimension for over 20 years', '14593277547460', 0, 0),
(79, 'He prepares his own medicines using formulations belonging to his lineage; which are not known or shared with modern day medicinal manufacturers, pharmacies or even other Siddha practitioners', '14593277547460', 0, 0),
(80, 'These formulations are prepared strictly by traditional methods and the raw materials or herbs are procured from secluded regions or mountains according to the instructions of his teachers', '14593277547460', 0, 0),
(81, 'A glimpse of the early days  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More than 10,000 years ago a clan of Medicinal mavericks, the Siddhas, led by spiritually-oriented minds, dug deep into the secrets of Nature', '14593277547460', 0, 0),
(82, 'Systematically they categorised the Plant kingdom, the animal kingdom and the mineral world and examined the medicinal/ poisonous properties of each', '14593277547460', 0, 0),
(83, 'This amounted to the birth of the Herbo-Mineral Branch of the Siddha System', '14593277547460', 0, 0),
(84, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Herbo â€“ Mineral branch of this ancient tradition speaks of :  	the nature of Herbs, Minerals, Metals;  	their inherent qualities, behaviours, potencies, tendencies;  	how they influence each other', '14593277547460', 0, 0),
(85, 'the change in qualities caused by different geographic locations, climate and soil', '14593277547460', 0, 0),
(86, 'the medicinal / poisonous aspects of each  	the modes of preparations etc', '14593277547460', 0, 0),
(87, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Their tried and tested formulates were encoded into a vast materia medica in the form of verse and song', '14593277547460', 0, 0),
(88, '', '14593277547460', 0, 0),
(89, 'This opened up a rather challenging mystery â€“ death, which they diligently set about to resolve and realise', '14593277547460', 0, 0),
(90, 'This is their dimension of the Science of Immortality which primarily deals with alchemising the human body to a state of deathlessness â€“ the pinnacle of spiritual supremacy', '14593277547460', 0, 0),
(91, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Herbo-Mineral branch and the Kaya Kalpa dimension are entwined together as the first one deals with curing the body of diseases and the latter deems to cure the body of death itself', '14593277547460', 0, 0),
(92, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas endeavoured to test out the boundaries of mortality', '14593277547460', 0, 0),
(93, 'The exploration of being free of disease and free of death haunted their meditations', '14593277547460', 0, 0),
(94, 'These, rather strange aspirations are the root purports of this ancient tradition which is why they were labelled high-handed rebels for after all in the eyes of the common man, who were we to question the Lord of death', '14593277547460', 0, 0),
(95, 'Consequently as the social structure grew the medicinal dimension was welcomed by common folks but the Kaya Kalpa or the science of longevity or immortality turned into a secret dimension', '14593277547460', 0, 0),
(96, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back then the cycle of birth and death according to the cosmic law of karma, the presence of a soul within our physical frame along with the astral-self, the experiencer or witness was common knowledge', '14593277547460', 0, 0),
(97, 'But what intrigued these ancient minds was that from all the 85 million living species, Man is the only one deigned the chance to strive for spiritual heights', '14593277547460', 0, 0),
(98, 'What were these spiritual heights and where did they lead', '14593277547460', 0, 0),
(99, 'The Tamil Siddhas forsake everything to find out', '14593277547460', 0, 0),
(100, 'Thus formed the hugely guarded sect of ultimate spiritual-supremacy â€“ attaining the state of deathlessness whilst living in the body', '14593277547460', 0, 0),
(101, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But here let us speak of the knowledge of herbs minerals and metals handed down by them \r\n\r\n   Why Wild herbs   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Every herb is influenced by certain factors â€“ factors which are always in a flux such as the nature of soil, the weather, the climate, the location and even the time of day', '14593277547460', 0, 0),
(102, 'In order to harness the actual properties a Siddha Vaidya would need to choose the right herb and also the right way and the apt moment to procure it from the earth, or water-body or else the herb suffers a loss in its potential which would render the medicinal value to a mediocre level', '14593277547460', 0, 0),
(103, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Therefore according to the original tenets of herbal preparations there are several details to be adhered to if one should wish to harness the maximum healing potential of a herb', '14593277547460', 0, 0),
(104, 'With advancing modern technology there has been an increase in readily available processed raw material', '14593277547460', 0, 0),
(105, 'But Healer pal, according to the instructions of his lineage prefers using wild herbs in his medicinal preparations', '14593277547460', 0, 0),
(106, 'He explains why', '14593277547460', 0, 0),
(107, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nature not only cradles foliage and fossils within Her but enters into each by way of different expressions of Herself', '14593277547460', 0, 0),
(108, 'As the Earth, She deeply churns the fossils and foliage by Her incessant rotation and She penetrates them (above and below the earth ) as the rays from the Stars', '14593277547460', 0, 0),
(109, 'This way all herbs, minerals, metals and natural chemical elements found under the earth are subject to these churning and penetrative process', '14593277547460', 0, 0),
(110, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As foliage grows, it naturally absorbs the different vibrations of minerals-and-metal energy present in and around them under the earth', '14593277547460', 0, 0),
(111, 'In other words plants have eaten and digested mineral and metallic energy and have assimilated its qualities', '14593277547460', 0, 0),
(112, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, when a patient consumes a formulation made from a well sourced wild herb he would ingest the predigested mineral and metallic qualities inherent in the wild herb', '14593277547460', 0, 0),
(113, 'This way there is no direct intake of mineral and metal â€“ only its assimilated essence which is why the appropriate organic minerals and metals can be easily assimilated by the patients body', '14593277547460', 0, 0),
(114, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another reason for preferring Wild herbs is that compared to garden or cultivated plants, Wild herbs show greater Virya, (potential) due to their inherent quality of adaptability â€“ the ability to survive the natural environmental influences and climatic changes of the wild', '14593277547460', 0, 0),
(115, 'Ironically, with the best of interest our cultivated herbs are offered optimal conditions, ideal settings etc', '14593277547460', 0, 0),
(116, 'to promote growth but this artificially induced environment inevitably takes away the plants evolutionary experience and growth in Nature â€“ the instinct of survival intelligence or adaptability', '14593277547460', 0, 0),
(117, 'Evidently Wild herbs show a wider spectrum of bio-availability', '14593277547460', 0, 0),
(118, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal uses formulations belonging to his lineage for treating chronic diseases', '14593277547460', 0, 0),
(119, 'These formulations belong to the oral lineage and are the combinations of the valuable experience of the Lineage Masters', '14593277547460', 0, 0),
(120, 'Obviously, they not available in manuscripts or known to practitioners or modern pharmacies', '14593277547460', 0, 0),
(121, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;His methods of preparation are strictly traditional right from the procuring herbs , the method of plucking, cleaning, purification procedures etc', '14593277547460', 0, 0),
(122, 'and all his formulations are hand made', '14593277547460', 0, 0),
(123, 'A word about Herbs   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The plant species used for health-care are called Mooligai (Herbs)', '14593277547460', 0, 0),
(124, 'The early discovery of all plants not having identical qualities lead them to study each and every plant extensively, which is recorded in the form of verse known as Gunapaadam (Materia Medica)', '14593277547460', 0, 0),
(125, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Most greens on earth have an essential salt content in them', '14593277547460', 0, 0),
(126, 'Since the human body secretes a good amount of salt through sweat, urine, etc', '14593277547460', 0, 0),
(127, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The vegetables are distinguished based on the qualities of the Six Tastes (Suvai)', '14593277547460', 0, 0),
(128, 'What is Suvai -  a brief outline 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas have described the prevalence of 6 tastes', '14593277547460', 0, 0),
(129, 'There is an entire branch of diagnosis and treatment based solely on the knowledge of Suvai (taste)', '14593277547460', 0, 0),
(130, 'The taste based perception of the Siddha dimension is less known and rather underestimated in its potential', '14593277547460', 0, 0),
(131, 'According to their science of Suvai, our body is built up of these 6 fundamental tastes which maintain growth, healing and function of the 6 tissues that the human form is comprised of', '14593277547460', 0, 0),
(132, 'Each of the 6 tastes are interconnected by way of a friendly and unfriendly rapport and hence are influenced by our consumption of food', '14593277547460', 0, 0),
(133, 'The food we eat contributes to the formation of the body and its tissues based on the nature of taste or flavour', '14593277547460', 0, 0),
(134, 'An increase or decrease of a certain taste will influence the formation of its relevant Thathu or tissue', '14593277547460', 0, 0),
(135, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The six tastes are :    astringent salt sweet sour bitter pungent   \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The seven tissues or building blocks of our body are: </br>   plasma blood bone fat muscle bone marrow reproductive fluid tissue    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Over and above the commonly growing greens and vegetables, the Siddhas describe the qualities and properties of types of weeds, grass and ultimately the rare and unusual herbs available only in forests regions', '14593277547460', 0, 0),
(136, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They distinguished a list of herbs that can be preserved in its dehydrated form (Kadai sarakku-64) for off-season use and/or for use in far of locations', '14593277547460', 0, 0),
(137, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The herbal formulations can be prepared in 7 fundamental forms', '14593277547460', 0, 0),
(138, 'herbal powder (podi), herbal decoction (kashaayam),  herbo-vapour (Vedhu), herbal-smoke (pugai), dry-herbs (vatral),  herbal cake (vadagam), medicated-oil (thailam), etc', '14593277547460', 0, 0),
(139, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They have introduced 32+32 internal and external forms of medicaments using all their curative knowledge (including minor surgery needed in their time)', '14593277547460', 0, 0),
(140, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During their exploration the discovered unusual herbs with properties that prolong the existence of the physical form', '14593277547460', 0, 0),
(141, 'These were enlisted into their Kaya Kalpa dimension They have enlisted a number of plant species that can be used as karpams', '14593277547460', 0, 0),
(142, 'Each herb was ascribed a descriptive name â€“ pointing to its predominant property', '14593277547460', 0, 0),
(143, 'Some unusual names in their list are', '14593277547460', 0, 0),
(144, 'Lustrous grass (Jodhi pull), Weeping herb (Azukanni),             Worshipping herb (Thozhukanni), Blinking herb (Nethram simitti), life-saver-herb (Sanjeevi mooligai),  shadow less tree (Saya virutcham), Hairy-tree (Roma virutcham),  Lustrous Tree (Jodhi virutcham),  Silent Tree (Dhoniya Maram) and  medicinal trees with milky sap (Aachchaa, Erumaisunai, Mundaga maram, etc', '14593277547460', 0, 0),
(145, ')', '14593277547460', 0, 0),
(146, 'Climbing tree (yer azhingil)   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Those herbs that demonstrated the ability to influence certain metals were put to use in the preparation of metallic formulations where certain metals could be incinerated to a state of medicinal ash (Parpam)', '14593277547460', 0, 0),
(147, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They had discovered herbs that store certain potential factors of some metals or minerals within', '14593277547460', 0, 0),
(148, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Herbs that expressed esoteric properties were included in their occult dimension', '14593277547460', 0, 0),
(149, 'Anupanam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A rather salient feature of the Siddha tradition is their choices of Anupanam', '14593277547460', 0, 0),
(150, 'Anupanam is a liquid or solid substance taken along with the actual medicine and acts as its carrier', '14593277547460', 0, 0),
(151, 'Essentially, an Anupanam improves the medicinal values of a medicine, reduces its side-effects or controls the reversing or reactive factors in our body', '14593277547460', 0, 0),
(152, 'Each vaidyar (Medicinal Healer) by way of the experience of his Lineage as well as his own, develops a mature perception of how a medicine can be enhanced just by way of opting for the right carrier', '14593277547460', 0, 0),
(153, 'Two vaidyars prescribing the same medicine or herb would vary in their of Anupanam which could influence the quality as well as the duration of healing', '14593277547460', 0, 0),
(154, 'Herbo-Mineral and Metals \r\n Minerals  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas reveal 32 Upa Rasas, which means there are 32 natural minerals on earth and the Siddha Varma system speaks of 32 internal organs in the human body', '14593277547460', 0, 0),
(155, 'Moreover , the energy emanating from the 27 stars ( constellations )  also participates in the formations of these 32 natural minerals', '14593277547460', 0, 0),
(156, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal strongly reiterates that before using any of the 32 natural minerals the procedures of purification are to be adhered strictly to according to lineage style', '14593277547460', 0, 0),
(157, 'Metals   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siddha Bogar in his monumental work Bogar SaptKandam 7000 verses, describes how each metal is formed under the earth', '14593277547460', 0, 0),
(158, 'There are 9 natural single metals on earth', '14593277547460', 0, 0),
(159, 'Each metal signifies the vibration of one planet', '14593277547460', 0, 0),
(160, 'All 9 metals are used in Siddhas formulations since ancient times which admirably states how advanced and innovative their preparations were to be able to alchemize the poisonous aspect of a metal and turn it into an assimilable form', '14593277547460', 0, 0),
(161, 'Metals in the human body', '14593277547460', 0, 0),
(162, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;These metals are the building blocks of human tissue', '14593277547460', 0, 0),
(163, 'If a metal, perfectly purified, administered in the right dosage can cure everything ranging from chronic to fatal diseases - without any side effect', '14593277547460', 0, 0),
(164, 'If this system was widely accepted and used it would eradicate the numerous side effects that are currently being suffered and willingly tolerated by patients of the allopathic method', '14593277547460', 0, 0),
(165, 'So, what then could be the hitch', '14593277547460', 0, 0),
(166, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The purifications and preparations processes are not standardised', '14593277547460', 0, 0),
(167, 'In other words, there are more than one ways of purification and incineration of metals and this varies from Vaidya to Vaidya based on the experience of their lineage', '14593277547460', 0, 0),
(168, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Even so, the value of organic metal formulation is immeasurable', '14593277547460', 0, 0),
(169, 'There are seven tissues that constitute the matrix of the human body', '14593277547460', 0, 0),
(170, 'The nourishment of cells, tissues and intracellular binding which is called Ojas, entirely depends upon organic metal formulations', '14593277547460', 0, 0),
(171, 'Behind the scenes    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The secret behind different formulations of a single metal or mineral is based on changing its inherent elemental nature to another', '14593277547460', 0, 0),
(172, 'For instance Iron is predominantly constituted of the air element but this can be changed by certain ways of grinding, by combining specific herbs or distilled alchemical tinctures', '14593277547460', 0, 0),
(173, 'These processes are applied to change the existing air element into any one of the remaining 4', '14593277547460', 0, 0),
(174, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; what would be the purpose of this', '14593277547460', 0, 0),
(175, 'By changing its elemental tendency to our intended one we can direct it to different layers or tissues of the body according to the illness being treated', '14593277547460', 0, 0),
(176, 'So, the same metal would act upon different layers according to the elemental nature introduced into it by way of the prescribed processes', '14593277547460', 0, 0),
(177, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Siddhas pharmacopoeia has a wide range of forms of medicines such as medicated oil (thailam), Satha (extract), Vadineer (distilled tincture), Chunnam (calcified state of a substance), Patru (paste), etc', '14593277547460', 0, 0),
(178, 'A person needs to have a good amount of experience to prepare a substance into a traditional form of medicine', '14593277547460', 0, 0),
(179, 'Â© 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate  	          </div>', '14593277547460', 0, 0),
(180, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us               	 		                                                           Healing dimension                    A LITTLE ABOUT THE MSYTIC MEN OF THE SIDDHA LINEAGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An ancient tradition from pre vedic times lives on', '14593277544737', 0, 0),
(181, 'One may question its present day efficacy but despite its archaicness, the knowledge imparted by the Siddha tradition remains legitimate not in one but in all dimensions of life', '14593277544737', 0, 0),
(182, 'With such long and ancient roots the knowledge is unimaginably vast, even so, something definitive shines forth so very characteristically that it is hard not to get drawn into the world of the Siddhas', '14593277544737', 0, 0),
(183, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Needless to say, ancient Traditions such as these are not so available today but in Tamil nadu, India, the  Siddha tradition in all Her entirety continues to intrigue those who seek Her out', '14593277544737', 0, 0),
(184, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Being rather mystical in nature with an unconventional demeanour, She (Siddha Tradition) has not exactly earned Herself a place amongst the more popular mainstream traditions', '14593277544737', 0, 0),
(185, 'The possible reasons could be the way the knowledge is encoded; in the form of cryptic verses', '14593277544737', 0, 0),
(186, 'It is not easy to decipher the hidden or riddled meanings and those who can are  sincere disciples of a certain Siddha lineage', '14593277544737', 0, 0),
(187, 'This could have been a large deterrent because no peripheral participation gives results', '14593277544737', 0, 0),
(188, 'Read Their scriptures in search of information and you will find none', '14593277544737', 0, 0),
(189, 'But immerse yourself in Their Ocean and the most generous wealth of knowledge unfolds from their cryptic verses', '14593277544737', 0, 0),
(190, 'Without the driving force of a Guru, a seeker most often encounters little â€“ this being a primary tenet of this tradition it is of little surprise that the tradition has not spread to the masses', '14593277544737', 0, 0),
(191, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This tenet of course rings true for those who aspire discipleship', '14593277544737', 0, 0),
(192, 'It is not to say that the benefits of knowledge are withheld from mankind', '14593277544737', 0, 0),
(193, 'The entire wisdom encoded is devoted to the well being of mankind, but it is unfortunate that the masters who can impart this truth and knowledge are a dwindling few', '14593277544737', 0, 0),
(194, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The word Siddha is pronounced in Tamil as Chittar and the root word being chit, means  consciousness, which means, Siddhas are beings who realised Consciousness at its Absolute level as well as at its embodied state and are living established in it', '14593277544737', 0, 0),
(195, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Much later, They wrote and recorded scores of manuscripts divulging the bare essentials as well as the pinnacles of every facet of life and livingness', '14593277544737', 0, 0),
(196, 'They wrote of medicines and poisons, they wrote of death and immortality, they wrote of spiritual wealth and powers as well as its dark pitfalls and more', '14593277544737', 0, 0),
(197, 'Thus came to be the many dimensions that flourish as the presently known Siddha Tradition - Medicine, Healing, martial art, Yoga, Tantra, Occult, Alchemy, Astronomy, Astrology, etc', '14593277544737', 0, 0),
(198, 'are a few of its dimensions', '14593277544737', 0, 0),
(199, 'HEALING SIDDHAS  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here I primarily speak of Their Healing dimension', '14593277544737', 0, 0),
(200, 'This branch expounds various applications of healing ranging from medicinal preparations, bone settings, massage therapy, vital point applications and the tantric mode of healing etc', '14593277544737', 0, 0),
(201, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the eyes of the Siddhas, like a tree, Man has his origin in space and rooting in earth', '14593277544737', 0, 0),
(202, 'The intermediate three elements of air, fire and water are what compose all living beings', '14593277544737', 0, 0),
(203, 'Based on this tenet the Siddhas used herbs and plants (resonating the principle of polar connectivity), the metals found in the earth and the minerals from the intermediate region and designed the vast Siddha medicinal system', '14593277544737', 0, 0),
(204, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddha system is primarily a spiritual one and all the knowledge has been born from divine communion such as yogic visions etc', '14593277544737', 0, 0),
(205, 'Through spiritual practices they experienced  and examined Natures laws such as the cosmic gravitational energy field , global energy field and the descending cosmic energy field', '14593277544737', 0, 0),
(206, 'According to these patterns, intersections and synergistic effects, They formulated the ancient science of Siddha Varma or vital point therapy', '14593277544737', 0, 0),
(207, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As this system principally began on a Guru disciple status, even today each Siddha healer stems from the wisdom and style of his lineage, characterising his way of treatment, choice of medicines and the knowledge and application of Varma treatment', '14593277544737', 0, 0),
(208, 'One could in a moment of conjecture wonder if the tenet of Guru-discipleship kept the possibility of standardising the concepts of medicine and healing, at bay', '14593277544737', 0, 0),
(209, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal , from his own experience says , â€œlearning from many sources is like accumulating data, but learning from a single Master is a way of transforming oneself and acts as a ground from which we can understand everything in it and around', '14593277544737', 0, 0),
(210, 'â€\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, even though this medicinal system belongs to an archaic tradition, primitivity has no depreciating influence on the knowledge it propounds', '14593277544737', 0, 0),
(211, 'In fact They have answers for what the world is currently grappling with; genetic conditions and fatal diseases', '14593277544737', 0, 0),
(212, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Also, the Siddha tradition is the only healing tradition in the history of mankind to have found and recorded the total number of disease that can ever effect humanity', '14593277544737', 0, 0),
(213, 'The scriptures and manuscripts propose and name the possibility of 4448 types of disease and state that nothing more than that can/will ever occur', '14593277544737', 0, 0),
(214, 'Interestingly, many of the diseases mentioned in the scriptures have not yet been found by medical science or other conventional medical fields', '14593277544737', 0, 0),
(215, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is a path of miracles', '14593277544737', 0, 0),
(216, 'In mere excitement if you attach yourself to it, you stagnate; but inspired by Them to move ahead, They turn into stepping stones', '14593277544737', 0, 0),
(217, 'A persons vasana is what determines how one relates to it and whether he walks this path towards the Ultimate or remains in search of his own projection', '14593277544737', 0, 0),
(218, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The many potentials of the Siddha healing dimension can be read of in the book Siddha masters of the basics', '14593277544737', 0, 0),
(219, 'products \r\n                                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277544737', 0, 0),
(220, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us               	 		                                                           Related Links                    For USA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Steve Grissom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;varmahealing', '14593277543197', 0, 0),
(221, 'com \r\n  For Europe and Lebanon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Samer Sayyed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;siddhavarmahealing', '14593277543197', 0, 0),
(222, 'com\r\n  For Denmark &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caroline Jensen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caroline-Jensen', '14593277543197', 0, 0),
(223, 'com \r\n  For Hungary &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Borbola \r\n \r\n  For Tamil Nadu, Madurai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr', '14593277543197', 0, 0),
(224, 'Jothikumar (M', '14593277543197', 0, 0),
(225, 'D) (Siddha) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:0452 â€“ 2539969 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Saravanan		(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+91&nbsp;9362706564 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Rajasekaran	(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919842329442 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Raguram		(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919843320615 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Shanmugam	(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919994425698 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Ganesan		(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919362123379 \r\n   \r\n                                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277543197', 0, 0),
(226, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 					 		             			     		             About us             Contact us               	 		                                      About us \r\n    Thiru Annamalai, the Mountain of Light dispels darkness of the soul, the ignorance', '14593277542716', 0, 0),
(227, 'THE PRIMAL SIDDHA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lord Siva presides here in the temple town of Tiruvannamalai, Tamil nadu, India in the form of Holy Mount Arunachala', '14593277542716', 0, 0),
(228, 'Ancient stories and enlightened Rishis sing praises of Mount Arunachala and extol that it is Lord Siva Himself in the form of a Siddha; The Primal Siddha', '14593277542716', 0, 0),
(229, 'People from all over the world flock here to circumabulate and worship this Holy Hill', '14593277542716', 0, 0),
(230, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the ancient times more than 10 â€“ 14000 years ago, a clan of mystic sages performed intense sadhana and attained the established state, or Siddhahood; the state of Immortality', '14593277542716', 0, 0),
(231, 'These Sages began the Siddha Lineage or the Siddha Tradition otherwise known as the 18 Siddha Tradition', '14593277542716', 0, 0),
(232, 'These mystics were rather contrasting from the other spiritualists prevailing back then and were labelled rebels or non-conformists as caste, creed, culture and other social criteria were meaningless to them', '14593277542716', 0, 0),
(233, 'Largely a spiritual science providing the way to immortality for those who aspire such heights, this tradition also has several other dimensions such as Siddha Medicine, Yoga, Tantra etc', '14593277542716', 0, 0),
(234, 'THE SIDDHAS OF TIRUVANNAMALAI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enlightened Masters from various paths live here in Tiruvannamalai', '14593277542716', 0, 0),
(235, 'Bhagavan Ramana Maharishi, Bhagavan Sheshadri Swami, Bhagavan Yogiramsuratkumar, Ishanya Desikar Swami, Adi Mudi Siddhar are some of the many blossoms of this Holy Hill', '14593277542716', 0, 0),
(236, 'ABOUT HEALER PAL and THE SIDDHA TRADTION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal, whilst in his school years, driven by an identity neurosis , was in search of answers', '14593277542716', 0, 0),
(237, 'At the age of 19, in his home town, Madurai, at thirukoodal mountain, the place where Macchamuni Siddha and Kagabusundar Siddha performed Tapas, he met is first teacher, a Siddha vaidyar swami, Balamurugananda', '14593277542716', 0, 0),
(238, 'This was the beginning of the changes to come', '14593277542716', 0, 0),
(239, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Still not able to contain his crisis, he wandered', '14593277542716', 0, 0),
(240, 'Two days prior to leaving for the Himalayas, he heard of the spiritual salvation from suffering bestowed by the Holy Hill Arunachala', '14593277542716', 0, 0),
(241, 'He spent the next few months in the caves of holly hill Arunachala', '14593277542716', 0, 0),
(242, 'There he received instructions to further his journey', '14593277542716', 0, 0),
(243, 'He was told to return to Madurai and follow in the path of the Siddhas', '14593277542716', 0, 0),
(244, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Living in Madurai, he travelled and visited many Siddha swamijis throughout Tamil nadu', '14593277542716', 0, 0),
(245, 'Staying with them, he learnt the ancient Siddha art and science of Siddha Medicine, Varmam, Occultism, Tantra and Alchemy', '14593277542716', 0, 0),
(246, 'During this phase he also had the indescribable Darshan of his Sat Guru', '14593277542716', 0, 0),
(247, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One teacher of immeasurable value that flooded his life is his Varmam and Medicinal Master Chandrasekhar Swami', '14593277542716', 0, 0),
(248, 'Swami lived alone with his disciples and prepared his own medicines', '14593277542716', 0, 0),
(249, 'He gave medicinal treatment and Varma healing free of cost to all those who came to him', '14593277542716', 0, 0);
INSERT INTO `sentance` (`sno`, `sentances`, `link_id`, `USER1finished`, `ID1finished`) VALUES
(250, 'Chandrasekhar Swami is the 9th descendant of His healing lineage and before attaining MahaSamadhi, Swami ordained Healer Pal as His next, from a group of 16 disciples', '14593277542716', 0, 0),
(251, 'From this moment on Healer Pal has been honouring that ordainment', '14593277542716', 0, 0),
(252, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal spent the next few years treating people with medicines as well as Varma healing', '14593277542716', 0, 0),
(253, 'According to his lineage, he too has conformed to the mode of free treatment', '14593277542716', 0, 0),
(254, 'After starting his healing journey in Madurai and its surrounding areas he eventually settled in Tiruvannamalai', '14593277542716', 0, 0),
(255, 'It is now 16 years since', '14593277542716', 0, 0),
(256, 'He continues giving medicinal treatments and Varmam therapy as well as spiritual healing to all who come to him', '14593277542716', 0, 0),
(257, 'People from all around the world have come for treatments and/or guidance', '14593277542716', 0, 0),
(258, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Even though he meets with many difficulties and hurdles along the way, he continues his Masters lineage', '14593277542716', 0, 0),
(259, '8 years ago he began teaching the path of Siddha Vaidya (Siddha medicine)', '14593277542716', 0, 0),
(260, 'To teach the very valuable and secretly guarded Siddha Varma science he accepted only a chosen few as his students according to the principles of his lineage', '14593277542716', 0, 0),
(261, '(Siddhabooks)  He has also initiated a selected few for sharing the spiritual insights of his lineage', '14593277542716', 0, 0),
(262, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He has also authored and published a 600 page book â€œSiddhas, Masters of the Basicsâ€, expounding all the dimensions of the Siddha tradition by way of his personal experiences and the revelations received by way of his personal sadhana', '14593277542716', 0, 0),
(263, 'Products\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recently, he has conducted 6 month Siddha Medicine and basic Varma courses for the academic Siddha doctors , practising in private clinics as well as government hospital doctors, here in Tamil Nadu', '14593277542716', 0, 0),
(264, 'He has also conducted a few workshops for IT industry employees as well as members of old age homes about health and day to day lifestyle choices', '14593277542716', 0, 0),
(265, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inspired by the insights of his healing experience and continued teachings of his Lineage Masters and the Holy Hill Arunachala, Pal systematised a wholistic therapeutic approach he names&nbsp;&nbsp;Vasi therapy\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Under Vasi therapy he follows three approaches or methods to work with the primal vital flow or energy in our body â€“ at the gross body level(Varma Therapy) at the intermediary level (Kalari Therapuetics)and thirdly at the primal state of our body, the causal level  (Amritha kalai)', '14593277542716', 0, 0),
(266, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspAs he is currently active in sharing the Siddhas spiritual teachings, the healing treatments have been contained only for children of special needs and genetic conditions', '14593277542716', 0, 0),
(267, 'activities \r\n\r\n                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277542716', 0, 0),
(268, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us               	 		                                                           Contact Us                    Email us at : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vasitherapy@gmail', '1459327754927', 0, 0),
(269, 'com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sivavidya2015@gmail', '1459327754927', 0, 0),
(270, 'com \r\n   \r\n                                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '1459327754927', 0, 0),
(271, 'Healing Siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us              	 		Content', '14593277541757', 0, 0),
(272, 'This is to be updated', '14593277541757', 0, 0),
(273, 'Content1 				This is to be updated', '14593277541757', 0, 0),
(274, 'Content2 				This is to be updated', '14593277541757', 0, 0),
(275, 'Content3 				This is to be updated', '14593277541757', 0, 0),
(276, '&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277541757', 0, 0),
(277, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 					 		     			     		             About us             Contact us                 	  		                                                                  Vasi Therapy                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Human being is a part of Nature, and SHE (Nature) organises every moment of livingness in every human being', '1459327754546', 0, 0),
(278, 'This way, say the Siddhas, that man is part of the macrocosm and he himself its microcosm', '1459327754546', 0, 0),
(279, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is out there is equally in here', '1459327754546', 0, 0),
(280, 'In which case, if the macrocosm never gets sick or dies then why do we', '1459327754546', 0, 0),
(281, 'This is the question Healer Pal asked himself for years', '1459327754546', 0, 0),
(282, 'The answer awaited hidden within his healing journey and personal sadhana; which ultimately amalgamated as his own healing style which he names Vasi Therapy', '1459327754546', 0, 0),
(283, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddha tradition repeatedly teaches that man is no different from the grand cosmos and the rules that apply out there, apply within too, which is why in Siddha healing both levels of existence are considered; the individual level as well as the transcendental as we are always in connect with it', '1459327754546', 0, 0),
(284, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contrary to this wholistic approach, most conventional medical systems use a specialised approach in diagnosis and treatment', '1459327754546', 0, 0),
(285, 'In case of hepatitis â€“ the liver is treated; it is a specialised approach', '1459327754546', 0, 0),
(286, 'But the Siddha system holds a larger perspective for the same case', '1459327754546', 0, 0),
(287, 'Along with medicine, a seasonal diet and lifestyle changes are required for a lasting complete cure', '1459327754546', 0, 0),
(288, 'The connect between us and our surrounding (the cosmos) is indomitable', '1459327754546', 0, 0),
(289, 'VASI THERAPY   Whenever treatment is given based on the wholistic principles rather than the obvious symptoms, the results are self explanatory', '1459327754546', 0, 0),
(290, '"Imagine yourself as a house with several rooms and both a front and a back door', '1459327754546', 0, 0),
(291, 'To clean the rooms you can either enter through the Front or the back door', '1459327754546', 0, 0),
(292, 'The front door (the obvious or visible one) is the temporal, ephemeral or tangible and represents our physical body', '1459327754546', 0, 0),
(293, 'The back door, the more discreet one, represents an intangible or subtle entrance into our deep and potent connect with the Transcendental', '1459327754546', 0, 0),
(294, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The different modes of Vasi Therapy revolve around these approaches of access', '1459327754546', 0, 0),
(295, 'The approach from the gross body level is called Varma therapy and from the causal level is called Amritha Kalai', '1459327754546', 0, 0),
(296, 'Whilst employing different accesses, he systemically treats the common thread that integrates Health within us', '1459327754546', 0, 0),
(297, 'The 3 methods', '1459327754546', 0, 0),
(298, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Varma Therapy(vital point therapy) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalari Therapeutics(alignment)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amritha Kalai (higher dimension of Vasi therapy)</ul>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Varma therapy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Varma points are locations on the body having access to the vital flow (of subtler body sheaths) and are materially undetectable', '1459327754546', 0, 0),
(299, 'Varmams are connects between the physical and subtle body and can be applied for internal diseases as well as injury', '1459327754546', 0, 0),
(300, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalari therapeutics    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This mode of treatment is for the intermediary sheath and facilitates re-alignment at various levels', '1459327754546', 0, 0),
(301, 'It involves gentle touch and/ or massage', '1459327754546', 0, 0),
(302, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amritha kalai therapy    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is the highest dimension of Vasi therapy and allows the person to reclaim his connection to his transcendental aspect for deep rooted healing', '1459327754546', 0, 0),
(303, 'See more', '1459327754546', 0, 0),
(304, '</p>\r\n </p>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siddhas fundamental perspective\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas see the human form as a multi sheathed inter woven organism with its origin in the sky (Ether element) and its rooting within the Earth (Earth element)', '1459327754546', 0, 0),
(305, 'The remaining three primary elements (air, fire and water) are what compose the intermediate form, the human body', '1459327754546', 0, 0),
(306, 'We are more than just the frame of our physical body', '1459327754546', 0, 0),
(307, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The origin, the Siddhas name in their manuscripts as, Thiru Vasi', '1459327754546', 0, 0),
(308, '(Each ancient tradition has its own name for it)', '1459327754546', 0, 0),
(309, 'Thiru Vasi remains as our source of livingness throughout our lifespan', '1459327754546', 0, 0),
(310, 'Once it withdraws we die', '1459327754546', 0, 0),
(311, 'The Siddhas revere Thiru Vasi as the flawless cosmic blueprint of all creation, sustenance and dissolution', '1459327754546', 0, 0),
(312, 'The rhythmically breathing Thiru Vasi enfolds space which gives birth to form', '1459327754546', 0, 0),
(313, 'This process of enfoldment can be easily identified in the early stages of a human embryo', '1459327754546', 0, 0),
(314, 'To put it very simply, the very breath (inhalation and exhalation) of this Primary Source is what gives forth all forms, cradles it and dissolves it as well', '1459327754546', 0, 0),
(315, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No form exists independent of Thiruvasi', '1459327754546', 0, 0),
(316, 'as the macro so the micro', '1459327754546', 0, 0),
(317, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thiru Vasi exists even on an individual level', '1459327754546', 0, 0),
(318, 'The Siddhas name it Vasi', '1459327754546', 0, 0),
(319, 'Vasi is the guarding intelligence / energy that provides the fuel of core livingness by its inherent rhythmic breath and connectivity with its grander counterpart, Thiru Vasi', '1459327754546', 0, 0),
(320, 'In the Siddha tradition, Vasi is of great spiritual importance', '1459327754546', 0, 0),
(321, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vasi, from its pulsating core spurts a fountain of fuel, bringing us to life and provides for  involuntary functions such as breathing, digestion, blood circulation, assimilation, even blinking and a host of other survival gestures', '1459327754546', 0, 0),
(322, 'These are existential essentials', '1459327754546', 0, 0),
(323, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to walk, run, see, feel, think and have urges and desires, which demand more energy, we contribute to this primal fuel through our breath and by eating, drinking', '1459327754546', 0, 0),
(324, 'This combined fuel or energy supply allows for an organised and meaningful life', '1459327754546', 0, 0),
(325, 'The 5 bodies we are', '1459327754546', 0, 0),
(326, 'The Siddhas describe 5 sheaths in the human form', '1459327754546', 0, 0),
(327, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Food Sheath or Gross body', '1459327754546', 0, 0),
(328, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pranic body or Vital-air Sheath', '1459327754546', 0, 0),
(329, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mental Sheath (Manomaya Kosam)', '1459327754546', 0, 0),
(330, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intellectual Sheath (Vigyanmaya Kosam)', '1459327754546', 0, 0),
(331, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bliss Sheath (Anandamaya Kosa)</ul> \r\n\r\n            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The same vital energy flows through all five sheaths keeping them interrelated by way of Nadis or a network of channels that carry this rippling energy to its destined locations for internal bodily processes to take place', '1459327754546', 0, 0),
(332, 'VARMAMS    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At its core actual Vasi energy, like its grander counterpart, is bland in nature (no specific attributes are active)', '1459327754546', 0, 0),
(333, 'For complex physiological and motor functions this energy is transmuted at predetermined locations called Varmams and then distributed to the destined region', '1459327754546', 0, 0),
(334, 'The Siddhas describe more than 800 Varmams (Vital points) each performing a distinctive activity in synch with others', '1459327754546', 0, 0),
(335, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To summarise the above', '1459327754546', 0, 0),
(336, 'The Siddhas liken the human form to a tree, whose origin is from the sky and rooting is to the earth below', '1459327754546', 0, 0),
(337, 'we can see that the micro form of Thiruvasi exists within our body as Vasi', '1459327754546', 0, 0),
(338, 'Vital energy ripples through the Nadis and is being transmuted to fit the purpose at junctures called Varmams', '1459327754546', 0, 0),
(339, 'How is this relevant in terms of health and disease', '1459327754546', 0, 0),
(340, 'Disease is either a deviation of the vital flow or a malfunction of one or multiple varmams; this instantly influences the health across all five sheaths in the human organism', '1459327754546', 0, 0),
(341, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Treatment aims to return the vital flow to its intended manner and encourage the varmams to perform their vital functions', '1459327754546', 0, 0),
(342, 'Read Less', '1459327754546', 0, 0),
(343, 'Â© 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '1459327754546', 0, 0),
(344, 'Healing siddhas                   	  		Healing Siddhas  	    	  		  			  		  		  			  				Home  				Vasi Therapy                  Healer Pal  				Healing Dimensions   				Activities                  Articles                  Products                  Related Links  			  		  	    	  		  			  			  			  			  			  		PrevNext12345                  			        		              About us              Contact us                    	  		                                                                  Herbo-Mineral dimension of the Siddha clan                           Introduction         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas repertoire of herbs is filled with millions of single and combined formulations for all types of disorders', '14593277547460', 0, 0),
(345, 'Each Siddha describes hundreds of remedies for each disease', '14593277547460', 0, 0),
(346, 'The challenge faced by present day Siddha practitioners is just that â€“ the colossal nature of information and possibilities leaves them perplexed in their ability to select the right one', '14593277547460', 0, 0),
(347, 'It is the experience carried by the lineage that guides one through the maze of possibilities and supports your healing platform in a consistent manner', '14593277547460', 0, 0),
(348, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal has worked intensively in this dimension for over 20 years', '14593277547460', 0, 0),
(349, 'He prepares his own medicines using formulations belonging to his lineage; which are not known or shared with modern day medicinal manufacturers, pharmacies or even other Siddha practitioners', '14593277547460', 0, 0),
(350, 'These formulations are prepared strictly by traditional methods and the raw materials or herbs are procured from secluded regions or mountains according to the instructions of his teachers', '14593277547460', 0, 0),
(351, 'A glimpse of the early days  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More than 10,000 years ago a clan of Medicinal mavericks, the Siddhas, led by spiritually-oriented minds, dug deep into the secrets of Nature', '14593277547460', 0, 0),
(352, 'Systematically they categorised the Plant kingdom, the animal kingdom and the mineral world and examined the medicinal/ poisonous properties of each', '14593277547460', 0, 0),
(353, 'This amounted to the birth of the Herbo-Mineral Branch of the Siddha System', '14593277547460', 0, 0),
(354, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Herbo â€“ Mineral branch of this ancient tradition speaks of :  	the nature of Herbs, Minerals, Metals;  	their inherent qualities, behaviours, potencies, tendencies;  	how they influence each other', '14593277547460', 0, 0),
(355, 'the change in qualities caused by different geographic locations, climate and soil', '14593277547460', 0, 0),
(356, 'the medicinal / poisonous aspects of each  	the modes of preparations etc', '14593277547460', 0, 0),
(357, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Their tried and tested formulates were encoded into a vast materia medica in the form of verse and song', '14593277547460', 0, 0),
(358, '', '14593277547460', 0, 0),
(359, 'This opened up a rather challenging mystery â€“ death, which they diligently set about to resolve and realise', '14593277547460', 0, 0),
(360, 'This is their dimension of the Science of Immortality which primarily deals with alchemising the human body to a state of deathlessness â€“ the pinnacle of spiritual supremacy', '14593277547460', 0, 0),
(361, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Herbo-Mineral branch and the Kaya Kalpa dimension are entwined together as the first one deals with curing the body of diseases and the latter deems to cure the body of death itself', '14593277547460', 0, 0),
(362, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas endeavoured to test out the boundaries of mortality', '14593277547460', 0, 0),
(363, 'The exploration of being free of disease and free of death haunted their meditations', '14593277547460', 0, 0),
(364, 'These, rather strange aspirations are the root purports of this ancient tradition which is why they were labelled high-handed rebels for after all in the eyes of the common man, who were we to question the Lord of death', '14593277547460', 0, 0),
(365, 'Consequently as the social structure grew the medicinal dimension was welcomed by common folks but the Kaya Kalpa or the science of longevity or immortality turned into a secret dimension', '14593277547460', 0, 0),
(366, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back then the cycle of birth and death according to the cosmic law of karma, the presence of a soul within our physical frame along with the astral-self, the experiencer or witness was common knowledge', '14593277547460', 0, 0),
(367, 'But what intrigued these ancient minds was that from all the 85 million living species, Man is the only one deigned the chance to strive for spiritual heights', '14593277547460', 0, 0),
(368, 'What were these spiritual heights and where did they lead', '14593277547460', 0, 0),
(369, 'The Tamil Siddhas forsake everything to find out', '14593277547460', 0, 0),
(370, 'Thus formed the hugely guarded sect of ultimate spiritual-supremacy â€“ attaining the state of deathlessness whilst living in the body', '14593277547460', 0, 0),
(371, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But here let us speak of the knowledge of herbs minerals and metals handed down by them \r\n\r\n   Why Wild herbs   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Every herb is influenced by certain factors â€“ factors which are always in a flux such as the nature of soil, the weather, the climate, the location and even the time of day', '14593277547460', 0, 0),
(372, 'In order to harness the actual properties a Siddha Vaidya would need to choose the right herb and also the right way and the apt moment to procure it from the earth, or water-body or else the herb suffers a loss in its potential which would render the medicinal value to a mediocre level', '14593277547460', 0, 0),
(373, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Therefore according to the original tenets of herbal preparations there are several details to be adhered to if one should wish to harness the maximum healing potential of a herb', '14593277547460', 0, 0),
(374, 'With advancing modern technology there has been an increase in readily available processed raw material', '14593277547460', 0, 0),
(375, 'But Healer pal, according to the instructions of his lineage prefers using wild herbs in his medicinal preparations', '14593277547460', 0, 0),
(376, 'He explains why', '14593277547460', 0, 0),
(377, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nature not only cradles foliage and fossils within Her but enters into each by way of different expressions of Herself', '14593277547460', 0, 0),
(378, 'As the Earth, She deeply churns the fossils and foliage by Her incessant rotation and She penetrates them (above and below the earth ) as the rays from the Stars', '14593277547460', 0, 0),
(379, 'This way all herbs, minerals, metals and natural chemical elements found under the earth are subject to these churning and penetrative process', '14593277547460', 0, 0),
(380, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As foliage grows, it naturally absorbs the different vibrations of minerals-and-metal energy present in and around them under the earth', '14593277547460', 0, 0),
(381, 'In other words plants have eaten and digested mineral and metallic energy and have assimilated its qualities', '14593277547460', 0, 0),
(382, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, when a patient consumes a formulation made from a well sourced wild herb he would ingest the predigested mineral and metallic qualities inherent in the wild herb', '14593277547460', 0, 0),
(383, 'This way there is no direct intake of mineral and metal â€“ only its assimilated essence which is why the appropriate organic minerals and metals can be easily assimilated by the patients body', '14593277547460', 0, 0),
(384, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another reason for preferring Wild herbs is that compared to garden or cultivated plants, Wild herbs show greater Virya, (potential) due to their inherent quality of adaptability â€“ the ability to survive the natural environmental influences and climatic changes of the wild', '14593277547460', 0, 0),
(385, 'Ironically, with the best of interest our cultivated herbs are offered optimal conditions, ideal settings etc', '14593277547460', 0, 0),
(386, 'to promote growth but this artificially induced environment inevitably takes away the plants evolutionary experience and growth in Nature â€“ the instinct of survival intelligence or adaptability', '14593277547460', 0, 0),
(387, 'Evidently Wild herbs show a wider spectrum of bio-availability', '14593277547460', 0, 0),
(388, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal uses formulations belonging to his lineage for treating chronic diseases', '14593277547460', 0, 0),
(389, 'These formulations belong to the oral lineage and are the combinations of the valuable experience of the Lineage Masters', '14593277547460', 0, 0),
(390, 'Obviously, they not available in manuscripts or known to practitioners or modern pharmacies', '14593277547460', 0, 0),
(391, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;His methods of preparation are strictly traditional right from the procuring herbs , the method of plucking, cleaning, purification procedures etc', '14593277547460', 0, 0),
(392, 'and all his formulations are hand made', '14593277547460', 0, 0),
(393, 'A word about Herbs   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The plant species used for health-care are called Mooligai (Herbs)', '14593277547460', 0, 0),
(394, 'The early discovery of all plants not having identical qualities lead them to study each and every plant extensively, which is recorded in the form of verse known as Gunapaadam (Materia Medica)', '14593277547460', 0, 0),
(395, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Most greens on earth have an essential salt content in them', '14593277547460', 0, 0),
(396, 'Since the human body secretes a good amount of salt through sweat, urine, etc', '14593277547460', 0, 0),
(397, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The vegetables are distinguished based on the qualities of the Six Tastes (Suvai)', '14593277547460', 0, 0),
(398, 'What is Suvai -  a brief outline 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas have described the prevalence of 6 tastes', '14593277547460', 0, 0),
(399, 'There is an entire branch of diagnosis and treatment based solely on the knowledge of Suvai (taste)', '14593277547460', 0, 0),
(400, 'The taste based perception of the Siddha dimension is less known and rather underestimated in its potential', '14593277547460', 0, 0),
(401, 'According to their science of Suvai, our body is built up of these 6 fundamental tastes which maintain growth, healing and function of the 6 tissues that the human form is comprised of', '14593277547460', 0, 0),
(402, 'Each of the 6 tastes are interconnected by way of a friendly and unfriendly rapport and hence are influenced by our consumption of food', '14593277547460', 0, 0),
(403, 'The food we eat contributes to the formation of the body and its tissues based on the nature of taste or flavour', '14593277547460', 0, 0),
(404, 'An increase or decrease of a certain taste will influence the formation of its relevant Thathu or tissue', '14593277547460', 0, 0),
(405, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The six tastes are :    astringent salt sweet sour bitter pungent   \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The seven tissues or building blocks of our body are: </br>   plasma blood bone fat muscle bone marrow reproductive fluid tissue    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Over and above the commonly growing greens and vegetables, the Siddhas describe the qualities and properties of types of weeds, grass and ultimately the rare and unusual herbs available only in forests regions', '14593277547460', 0, 0),
(406, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They distinguished a list of herbs that can be preserved in its dehydrated form (Kadai sarakku-64) for off-season use and/or for use in far of locations', '14593277547460', 0, 0),
(407, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The herbal formulations can be prepared in 7 fundamental forms', '14593277547460', 0, 0),
(408, 'herbal powder (podi), herbal decoction (kashaayam),  herbo-vapour (Vedhu), herbal-smoke (pugai), dry-herbs (vatral),  herbal cake (vadagam), medicated-oil (thailam), etc', '14593277547460', 0, 0),
(409, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They have introduced 32+32 internal and external forms of medicaments using all their curative knowledge (including minor surgery needed in their time)', '14593277547460', 0, 0),
(410, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During their exploration the discovered unusual herbs with properties that prolong the existence of the physical form', '14593277547460', 0, 0),
(411, 'These were enlisted into their Kaya Kalpa dimension They have enlisted a number of plant species that can be used as karpams', '14593277547460', 0, 0),
(412, 'Each herb was ascribed a descriptive name â€“ pointing to its predominant property', '14593277547460', 0, 0),
(413, 'Some unusual names in their list are', '14593277547460', 0, 0),
(414, 'Lustrous grass (Jodhi pull), Weeping herb (Azukanni),             Worshipping herb (Thozhukanni), Blinking herb (Nethram simitti), life-saver-herb (Sanjeevi mooligai),  shadow less tree (Saya virutcham), Hairy-tree (Roma virutcham),  Lustrous Tree (Jodhi virutcham),  Silent Tree (Dhoniya Maram) and  medicinal trees with milky sap (Aachchaa, Erumaisunai, Mundaga maram, etc', '14593277547460', 0, 0),
(415, ')', '14593277547460', 0, 0),
(416, 'Climbing tree (yer azhingil)   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Those herbs that demonstrated the ability to influence certain metals were put to use in the preparation of metallic formulations where certain metals could be incinerated to a state of medicinal ash (Parpam)', '14593277547460', 0, 0),
(417, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They had discovered herbs that store certain potential factors of some metals or minerals within', '14593277547460', 0, 0),
(418, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Herbs that expressed esoteric properties were included in their occult dimension', '14593277547460', 0, 0),
(419, 'Anupanam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A rather salient feature of the Siddha tradition is their choices of Anupanam', '14593277547460', 0, 0),
(420, 'Anupanam is a liquid or solid substance taken along with the actual medicine and acts as its carrier', '14593277547460', 0, 0),
(421, 'Essentially, an Anupanam improves the medicinal values of a medicine, reduces its side-effects or controls the reversing or reactive factors in our body', '14593277547460', 0, 0),
(422, 'Each vaidyar (Medicinal Healer) by way of the experience of his Lineage as well as his own, develops a mature perception of how a medicine can be enhanced just by way of opting for the right carrier', '14593277547460', 0, 0),
(423, 'Two vaidyars prescribing the same medicine or herb would vary in their of Anupanam which could influence the quality as well as the duration of healing', '14593277547460', 0, 0),
(424, 'Herbo-Mineral and Metals \r\n Minerals  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddhas reveal 32 Upa Rasas, which means there are 32 natural minerals on earth and the Siddha Varma system speaks of 32 internal organs in the human body', '14593277547460', 0, 0),
(425, 'Moreover , the energy emanating from the 27 stars ( constellations )  also participates in the formations of these 32 natural minerals', '14593277547460', 0, 0),
(426, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal strongly reiterates that before using any of the 32 natural minerals the procedures of purification are to be adhered strictly to according to lineage style', '14593277547460', 0, 0),
(427, 'Metals   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siddha Bogar in his monumental work Bogar SaptKandam 7000 verses, describes how each metal is formed under the earth', '14593277547460', 0, 0),
(428, 'There are 9 natural single metals on earth', '14593277547460', 0, 0),
(429, 'Each metal signifies the vibration of one planet', '14593277547460', 0, 0),
(430, 'All 9 metals are used in Siddhas formulations since ancient times which admirably states how advanced and innovative their preparations were to be able to alchemize the poisonous aspect of a metal and turn it into an assimilable form', '14593277547460', 0, 0),
(431, 'Metals in the human body', '14593277547460', 0, 0),
(432, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;These metals are the building blocks of human tissue', '14593277547460', 0, 0),
(433, 'If a metal, perfectly purified, administered in the right dosage can cure everything ranging from chronic to fatal diseases - without any side effect', '14593277547460', 0, 0),
(434, 'If this system was widely accepted and used it would eradicate the numerous side effects that are currently being suffered and willingly tolerated by patients of the allopathic method', '14593277547460', 0, 0),
(435, 'So, what then could be the hitch', '14593277547460', 0, 0),
(436, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The purifications and preparations processes are not standardised', '14593277547460', 0, 0),
(437, 'In other words, there are more than one ways of purification and incineration of metals and this varies from Vaidya to Vaidya based on the experience of their lineage', '14593277547460', 0, 0),
(438, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Even so, the value of organic metal formulation is immeasurable', '14593277547460', 0, 0),
(439, 'There are seven tissues that constitute the matrix of the human body', '14593277547460', 0, 0),
(440, 'The nourishment of cells, tissues and intracellular binding which is called Ojas, entirely depends upon organic metal formulations', '14593277547460', 0, 0),
(441, 'Behind the scenes    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The secret behind different formulations of a single metal or mineral is based on changing its inherent elemental nature to another', '14593277547460', 0, 0),
(442, 'For instance Iron is predominantly constituted of the air element but this can be changed by certain ways of grinding, by combining specific herbs or distilled alchemical tinctures', '14593277547460', 0, 0),
(443, 'These processes are applied to change the existing air element into any one of the remaining 4', '14593277547460', 0, 0),
(444, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; what would be the purpose of this', '14593277547460', 0, 0),
(445, 'By changing its elemental tendency to our intended one we can direct it to different layers or tissues of the body according to the illness being treated', '14593277547460', 0, 0),
(446, 'So, the same metal would act upon different layers according to the elemental nature introduced into it by way of the prescribed processes', '14593277547460', 0, 0),
(447, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Siddhas pharmacopoeia has a wide range of forms of medicines such as medicated oil (thailam), Satha (extract), Vadineer (distilled tincture), Chunnam (calcified state of a substance), Patru (paste), etc', '14593277547460', 0, 0),
(448, 'A person needs to have a good amount of experience to prepare a substance into a traditional form of medicine', '14593277547460', 0, 0),
(449, 'Â© 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate  	          </div>', '14593277547460', 0, 0),
(450, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us               	 		                                                           Healing dimension                    A LITTLE ABOUT THE MSYTIC MEN OF THE SIDDHA LINEAGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An ancient tradition from pre vedic times lives on', '14593277544737', 0, 0),
(451, 'One may question its present day efficacy but despite its archaicness, the knowledge imparted by the Siddha tradition remains legitimate not in one but in all dimensions of life', '14593277544737', 0, 0),
(452, 'With such long and ancient roots the knowledge is unimaginably vast, even so, something definitive shines forth so very characteristically that it is hard not to get drawn into the world of the Siddhas', '14593277544737', 0, 0),
(453, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Needless to say, ancient Traditions such as these are not so available today but in Tamil nadu, India, the  Siddha tradition in all Her entirety continues to intrigue those who seek Her out', '14593277544737', 0, 0),
(454, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Being rather mystical in nature with an unconventional demeanour, She (Siddha Tradition) has not exactly earned Herself a place amongst the more popular mainstream traditions', '14593277544737', 0, 0),
(455, 'The possible reasons could be the way the knowledge is encoded; in the form of cryptic verses', '14593277544737', 0, 0),
(456, 'It is not easy to decipher the hidden or riddled meanings and those who can are  sincere disciples of a certain Siddha lineage', '14593277544737', 0, 0),
(457, 'This could have been a large deterrent because no peripheral participation gives results', '14593277544737', 0, 0),
(458, 'Read Their scriptures in search of information and you will find none', '14593277544737', 0, 0),
(459, 'But immerse yourself in Their Ocean and the most generous wealth of knowledge unfolds from their cryptic verses', '14593277544737', 0, 0),
(460, 'Without the driving force of a Guru, a seeker most often encounters little â€“ this being a primary tenet of this tradition it is of little surprise that the tradition has not spread to the masses', '14593277544737', 0, 0),
(461, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This tenet of course rings true for those who aspire discipleship', '14593277544737', 0, 0),
(462, 'It is not to say that the benefits of knowledge are withheld from mankind', '14593277544737', 0, 0),
(463, 'The entire wisdom encoded is devoted to the well being of mankind, but it is unfortunate that the masters who can impart this truth and knowledge are a dwindling few', '14593277544737', 0, 0),
(464, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The word Siddha is pronounced in Tamil as Chittar and the root word being chit, means  consciousness, which means, Siddhas are beings who realised Consciousness at its Absolute level as well as at its embodied state and are living established in it', '14593277544737', 0, 0),
(465, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Much later, They wrote and recorded scores of manuscripts divulging the bare essentials as well as the pinnacles of every facet of life and livingness', '14593277544737', 0, 0),
(466, 'They wrote of medicines and poisons, they wrote of death and immortality, they wrote of spiritual wealth and powers as well as its dark pitfalls and more', '14593277544737', 0, 0),
(467, 'Thus came to be the many dimensions that flourish as the presently known Siddha Tradition - Medicine, Healing, martial art, Yoga, Tantra, Occult, Alchemy, Astronomy, Astrology, etc', '14593277544737', 0, 0),
(468, 'are a few of its dimensions', '14593277544737', 0, 0),
(469, 'HEALING SIDDHAS  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here I primarily speak of Their Healing dimension', '14593277544737', 0, 0),
(470, 'This branch expounds various applications of healing ranging from medicinal preparations, bone settings, massage therapy, vital point applications and the tantric mode of healing etc', '14593277544737', 0, 0),
(471, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the eyes of the Siddhas, like a tree, Man has his origin in space and rooting in earth', '14593277544737', 0, 0),
(472, 'The intermediate three elements of air, fire and water are what compose all living beings', '14593277544737', 0, 0),
(473, 'Based on this tenet the Siddhas used herbs and plants (resonating the principle of polar connectivity), the metals found in the earth and the minerals from the intermediate region and designed the vast Siddha medicinal system', '14593277544737', 0, 0),
(474, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Siddha system is primarily a spiritual one and all the knowledge has been born from divine communion such as yogic visions etc', '14593277544737', 0, 0),
(475, 'Through spiritual practices they experienced  and examined Natures laws such as the cosmic gravitational energy field , global energy field and the descending cosmic energy field', '14593277544737', 0, 0),
(476, 'According to these patterns, intersections and synergistic effects, They formulated the ancient science of Siddha Varma or vital point therapy', '14593277544737', 0, 0),
(477, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As this system principally began on a Guru disciple status, even today each Siddha healer stems from the wisdom and style of his lineage, characterising his way of treatment, choice of medicines and the knowledge and application of Varma treatment', '14593277544737', 0, 0),
(478, 'One could in a moment of conjecture wonder if the tenet of Guru-discipleship kept the possibility of standardising the concepts of medicine and healing, at bay', '14593277544737', 0, 0),
(479, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal , from his own experience says , â€œlearning from many sources is like accumulating data, but learning from a single Master is a way of transforming oneself and acts as a ground from which we can understand everything in it and around', '14593277544737', 0, 0),
(480, 'â€\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, even though this medicinal system belongs to an archaic tradition, primitivity has no depreciating influence on the knowledge it propounds', '14593277544737', 0, 0),
(481, 'In fact They have answers for what the world is currently grappling with; genetic conditions and fatal diseases', '14593277544737', 0, 0),
(482, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Also, the Siddha tradition is the only healing tradition in the history of mankind to have found and recorded the total number of disease that can ever effect humanity', '14593277544737', 0, 0),
(483, 'The scriptures and manuscripts propose and name the possibility of 4448 types of disease and state that nothing more than that can/will ever occur', '14593277544737', 0, 0),
(484, 'Interestingly, many of the diseases mentioned in the scriptures have not yet been found by medical science or other conventional medical fields', '14593277544737', 0, 0),
(485, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is a path of miracles', '14593277544737', 0, 0),
(486, 'In mere excitement if you attach yourself to it, you stagnate; but inspired by Them to move ahead, They turn into stepping stones', '14593277544737', 0, 0),
(487, 'A persons vasana is what determines how one relates to it and whether he walks this path towards the Ultimate or remains in search of his own projection', '14593277544737', 0, 0),
(488, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The many potentials of the Siddha healing dimension can be read of in the book Siddha masters of the basics', '14593277544737', 0, 0),
(489, 'products \r\n                                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277544737', 0, 0),
(490, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us               	 		                                                           Related Links                    For USA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Steve Grissom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;varmahealing', '14593277543197', 0, 0),
(491, 'com \r\n  For Europe and Lebanon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Samer Sayyed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;siddhavarmahealing', '14593277543197', 0, 0),
(492, 'com\r\n  For Denmark &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caroline Jensen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caroline-Jensen', '14593277543197', 0, 0),
(493, 'com \r\n  For Hungary &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Borbola \r\n \r\n  For Tamil Nadu, Madurai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr', '14593277543197', 0, 0),
(494, 'Jothikumar (M', '14593277543197', 0, 0);
INSERT INTO `sentance` (`sno`, `sentances`, `link_id`, `USER1finished`, `ID1finished`) VALUES
(495, 'D) (Siddha) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:0452 â€“ 2539969 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Saravanan		(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+91&nbsp;9362706564 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Rajasekaran	(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919842329442 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Raguram		(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919843320615 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Shanmugam	(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919994425698 \r\n \r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vaidyar Ganesan		(Varmam) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contact no:+919362123379 \r\n   \r\n                                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277543197', 0, 0),
(496, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 					 		             			     		             About us             Contact us               	 		                                      About us \r\n    Thiru Annamalai, the Mountain of Light dispels darkness of the soul, the ignorance', '14593277542716', 0, 0),
(497, 'THE PRIMAL SIDDHA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lord Siva presides here in the temple town of Tiruvannamalai, Tamil nadu, India in the form of Holy Mount Arunachala', '14593277542716', 0, 0),
(498, 'Ancient stories and enlightened Rishis sing praises of Mount Arunachala and extol that it is Lord Siva Himself in the form of a Siddha; The Primal Siddha', '14593277542716', 0, 0),
(499, 'People from all over the world flock here to circumabulate and worship this Holy Hill', '14593277542716', 0, 0),
(500, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the ancient times more than 10 â€“ 14000 years ago, a clan of mystic sages performed intense sadhana and attained the established state, or Siddhahood; the state of Immortality', '14593277542716', 0, 0),
(501, 'These Sages began the Siddha Lineage or the Siddha Tradition otherwise known as the 18 Siddha Tradition', '14593277542716', 0, 0),
(502, 'These mystics were rather contrasting from the other spiritualists prevailing back then and were labelled rebels or non-conformists as caste, creed, culture and other social criteria were meaningless to them', '14593277542716', 0, 0),
(503, 'Largely a spiritual science providing the way to immortality for those who aspire such heights, this tradition also has several other dimensions such as Siddha Medicine, Yoga, Tantra etc', '14593277542716', 0, 0),
(504, 'THE SIDDHAS OF TIRUVANNAMALAI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enlightened Masters from various paths live here in Tiruvannamalai', '14593277542716', 0, 0),
(505, 'Bhagavan Ramana Maharishi, Bhagavan Sheshadri Swami, Bhagavan Yogiramsuratkumar, Ishanya Desikar Swami, Adi Mudi Siddhar are some of the many blossoms of this Holy Hill', '14593277542716', 0, 0),
(506, 'ABOUT HEALER PAL and THE SIDDHA TRADTION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal, whilst in his school years, driven by an identity neurosis , was in search of answers', '14593277542716', 0, 0),
(507, 'At the age of 19, in his home town, Madurai, at thirukoodal mountain, the place where Macchamuni Siddha and Kagabusundar Siddha performed Tapas, he met is first teacher, a Siddha vaidyar swami, Balamurugananda', '14593277542716', 0, 0),
(508, 'This was the beginning of the changes to come', '14593277542716', 0, 0),
(509, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Still not able to contain his crisis, he wandered', '14593277542716', 0, 0),
(510, 'Two days prior to leaving for the Himalayas, he heard of the spiritual salvation from suffering bestowed by the Holy Hill Arunachala', '14593277542716', 0, 0),
(511, 'He spent the next few months in the caves of holly hill Arunachala', '14593277542716', 0, 0),
(512, 'There he received instructions to further his journey', '14593277542716', 0, 0),
(513, 'He was told to return to Madurai and follow in the path of the Siddhas', '14593277542716', 0, 0),
(514, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Living in Madurai, he travelled and visited many Siddha swamijis throughout Tamil nadu', '14593277542716', 0, 0),
(515, 'Staying with them, he learnt the ancient Siddha art and science of Siddha Medicine, Varmam, Occultism, Tantra and Alchemy', '14593277542716', 0, 0),
(516, 'During this phase he also had the indescribable Darshan of his Sat Guru', '14593277542716', 0, 0),
(517, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One teacher of immeasurable value that flooded his life is his Varmam and Medicinal Master Chandrasekhar Swami', '14593277542716', 0, 0),
(518, 'Swami lived alone with his disciples and prepared his own medicines', '14593277542716', 0, 0),
(519, 'He gave medicinal treatment and Varma healing free of cost to all those who came to him', '14593277542716', 0, 0),
(520, 'Chandrasekhar Swami is the 9th descendant of His healing lineage and before attaining MahaSamadhi, Swami ordained Healer Pal as His next, from a group of 16 disciples', '14593277542716', 0, 0),
(521, 'From this moment on Healer Pal has been honouring that ordainment', '14593277542716', 0, 0),
(522, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Healer Pal spent the next few years treating people with medicines as well as Varma healing', '14593277542716', 0, 0),
(523, 'According to his lineage, he too has conformed to the mode of free treatment', '14593277542716', 0, 0),
(524, 'After starting his healing journey in Madurai and its surrounding areas he eventually settled in Tiruvannamalai', '14593277542716', 0, 0),
(525, 'It is now 16 years since', '14593277542716', 0, 0),
(526, 'He continues giving medicinal treatments and Varmam therapy as well as spiritual healing to all who come to him', '14593277542716', 0, 0),
(527, 'People from all around the world have come for treatments and/or guidance', '14593277542716', 0, 0),
(528, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Even though he meets with many difficulties and hurdles along the way, he continues his Masters lineage', '14593277542716', 0, 0),
(529, '8 years ago he began teaching the path of Siddha Vaidya (Siddha medicine)', '14593277542716', 0, 0),
(530, 'To teach the very valuable and secretly guarded Siddha Varma science he accepted only a chosen few as his students according to the principles of his lineage', '14593277542716', 0, 0),
(531, '(Siddhabooks)  He has also initiated a selected few for sharing the spiritual insights of his lineage', '14593277542716', 0, 0),
(532, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He has also authored and published a 600 page book â€œSiddhas, Masters of the Basicsâ€, expounding all the dimensions of the Siddha tradition by way of his personal experiences and the revelations received by way of his personal sadhana', '14593277542716', 0, 0),
(533, 'Products\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recently, he has conducted 6 month Siddha Medicine and basic Varma courses for the academic Siddha doctors , practising in private clinics as well as government hospital doctors, here in Tamil Nadu', '14593277542716', 0, 0),
(534, 'He has also conducted a few workshops for IT industry employees as well as members of old age homes about health and day to day lifestyle choices', '14593277542716', 0, 0),
(535, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inspired by the insights of his healing experience and continued teachings of his Lineage Masters and the Holy Hill Arunachala, Pal systematised a wholistic therapeutic approach he names&nbsp;&nbsp;Vasi therapy\r\n\r\n  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Under Vasi therapy he follows three approaches or methods to work with the primal vital flow or energy in our body â€“ at the gross body level(Varma Therapy) at the intermediary level (Kalari Therapuetics)and thirdly at the primal state of our body, the causal level  (Amritha kalai)', '14593277542716', 0, 0),
(536, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspAs he is currently active in sharing the Siddhas spiritual teachings, the healing treatments have been contained only for children of special needs and genetic conditions', '14593277542716', 0, 0),
(537, 'activities \r\n\r\n                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277542716', 0, 0),
(538, 'Healing siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us               	 		                                                           Contact Us                    Email us at : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vasitherapy@gmail', '1459327754927', 0, 0),
(539, 'com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sivavidya2015@gmail', '1459327754927', 0, 0),
(540, 'com \r\n   \r\n                                    	                                	  	 		&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '1459327754927', 0, 0),
(541, 'Healing Siddhas      	 		Healing Siddhas 	  	 		 			 		 		 			 				Home 				Vasi Therapy                 Healer Pal 				Healing Dimensions  				Activities                 Articles                 Products                 Related Links 			 		 	  	 		 			 			 			 			 			 		              			     		             About us             Contact us              	 		Content', '14593277576658', 0, 0),
(542, 'This is to be updated', '14593277576658', 0, 0),
(543, 'Content1 				This is to be updated', '14593277576658', 0, 0),
(544, 'Content2 				This is to be updated', '14593277576658', 0, 0),
(545, 'Content3 				This is to be updated', '14593277576658', 0, 0),
(546, '&copy; 2015  | Healing Siddhas\r\nPowered by&nbsp;Ultimate', '14593277576658', 0, 0),
(547, '', '14593277628407', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sentance_admin_checked`
--

CREATE TABLE IF NOT EXISTS `sentance_admin_checked` (
  `sno` int(11) NOT NULL,
  `sentance_no` varchar(9000) NOT NULL,
  `category_names` varchar(8000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentance_admin_checked`
--

INSERT INTO `sentance_admin_checked` (`sno`, `sentance_no`, `category_names`) VALUES
(61, '1', '1'),
(62, '1', ''),
(63, '2', '1'),
(64, '2', '2'),
(65, '3', '1'),
(66, '3', ''),
(67, '4', '1'),
(68, '4', ''),
(69, '5', ''),
(70, '5', ''),
(71, '6', ''),
(72, '6', ''),
(73, '7', ''),
(74, '7', ''),
(75, '8', ''),
(76, '8', '2'),
(77, '9', ''),
(78, '9', '2'),
(79, '10', ''),
(80, '10', ''),
(81, '1', '1'),
(82, '1', ''),
(83, '2', '1'),
(84, '2', ''),
(85, '3', ''),
(86, '3', ''),
(87, '4', ''),
(88, '4', ''),
(89, '5', ''),
(90, '5', ''),
(91, '6', ''),
(92, '6', ''),
(93, '7', ''),
(94, '7', ''),
(95, '8', ''),
(96, '8', ''),
(97, '9', ''),
(98, '9', ''),
(99, '10', ''),
(100, '10', '');

-- --------------------------------------------------------

--
-- Table structure for table `sublinks`
--

CREATE TABLE IF NOT EXISTS `sublinks` (
  `sno` int(11) NOT NULL,
  `sublink` varchar(20000) NOT NULL,
  `sublink_id` varchar(2000) NOT NULL,
  `mainlink_id` varchar(20) NOT NULL,
  `checked` int(11) NOT NULL,
  `finished` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sublinks`
--

INSERT INTO `sublinks` (`sno`, `sublink`, `sublink_id`, `mainlink_id`, `checked`, `finished`, `user_id`) VALUES
(1, 'www.healingsiddhas.com/index.html', '14593277541757', '14593277531828', 1, 0, 'USER1'),
(2, 'www.healingsiddhas.com/vasitherapy.html', '1459327754546', '14593277531828', 1, 0, 'USER1'),
(3, 'www.healingsiddhas.com/healer_pal.html', '14593277547460', '14593277531828', 1, 0, 'USER1'),
(4, 'www.healingsiddhas.com/healing_dimension.html', '14593277544737', '14593277531828', 1, 0, 'USER1'),
(5, 'www.healingsiddhas.com/related_link.html', '14593277543197', '14593277531828', 1, 0, 'USER1'),
(6, 'www.healingsiddhas.com/about_us.html', '14593277542716', '14593277531828', 1, 0, 'USER1'),
(7, 'www.healingsiddhas.com/contact_us.html', '1459327754927', '14593277531828', 1, 0, 'USER1'),
(8, 'www.healingsiddhas.com/', '14593277576658', '14593277531828', 1, 0, 'USER1'),
(9, 'www.healingsiddhas.com/products.html', '14593277628407', '14593277531828', 1, 0, 'USER1');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE IF NOT EXISTS `words` (
  `sno` int(11) NOT NULL,
  `words` mediumtext NOT NULL,
  `link_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_admin`
--
ALTER TABLE `for_admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `links_id` (`links_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `sentance`
--
ALTER TABLE `sentance`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `sentance_admin_checked`
--
ALTER TABLE `sentance_admin_checked`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `sublinks`
--
ALTER TABLE `sublinks`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `for_admin`
--
ALTER TABLE `for_admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sentance`
--
ALTER TABLE `sentance`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=548;
--
-- AUTO_INCREMENT for table `sentance_admin_checked`
--
ALTER TABLE `sentance_admin_checked`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `sublinks`
--
ALTER TABLE `sublinks`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
