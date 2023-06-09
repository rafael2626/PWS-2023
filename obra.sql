-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema obras
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema obras
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `obras` DEFAULT CHARACTER SET utf8mb3 ;
USE `obras` ;

-- -----------------------------------------------------
-- Table `obras`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `obras`.`empresas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `designacao` VARCHAR(45) NOT NULL,
  `capital` DOUBLE NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` CHAR(9) NOT NULL,
  `nif` CHAR(9) NOT NULL,
  `morada` CHAR(8) NOT NULL,
  `codigopostal` CHAR(8) NOT NULL,
  `localidade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `obras`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `obras`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` CHAR(9) NOT NULL,
  `nif` CHAR(9) NOT NULL,
  `morada` VARCHAR(45) NOT NULL,
  `codigopostal` CHAR(7) NOT NULL,
  `localidade` VARCHAR(45) NOT NULL,
  `role` ENUM('admin', 'funcionario', 'cliente') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `obras`.`folhaobras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `obras`.`folhaobras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `estado` ENUM('lancamento', 'emitida', 'paga') NOT NULL,
  `ivatotal` DOUBLE NOT NULL,
  `valortotal` DOUBLE NOT NULL,
  `funcionario_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_fohaobras_users_idx` (`funcionario_id` ASC),
  INDEX `fk_fohaobras_users1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_fohaobras_users`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `obras`.`users` (`id`),
  CONSTRAINT `fk_fohaobras_users1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `obras`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `obras`.`ivas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `obras`.`ivas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` CHAR(2) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `vigor` TINYINT(1) NOT NULL,
  `percentagem` CHAR(2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `obras`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `obras`.`servicos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `referencia` CHAR(12) NOT NULL,
  `precohora` DOUBLE NOT NULL,
  `ivas_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_servicos_ivas1_idx` (`ivas_id` ASC),
  CONSTRAINT `fk_servicos_ivas1`
    FOREIGN KEY (`ivas_id`)
    REFERENCES `obras`.`ivas` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `obras`.`linhaobras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `obras`.`linhaobras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` DOUBLE NOT NULL,
  `quantidade` INT NOT NULL,
  `valoriva` DOUBLE NOT NULL,
  `folhaobras_id` INT NOT NULL,
  `servicos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_linhaobras_fohaobras1_idx` (`folhaobras_id` ASC),
  INDEX `fk_linhaobras_servicos1_idx` (`servicos_id` ASC),
  CONSTRAINT `fk_linhaobras_fohaobras1`
    FOREIGN KEY (`folhaobras_id`)
    REFERENCES `obras`.`folhaobras` (`id`),
  CONSTRAINT `fk_linhaobras_servicos1`
    FOREIGN KEY (`servicos_id`)
    REFERENCES `obras`.`servicos` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
