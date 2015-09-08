create table foods (fid int primary key, name varchar(20), price int);

create table foods (fid int primary key, name varchar(20) not null, price int not null);

create table foods (fid int primary key auto_increment, name varchar(20) not null, price int not null);


insert into foods(fid) values(1000);
insert into foods(fid, name, price) values(1000, '', 0);


delete from foods; -- deletes only the info inside the data structure, not the DS itself
insert into foods(...);
 
drop table foods; -- deletes the data structure

create table persoane(cnp int primary key, nume varchar(240) not null, prenume varchar(240) not null);

--
insert into persoane(cnp, nume, prenume) values(1821217002233, 'john', 'jack');