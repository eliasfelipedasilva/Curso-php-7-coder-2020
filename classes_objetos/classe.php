<div class="class titulo">Primeira Classe</div>

<?php 

class Cliente {
    //atributos
    public $nome = 'Anonimo';
    public $idade = 18;

    public function apresentar() {
        //só conseguimos mostrar através do método this que o proprio php cria para nós.
        // posso trocar o echo por return tb segue exemplo abaixo
        // echo "Nome: {$this->nome}<br>";
        // echo "Idade: {$this->idade}<br>";
        return "Nome: {$this->nome}<br>";
    }
}

//também posso alterar os dados, por serem público segue abaixo:
$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>';
$c1->idade = 27;
echo $c1->apresentar();

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;
echo $c2->apresentar();
?>