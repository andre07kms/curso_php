<?php
class Cliente {
    //atributos
    public $nome = 'Anonimo';
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome} 
        Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Andressa';
$c1->idade = 32;
$c1->apresentar();

$c2 = new Cliente;
$c2->nome = 'Kariny';
$c2->idade = 34;
$c2->apresentar();