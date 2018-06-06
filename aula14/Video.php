<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo {

    private $titulo;
    private $avaliação;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
        $this->setReproduzindo(FALSE);
    }

    public function play() {
        $this->setReproduzindo(TRUE);
    }
    
    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setAvaliação(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(FALSE);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliação() {
        return $this->avaliação;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAvaliação($avaliação) {
        $this->avaliação = $avaliação;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }


    
}
