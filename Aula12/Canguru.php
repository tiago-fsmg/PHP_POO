<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{
    
    public function usarbolsa(){
        echo '<p>Usando Bolsa</p>';
    }
    
    public function locomoer() {
        echo '<p>Pulando</p>';
    }
    
}
