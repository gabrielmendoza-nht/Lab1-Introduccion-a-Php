<form method="POST">
    <input type="number" step="any" name="num1" placeholder="Primer número">
    <input type="number" step="any" name="num2" placeholder="Segundo número">

    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="redondear">Redondear</option>
    </select>

    <button type="submit">Calcular</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    if ($operacion == "sumar") {
        $resultado = $num1 + $num2;
        echo "El resultado de la suma es: $resultado";
    }

    elseif ($operacion == "restar") {
        $resultado = $num1 - $num2;
        echo "El resultado de la resta es: $resultado";
    }

    elseif ($operacion == "multiplicar") {
        $resultado = $num1 * $num2;
        echo "El resultado de la multiplicación es: $resultado";
    }

    elseif ($operacion == "redondear") {
        $resultado = round($num1);
        echo "El número redondeado es: $resultado";
    }
}
?>