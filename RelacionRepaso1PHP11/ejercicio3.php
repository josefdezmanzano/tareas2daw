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
        /* a) Dadas las cadenas "aprender" y "aprende",
         *  mostrar por pantalla la cadena rellena con * a derecha e izquierda 
         * en un número de asteriscos que será siempre 5 a cada lado aunque se cambien las cadenas.
         */
        $cadapre = "aprender";
        $cadende = "aprende";
        if (strlen($cadende) % 2 == 0) {
            $cantidad = strlen($cadende) + 11;
        } else {
            $cantidad = strlen($cadende) + 10;
        }

        strlen($cadende) % 2 == 0 ? $cantidad = strlen($cadende) + strlen($cadende) - 5 : $cantidad = strlen($cadende) + strlen($cadende) - 4;
        echo "<br>" . str_pad($cadende, strlen($cadende) + $cantidad, "*", STR_PAD_BOTH);
        strlen($cadapre) % 2 == 0 ? $cantidad = strlen($cadapre) + strlen($cadapre) - 5 : $cantidad = strlen($cadapre) + strlen($cadapre) - 4;
        echo "<br>" . str_pad($cadapre, strlen($cadende) + $cantidad, "*", STR_PAD_BOTH);
        /* b) Dadas las cadenas "aprender" y "aprende",
         *  mostrar por pantalla si sus tres primeros caracteres 
         * son iguales o no usando una función de comparación de subcadenas.
         */
        strcmp(substr($cadende, 0, 3), substr($cadapre, 0, 3)) == 0 ? print_r("<br/>Los tres primeros caracteres son iguales") : print_r("<br/>Los tress primeros caracteres no son iguales");

        /* c) Dada la cadena  transformar la cadena a minúsculas y rellenarla
         *  a derecha e izquierda con una longitud de asteriscos igual a la mitad de su longitud si es par ó 
         * igual a la mitad de (su longitud más 1) si es impar. Mostrar por pantalla la cadena en minúsculas 
         * y con el relleno indicado.
         */
        $cadC = "ApRendEr A proGraMar.cOm";
        strlen($cadC) % 2 == 0 ? $cantidad = strlen($cadC)  +  (strlen($cadC) / 18)-1 : $cantidad = strlen($cadC)  - (strlen($cadC) / 18 ) +1;
        echo "<br>" .     strtolower(str_pad($cadC, strlen($cadC) + $cantidad, "*", STR_PAD_BOTH));
        ?>
    </body>
</html>
