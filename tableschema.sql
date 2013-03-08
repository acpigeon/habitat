CREATE TABLE `CHECKIN` (
 `CheckinId` int(11) NOT NULL,
 `ProfileId` int(11) NOT NULL,
 `CheckIn` datetime NOT NULL,
 `CheckOut` datetime NOT NULL,
 `HoursWorked` int(11) NOT NULL,
 `Staffid` int(11) NOT NULL,
 `ProjectType` varchar(45) NOT NULL,
 `Comment` varchar(500) DEFAULT NULL,
 `FamilyId` int(11) NOT NULL,
 PRIMARY KEY (`CheckinId`)
) ENGINE=InnoDB 


CREATE TABLE `FAMILYPARTNERS` (
 `FamilyId` int(11) NOT NULL,
 `ProjectId` int(11) NOT NULL,
 PRIMARY KEY (`FamilyId`)
) ENGINE=InnoDB

CREATE TABLE `FAMILY` (
 `FamilyId` int(11) NOT NULL,
 `FamilyName` varchar(45) NOT NULL,
 `SweatHours` int(11) NOT NULL,
 PRIMARY KEY (`FamilyId`,`SweatHours`),
 UNIQUE KEY `FamilyId_UNIQUE` (`FamilyId`)
) ENGINE=InnoDB 


CREATE TABLE `PROJECTS` (
 `ProjectId` int(11) NOT NULL,
 `ProjectName` varchar(45) NOT NULL,
 `ProjectType` varchar(45) NOT NULL,
 `ProjectDescription` varchar(45) DEFAULT NULL,
 `Address1` varchar(45) DEFAULT NULL,
 `Address2` varchar(45) DEFAULT NULL,
 `City` varchar(45) DEFAULT NULL,
 `Zip` varchar(45) DEFAULT NULL,
 `State` varchar(45) DEFAULT NULL,
 `Active` varchar(45) DEFAULT 'Y',
 PRIMARY KEY (`ProjectId`),
 UNIQUE KEY `ProjectId_UNIQUE` (`ProjectId`)
) ENGINE=InnoDB 
