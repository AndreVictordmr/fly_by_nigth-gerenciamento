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
    --aqui criamos o id_fernecedor como um campo comun
    id_fornecedor INT NOT NULL,
    --E entao aqui, informamos que id_fornecedor e uma 'chave estrangeira' 
    --referenciando a 'chave primaria' (id) de outra tabela(fornecedor)
    FOREIGN KEY(id_fornecedor) REFERENCES fornecedor(id) 
);
```

```sql
```

```sql
```