-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.17-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para sistema_odontologia
CREATE DATABASE IF NOT EXISTS `sistema_odontologia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sistema_odontologia`;

-- Volcando estructura para tabla sistema_odontologia.citas
CREATE TABLE IF NOT EXISTS `citas` (
  `id_cita` int(11) NOT NULL,
  `fecha` datetime(6) DEFAULT NULL,
  `Dentistas_id_dentistas` int(11) NOT NULL,
  `Clientes_id_clientes` int(11) NOT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `fk_Citas_Odontologos1_idx` (`Dentistas_id_dentistas`),
  KEY `fk_Citas_Clientes1_idx` (`Clientes_id_clientes`),
  CONSTRAINT `fk_Citas_Clientes1` FOREIGN KEY (`Clientes_id_clientes`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `fk_Citas_Odontologos1` FOREIGN KEY (`Dentistas_id_dentistas`) REFERENCES `dentistas` (`id_dentista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sistema_odontologia.citas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
INSERT INTO `citas` (`id_cita`, `fecha`, `Dentistas_id_dentistas`, `Clientes_id_clientes`) VALUES
	(1, '2020-10-30 11:09:01.000000', 1, 1),
	(2, '2020-07-31 11:09:17.000000', 1, 1);
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;

-- Volcando estructura para tabla sistema_odontologia.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `apellido_cliente` varchar(50) DEFAULT NULL,
  `direccion_cliente` varchar(50) DEFAULT NULL,
  `telefono_cliente` varchar(50) DEFAULT NULL,
  `ci_cliente` varchar(50) DEFAULT NULL,
  `email_cliente` varchar(50) DEFAULT NULL,
  `estado_cliente` tinytext,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sistema_odontologia.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `direccion_cliente`, `telefono_cliente`, `ci_cliente`, `email_cliente`, `estado_cliente`) VALUES
	(1, 'aldo', 'moreno', 'itaugua', '0982435645', '5678980', 'aldo10@gmaiul.com', '1'),
	(2, 'gabriel', 'vera', 'capiata', '0983647895', '7890987', NULL, '1');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla sistema_odontologia.dentistas
CREATE TABLE IF NOT EXISTS `dentistas` (
  `id_dentista` int(11) NOT NULL,
  `nombre_dentista` varchar(50) DEFAULT NULL,
  `apellido_dentista` varchar(50) DEFAULT NULL,
  `direccion_dentista` varchar(50) DEFAULT NULL,
  `estado_dentista` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_dentista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sistema_odontologia.dentistas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `dentistas` DISABLE KEYS */;
INSERT INTO `dentistas` (`id_dentista`, `nombre_dentista`, `apellido_dentista`, `direccion_dentista`, `estado_dentista`) VALUES
	(1, 'Dr. Angel', 'Ramos', 'Itaugua', 1);
/*!40000 ALTER TABLE `dentistas` ENABLE KEYS */;

-- Volcando estructura para tabla sistema_odontologia.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre_empleado` varchar(50) DEFAULT NULL,
  `apellido_empleado` varchar(50) DEFAULT NULL,
  `ci_empleado` varchar(50) DEFAULT NULL,
  `direccion_empleado` varchar(50) DEFAULT NULL,
  `telefono_empleado` varchar(50) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `Usuarios_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  UNIQUE KEY `id_empleado_UNIQUE` (`id_empleado`),
  KEY `fk_empleados_usuarios_idx` (`Usuarios_id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sistema_odontologia.empleados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla sistema_odontologia.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sistema_odontologia.roles: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `nombre`, `descripcion`) VALUES
	(1, 'admin', 'administrador');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla sistema_odontologia.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK1_rol_usuarios` (`rol_id`),
  CONSTRAINT `FK1_rol_usuarios` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla sistema_odontologia.usuarios: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `username`, `password`, `rol_id`, `estado`) VALUES
	(1, 'eloida', NULL, NULL, 1, 0),
	(2, 'melli', 'mel', '12345678', NULL, 0),
	(3, 'mellizaa', NULL, NULL, NULL, 0),
	(4, 'delgin', 'del', '7c222fb2927d828af22f592134e8932480637c0d', 1, 0),
	(5, 'jhkk', NULL, NULL, 1, 0),
	(6, 'admin', 'ford', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 1),
	(7, 'aldo', 'admin', '7c222fb2927d828af22f592134e8932480637c0d', 1, 0),
	(8, 'hgjhj', 'hkkkjk', '7c222fb2927d828af22f592134e8932480637c0d', 1, 0),
	(11, 'yuyuy', 'ytytyt', '7c222fb2927d828af22f592134e8932480637c0d', 1, 0),
	(22, 'yuyuy', 'ytytyt', '7c222fb2927d828af22f592134e8932480637c0d', 1, 0),
	(54, 'yuyuy', 'admin', '7c222fb2927d828af22f592134e8932480637c0d', 1, 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
