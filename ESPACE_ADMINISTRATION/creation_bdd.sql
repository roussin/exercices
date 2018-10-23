/*Connexion mysql*/
mysql -h 127.0.0.1 -u root -p

/*Creation base de donnée*/
mysql> CREATE DATABASE IF NOT EXISTS `ESPACE_ADMINISTRATION` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

/*Creation table role*/
CREATE TABLE IF NOT EXISTS `ROLE` (
    `role_id` INT(11) NOT NULL AUTO_INCREMENT,
    `role_libelle` VARCHAR(75) NOT NULL DEFAULT "",
    PRIMARY KEY(`role_id`)
) ENGINE=InnoDB CHARSET=utf8mb4;

/*Creation table user*/
CREATE TABLE IF NOT EXISTS `USER` (
    `user_id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_login` VARCHAR(75) NOT NULL DEFAULT "",
    `user_password` VARCHAR(75) NOT NULL DEFAULT "",
    `role_id_fk` INT NULL, 
    PRIMARY KEY(`user_id`),
    KEY(`role_id_fk`),
    CONSTRAINT `user_role` FOREIGN KEY (`role_id_fk`) REFERENCES `ROLE`(`role_id`) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB CHARSET=utf8mb4;

/*Creation table associations*/
CREATE TABLE IF NOT EXISTS `AUTORISATIONS` (
    `autori_id` INT(11) NOT NULL AUTO_INCREMENT,
    `autori_libelle` VARCHAR(75) NOT NULL DEFAULT "",
    `autori_bool`BOOL NOT NULL,
    PRIMARY KEY(`autori_id`)
) ENGINE = InnoDB CHARSET = utf8mb4;

/*Creation table posseder*/
CREATE TABLE IF NOT EXISTS `POSSEDER` (
    `autori_id_fk` INT(11) NOT NULL,
    `role_id_fk` INT(11) NOT NULL,
    PRIMARY KEY(`autori_id_fk`,`role_id_fk`),
    KEY(`autori_id_fk`),
    KEY(`role_id_fk`),
    CONSTRAINT `posseder_autorisations` FOREIGN KEY (`autori_id_fk`) REFERENCES `AUTORISATIONS`(`autori_id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `posseder_role` FOREIGN KEY (`role_id_fk`) REFERENCES `ROLE`(`role_id`) ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB CHARSET=utf8mb4;

/* Remplissage des champs pour table role et posseder*/

INSERT INTO `ROLE` (`role_libelle`) 
VALUES
('Superadmin'),
('Admin'),
('Invité');

INSERT INTO `AUTORISATIONS` (`autori_id`,`autori_libelle`)
VALUES
(1,'Ajouter'),
(2,'Supprimer'),
(3,'Modifier'),
(4,'Editer'),
(5,'Approuver');

INSERT INTO `POSSEDER` (`role_id_fk`,`autori_id_fk`)
VALUES
(1,1),
(1,2),
(1,3),
(1,4),
(1,5);

INSERT INTO `USER` (`user_id`,`user_login`,`user_password`,`role_id_fk`)
VALUES (1,'Christophe','cr17',1);

INSERT INTO `USER` (`user_login`,`user_password`,`role_id_fk`)
VALUES ('Chris','c17',2);