<?php

require_once 'Lutador.php';

class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Metodos ------------------------------------------------------------------
    public function marcarluta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->aprovada = TRUE;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = FALSE;
            $this->desafiado = NULL;
            $this->desafiante = NULL;
            echo "********** Luta Nao Permitida **********";
        }
    }

    public function lutar() {
        if ($this->aprovada) {

            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            
            switch ($vencedor) {
                
                case 0: //Empate
                    echo "<p>**********Empate**********</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                
                case 1: //Desafiado Vence
                    echo "<p>**********" . $this->desafiado->getNome() . " Venceu**********</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                
                case 2: //Desafiante Vence
                    echo "<p>**********" . $this->desafiante->getNome() . " Venceu**********</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }
    }

    //Metodo Get----------------------------------------------------------------
    private function getDesafiado() {
        return $this->desafiado;
    }

    private function getDesafiante() {
        return $this->desafiante;
    }

    private function getRounds() {
        return $this->rounds;
    }

    private function getAprovada() {
        return $this->aprovada;
    }

    //Metodo Set----------------------------------------------------------------
    private function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    private function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    private function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    private function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
