<form method="POST">
    <input type="number" name="pulgada">
    <button type="submit">Conversion</button>
</form>

<?php
$pulgada = $_POST["pulgada"];
$centimetros = $pulgada * 2.54;
echo " La conversion de $pulgada pulgadas es: $centimetros centimetros";
?>