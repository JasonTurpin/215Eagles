CREATE TABLE `scouts` (
    `sc_id` INT(11) NOT NULL AUTO_INCREMENT,
    `sc_name` VARCHAR(255) NOT NULL,
    `sc_number` TINYINT(4) NOT NULL,
    `sc_date` DATE NOT NULL,
    `sc_master_id` INT(11) NOT NULL,
    `created_at` datetime DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL,
    PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `image` (
    `img_id` int(11) NOT NULL AUTO_INCREMENT,
    `img_file` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
    `img_description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
    `img_ishidden` tinyint(4) DEFAULT '0',
    `img_hiddendatetime` datetime DEFAULT NULL,
    `created_at` datetime DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL,
    PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
