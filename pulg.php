<?php

// Comprueba si se recibió un número
if (isset($_POST['numero'])) {

    // Guarda el número recibido
    $numero = $_POST['numero'];

    // Convierte pulgadas a centímetros
    $centi = $numero * 2.54;

    // Muestra el resultado
    echo "$numero pulgadas son: $centi centímetros.";

} else {

    // Mensaje si no se recibió ningún número
    echo "No se ha guardado ningún número.";
}

?>

<!-- Conecta el archivo CSS -->
<link rel="stylesheet" href="pulgesti.css">
