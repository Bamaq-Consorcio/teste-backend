## Teste-Backend
### Contexto geral
Os moradores de um condomínio, decidiram pela criação de um sistema web para controlar a utilização das vagas rotativas que estão localizadas em pontos estratégicos do condomínio. O objetivo é que o sistema faça um sorteio e escolha de forma randômica a vaga designada para cada morador. Fazendo com que todos utilizem todas as vagas. É importante que um morador não repita a vaga em um intervalo menor que 7 dias.
### Instruções
Faça um fork do repositório para a sua conta do github, execute as alterações e quando terminar abra um pull request para esta branch.
### Requisitos
* Listar em um endpoint dados do morador com a lista de vagas das últimas 7 rodadas listadas.
* Descrever em cada commit o que foi implementado.
* Fazer um clone desse repositório para o seu repositório local, e solicitar pull request para o repositório develop.
* Utilizar o framework Laravel.
### Regras
* A escolha dos números precisa ser feita por rodadas.
* O morador só poderá estacionar na vagas que está relacionada com o seu prédio.
* Um morador não pode usar a mesma vaga num intervalo menor que 7 rodadas.
* Cada morador só pode usar a vaga selecionada uma vez por semana.
### Informações relevantes
* O condomínio possui 3 prédios com 12 apartamentos cada.
* Cada apartamento tem direito a uma vaga totalizando 36 vagas.
* As vagas são numeradas do 1 ao 36.
* Entrega deverá ser feita em 7 dias a partir do início.
### Atenção
Os dados para serem utilizados estão dentro da pasta ./tables (na raiz do projeto), em formato csv.
### Observação
Mesmo que não conclua todo o desafio no prazo estipulado, poderá submeter até o ponto onde conseguiu chegar.
### Pontos extras
* Utilizar boas práticas para desenvolvimento.
* Seguir Técnicas de programação orientada a objeto.
* Utilizar o Docker.
* Realizar testes unitários.
* Documentar no arquivo Readme.md todas informações necessárias para rodar o projeto, bem como dependências e pacotes utilizados.
* Exibir os dados utilizando alguma estrutura de frontend (html, css, ou algum framework javascript de sua preferência).

##### Caso tenha alguma dúvida pode abrir uma issue no repositório.
