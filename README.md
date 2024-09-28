# faciltecnologia-assessment
Teste para Vaga de PHP da Fácil Tecnologia

## Como rodar o projeto

- Você deve ter o Docker instalado;
- Certifique-se de que as portas 8080 e 3306 não estão em uso na sua máquina (ou mude as portas no arquivo docker-compose.yaml);
- Clone o repositório e faça o checkout da branch **features/exeucao-teste** (ou, após a aceitação do Pull Request, pode-se usar a branch principal - main);
- Rode o seguinte comando via command line: docker-compose up --build -d;
- Acesso a aplicação em seu navegador pela url: http://localhost:8080.

## Instruções do Teste

1. ATENÇÃO: LEMBRAR DE INFORMAR O LINK DO MERGE REQUEST CRIADO NO CAMPO RESPOSTA QUANDO FINALIZAR O TESTE

- Em um sistema de cadastro de contratos, você tem as seguintes tabelas (Tb) e campos:

========================

Tb_contrato

codigo

prazo

valor

data_inclusao

convenio_servico

------------------------------------

Tb_convenio_servico

codigo

convenio

servico

------------------------------------

Tb_convenio

codigo

convenio

verba

banco

------------------------------------

Tb_banco

codigo

nome

========================

Considerando que quando um campo é utilizado para ligar uma tabela a outra, este campo terá como nome, o nome da segunda tabela.

Construa um script PHP que execute a consulta e liste uma relação contendo:

========================

nome do banco

verba

codigo do contrato

data de inclusao

valor

prazo

========================

O candidato deve disponibilizar a resposta em um projeto privado, em sua conta no github, compartilhar esse projeto com os e-mails thiago.freitas@faciltecnologia.com.br, daniel.arana1@faciltecnologia.com.br , fabio.melo@faciltecnologia.com.br e thiago.lucena@faciltecnologia.com.br e informar a URL e diretório da resposta.

Recomendamos que todos os testes de implementação de código, estejam em um único projeto, separados por diretório.

--- INFORMAR O LINK DO MERGE REQUEST CRIADO NO CAMPO RESPOSTA QUANDO ACABAR ---

2. ATENÇÃO: LEMBRAR DE INFORMAR O LINK DO MERGE REQUEST CRIADO NO CAMPO RESPOSTA QUANDO FINALIZAR O TESTE

Em um sistema de cadastro de contratos, você tem as seguintes tabelas (Tb) e campos:

========================

Tb_contrato

codigo

prazo

valor

data_inclusao

convenio_servico

------------------------------------

Tb_convenio_servico

codigo

convenio

servico

------------------------------------

Tb_convenio

codigo

convenio

verba

banco

------------------------------------

Tb_banco

codigo

nome

========================

Considerando que quando um campo é utilizado para ligar uma tabela a outra, este campo terá como nome, o nome da segunda tabela.

Construa uma consulta SQL que liste uma relação contendo o que segue, com o resultado agrupado por nome do banco e por verba:

========================

nome de cada banco (g)

verba (g)

data de inclusao do contrato mais antigo deste agrupamento

data de inclusao do contrato mais novo deste agrupamento

soma do valor dos contratos neste agrupamento

(g) = campos agrupados

========================

O candidato deve disponibilizar a resposta em um projeto privado, em sua conta no github, compartilhar esse projeto com os e-mails thiago.freitas@faciltecnologia.com.br, daniel.arana1@faciltecnologia.com.br , fabio.melo@faciltecnologia.com.br e thiago.lucena@faciltecnologia.com.br e informar a URL e diretório da resposta.

Recomendamos que todos os testes de implementação de código, estejam em um único projeto, separados por diretório.

--- INFORMAR O LINK DO MERGE REQUEST CRIADO NO CAMPO RESPOSTA QUANDO ACABAR ---
