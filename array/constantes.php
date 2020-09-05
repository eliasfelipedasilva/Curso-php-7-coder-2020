<div class="titulo">Arrays Constantes</div>

<?php 

//pode ser fazer array assim ou com colchetes
//const FRUTAS = ['laranja', 'abacaxi']; 
const FRUTAS = array('laranja', 'abacaxi'); 

//FRUTAS[0] = 'banana'; como é um array constante nao consigo acrescentar um valor
//FRUTAS[] = 'banana'; // como é constante nao consigo acrescentar um valor
echo FRUTAS[0];

//pode-se fazer array assim tb, atribuindo ja o valor do mesmo com seta

const CARROS = ["fiat"=> "uno", "ford"=>"fiesta"];
// CARROS["BMW"] = '325I'; ISSO NÃO TA CERTO TAMBÉM POR SER UMA CONSTANTE E NAO ACEITAR ACRESCENTAR DADOS EM UM ARRAY
echo '<br>'. CARROS["fiat"];

//outra forma de criar é usando define
//também dessa forma é constante e você não conseguirá mudar o conteúdo dentro do array
define('CIDADES',array('Belo Horizonte','Recife'));
//CIDADES[] = 'Rio de Janeiro'; // isso não da certo por que define também é uma constante e não deixa acrescentar dados em um array
echo '<br>'. CIDADES[1];



?>