DROP DATABASE IF EXISTS `house`;
CREATE DATABASE IF NOT EXISTS `house`;

CREATE TABLE `houses` (
    `hou_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `hou_title` varchar(65) COLLATE utf8_spanish_ci NOT NULL,
    `hou_description` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
    `hou_viv` varchar(30) CHECK (`hou_viv`= 'piso' OR `hou_viv`='adosado' OR `hou_viv`='chalet' OR `hou_viv`='casa rustica'),
    `hou_inm` varchar(30) CHECK (`hou_inm`='vivienda' OR `hou_inm`='obra nueva' OR `hou_inm`='terrenos'),
    `hou_ofe` varchar(30) CHECK (`hou_ofe`='mensual' OR `hou_ofe`='semanal' OR `hou_ofe`='diaria' OR `hou_ofe`='nada'),
    `hou_date` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
    `hou_price` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
    `hou_img` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
    `hou_venta` varchar(10) CHECK (`hou_venta`='comprar' OR `hou_venta`='alquilar'),
    `hou_loc_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `locations` (
    `loc_id` int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `loc_desc` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `houses` ADD FOREIGN KEY (`hou_loc_id`) 
    REFERENCES `locations` (`loc_id`);

INSERT INTO `locations` (`loc_id`, `loc_desc`) VALUES
(1, 'Manacor'),
(2, 'Sencelles'),
(3, 'Selva'),
(4, 'Palma');

INSERT INTO `houses` (`hou_id`, `hou_title`, `hou_description`, `hou_viv`, `hou_inm`, `hou_ofe`, `hou_date`, `hou_price`, `hou_img`, `hou_venta`, `hou_loc_id`) VALUES
(1, 'Casa nueva', 'En perfecto estado', 'piso', 'vivienda', 'nada', '12/12/2020', '400.000', '/houseLaravel/resources/views/img/house-3.png', 'alquilar', 1),
(2, 'Piso en Bañalbufar', 'Todo correcto', 'casa rustica', 'obra nueva', 'mensual', '06/02/2020', '800.000', '/houseLaravel/resources/views/img/house-4.png', 'comprar', 2),
(3, 'Casa increible', 'Vecinos encantadores', 'adosado', 'vivienda', 'diaria', '25/08/2020', '650.000', '/houseLaravel/resources/views/img/house-5.png', 'alquilar', 3),
(5, 'Casa en el pueblo', 'El pueblo es lo mejor', 'piso', 'obra nueva', 'diaria', '16/04/2020', '850.000', '/houseLaravel/resources/views/img/house-6.png', 'alquilar', 4),
(6, 'Casa en el pueblo', 'El pueblo es lo mejor', 'casa rustica', 'terrenos', 'semanal', '16/04/2020', '250.000', '/houseLaravel/resources/views/img/house-7.png', 'comprar', 4),
(7, 'Casa en el pueblo', 'El pueblo es lo mejor', 'adosado', 'vivienda', 'semanal', '16/04/2020', '440.000', '/houseLaravel/resources/views/img/house-8.png', 'alquilar', 4),
(8, 'Casa en el pueblo', 'El pueblo es lo mejor', 'chalet', 'obra nueva', 'semanal', '16/04/2020', '725.000', '/houseLaravel/resources/views/img/house-9.png', 'comprar', 4),
(9, 'Casa en el pueblo', 'El pueblo es lo mejor', 'chalet', 'vivienda', 'semanal', '16/04/2020', '900.000', '/houseLaravel/resources/views/img/house-10.png', 'alquilar', 4),
(10, 'Casa en el pueblo', 'El pueblo es lo mejor', 'chalet', 'terrenos', 'semanal', '16/04/2020', '150.000', '/houseLaravel/resources/views/img/house-11.png', 'comprar', 4);


CREATE TABLE `comments` (
    `com_id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `com_hou_id` int(11) COLLATE utf8_spanish_ci NOT NULL,
    `com_desc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
    `com_author` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
    `com_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `comments` ADD FOREIGN KEY (`com_hou_id`) REFERENCES `houses` (`hou_id`);
INSERT INTO `comments` (`com_id`, `com_hou_id`, `com_desc`, `com_author`, `com_date`) VALUES
(1, 1, 'Pedazo de casa!', 'Pedro Santillana', '2019/12/11'),
(2, 1, 'Menuda oferta', 'Luis Cantero', '2021/01/1'),
(3, 1, 'Increible, me mudo ya!', 'Javier Felipe', '2021/01/7'),
(4, 1, 'Mi casa no tiene puerta... :(', 'Santigo Neruda', '2020/12/14'),
(5, 2, 'Increible, me mudo ya!', 'Javier Felipe', '2020/12/31');

CREATE TABLE `users` (
    `usr_id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `usr_name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
    `usr_pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_pass`) VALUES 
(1,'a','b');

COMMIT;