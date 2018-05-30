
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    <body>
        <?php
        
        //Chamando Arquivo com a Classe da Caneta
        require_once 'Caneta.php';
        
        //Instanciando o Objeto Caneta
        $c1 = new Caneta;
        
        //Adicionanando atributos ao objeto criado
        $c1 -> cor = "Azul";
        $c1->modelo = "C1";
        $c1->carga = 100;
        $c1 -> ponta = 0.5 ;
        $c1 -> tampada = FALSE;
        
        //Imprimindo Valores do objeto $c1
        print_r($c1);
        
        //Chamando Metodo Rabiscar com a caneta destampada
        $c1->rabiscar();
        
        //Chamando metodo que tampa a caneta
        $c1->tampar();
        
        //Chamando metodo Rabista com a caneta Tampada
        $c1->rabiscar();
        
        
        //Instanciando novo objeto da classe caneta
        $c2 = new Caneta;
        
        //Adicionanando atributos ao segundo objeto
        $c2->cor = "Preta";
        $c2->modelo = "C2";
        $c2->carga = 80;
        $c2->ponta = 0.7 ;
        $c2->tampada = TRUE;
        
        //Imprimindo Valores do objeto $c2
        print_r($c2);
        
        //Chamando Metodo Rabiscar com a caneta Tampada
        $c2->rabiscar();
        
        //Chamando metodo que destampa a caneta
        $c2->destampar();
        
        //Chamando metodo Rabista com a caneta Destampada
        $c2->rabiscar();
        
        
        ?>
    </body>
</html>
