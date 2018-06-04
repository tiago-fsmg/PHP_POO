<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Metodos ------------------------------------------------------------------
    public function detalhes() {
        echo "<hr><p> Livro ". $this->getTitulo() ." escrito por ". $this->getAutor()."<br/>";
        echo "Paginas: ". $this->getTotPaginas()." , Pagina Atual ". $this->getPagAtual() ." <br>";
        echo "Sendo Lido Por: ". $this->leitor->getNome()."</p>";
    }

    //Metodo Construtor
    public function __construct($titulo, $autor, $totPagina, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPagina);
        $this->setLeitor($leitor);
        $this->setPagAtual(0);
        $this->setAberto(FALSE);
        echo "<p>Livro ".$this->getTitulo()." Salvo</p>";
    }

    //Get e Set ----------------------------------------------------------------

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->setAberto(TRUE);
    }

    public function avancarPag() {
        if ($this->getPagAtual() < $this->getTotPaginas()) {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }

    public function fechar() {
        $this->setAberto(FALSE);
    }

    public function folhear($pagina) {
        if ($pagina < $this->getTotPaginas()) {
            $this->setPagAtual($pagina);
        } else {
            $this->setPagAtual(0);
        }
    }

    public function voutarPag() {
        if ($this->getPagAtual() > 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }

}
