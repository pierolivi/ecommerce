SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_icelandic_ci ;
USE `ecommerce` ;

-- -----------------------------------------------------
-- Table `ecommerce`.`produit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`produit` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `prix` FLOAT NULL,
  `image` VARCHAR(250) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`commentaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ecommerce`.`commentaire` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `auteur` VARCHAR(45) NULL,
  `contenu` VARCHAR(250) NULL,
  `note` FLOAT NULL,
  `produit_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_commentaire_produit`
    FOREIGN KEY (`produit_id`)
    REFERENCES `ecommerce`.`produit` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_commentaire_produit_idx` ON `ecommerce`.`commentaire` (`produit_id` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
