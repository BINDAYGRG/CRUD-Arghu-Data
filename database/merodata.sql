create database merodata;
use merodata;

create table data_arghu (id_arghu int auto_increment, 
	nameeng varchar(150), 
	namenep varchar(150), 
	oldaddresseng varchar(150), 
	oldaddressnep varchar(150),
	currentaddresseng varchar(150),
	currentaddressnep varchar(150),
	vetieng varchar(150),
	vetinep varchar(150),
	syaieng varchar(150),
	syainep varchar(150),	
	username varchar(150),	
	category varchar(150),	
	reference varchar(150),	
	primary key(id_arghu));
ALTER TABLE data_arghu CONVERT TO CHARACTER SET utf8;