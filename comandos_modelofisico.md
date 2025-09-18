# Referencia de comandos SQL para modelagem fisica
## Projeto Fly By Night - Gerenciamento de Estoque

Criando um novo banco de dado

```sql
CREATE DATABASE flybynight_andre CHARACTER SET utf8mb4;
```

Criando uma tabela de fornecedor

```sql
CREATE TABLE FORNECEDOR(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100) NOT NULL
);
```