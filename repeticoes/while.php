<div class="titulo">While/Do While</div>

<<<<<<< HEAD
<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

$contador = 100;
=======

<?php 
const VALOR_LIMITE = 5;
$contador = 0;
//nessa expressão como o contador inicia com 10 o while nem executa por que o valor limite eh setado como 5
while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}
//como podemos ver a mesma função se parece muito com um for


// for ($contador=0;$contador < VALOR_LIMITE;) {
//     echo "for $contador <br>";
//     $contador++;
// }

// for ($contador = 0;$contador < VALOR_LIMITE;$contador++) {
//     echo "for $contador <br>";
// }

// nessa expressão como o valor limite é 5  o do while executa o contador uma única vez, ocorre então a verificacao e constatando que o valor eh maior que o permitido a expressao é interrompida
// do {
//     echo "while $contador <br>";
//     $contador++;
// }while ($contador < VALOR_LIMITE);

$contador = 0;
>>>>>>> 81df0a6beb435324458782bf4d1f01b3a40a4a1f
do {
    echo "do-while $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

<<<<<<< HEAD
$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}
=======
//NO DO WHILE SE O PRIMEIRO VALOR FOR FALSO , ELE AINDA ASSIM GARANTE A EXECUÇÃO DA PRIMERIA SENTENÇA EX:
$contador = 100;
do {
    echo "do-while-valor-limite-alterado $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

//para fazer um while infinito basta passar valor true, fazendo isso ele fica sempre em loop, para parar o contador usa-se break ou continue ex:
$contador = 0;
 while (true) {
     echo "while(true) $contador <br>";
     $contador++;
     if($contador >= VALOR_LIMITE)break;
 }

 







>>>>>>> 81df0a6beb435324458782bf4d1f01b3a40a4a1f
