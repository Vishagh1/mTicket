use train;

CREATE TABLE `admindatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
)

CREATE TABLE `userdatabase` (
  `UserID` int(10) NOT NULL, -----primary key
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
)

CREATE TABLE `bustransactions` (
  `T_No.` int(10) NOT NULL,----primary key
  `email` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL ,
  `dest` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Bus_No` int(11) NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `card_no` int(25) NOT NULL,
  `expmonth` int(2) NOT NULL,
  `expyear` int(2) NOT NULL,
  `cvv` int(3) NOT NULL,
  `pin` int(4) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Amt` int(10) NOT NULL
)

CREATE TABLE `price` (
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `class` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `Price` int(50) NOT NULL,
  `Route` varchar(25) DEFAULT NULL
)

CREATE TABLE `pricebus` (
  `No.` int(15) NOT NULL,
  `Bus_No.` int(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL
)

CREATE TABLE `traintt` (
  `Panvel` varchar(5) DEFAULT NULL,
  `Khandeshwar` varchar(5) DEFAULT NULL,
  `Manasarovar` varchar(5) DEFAULT NULL,
  `Kharghar` varchar(5) DEFAULT NULL,
  `Belapur CBD` varchar(5) DEFAULT NULL,
  `Seawood Darave` varchar(5) DEFAULT NULL,
  `Nerul` varchar(5) DEFAULT NULL,
  `Juinagar` varchar(5) DEFAULT NULL,
  `Turbhe` varchar(5) DEFAULT NULL,
  `Koparkhairne` varchar(5) DEFAULT NULL,
  `Ghansoli` varchar(5) DEFAULT NULL,
  `Rabale` varchar(5) DEFAULT NULL,
  `Airoli` varchar(5) DEFAULT NULL,
  `Thane` varchar(5) DEFAULT NULL
)


CREATE TABLE `transactions` (
  `T_No.` int(10) NOT NULL, -----primary key
  `email` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Class` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `card_no` int(25) NOT NULL,
  `expmonth` int(2) NOT NULL,
  `expyear` int(2) NOT NULL,
  `cvv` int(3) NOT NULL,
  `pin` int(4) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Amt` int(10) NOT NULL,
  `Route` varchar(25) NOT NULL
)

