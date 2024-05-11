<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade}anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        //$this->nome = $nome;
        //$this->idade = $idade;
        //nao precisa instanciar basta chamar o construtor que herda os atributos da classe Pai
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    //chama tambem o destrutor da classe Pai
    function __destruct(){
        echo 'Usuario diz: Tchau!<br>';
        parent::__destruct();
    }

    //chama a funcão pai que é da classe Pessoa e acrescenta uma informação adicional
    public function apresentar(){
        parent::apresentar();
        echo "@{$this->login}<br>";
    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);