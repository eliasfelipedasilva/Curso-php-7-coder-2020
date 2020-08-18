<div class="titulo">Operadores Relacionais</div>
<?php
var_dump(1 == 1 );//true
var_dump(1 > 1 ); //false
var_dump(1 >= 1 );//true
var_dump(1 <> 1 );//false
var_dump(1 != 1 );//false
var_dump(4 < 23 );//true
var_dump(1 <=7 );//true


var_dump( 1 == '1'); //true
var_dump( 111 === '111'); //false
var_dump( 111 != '111'); //false
var_dump( 111 !== '111'); //true

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 28;

if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo '<p>Spaceship</p><hr>';

var_dump( 500 <=> 3);//positivo se o operando for maior que o segundo
var_dump( 50 <=> 50);//zero se forem iguais
var_dump( 50 <=> 80);//negativo se o segundo operando for maior que o primeiro



echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!5);//para descobrir se o valor é verdadeiro ou falso
var_dump(!!0);//para descobrir se o valor é verdadeiro ou falso
var_dump(!!"");//para descobrir se o valor é verdadeiro ou falso
var_dump(!!" ");//para descobrir se o valor é verdadeiro ou falso

?>
<style>
p{
    margin-bottom:0px;
}

hr{
    margin-top:0px;
}
</style>