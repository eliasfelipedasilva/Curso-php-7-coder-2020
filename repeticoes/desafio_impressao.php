<div class="titulo">Desafio Impressão</div>

<<<<<<< HEAD
<!--
Enunciado: 
- Imprima apenas os valores do array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php
=======
<?php 

// Enunciado:
// - Imprima apenas os valores do array que contém indice par
// - Desafio adicional: Resolver com for e foreach
// - valores esperados : AAA, CCC, EEE

>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++) {
<<<<<<< HEAD
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
=======
    if( $i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
}

echo "<br>";

<<<<<<< HEAD
foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}
=======
foreach ($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor <br>";
}

?>
>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
