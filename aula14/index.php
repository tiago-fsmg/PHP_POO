<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
            require_once 'Video.php';
            require_once 'Pessoa.php';
            require_once 'Gafanhoto.php';
            
            $v[0] = new Video("Aula 01 de POO");
            $v[1] = new Video("Aula 05 PHP");
            $v[2] = new Video("Aula 10 de HTML");
            
            print_r($v);

            $p = new Pessoa("Tiago", 22, "M");
            
            print_r($p);
            
            $g = new Gafanhoto("Tiago", 22, "M", "fsmg");
            
            print_r($g);
            
            
            ?>
        </pre>
    </body>
</html>
