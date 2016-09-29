SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `clients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `identification` VARCHAR(25) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `size` VARCHAR(45) NOT NULL,
  `type` ENUM('KIDS','WOMEN','MEN') NOT NULL DEFAULT 'MEN',
  `price` VARCHAR(10) NOT NULL,
  `tshirts_colors_id` INT NOT NULL,
  `logo_type` VARCHAR(45) NOT NULL,
  `logos_id` INT NULL,
  `logo_paper` VARCHAR(45) NULL,
  `image` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_tshirts_colors1_idx` (`tshirts_colors_id` ASC),
  INDEX `fk_products_logos1_idx` (`logos_id` ASC),
  CONSTRAINT `fk_products_tshirts_colors1`
    FOREIGN KEY (`tshirts_colors_id`)
    REFERENCES `tshirts_colors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_logos1`
    FOREIGN KEY (`logos_id`)
    REFERENCES `logos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tshirts_colors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tshirts_colors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `image` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `logos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `logos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL,
  `image` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `size` VARCHAR(45) NOT NULL,
  `type` ENUM('KIDS','WOMEN','MEN') NOT NULL DEFAULT 'MEN',
  `price` VARCHAR(10) NOT NULL,
  `tshirts_colors_id` INT NOT NULL,
  `logo_type` VARCHAR(45) NOT NULL,
  `logos_id` INT NULL,
  `logo_paper` VARCHAR(45) NULL,
  `image` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_tshirts_colors1_idx` (`tshirts_colors_id` ASC),
  INDEX `fk_products_logos1_idx` (`logos_id` ASC),
  CONSTRAINT `fk_products_tshirts_colors1`
    FOREIGN KEY (`tshirts_colors_id`)
    REFERENCES `tshirts_colors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_logos1`
    FOREIGN KEY (`logos_id`)
    REFERENCES `logos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invoices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NOT NULL,
  `more` TEXT NULL,
  `clients_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_invoices_clients1_idx` (`clients_id` ASC),
  CONSTRAINT `fk_invoices_clients1`
    FOREIGN KEY (`clients_id`)
    REFERENCES `clients` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `products_id` INT NOT NULL,
  `quantity` VARCHAR(45) NOT NULL,
  `print_type` ENUM('TRANSFER','FILM') NOT NULL,
  `print_image` VARCHAR(45) NULL,
  `invoices_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_orders_products_idx` (`products_id` ASC),
  INDEX `fk_orders_invoices1_idx` (`invoices_id` ASC),
  CONSTRAINT `fk_orders_products`
    FOREIGN KEY (`products_id`)
    REFERENCES `products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_invoices1`
    FOREIGN KEY (`invoices_id`)
    REFERENCES `invoices` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `type` ENUM('USER','ADMIN','CLIENT') NOT NULL DEFAULT 'CLIENT',
  `email` VARCHAR(45) NOT NULL,
  `client_id` VARCHAR(20) NULL,
  `status` ENUM('ACTIVE','DISABLED') NOT NULL DEFAULT 'DISABLED',
  `hash` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
