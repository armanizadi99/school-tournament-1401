create database if not exists forms;
use forms;
create table if not exists users(username varchar(50) not null primary key, email varchar(255) not null  unique, passwordhash varchar(72) not null, regdate  datetime default current_timestamp, type int default 0);
create table if not exists forms(id varchar (10) primary key, creater varchar(50) not null, title varchar(100) not null, madeon datetime default current_timestamp, updatedon datetime default current_timestamp on update current_timestamp);
create table if not exists questions(id int auto_increment primary key, questiontext text(10000) not null, formId varchar(10) not null);
create table if not exists options(id int auto_increment primary key, questionId int not null, optionText varchar(255) not null unique);
