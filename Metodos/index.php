<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
           
            $c1 = new Caneta("BIC", "AZUL", 0.5);
            $c2 =  new Caneta("ade","Verde", 1.0);
            print_r($c1);
        ?>
        </pre>
    </body>
</html>
