<div class="titulo">Desafio sorteio</div>

<?php 
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$index = array_rand($nomes);

echo '<p><center>sorteio randomico de nomes em um array.</center></p>';
echo '<h1><center>'.$nomes[$index].'</center></h1>';


?>