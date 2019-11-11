-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 08:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `book_id` int(200) NOT NULL,
  `author` varchar(25) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`book_id`, `author`, `keywords`, `title`, `price`, `image`, `description`, `category`) VALUES
(11, 'Margaret Mitchell ', 'gone, wind, margaret, mitchell', 'Gone With The Wind', 550, 'gonewithwind.jpg', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Since its original publication in 1936,&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Gone With the Wind</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&mdash;winner of the Pulitzer Prize and one of the bestselling novels of all time&mdash;has been heralded by readers everywhere as The Great American Novel.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Widely considered The Great American Novel, and often remembered for its epic film version,&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Gone With the Wind</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;explores the depth of human passions with an intensity as bold as its setting in the red hills of Georgia. A superb piece of storytelling, it vividly depicts the drama of the Civil War and Reconstruction.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">This is the tale of Scarlett O&rsquo;Hara, the spoiled, manipulative daughter of a wealthy plantation owner, who arrives at young womanhood just in time to see the Civil War forever change her way of life. A sweeping story of tangled passion and courage, in the pages of&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Gone With the Wind</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">, Margaret Mitchell brings to life the unforgettable characters that have captured readers for over seventy years.</span></p>', 'Romance'),
(17, 'Stephen King', 'Stephen, king, it', 'It', 320, 'it.jpg', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Soon to be a major motion picture&mdash;Stephen King&rsquo;s terrifying, classic #1&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">New York Times</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;bestseller, &ldquo;a landmark in American literature&rdquo; (</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Chicago Sun-Times</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">)&mdash;about seven adults who return to their hometown to confront a nightmare they had first stumbled on as teenagers&hellip;an evil without a name:&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">It</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Welcome to Derry, Maine. It&rsquo;s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">They were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the city&rsquo;s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derry&rsquo;s sewers.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Readers of Stephen King know that Derry, Maine, is a place with a deep, dark hold on the author. It reappears in many of his books, including&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Bag of Bones</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">,&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Hearts in Atlantis</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">, and&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">11/22/63</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">. But it all starts with&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">It</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&ldquo;Stephen King&rsquo;s most mature work&rdquo; (</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">St. Petersburg Times</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">), &ldquo;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">It&nbsp;</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">will overwhelm you&hellip; to be read in a well-lit room only&rdquo; (</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Los Angeles Times</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">).</span></p>', 'Horror'),
(18, 'E L James', 'James, fifty, shades, grey', 'Fifty Shades Of Grey', 250, 'fiftyshades.jpg', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">When literature student Anastasia Steele goes to interview young entrepreneur Christian Grey, she encounters a man who is beautiful, brilliant, and intimidating. The unworldly, innocent Ana is startled to realize she wants this man and, despite his enigmatic reserve, finds she is desperate to get close to him. Unable to resist Ana&rsquo;s quiet beauty, wit, and independent spirit, Grey admits he wants her, too&mdash;but on his own terms.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Shocked yet thrilled by Grey&rsquo;s singular erotic tastes, Ana hesitates. For all the trappings of success&mdash;his multinational businesses, his vast wealth, his loving family&mdash;Grey is a man tormented by demons and consumed by the need to control. When the couple embarks on a daring, passionately physical affair, Ana discovers Christian Grey&rsquo;s secrets and explores her own dark desires.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">This book is intended for mature audiences.</span></p>', 'Romance'),
(19, ' John Grisham', 'Whistler,  John, Grisham', 'The Whistler', 280, 'the whistler.jpg', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">We expect our judges to be honest and wise.&nbsp;Their integrity and impartiality are the bedrock of the entire judicial system. We trust them to ensure fair trials, to protect the rights of all litigants, to punish those who do wrong, and to oversee the orderly and efficient flow of justice.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;But what happens when a judge bends the law or takes a bribe?&nbsp;It&rsquo;s rare, but it happens.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;Lacy Stoltz is an investigator for the Florida Board on Judicial Conduct. She is a lawyer, not a cop, and it is her job to respond to complaints dealing with judicial misconduct. After nine years with the Board, she knows that most problems are caused by incompetence, not corruption.&nbsp;</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;But a corruption case eventually crosses her desk.&nbsp;A previously disbarred lawyer is back in business with a new identity. He now goes by the name Greg Myers, and he claims to know of a Florida judge who has stolen more money than all other crooked judges combined. And not just crooked judges in Florida.&nbsp;All judges, from all states, and throughout U.S. history.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;What&rsquo;s the source of the ill-gotten gains? It seems the judge was secretly involved with the construction of a large casino on Native American land. The Coast Mafia financed the casino and is now helping itself to a sizable skim of each month&rsquo;s cash. The judge is getting a cut and looking the other way.&nbsp;It&rsquo;s a sweet deal: Everyone is making money.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;But now Greg wants to put a stop to it. His only client is a person who knows the truth and wants to blow the whistle and collect millions under Florida law.&nbsp;Greg files a complaint with the Board on Judicial Conduct, and the case is assigned to Lacy Stoltz, who immediately suspects that this one could be dangerous.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp;Dangerous is one thing.&nbsp;Deadly is something else.</span></p>', 'Horror'),
(20, ' Sir Arthur Conan Doyle', ' Arthur, Conan, Doyle, Sherlock, Holmes', 'Sherlock Holmes', 600, 'sherlock.jpg', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Since his first appearance in&nbsp;</span><em style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Beeton&rsquo;s Christmas Annual</em><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;in 1887, Sir Arthur Conan Doyle&rsquo;s Sherlock Holmes has been one of the most beloved fictional characters ever created. Now, in two paperback volumes, Bantam presents all fifty-six short stories and four novels featuring Conan Doyle&rsquo;s classic hero--a truly complete collection of Sherlock Holmes&rsquo;s adventures in crime!</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Volume I includes the early novel&nbsp;</span><strong style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">A Study in Scarlet</strong><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">, which introduced the eccentric genius of Sherlock Holmes to the world. This baffling murder mystery, with the cryptic word Rache written in blood, first brought Holmes together with Dr. John Watson. Next,&nbsp;</span><strong style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">The Sign of Four</strong><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;presents Holmes&rsquo;s famous &ldquo;seven percent solution&rdquo; and the strange puzzle of Mary Morstan in the quintessential locked-room mystery.&nbsp;</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Also included are Holmes&rsquo;s feats of extraordinary detection in such famous cases as the chilling&nbsp;</span><strong style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&ldquo; The Adventure of the Speckled Band,&rdquo;</strong><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;the baffling riddle of&nbsp;</span><strong style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&ldquo;The Musgrave Ritual,&rdquo;</strong><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;and the ingeniously plotted&nbsp;</span><strong style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&ldquo;The Five Orange Pips,&rdquo;</strong><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">&nbsp;tales that bring to life a Victorian England of horse-drawn cabs, fogs, and the famous lodgings at 221B Baker Street, where Sherlock Holmes earned his undisputed reputation as the greatest fictional detective of all time.</span></p>', 'Mystery'),
(21, ' J.K. Rowling', 'Harry, Potter,Cursed, Child J.K., Rowling, ', 'Harry Potter and the Cursed Child', 460, 'hpcc.jpg', '<p><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">Based on an original new story by J.K. Rowling, John Tiffany and Jack Thorne, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play received its world premiere in London&rsquo;s West End on 30th July 2016.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">It was always difficult being Harry Potter and it isn&rsquo;t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children.</span><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><br style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;" /><span style="color: #333333; font-family: Arial, sans-serif; font-size: 14px;">While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.</span></p>', 'Science Fiction'),
(23, 'Timothy Zahn', 'Timothy, Zahn, Thrawn, star, war ', 'Thrawn (Star Wars)', 550, 'starwar.jpg', '<p>This is the most famous novel .this book needs no introduction.</p>\r\n<p>The Star Wars legacy with a deep look at Thrawn</p>', 'Science Fiction'),
(24, 'Half GirlFriend', 'Half, Girl,Friend, Chetan, Bhagat', 'Half Girlfriend', 300, 'half gf.jpg', '<p>Half Girlfriend is a story of Bihari boy Madhav whofalls in love with Ria.</p>\n<p>Madhav belongs to middle class family while Ria is from higher class and both have different lifestyles.</p>\n<p>The story revolves around how will Madhav make RIa fall in love with him to.</p>\n<p>To know more read the book.</p>', 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `bookid` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`) VALUES
('Drama'),
('Horror'),
('Mystery'),
('Romance'),
('Science Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(200) NOT NULL,
  `cust_ip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_ip`, `name`, `email`, `password`, `phone`) VALUES
(11, '::1', 'priyesh patel', 'safal.priyesh@gmail.com', '12341234', 9757104581),
(12, '::1', 'Krish Parekh', 'kp@gmail.com', '10101010', 9898989863);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `bookid_2` (`bookid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `book_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Books`
--
ALTER TABLE `Books`
  ADD CONSTRAINT `cat` FOREIGN KEY (`category`) REFERENCES `category` (`name`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `bfk` FOREIGN KEY (`bookid`) REFERENCES `Books` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
