-- MySQL Script generated by MySQL Workbench
-- 01/08/16 12:07:31
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema wf3_gamer
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema wf3_gamer
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `wf3_gamer` DEFAULT CHARACTER SET utf8 ;
USE `wf3_gamer` ;

-- -----------------------------------------------------
-- Table `wf3_gamer`.`gamers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wf3_gamer`.`gamers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(60) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `token` VARCHAR(255) NULL,
  `expire_token` DATETIME NULL,
  `created_at` DATETIME NOT NULL,
  `role` VARCHAR(100) NULL,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(255) NOT NULL,
  `zipcode` VARCHAR(5) NOT NULL,
  `town` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
