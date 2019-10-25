-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 12:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(11) NOT NULL COMMENT 'Book Id',
  `book_tittle` varchar(255) NOT NULL COMMENT 'Book Tittle',
  `description` text NOT NULL COMMENT 'book_desc',
  `filename` varchar(255) NOT NULL COMMENT 'filename',
  `image` varchar(255) NOT NULL COMMENT 'book_image'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `book_tittle`, `description`, `filename`, `image`) VALUES
(20, 'Cryptography and NetWork Security', 'As the disciplines of cryptography and network security have matured, more practical, readily available applications to enforce network security have developed. This text provides a practical survey of both the principles and practice of cryptography and network security. First, the basic issues to be addressed by a network security capability are explored through a tutorial and survey of cryptography and network security\r\ntechnology.', 'Stallings_Cryptography_and_Network_Security.pdf', 'Book_Cover/book1.jpg'),
(21, 'Computer Security Fundamentals', 'This book is a guide for any computer-savvy person. That\r\nmeans system administrators who are not security experts or anyone who has a working knowledge of computers and wishes to know more about cyber crime and terrorism could find this book useful. However, the core audience will be students who wish to take a first course in security but may not\r\nhave a thorough background in computer networks. The book is in textbook format, making it ideal for introductory computer security courses that have no specific prerequisites.', '0789748908.pdf', 'Book_Cover/book19.jpg'),
(22, 'Complete guide to cryptocurrency', 'Imagine earning 500% within 3 months. You absolutely cannot generate these returns using traditional investment alternatives. Earning multiples over your capital is really the\r\nnorm in the cryptocurrency world. But the journey along the way is extremely tough especially for someone like me who\r\nprior to this, had no tech knowledge. The challenge in the crypto world is filled with computing jargon and volatile prices\r\nthat WILL deter many.', 'COMPLETE-GUIDE-TO-CRYPTOCURRENCY-ANALYSIS-4.pdf', 'Book_Cover/book2.jpg'),
(23, 'Applied Cryptanalysis', 'In this book, we strive to present applied crypt analytic attacks in an accessible form. Here, we are focused on practical attacks that actually break real-world systems, not attacks that merely indicate some theoretical weakness in a cipher. Many attacks that satisfy our criteria are scattered through the literature.', 'Stamp M., Low R.M. Applied cryptanalysis...pdf', 'Book_Cover/book3.jpg'),
(24, 'Identity Theft Alert', 'This book explains the horrific details of the many identity theft scams\r\nthat are so prevalent today. Story after story takes you into the dark\r\nworld of identity theft and the dire consequences that can result from\r\nthis crime that affects more and more people throughout the world. This book shows you just how vulnerable you are, but it also shows you steps you can take to protect yourself, as best you can, from becoming a victim. It also tells you what to do if you become an identity theft victim.', '9780133902525.pdf', 'Book_Cover/book4.jpg'),
(25, 'Internet Security', 'The handbook aims to provide everyone an understanding about how they can protect themselves and the persons they communicate with. It also aims\r\nto provide insights into the limits of protective measures, so people can\r\nmake an informed trade-off.', 'basic-internet-security.pdf', 'Book_Cover/book5.jpg'),
(26, 'The basics of hacking and penetration testing', 'This book is meant to be a very gentle yet thorough guide to the world of hacking\r\nand penetration testing. It is specifically aimed at helping you master the basic steps needed to complete a hack or penetration test without overwhelming\r\nyou. By the time you finish this book, you will have a solid understanding\r\nof the penetration testing process and you will be comfortable with the basic\r\ntools needed to complete the job.', '167 - The Basics Of Hacking And Penetration Testing  Ethical Hacking And Penetration Testing Made Easy [-PUNISHER-].pdf', 'Book_Cover/book6.jpg'),
(27, 'Computer Networks', 'This book is now in its fifth edition. Each edition has corresponded to a different phase in the way computer networks were used. When the first edition appeared in 1980, networks were an academic curiosity. When the second edition appeared in 1988, networks were used by universities and large businesses. When the third edition appeared in 1996, computer networks, especially the Internet, had become a daily reality for millions of people. By the fourth edition, in 2003, wireless networks and mobile computers had become commonplace for accessing the Web and the Internet.', 'Computer-Networks---A-Tanenbaum---5th-edition.pdf', 'Book_Cover/book7.jpeg'),
(28, 'Anonymous brosing handbook', 'Basic rule: Security is a continuing process, not a state. Do audits on a regular and scheduled basis. And do encrypted backups. Backups are important, as there are two types of people, those who have backups and those who have lost\r\ntheir data.', 'Anonymous_Security_Handbook.pdf', 'Book_cover/book8.jpg'),
(29, 'Cyber Forensics a filed manual', 'The ubiquitous use of computers and other electronic devices is creating a rapidly rising wave of new and stored digital information. The massive proliferation of data creates ever?expanding digital information risks for organizations and individuals. Electronic information is easy to create, inexpensive to store, and virtually effortless to replicate. As a result, increasingly vast quantities of\r\ndigital information reside on mass storage devices located within and without corporate information systems. Information risks associated with this data are many. For example, electronic data can often show — with a high degree of reliability — who said, knew, took, shared, had and did what, and who else might be involved in the saying, knowing, taking, sharing, having, and doing.', 'Cyber Forensics - A Field Manual for Collecting, Examining, & Preserving Evidence of Computer Crimes.pdf', 'Book_Cover/book9.jpg'),
(30, 'Network security', 'If you’re looking for something that can double as a hacker’s manual, then you’ve come to the wrong place. However, if you have a background in computer networking but are new to computer security and\r\nwant a practical approach to how you can secure your network, then this book is for you. You will need a basic understanding of local area networks (LANs)(especially Ethernet), how LANs are connected to wide area networks, and how the Internet fits into an overall network architecture.', 'Network Security A Practical Approach.pdf', 'Book_Cover/book10.jpg'),
(31, 'Computer viruses and malware', 'The goals of the Springer International Series on ADVANCES IN INFORMATION\r\nSECURITY are, one, to establish the state of the art of, and set the course for future research in information security and, two, to serve as a central reference source for advanced and timely topics in information security research and development. The scope of this series\r\nincludes all aspects of computer and network security and related areas such as fault tolerance and software assurance.', 'Computer-Viruses-and-Malware.pdf', 'Book_Cover/book11.jpg'),
(32, 'Inside Threat', 'These insider incidents are the types of crimes we will discuss in this\r\nbook—crimes committed by current or former employees, contractors, or\r\nbusiness partners of the victim organization. As you will see, consequences of malicious insider incidents can be substantial, including financial losses, operational impacts, damage to reputation, and harm to individuals. The\r\nactions of a single insider have caused damage to organizations ranging from a few lost staff hours to negative publicity and financial damage so\r\nextensive that businesses have been forced to lay off employees and even\r\nclose operations.', '9780321812575.pdf', 'Book_Cover/book12.jpg'),
(33, 'Solving Cyber Risks', 'The year 2012 had been good for a small group of cyber hackers. They called themselves ‘Rescator’, after the noble and mysterious pirate character in the Angelique series of French historical romantic films popular on television in Eastern Europe and Russia. The Rescator team specialized in scamming the credentials from credit cards and selling the details for around a 10th of a bitcoin each (approximately $1 in 2012) on sites in the dark web and other black market outlets, such as the Russian ‘octavian’ marketplace.\r\n', 'Solving Cyber Risk.pdf', 'Book_Cover/book13.jpg'),
(34, 'Mobile Application Security', 'This book is divided into two parts, with the first being “Mobile Application Platforms” (Chapters 2 through 8). These chapters discuss the major operating system platforms on mobile devices, including Google’s Android, Apple’s iPhone, Windows Mobile, RIM BlackBerry, J2ME, and Symbian. These chapters strictly discuss how to use the platforms to build secure applications. For example, they address many of the items in the top 15 list discussed in Chapter 1, including secure storage, application isolation, and malware threads.', 'Mobile Application Security.pdf', 'Book_Cover/book14.jpg'),
(35, 'Cisco Next Generation Security', 'This book covers Cisco next-generation network security products and solutions. It provides detailed guidance for designing, configuring, and troubleshooting the Cisco ASA with FirePOWER Services, Cisco next-generation IPS appliances, Cisco Web Security\r\nAppliance (WSA), and Cisco Email Security Appliance (ESA) with the new Advanced\r\nMalware Protection (AMP) integration, as well as the Cisco AMP Threat Grid malware\r\nanalysis and threat intelligence and Cisco Firepower Management Center (FMC).', 'Cisco Next-Generation Security Solutions.pdf', 'Book_Cover/book15.jpg'),
(36, 'Network Attacks and Exploitation', 'Computer espionage is increasing in frequency, sophistication, and impact.\r\nPolitical, military, intellectual property, personal, and fi nancial information is\r\nbeing siphoned off at an unprecedented rate. As the legal and moral doctrines for dealing with this predicament emerge from infancy, the onslaught will continue. It is therefore critical for business leaders, IT professionals, and policy makers\r\nto start addressing the issues at a strategic level, and to do this, you fi rst must understand the principles of network attack and exploitation.\r\nwww.allitebooks.', 'Network Attacks and Exploitation.pdf', 'Book_Cover/book16.jpg'),
(37, 'Network Security (beginers guide)', 'Security continues to be an issue for organizations. Not only are we hearing about the successful penetration of web sites and organizations, but we also have new laws and regulations that affect the protection of information. In response to these issues, more and more vendors are appearing with tools that offer some protection. After looking at all of this information, you might think that the big issues in security can be solved with\r\ntechnology. Unfortunately, security issues are much more complex than that.', 'Network Security A Beginner-s Guide, Third Edition.pdf', 'Book_Cover/book17.jpg'),
(38, 'The Art of Invisibility', 'Digital communication has made it possible for governments to do bulk surveillance. But it has also enabled us to protect ourselves better. We can protect ourselves with tools like encryption, by storing our data in safe ways and by following basic principles of operations security (OPSEC). We just need a guide on how to do it right.', 'The Art of Invisibility 2017.pdf', 'Book_Cover/book20.jpg'),
(39, 'The Cracking Codebook', 'For centuries, kings, queens and generals have relied on efficient communication in order to govern their countries and command their armies. At the same time, they have all been aware of the consequences of their messages falling into the wrong hands, revealing precious secrets to rival nations and betraying\r\nvital information to opposing forces. It was the threat of enemy interception that motivated the development of codes and ciphers: techniques for disguising a message so that only the intended recipient can read it.', '164 - The Code Book How To Make It, Break It, Hack It, Crack It [-PUNISHER-].pdf', 'Book_Cover/book21.jpg'),
(40, 'Certified Ethical Hacker V9', 'This book presents the material at an advanced technical level. An understanding of network concepts and issues, computer hardware and operating systems, and applications will come in handy when you read this book. While every attempt has been made to present the concepts and exercises in an easy-to-understand format, you will need to have experience with IT and networking technology to get the best results. I’ve included review questions at the end of each chapter to give you a taste of what it’s like to take the exam.', 'CEH v9- Certified Ethical Hacker Version 9 Study Guide ( PDFDrive.com ).pdf', 'Book_Cover/book22.jpg'),
(41, 'Codes and Ciphers', 'The design of code and cipher systems has undergone major changes in modern times. Powerful personal computers have\r\nresulted in an explosion of e-banking, e-commerce and e-mail, and as a consequence the encryption of communications to ensure security has become a matter of public interest and\r\nimportance. This book describes and analyses many cipher systems ranging from the earliest and elementary to the most\r\nrecent and sophisticated, such as RSA and DES, as well as wartime machines such as the Enigma and Hagelin, and ciphers used by spies.', 'codici_cifr.pdf', 'Book_Cover/book23.jpg'),
(42, 'The Art of Deception', 'This book contains a wealth of information about information security and social\r\nengineering. To help you find your way, here\'s a quick look at how this book is\r\norganized: Throughout the book you\'ll also find several useful elements: Lingo boxes\r\nprovide definitions of social engineering and computer hacker terminology; Mitnick Messages offer brief words of wisdom to help strengthen your security strategy; and notes and sidebars give interesting background or additional information.', 'mitnick.pdf', 'Book_Cover/book24.jpg'),
(43, 'Ghost in Wires', 'Kevin spelled out in detail the incredible story of how he had cracked the case of the FBI operation against him. Kevin penetrated the whole operation, discovering that a new hacker “friend” was really an FBI snitch, learning the names and home addresses of the entire FBI team\r\nworking his case, even listening in on the phone calls and voicemails of people trying to gather evidence against him. An alarm system he had setup alerted him when the FBI was preparing to raid him.\r\n', 'Ghost in the Wires_ My Adventures as the World s Most  ( PDFDrive.com ).pdf', 'Book_Cover/book25.jpg'),
(44, 'CISSP', 'Whether you are picking up this book\r\nto supplement your preparation to sit for the exam or you are an existing\r\nCISSP using this as a desk reference, you’ve acknowledged that this certification makes you recognized as one of the most respected and sought-after cybersecurity leaders in the world. After all, that’s what the CISSP symbolizes.You and your peers are among the ranks of the most knowledgeable\r\npractitioners in our community. The designation of CISSP instantly communicates to everyone within our industry that you are intellectually curious and traveling along a path of lifelong learning and improvement. Importantly, as a member of (ISC)² you\r\nhave officially committed to ethical conduct commensurate to your position of trust as a cybersecurity\r\nprofessional.', 'The Official (ISC)2 Guide to the CISSP CBK Reference, 5th Edition.pdf', 'Book_Cover/book26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL COMMENT 'admin-page',
  `username` varchar(255) NOT NULL COMMENT 'admin-username',
  `password` varchar(255) NOT NULL COMMENT 'admin-password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `anonymousbrowsing`
--

CREATE TABLE `anonymousbrowsing` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) DEFAULT NULL COMMENT 'lecture ID',
  `topic` varchar(255) NOT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anonymousbrowsing`
--

INSERT INTO `anonymousbrowsing` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Anonymity Networks', 'anonnetworks.ppt'),
(2, 'Lecture 2', 'Internet Anonymity', 'Anonymizers.pptx'),
(3, 'Lecture 3', 'Anonymous internet browsing', 'Anonymous Internet Browsing.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `computer_networks`
--

CREATE TABLE `computer_networks` (
  `id` int(11) NOT NULL COMMENT 'course Id',
  `tittle` varchar(255) DEFAULT NULL COMMENT 'lecture ID',
  `topic` varchar(255) NOT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_networks`
