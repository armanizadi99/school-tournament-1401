create database if not exists forms;
use forms;
create table if not exists users(username varchar(50) not null primary key, email varchar(255) not null  unique, passwordhash varchar(72) not null, regdate  datetime default current_timestamp, type int default 0);
