<div class="titulo">Operadores Lógicos</div>
<?php 

//operadores lógicos literais true ou false

echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);// operador unário, opera encima de um unico incremento na frente dele
echo '<br>';
var_dump(!!true);
echo '<br>';
var_dump(!!!true);

echo "<p class='divisao'>Tabela Verdade 'AND' ou  '&&' (E)</p><hr>";

var_dump(true && true); //true e true verdadeiro
var_dump(true && false); //true e false falso
var_dump(false && true); //false e true falso
var_dump(false && false); //false e true falso
var_dump(true && 3 > 2 && 7 <= 7); //true e true e true = verdadeiro
var_dump(true && 3 > 2 && 10 <= 7); //true e true e false = falso

var_dump(true AND true); //true e true verdadeiro
var_dump(true AND false); //true e false falso
var_dump(false AND true); //false e true falso
var_dump(false AND false); //false e true falso
var_dump(true AND 3 > 2 AND 7 <= 7); //true e true e true = verdadeiro
var_dump(true AND 3 > 2 AND 10 <= 7); //true e true e false = falso
echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); //true e true verdadeiro
var_dump(true || false); //true e falso verdadeiro
var_dump(false || true); //falso e true verdadeiro
var_dump(false || false); //falso e falso falso


var_dump(true OR true); //true e true verdadeiro
var_dump(true OR false); //true e falso verdadeiro
var_dump(false OR true); //falso e true verdadeiro
var_dump(false OR false); //falso e falso falso

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
var_dump(true XOR true); //true OU EXCLUSIVO true FALSO
var_dump(true XOR false); //true OU EXCLUSIVO true FALSO
var_dump(false XOR true); //true OU EXCLUSIVO true FALSO
var_dump(false XOR false); //true OU EXCLUSIVO true FALSO

var_dump(true != true); //true OU EXCLUSIVO true FALSO
var_dump(true != false); //true OU EXCLUSIVO true FALSO
var_dump(false != true); //true OU EXCLUSIVO true FALSO
var_dump(false != false); //true OU EXCLUSIVO true FALSO

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco ...';
}


?>
