-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 06:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `ID` int(255) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `Adress` varchar(255) DEFAULT NULL,
  `Image1` varchar(200) NOT NULL,
  `Image2` varchar(200) NOT NULL,
  `Image3` varchar(200) DEFAULT NULL,
  `Image4` varchar(200) DEFAULT NULL,
  `Image5` varchar(200) DEFAULT NULL,
  `Image6` varchar(200) DEFAULT NULL,
  `Video` varchar(200) DEFAULT 'assets/img/v1.ogg',
  `Description` varchar(1000) NOT NULL,
  `Price` longtext NOT NULL,
  `Area` varchar(200) NOT NULL,
  `Property_type` varchar(200) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Rent',
  `Bedrooms` varchar(200) DEFAULT NULL,
  `Garage` varchar(200) DEFAULT NULL,
  `Kitchen_features` varchar(200) DEFAULT 'HIGH QUALITY APPLIANCES',
  `Elevator` varchar(200) DEFAULT 'No',
  `Bathrooms` varchar(200) DEFAULT NULL,
  `Cooling` varchar(200) NOT NULL DEFAULT 'Central A/C',
  `Exterior` varchar(200) DEFAULT 'Fabrick',
  `Fireplace` varchar(200) DEFAULT 'No',
  `Year` varchar(200) DEFAULT NULL,
  `Heating_type` varchar(200) DEFAULT 'Electric System',
  `Swimming_pool` varchar(200) DEFAULT 'No',
  `Free_wifi` varchar(200) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `Name`, `Location`, `Adress`, `Image1`, `Image2`, `Image3`, `Image4`, `Image5`, `Image6`, `Video`, `Description`, `Price`, `Area`, `Property_type`, `Status`, `Bedrooms`, `Garage`, `Kitchen_features`, `Elevator`, `Bathrooms`, `Cooling`, `Exterior`, `Fireplace`, `Year`, `Heating_type`, `Swimming_pool`, `Free_wifi`) VALUES
