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
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `LocationID` (`LocationID`);
ALTER TABLE `events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;