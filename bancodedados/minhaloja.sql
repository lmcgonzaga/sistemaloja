-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: minhaloja
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

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

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `idpessoa` int(11) DEFAULT NULL,
  `emailcliente` varchar(100) DEFAULT NULL,
  `idcadastrante` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `cliente_FK` (`idpessoa`),
  CONSTRAINT `cliente_FK` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`idpessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,11,'danielasimonealessandrafreitas_@marcofaria.com',7),(2,12,'luccabrunoassuncao_@rjnet.com.br',6),(3,13,'malusophiasales_@mega-vale.com',10),(4,14,'brendaisabellevitoriapinto-84@picolotoengenharia.com.br',7),(5,15,'jessicalunamoraes__jessicalunamoraes@gtx.ag',9),(6,16,'manuelaemanuellybeneditamartins_@tce.am.gov.br',9),(7,17,'tiagodiegoryanbaptista_@mectron.com.br',10),(8,18,'andersongaelmurilonovaes_@profemme.com.br',10),(9,19,'sandrabeneditapatriciagoncalves__sandrabeneditapatriciagoncalves@focoreducao.com.br',6),(10,20,'larissaestersouza-96@jammer.com.br',9),(11,21,'isaacgeraldorenatodepaula-80@demetriushairstudio.com.br',9),(12,22,'juanmartinvitormartins_@campanati.com.br',8),(13,23,'severinothalesalmada-90@gineco.med.br',9),(14,24,'aandersonjorgerodrigocastro@profiledesign.com.br',6),(15,25,'renataalinecortereal-93@accor.com.br',8),(16,26,'stefanymanuelajesus__stefanymanuelajesus@maxilajes.com.br',10),(17,27,'eelianeclarasophiacampos@signainfo.com.br',7),(18,28,'mmaitejenniferalicealmada@superativacoop.com.br',6),(19,29,'jessicastefanynogueira__jessicastefanynogueira@leandroreis.com',7),(20,30,'augustoluismendes__augustoluismendes@zaniniengenharia.com.br',10),(21,31,'ceciliaheloisepriscilacavalcanti_@flexvale.com.br',10),(22,32,'thiagocauecastro_@domain.com.br',6),(23,33,'sueliverabarbosa_@projetochama.com.br',8),(24,34,'eliasdavidasneves-91@mastria.com.br',10),(25,35,'marcosviniciusdanilobarros_@editorazap.com.br',9),(26,36,'vitorrobertolorenzocarvalho__vitorrobertolorenzocarvalho@cabletech.com.br',9),(27,37,'marcelabeatrizassuncao__marcelabeatrizassuncao@solutionimoveis.com.br',7),(28,38,'llucianaheloisecardoso@duoarq.com',10),(29,39,'alanamarligoncalves__alanamarligoncalves@novotempo.com',9),(30,40,'ddiogoleonardobernardodossantos@zoomfoccus.com.br',9),(31,41,'ccarolinemanuelalarissacaldeira@right.com.br',8);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `idendereco` int(11) NOT NULL AUTO_INCREMENT,
  `tipologradouro` varchar(100) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `unidadefederacao` varchar(50) DEFAULT NULL,
  `codigopostal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idendereco`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'Rua ','Cristal, 108','','Sol e Mar','Macaé','RJ','27940-210'),(2,'Rua ','Nilópolis, 390','','Realengo','Rio de Janeiro','RJ','21725-090'),(3,'Praça ','Júlio de Souza Ferreira, 903','','Vargem Grande','Teresópolis','RJ','25990-130'),(4,'Travessa ','do Comércio, 554','','Mar do Norte','Rio das Ostras','RJ','28898-096'),(5,'Travessa ','Nilton Teixeira, 638','','Freguesia','Rio de Janeiro','RJ','22763-678'),(6,'Rua ','Ademar Pineschi, 271','','Boa Sorte','Barra Mansa','RJ','27331-050'),(7,'Rua ','Eduardo Poggi, 626','','Rio D\'Ouro','Japeri','RJ','26480-220'),(8,'Rua ','da República, 603','','Vila Anita','Nova Iguaçu','RJ','26022-740'),(9,'Servidão','Arlindo Moreira da Silva Filho, 712','','Corrêas','Petrópolis','RJ','25720-240'),(10,'Rua ','Eliseu de Alvarenga, 468','','Chatuba','Mesquita','RJ','26587-780'),(11,'Rua ','B, 510','','Vila Camarim','Queimados','RJ','26383-523'),(12,'Rua ','Edgard Barbosa, 309','','Parada Modelo','Guapimirim','RJ','25943-527'),(13,'Rua ','Nelson Rebouças, 766','','Freguesia','Rio de Janeiro','RJ','22763-624'),(14,'Rua ','Vinte e Cinco, 894','','Vila Nanci','Queimados','RJ','26315-230'),(15,'Rua ','Nove, 506','','Marambaia (Manilha)','Itaboraí','RJ','24859-688'),(16,'Rua ','Euclides Bicalho Silva, 558','','Parque São Jorge','Itaguaí','RJ','23845-130'),(17,'Travessa ','Lenilda Batista de Souza, 646','','Fronteira','Macaé','RJ','27961-286'),(18,'Travessa ','Fábia, 359','','Jardim Botânico','São João de Meriti','RJ','25576-085'),(19,'Rua ','Torcato de Magalhães, 914','','Ipiíba','São Gonçalo','RJ','24752-108'),(20,'Rua ','Cirilo José Ferreira, 363','','Doutor Mesquita','Barra do Piraí','RJ','27113-110'),(21,'Rua ','Veréa, 389','','Jacutinga','Mesquita','RJ','26562-260'),(22,'Avenida ','Getúlio de Moura, 928','','Centro','São João de Meriti','RJ','25520-662'),(23,'Rua ','Seis, 550','','Sapê','Itaboraí','RJ','24810-184'),(24,'Vila ','Santa Rita, 585','','Quarteirão Brasileiro','Petrópolis','RJ','25680-152'),(25,'Rua ','Paulino Barbosa, 663','casa 3','Areia Branca','Belford Roxo','RJ','26112-400'),(26,'Vila ','Rohema, 887','','Centro','Barra do Piraí','RJ','27120-070'),(27,'Travessa ','Barreiros, 797','','Parque Mambucaba (Mambucaba)','Angra dos Reis','RJ','23955-460'),(28,'Rua ','Evaldino Pereira de Andrade, 563','','Santa Isabel','São Gonçalo','RJ','24738-787'),(29,'Vila ','Galo Branco, 731','','Lagomar','Macaé','RJ','27966-501'),(30,'Rua ','Clara Lúcia, 842','','Vale do Ipê','Belford Roxo','RJ','26182-360'),(31,'Rua ','Carlos Fox, 131','','Bom Retiro','São Gonçalo','RJ','24726-137'),(32,'Avenida ','Porto da Madame, 164','','Gradim','São Gonçalo','RJ','24431-310'),(33,'Avenida ','Marechal Rondon, 933','','Riachuelo','Rio de Janeiro','RJ','20950-202'),(34,'Travessa ','Um, 588','','Tauá','Rio de Janeiro','RJ','21920-660'),(35,'Rua ','Bandeirante Pedro Teixeira, 148','','Parque Embaixador','Resende','RJ','27537-070'),(36,'Rua ','Coronel Djalma Dias, 962','','Porto do Rosa','São Gonçalo','RJ','24471-200'),(37,'Rua ','Cento e Vinte, 521','','Jardim Interlagos (Ponta Negra)','Maricá','RJ','24917-060'),(38,'Rua ','Cintra, 918','','Cidade Jardim Parque Estoril','Nova Iguaçu','RJ','26064-150'),(39,'Estrada ','Velha Nossa Senhora do Amparo, 933','','Santa Cruz II','Volta Redonda','RJ','27288-190'),(40,'Rua ','do Piriquito, 360','','Inhoaíba','Rio de Janeiro','RJ','23064-620'),(41,'Rua ','Diogo José Ponciano','Apartamento 501','Alto','Teresópolis','RJ','25961-255');
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `idpessoa` int(11) DEFAULT NULL,
  `emailfuncionario` varchar(100) DEFAULT NULL,
  `senhafuncionario` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `idcadastrante` int(11) DEFAULT NULL,
  `statusfuncionario` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,1,'ludwig@suporte.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Suporte',NULL,1),(2,2,'rebeca@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Socio',1,1),(3,3,'francisco@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Socio',1,1),(4,4,'kaique@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Gerente',1,1),(5,5,'silvana@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Vendedor Senior',4,1),(6,6,'claudio@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Vendedor',5,1),(7,7,'betina@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Vendedor',5,1),(8,8,'fabio@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Vendedor',5,1),(9,9,'erick@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Vendedor',5,1),(10,10,'jorge@loja.com.br','$2y$10$Qwz.LYnV2tWK0P5Z3cbvPejxMlqQpDs/Tt1MxgnDAB.Ik/d.gNvuC','Vendedor',5,1);
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `idpessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nomepessoa` varchar(100) DEFAULT NULL,
  `sobrenomepessoa` varchar(100) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `ddd` int(3) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `identidade` varchar(15) DEFAULT NULL,
  `ddd2` int(3) DEFAULT NULL,
  `telefone2` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idpessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'Ludwig','Gonzaga','1982-02-06',21,'99999-9999','Masculino','123.456.789-10','12.345.678-9',NULL,NULL),(2,'Rebeca ','Caldeira','1989-04-04',24,'99490-3598','Feminino','392.647.877-20','33.481.393-1',NULL,NULL),(3,'Francisco ','Moura','1997-06-16',22,'99219-6096','Masculino','356.869.297-00','27.601.976-3',NULL,NULL),(4,'Kaique ','Real','1980-10-15',21,'99204-9324','Masculino','278.580.187-36','49.526.828-8',NULL,NULL),(5,'Silvana ','Viana','1982-06-24',22,'99152-7758','Feminino','985.284.237-43','46.228.118-8',NULL,NULL),(6,'Claudio ','Costa','1985-09-20',24,'99397-4106','Masculino','830.519.277-67','44.922.026-6',NULL,NULL),(7,'Betina','Rodrigues','1995-06-13',21,'99757-3690','Feminino','995.559.007-60','16.169.456-1',NULL,NULL),(8,'Fabio','Luz','1996-08-19',24,'99816-7252','Masculino','042.599.747-26','11.330.534-5',NULL,NULL),(9,'Erick ','Lima','1984-10-05',21,'99601-6269','Masculino','396.584.827-59','30.725.581-5',NULL,NULL),(10,'Jorge ','Aragao','1994-02-18',21,'99465-8890','Masculino','157.053.167-63','50.910.743-6',NULL,NULL),(11,'Daniela ','Freitas','1997-10-20',22,'99518-2155','Feminino','428.141.967-58','19.818.088-3',NULL,NULL),(12,'Lucca ','Assuncao','1992-02-04',21,'99247-4104','Masculino','181.173.977-65','21.240.761-2',NULL,NULL),(13,'Malu ','Sales','1990-04-30',21,'99642-1447','Feminino','385.475.077-36','43.825.601-3',NULL,NULL),(14,'Brenda ','Pinto','2000-10-31',22,'99102-6227','Feminino','812.589.487-02','40.830.536-8',NULL,NULL),(15,'Jessica ','Moraes','1984-09-15',24,'99260-3690','Feminino','373.270.037-20','31.921.916-1',NULL,NULL),(16,'Manuela ','Martins','1986-10-07',21,'99334-8118','Feminino','895.751.167-98','14.838.459-6',NULL,NULL),(17,'Tiago ','Baptista','1994-04-12',22,'99654-1782','Masculino','581.813.777-53','23.450.497-3',NULL,NULL),(18,'Anderson ','Novaes','1994-11-05',21,'99091-7359','Masculino','730.969.407-46','39.252.070-9',NULL,NULL),(19,'Sandra ','Goncalves','1997-02-28',24,'99227-828','Feminino','581.484.837-52','21.839.209-6',NULL,NULL),(20,'Larissa ','Souza','1987-12-10',22,'99339-9212','Feminino','859.429.167-13','14.591.039-8',NULL,NULL),(21,'Isaac ','Paula','1984-08-05',21,'99423-1834','Masculino','530.884.717-75','35.303.424-1',NULL,NULL),(22,'Juan ','Martins','1994-01-06',21,'99174-4502','Masculino','882.642.967-77','14.829.584-8',NULL,NULL),(23,'Severino ','Almada','1991-01-03',24,'99436-8541','Masculino','737.231.527-16','35.404.310-9',NULL,NULL),(24,'Anderson ','Castro','1993-06-13',24,'99681-2852','Masculino','144.993.367-08','33.705.073-9',NULL,NULL),(25,'Renata ','Real','1985-08-24',21,'99788-9169','Feminino','244.052.057-87','22.076.306-9',NULL,NULL),(26,'Stefany ','Jesus','1998-07-19',21,'99219-2828','Feminino','004.933.597-96','14.977.389-4',NULL,NULL),(27,'Eliane ','Campos','1989-08-31',24,'99016-3549','Feminino','507.221.507-50','44.799.707-5',NULL,NULL),(28,'Maite','Almada','1985-05-18',24,'99309-8106','Feminino','655.415.787-52','21.185.431-1',NULL,NULL),(29,'Jessica ','Nogueira','1990-12-10',22,'99074-438','Feminino','104.271.297-29','45.547.666-4',NULL,NULL),(30,'Augusto ','Mendes','1985-12-21',22,'99089-7058','Masculino','427.985.237-53','28.124.266-5',NULL,NULL),(31,'Cecilia ','Cavalcanti','1980-05-09',21,'99561-6916','Feminino','667.267.177-33','12.659.294-9',NULL,NULL),(32,'Thiago ','Castro','1984-08-29',21,'99407-4965','Masculino','442.337.857-48','45.126.844-1',NULL,NULL),(33,'Sueli ','Barbosa','1992-07-02',22,'99027-1407','Feminino','622.331.157-59','32.788.755-2',NULL,NULL),(34,'Elias ','Neves','1982-11-20',21,'99837-3899','Masculino','149.060.027-22','14.234.819-3',NULL,NULL),(35,'Marcos ','Barros','1986-07-22',21,'99408-6302','Masculino','307.178.467-84','44.368.208-2',NULL,NULL),(36,'Vitor ','Carvalho','1983-02-06',24,'99599-1104','Masculino','335.067.177-23','24.382.224-8',NULL,NULL),(37,'Marcela ','Assuncoo','1983-08-23',21,'99702-9084','Feminino','905.178.727-81','40.711.459-2',NULL,NULL),(38,'Luciana ','Cardoso','1982-05-01',21,'99533-7653','Feminino','007.372.587-05','20.794.066-6',NULL,NULL),(39,'Alana ','Goncalves','1982-12-28',21,'99593-603','Feminino','814.172.137-28','17.105.921-9',NULL,NULL),(40,'Diogo ','Santos','1997-07-05',21,'99599-6374','Masculino','528.708.077-83','17.217.503-3',NULL,NULL),(41,'Caroline ','Caldeira','1988-02-04',24,'99378-3351','Feminino','789.660.977-07','41.482.178-6',24,'99898-9898');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa_endereco`
--

DROP TABLE IF EXISTS `pessoa_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa_endereco` (
  `idpessoaendereco` int(11) NOT NULL AUTO_INCREMENT,
  `idpessoa` int(11) DEFAULT NULL,
  `idendereco` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpessoaendereco`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa_endereco`
--

LOCK TABLES `pessoa_endereco` WRITE;
/*!40000 ALTER TABLE `pessoa_endereco` DISABLE KEYS */;
INSERT INTO `pessoa_endereco` VALUES (1,1,41),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(7,7,7),(8,8,8),(9,9,9),(10,10,10),(11,11,11),(12,12,12),(13,13,13),(14,14,14),(15,15,15),(16,16,16),(17,17,17),(18,18,18),(19,19,19),(20,20,20),(21,21,21),(22,22,22),(23,23,23),(24,24,24),(25,25,25),(26,26,26),(27,27,27),(28,28,28),(29,29,29),(30,30,30),(31,31,31),(32,32,32),(33,33,33),(34,34,34),(35,35,35),(36,36,36),(37,37,37),(38,38,38),(39,39,39),(40,40,40),(41,41,1);
/*!40000 ALTER TABLE `pessoa_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'minhaloja'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-15 21:43:31
