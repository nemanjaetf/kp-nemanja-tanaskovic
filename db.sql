
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `action` varchar(200),
  `user_id` int(11) NOT NULL,
  `log_time` DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
