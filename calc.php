<?php
$primerNumero = $_POST["numero1"];
$segundoNumero = $_POST["numero2"];
$tipoOperacion = $_POST["operacion"];

if ($tipoOperacion == "sumar") {

    $resultado = $primerNumero + $segundoNumero;
    echo "El resultado de la suma es: " . $resultado;

}
elseif ($tipoOperacion == "restar") {

    $resultado = $primerNumero - $segundoNumero;
    echo "El resultado de la resta es: " . $resultado;

}
elseif ($tipoOperacion == "multiplicar") {

    $resultado = $primerNumero * $segundoNumero;
    echo "El resultado de la multiplicación es: " . $resultado;

}
elseif ($tipoOperacion == "redondear") {
    $resultado = round($primerNumero);
    echo "El número redondeado es: " . $resultado;

}

?>

