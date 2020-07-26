<div class="titulo">Atribuições</div>
<?php
$title = 'Atribuições';
echo $title;
$numero = 10;
echo '<br>'. $numero;

$numero = $numero -1;
echo '<br>'. $numero;

$numero = $numero -3;
echo '<br>'. $numero." subtraindo valores de uma variavel";

$numero = $numero +3.5;
echo '<br>'. $numero." tipo float";

$numero--;// $numero = $numero -1;
echo '<br>'.$numero." decrementando uma unidade com operador unário --, sendo do tipo pós fixado";

--$numero;// $numero = $numero -1;
echo '<br>'.$numero." -- decrementando uma unidade com operador unário , sendo do tipo pré fixado";

$numero++;// $numero = $numero +1;
echo '<br>'.$numero." somando uma unidade com operador unário ++, sendo do tipo pós fixado";

++$numero;// $numero = $numero +1;
echo '<br>'.$numero." ++ somando uma unidade com operador unário , sendo do tipo pré fixado";
$numero = 20;
echo '<br>'.$numero." argumentação subtrativa neste caso vai diminuir 5 do valor da variavel";
$numero -=5;//argumentação subtrativa neste caso vai diminuir 5 do valor que contem na variavel numero
echo '<br>'.$numero." argumentação subtrativa neste caso vai diminuir 5 do valor da variavel";
$numero +=5;//argumentação aditiva neste caso vai diminuir 5 do valor que contem na variavel numero
echo '<br>'.$numero." argumentação aditiva neste caso vai somar 5 do valor da variavel";
$numero *=5;//argumentação multiplicativa neste caso vai diminuir 5 do valor que contem na variavel numero
echo '<br>'.$numero." argumentação multiplicativa neste caso vai multiplicar 5 do valor da variavel";
$numero /=5;//argumentação divisiva neste caso vai diminuir 5 do valor que contem na variavel numero
echo '<br>'.$numero." argumentação divisiva neste caso vai dividir 5 do valor da variavel";
$numero %=5;//argumentação de pegar resto de divisao neste caso vai pegar resto de divisao de  5 do valor que contem na variavel numero
echo '<br>'.$numero." argumentação pegar resto de divisao neste caso vai pegar resto de divisao de 5 do valor da variavel";
$numero **=5;//argumentação potencia neste caso vai potencia 5 do valor que contem na variavel numero
echo '<br>'.$numero." argumentação de potencia neste caso vai potencia 5 do valor da variavel";
$numero .=5;//argumentação de concatenação neste caso vai concatenar(juntar)o  valor que contem na variavel com o  numero no caso 5 
echo '<br>'. $numero." argumentação de concatenação neste caso vai concatenar(juntar)o  valor que contem na variavel com o  numero no caso 5 + número 0(zero)";
$texto = 'Esse é um texto através de uma atribuição de variavel';//passando um texto por atribuição de variavel
echo '<br>'. $texto." - passando um texto por atribuição de variavel";
$texto = $texto.'- Esse é um texto qualquer';//passando um texto por atribuição de variavel
echo '<br>'. $texto;
$texto .= '- de verdade';//passando um texto por atribuição de variavel
echo '<br>'. $texto;

$variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;


