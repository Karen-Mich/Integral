//index.php
<?php
require_once 'FactorialModel.php';
require_once 'FactorialController.php';

// Conexión a la base de datos (reemplaza con tus propios datos)
$db = new mysqli('localhost', 'root', '', 'factorial');

// Verifica la conexión
if ($db->connect_error) {
    die("Error de conexión a la base de datos: " . $db->connect_error);
}

$model = new FactorialModel($db);
$controller = new FactorialController($model);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $resultado = $controller->calcularFactorial($numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
</head>
<body>

<h2>Calculadora de Factorial</h2>

<form method="post">
    <label for="numero">Ingrese un número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Calcular Factorial</button>
</form>

<?php if (isset($resultado)) : ?>
    <p>El factorial de <?php echo $numero; ?> es: <?php echo $resultado; ?></p>
<?php endif; ?>

</body>
</html>
