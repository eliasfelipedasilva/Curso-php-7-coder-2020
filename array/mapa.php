<div class="titulo">Mapa</div>

<?php 
$dados = array (
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo $dados[0]; // n tem o indice zero

echo '<br>'. $dados["idade"];
echo '<br>'. $dados["cor"];
echo '<br>'. $dados["peso"];
echo '<br>'. $dados["outra_info"];//gera erro pq nao tem , vem nulo
echo '<br>';
var_dump($dados["outra_info"]);//vem nullo como pode ver no var_dump

$lista = array(
    "a",
    "cinco" => 'b',
    "c",
    8 => 'd',
    "e",
    6 => 'f',
    "g",//nao eh recomendado fazer esse array por que fica bem confuso, fizemos para ver o comportamento do mesmo por padrao como ele exibe
    8 => 'h'
);

echo '<br>';
print_r ($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);


$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

$lista[false] = 'tentei indexar com false';
echo '<br>';
print_r($lista);

$lista[true] = 'tentei indexar com true';
echo '<br>';
print_r($lista);


?>