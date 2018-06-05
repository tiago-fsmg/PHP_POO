<?php

require_once 'Animal.php';

class Reptil extends Animal {

    private $corEscamas;

    public function alimentar() {
        echo '<p>Comer Vegetais</p>';
    }

    public function emitirSom() {
        echo '<p>Som de Reptil</p>';
    }

    public function locomoer() {
        echo '<p>Rastejar</p>';
    }

    function getCorEscamas() {
        return $this->corEscamas;
    }

    function setCorEscamas($corEscamas) {
        $this->corEscamas = $corEscamas;
    }

}