(1, 'Jannat Graynight Mood', 'Bastos Yaounde', '3464 Carrefour Bastos', 'assets/img/p-1.jpg', 'assets/img/p-2.jpg', 'assets/img/p-3.jpg', 'assets/img/p-4.jpg', 'assets/img/p-5.jpg', 'assets/img/p-6.jpg', 'assets/img/v1.ogg', 'Spacious, sun-filled corner studio located in the premier full-service. This cozy home can easily accommodate a living area, bedroom, and dinning.', '12,000,000FCFA', '500msq', 'Apartment', 'Sale', '3 Beds', '1', 'Effortlessly stylish worktops', 'Yes', '1', 'Central A/C', 'Finish Brick', 'Yes', 'Built1982', 'Forced air', 'Yes', 'No'),
(2, 'Corner Cottage', 'Littoral, Moungo, Mbanga', '754 Mary River', 'assets/img/a-1.jpg', 'assets/img/a-2.jpg', 'assets/img/a-3.jpg', 'assest/img/a-4.jpg', 'assets/img/a-5.jpg', 'assets/img/a-6.jpg', 'assets/img/v1.ogg', 'With its wall of oversized windows with both southern and eastern exposures, this apartment allows you to enjoy beautiful city views while at the same time providing a sanctuary from the hustle of city life. The apartment comes with a separate full-sized kitchen with all the modern appliances and a beautiful marble bath.', '150,000 FCFA', '100msq', 'House', 'Rent', '4 Bedrooms', '1', 'Effortlessly stylish worktops', 'Yes', '1', 'Central AC', 'Paint', 'No', '1990', 'Electric System', 'No', 'No'),
(3, 'Ivy Cottage', 'Adamawa,Djérem,Ngaoundal', '3456 Predovic Plaza', 'assets/img/b-1.jpg', 'assets/img/b-2.jpg', 'assets/img/b-3.jpg', 'assets/img/b-4.jpg', 'assets/img/b-5.jpg', 'assets/img/b-6.jpg', 'assets/img/v1.ogg', 'Finally, floor to ceiling closets in the hallway complete this home and give you ample storage room. She offers 24-hour doorman, concierge, health club, pool, sauna, children’s playroom, roof deck, live in super, and an independently operated private garage directly accessed through the building.', '200,000 FCFA', '150msq', 'Villas', 'Rent', '2', '1', 'SMART STORAGE', 'No', '1', 'Evaporative Coolers', 'Stucco', 'Yes', '1983', 'Geothermal System', 'Yes', 'Yes'),
(4, 'Orchard Cottage\n', 'South, Mvila, Binyina', '6752 Garnet Circles', 'assets/img/c-1.jfif', 'assets/img/c-2.jpg', 'assets/img/c-3.jpg', 'assets/img/c-4.jpg', 'assets/img/c-5.jpg', 'assets/img/c-6.jpg', 'assets/img/v1.ogg', 'Hard to find 3 bed 2 full bath on a park-like 1 acre lot. This beautiful home has been completely remodeled from top to bottom. Brand new kitchen and bathrooms, all new flooring, plumbing, electric, furnace, HWT, windows, doors, etc..', '8,000,000 FCFA', '300msq', 'Commercial', 'Sale', '3', '2', 'EFFORTLESSLY STYLISH WORKTOPS', 'No', '3', 'State of the Art Cooling', '[value-22]', 'No', '1985', 'Radiant Heat Systems', 'No', 'No'),
(5, 'The Gables\n', 'East, Kadey, Baguéssi', '22653 Jade Stravenue', 'assets/img/d-1.jpg', 'assets/img/d-2.jpg', 'assets/img/d-3.jpg', 'assets/img/d-4.jpg', 'assets/img/d-5.jpg', 'assets/img/d-6.jpg', 'assets/img/v1.ogg', 'More updates than we can list here! Large master suite with a no-step shower. Gorgeous new hardwoods throughout! You won’t want to miss out on this one-of-a-kind home!', '250,000 FCFA', '300msq', 'Apartment', 'Rent', '2', '2', 'BEAUTIFUL FITTINGS', 'No', '2', 'Ductless Mini-Split Air Conditioners', '[value-22]', 'No', '1998', 'Ductless Mini-Split Air Conditioners', 'No', 'Yes'),
(6, 'The White House\n', 'Northwest, Menchum', '4333 Tromp Street', 'assets/img/e-1.jpg', 'assets/img/e-2.jpg', 'assets/img/e-3.jpg', 'assets/img/e-4.jpg', 'assets/img/e-5.jpg', 'assets/img/e-6.jpg', 'assets/img/v1.ogg', 'Adorable Cape Cod on almost an acre that is ready to move in to now! Beautiful hardwood floors, carpet, large master bathroom with double sinks, his and her’s master bedroom closets. Upstairs is floored and ready for your finishing touches, would make a great office, workout room, etc.', '190,000 FCFA', '400msq', 'House', 'Rent', '4', '[value-17]', 'HIGH QUALITY APPLIANCES', 'No', '4', 'Evaporative Coolers', '[value-22]', 'Yes', '2000', 'Evaporative Coolers', 'Yes', 'Yes'),
(7, 'Red House\n', 'Littoral, Sanaga-Maritime, Logot', '57624 Noemy Haven', 'assets/img/a-1.jpg', 'assets/img/a-2.jpg', 'assets/img/a-3.jpg', 'assets/img/a-4.jpg', 'assets/img/a-5.jpg', 'assets/img/a-6.jpg', 'assets/img/v1.ogg', 'Welcome home! The only thing you will need to do is move in. This spacious rambler on 1.7+ acres has been been updated throughout with new ceramic tile, hardwood floors with warranty, stainless steel appliances, quartz countertops, fresh paint and carpet.', '10,000,000 FCFA', '400msq', 'Villas', 'Sale', '3', '1', 'CAREFULLY CONSIDERED LIGHTING', 'No', '3', 'Room Air Conditioners', '[value-22]', 'No', '2002', 'Room Air Conditioners', 'Yes', 'No'),
(8, 'White Cottage\n', 'Centre, Nyong-et-So\'o, Abodomveng', '29208 Adrian Stravenue', 'assets/img/g-1.jpg', 'assets/img/g-2.jpg', 'assets/img/g-3.jpg', 'assets/img/g-4.jpg', 'assets/img/g-5.jpg', 'assets/img/g-6.jpg', 'assets/img/v1.ogg', 'Large front and back yard, level with some trees in the back. Underground electric. Nice deck to grill out on, or enjoy your morning coffee and watch the birds and wildlife. This home has everything you need – come take a tour. Then head over to Main Street where you can find great shops and dining options!', '250,000 FCFA', '350msq', 'Commercial', 'Rent', '2', '1', 'DISTINCT AESTHETIC AND STYLE', 'Yes', '1', 'Heat Pumps', '[value-22]', 'Yes', '1999', 'Heat Pumps', 'No', 'Yes'),
(9, 'Oakland', 'Centre, Mbam-et-Kim', '14550 Gulgowski Creek', 'assets/img/h-1.jpg', 'assets/img/h-2.jpg', 'assets/img/h-3.jpg', 'assets/img/h-4.jpg', 'assets/img/h-5.jpg', 'assets/img/h-6.jpg', 'assets/img/v1.ogg', 'Enjoy your own space and privacy here in this beautifully updated one level home that comes fully furnished. Would make a great full time home or investment property to Airbnb. Featuring 4 bedrooms, 2 full baths and boasting over 1, 330+ finished Sqft.', '200,000 FCFA', '350msq', 'Apartment', 'Rent', '3', '2', 'Layered Lighting', 'No', '2', 'Central Air Conditioner', '[value-22]', 'Yes', '2000', 'Central Air Conditioner', 'Yes', 'No'),
(10, 'Middlearth\n', 'Centre, Haute-Sanaga, Ngaoundé', '38535 Glenna Course', 'assets/img/i-1.jpg', 'assets/img/i-2.jpg', 'assets/img/i-3.jpg', 'assets/img/i-4.jpg', 'assets/img/i-5.jpg', 'assets/img/i-6.jpg', 'assets/img/v1.ogg', 'Spacious living room with hardwood flooring, recessed lights and crown molding. Kitchen with wood cabinetry, tile backsplash and all appliances convey. Gorgeous park like setting with a koi pond, professionally landscaped yard, Flagstone and brick areas, fire pit and fenced in back yard.', '14,000,000 FCFA', '500msq', 'House', 'Sale', '5', '2', 'Durable Flooring', 'Yes', '2', 'Geothermal System', '[value-22]', 'No', '2006', 'Geothermal System', 'Yes', 'Yes'),
(11, 'Mill House', 'East, Kadey', '514 Brain Manors', 'assets/img/j-1.jpg', 'assets/img/j-2.jpg', 'assets/img/j-3.jpg', 'assets/img/j-4.jpg', 'assets/img/j-5.jpg', 'assets/img/i-6.jpg', 'assets/img/v1.ogg', 'The oversized lot allows for rear yard access to the huge storage capabilities in the rear of the home. The country charm does not end in this lovely older home. Three bedrooms 2 bathrooms and step down living room offers almost 1600 square feet of living space and over 10, 000 square feet of land. The garage and storage sheds in the back are a great addition to your use of the property. Do not pass an opportunity to make this house your home.', '300,000 FCFA', '500msq', 'Villas', 'Rent', '4', '2', 'Strong and Stylish Counters', 'Yes', '3', 'Electric System', '[value-21]', 'Yes', '2007', 'Steam Radiant Heat Systems', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(222) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(222) NOT NULL,
  `passwords` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `urole` varchar(222) NOT NULL DEFAULT 'Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullName`, `email`, `username`, `passwords`, `phone`, `urole`) VALUES
(4, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(5, 'NDEH EMMANUEL RIGOBERT', 'emmanuelrigobert000@gmail.com', 'sd', 'dfs', 'dsd', 'Agent'),
(6, 'NDEH EMMANUEL RIGOBERT', 'emmanuelrigobert000@gmail.com', 'asas', 'asa', '(677) 590-4509', 'Agent'),
(7, 'NDEH EMMANUEL RIGOBERT', 'emmanuelrigobert000@gmail.com', 'asas', 'asa', '(677) 590-4509', 'Agent'),
(8, 'LARISSA SWIRRI', 'emmanuelrigobert000@gmail.com', 'rtr', 'rtt', '(677) 590-4509', 'Customer'),
(9, 'Ndam Lami', 'emmanuelrigobert000@gmail.com', 'Raven', 'sirraven', '+678503672', 'Customer'),
(10, 'NDEH EMMANUEL RIGOBERTsdf', 'emmanuelrigobert000@gmail.com', 'sdf', 'dfs', '(677) 590-4509', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`),
  ADD KEY `id` (`ID`),
  ADD KEY `ID_3` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
