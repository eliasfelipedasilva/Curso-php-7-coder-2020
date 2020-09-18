<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}


$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

print_r($array);

echo "<hr>";

for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

<<<<<<< HEAD
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
=======

>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c

echo "<hr>";

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}