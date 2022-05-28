
-- -----------------------------------------------------
-- Table `mydb`.`actas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `actas` (
  `acta_id` INT NOT NULL AUTO_INCREMENT,
  `acta_fecha` DATE NULL,
  `acta_lugar` VARCHAR(255) NULL,
  `acta_titulo` TEXT NULL,
  PRIMARY KEY (`acta_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `profesores` (
  `profe_id` INT NOT NULL AUTO_INCREMENT,
  `profe_nombre` VARCHAR(255) NULL,
  `profe_apellido` VARCHAR(255) NULL,
  `profe_numero` CHAR(10) NULL,
  `profe_correo` VARCHAR(255) NULL,
  `profe_usuario` VARCHAR(255) NULL,
  `profe_password` VARCHAR(255) NULL,
  PRIMARY KEY (`profe_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`asuntos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `asuntos` (
  `asunto_id` INT NOT NULL AUTO_INCREMENT,
  `asunto_detalle` TEXT NULL,
  `acta_id` INT NOT NULL,
  PRIMARY KEY (`asunto_id`),
    FOREIGN KEY (`acta_id`)
    REFERENCES `actas` (`acta_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`acuerdos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `acuerdos` (
  `acuerdo_id` INT NOT NULL AUTO_INCREMENT,
  `acuerdo_detalle` TEXT NULL,
  `acta_id` INT NOT NULL,
  PRIMARY KEY (`acuerdo_id`),
    FOREIGN KEY (`acta_id`)
    REFERENCES `actas` (`acta_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesores_actas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `profesores_actas` (
  `profe_id` INT NOT NULL,
  `acta_id` INT NOT NULL,
  `creador` BOOLEAN NULL,
  `estuve` BOOLEAN NULL,
  PRIMARY KEY (`profe_id`, `acta_id`),
    FOREIGN KEY (`profe_id`)
    REFERENCES `profesores` (`profe_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (`acta_id`)
    REFERENCES `actas` (`acta_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


