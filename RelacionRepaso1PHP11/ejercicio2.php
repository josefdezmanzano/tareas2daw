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
        $cad = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
        $cadec = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";

        //a)
        function cantidadVocalesEnCadena($cad) {

            echo "<br>La vocal a aparece " . substr_count($cad, 'a') . " veces";
            echo "<br>La vocal e aparece " . substr_count($cad, 'e') . " veces";
            echo "<br>La vocal i aparece " . substr_count($cad, 'i') . " veces";
            echo "<br>La vocal o aparece " . substr_count($cad, 'o') . " veces";
            echo "<br>La vocal u aparece " . substr_count($cad, 'u') . " veces";
        }

        cantidadVocalesEnCadena($cad);
        //b)
        $abecedario = array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "v", "w", "x", "y", "z");
        foreach ($abecedario as $key => $value) {
            echo "<br> La consonante $value aparece " . substr_count(strtolower($cad), $value) . " veces.";
        }

        //c)
        echo "<br><hr><br>";
        for ($i = 0; $i < strlen($cadec); $i++) {
            if (strtolower($cadec[$i]) == "a") {
                $cadec[$i] = "*";
            }
        }
        echo $cadec;
        //d)
        $cadaMostrar= strstr( $cad,"completo");
        echo "<br>".substr($cadaMostrar, +8);
        ?>
    </body>
</html>
