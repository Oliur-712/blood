SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `info` (
  `nam` varchar(100) NOT NULL,
  `grp` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `info` (`nam`, `grp`, `num`) VALUES
('Tushar', 'A+', '01712312342'),
('Hasib', 'O+', '01743928421'),
('Riaz', 'AB-', '01743928424'),
('Shad', 'O-', '01743928422'),
('Hazrat', 'A+', '01743928429'),
('Anam', 'AB+', '01743928423'),
('Hasan', 'O+', '01743928425'),
('Riazul', 'A+', '01743928428'),
('Oli', 'AB-', '01743928426'),
('Roni', 'O-', '01743928422'),
('Nish', 'A-', '01743928423');
COMMIT;