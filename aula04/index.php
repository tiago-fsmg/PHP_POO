
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Caneta.php';

            $c1 = new Caneta("Azul", 0.7);
            $c1->setModelo("Bic");
            $c1->setPonta(0.5);

            print_r($c1);

            print "Eu Tenho uma caneta {$c1->getModelo()} de Ponta {$c1->getPonta()}.<br/><br/><br/>";

            $c2 = new Caneta("Vermelha", 0.5);

            print_r($c2);
            ?>
        </pre>
    </body>
</html>
