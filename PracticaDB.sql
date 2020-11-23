create database C_idiomas;

use c_idiomas;

create table estudiante(

	id_estudiante int not null primary key auto_increment,
    nombre varchar(60) not null,
	email varchar(70) not null,
    id_leccion int not null
);


insert into estudiante(nombre,email,id_leccion) values("Manuel","manuel98_23@outlook.es",1);
insert into estudiante(nombre,email,id_leccion) values("Pedro","pedro@outlook.es",2);
insert into estudiante(nombre,email,id_leccion) values("Miguel","miguel@outlook.es",1);
insert into estudiante(nombre,email,id_leccion) values("Sara","sara@outlook.es",1);
insert into estudiante(nombre,email,id_leccion) values("Carlos","carlos@outlook.es",2);

select * from estudiante;

create table leccion(

	id_leccion int not null auto_increment primary key,
    id_profe int not null,
    estado varchar(60) not null,
    c_profesor varchar(120),
    c_estudiante varchar(120),
    id_programacion int not null
);

select * from leccion;

insert into leccion(id_profe,estado,c_profesor,c_estudiante,id_programacion) values(1,"PROGRAMADO","Veamos como va","Ya quiero que empiece",2);
insert into leccion(id_profe,estado,c_profesor,c_estudiante,id_programacion) values(2,"TERMINADO","Agradable grupo","Buena leccion",1);

create table programacion(

	id_programacion int not null auto_increment primary key,
    i_programacion varchar(60) not null,
	t_programacion varchar(60) not null
);

select * from programacion;

insert into programacion(i_programacion,t_programacion) values("Lunes","Tarde");
insert into programacion(i_programacion,t_programacion) values("Miercoles","Mañana");

create table profesor(

	id_profe int auto_increment not null primary key,
    p_nombre varchar(60) not null,
    p_idioma varchar(60) not null,
	id_leccion int not null
);

select * from profesor;

insert into profesor(p_nombre,p_idioma,id_leccion) values("Ramon","INGLES",2);
insert into profesor(p_nombre,p_idioma,id_leccion) values("Pier","FRANCES",1);

