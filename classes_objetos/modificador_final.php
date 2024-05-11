<?php
abstract class Abstrata {
    public abstract function metodo1();

    public final function metodo2(){
        echo 'Nao vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1(){
        echo 'Executando metodo 1<br>';
    }

    //com o modificador final nao pode ter herança 
    // public function metodo2() {
    //   echo 'Extendendo metodo 2<br>';
    /// }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2(); 