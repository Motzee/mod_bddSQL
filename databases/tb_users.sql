DROP TABLE if exists users ;

CREATE TABLE users (
    id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pseudo_user VARCHAR(32) NOT NULL,
    statut_user VARCHAR(32) NOT NULL,
    sel_user VARCHAR(255) NOT NULL,
    mdp_user VARCHAR(255) NOT NULL,
    email_user VARCHAR(255)
) engine=innodb character set utf8 collate utf8_unicode_ci ;