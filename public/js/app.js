require('./bootstrap');

//função Math.floor e Math.random para escolha aleatória de números com parâmetro 
//pré determinado.

function sorteio() {

   const sort = Math.floor((Math.random() * 36) + 1);

   sortudo = [
      'Apt.101 - Bl.1',
      'Apt.102 - Bl.1',
      'Apt.103 - Bl.1',
      'Apt.104 - Bl.1',
      'Apt.201 - Bl.1',
      'Apt.202 - Bl.1',
      'Apt.203 - Bl.1',
      'Apt.204 - Bl.1',
      'Apt.301 - Bl.1',
      'Apt.302 - Bl.1',
      'Apt.303 - Bl.1',
      'Apt.304 - Bl.1',
      'Apt.101 - Bl.2',
      'Apt.102 - Bl.2',
      'Apt.103 - Bl.2',
      'Apt.104 - Bl.2',
      'Apt.201 - Bl.2',
      'Apt.202 - Bl.2',
      'Apt.203 - Bl.2',
      'Apt.204 - Bl.2',
      'Apt.301 - Bl.2',
      'Apt.302 - Bl.2',
      'Apt.303 - Bl.2',
      'Apt.304 - Bl.2',
      'Apt.101 - Bl.3',
      'Apt.102 - Bl.3',
      'Apt.103 - Bl.3',
      'Apt.104 - Bl.3',
      'Apt.201 - Bl.3',
      'Apt.202 - Bl.3',
      'Apt.203 - Bl.3',
      'Apt.204 - Bl.3',
      'Apt.301 - Bl.3',
      'Apt.302 - Bl.3',
      'Apt.303 - Bl.3',
      'Apt.304 - Bl.3',
   ];

   sorte = sortudo[Math.floor(Math.random() * sortudo.length)]

   document.getElementById("resultado").innerHTML = sort;

   document.getElementById("nome").innerHTML = sorte;
}
//Faltou implementar ligação do apartamento com o proprietário e veículo 
//armazenar a informação e printar na tela. 

