<!DOCTYPE html>
<!-- Indica que usamos HTML5 -->

<html lang="en">

<head>

    <!-- Permite caracteres especiales -->
    <meta charset="UTF-8">

    <!-- Adaptación a diferentes pantallas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título de la página -->
    <title>Convertir pulgadas a centímetros</title>

    <!-- Conecta con el CSS -->
    <link rel="stylesheet" href="pulgesti.css">

</head>

<body class="resultado-pagina">

    <!-- Formulario para convertir pulgadas -->
    <form action="pulg.php" method="post">

        <!-- Instrucción para el usuario -->
        Ingresa las pulgadas para convertir a cm:

        <!-- Campo para introducir las pulgadas -->
        <input type="text" name="numero">

        <br><br>

        <!-- Envía el número al archivo PHP -->
        <input type="submit" value="Convertir">

    </form>

</body>
</html>

