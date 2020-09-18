<div class="titulo">Função & Escopo</div>

<?php 

function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima! <br>";
}

// imprimirMensagens();
// imprimirMensagens();
// imprimirMensagens();
// imprimirMensagens();
// imprimirMensagens();
// imprimirMensagens();
// imprimirMensagens();



$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}
//observe que aqui nao teve alteração da variavel em si

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";


//observe que aqui, teve alteração da variavel mediante escopo de variavel com a variavel global setada dentro da function
function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";

}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());


