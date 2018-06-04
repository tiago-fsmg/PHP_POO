<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            echo '<h1>----------UEC---------</h1>';

            require_once 'Lutador.php';
            require_once 'Luta.php';

            //Lista de Lutadores------------------------------------------------
            $lutador[0] = new Lutador("Pretty Boy", "Frances", 31, 1.75, 68.9, 11, 2, 1);
            $lutador[1] = new Lutador("Putscript", "Brasileiro", 29, 1.68, 57.8, 14, 2, 3);
            $lutador[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $lutador[3] = new Lutador("Dead Code", "Australiano", 28, 1.93, 81.6, 13, 0, 2);
            $lutador[4] = new Lutador("Ufocobol", "Brasileiro", 37, 1.7, 119.3, 5, 4, 3);
            $lutador[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $luta1 = new Luta();
            $luta1->marcarluta($lutador[4], $lutador[5]);
            $luta1->lutar();
            $lutador[0]->status();
            $lutador[1]->status();

            /*
              //Apresentando Todos os Lutadores-----------------------------------
              for ($i = 0; i < 6; $i++) {
              $lutador[$i]->apresentar();
              }
             */
            ?>
        </pre>
</html>
