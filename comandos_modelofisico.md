# Referencia de comandos SQL para modelagem fisica
## Projeto Fly By Night - Gerenciamento de Estoque

-Criando um novo banco de dado

```sql
--Criando um banco de dados usando UTF8--
CREATE DATABASE flybynight_andre CHARACTER SET utf8mb4;
```

-Criando uma tabela de fornecedor, com somente um campo

```sql
CREATE TABLE FORNECEDOR(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100) NOT NULL
);
```

-Criando uma tabela de produto, com um chave estrangera ligada a tabela fornecedor

```sql
CREATE TABLE produto(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    -- aqui criamos o id_fernecedor como um campo comun
    id_fornecedor INT NOT NULL,
    -- E entao aqui, informamos que id_fornecedor e uma 'chave estrangeira' 
    -- referenciando a 'chave primaria' (id) de outra tabela(fornecedor)
    FOREIGN KEY(id_fornecedor) REFERENCES fornecedor(id) 
);
```

-Criando uma tabela de loja

```sql
CREATE TABLE LOJA(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL 
);
```

-Criando uma tabela de Loja-protudo, uma tabla responsavel por gerenciar o estoque de cada produto especifico em cada loja 

```sql
CREATE TABLE loja_produto(
    id_loja INT NOT NULL,
    id_produto INT NOT NULL,
    estoque INT NOT NULL,
    -- Criando uma 'chave primaria' composta
    PRIMARY KEY (id_loja,id_produto),
    -- Se na tabela de lojas for excluida, 
    -- aqui na tabela loja_produtos Todos os registros de estoque 
    -- desta loja excluida tambem serao excluidos.
    FOREIGN KEY(id_loja) REFERENCES loja(id) ON DELETE CASCADE,
    -- Ao tentar excluir um protudo, se este produto esta sendo
    -- usado em algum registro de estoque, nao podemos permetir a exclusao
    FOREIGN KEY(id_produto) REFERENCES produto(id) ON DELETE RESTRICT
);
```