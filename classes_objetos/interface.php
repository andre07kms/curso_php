<?php
interface Animal {
    function respirar();
}

interface Canino extends Animal {
    function latir(): string;
}

class Cachorro implements Animal, Canino {
    function respirar() {
        return "Irei usar oxigenio!";
    }

    function latir(): string {
        return 'Au Au';
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';

echo 'Fim!';