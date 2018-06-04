<?php

require_once 'ExibeLutador.php';

class Lutador implements ExibeLutador {

    //Atributos-----------------------------------------------------------------
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Metodos ------------------------------------------------------------------
    public function apresentar() {
        echo '<br><br>-----------------------------------------------------------';
        echo "<p>Nome: " . $this->getNome() . " </p>";
        echo "<p>Nacionalidade: " . $this->getNacionalidade() . " </p>";
        echo "<p>Idade: " . $this->getIdade() . " </p>";
        echo "<p>Altura: " . $this->getAltura() . " </p>";
        echo "<p>Peso: " . $this->getPeso() . " </p>";
        echo "<p>Categoria: " . $this->getCategoria() . " </p>";
        echo "<p>Vitorias: " . $this->getVitorias() . " </p>";
        echo "<p>Derrotas: " . $this->getDerrotas() . " </p>";
        echo "<p>Empates: " . $this->getEmpates() . " </p>";
        echo '-----------------------------------------------------------';
    }

    public function status() {
        echo '<br><br>-----------------------------------------------------------';
        echo "<p>Nome: " . $this->getNome() . " </p>";
        echo "<p>Peso: " . $this->getPeso() . " </p>";
        echo "<p>Vitorias: " . $this->getVitorias() . " </p>";
        echo "<p>Derrotas: " . $this->getDerrotas() . " </p>";
        echo "<p>Empates: " . $this->getEmpates() . " </p>";
        echo '-----------------------------------------------------------';
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Metodo Construtor---------------------------------------------------------
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
        echo "<p>Lutador " . $this->getNome() . " cadastrado!</p>";
    }

    //Metodo Get----------------------------------------------------------------
    public function getNome() {
        return $this->nome;
    }

    private function getNacionalidade() {
        return $this->nacionalidade;
    }

    private function getIdade() {
        return $this->idade;
    }

    private function getAltura() {
        return $this->altura;
    }

    private function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    private function getVitorias() {
        return $this->vitorias;
    }

    private function getDerrotas() {
        return $this->derrotas;
    }

    private function getEmpates() {
        return $this->empates;
    }

    //Metodo Set----------------------------------------------------------------
    private function setNome($nome) {
        $this->nome = $nome;
    }

    private function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade) {
        $this->idade = $idade;
    }

    private function setAltura($altura) {
        $this->altura = $altura;
    }

    private function setPeso($peso) {
        $this->peso = $peso;
        if ($this->getPeso() >= 52.2 && $this->getPeso() <= 70.3) {
            $this->setCategoria("Leve");
        } elseif ($this->getPeso() > 70.3 && $this->getPeso() <= 83.9) {
            $this->setCategoria("Medio");
        } elseif ($this->getPeso() > 83.9 && $this->getPeso() <= 120.2) {
            $this->setCategoria("Pesado");
        } else {
            $this->setCategoria("Invalido");
        }
    }

    private function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }

}
