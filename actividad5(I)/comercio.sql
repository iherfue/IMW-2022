drop database if exists comercio;
create database if not exists comercio character set utf8mb4 collate utf8mb4_general_ci;
use comercio;

create table categoria(
	
    id int auto_increment primary key,
    nombre varchar(20)
);

create table productos(
	
    id int auto_increment primary key,
	nombre varchar(50),
    tipo enum('NUEVO','USADO'),
    precio float,
    unidades int,
    categoria int,
    imagen varchar(150),

	foreign key (categoria) references categoria(id) on delete cascade on update cascade
);


insert into categoria(id,nombre) values(1,'PERIFÉRICOS'),(2,'AUDIO'),(3,'REDES');


INSERT INTO productos(id,nombre,tipo,precio,unidades,categoria) values(1,'Ratón Gaming 4000DPI','NUEVO',50.00,20,1),(2,'TECLADO LOGITECH','NUEVO',20.00,7,1),(3,'Altavoces TEMPEST','USADO',67.20,16,2),(4,'TARJETA DE RED USB TP-LINK','NUEVO',5.20,19,3);

