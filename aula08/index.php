<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $pessoa[0] = new Pessoa("Tiago", 22, "M");
        $pessoa[1] = new Pessoa("Paloma", 19, "F");
        
        $livro[0] = new Livro("PHP Basico", "Jose", 300, $pessoa[0]);
        $livro[1] = new Livro("PHP POO", "Maria", 500, $pessoa[0]);
        $livro[2] = new Livro("PHP Avancado", "Gustavo", 800, $pessoa[1]);
        
        echo '<br><br><br>---------------------------------------------------------------------<br><br><br>';
        
        $livro[0]->setAberto($aberto);
        $livro[0]->folhear(127);
        $livro[0]->avancarPag();
        $livro[0]->detalhes();
        
        $livro[1]->detalhes();
        $livro[2]->detalhes();
        ?>
    </body>
</html>
