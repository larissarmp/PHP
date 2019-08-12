<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classe</title>
    </head>
    <body>
        <?php
            
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1 ->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = true;
            $c1->tampa();
            print_r($c1);
            $c1->rabiscar();
            
            //var_dump($c1);//mostrar o estado forma simples
            print_r($c1);//mostra o estado
        ?>
    </body>
</html>
