SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Monika', 'Paul', 1),
('Vaishnavi', 'Avinash', 100),
('Ali', 'Athar', 140),
('Amit', 'Piya', 50),
('Paul', 'Ravi', 80),
('Mukesh', 'Amit', 130);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Monika', 'monika@gmail.com', 729),
('Paul', 'paul@gmail.com', 1001),
('Ravi', 'ravi@gmail.com', 1480),
('Amit', 'Amit@gmail.com', 990),
('Ali', 'ali@gmail.com', 1010),
('Piya', 'piya@gmail.com', 990),
('Mukesh', 'mukesh@gmail.com', 800),
('Athar', 'athar@gmail.com', 1140),
('Avinash', 'avinash@gmail.com', 960),
('Vaishnavi', 'vaishnavi@gmail.com', 900);
COMMIT;
