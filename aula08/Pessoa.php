<?php

class Pessoa {

    private $nome;
    private $idade;
    private $sexo;

    //Metodos ------------------------------------------------------------------
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1); 
    }

    //Construtor ---------------------------------------------------------------

    public function __construct($nome, $idade, $sexo) {

        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        echo "<p>".$this->getNome()." Cadastrado.</p>";
        
    }

    //Get e Set ----------------------------------------------------------------
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}
