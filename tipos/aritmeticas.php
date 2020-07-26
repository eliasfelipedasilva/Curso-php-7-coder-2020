<div class="titulo">Operações Aritméticas</div>

<?php
echo "verificando com var_dump uma soma de inteiro com inteiro = 1 + 1 = ", '<br>';
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo "verificando com var_dump uma soma de inteiro com float = 1 + 2.5 = ", '<br>';
echo 1 + 2.5, '<br>';
var_dump(1 + 2.5);
echo '<br>';
echo "verificando com var_dump uma subtração de inteiro com inteiro = 10 - 2 = ", '<br>';
echo 10 - 2, '<br>';
var_dump(10 - 2);
echo '<br>';
echo "verificando com var_dump uma multiplicação de inteiro com inteiro = 2 * 5 = ", '<br>';
echo 2 * 5, '<br>';
var_dump(2 * 5);
echo '<br>';
echo "verificando com var_dump uma dividido de inteiro com inteiro = 7 / 4 = ", '<br>';
echo 7 / 4, '<br>';
var_dump(7 / 4);
echo '<br>';
echo "usando a função intdiv para arredondar e tirar as casas decimais de divisão : 7/4", '<br>';
echo intdiv(7,4), '<br>';
echo "usando a função round para arredondar para mais , retirando as casas decimais : 7/4", '<br>';
echo round(7 / 4), '<br>';
echo "usando o %   para pegar o resto da divisão de  7/4", '<br>';
echo round(7 % 4), '<br>';
echo "se dividir por zero aparece a palava INF ( que significa numero infinito", '<br>';
echo round(7 / 0), '<br>';
echo "Aqui elevamos a potencia para multiplicar 4 elevado a 2", '<br>';
echo 4 ** 2,'<br>';


// Precedencia de operadores

// () => ** => / * % => + -

echo '<p>Precedência de Operadores</p>';
echo '<p>  parenteses (&nbsp;) =>exponenciação ** => divisão, multiplicação , resto / * % => por ultimo soma e subtração + -</p>';
echo '<p>Abaixo temos a seguinte situação: 2 + 3 * 4 = ?</p>';
echo 2 + 3 * 4, '<br>';
echo '<p>Abaixo temos a seguinte situação: (2 + 3) * 4 = ?</p>';
echo (2 + 3) * 4, '<br>';
echo '<p>Abaixo temos a seguinte situação: 2 + 3 * 4 ** 2 = ?</p>';
echo 2 + 3 * 4 ** 2, '<br>';
echo '<p>Abaixo temos a seguinte situação:(( 2 + 3) * 4) ** 2 = ?</p>';
echo ((2 + 3) * 4) ** 2, '<br>';