<!-- mi_tarjeta.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tarjeta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 50px;
        }
        .tarjeta {
            background-color: #fff;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        .edad {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<?php
$nombre = "Luis Jose";
$apellido = "Victorino Avila";
$edad = 24;
$carrera = "Desarrollo de Software";
$universidad = "Instituto Tecnologico Las Americas";

echo "<div class='tarjeta'>";
echo "<h2>$nombre $apellido</h2>";
echo "<p>Edad: $edad</p>";
echo "<p>Carrera: $carrera</p>";
echo "<p>Universidad: $universidad</p>";

if ($edad >= 18) {
    echo "<p class='edad'>Eres mayor de edad</p>";
} else {
    echo "<p class='edad'>Eres menor de edad</p>";
}
echo "</div>";
?>

</body>
</html>