--

INSERT INTO `computer_networks` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Computer network introduction', 'Computer-Networks--Network.ppt'),
(2, 'Lecture 2', 'Networking skills', 'Networking_skills.ppt'),
(3, 'Lecture 3', 'Computer networks concepts', 'Intro_Net_91407.ppt'),
(4, 'Lecture 4', 'Computer networks basics', '03_basic_computer_network.ppt'),
(5, 'Lecture 5', 'How to subnet', 'How-to-Subnet 10.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `subject`, `message`) VALUES
(3, 'sham', 'shamsiashaban@gmail.com', 'advice', '   i like your work                     ');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `code`) VALUES
(1, 'Anonymous Browsing', 'AB01'),
(2, 'Computer Networking', 'CN01'),
(3, 'Internet Security', 'IS01'),
(4, 'Identity Theft', 'ID01'),
(6, 'Cryptanalysis', 'CP01'),
(7, 'Cryptography', 'CP02'),
(8, 'Cryptocurrencies', 'CP03'),
(9, 'Cyber forensics', 'CF01'),
(10, 'Hacking', 'HC01'),
(11, 'Malware and viruses', 'MV01'),
(12, 'Inside Threat', 'IH01'),
(14, 'Network Security', 'NS01'),
(15, '4', 'network');

-- --------------------------------------------------------

