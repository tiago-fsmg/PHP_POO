<?php

require_once 'Pessoas.php';

class Aluno extends Pessoas {

    private $matricula;
    private $curso;

    private function PagarMensalidade() {
        
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

}
