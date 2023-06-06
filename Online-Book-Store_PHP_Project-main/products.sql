

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proproduct`


--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `products` (`id`, `Name`, `Image`, `price`) VALUES
(1, 'C Programming', 'ede.jpg', 350),
(2, 'Python Programming', 'h2.webp', 410),
(3, 'Data Structures With C', 'h3.webp', 400),
(4, 'Object Oriented Programming with C++', 'h4.jpg', 300),
(5, 'Operating System', 'osy.jpg', 300),
(6, 'Database Management System', 'h5.jpg', 360),
(7, 'Advanced Data Structures in c', 'h.jpg', 370),
(8, 'Agile Software Engineering', 'haa.jpg', 200),
(9, 'Web based Application Development with Django Python', 'h8.jpg', 360),
(10, 'Environmental Studies', 'est.jpg', 390);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;




CREATE TABLE `Details` (  
  
  `Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `PinCode` varchar(20) NOT NULL,
  `PaymentMode` varchar(25) NOT NULL,
  `State` varchar(50) NOT NULL
);


INSERT INTO `Details` (`Name`, `Email`, `Address`,`PhoneNumber`, `PinCode`, `PaymentMode`, `State`) VALUES
(`rajesh`, `hari11@gmail.com`, `cbe`,`1234567898`, `641402`, `onlone`, `goa`);



create table `Personal Details`(

`Name` varchar(20) NOT NULL,
  `Email address` varchar(25) NOT NULL,
  `Full Residential Address:` varchar(50) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
   `Select Quantity` int(10) NOT NULL,
  `PinCode` varchar(20) NOT NULL,
  `Select PaymentMode` varchar(25) NOT NULL,
  ` Select State` varchar(50) NOT NULL
);


INSERT INTO `Personal Details` (`Name`, `Email address`, ` Full Residential Address`,`PhoneNumber`,`Select Quantity`,`Pincode`,`Select PaymentMode`,`Select State`) VALUES
(``, ``, ``,``, ``, ``, ``);

create table `LoginDetails`(

`usernme` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
);




create  table `orderdetails`(
`name` varchar(20) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `price:` varchar(50) NOT NULL,
  `total` int(10) NOT NULL
);





create  table `Paymentdetails`(
  `Amount` int NOT NULL,
  `Currency` int NOT NULL,
  `Card Number` int NOT NULL,
  `Expiry Month` date NOT NULL,
  `Expiry Year` date NOT NULL,
  `CVV` int  NOT NULL
);