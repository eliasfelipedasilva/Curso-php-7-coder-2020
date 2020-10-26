<div class="titulo">Classe e Data</div>

<?php 
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2015;
echo $aniversario->apresentar(), '<br>';

$aniversario = new Data();
$aniversario->dia = 1;
$aniversario->mes = 3;
$aniversario->ano = 2010;
echo $aniversario->apresentar();
?>