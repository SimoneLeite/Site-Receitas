-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/04/2024 às 15:31
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `receitas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro1`
--

DROP TABLE IF EXISTS `cadastro1`;
CREATE TABLE `cadastro1` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `ingredientes` text NOT NULL,
  `modo_preparo` text NOT NULL,
  `qtde_pessoas` int(11) NOT NULL,
  `tempo_preparo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro1`
--

INSERT INTO `cadastro1` (`id`, `titulo`, `ingredientes`, `modo_preparo`, `qtde_pessoas`, `tempo_preparo`) VALUES
(9, 'Vaca Atolada &agrave; Moda Maggi', '1 quilo de costela de boi em peda&ccedil;ossuco de 1 lim&atilde;omeia colher (sopa) de &oacute;leo1 dente de alho amassado2 cebolas picadas1 folha de louro2 tabletes de MAGGI&reg; Caldo Costela1 quilo de mandioca em peda&ccedil;os1 colher (sopa) de salsa picada2 colheres (sopa) de coentro picado', '1.  Em um recipiente, tempere a costela com o suco de lim&atilde;o.2.  Em uma panela de press&atilde;o, aque&ccedil;a o &oacute;leo e doure as costelas. Acrescente o alho e a cebola e refogue. Junte o louro, os tabletes de MAGGI Caldo e adicione 1 litro de &aacute;gua fervente.3.  Tampe a panela e cozinhe em fogo baixo, at&eacute; que a carne esteja macia (cerca de 30 minutos, ap&oacute;s pegar press&atilde;o).4.  Espere sair a press&atilde;o, acrescente a mandioca e deixe cozinhar em panela destampada, por cerca de 15 minutos ou at&eacute; amolecer e formar um caldo encorpado.5.  Polvilhe a salsa e o coentro e sirva a seguir, acompanhado de arroz branco e couve refogada.', 6, '60 minutos'),
(10, 'Frango com Quiabo', '1 quilo de sobrecoxa ou coxa de frango sem pelesuco de meio lim&atilde;o500 g de quiabo em peda&ccedil;os3 colheres (sopa) de &oacute;leo1 cebola em rodelas1 tomate sem pele e sem sementes, picado1 x&iacute;cara (ch&aacute;) de &aacute;gua fervente2 tabletes de MAGGI&reg; Caldo Galinha', '1.  Em um recipiente, coloque o frango e regue com o suco de lim&atilde;o. Reserve.2.  Em uma panela, aque&ccedil;a uma colher (sopa) de &oacute;leo e refogue bem os quiabos. Retire-os da panela e reserve.3.  Na mesma panela, aque&ccedil;a o restante do &oacute;leo e doure os peda&ccedil;os de frango por cerca de 15 minutos. Junte a cebola, o tomate e refogue um pouco mais.4.  Adicione a &aacute;gua fervente e os tabletes de MAGGI Caldo, mexendo bem para dissolv&ecirc;-los. Deixe cozinhar com a panela destampada, por aproximadamente 10 minutos.5.  Acrescente o quiabo reservado e deixe cozinhar por cerca de mais 5 minutos, sacudindo a panela de vez em quando.', 6, '50 minutos'),
(11, 'Arroz com Frango e Pequi', '1 colher (sopa) de azeite\r\n1 x&iacute;cara (ch&aacute;) de arroz lavado e escorrido\r\n2 colheres (sopa) de pequi maduro\r\n1 tablete de MAGGI&reg; Caldo Galinha\r\n2 x&iacute;caras (ch&aacute;) de &aacute;gua\r\n1 x&iacute;cara (ch&aacute;) de peito de frango cozido e desfiado\r\nmeia colher (ch&aacute;) de colorau', '1.  Em um recipiente refrat&aacute;rio de bordas altas, coloque o azeite, o arroz, o pequi, o colorau e misture bem.\r\n\r\n2.  Acrescente o Caldo MAGGI e a &aacute;gua e leve ao micro-ondas por 10 minutos na pot&ecirc;ncia alta.\r\n\r\n3.  Na metade do cozimento acrescente o frango, mexa bem e retorne ao micro-ondas para terminar o cozimento. Retire e sirva a seguir.', 6, '15 minutos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro1`
--
ALTER TABLE `cadastro1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro1`
--
ALTER TABLE `cadastro1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