--
-- Table structure for table `cryptanalysis`
--

CREATE TABLE `cryptanalysis` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) NOT NULL COMMENT 'lecture Id',
  `topic` varchar(255) NOT NULL COMMENT 'lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryptanalysis`
--

INSERT INTO `cryptanalysis` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Introduction to Cryptanalysis', '0_Intro.ppt'),
(2, 'Lecture 2', 'Introduction to Practical Cryptography ', 'lect5+6-cryptanalysis.ppt'),
(3, 'Lecture 3', 'Block Ciphers and the Advanced Encryption Standard', 'chap3-1.ppt'),
(4, 'Lecture 4', 'Fundamentals of Applied Cryptanalysis', 'lecture_2_cryptanalysis_v1_0.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `cryptocurrency`
--

CREATE TABLE `cryptocurrency` (
  `id` int(11) NOT NULL COMMENT 'Course Id',
  `tittle` varchar(255) NOT NULL COMMENT 'Topic Id',
  `topic` varchar(255) DEFAULT NULL COMMENT 'Course Tittle',
  `doc` varchar(100) DEFAULT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryptocurrency`
--

INSERT INTO `cryptocurrency` (`id`, `tittle`, `topic`, `doc`) VALUES
(2, 'Lecture 1', 'Introduction to Cryptographic Currencies', 'theorycoin.pptx'),
(3, 'Lecture 2', 'Blockchains and Cryptocurrencies', 'Nov-2017-Qrtly-Gorham-PP.pptx'),
(4, '5', 'network', '9780133902525.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cryptography`
--

CREATE TABLE `cryptography` (
  `id` int(11) NOT NULL COMMENT 'Course Id',
  `title` varchar(255) NOT NULL COMMENT 'Lecture number',
  `topic` varchar(255) DEFAULT NULL COMMENT 'topic name',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cryptography`
--

INSERT INTO `cryptography` (`id`, `title`, `topic`, `doc`) VALUES
(8, 'Lecture 1', 'Cryptography', '7-cryptography.ppt'),
(9, 'Lecture 2', 'Public Key Cryptography', 'class8-2.ppt.ppt'),
(10, 'Lecture 3', 'Practical Cryptography', 'CS 0111 Lecture 04 _ 05.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cyber_foreinsics`
--

CREATE TABLE `cyber_foreinsics` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) NOT NULL COMMENT 'lecture ID',
  `topic` varchar(255) NOT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cyber_foreinsics`
--

INSERT INTO `cyber_foreinsics` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'The Fascinating World of Digital Evidence', 'CS426_forensics(1).ppt'),
(2, 'Lecture 2', 'Computer Forensics', 'CIPS-2015-0194.pdf'),
(3, 'Lecture 3', 'Computer Forensics 2', 'Computer Forensics - Kelsey Bretz.pptx'),
(4, 'Lecture 4', 'Limitations of Cyber Investigations ', '7.Limitations of Cyber Investigations & Digital Forensics - NJA.pptx'),
(5, 'Lecture 5', 'Computer forensics concepts', 'wang(1).ppt');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL COMMENT 'expert_id',
  `username` varchar(255) NOT NULL COMMENT 'username',
  `password` varchar(255) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `username`, `password`) VALUES
(1, 'expert', 'b9b83bad6bd2b4f7c40109304cf580e1');

-- --------------------------------------------------------

--
-- Table structure for table `hacking`
--

CREATE TABLE `hacking` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) DEFAULT NULL COMMENT 'lecture ID',
  `topic` varchar(255) DEFAULT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) DEFAULT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hacking`
--

INSERT INTO `hacking` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Hacking introduction', 'hacking.ppt'),
(2, 'Lecture ', 'White hackers and Black Hackers', 'Hackers.ppt'),
(3, 'Lecture 3', 'Hacking concepts', 'Lackey_Nov2.ppt'),
(4, 'Lecture 4', 'Security concepts', 'CS 0111 Lecture 02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `identitytheft`
--

CREATE TABLE `identitytheft` (
  `id` int(11) NOT NULL COMMENT 'Identity Theft',
  `tittle` varchar(255) NOT NULL COMMENT 'lecture ID',
  `topic` varchar(255) NOT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitytheft`
--

INSERT INTO `identitytheft` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Identity theft and fraud', 'Identity Theft  March 2013.ppt'),
(2, 'Lecture 2', 'Identity Theft', 'IDTheft.ppt'),
(3, 'Lecture 3', 'Identity Theft Concept', 'IDENTITY_THEFT_7-13.ppt'),
(4, 'Lecture 4', 'VICARS', 'VICARS_ConsumerGuide_ID_Fraud.ppt'),
(5, 'Lecture 5', 'How to defend your good name', 'ID_Theft_Presentation_-_SMU.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `inside_threat`
--

CREATE TABLE `inside_threat` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) NOT NULL COMMENT 'lecture ID',
  `topic` varchar(255) NOT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inside_threat`
--

INSERT INTO `inside_threat` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Identifying inside threat', 'prof_angela_sasse.ppt'),
(2, 'Lecture 2', 'Overview of inside attacks', 'present.ppt'),
(3, 'Lecture 3', 'Discussion of inside attacks', 'insider-threat.ppt'),
(4, 'Lecture 4', 'Impact of inside attack', 'InsiderAttack_p2.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `internetsecurity`
--

CREATE TABLE `internetsecurity` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) DEFAULT NULL COMMENT 'lecture ID',
  `topic` varchar(255) DEFAULT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) DEFAULT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internetsecurity`
--

INSERT INTO `internetsecurity` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Internet and web security', 'inetsec97.PPT'),
(2, 'Lecture 2', 'Internet security protocals and standards', 'lect22_internetsecurity.ppt'),
(3, 'Lecture 3', 'Computer and network security', 'intro.ppt'),
(4, 'Lecture 4', 'Internet security and identity theft', 'internet_security_and_identity_theft.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `networksecurity`
--

CREATE TABLE `networksecurity` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) DEFAULT NULL COMMENT 'lecture ID',
  `topic` varchar(255) DEFAULT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) DEFAULT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networksecurity`
--

INSERT INTO `networksecurity` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'The Security Requirements Triad', 'NetworkSecurity_Stallings.ppt'),
(2, 'Lecture 2', 'Network Security', 'lec21-security.ppt'),
(3, 'Lecture 3', 'Designing and Implementing a Secure Network Infrastructure', 'Designing_Network_Security.ppt'),
(4, 'Lecture 4', 'Network infrastructure', 'jeremy-dave-asia-00-network.ppt'),
(5, 'Lecture 5', 'Network firewall security', 'network_firewall_security.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'brchris2001@yahoo.com'),
(2, 'aminanurdin@gmail.com'),
(3, 'aminanurdin@gmail.com'),
(4, 'aminanurdin@gmail.com'),
(5, 'shamsiashaban@gmail.com'),
(6, 'zahiratwalib@gmail.com'),
(7, 'brchris2001@yahoo.com'),
(8, 'geh@try.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `dob`, `username`, `password`) VALUES
(1, 'Christian', 'Adam', 'user1@test.com', '569-908-876', '2019-05-23', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'Christian', 'Brown', 'adBrown@gmail.com', '564-908-6521', '1982-07-26', 'brown', '6ff47afa5dc7daa42cc705a03fca8a9b'),
(3, 'Adam', 'Brown', 'ad@gmail.com', '657-901-0988', '1993-05-11', 'adam', '1d7c2923c1684726dc23d2901c4d8157'),
(4, 'shamsia', 'shaban', 'shamsiashaban@gmail.com', '0678127747', '1995-08-08', 'msakuzi', 'c315a2204a6fa8956a7a0d3f8d1aae32'),
(5, 'zahira', 'twalib', 'zahuratwalib@gmail.com', '0743111056', '1995-09-22', 'zahira', 'd7a84628c025d30f7b2c52c958767e76'),
(6, 'happy', 'martin', 'happymartin2512@gmail.com', '0717274946', '1995-12-20', 'bambaga', '5e0a7d951366861fba529c7169cf241e'),
(7, 'ahmad', 'twaha', 'ahmadtwaha@gmail.com', '--20', '2019-06-05', 'ahmad', '3cf4046014cbdfaa7ea8e6904ab04608'),
(8, 'Christian', 'Brown', 'gd@yahoo.com', '564-908', '1994-06-14', 'brownC', '57f842286171094855e51fc3a541c1e2');

-- --------------------------------------------------------

--
-- Table structure for table `viruses_malware`
--

CREATE TABLE `viruses_malware` (
  `id` int(11) NOT NULL COMMENT 'Topic Id',
  `tittle` varchar(255) NOT NULL COMMENT 'lecture ID',
  `topic` varchar(255) NOT NULL COMMENT 'Lecture tittle',
  `doc` varchar(255) NOT NULL COMMENT 'filename'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viruses_malware`
--

INSERT INTO `viruses_malware` (`id`, `tittle`, `topic`, `doc`) VALUES
(1, 'Lecture 1', 'Malware, spyware and viruses', 'BosnakaSpyware.ppt'),
(2, 'Lecture 2', 'Malware', 'malware.ppt'),
(3, 'Lecture 3', 'Viruses', 'Chapter 6 ppt.ppt'),
(4, 'Lecture 4', 'Spywares', 'Spyware.ppt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anonymousbrowsing`
--
ALTER TABLE `anonymousbrowsing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_networks`
--
ALTER TABLE `computer_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptanalysis`
--
ALTER TABLE `cryptanalysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptocurrency`
--
ALTER TABLE `cryptocurrency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptography`
--
ALTER TABLE `cryptography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyber_foreinsics`
--
ALTER TABLE `cyber_foreinsics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hacking`
--
ALTER TABLE `hacking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitytheft`
--
ALTER TABLE `identitytheft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inside_threat`
--
ALTER TABLE `inside_threat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internetsecurity`
--
ALTER TABLE `internetsecurity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networksecurity`
--
ALTER TABLE `networksecurity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viruses_malware`
--
ALTER TABLE `viruses_malware`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Book Id', AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'admin-page', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anonymousbrowsing`
--
ALTER TABLE `anonymousbrowsing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `computer_networks`
--
ALTER TABLE `computer_networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'course Id', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cryptanalysis`
--
ALTER TABLE `cryptanalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cryptocurrency`
--
ALTER TABLE `cryptocurrency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Course Id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cryptography`
--
ALTER TABLE `cryptography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Course Id', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cyber_foreinsics`
--
ALTER TABLE `cyber_foreinsics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'expert_id', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hacking`
--
ALTER TABLE `hacking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `identitytheft`
--
ALTER TABLE `identitytheft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identity Theft', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inside_threat`
--
ALTER TABLE `inside_threat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `internetsecurity`
--
ALTER TABLE `internetsecurity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `networksecurity`
--
ALTER TABLE `networksecurity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `viruses_malware`
--
ALTER TABLE `viruses_malware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Topic Id', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
