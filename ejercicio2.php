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
        <?php

        //a)
        function cantidadVocalesEnCadena($cad) {
            echo "<br>La vocal a aparece " . substr_count($cad, 'a') . " veces";
            echo "<br>La vocal e aparece " . substr_count($cad, 'e') . " veces";
            echo "<br>La vocal i aparece " . substr_count($cad, 'i') . " veces";
            echo "<br>La vocal o aparece " . substr_count($cad, 'o') . " veces";
            echo "<br>La vocal u aparece " . substr_count($cad, 'u') . " veces";
        }

        cantidadVocalesEnCadena("El abecedario completo es algo largo y detallarlo exhaustivamente es costoso");
        //b)
        ?>
    </body>
</html>
