<!-- calculadora.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef;
            text-align: center;
            padding: 50px;
        }
        form {
            background-color: #fff;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        input, select {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
        .resultado {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<h2>Calculadora PHP</h2>

<form method="POST">
    <input type="number" name="num1" placeholder="Número 1" required>
    <input type="number" name="num2" placeholder="Número 2" required>
    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $operacion = $_POST["operacion"];
    $resultado = "";

    switch ($operacion) {
        case "sumar":
            $resultado = $num1 + $num2;
            break;
        case "restar":
            $resultado = $num1 - $num2;
            break;
        case "multiplicar":
            $resultado = $num1 * $num2;
            break;
        case "dividir":
            if ($num2 == 0) {
                echo "<p class='resultado error'>❌ Error: No se puede dividir entre cero.</p>";
                exit;
            } else {
                $resultado = $num1 / $num2;
            }
            break;
    }

    echo "<p class='resultado'>Resultado: $resultado</p>";
}
?>
</body>
</html>
