--
-- Estrutura para tabela `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `quantidade_quartos` int(11) NOT NULL,
  `possui_wifi` tinyint(1) DEFAULT 1,
  `possui_estacionamento` tinyint(1) DEFAULT 0,
  `data_cadastro` timestamp NULL DEFAULT current_timestamp()
) 

-- --------------------------------------------------------

--
-- Estrutura para tabela `restaurante`
--

CREATE TABLE `restaurante` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `possui_delivery` tinyint(1) DEFAULT 0,
  `possui_wifi` tinyint(1) DEFAULT 1,
  `horario_funcionamento` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT current_timestamp()
) 

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL
) 

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


