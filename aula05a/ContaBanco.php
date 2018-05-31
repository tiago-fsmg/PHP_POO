<?php

class ContaBanco {

    //Declarando Atributos------------------------------------------------------
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Metodo Para Abrir Conta---------------------------------------------------
    public function abrirConta($n, $d, $t) {

        $this->setnumConta($n);
        $this->setDono($d);
        $this->setTipo($t);
        $this->setStatus(TRUE);

        if ($t == "cc" || $t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "cp" || $t == "CP") {
            $this->setSaldo(150);
        } else {
            echo '<p>Tipo de Conta Desconhecido</p>';
        }

        echo '<p>Conta Aberta</p>';
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
                echo '<p>Conta Fechada</p>';
            }
        } else {
            echo '<p>Numero da Conta Imcorreto.</p>';
        }
    }

    //Metodo Para Depositar Dinheiro -------------------------------------------
    public function depositar($v) {
        if ($this->getStatus() == TRUE) {
            $this->setSaldo($this->getSaldo() + $v);
            echo '<p>Saldo Depositado</p>';
        } else {
            echo '<p>ERRO: Conta Inativa</p>';
        }
    }

    //Metodo Para Sacar Dinheiro -----------------------------------------------
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo '<p>Saque Realizado</p>';
            } else {
                echo '<p>Saldo Insuficiente</p>';
            }
        } else {
            echo '<p>ERRO:Conta Inativa, Impossivel Realizar Saque</p>';
        }
    }

    //Metodo Para Pagar Mensalidade --------------------------------------------

    public function pagarMensal() {
        if ($this->getStatus()) {
            if ($this->getTipo() == "CC") {
                if ($this->getSaldo() >= 12) {
                    $this->setSaldo($this->getSaldo() - 12);
                } else {
                    echo '<p>ERRO:Saldo Insuficiente</p>';
                }
            } elseif ($this->getTipo() == "CP") {
                if ($this->getSaldo() >= 20) {
                    $this->setSaldo($this->getSaldo() - 20);
                } else {
                    echo '<p>ERRO:Saldo Insuficiente</p>';
                }
            }
        } else {
            echo '<p>ERRO: Conta Inativa</p>';
        }
    }

    //Metodo Construtor --------------------------------------------------------
    public function __construct() {
        $this->saldo = 0;
        $this->status = FALSE;
        $this->numConta = 0;
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
