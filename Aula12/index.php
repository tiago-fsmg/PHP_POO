<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        
        $m1 = new Mamifero();
        $a1 = new Ave();
        $r1 = new Reptil();
        $p1 = new Peixe();
        
        $m1->locomoer();
        $a1->locomoer();
        $r1->locomoer();
        $p1->locomoer();
        
        ?>
        </pre>
    </body>
</html>
