-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.37-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para emerson
CREATE DATABASE IF NOT EXISTS `emerson` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `emerson`;

-- Copiando estrutura para tabela emerson.pauta_audiencia
CREATE TABLE IF NOT EXISTS `pauta_audiencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `data_audiencia` date NOT NULL,
  `procurador` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status_audiencia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obs_audiencia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `processo_administrativo` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `vt` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `vc` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `comarca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `processo_eletronico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `processo_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `horario` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `reclamante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reclamada` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela emerson.pauta_audiencia: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `pauta_audiencia` DISABLE KEYS */;
INSERT INTO `pauta_audiencia` (`id`, `id_user`, `data_audiencia`, `procurador`, `status_audiencia`, `obs_audiencia`, `processo_administrativo`, `vt`, `vc`, `comarca`, `processo_eletronico`, `processo_civil`, `horario`, `reclamante`, `reclamada`, `status`) VALUES
	(7, 13, '2019-02-02', 'PAULO ARYDES GOMES', 'Não Informado', 'AUDIÊNCIA UNA', '09/0000175/19', '05ª', '', 'NI', '0101388-74.2018.5.01.0223', '', '09:20:00', 'MESSIAS RAMOS DO COUTO', 'MUNICÍPIO DE BELFORD ROXO E OUTROS', 1),
	(8, 13, '2019-01-01', 'PAULO ARYDES GOMES', 'Não Informado', 'AUDIÊNCIA UNA', '09/0000175/20', '05ª', '', 'NI', '0101388-74.2018.5.01.0223', '', '09:20:00', 'MESSIAS RAMOS DO COUTO', 'MUNICÍPIO DE BELFORD ROXO E OUTROS', 1),
	(10, 13, '2019-03-03', 'BRENDON', 'Não Informado', 'AUDIÊNCIA UNA', '09/0000175/21', '05ª', '', 'NI', '0101388-74.2018.5.01.0223', '', '09:20:00', 'MESSIAS RAMOS DO COUTO', 'MUNICÍPIO DE BELFORD ROXO E OUTROS', 1),
	(11, 13, '2019-04-04', '12312312', 'Sine Die para SentenÃ§a', '12', '12/3123123/12', '31Â', '23Â', '312312312312', '1231.2.31.2312', '1312312-31.2312.8.19.2312', '31:23:12', '3123123', '13123123', 1);
/*!40000 ALTER TABLE `pauta_audiencia` ENABLE KEYS */;

-- Copiando estrutura para tabela emerson.pauta_pgm
CREATE TABLE IF NOT EXISTS `pauta_pgm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `proc_judicial` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reclamante` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reclamada` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tramitacao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `data_autuacao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `procurador` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela emerson.pauta_pgm: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pauta_pgm` DISABLE KEYS */;
/*!40000 ALTER TABLE `pauta_pgm` ENABLE KEYS */;

-- Copiando estrutura para tabela emerson.pauta_prazo
CREATE TABLE IF NOT EXISTS `pauta_prazo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `proc_eletronico` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `proc_civil` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `data_prazo` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prazo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status_prazo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `data_despacho` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `despacho` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `oficio` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `secretaria` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `procurador` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `obs_prazo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela emerson.pauta_prazo: ~37 rows (aproximadamente)
/*!40000 ALTER TABLE `pauta_prazo` DISABLE KEYS */;
INSERT INTO `pauta_prazo` (`id`, `id_user`, `proc_eletronico`, `proc_civil`, `data_prazo`, `prazo`, `status_prazo`, `data_despacho`, `despacho`, `oficio`, `secretaria`, `procurador`, `obs_prazo`, `status`) VALUES
	(1, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(2, 0, '4564564-56.4564.5.64', '5464564-56.564.8.19.', '54', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645', '645645645', '6456456456', '4564545645', '6456456456', 1),
	(3, 0, '4564564-56.4564.5.64', '5464564-56.564.8.19.', '54', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645', '645645645', '6456456456', '4564545645', '6456456456', 1),
	(4, 0, '4564564-56.4564.5.64', '5464564-56.564.8.19.', '54', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645', '645645645', '6456456456', '4564545645', '6456456456', 1),
	(5, 0, '4564564-56.4564.5.64', '5464564-56.564.8.19.4564', '54', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645', '645645645', '6456456456', '4564545645', '6456456456', 1),
	(6, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(7, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(8, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(9, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(10, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(11, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(12, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(13, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(14, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(15, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(16, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(17, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(18, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(19, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(20, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(21, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(22, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(23, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(24, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(25, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(26, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(27, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(28, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(29, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(30, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(31, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(32, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(33, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(34, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(35, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(36, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(37, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(38, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(39, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(40, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(41, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(42, 0, '5645645-64.5656.4.56', '4564564-56.5644.8.19', '45/10/10', 'Embargos DeclaratÃ³rios', 'Sine Die para SentenÃ§a', '45', '45645645645645645', '456456456', '45645645', '645645645', '456456456456', 1),
	(43, 13, '4.5645.6.45.6456', '4564564-56.456.8.19.4564', '45/64/5645', 'Embargos DeclaratÃ³rios', 'Aguardando 180 dias', '45/64/5645', '456456', '45645645', '456', '456456', '4564564564', 1);
/*!40000 ALTER TABLE `pauta_prazo` ENABLE KEYS */;

-- Copiando estrutura para tabela emerson.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela emerson.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(13, 'FSDSDFSD', 'brendon@brendon.com', '123'),
	(14, 'TESTE', 'eadsla@sdasad.com', '123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
