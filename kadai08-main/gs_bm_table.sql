

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `com` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
