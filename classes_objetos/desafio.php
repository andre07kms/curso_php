<?php
class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar(){
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}<br>";

    }
}

$aniversario = new Data();
$aniversario->dia = 12;
$aniverssario->mes = 02;
$aniversario->ano = 1992;

echo $aniversario->apresentar();
