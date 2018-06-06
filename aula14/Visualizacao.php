<?php

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao {

    private $espectador, $filme;

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc) {
        if ($porc <= 20) {
            $nt = 3;
        } elseif ($porc <= 50) {
            $nt = 5;
        } elseif ($porc <= 90) {
            $nt = 8;
        } else {
            $nt = 10;
        }
        
        $this->filme->setAvaliacao($nt);
        
    }

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->viuMaisUm();
        
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

}
