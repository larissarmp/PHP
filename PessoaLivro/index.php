<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Joana", 33, "F");
            $p[1] = new Pessoa("Jonas", 40, "M");
            
            $L[0] = new Livro("Aprenda linguagem PHP", "Mateus Borgues", 800, $p[0]);
            
            $L[0]->detalhes();
        ?>
        </pre>
    </body>
</html>
