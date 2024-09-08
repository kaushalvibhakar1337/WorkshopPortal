SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE TABLE `events` (
  `EventID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `StartDate` varchar(255) NOT NULL,
  `EndDate` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `events` (`EventID`, `Title`, `Description`, `StartDate`, `EndDate`, `Cost`, `LocationID`) VALUES
(1, 'Wedding Anniversary', '1st Anniversary Celebration', '10-Oct-2015', '10-Oct-2016', 25000, 1);
CREATE TABLE `locations` (
  `LocationID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ManagerFName` varchar(255) NOT NULL,
  `ManagerLName` varchar(255) NOT NULL,
  `ManagerEmail` varchar(255) NOT NULL,
  `ManagerNumber` int(11) NOT NULL,
  `MaxCapacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `locations` (`LocationID`, `Name`, `Address`, `ManagerFName`, `ManagerLName`, `ManagerEmail`, `ManagerNumber`, `MaxCapacity`) VALUES
(1, 'Royal Hotel', 'Bray', 'John', 'Byrne', 'John@email.com', 123456, 100);
CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `users` (`username`, `password`, `role`) VALUES
('test', '1234', 'user');
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `LocationID` (`LocationID`);
ALTER TABLE `locations`
  ADD PRIMARY KEY (`LocationID`);
ALTER TABLE `events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `locations`
  MODIFY `LocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;