<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
            require_once 'ContaBancaria.php';
            $p1 = new ContaBancaria();
            $p2 = new ContaBancaria();
            $p1->abrirConta("CC");
            $p1 ->setNumConta(1245);
            $p1->setDono("Juliana");
            $p2->abrirConta("CP");
            $p2->setDono("João");
            $p2->setNumConta(1425);
            
            $p1->depositar(300);
            $p2->depositar(500);
            
            $p2->sacar(1000);
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            $p1->sacar(338);
            $p2->sacar(630);
            
            $p1->fecharConta();
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
            
        ?>
        </pre>
    </body>
</html>
