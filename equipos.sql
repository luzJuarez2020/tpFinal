drop database if exists equipos;
create database equipos;
use equipos;


create table tractor(
marca varchar(30),
modelo varchar(30),
patente varchar(30) primary key,
nro_motor int,
nro_chasis varchar(30),
anio_fabricacion int,
fecha_service date,
kilometraje int
);

create table arrastrado(
tipo varchar(30),
patente varchar(30) primary key,
chasis int(30)
);


create table rol(
id int primary key,
descripcion varchar(30)
);

create table estado(
id int primary key,
descripcion varchar(30)
);


create table usuario(
nombre varchar (30),
contrasenia varchar(32),
estado int,
dni int primary key,
fecha_nac date,
email varchar(30),
hash varchar(32),
rol int,
foreign key (rol) references rol(id),
foreign key(estado) references estado(id)
);

CREATE TABLE administrador(
id int primary key auto_increment,
dni_usuario int,
foreign key(dni_usuario) references usuario(dni) 
);

CREATE TABLE supervisor(
id int primary key auto_increment,
dni_usuario int,
foreign key(dni_usuario) references usuario(dni) 
);

CREATE TABLE mecanico(
id int primary key auto_increment,
dni_usuario int,
foreign key(dni_usuario) references usuario(dni) 
);

CREATE TABLE chofer(
id int primary key auto_increment,
dni_usuario int,
tipo_licencia varchar(10),
estado enum('DISPONIBLE', 'EN_VIAJE'),
foreign key(dni_usuario) references usuario(dni) 
);


create table viaje(
numero int primary key auto_increment,
fecha date,
origen varchar(30),
destino varchar(30),
fecha_carga date,
estado enum('PENDIENTE', 'ACTIVO', 'FINALIZADO'),
id_supervisor int,
id_chofer int,
id_tractor varchar(30),
id_arrastrado varchar(30),
fecha_llegada_previsto date,
fecha_llegada_real datetime,
fecha_salida_previsto datetime,
fecha_salida_real datetime,
tipo_carga int,
peso_neto decimal(10,2),
hazard boolean,
reefer boolean,
kilometros_previsto decimal(15,2),
kilometros_real decimal(15,2),
combustible_previsto decimal(10,2),
combustible_real decimal(10,2),
peajes_previsto int(10),
peajes_real int(10),
pesajes_previsto int(10),
pesajes_real int(10),
viaticos_previsto int(10),
viaticos_real int(10),
extras_previsto int(10),
extras_real int(10),
fee_previsto int(10),
fee_real int(10),
hazard_precio int(10),
reefer_precio int(10),
gasto_total int(10),
foreign key(id_supervisor) references supervisor(id),
foreign key(id_chofer) references chofer(id) ,
foreign key(id_tractor) references tractor(patente),
foreign key(id_arrastrado) references arrastrado(patente)
);

create table cliente(
cuit int primary key,
direccion varchar(40),
telefono int,
email varchar(50),
id_viaje int,
foreign key(id_viaje) references viaje(numero)
);

CREATE TABLE costo(
id int primary key auto_increment,
id_viaje int,
km int,
litros int,
importe int,
viatico float,
peaje float,
extras float,
latitud float,
longitud float,
foreign key(id_viaje) references viaje(numero)
);

create table carga(
id int primary key auto_increment,
tipo varchar(30),
hazard boolean,
reefer boolean,
temperatura int(10),
peso_neto varchar(15),
id_viaje int,
foreign key(id_viaje) references viaje(numero)
);

CREATE TABLE service(
id int primary key auto_increment,
fecha date,
costo int(30),
id_tractor varchar(30),
id_mecanico int,
foreign key(id_tractor) references tractor(patente),
foreign key(id_mecanico) references mecanico(id)
);



insert into rol(id,descripcion)
values(1,"administrador"),
      (2,"supervisor"),
      (3,"mecanico"),
      (4,"chofer");

insert into estado(id,descripcion)
values(1,"pendiente"),
      (2,"activado");
      
insert into usuario(nombre,contrasenia,estado,dni,fecha_nac,email,hash,rol)
values('luz',123,2,42819089,'2000-11-26','luzjuarez2016@gmail.com','2015478gf997dsc12cds68gf48ergtrf',1),
('lucia',123,2,20819784,'2001-05-11','luzjuarez2016@gmail.com','2015478gf997dsc12cds68gf48ergtrf',2),
('marce',123,2,29419124,'1999-10-20','luzjuarez2016@gmail.com','2015478gf997dsc12cds68gf48ergtrf',4)
;   
      
      
insert into administrador(dni_usuario)
values(42819089);      
      
      

INSERT into tractor(marca, modelo, patente, nro_motor, nro_chasis,anio_fabricacion,fecha_service,kilometraje)
values('M.BENZ','Accelo 1846','AA111BC',11805182,'V17800122', 2019, '2021-01-01', 10000),
      ('M.BENZ','Accelo 1846','AA122DE',14859619,'G88648319', 2019, '2021-01-01', 10000),
      ('M.BENZ','Accelo 1846','AB156FG',47856344,'C23849041', 2019, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AB726YW',78459712,'C54650513', 2020, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AB774CP',45873461,'J46753468', 2020, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AC822YU',17916759,'J60916748', 2020, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AD870QR',66207514,'M30207594', 2020, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AE918LZ',11254989,'C31256965', 2020, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AF966OJ',87662644,'B32632699', 2020, '2021-01-01', 10000),
      ('M.BENZ','Actros 1846','AG989SC',11092565,'F64092078', 2020, '2021-01-01', 10000);

INSERT into arrastrado(tipo,patente,chasis)
values ('Tanque','AA122AA',113418),
       ('Tanque','AB133BC',112105),

       ('Granel','AB233CC',281566),
       ('Granel','CA100CC',640815),

       ('Araña','AA400AC',115824),
       ('Araña','AA154CJ',198512),

       ('Jaula','AC156AS',782174),
       ('Jaula','DC633AT',535337),

       ('CarCarrier','EF000FD',450029),
       ('CarCarrier','FF405GG',123351);














