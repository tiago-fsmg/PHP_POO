<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar (){
        if($this->tampada){
            echo '<p>ERRO: A Caneta esta Tampada!</p>';
        } else {
            echo '<p>Rabiscando...</p>';
        }
    }
    
    public function tampar (){
        $this->tampada = TRUE;
    }
    
    private function destampar () {
        $this->tampada = FALSE;
    }
}
