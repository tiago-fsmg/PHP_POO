<?php

//Nova Classe Canta
class Caneta {

    //Objetos da Classe Caneta
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    //Metodo Para Tampar a Caneta
    public function tampar() {
        $this->tampada = TRUE;
    }

    //Metodo Para Destampar a Caneta
    public function destampar() {
        $this->tampada = FALSE;
    }

    //Metodo Get do Objeto Modeo
    public function getModelo() {
        return $this->modelo; //Retorna o Atributo do objeto Modelo 
    }

    //Metodo Set do Objeto Modelo
    public function setModelo($m) {
        $this->modelo = $m; //Adiciona o Atributo Recebido ao Objeto Modelo
    }

    //Metodo Get do Objeto Ponta
    public function getPonta() {
        return $this->ponta; //Retorna o Atribudo do Objeto Ponta
    }

    //Metodo Set do Objeto Ponta
    public function setPonta($p) {
        $this->ponta = $p; // Adiciona o Valor Recebido como Parametro ao Objeto Ponta
    }

    //Criando Metodo Construtor, Responsavel por definir o Valor Padrão para os objetos
    public function __construct($cor, $ponta) { //Deve ser usado 2 Underlin ou criar com o mesmo nome da classe (public function Caneta(){})
        $this->tampar();
        $this->modelo = "Bic Cristal";
        $this->cor = $cor;
        $this->ponta = $ponta;
    }

}
