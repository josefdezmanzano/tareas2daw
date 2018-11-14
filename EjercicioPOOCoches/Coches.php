<!DOCTYPE html>
<!--
1.- Crearemos la clase Coches con los atributos siguientes:

private $marca;

private $modelo;

private $matricula; (Formato: nnnn-lll es decir 1234-bcb )

private $kms;

private $precio;

private static $descuento=5;

static cant=0;



1.a.-Crearemos un constructor que reciba $marca, $modelo, $matricula, $klms, $precio , 
cantidadad se irá incrementando con cada coche que se cree.


1.b.- Con expresiones regulares y un metodo validaremos que la matricula sea 1244-HHH. 
Es decir 4 numeros enteros, un guión y tres letras NO vocales, con otro método comprobaremos 
que los klms sean mayores que cero y con otro que el precio sea mayor que cero. 
Si no se cumple esto NO se crea el coche.


1.c.- Crear getters y setters


1.d.- Crear el método mágico __toString() que me muestre todos los datos de un coche.


1.e.- Crear un array de 10 coches, inícializalos y muéstralos recorriendo el array


1.f.- Crearemos la clase CochesVendidos igual que la anterior pero con un atributo
fecha_venta y cambiando $precio por $precio_venta (que será el precio aplicado el descuento)


1.g.- Crearemos un método venderCoche en Coches, le pasaremos como prametro una matrícula.
Si existe daremos de baja el coche (es decir lo destruiremos) decrementaremos contador y 
lo daremos de alta en cochesVendidos, es decir nus crearemos un objeto con los datos del 
coche vendido más la fecha de venta.


1.h.- Crearemos un método verDatos y mostraremos todos los coches vendidos y el total del 
dinero ganado



-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class Coches {

            private $marca;
            private $modelo;
            private $matricula; //Formato nnnn-lll es decir 1234-bcb
            private $kms;
            private $precio;
            private static $descuento = 5;
            static $cant = 0;

            function __construct($marca, $modelo, $matricula, $kms, $precio) {
                $this->marca = $marca;
                $this->modelo = $modelo;
                $this->matricula = $matricula;
                $this->kms = $kms;
                $this->precio = $precio;
                self::$cant++;
            }

            function __destruct() {
                self::$cant--;
            }

            function validaMatricula() {
                if (!preg_match('/^[0-9][0-9][0-9][0-9]-[^AEIOUaeiou]{3}/', $this->matricula)) {

                    return false; //destruir objeto
                }
                return true;
            }

            function validaKms() {
                if ($this->kms < 0) {
                    return false; //destruir objeto
                }
                return true;
            }

            function validaPrecio() {
                if ($this->precio < 0) {
                    return false; //destruir objeto
                }
                return true;
            }

            /*
              1.g.- Crearemos un método venderCoche en Coches, le pasaremos como prametro una matrícula.
              Si existe daremos de baja el coche (es decir lo destruiremos) decrementaremos contador y
              lo daremos de alta en cochesVendidos, es decir nus crearemos un objeto con los datos del
              coche vendido más la fecha de venta.
             */

            function venderCoches($matricula) {
                //$arrayCoches = $GLOBALS["arrayDeCoches"];
                //$arrayDeCochesVendidos = $GLOBALS["arrayDeCochesVendidos"];
                global $arrayDeCoches, $arrayDeCochesVendidos, $forrandonos;

                foreach ($arrayDeCoches as $key => $value) {
                    if (!is_null($value)) {
                        if ($matricula === $value->matricula) {
                            $fechaActual = date("Y-m-d H:i:s");
                            $precioConDescuento = $value->precio - ($value->precio * 0.05);
                            $forrandonos = $forrandonos + $precioConDescuento;
                            $arrayDeCochesVendidos[] = new CochesVendidos($value->marca, $value->modelo, $value->matricula, $value->kms, $precioConDescuento, $fechaActual);
                            $value::$cant--;
                            unset($arrayDeCoches[$key]); //esta es la forma correcta
                            //print_r($arrayDeCochesVendidos);
                        }
                    }
                }
            }

            function __toString() {
                return "<br>Marca: " . $this->marca . " Modelo: " . $this->modelo . " Matricula: " . $this->matricula . " Precio: " . $this->precio . " Kms: " . $this->kms;
            }

            function getMarca() {
                return $this->marca;
            }

            function getModelo() {
                return $this->modelo;
            }

            function getMatricula() {
                return $this->matricula;
            }

            function getKms() {
                return $this->kms;
            }

            function getPrecio() {
                return $this->precio;
            }

            static function getDescuento() {
                return self::$descuento;
            }

            static function getCant() {
                return self::$cant;
            }

            function setMarca($marca) {
                $this->marca = $marca;
            }

            function setModelo($modelo) {
                $this->modelo = $modelo;
            }

            function setMatricula($matricula) {
                $this->matricula = $matricula;
            }

            function setKms($kms) {
                $this->kms = $kms;
            }

            function setPrecio($precio) {
                $this->precio = $precio;
            }

            static function setDescuento($descuento) {
                self::$descuento = $descuento;
            }

            static function setCant($cant) {
                self::$cant = $cant;
            }

        }

