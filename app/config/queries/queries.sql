CREATE SCHEMA `pf1` ;
CREATE TABLE `pf1`.`base_cpf` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(11) NOT NULL,
  `status` INT NOT NULL,
  `data_ultima_alteracao` DATETIME NOT NULL,
  PRIMARY KEY (`id`));