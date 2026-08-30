<?php
$numero = $_REQUEST['numero'];

if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $centi = $numero * 2.54;
}   

else{
    $numero = "No se ha guardado ningun numero";
}

echo "$numero pulgadas son: $centi centimetros.";

?>
<link rel="stylesheet" href="pulgesti.css">
