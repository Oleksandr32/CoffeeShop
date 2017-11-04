CREATE DATABASE `coffeeshop`;

CREATE TABLE `coffeeshop`.`users` ( 
	`id` INT(10) NOT NULL AUTO_INCREMENT , 
	`firstname` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
	`lastname` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
	`username` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
	`email` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
    `password` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	PRIMARY KEY (`id`), UNIQUE (`username`)) 
ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;