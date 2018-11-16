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
        function sumar5Numeros($num1, $num2, $num3, $num4, $num5) {
            if (is_int($num1) && is_int($num2) && is_int($num3) && is_int($num4) && is_int($num5)) {
                echo "El resultado de sumar los numeros $num1 +  $num2 + $num3 + $num4 + $num5 = " . ($num1 + $num2 + $num3 + $num4 + $num5);
            } else {
                echo "Error: Solo numeros enteros";
            }
        }

        sumar5Numeros(1, 2, 3, 4, 5);

        //b)
        function sumar5NumerosConReturn($num1, $num2, $num3, $num4, $num5) {
            if (is_int($num1) && is_int($num2) && is_int($num3) && is_int($num4) && is_int($num5)) {
                return ($num1 + $num2 + $num3 + $num4 + $num5);
            } else {
                return -1;
            }
        }

        $tmp = sumar5NumerosConReturn(2, 5, 1, 8, 10);
        echo "<br>El resultado es: $tmp";

        //c)
        function volumenCilindro($radio, $altura) {
            return pi() * $radio * $radio * $altura;
        }

        echo "<br>El volumen del cilindro es: " . volumenCilindro(10, 20);
        //d)
        $num1 = 10;
        $num2 = 10;

        function Multiplicaion() {
            return $GLOBALS['num1'] * $GLOBALS['num2'];
        }

        echo "<br>El resultado de la multiplicacion del ejercicio d es:" . Multiplicaion();
        
        ?>
    </body>
</html>
