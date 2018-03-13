create database pbwnya;
 
use pbwnya;

CREATE TABLE `users` ( 
    `id` int(11) NOT NULL auto_increment, 
    `name` varchar(20),
    `komentar` varchar(200),
    `email` varchar(50),  
    PRIMARY KEY (`id`) 
);
