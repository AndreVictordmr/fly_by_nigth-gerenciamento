# Comandos CRUD para o projeto fly by night

 C -> Create -> Insert
 R -> Read -> Select
 U -> Updade 
 D -> Delete

## Inserindo Fornecedores

```sql

INSERT INTO FORNECEDOR(NOME) VALUES
('Eletrônicos Tabajara');

INSERT INTO FORNECEDOR(NOME) VALUES('Games ABCD'),('Supermercado Tem de Tudo'),('Livraria Demais da Conta');

```

## Inserindo Produtos

```sql

INSERT INTO PRODUTO(NOME,DESCRICAO,PRECO,QUANTIDADE,ID_FORNECEDOR) VALUES
('Smartphone Galaxy S23','Equipamento com sistema Android e câmera Full HD',1599.50,20,1);

INSERT INTO PRODUTO(NOME,DESCRICAO,PRECO,QUANTIDADE,ID_FORNECEDOR) VALUES
('TV Led','Tela de 50 polegadas, resolução 4K, 4 entradas HDMI e etc e tal',3420,12,1);

INSERT INTO PRODUTO(NOME,DESCRICAO,PRECO,QUANTIDADE,ID_FORNECEDOR) VALUES
('Senhor dos Anéis: As Duas Torres','Volume 2 da série de livros criados pelo autor J.R.R Tolkien',80.90,100,4);

```

## Inserindo Loja

```sql

INSERT INTO LOJA(NOME) VALUES('Casas Bahia'),('Shopping Zona Leste'),('Bazar das Coisas'),('Americanas');

```

## Inserindo o Estoque de produtos de cada loja

```sql

INSERT INTO LOJA_PRODUTO(ID_LOJA,ID_PRODUTO,ESTOQUE) VALUES(4,2,3),(4,3,30),(1,2,10),(4,1,5);

```