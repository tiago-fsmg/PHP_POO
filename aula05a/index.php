<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ContaBanco.php';


            //Criando Duas Contas
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            //Abrindo Contas e enviando dados Requeridos
            $p1->abrirConta(01, "Jubilel", "CC");
            $p2->abrirConta(02, "Creuza", "CP");

            //Imprimindo dados das Contas
            print_r($p1);
            print_r($p2);

            //Fazendo Deposito em todas as contas
            $p1->depositar(300);
            $p2->depositar(500);

            //Imprimindo dados das Contas
            print_r($p1);
            print_r($p2);

            //Efetuando Saque da Conta
            $p2->sacar(100);
            $p1->sacar(1000);

            //Imprimindo dados da Conta
            print_r($p2);

            //Descontando Mensalidade das Contas
            $p1->pagarMensal();
            $p2->pagarMensal();

            //Imprimindo dados das Contas
            print_r($p1);
            print_r($p2);

            //Fechando conda p2
            $p2->fechaConta(02);
            $p2->sacar(530);
            $p2->fechaConta(02);

            //Imprimindo dados conta P2
            print_r($p2);
            ?>
        </pre>
    </body>
</html>
