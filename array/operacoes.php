<div class="titulo">Operações</div>

<?php 
$dados1 = [
    //pode criar com colchetes ou com parenteses

    "nome" => "Jose",
    "idade"=> 28
];

$dados2 = [//se eu acrescentar um outro nome de usuario no segundo tipo de dados, o primeiro prevalece sobre o segundo
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
//$dadosCompletos = $dados2 + $dados1;
print_r($dadosCompletos);

echo '<br>'. is_array($dadosCompletos);

//resultado vai ser 1, significando que é um array, 1  = a true

echo '<br>'.count($dadosCompletos);

//vai mostrar 3 , que siginifca 3 elementos, dados 1 + dados 2 que resulta em dadoscompletos

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
//echo "$dadosCompletos['idade]";// assim da erro, nao consegue interpolar
echo "{$dadosCompletos['idade']}";// para conseguir interpolar tem que passar chaves entre os arrays

    echo " ${dadosCompletos['idade']}";
    echo '<br>';
    unset($dadosCompletos["nome"]);
    echo '<br>';
    print_r($dadosCompletos);

    unset($dadosCompletos);
    echo '<br>';
    var_dump($dadosCompletos);

    $impares = [ 1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $decimais = $pares + $impares;
    echo '<br>';
    print_r($decimais);

    $decimais = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimais);

    sort($decimais);
    echo '<br>';
    print_r($decimais);


?>