<div class="titulo">Desafio Impressão</div>

<?php 

// Enunciado:
// - Imprima apenas os valores do array que contém indice par
// - Desafio adicional: Resolver com for e foreach
// - valores esperados : AAA, CCC, EEE

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++) {
    if( $i % 2 === 1) continue;
    echo "{$array[$i]} <br>";
}

echo "<br>";

foreach ($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor <br>";
}

?>