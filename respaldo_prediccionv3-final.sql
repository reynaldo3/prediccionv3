-- MySQL dump 10.13  Distrib 8.0.37, for Linux (x86_64)
--
-- Host: localhost    Database: prediccionv3
-- ------------------------------------------------------
-- Server version	8.0.37-0ubuntu0.22.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS prediccionv3;

-- Usar la base de datos prediccionv3
USE prediccionv3;

--
-- Table structure for table `formulario_prediccionv3`
--

DROP TABLE IF EXISTS `formulario_prediccionv3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulario_prediccionv3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_alumno` varchar(255) NOT NULL,
  `edad` int NOT NULL,
  `correo` varchar(255) NOT NULL,
  `rut` varchar(255) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `motivacion` int NOT NULL,
  `horas_estudio` int NOT NULL,
  `horas_amigos` int NOT NULL,
  `horas_deporte` int NOT NULL,
  `horas_hobbie` int NOT NULL,
  `estres` int NOT NULL,
  `satisfaccion` int NOT NULL,
  `situacion_laboral` varchar(50) NOT NULL,
  `traslado` int NOT NULL,
  `ingreso_academico` varchar(20) DEFAULT NULL,
  `actividades_duoc` enum('frecuentemente','a veces','nunca') NOT NULL,
  `aprobado` int NOT NULL,
  `reprobado` int NOT NULL,
  `omitido` int NOT NULL,
  `convalidar` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulario_prediccionv3`
--

LOCK TABLES `formulario_prediccionv3` WRITE;
/*!40000 ALTER TABLE `formulario_prediccionv3` DISABLE KEYS */;
/*!40000 ALTER TABLE `formulario_prediccionv3` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-13 11:33:51
