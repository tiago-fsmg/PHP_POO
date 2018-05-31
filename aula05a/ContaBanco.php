<?php

class ContaBanco {

    //Declarando Atributos------------------------------------------------------
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Metodo Para Abrir Conta---------------------------------------------------
    public function abrirConta($numero, $nome, $tipo) {

        $this->setnumConta($numero);
        $this->setDono($nome);
        $this->setTipo($tipo);
        $this->setStatus(TRUE);

        if ($tipo == "cc" || $tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "cp" || $tipo == "CP") {
            $this->setSaldo(150);
        } else {
            echo '<p>Tipo de Conta Desconhecido</p>';
        }

        echo "<p>Conta de $nome Aberta</p>";
    }

    //Metodo para Fecha a Conta ------------------------------------------------
    public function fechaConta($n) {
        if ($this->getnumConta() == $n) {
            if ($this->getSaldo() > 0) {
                echo '<p>ERRO: A Conta Possui Saldo.<br/> Não e Possivel Fechar a Conta</p>';
            } elseif ($this->getSaldo() < 0) {
                echo '<p>ERRO: A Conta esta com o Saldo Negativo<br/>Não e Possivel Possivel Fechar a Conta</p>';
            } else {
                $this->setStatus(FALSE);
                echo "<p>Conta de " . $this->getDono() . " Fechada</p>";
            }
        } else {
            echo '<p>Numero da Conta Imcorreto.</p>';
        }
    }

    //Metodo Para Depositar Dinheiro -------------------------------------------
    public function depositar($valor) {
        if ($this->getStatus() == TRUE) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Saldo de $valor Depositado na conta de " . $this->getDono() . "</p>";
        } else {
            echo '<p>ERRO: Conta Inativa</p>';
        }
    }

    //Metodo Para Sacar Dinheiro -----------------------------------------------
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v Realizado na conta de " . $this->getDono() . " !</p>";
            } else {
                echo "<p>Saldo de " . $this->getDono() . " Insuficiente</p>";
            }
        } else {
            echo '<p>ERRO:Conta Inativa, Impossivel Realizar Saque</p>';
        }
    }

    //Metodo Para Pagar Mensalidade --------------------------------------------

    public function pagarMensal() {

        if ($this->getStatus()) {

            if ($this->getTipo() == "CC") {
                $v = 12;
            } elseif ($this->getTipo() == "CP") {
                $v = 20;
            }

            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de $v Cobrada na conta de " . $this->getDono() . " !</p>";
        }
    }

    //Metodo Construtor --------------------------------------------------------
    public function __construct() {
        $this->saldo = 0;
        $this->status = FALSE;
        $this->numConta = 0;
        echo '<p>Conta Criada!</p>';
    }

    //Inicio Do Metodo Get e Set -----------------------------------------------

    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($n) {
        $this->numConta = $n;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($d) {
        $this->dono = $d;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($s) {
        $this->status = $s;
    }

}
