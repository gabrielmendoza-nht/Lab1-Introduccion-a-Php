<?php

$Nombre = $_REQUEST['nombre'];
$Edad = $_POST["edad"];

?>

<html>

<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="ed.css">
</head>

<body>

    <div class="resultado">

        <?php

        echo "<h2>Resultado</h2>";

        echo "Su nombre es: " . $Nombre . "<br><br>";

        if (isset($Edad) and $Edad >= 18) {
            echo "Usted puede votar en las próximas elecciones 2028";
        } else {
            echo "Usted no es mayor de edad";
        }

        ?>

    </div>

</body>

</html>
