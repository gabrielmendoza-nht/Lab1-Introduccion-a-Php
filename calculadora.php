<html>

<head>
    <title>Formulario de operaciones</title>
</head>

<body>

    <form method="post" action="calc.php">

        Ingrese el primer número:
        <input type="number" step="any" name="numero1" id="numero1">

        <br>
        <br>

        Ingrese el segundo número:
        <input type="number" step="any" name="numero2" id="numero2">

        <br>
        <br>

        Seleccione la operación:
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="redondear">Redondear</option>
        </select>

        <br>
        <br>

        <input type="submit" value="Calcular">

    </form>

</body>

</html>