/////////----------------------CLASE CochesVendidos-----------------------//////////////7

        class CochesVendidos {

            private $marca;
            private $modelo;
            private $matricula; //Formato nnnn-lll es decir 1234-bcb
            private $kms;
            private $precio_venta;
            private static $descuento = 5;
            static $cant = 0;
            private $fecha_venta;

            function __construct($marca, $modelo, $matricula, $kms, $precio_venta, $fecha_venta) {
                $this->marca = $marca;
                $this->modelo = $modelo;
                $this->matricula = $matricula;
                $this->kms = $kms;
                $this->precio_venta = $precio_venta;
                $this->fecha_venta = $fecha_venta;
                self::$cant++;
            }

            function __destruct() {
                self::$cant--;
            }

            function verDatos() {
                global $arrayDeCochesVendidos, $forrandonos;
                foreach ($arrayDeCochesVendidos as $value) {
                    echo '<br><center>El coche ' . $value->marca . " " . $value->modelo . " con matricula " . $value->matricula . " se vendio en la fecha " . $value->fecha_venta . " por " . $value->precio_venta . "€<center>";
                }
                echo "<br><hr><center>Cantidad total ganada: $forrandonos</center><br>";
            }

        }

        $forrandonos = 0;
        $arrayDeCoches = array(
            $c1 = new Coches('ople', 'corsa', 'llasf', 100, 1000), //no valido
            $c2 = new Coches('renault', 'megan', '1234-NNN', 100, 12000), //valido
            $c3 = new Coches("citroen", "picaso", "1111-NHk", 2000, 3000), //Valido
            $c4 = new Coches("fiat", "punto", "2222-KGB", -12000, 200), //No Valido
            $c5 = new Coches("citroen", "sara", "3333-PFJ", 999999, 600), //Valido
            $c6 = new Coches("porche", "carrera s", "4444-KGF", 5000, 500000), //Valido
            $c7 = new Coches("nissan", "370z", "5555-JJJ", 18000, 45000), //Valido
            $c8 = new Coches("mustang", "gt", "6666-HTD", 20000, 300000), //Valido
            $c9 = new Coches("nissan", "Juke", "7777-VVV", 57000, 14000), //Valido
            $c10 = new Coches("chevrolet", "camaro", "8888-UUU", 137000, 90000), //Valido
        );

        $arrayDeCochesVendidos = array();

        echo "Array de coches:";
        foreach ($arrayDeCoches as $value) {
            echo $value;
        }

        for ($i = 0; $i < count($arrayDeCoches); $i++) {
            if (!$arrayDeCoches[$i]->validaMatricula() || !$arrayDeCoches[$i]->validaKms() || !$arrayDeCoches[$i]->validaPrecio()) {
                echo "<br><br>Objeto no valido: Se elmino el objeto con matricula " . $arrayDeCoches[$i]->getMatricula();
                echo $arrayDeCoches[$i] . "<br>";
                $arrayDeCoches[$i] = NULL;
                //unset($arrayDeCoches[$i]);
            } else {
                echo "<br>Objeto creado correctamente";
                echo $arrayDeCoches[$i] . "<br>";
            }
        }
        echo '<br><hr><br>';

        //$cv = new CochesVendidos("chevrolet", "camaro", "8888-UUU", 300, 1000, 1, "12/12/18");
        Coches::venderCoches("4444-KGF");
        Coches::venderCoches("1111-NHk");
        echo '<br><hr><center>COCHES VENDIDOS</center><br>';
        CochesVendidos::verdatos();
        ?>
    </body>
</html>