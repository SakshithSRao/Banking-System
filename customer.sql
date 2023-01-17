SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `customer` (
  `srno` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Current_Balance` int(11) NOT NULL,
  `Account_no` int(11) NOT NULL,
  `Phone_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `customer` (`srno`, `fname`, `Email`, `Current_Balance`, `Account_no`, `Phone_No`) VALUES
(1, 'Sakshith S Rao', 'sakshith@gmail.com', 125000, 100100, 928457935),
(2, 'Ramesha', 'ramesh@gmail.com', 140400, 100101, 934658324),
(3, 'Suresha', 'suresh@gmailcom', 75000, 100102, 980350467),
(4, 'Varun', 'varun@gmail.com', 65000, 100103, 945630187),
(5, 'Tarun', 'tarun@gmail.com', 88000, 100104, 970006742),
(6, 'Arun', 'arun@gmail.com', 77000, 100105, 983364201),
(7, 'Mukund', 'mukund@gmail.com', 100000, 100106, 983545729),
(8, 'Harsha', 'harsha@gmail.com', 69000, 100107, 906532891);


CREATE TABLE `transfers` (
  `srno` int(11) NOT NULL,
  `sender_account_no` int(11) NOT NULL,
  `receiver_account_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `transfers` (`srno`, `sender_account_no`, `receiver_account_no`, `amount`, `date_time`, `stat`) VALUES
(1, 100100, 100103, 5000, '2023-01-17 15:45:26', 0),
(2, 100102, 100104, 3399, '2023-01-17 16:26:10', 0),
(3, 100103, 100105, 1999, '2023-01-17 16:30:28', 0);


ALTER TABLE `customer`
  ADD PRIMARY KEY (`srno`);


ALTER TABLE `transfers`
  ADD PRIMARY KEY (`srno`);


ALTER TABLE `customer`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `transfers`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

