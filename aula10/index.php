<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Funcionario.php';
            require_once 'Professor.php';

            $p[0] = new Pessoa();
            $p[1] = new Aluno();
            $p[2] = new Professor();
            $p[3] = new Funcionario();

            $p[0]->setNome("Pedro");
            $p[1]->setNome("Maria");
            $p[2]->setNome("Claudio");
            $p[3]->setNome("Fatima");

            $p[1]->setCurso("Informatica");

            for ($i = 0; $i < 4; $i++) {
                print_r($p[$i]);
            }
            ?>
        </pre>
    </body>
</html>
