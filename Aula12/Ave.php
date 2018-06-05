<?php

require_once 'Animal.php';

class Ave extends Animal {

    private $corPena;

    public function alimentar() {
        echo '<p>Comer Frutas</p>';
    }

    public function emitirSom() {
        echo '<p>Som de Ave</p>';
    }

    public function locomoer() {
        echo '<p>Voando</p>';
    }

    public function fazerNinho() {
        echo '<p>Fazendo Ninho</p>';
    }

    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

}
