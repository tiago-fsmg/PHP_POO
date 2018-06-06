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
            require_once 'Visualizacao.php';
            
            $v[0] = new Video("Aula 01 de POO");
            $v[1] = new Video("Aula 05 PHP");
            $v[2] = new Video("Aula 10 de HTML");
            
            print_r($v);

            $p = new Pessoa("Paloma", 19, "F");
            
            print_r($p);
            
            $g = new Gafanhoto("Tiago", 22, "M", "fsmg");
            
            print_r($g);
            
            $vis[0] = new Visualizacao($g, $v[0]);
            $vis[1] = new Visualizacao($g, $v[1]);
            $vis[0]->avaliar();
            $vis[1]->avaliarNota(10);
            
            print_r($vis);
            
            
            
            ?>
        </pre>
    </body>
</html>
