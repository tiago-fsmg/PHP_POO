<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();
        $l = new Lobo();
        $c = new Cachorro();

        $m->emitirSon();
        $l->emitirSon();
        $c->emitirSon();
        
        
        $c->reagirFrase("Ola");
        $c->reagirFrase("Vai Apanhar");
        $c->reagirHora(11);
        $c->reagirHora(21);
        $c->reagirDono(TRUE);
        $c->reagirDono(FALSE);
        $c->reagirIdadePeso(2, 12);
        $c->reagirIdadePeso(17, 4.5);
        
        ?>
    </body>
</html>
