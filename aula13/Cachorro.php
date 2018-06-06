<?php

require_once 'Lobo.php';

class Cachorro extends Lobo {

    public function emitirSon() {
        echo '<p>Som de Cachorro</p>';
        
    }
    
    public function reagirFrase($frase){
        if ($frase == "Toma Comida" || $frase == "Ola"){
            echo '<p>Abanar o Rabo</p>';
        } else {
            echo '<p>Rosnar</p>';
        }
    }

    public function reagirHora ($hora){
        if ($hora < 12){
            echo '<p>Abanar</p>';
        }elseif ($hora >= 18) {
            echo '<p>Ignorar</p>';            
        }else {
            echo '<p>Abanar e latir </p>';
        }
    }
    
    public function reagirDono ($dono){
        if ($dono){
            echo '<p>Abanar</p>';
        } else {
            echo '<p>Rosnar e Latir</p>';
        }
    }
    
    public function reagirIdadePeso($idade, $peso){
        if ($idade < 5 ){
            if ($peso < 10){
                echo '<p>Abanar</p>';
            } else {
                echo '<p>Latir</p>';
            }
        } else {
            if ($peso > 10){
                echo '<p>Rosnar</p>';
            } else {
                echo '<p>Ignorar</p>';
            }
        }
    }
}
