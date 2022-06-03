## Teste-Backend

### Alterações

-   Mudanças no .env para rodar no docker de acordo com meu ambiente e com minhas portas disponíveis
-   Criação de migrations através de linha de comando para criação das tabelas veiculos, moradores e apartamentos.
-   Criação de migration através de linha de comando para subir as foreign keys das respectivas tabelas
-   No banco de dados, através do DBeaver, importei os arquivos csv para as respectivas tabelas
-   Criação de models das respectivas entidades
-   Criação de um front para receber os dados das models
-   Criação de uma controller Home e tentativa de receber os dados da Model/Banco pela mesma (SQLSTATE[HY000] [2002] Connection refused)
-   Criação de 3 endpoints para receber os dados de todos os apartamentos, moradores e veículos. Dados puxados pelos arquivos csv, já que não consegui consultar do banco pelo php.
-   O arquivo que contém o código de leitura do CSV está em App/Exceptions/csv.php
