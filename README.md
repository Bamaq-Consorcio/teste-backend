# Desafio Desenvolvedor BAMAQ

Um grupo de pessoas de um condominio, decidiu criar um sistema web para controlar a utilização das vagas rotativas que estão localizadas em pontos estrategicos do condominio. O objetivo é que o sistema faça um sorteio e escolha de forma randomica a vaga designada para cada morador. Fazendo com que todos utilizem todas as vagas. É importante que um morador não repita a vaga em um intervalo menor que 7 dias

### Instruções

Faça um fork do repositorio para a sua conta do github, execute as alterações e quando terminar abra um pull request para esta branch.

### Requisitos

- listar em um endpoint dados do morador com a lista de vagas das ultimas 7 rodadas listadas.
- Descrever em cada commit o que foi implementado
- Fazer um clone desse repositorio para o seu repositorio local, e solicitar pull request para o repositorio develop
- Utilizar o framework Laravel

### Regras

- A escolha dos numeros precisa ser feita por rodadas.
- O morador so podera estacionar na vagas que esta relacionada com o seu predio.
- Um morador nao pode usar a mesma vaga num intervalo menor que 7 rodadas.
- Cada morador so pode usar a vaga selecionada uma vez por semana

### Informações relevantes

- O condominio possui 3 predios com 12 apartamentos cada
- Cada apartamento tem direito a uma vaga totalizando 36 vagas.
- As vagas são numeradas do 1 ao 36

### Atenção

Os dados para serem utilizados estão dentro da pasta ./tables(na raiz do projeto), em formato csv.

### Observação

mesmo que não conclua todo o desafio no prazo estipulado, poderá submeter ate o ponto onde conseguiu chegar.

### Pontos extras

- Utilizar boas praticas para desenvolvimento
- Seguir Tecnicas de programação orientada a objeto
- Utilizar o Docker
- Realizar testes unitarios
- Documentar no arquivo Readme.md todas informações necessarias para rodar o projeto, bem como dependencias e pacotes utilizados.
- Exibir os dados utilizando alguma estrutura de frontend (html, css, ou algum framework javascript de sua preferencia).

Caso tenha alguma dúvida pode abrir uma issue no repositorio
