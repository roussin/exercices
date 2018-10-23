/*Connexion mysql*/
mysql -h 127.0.0.1 -u root -p

/*Creation base de donnée*/
mysql>
CREATE DATABASE IF NOT EXISTS `street_fighter` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

/* Utilisation de la tables */
USE `street_fighter`;

/* Création de la table personnage */
/*Creation table role*/
CREATE TABLE IF NOT EXISTS `personnage`
(
    `per_nom` VARCHAR(50) NOT NULL,
    `per_degat` INT NOT NULL DEFAULT 0,
    PRIMARY KEY (`per_nom`)

) ENGINE=InnoDB CHARSET=utf8mb4;

/* Création d'un joueur test */
INSERT INTO `personnage` (`per_nom`) VALUES('superman');