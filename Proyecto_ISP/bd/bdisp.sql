/*
SQLyog - Free MySQL GUI v5.11
Host - 5.5.24-log : Database - bdisp
*********************************************************************
Server version : 5.5.24-log
*/


SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `bdisp`;

USE `bdisp`;

/*Table structure for table `tipo_analisis` */

DROP TABLE IF EXISTS `tipo_analisis`;

CREATE TABLE `tipo_analisis` (
  `id_tipo_analisis` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_analisis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_analisis`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_analisis` */

insert into `tipo_analisis` (`id_tipo_analisis`,`nombre_analisis`) values (1,'Micotoxinas');
insert into `tipo_analisis` (`id_tipo_analisis`,`nombre_analisis`) values (2,'Metales Pesados');
insert into `tipo_analisis` (`id_tipo_analisis`,`nombre_analisis`) values (3,'Planguicidas Prohibidos');
insert into `tipo_analisis` (`id_tipo_analisis`,`nombre_analisis`) values (4,'Marea Roja');
insert into `tipo_analisis` (`id_tipo_analisis`,`nombre_analisis`) values (5,'Bacterias Nocivas');

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `rut_empleado` varchar(50) NOT NULL,
  `nombre_empleado` varchar(100) NOT NULL,
  `password_empleado` varchar(100) NOT NULL,
  `email_empleado` varchar(100) NOT NULL,
  `tipo_empleado` varchar(50) NOT NULL,
  `habilitado_empleado` tinyint(1) NOT NULL,
  PRIMARY KEY (`rut_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

insert into `empleado` (`rut_empleado`,`nombre_empleado`,`password_empleado`,`email_empleado`,`tipo_empleado`,`habilitado_empleado`) values ('11.379.616-2','Carolina Soto','088ef99bff55c67dc863f83980a66a9b','csoto@correo.cl','Receptor',1);
insert into `empleado` (`rut_empleado`,`nombre_empleado`,`password_empleado`,`email_empleado`,`tipo_empleado`,`habilitado_empleado`) values ('13.404.758-5','Carmen Carvajal','088ef99bff55c67dc863f83980a66a9b','ccarvajal@correo.cl','Tecnico',1);
insert into `empleado` (`rut_empleado`,`nombre_empleado`,`password_empleado`,`email_empleado`,`tipo_empleado`,`habilitado_empleado`) values ('6.749.299-4','Rigoberto Mena','088ef99bff55c67dc863f83980a66a9b','rmena@correo.cl','Tecnico',1);
insert into `empleado` (`rut_empleado`,`nombre_empleado`,`password_empleado`,`email_empleado`,`tipo_empleado`,`habilitado_empleado`) values ('7.664.709-7','Leopoldo Mendez','088ef99bff55c67dc863f83980a66a9b','lmendez@correo.cl','Administrador',1);

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `codigo_empresa` int(100) NOT NULL AUTO_INCREMENT,
  `rut_empresa` varchar(50) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL,
  `password_empresa` varchar(100) NOT NULL,
  `direccion_empresa` varchar(100) NOT NULL,
  `habilitado_empresa` tinyint(1) NOT NULL,
  PRIMARY KEY (`codigo_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `empresa` */

insert into `empresa` (`codigo_empresa`,`rut_empresa`,`nombre_empresa`,`password_empresa`,`direccion_empresa`,`habilitado_empresa`) values (1,'7.876.342-6','ADMINISTRADORA PLAZA S.A.','04299e213f5391ede16784de41dd847d','Las Parcelas #6611',1);
insert into `empresa` (`codigo_empresa`,`rut_empresa`,`nombre_empresa`,`password_empresa`,`direccion_empresa`,`habilitado_empresa`) values (2,'21.344.687-8','FARMACEUTICA MEDCELL LTDA.','04299e213f5391ede16784de41dd847d','Urbinas #12',1);
insert into `empresa` (`codigo_empresa`,`rut_empresa`,`nombre_empresa`,`password_empresa`,`direccion_empresa`,`habilitado_empresa`) values (3,'7.572.548-5','ADMINISTRADORA DE BENEFICIOS PHARMA BENEFITS CHILE LTDA. ','04299e213f5391ede16784de41dd847d','Vivaceta #1124',1);

/*Table structure for table `particular` */

DROP TABLE IF EXISTS `particular`;

CREATE TABLE `particular` (
  `codigo_particular` int(100) NOT NULL AUTO_INCREMENT,
  `rut_particular` varchar(50) NOT NULL,
  `password_particular` varchar(100) NOT NULL,
  `nombre_particular` varchar(100) NOT NULL,
  `direccion_particular` varchar(100) NOT NULL,
  `email_particular` varchar(100) NOT NULL,
  `telefono_particular` int(100) NOT NULL,
  `habilitado_particular` tinyint(1) NOT NULL,
  PRIMARY KEY (`codigo_particular`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `particular` */

insert into `particular` (`codigo_particular`,`rut_particular`,`password_particular`,`nombre_particular`,`direccion_particular`,`email_particular`,`telefono_particular`,`habilitado_particular`) values (1,'15.828.482-0','e5dee84f405b9366f44feef46df9704d','Luis Jaramillo','Los alamos #123','ljaramillo@correo.cl',92234753,1);
insert into `particular` (`codigo_particular`,`rut_particular`,`password_particular`,`nombre_particular`,`direccion_particular`,`email_particular`,`telefono_particular`,`habilitado_particular`) values (2,'14.722.229-7','e5dee84f405b9366f44feef46df9704d','Juan Carrillo','Miraflores #441','jcarrillo@correo.cl',98864136,1);
insert into `particular` (`codigo_particular`,`rut_particular`,`password_particular`,`nombre_particular`,`direccion_particular`,`email_particular`,`telefono_particular`,`habilitado_particular`) values (3,'6.214.751-2','e5dee84f405b9366f44feef46df9704d','Hermes Muñoz','Brown Norte #515','hmunoz@correo.cl',92245831,1);

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `rut_contacto` varchar(50) NOT NULL,
  `nombre_contacto` varchar(100) NOT NULL,
  `email_contacto` varchar(100) NOT NULL,
  `telefono_contacto` int(15) NOT NULL,
  `empresa_codigoEmpresa` int(100) NOT NULL,
  PRIMARY KEY (`rut_contacto`),
  KEY `FK_contacto` (`empresa_codigoEmpresa`),
  CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`empresa_codigoEmpresa`) REFERENCES `empresa` (`codigo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contacto` */

insert into `contacto` (`rut_contacto`,`nombre_contacto`,`email_contacto`,`telefono_contacto`,`empresa_codigoEmpresa`) values ('13.163.392-0','Marta Lagos','mlagos@correo.cl',98877656,1);
insert into `contacto` (`rut_contacto`,`nombre_contacto`,`email_contacto`,`telefono_contacto`,`empresa_codigoEmpresa`) values ('15.427.720-k','Susana Lara','slara@correo.cl',87651241,2);
insert into `contacto` (`rut_contacto`,`nombre_contacto`,`email_contacto`,`telefono_contacto`,`empresa_codigoEmpresa`) values ('8.952.716-3','Diego Calamar','dcalamar@correo.cl',93341524,3);

  

/*Table structure for table `analisis_muestra` */

DROP TABLE IF EXISTS `analisis_muestra`;

CREATE TABLE `analisis_muestra` (
  `id_analisis_muestra` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_recepcion_muestra` date NOT NULL,
  `temperatura_muestra` decimal(3,1) NOT NULL,
  `cantidad_muestra` int(11) NOT NULL,
  `muestra_codigo_empresa` int(11) DEFAULT NULL,
  `rut_empleado_recibe` varchar(50) NOT NULL,
  `muestra_codigo_particular` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_analisis_muestra`),
  KEY `FK_analisis_muestra` (`rut_empleado_recibe`),
  KEY `FK_analisis_muestra_empresa` (`muestra_codigo_empresa`),
  KEY `FK_analisis_muestra_particular` (`muestra_codigo_particular`),
  CONSTRAINT `analisis_muestra_ibfk_1` FOREIGN KEY (`rut_empleado_recibe`) REFERENCES `empleado` (`rut_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `analisis_muestra_ibfk_2` FOREIGN KEY (`muestra_codigo_empresa`) REFERENCES `empresa` (`codigo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `analisis_muestra_ibfk_3` FOREIGN KEY (`muestra_codigo_particular`) REFERENCES `particular` (`codigo_particular`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `analisis_muestra` */

insert into `analisis_muestra` (`id_analisis_muestra`,`fecha_recepcion_muestra`,`temperatura_muestra`,`cantidad_muestra`,`muestra_codigo_empresa`,`rut_empleado_recibe`,`muestra_codigo_particular`) values (1,'2018-01-14','14.5',2,NULL,'11.379.616-2',1);
insert into `analisis_muestra` (`id_analisis_muestra`,`fecha_recepcion_muestra`,`temperatura_muestra`,`cantidad_muestra`,`muestra_codigo_empresa`,`rut_empleado_recibe`,`muestra_codigo_particular`) values (4,'2018-02-11','7.8',1,NULL,'11.379.616-2',2);
insert into `analisis_muestra` (`id_analisis_muestra`,`fecha_recepcion_muestra`,`temperatura_muestra`,`cantidad_muestra`,`muestra_codigo_empresa`,`rut_empleado_recibe`,`muestra_codigo_particular`) values (5,'2018-03-22','10.1',3,NULL,'11.379.616-2',3);
insert into `analisis_muestra` (`id_analisis_muestra`,`fecha_recepcion_muestra`,`temperatura_muestra`,`cantidad_muestra`,`muestra_codigo_empresa`,`rut_empleado_recibe`,`muestra_codigo_particular`) values (6,'2018-04-01','4.2',2,1,'11.379.616-2',NULL);
insert into `analisis_muestra` (`id_analisis_muestra`,`fecha_recepcion_muestra`,`temperatura_muestra`,`cantidad_muestra`,`muestra_codigo_empresa`,`rut_empleado_recibe`,`muestra_codigo_particular`) values (7,'2018-05-17','11.2',1,2,'11.379.616-2',NULL);
insert into `analisis_muestra` (`id_analisis_muestra`,`fecha_recepcion_muestra`,`temperatura_muestra`,`cantidad_muestra`,`muestra_codigo_empresa`,`rut_empleado_recibe`,`muestra_codigo_particular`) values (8,'2018-05-30','5.6',4,2,'6.749.299-4',NULL);



/*Table structure for table `resultado_analisis` */

DROP TABLE IF EXISTS `resultado_analisis`;

CREATE TABLE `resultado_analisis` (
  `resultado_id_tipo_analisis` int(11) NOT NULL,
  `resultado_id_analisis_muestra` int(11) NOT NULL,
  `fecha_registro_resultado` date NOT NULL,
  `ppm_resultado` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `rut_empleado_analisis` varchar(50) NOT NULL,
  KEY `FK_resultado_analisis` (`resultado_id_tipo_analisis`),
  KEY `FK_id_resultado_analisis` (`resultado_id_analisis_muestra`),
  KEY `FK_rut_resultado_analisis` (`rut_empleado_analisis`),
  CONSTRAINT `resultado_analisis_ibfk_3` FOREIGN KEY (`rut_empleado_analisis`) REFERENCES `empleado` (`rut_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `resultado_analisis_ibfk_1` FOREIGN KEY (`resultado_id_tipo_analisis`) REFERENCES `tipo_analisis` (`id_tipo_analisis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `resultado_analisis_ibfk_2` FOREIGN KEY (`resultado_id_analisis_muestra`) REFERENCES `analisis_muestra` (`id_analisis_muestra`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `resultado_analisis` */

insert into `resultado_analisis` (`resultado_id_tipo_analisis`,`resultado_id_analisis_muestra`,`fecha_registro_resultado`,`ppm_resultado`,`estado`,`rut_empleado_analisis`) values (1,1,'2018-06-01',12,'En Proceso','13.404.758-5');
insert into `resultado_analisis` (`resultado_id_tipo_analisis`,`resultado_id_analisis_muestra`,`fecha_registro_resultado`,`ppm_resultado`,`estado`,`rut_empleado_analisis`) values (2,4,'2018-06-15',16,'En Proceso','6.749.299-4');
insert into `resultado_analisis` (`resultado_id_tipo_analisis`,`resultado_id_analisis_muestra`,`fecha_registro_resultado`,`ppm_resultado`,`estado`,`rut_empleado_analisis`) values (3,5,'2018-06-22',23,'Terminado','6.749.299-4');
insert into `resultado_analisis` (`resultado_id_tipo_analisis`,`resultado_id_analisis_muestra`,`fecha_registro_resultado`,`ppm_resultado`,`estado`,`rut_empleado_analisis`) values (4,6,'2018-06-25',14,'Terminado','13.404.758-5');
insert into `resultado_analisis` (`resultado_id_tipo_analisis`,`resultado_id_analisis_muestra`,`fecha_registro_resultado`,`ppm_resultado`,`estado`,`rut_empleado_analisis`) values (5,7,'2018-06-30',25,'En Proceso','13.404.758-5');
insert into `resultado_analisis` (`resultado_id_tipo_analisis`,`resultado_id_analisis_muestra`,`fecha_registro_resultado`,`ppm_resultado`,`estado`,`rut_empleado_analisis`) values (1,8,'2018-07-01',19,'Terminado','6.749.299-4');


