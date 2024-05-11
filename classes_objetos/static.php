<?php
class A {
    public $naoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estática)';

    public function mostrarA(){
        echo "Nao estatica = {$this->naoStatic}<br>";
        //Tentativa 1
        //echo "Estatica = {$this->static}<br>";
        //Tentativa 2
        //echo "Estatica = {self::$static}<br>;
        echo "Estatica = " . self::$static . "<br>";
    }

}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); //nao é a forma ideal

echo '<br>';
echo A::$static, '<br>'; //acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = 'Alterando membro de classe!';
echo A::$static, '<br>'; // acessar diretamente pela classe