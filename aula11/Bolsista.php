<?php

require_once 'Aluno.php';

final class Bolsista extends Aluno{

    private $bolsa;

    public function renovarBolsa() {
        echo 'Bousa Renovada';
    }
    
    private function PagarMensalidade() {
        echo "<p>Pagando Mensalidade de ".$this->getNome()." com Bolsa</p>";
    }

    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

}
