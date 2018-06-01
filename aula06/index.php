<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ControleRemoto.php';
            
            $c1 = new ControleRemoto;
            
            $c1->ligar();
            $c1->maisVolume();
            $c1->play();
            $c1->abrirMenu();
            
            ?>
        </pre>
    </body>
</html>
