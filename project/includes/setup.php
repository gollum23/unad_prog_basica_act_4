<?php
include RELATIVE."/includes/config.php";

$db = NewADOConnection("$DRIVER_DB://$USER_DB:$PASS_DB@$SERVER_DB/$NAME_DB");

$db -> Execute("CREATE TABLE `computers` (
              `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'id del equipo',
              `image` VARCHAR (100) NOT NULL COMMENT 'imagen del equipo',
              `serial` VARCHAR (30) NOT NULL COMMENT 'serial del equipo',
              `processor` VARCHAR (30) NOT NULL COMMENT 'procesador del equipo',
              `brand` VARCHAR (30) NOT NULL COMMENT 'marca del equipo',
              `ram` VARCHAR (12) NOT NULL COMMENT 'cantidad de memoria ram del equipo',
              `hd` VARCHAR (12) NOT NULL COMMENT 'capacidad del disco duro del equipo',
              PRIMARY KEY (`id`)) ENGINE = InnoDB;
    ");

$db -> Execute("CREATE TABLE `administrators`(
              `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'id del usuario',
              `username` VARCHAR (30) NOT NULL COMMENT 'nombre de usuario',
              `password` VARCHAR (100) NOT NULL COMMENT 'password del usuario',
              PRIMARY KEY (`id`)) ENGINE = InnoDB;
    ");

$db -> Execute("INSERT INTO `administrators` VALUES(
              null, 'unad', md5('unad'))
    ");