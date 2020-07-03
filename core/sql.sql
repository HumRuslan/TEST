CREATE DATABASE `book`;

USE `book`;

CREATE TABLE `book` (
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(256) NOT null,
	`autor` varchar(256) NOT null,
	`description` longtext NOT null,
	`urlPhoto` varchar(256) NOT null,
	`booked` boolean DEFAULT false,
	`approval` boolean DEFAULT false);

CREATE TABLE `comment` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `autor` varchar(256) NOT null,
    `comment` longtext NOT null,
	`book_id` int NOT null,
    `approval` boolean DEFAULT false);

create TABLE `order` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(256) not null,
    `email` varchar(256) not null,
    `phone` varchar(256) not null,
    `book_id` int NOT null,
    `approval` boolean DEFAULT 0);

CREATE VIEW `comment_list` as 
	select `comment`.`id` as `id`, `comment`.`autor` as `autor`, `comment`.`comment` as `comment`, `comment`.`approval` as `approval`, `book`.`name` as `book`, `book`.`autor` as `book_autor`
    from `comment`
    	LEFT JOIN `book`
        ON `comment`.`book_id` = `book`.`id`;

CREATE VIEW `order_list` as 
	select `order`.`id` as `id`, `order`.`name` as `name`, `order`.`email` as `email`, `order`.`phone` as `phone`, `order`.`approval` as `approval`, `book`.`name` as `book`, `book`.`autor` as `book_autor`
    from `order`
    	LEFT JOIN `book`
        ON `order`.`book_id` = `book`.`id`