<!DOCTYPE html>
<!-- Indica que usamos HTML5 -->

<html lang="es">

<head>
    <meta charset="UTF-8">

    <!-- Título de la página -->
    <title>Resultado - Laboratorio #1</title>

    <!-- Conecta el PHP con el CSS -->
    <link rel="stylesheet" href="A_P.css">
</head>

<body>

<div class="contenedor">

    <h2>Resultado</h2>

    <?php

    // Recibe el radio del formulario
    $radio = (float)$_POST['radio'];

    // Recibe la operación seleccionada
    $operacion = $_POST['operacion'];

    // Calcula el área
    $area = M_PI * pow($radio, 2);

    // Calcula el perímetro
    $perimetro = 2 * M_PI * $radio;

    ?>

    <!-- Caja donde se muestran los resultados -->
    <div class="resultado">

        <h3>Resultados de la circunferencia</h3>

        <!-- Muestra el radio -->
        <p>
            Radio:
            <strong><?php echo $radio; ?></strong>
        </p>

        <?php

        // Si seleccionó Área, muestra solamente el área
        if ($operacion == "area") {

            echo "<p>Área: <strong>"
                . round($area, 2)
                . "</strong></p>";

        // Si seleccionó Perímetro, muestra solamente el perímetro
        } elseif ($operacion == "perimetro") {

            echo "<p>Perímetro: <strong>"
                . round($perimetro, 2)
                . "</strong></p>";

        // Si seleccionó ambos, muestra los dos resultados
        } elseif ($operacion == "ambos") {

            echo "<p>Área: <strong>"
                . round($area, 2)
                . "</strong></p>";

            echo "<p>Perímetro: <strong>"
                . round($perimetro, 2)
                . "</strong></p>";
        }

        ?>

    </div>

    <br>

    <!-- Botón para regresar al formulario -->
    <a href="Ar_peri.html">
        <button>Volver</button>
    </a>

</div>

</body>
</html>