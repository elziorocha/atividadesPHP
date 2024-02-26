<?php

class Calculadora {
    public static function soma($num1, $num2) {
        return $num1 + $num2;
    }
}

$resultado = Calculadora::soma(4, 6);
echo "Resultado: " . $resultado;

?>
