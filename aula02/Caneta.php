<?php

class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar (){
        if($this->tampada){
            echo '<p>ERRO: A Caneta esta Tampada!</p>';
        } else {
            echo '<p>Rabiscando...</p>';
        }
    }
    
    function tampar (){
        $this->tampada = TRUE;
    }
    
    function destampar () {
        $this->tampada = FALSE;
    }
}
