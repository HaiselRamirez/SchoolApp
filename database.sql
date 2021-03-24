DROP DATABASE IF EXISTS `schoolapp_db`;
CREATE DATABASE IF NOT EXISTS   `schoolapp_db` DEFAULT CHARACTER SET utf8;
USE `schoolapp_db`;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `rol_id` INT NOT NULL AUTO_INCREMENT,
  `rol_nombre` VARCHAR(100) NOT NULL,
  `rol_desc` VARCHAR(255) NULL,
  `creado` DATE NULL DEFAULT now(),
  `editado` DATE NULL,
  PRIMARY KEY (`rol_id`)
)ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;

INSERT INTO `roles`(`rol_nombre`,`rol_desc`) 
VALUES ('Super Usuario','Rol para el desarrollador de la aplicacion'),
('Administrador','Es para el administrador de la aplicacion '),
('Direccion','Es el rol que manejan el personal de la direccion de la escuela'),
('Profesor','Es el rol para los maestros de la escuela'),
('Estudiante','Es el rol para los estudiantes de la escuela'),
('Tutor','Es el rol para los padres y tutores de los estudiantes de la escual'),
('Invitado','Es el rol para todo publico');



DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `pers_id` INT NOT NULL AUTO_INCREMENT,
  `pers_nombre` VARCHAR(100) NOT NULL,
  `pers_apellidos` VARCHAR(100) NOT NULL,
  `pers_correo` VARCHAR(100) NULL,
  `pers_telefono` VARCHAR(15) NULL,
  `pers_direccion` VARCHAR(255) NULL,
  `pers_foto` VARCHAR(50) NOT NULL DEFAULT "user.jpg",
  `pers_cumple` DATE NULL,
  `creado` DATE NULL DEFAULT now(),
  `editado` DATE NULL,
  PRIMARY KEY (`pers_id`)
)ENGINE = InnoDB  DEFAULT CHARACTER SET = utf8;

INSERT INTO `persona`(`pers_nombre`,`pers_apellidos`,`pers_correo`,`pers_telefono`,`pers_direccion`,`pers_cumple`)
VALUES('Haisel','Ramirez','haiselramirez@gmail.com','','','');



DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_usuario` VARCHAR(100) NOT NULL,
  `user_clave` VARCHAR(255) NOT NULL,
  `user_pers_id` INT NOT NULL,
  `user_rol_id` INT NOT NULL,
  `creado` DATE NULL DEFAULT now(),
  `editado` DATE NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY (`user_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO `usuario`(`user_usuario`,`user_clave`,`user_pers_id`,`user_rol_id`)
VALUES ('hasel',md5('yalia123'), 1,1);