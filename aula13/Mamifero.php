<?php

require_once 'Animal.php';

class Mamifero extends Animal {

    protected $corPelo;

    public function emitirSon() {
        echo '<p>Som de Mamifero</p>';
    }

}
