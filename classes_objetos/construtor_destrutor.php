<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade}anos<br>";
    }
}

$pessoaA = new Pessoa('Andressa', 32);
$pessoaB = new Pessoa('Kariny', 34);


$pessoaA->apresentar();
unset($pessoaA);

// funciona como destructor tbm!
$pessoaB->apresentar();
$pessoaB = null;