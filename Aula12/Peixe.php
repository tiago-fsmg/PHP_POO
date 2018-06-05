<?php

require_once 'Animal.php';

class Peixe extends Animal {

    private $corEscamas;

    public function alimentar() {
        echo '<p>Comendos Substancias</p>';
    }

    public function emitirSom() {
        echo '<p>Nao Emite som</p>';
    }

    public function locomoer() {
        echo '<p>Nadando</p>';
    }

    public function soltarBolha() {
        echo '<p>Soltou uma bolha</p>';
    }

    function getCorEscamas() {
        return $this->corEscamas;
    }

    function setCorEscamas($corEscamas) {
        $this->corEscamas = $corEscamas;
    }

}
