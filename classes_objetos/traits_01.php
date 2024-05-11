<?php
trait validacao {
    public $a = 'Valor a';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
        //vai remover todos os espacos em branco nas extremidades da string
    }
}

class Usuario {
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;