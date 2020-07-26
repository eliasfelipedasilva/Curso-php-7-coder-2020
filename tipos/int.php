<div class="titulo">Tipo Inteiro</div>

<?php
//valor literal, sem estar armazenado em alguma variavel de forma direta
echo 11;
echo '<br>';


echo "utilizando var_dump , uma função php para encontrar os tipos";
echo '<br>';
var_dump(11);
echo '<br>';

echo "Valores máximos inteiros que podemos armazenar";
echo '<br>';
echo PHP_INT_MAX,'<br>'; //valor maximo inteiro permitido
echo "Valores mínimos inteiros que podemos armazenar";
echo '<br>';
echo PHP_INT_MIN, '<br>'; //valor minimo inteiro permitido
echo "Valores Base Octal";
echo '<br>';
echo 011, '<br>'; //Base octal
echo "Valores Base Binária";
echo '<br>';
echo 0b1001100110011, '<br>'; //Base Binária
echo "Valores Base Hexadecimal";
echo '<br>';
echo 0x117acf0;//Base Hexadecimal
