<?php

require_once 'mamifero.php';

class Cachorro extends Mamifero {

    public function enterraOsso() {
        echo '<p>Enterrando o Osso</p>';
    }

    public function abanarRabo() {
        echo '<p>Abanando o Rapo</p>';
    }
    
    public function emitirSom() {
        echo '<p>Late</p>';
    }

}
