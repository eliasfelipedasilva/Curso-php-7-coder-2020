<div class="titulo">Variáveis</div>
<?php
$numeroA = 17;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
//$somaDosNumeros = 0;
//algumas coisas n sao key sensitive como exemplo o EcHO ou Var_DUmP
//funcionam assim 
//mas as variáveis não, elas sim , são diferentes uma variael $SOMA é diferente de $soma
echo '<br>';
echo isset($somaDosNumeros);//assim verificar se a variavel está existindo, no caso retorna 1
//mesmo com o valor dela sendo zero, é um valor então retorna 1, se fosse nulo retornaria zero simbolizando que nao existia variavel

unset($somadosNumeros);
echo '<br>';
echo isset($somaDosNumeros);
echo '<br>';
echo !isset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);//valor nulo

$variavel = 10;
echo '<br>'. $variavel;

$variavel = "agora sou uma string";
echo '<br>'. $variavel;


