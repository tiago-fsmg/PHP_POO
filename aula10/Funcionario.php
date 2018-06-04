<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

    private $setor;
    private $trabalando;

    public function mudatTrabalho() {
        $this->setTrabalando(!($this->getTrabalando()));
    }

    function getSetor() {
        return $this->setor;
    }

    function getTrabalando() {
        return $this->trabalando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalando($trabalando) {
        $this->trabalando = $trabalando;
    }

}
