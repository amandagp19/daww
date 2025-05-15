CREATE DATABASE Perfumaria;
USE Perfumaria;

-- Tabela de Clientes
CREATE TABLE Cliente (
    idCliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    cpf VARCHAR(45) NOT NULL,
    telefone VARCHAR(45) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco TEXT NOT NULL,
    login TEXT NOT NULL,
    senha TEXT NOT NULL
);

-- Tabela de Vendas
CREATE TABLE Venda (
    idVenda INT PRIMARY KEY AUTO_INCREMENT,
    idCliente INT NOT NULL,
    data DATE NOT NULL,
    forma_pagamento TEXT NOT NULL,
    retirada DATE NOT NULL,
    endereco TEXT NOT NULL,
    status TEXT NOT NULL,
    total INT NOT NULL,
    observacoes TEXT,
    FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);

-- Tabela de Categorias
CREATE TABLE Categoria (
    idCategoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    descricao TEXT NOT NULL
);


-- Tabela de Fragrâncias
CREATE TABLE Fragrancia (
    idFragrancia INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(45) NOT NULL,
    intensidade VARCHAR(50) NOT NULL,
    origem VARCHAR(100) NOT NULL
);

-- Tabela de Marcas
CREATE TABLE Marca (
    idMarca INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    pais_origem VARCHAR(100) NOT NULL,
    ano_fundacao INT NOT NULL
);
-- Tabela de Perfumes
CREATE TABLE Perfume (
    idPerfume INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45),
    preco VARCHAR(45),
    volumeMl INT,
    estoque INT,
    oferta VARCHAR(45),
    idCategoria INT,
    idFragrancia INT,
    idMarca INT ,
    FOREIGN KEY (idCategoria) REFERENCES Categoria(idCategoria),
    FOREIGN KEY (idFragrancia) REFERENCES Fragrancia(idFragrancia),
    FOREIGN KEY (idMarca) REFERENCES Marca(idMarca)
);
-- Tabela de Imagens
CREATE TABLE Imagem (
    idImagem INT PRIMARY KEY AUTO_INCREMENT,
    idPerfume int,
    descricao TEXT,
    caminho VARCHAR(255) NOT NULL,
    foreign key (idPerfume) references Perfume(idPerfume)
);

-- Tabela de Relacionamento entre Perfume e Venda (Compra)
CREATE TABLE Perfume_has_Venda (
    idPV int auto_increment,
    perfume_idPerfume INT NOT NULL,
    venda_idVenda INT NOT NULL,
    preco VARCHAR(45) NOT NULL,
    quantidade INT NOT NULL,
    desconto DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (idPV),
    FOREIGN KEY (perfume_idPerfume) REFERENCES Perfume(idPerfume),
    FOREIGN KEY (venda_idVenda) REFERENCES Venda(idVenda)
);
-- Inserindo dados na tabela Cliente

INSERT INTO Cliente (idCliente, nome, cpf, telefone, email, endereco, login, senha) VALUES
(1, 'Ana Maria Silva', '859.433.970-02', '(55) 99734-2234', 'ana.silva@gmail.com', 'Rua Barão do Triunfo, 351, Centro, Santana do Livramento, RS', 'ana.silva', 'senha123'),
(2, 'Carlos Eduardo Pereira', '208.647.650-40', '(55) 99653-5633', 'carlos.pereira@gmail.com', 'Rua Treze de Maio, 852, Centro, Santana do Livramento, RS', 'carlos.pereira', 'senha456'),
(3, 'Mariana Oliveira Souza', '394.208.310-19', '(55) 99927-9101', 'mariana.souza@gmail.com', 'Rua Duque de Caxias, 1002, Centro, Santana do Livramento, RS', 'mariana.souza', 'senha789');

-- Inserindo dados na tabela Categoria
INSERT INTO Categoria (idCategoria, nome, descricao) VALUES
(1, 'Floral', 'Perfumes com notas de flores.'),
(2, 'Amadeirado', 'Perfumes com notas de madeiras.'),
(3, 'Cítrico', 'Perfumes com notas de frutas cítricas.');


-- Inserindo dados na tabela Fragrancia
INSERT INTO Fragrancia (idFragrancia, tipo, intensidade, origem) VALUES
(1, 'Floral', 'Moderada', 'França'),
(2, 'Amadeirado', 'Forte', 'Brasil'),
(3, 'Cítrico', 'Leve', 'Itália');


-- Inserindo dados na tabela Marca
INSERT INTO Marca (idMarca, nome, pais_origem, ano_fundacao) VALUES
(1, 'Elegance Perfumes', 'França', 1995),
(2, 'Nature Essence', 'Brasil', 2005),
(3, 'Citrus Scents', 'Itália', 2010);

-- Inserindo dados na tabela Perfume
INSERT INTO Perfume (idPerfume, nome, idCategoria, idFragrancia, idMarca, preco, volumeMl, oferta,estoque) VALUES
(1, 'Floral Elegance', 1, 1, 1, '150.00', 100, 'Floral Elegance',50),
(2, 'Madeira Intensa', 2, 2, 2, '180.00', 100,'Madeira Intensa', 30),
(3, 'Citrus Fresh', 3, 3, 3, '120.00', 100,'Citrus Fresh', 40);

-- Inserindo dados na tabela Imagem
INSERT INTO Imagem (idImagem,idPerfume, descricao, caminho) VALUES
(1, 1,'Imagem do perfume Floral Elegance', 'floral_elegance.jpg'),
(2, 2,'Imagem do perfume Madeira Intensa', 'madeira_intensa.jpg'),
(3, 3,'Imagem do perfume Citrus Fresh', 'citrus_fresh.jpg');

-- Inserindo dados na tabela Venda
INSERT INTO Venda (idVenda, idCliente, data, forma_pagamento, retirada, endereco, status, total, observacoes) VALUES
(1, 1, '2025-03-27', 'Cartão de Crédito', '2025-03-30', 'Rua Barão do Triunfo, 351, Centro, Santana do Livramento, RS', 'Confirmada', 150.00, 'Entrega no período da manhã.'),
(2, 2, '2025-03-26', 'Boleto Bancário', '2025-03-29', 'Rua Treze de Maio, 852, Centro, Santana do Livramento, RS', 'Pendente', 180.00, 'Cliente solicitou embalagem para presente.'),
(3, 3, '2025-03-25', 'Pix', '2025-03-28', 'Rua Duque de Caxias, 1002, Centro, Santana do Livramento, RS', 'Enviada', 120.00, 'Entregar no endereço comercial.');

-- Inserindo dados na tabela Compra
INSERT INTO Perfume_has_Venda (idPV,perfume_idPerfume, venda_idVenda, preco, quantidade, desconto, subtotal) VALUES
(1, 1,1, '150.00', 1, 0.00, 150.00),
(2,2, 2, '180.00', 1, 0.00, 180.00),
(3, 3,3, '120.00', 1, 0.00, 120.00);
