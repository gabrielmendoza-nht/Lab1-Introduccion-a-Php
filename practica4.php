<?php
echo "Primer ejemplo: Suma<br>";
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma<br><br>";

echo "Segundo ejemplo: Resta<br>";
$num3 = 10;
$num4 = 3;
$resta = $num3 - $num4;
echo "La resta de $num3 y $num4 es: $resta<br><br>";

echo "Tercer ejemplo: Multiplicacion<br>";
$num5 = 5;
$num6 = 6;
$multiplicacion = $num5 * $num6;
echo "La multiplicacion de $num5 y $num6 es: $multiplicacion<br><br>";

echo "Cuarto ejemplo: Division<br>";
$num7 = 20;
$num8 = 4;
$division = $num7 / $num8;
echo "La division de $num7 y $num8 es: $division<br><br>";

echo "Quinto ejemplo: Potencia<br>";
$num9 = 2;
$num10 = 3;
$potencia = pow($num9, $num10);
echo "La potencia de $num9 elevado a $num10 es: $potencia<br><br>";

echo "Sexto ejemplo: Modulo<br>";
$num11 = 15;
$num12 = 4;
$modulo = $num11 % $num12;
echo "El modulo de $num11 entre $num12 es: $modulo<br><br>";

echo "Septimo ejemplo: Redondeo<br>";
$numero = 4.6;
$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "El numero sin redondear es: $numero<br>";
echo "El numero redondeado es: $redondeado<br>";
echo "El numero redondeado hacia arriba es: $redondeado_arriba<br>";
echo "El numero redondeado hacia abajo es: $redondeado_abajo<br><br>";

echo "Octavo ejemplo: Signo en Modulo<br>";
echo (5 % 3)."<br>";    //muestra 2
echo (5 % -3) ."<br>";    //muestra 2
echo (-5 % 3)."<br>";    //muestra -2
echo (-5 % -3)."<br><br>";    //muestra -2

echo "Noveno ejemplo: Valor absoluto<br>";
$num = 7;
$valor_absoluto = abs($num);
echo "El valor absoluto de $num es: $valor_absoluto";
?>
//Practica 3
<?php
$author1= "John Doe";
$author2= "Max Mustermann";
echo"<h1>Hello World </h1>
<p>this dynamic web page was created by $author1 and $author2.</p>";
?>


