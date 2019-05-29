
drop database HotelManagementSystem;
create database HotelManagementSystem;
use HotelManagementSystem;

CREATE TABLE system_User(
	suid int NOT NULL AUTO_INCREMENT,
	user_level varchar(100),
	user_name VARCHAR(50) NOT NULL,
	password VARCHAR(100) NOT NULL,

	CONSTRAINT PRIMARY KEY(suid)
);

insert into system_User values
(0,'Admin','Sajana','1234'),
(0,'Admin','Budika','12345'),
(0,'Admin','Lakshan','1234');

create table customer(
	cid int NOT NULL AUTO_INCREMENT,
	name varchar(100),
	email varchar(100),
	address varchar(500),
	country varchar(100),
  pas_portId varchar(100),
	NIC varchar(100),
	tel VARCHAR(100),
	CONSTRAINT PRIMARY KEY (cid)
);
insert into customer values
(0,'Kusuma','kusuma@gmail.com','Sri Lanka','Galle','','909898789V','0912345345'),
(0,'Nipuni','nipuni@gmail.com','Sri Lanka','Colombo','','987890989V','03412345345'),
(0,'Rajitha','rajitha@gmail.com','Sri Lanka','Mathara','','987899098V','0312345345');

create table registration(
	reid int NOT NULL AUTO_INCREMENT,
	userName varchar(100) NOT NULL,
	checkin varchar(100) NOT NULL,
	checkout varchar(100) NOT NULL,
	no_of_rooms VARCHAR(100),
	no_of_adults varchar(100),
	no_of_children varchar(100),
  meal_type varchar(100),

	CONSTRAINT PRIMARY KEY (reid)
);

create table facility(
	fid varchar(20),
	facility_Name varchar(100) NOT NULL,
  prices varchar(100),

	CONSTRAINT PRIMARY KEY (fid)
);
insert into facility values
('F0001','Internet','2000.00'),
('F0002','Massage','2000.00'),
('F0003','News Papaer','2000.00'),
('F0004','Fitness Center','2000.00');

create table facility_Detail(
	fid varchar(20),
	reid int,

	CONSTRAINT FOREIGN KEY(fid) REFERENCES facility(fid)
	ON Delete Cascade On update cascade,
	CONSTRAINT FOREIGN KEY(reid) REFERENCES registration(reid)
	ON Delete Cascade On update cascade
);

create table service(
	sid varchar(20),
	service_name varchar(100) NOT NULL,
	price decimal(65,2),

	CONSTRAINT PRIMARY KEY (sid)
);

insert into service values
('S0001','Lundary','2000.00'),
('S0002','Room Service','00.00'),
('S0003','Child Services','2000.00'),
('S0004','Dry Clening','2500.00'),
('S0005','Wellness Center','5000.00'),
('S0006','Car hire','2500.00');

create table service_detail(
	sid varchar(20),
	reid int,

	CONSTRAINT FOREIGN KEY(sid) REFERENCES service(sid)
	ON Delete Cascade On update cascade,
	CONSTRAINT FOREIGN KEY(reid) REFERENCES registration(reid)
	ON Delete Cascade On update cascade
);

create table room(
	rid varchar(100),
	room_type varchar(100) NOT NULL,
	room_floor  varchar(100) NOT NULL,
	bed_type varchar(100),
	room_decription  varchar(100),
	room_number varchar(100) NOT NULL,
	prices VARCHAR(100),

	CONSTRAINT PRIMARY KEY (rid)
);

insert into room values
('R0001','Normal Room','1 st','Singal ','A/C',00001,80000.00),
('R0002','Normal Room','1 st','Singal ','A/C',00002,80000.00),
('R0003','Normal Room','1 st','Singal ','A/C',00003,80000.00),
('R0004','Normal Room','1 st','Singal ','A/C',00004,80000.00),
('R0005','Normal Room','2 nd','Singal ','A/C',00005,80000.00),
('R0006','Luxury Room','2 nd','Singal ','A/C',00006,80000.00),
('R0007','Luxury Room','2 nd','Singal ','A/C',00007,80000.00),
('R0008','Luxury Room','2 nd','Singal ','A/C',00007,80000.00),
('R0009','Luxury Room','2 nd','Singal ','A/C',00008,80000.00),
('R0010','Luxury Room','3 rd','Singal ','A/C',00009,80000.00),
('R0011','Luxury Room','3 rd','Singal ','A/C',00010,80000.00),
('R0012','Super Luxury Room','3 rd','Singal ','A/C',00012,80000.00),
('R0013','Super Luxury Room','3 rd','Singal ','A/C',00013,80000.00),
('R0014','Super Luxury Room','3 rd','Singal ','A/C',00014,80000.00),
('R0015','Super Luxury Room','3 rd','Singal ','A/C',00015,80000.00);

create table room_detail(
	rid varchar(100),
	reid int,

	CONSTRAINT FOREIGN KEY(rid) REFERENCES room(rid)
	ON Delete Cascade On update cascade,
	CONSTRAINT FOREIGN KEY(reid) REFERENCES registration(reid)
	ON Delete Cascade On update cascade
);

create table card(
	caid int NOT NULL AUTO_INCREMENT,
  bank  varchar(100),
	card_id  varchar(100),
  advances VARCHAR(100),
  amount VARCHAR(100),

	CONSTRAINT PRIMARY KEY (caid)
);

create table payment_method(
	pmid int,
  reid int,
  caid int,
  date  varchar(50),
  tax VARCHAR(100),
	discount decimal(65,2),
	amount decimal(65,2),
	balance decimal(65,2),

	CONSTRAINT PRIMARY KEY (pmid),
        CONSTRAINT FOREIGN KEY(reid) REFERENCES registration(reid)
	ON Delete Cascade On update cascade,
        CONSTRAINT FOREIGN KEY(caid) REFERENCES card(caid)
	ON Delete Cascade On update cascade
);
