
CREATE SCHEMA IF NOT EXISTS `folhaobra` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `folhaobra` ;


CREATE TABLE IF NOT EXISTS users (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT NOT NULL,
  `nif` INT NOT NULL,
  `morada` VARCHAR(45) NOT NULL,
  `role` ENUM('admin', 'funcionario', 'cliente') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `telefone_UNIQUE` (`telefone` ASC),
  UNIQUE INDEX `nif_UNIQUE` (`nif` ASC))
ENGINE = InnoDB;


-
CREATE TABLE IF NOT EXISTS  folhaobras (
  `id` INT NOT NULL,
  `valor` decimal(0,0) NOT NULL,
  `total` decimal(0,0) NOT NULL,
  `ivatotal` decimal(0,0) NOT NULL,
  `estado` ENUM('lancamento', 'paga', 'emitida', 'alterada') NOT NULL,
  `funcionario_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_folhaobras_users_idx` (`funcionario_id` ASC),
  INDEX `fk_cliente_id_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_funcionario_id`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_id`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS empresas (
  `id` INT NOT NULL AUTO_INCREMENT,
  `designacao` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT(11) NOT NULL,
  `nif` INT(11) NOT NULL,
  `morada` VARCHAR(45) NOT NULL,
  `localidade` VARCHAR(45) NOT NULL,
  `capitalsocial` decimal(0,0) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nif_UNIQUE` (`nif` ASC))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS ivas (
  `id` INT NOT NULL AUTO_INCREMENT,
  `percentagem` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `vigor` VARCHAR(45) NULL,
  `hora` TIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS servicos (
  `id` INT NOT NULL AUTO_INCREMENT,
  `referencia` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `preco` decimal(0,0) NOT NULL,
  `hora` TIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS linhaobras (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` INT(2) NOT NULL,
  `valor` decimal(0,0) NOT NULL,
  `valoriva` decimal(0,0) NOT NULL,
  `folhaobras_id` INT NOT NULL,
  `ivas_id` INT NOT NULL,
  `servicos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_linhaobras_folhaobras1_idx` (`folhaobras_id` ASC),
  INDEX `fk_linhaobras_ivas1_idx` (`ivas_id` ASC),
  INDEX `fk_linhaobras_servicos1_idx` (`servicos_id` ASC),
  CONSTRAINT `fk_linhaobras`
    FOREIGN KEY (`folhaobras_id`)
    REFERENCES `mydb`.`folhaobras` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_linhaobras_ivas1`
    FOREIGN KEY (`ivas_id`)
    REFERENCES `mydb`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_linhaobras_servicos1`
    FOREIGN KEY (`servicos_id`)
    REFERENCES `mydb`.`servicos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `faturamais`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS empresas (
  `id` INT NOT NULL AUTO_INCREMENT,
  `designacaosocial` VARCHAR(100) NOT NULL,
  `capitalsocial` FLOAT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` INT(9) NOT NULL,
  `nif` INT(9) NOT NULL,
  `morada` VARCHAR(100) NOT NULL,
  `codigopostal` INT(8) NOT NULL,
  `localidade` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email` (`email` ASC),
  UNIQUE INDEX `nif` (`nif` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `faturamais`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` INT(9) NOT NULL,
  `nif` INT(9) NOT NULL,
  `morada` VARCHAR(100) NOT NULL,
  `codigopostal` VARCHAR(8) NOT NULL,
  `localidade` VARCHAR(40) NOT NULL,
  `role` ENUM('admin', 'funcionario', 'cliente') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email` (`email` ASC),
  UNIQUE INDEX `nif` (`nif` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `folhaobras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado_id` INT NOT NULL,
  `cliente_id` INT NOT NULL,
  `funcionario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `IDCLIENTE_FK` (`cliente_id` ASC),
  INDEX `IDFUNCIONARIO_FK` (`funcionario_id` ASC),
  CONSTRAINT `IDCLIENTE_FK`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `faturamais`.`users` (`id`),
  CONSTRAINT `IDFUNCIONARIO_FK`
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `faturamais`.`users` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `faturamais`.`ivas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ivas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `percentagem` INT NOT NULL,
  `valor` INT NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `vigor` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `faturamais`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `iva_id` INT NOT NULL,
  `hora` TIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `IDTAXA_P_FK` (`iva_id` ASC),
  CONSTRAINT `IDTAXA_P_FK`
    FOREIGN KEY (`iva_id`)
    REFERENCES `faturamais`.`ivas` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `faturamais`.`linhaobras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS linhaobras (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` INT NOT NULL,
  `quantidade` DECIMAL(10,2) NOT NULL,
  `valoriva` DECIMAL(10,2) NOT NULL,  
  `folhasobra_id` INT NOT NULL,
  `servico_id` INT NOT NULL,
  `iva_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `IDFATURA_FK` (`folhasobra_id` ASC),
  INDEX `IDPRODUTO_FK` (`servico_id` ASC),
  INDEX `IDIVA_LF_FK` (`iva_id` ASC),
  CONSTRAINT `IDFATURA_FK`
    FOREIGN KEY (`folhasobra_id`)
    REFERENCES `faturamais`.`folhaobras` (`id`),
  CONSTRAINT `IDIVA_LF_FK`
    FOREIGN KEY (`iva_id`)
    REFERENCES `faturamais`.`ivas` (`id`),
  CONSTRAINT `IDPRODUTO_FK`
    FOREIGN KEY (`servico_id`)
    REFERENCES `faturamais`.`servicos` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;