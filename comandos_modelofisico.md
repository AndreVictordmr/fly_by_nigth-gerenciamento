# Referencia de comandos SQL para modelagem fisica
## Projeto Fly By Night - Gerenciamento de Estoque

```sql
CREATE DATABASE flybynight_andre CHARACTER SET utf8mb4;
```

---

```sql
CREATE TABLE FORNECEDOR(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(100) NOT NULL
);
```