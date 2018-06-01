<?php

//Fazendo referencia a Interface
require_once 'Controlador.php';

class ControleRemoto implements Conrolador {

    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Sobrescrevendo Metodos
    public function desligar() {
        $this->setLigado(FALSE);
    }

    public function ligar() {
        $this->setLigado(TRUE);
    }

    public function abrirMenu() {
        echo "<----------MENU----------><br><br><br>";
        echo "<br>Esta Ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Esta Tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo '<br>Volume: ' . ($this->getVolume(). "   --  ");
        for ($i = 0; $i <= $this->getVolume(); $i += 5) {
            echo '|';
        }
        echo '<br>';
    }

    public function fecharMenu() {
        echo '<br>Fechando Menu...';
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo '<p>ERRO: Nao Esta Ligada, Impossivel Aumentar Volume!</p>';    
        }
    }

    public function menosVolume() {
        if ($this->getLigado() && ($this->getVolume() > 0)) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo '<p>ERRO: Nao e Possivel Diminuir o Volume</p>';    
        }
    }
    
    public function ligaMudo() {
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        } else {
            echo '<p>ERRO: Nao e Possivel ligar o mudo</p>';
        }
    }
    
    public function desligaMudo() {
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        } else {
            echo '<p>ERRO: Nao e Possivel desligar o mudo</p>';
        }
    }
    
    public function play() {
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(TRUE);
        } else {
            echo '<p>ERRO: Nao e possivel dar Play</p>';    
        }
    }
    
    public function pause() {
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(TRUE);
        } else {
            echo '<p>ERRO: Nao e possivel dar Pause</p>';    
        }
    }

    //Construtor
    public function __construct() {
        $this->volume = 50;
        $this->tocando = FALSE;
        $this->ligado = FALSE;
    }

    //Metodos Get e Set
    private function getVolume() {
        return $this->volume;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($pw) {
        $this->ligado = $pw;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($play) {
        $this->tocando = $play;
    }

}
