<!-- adivina.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego: Adivina el Número</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf6e3;
            text-align: center;
            padding: 50px;
        }
        form {
            background-color: #fff;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 80px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
        }
        .mensaje {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .acierto {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<h2>🎲 Adivina un número del 1 al 5</h2>

<form method="POST">
    <input type="number" name="numero_usuario" min="1" max="5" required>
    <br>
    <input type="submit" value="Adivinar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroUsuario = intval($_POST["numero_usuario"]);
    $numeroSecreto = rand(1, 5); // Número aleatorio entre 1 y 5

    echo "<div class='mensaje'>";
    if ($numeroUsuario == $numeroSecreto) {
        echo "<p class='acierto'>🎉 ¡Wow, adivinaste! El número era $numeroSecreto.</p>";
    } else {
        echo "<p class='error'>😢 ¡Sigue intentando! El número correcto era $numeroSecreto.</p>";
    }
    echo "</div>";
}
?>

</body>
</html>
