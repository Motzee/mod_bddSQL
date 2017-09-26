/*Création d'une base de données*/
CREATE DATABASE if not exists nomBDD character set utf8 collate utf8_unicode_ci ;

USE nomBDD ;

GRANT ALL PRIVILEGES ON nomDB.* TO nomUserSQL'@'localhost' ;
