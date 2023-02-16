-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sis_inventario
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `almacen`
--

DROP TABLE IF EXISTS `almacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `almacen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `almacen` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `almacen`
--

LOCK TABLES `almacen` WRITE;
/*!40000 ALTER TABLE `almacen` DISABLE KEYS */;
INSERT INTO `almacen` VALUES (1,'Oblatos','2023-02-16 04:43:12');
/*!40000 ALTER TABLE `almacen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Equipos Electromecánicos','2017-12-21 20:53:29'),(2,'Taladros','2017-12-21 20:53:29'),(3,'Andamios','2017-12-21 20:53:29'),(4,'Generadores de energía','2017-12-21 20:53:29'),(5,'Equipos para construcción','2017-12-21 20:53:29'),(6,'Martillos mecánicos','2017-12-21 23:06:40'),(7,'Laptop','2023-02-16 03:36:40');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (3,'Juan Villegas',2147483647,'juan@hotmail.com','(300) 341-2345','Calle 23 # 45 - 56','1980-11-02',10,'2023-02-16 00:00:15','2023-02-16 05:00:15'),(4,'Pedro Pérez',2147483647,'pedro@gmail.com','(399) 876-5432','Calle 34 N33 -56','1970-08-07',7,'2017-12-26 17:27:42','2017-12-26 22:27:42'),(5,'Miguel Murillo',325235235,'miguel@hotmail.com','(254) 545-3446','calle 34 # 34 - 23','1976-03-04',32,'2017-12-26 17:27:13','2017-12-27 04:38:13'),(6,'Margarita Londoño',34565432,'margarita@hotmail.com','(344) 345-6678','Calle 45 # 34 - 56','1976-11-30',19,'2019-05-25 01:10:41','2019-05-25 06:10:41'),(7,'Julian Ramirez',786786545,'julian@hotmail.com','(675) 674-5453','Carrera 45 # 54 - 56','1980-04-05',14,'2017-12-26 17:26:28','2017-12-26 22:26:28'),(8,'Stella Jaramillo',65756735,'stella@gmail.com','(435) 346-3463','Carrera 34 # 45- 56','1956-06-05',9,'2017-12-26 17:25:55','2017-12-26 22:25:55'),(9,'Eduardo López',2147483647,'eduardo@gmail.com','(534) 634-6565','Carrera 67 # 45sur','1978-03-04',15,'2019-06-20 15:33:23','2019-06-20 20:33:23'),(10,'Ximena Restrepo',436346346,'ximena@gmail.com','(543) 463-4634','calle 45 # 23 - 45','1956-03-04',18,'2017-12-26 17:25:08','2017-12-26 22:25:08'),(11,'David Guzman',43634643,'david@hotmail.com','(354) 574-5634','carrera 45 # 45 ','1967-05-04',10,'2017-12-26 17:24:50','2017-12-26 22:24:50'),(12,'Gonzalo Pérez',436346346,'gonzalo@yahoo.com','(235) 346-3464','Carrera 34 # 56 - 34','1967-08-09',24,'2017-12-25 17:24:24','2017-12-27 00:30:12');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_almacen` int(11) NOT NULL,
  `estetica` text COLLATE utf8_spanish_ci NOT NULL,
  `cpug` text COLLATE utf8_spanish_ci NOT NULL,
  `precio_remate` text COLLATE utf8_spanish_ci NOT NULL,
  `precio_mayoreo` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,'101','Aspiradora Industrial ','vistas/img/productos/101/105.png',13,1200,2,'2017-12-24 01:11:04',0,'','','',''),(2,1,'102','Plato Flotante para Allanadora','vistas/img/productos/102/940.jpg',6,6300,3,'2017-12-26 15:04:11',0,'','','',''),(3,1,'103','Compresor de Aire para pintura','vistas/img/productos/103/763.jpg',8,4200,12,'2017-12-26 15:03:22',0,'','','',''),(4,1,'104','Cortadora de Adobe sin Disco ','vistas/img/productos/104/957.jpg',16,5600,4,'2017-12-26 15:03:22',0,'','','',''),(5,1,'105','Cortadora de Piso sin Disco ','vistas/img/productos/105/630.jpg',13,2156,7,'2017-12-26 15:03:22',0,'','','',''),(6,1,'106','Disco Punta Diamante ','vistas/img/productos/106/635.jpg',15,1540,5,'2017-12-26 15:04:38',0,'','','',''),(7,1,'107','Extractor de Aire ','vistas/img/productos/107/848.jpg',12,2156,8,'2017-12-26 15:04:11',0,'','','',''),(8,1,'108','Guadañadora ','vistas/img/productos/108/163.jpg',13,2156,7,'2017-12-26 15:03:52',0,'','','',''),(9,1,'109','Hidrolavadora Eléctrica ','vistas/img/productos/109/769.jpg',15,3640,5,'2017-12-26 15:05:09',0,'','','',''),(10,1,'110','Hidrolavadora Gasolina','vistas/img/productos/110/582.jpg',18,3094,2,'2017-12-26 15:05:09',0,'','','',''),(11,1,'111','Motobomba a Gasolina','vistas/img/productos/default/anonymous.png',20,4004,0,'2017-12-21 21:56:28',0,'','','',''),(12,1,'112','Motobomba El?ctrica','vistas/img/productos/default/anonymous.png',20,3360,0,'2017-12-21 21:56:28',0,'','','',''),(13,1,'113','Sierra Circular ','vistas/img/productos/default/anonymous.png',20,1540,0,'2017-12-21 21:56:28',0,'','','',''),(14,1,'114','Disco de tugsteno para Sierra circular','vistas/img/productos/default/anonymous.png',20,6300,0,'2017-12-21 21:56:28',0,'','','',''),(15,1,'115','Soldador Electrico ','vistas/img/productos/default/anonymous.png',20,2772,0,'2017-12-21 21:56:28',0,'','','',''),(16,1,'116','Careta para Soldador','vistas/img/productos/default/anonymous.png',20,5880,0,'2017-12-21 21:56:28',0,'','','',''),(17,1,'117','Torre de iluminacion ','vistas/img/productos/default/anonymous.png',20,2520,0,'2017-12-21 21:56:28',0,'','','',''),(18,2,'201','Martillo Demoledor de Piso 110V','vistas/img/productos/default/anonymous.png',20,7840,0,'2017-12-21 21:56:28',0,'','','',''),(19,2,'202','Muela o cincel martillo demoledor piso','vistas/img/productos/default/anonymous.png',20,13440,0,'2017-12-21 21:56:28',0,'','','',''),(20,2,'203','Taladro Demoledor de muro 110V','vistas/img/productos/default/anonymous.png',20,5390,0,'2017-12-21 21:56:28',0,'','','',''),(21,2,'204','Muela o cincel martillo demoledor muro','vistas/img/productos/default/anonymous.png',20,13440,0,'2017-12-21 21:56:28',0,'','','',''),(22,2,'205','Taladro Percutor de 1/2 Madera y Metal','vistas/img/productos/default/anonymous.png',20,11200,0,'2017-12-21 22:28:24',0,'','','',''),(23,2,'206','Taladro Percutor SDS Plus 110V','vistas/img/productos/default/anonymous.png',20,5460,0,'2017-12-21 21:56:28',0,'','','',''),(24,2,'207','Taladro Percutor SDS Max 110V (Mineria)','vistas/img/productos/default/anonymous.png',20,6440,0,'2017-12-21 21:56:28',0,'','','',''),(25,3,'301','Andamio colgante','vistas/img/productos/default/anonymous.png',20,2016,0,'2017-12-21 21:56:28',0,'','','',''),(26,3,'302','Distanciador andamio colgante','vistas/img/productos/default/anonymous.png',20,2240,0,'2017-12-21 21:56:28',0,'','','',''),(27,3,'303','Marco andamio modular ','vistas/img/productos/default/anonymous.png',20,1260,0,'2017-12-21 21:56:28',0,'','','',''),(28,3,'304','Marco andamio tijera','vistas/img/productos/default/anonymous.png',20,140,0,'2017-12-21 21:56:28',0,'','','',''),(29,3,'305','Tijera para andamio','vistas/img/productos/default/anonymous.png',20,226,0,'2017-12-21 21:56:28',0,'','','',''),(30,3,'306','Escalera interna para andamio','vistas/img/productos/default/anonymous.png',20,378,0,'2017-12-21 21:56:28',0,'','','',''),(31,3,'307','Pasamanos de seguridad','vistas/img/productos/default/anonymous.png',20,105,0,'2017-12-21 21:56:28',0,'','','',''),(32,3,'308','Rueda giratoria para andamio','vistas/img/productos/default/anonymous.png',20,235,0,'2017-12-21 21:56:28',0,'','','',''),(33,3,'309','Arnes de seguridad','vistas/img/productos/default/anonymous.png',20,2450,0,'2017-12-21 21:56:28',0,'','','',''),(34,3,'310','Eslinga para arnes','vistas/img/productos/default/anonymous.png',20,245,0,'2017-12-21 21:56:28',0,'','','',''),(35,3,'311','Plataforma Met?lica','vistas/img/productos/default/anonymous.png',20,588,0,'2017-12-21 21:56:28',0,'','','',''),(36,4,'401','Planta Electrica Diesel 6 Kva','vistas/img/productos/default/anonymous.png',20,4900,0,'2017-12-21 21:56:28',0,'','','',''),(37,4,'402','Planta Electrica Diesel 10 Kva','vistas/img/productos/default/anonymous.png',20,4970,0,'2017-12-21 21:56:28',0,'','','',''),(38,4,'403','Planta Electrica Diesel 20 Kva','vistas/img/productos/default/anonymous.png',20,5040,0,'2017-12-21 21:56:28',0,'','','',''),(39,4,'404','Planta Electrica Diesel 30 Kva','vistas/img/productos/default/anonymous.png',20,5110,0,'2017-12-21 21:56:28',0,'','','',''),(40,4,'405','Planta Electrica Diesel 60 Kva','vistas/img/productos/default/anonymous.png',20,5180,0,'2017-12-21 21:56:28',0,'','','',''),(41,4,'406','Planta Electrica Diesel 75 Kva','vistas/img/productos/default/anonymous.png',20,5250,0,'2017-12-21 21:56:28',0,'','','',''),(42,4,'407','Planta Electrica Diesel 100 Kva','vistas/img/productos/default/anonymous.png',20,5320,0,'2017-12-21 21:56:28',0,'','','',''),(43,4,'408','Planta Electrica Diesel 120 Kva','vistas/img/productos/default/anonymous.png',20,5390,0,'2017-12-21 21:56:28',0,'','','',''),(44,5,'501','Escalera de Tijera Aluminio ','vistas/img/productos/default/anonymous.png',20,490,0,'2017-12-21 21:56:28',0,'','','',''),(45,5,'502','Extension Electrica ','vistas/img/productos/default/anonymous.png',20,518,0,'2017-12-21 21:56:28',0,'','','',''),(46,5,'503','Gato tensor','vistas/img/productos/default/anonymous.png',20,532,0,'2017-12-21 21:56:28',0,'','','',''),(47,5,'504','Lamina Cubre Brecha ','vistas/img/productos/default/anonymous.png',20,532,0,'2017-12-21 21:56:28',0,'','','',''),(48,5,'505','Llave de Tubo','vistas/img/productos/default/anonymous.png',20,672,0,'2017-12-21 21:56:28',0,'','','',''),(49,5,'506','Manila por Metro','vistas/img/productos/default/anonymous.png',20,840,0,'2017-12-21 21:56:28',0,'','','',''),(50,5,'507','Polea 2 canales','vistas/img/productos/default/anonymous.png',20,1260,0,'2017-12-21 21:56:28',0,'','','',''),(51,5,'508','Tensor','vistas/img/productos/508/500.jpg',19,140,1,'2017-12-26 22:26:51',0,'','','',''),(52,5,'509','Bascula ','vistas/img/productos/509/878.jpg',12,182,8,'2017-12-26 22:26:51',0,'','','',''),(53,5,'510','Bomba Hidrostatica','vistas/img/productos/510/870.jpg',8,1078,12,'2017-12-26 22:26:51',0,'','','',''),(54,5,'511','Chapeta','vistas/img/productos/511/239.jpg',16,924,4,'2017-12-26 22:27:42',0,'','','',''),(55,5,'512','Cilindro muestra de concreto','vistas/img/productos/512/266.jpg',16,560,4,'2017-12-26 22:27:41',0,'','','',''),(56,5,'513','Cizalla de Palanca','vistas/img/productos/513/445.jpg',2,630,18,'2019-05-25 06:10:41',0,'','','',''),(57,5,'514','Cizalla de Tijera','vistas/img/productos/514/249.jpg',18,812,15,'2019-06-20 20:33:23',0,'','','',''),(58,5,'515','Coche llanta neumatica','vistas/img/productos/515/174.jpg',16,588,4,'2019-05-25 06:10:41',0,'','','',''),(59,5,'516','Cono slump','vistas/img/productos/516/228.jpg',13,196,7,'2019-06-20 20:33:23',0,'','','',''),(60,5,'517','Cortadora de Baldosin','vistas/img/productos/517/746.jpg',8,1302,12,'2023-02-16 05:00:15',0,'','','',''),(61,7,'HG5467','Lenovo T440','vistas/img/productos/HG5467/717.jpg',5,4555,0,'2023-02-16 05:13:41',0,'','','',''),(62,7,'HG5467','Lenovo w560','vistas/img/productos/HG5467/829.png',4,4500,0,'2023-02-16 05:40:30',0,'','','','');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Administrador','admin','$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG','Administrador','vistas/img/usuarios/admin/191.jpg',1,'2023-02-15 23:55:00','2023-02-16 04:55:00'),(57,'Juan Fernando Urrego','juan','$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS','Vendedor','vistas/img/usuarios/juan/461.jpg',1,'2018-02-06 16:58:50','2023-02-16 02:55:30'),(58,'Julio Gómez','julio','$2a$07$asxx54ahjppf45sd87a5auJRR6foEJ7ynpjisKtbiKJbvJsoQ8VPS','Especial','vistas/img/usuarios/julio/100.png',1,'2023-02-15 21:56:12','2023-02-16 02:56:12'),(59,'Ana Gonzalez','ana','$2a$07$asxx54ahjppf45sd87a5auLd2AxYsA/2BbmGKNk2kMChC3oj7V0Ca','Vendedor','vistas/img/usuarios/ana/260.png',1,'2017-12-26 19:21:40','2019-05-25 06:06:42');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (17,10001,3,1,'[{\"id\":\"1\",\"descripcion\":\"Aspiradora Industrial \",\"cantidad\":\"2\",\"stock\":\"13\",\"precio\":\"1200\",\"total\":\"2400\"},{\"id\":\"2\",\"descripcion\":\"Plato Flotante para Allanadora\",\"cantidad\":\"2\",\"stock\":\"7\",\"precio\":\"6300\",\"total\":\"12600\"},{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"4200\",\"total\":\"4200\"}]',3648,19200,22848,'Efectivo','2018-02-02 01:11:04'),(18,10002,4,59,'[{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"2\",\"stock\":\"18\",\"precio\":\"2156\",\"total\":\"4312\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1540\",\"total\":\"1540\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"2156\",\"total\":\"2156\"}]',2585.52,13608,16193.5,'TC-34346346346','2018-02-02 14:57:20'),(19,10003,5,59,'[{\"id\":\"8\",\"descripcion\":\"Guadañadora \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"2156\",\"total\":\"2156\"}]',1510.88,7952,9462.88,'Efectivo','2018-01-18 14:57:40'),(20,10004,5,59,'[{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"5\",\"stock\":\"14\",\"precio\":\"4200\",\"total\":\"21000\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"2156\",\"total\":\"2156\"}]',5463.64,28756,34219.6,'TD-454475467567','2018-01-25 14:58:09'),(21,10005,6,57,'[{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"5\",\"stock\":\"9\",\"precio\":\"4200\",\"total\":\"21000\"}]',5463.64,28756,34219.6,'TC-6756856867','2018-01-09 14:59:07'),(22,10006,10,1,'[{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"4200\",\"total\":\"4200\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"3\",\"stock\":\"13\",\"precio\":\"2156\",\"total\":\"6468\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"1540\",\"total\":\"1540\"}]',3383.52,17808,21191.5,'Efectivo','2018-01-26 15:03:22'),(23,10007,9,1,'[{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"1540\",\"total\":\"1540\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"8\",\"descripcion\":\"Guadañadora \",\"cantidad\":\"6\",\"stock\":\"13\",\"precio\":\"2156\",\"total\":\"12936\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"3640\",\"total\":\"3640\"}]',3851.68,20272,24123.7,'TC-357547467346','2017-11-30 15:03:53'),(24,10008,12,1,'[{\"id\":\"2\",\"descripcion\":\"Plato Flotante para Allanadora\",\"cantidad\":\"1\",\"stock\":\"6\",\"precio\":\"6300\",\"total\":\"6300\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"5\",\"stock\":\"12\",\"precio\":\"2156\",\"total\":\"10780\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"1540\",\"total\":\"1540\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"3640\",\"total\":\"3640\"}]',4229.4,22260,26489.4,'TD-35745575','2017-12-25 15:04:11'),(25,10009,11,1,'[{\"id\":\"10\",\"descripcion\":\"Hidrolavadora Gasolina\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"3094\",\"total\":\"3094\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"1540\",\"total\":\"1540\"}]',1572.06,8274,9846.06,'TD-5745745745','2017-08-15 15:04:38'),(26,10010,8,1,'[{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"10\",\"descripcion\":\"Hidrolavadora Gasolina\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"3094\",\"total\":\"3094\"}]',1279.46,6734,8013.46,'Efectivo','2017-12-07 15:05:09'),(27,10011,7,1,'[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"812\",\"total\":\"812\"}]',550.62,2898,3448.62,'Efectivo','2017-12-25 22:23:38'),(28,10012,12,57,'[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1078\",\"total\":\"1078\"}]',529.34,2786,3315.34,'TC-3545235235','2017-12-25 22:24:24'),(29,10013,11,57,'[{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"5\",\"stock\":\"14\",\"precio\":\"1302\",\"total\":\"6510\"}]',1449.7,7630,9079.7,'TC-425235235235','2017-12-26 22:24:50'),(30,10014,10,57,'[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"10\",\"stock\":\"9\",\"precio\":\"1078\",\"total\":\"10780\"}]',2261,11900,14161,'Efectivo','2017-12-26 22:25:09'),(31,10015,9,57,'[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"3\",\"stock\":\"16\",\"precio\":\"812\",\"total\":\"2436\"}]',462.84,2436,2898.84,'Efectivo','2017-12-26 22:25:33'),(32,10016,8,57,'[{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"5\",\"stock\":\"11\",\"precio\":\"812\",\"total\":\"4060\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"630\",\"total\":\"630\"}]',1002.82,5278,6280.82,'TD-4523523523','2017-12-26 22:25:55'),(33,10017,7,57,'[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"4\",\"stock\":\"7\",\"precio\":\"812\",\"total\":\"3248\"},{\"id\":\"52\",\"descripcion\":\"Bascula \",\"cantidad\":\"3\",\"stock\":\"17\",\"precio\":\"182\",\"total\":\"546\"},{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"2\",\"stock\":\"18\",\"precio\":\"560\",\"total\":\"1120\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"630\",\"total\":\"630\"}]',1053.36,5544,6597.36,'Efectivo','2017-12-26 22:26:28'),(34,10018,6,57,'[{\"id\":\"51\",\"descripcion\":\"Tensor\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"140\",\"total\":\"140\"},{\"id\":\"52\",\"descripcion\":\"Bascula \",\"cantidad\":\"5\",\"stock\":\"12\",\"precio\":\"182\",\"total\":\"910\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"1078\",\"total\":\"1078\"}]',404.32,2128,2532.32,'Efectivo','2017-12-26 22:26:51'),(35,10019,5,57,'[{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"15\",\"stock\":\"3\",\"precio\":\"630\",\"total\":\"9450\"},{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"560\",\"total\":\"560\"}]',1901.9,10010,11911.9,'Efectivo','2017-12-26 22:27:13'),(36,10020,4,57,'[{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"560\",\"total\":\"560\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"924\",\"total\":\"924\"}]',281.96,1484,1765.96,'TC-46346346346','2017-12-26 22:27:42'),(37,10021,3,1,'[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"196\",\"total\":\"196\"}]',149.8,1498,1647.8,'Efectivo','2018-02-06 22:47:02'),(38,10022,6,1,'[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"812\",\"total\":\"812\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"2\",\"precio\":\"630\",\"total\":\"630\"}]',141.12,3528,3669.12,'Efectivo','2019-05-25 06:10:41'),(39,10023,9,1,'[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"812\",\"total\":\"812\"}]',277.2,2310,2587.2,'Efectivo','2019-06-20 20:33:23'),(40,10024,3,1,'[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"3\",\"stock\":\"8\",\"precio\":\"1302\",\"total\":\"3906\"}]',0,3906,3906,'Efectivo','2023-02-16 05:00:15');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-16  0:21:55
