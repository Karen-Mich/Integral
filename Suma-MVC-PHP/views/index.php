<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>

//views/index.php
<body>
    <h1>SUMA</h1>

    <form action="index.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1">

        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2">

        <button type="submit" name="sumar">SUMAR</button>
    </form>
</body>
<?php
    include('../models/guardar.php');
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        require_once '../controllers/controller.php';

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $calculadoraController = new CalculadoraController();
        $resultado = $calculadoraController->sumar($num1, $num2);

        echo "<p>Resultado de la suma: $resultado</p>";
    }
    else{
        echo "Esperando suma...";
    }
?>

</html>
