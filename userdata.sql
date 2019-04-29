DROP TABLE IF EXISTS `user`
DROP TABLE IF EXISTS `demo`
CREATE DATABASE `user`
CREATE TABLE `member` (
  `username` varchar(255),
  `password` varchar(255),
  `email` varchar(255),
  `fullname` varchar(255),
  `birthday` varchar(10),
  `sex` varchar(3)
) 