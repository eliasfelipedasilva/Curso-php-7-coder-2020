<div class="titulo">Construtor e Destrutor</div>


<?php 

class Pessoa {
    public $nome;
    public $idade;
    public $cidade;
    public $profissao;

    //pode se usar nomes diferentes, aqui usei para mostrar
    function __construct($novoNome, $idade, $cidade, $profis) {
       echo 'Construtor invocado!! <br>';
        $this->nome =$novoNome;
        $this->idade = $idade;
        $this->cidade = $cidade;
        $this->profissao = $profis;
    }

    function __destruct() {
        echo " E morreu o Construtor! <br>";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos, Cidade: {$this->cidade},Profissão: {$this->profissao}";

    }

}

$pessoaA = new Pessoa('Carlos Uchôa', 36, 'Brusque-SC', 'Programador<br>');
$pessoaA->apresentar();
unset($pessoaA);

$pessoaB = new Pessoa('Erilene Lima', 45, 'Brusque-SC', 'RH<br>');
$pessoaB->apresentar();
$pessoaB = null;



?>