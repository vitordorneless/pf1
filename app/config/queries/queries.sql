CREATE SCHEMA `pf1` ;
CREATE TABLE `pf1`.`base_cpf` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(11) NOT NULL,
  `status` INT NOT NULL,
  `data_ultima_alteracao` DATETIME NOT NULL,
  PRIMARY KEY (`id`));
  
  select count(1) as todos from base_cpf where cpf = '00729530040';
  
  CREATE TABLE `pf1`.`adesao` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `hash_de_vinvulo` VARCHAR(78) NOT NULL,
  `ip_captura` VARCHAR(145) NOT NULL,
  `cpf_titular` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(145) NOT NULL,
  `email` VARCHAR(145) NOT NULL,
  `nome_mae` VARCHAR(145) NOT NULL,
  `telefone` VARCHAR(25) NOT NULL,
  `nascimento` VARCHAR(12) NOT NULL,
  `celular` VARCHAR(25) NOT NULL,
  `sexo` INT NOT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `rua` VARCHAR(145) NOT NULL,
  `bairro` VARCHAR(145) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(145) NOT NULL,
  `cidade` VARCHAR(145) NOT NULL,
  `uf` VARCHAR(4) NOT NULL,
  `aceite_termos_de_uso` INT NOT NULL,
  `hora_entrada_dos_dados` DATETIME NOT NULL,
  `criado_em` DATETIME NOT NULL,
  `localizacao` TEXT NOT NULL,
  `status` INT NOT NULL,
  `data_ultima_alteracao` DATETIME NOT NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `pf1`.`adesao` 
ADD COLUMN `titular` INT NOT NULL AFTER `ip_captura`,
ADD COLUMN `cpf_dependente` VARCHAR(12) NOT NULL AFTER `cpf_titular`;

select * from adesao;