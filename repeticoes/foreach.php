<div class="titulo">Foreach</div>

<<<<<<< HEAD
<?php
$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
=======
<?php 

$array = [ 
     1000 => 'Domingo', 
    'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta', 
    'Sexta', 
>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

<<<<<<< HEAD
=======
echo "<p></p>";
>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

<<<<<<< HEAD
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    // echo "$linha <br>";
    foreach($linha as $letra) {
        echo "$letra ";
=======


$matrix =[
    [
        'a', 'e', 'i', 'o', 'u'
    ],
    [
        'b', 'c', 'd'
    ]
];


foreach ($matrix as $linha) {
    //echo "$linha <br>";
    foreach ($linha as $letra) {
        echo "$letra";
>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
    }
    echo "<br>";
}

<<<<<<< HEAD
$numeros = [1, 2, 3, 4, 5];
=======
$numeros = [1,2,3,4,5];

>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
<<<<<<< HEAD
print_r($numeros);
=======
 print_r($numeros);


?>
>>>>>>> 608e6213827bac6fc355ba5b70621a55f647bb9c
