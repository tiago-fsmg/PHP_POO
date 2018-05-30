
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    <body>
        <pre>
            <?php
            //Chamando Arquivo com a Classe da Caneta
            require_once 'Caneta.php';

            //Instanciando o Objeto Caneta
            $c1 = new Caneta;

            $c1->modelo = "Bic Cristal";
            $c1->cor="Azul";
            
            //$c1->ponta = "0.5"; Obs. Obijeto como Privado nao Pode ser Auterado de Fora da Classe
            
            print_r($c1);
            
            $c1->rabiscar();
            
            //$c1->destampar(); Obs. Metodo como Privado nao Pode ser Utilisado de Fora da Classe
            
            $c1->tampar();
            
            print_r($c1);
            
            $c1->rabiscar();
            
            ?>
        </pre>
    </body>
</html>
