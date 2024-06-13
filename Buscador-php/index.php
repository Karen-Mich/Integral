//index.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="cedula" required>
        <button type="submit">BUSCAR</button>
    </form>
    <?php
        include 'buscar.php';
    ?>
</body>

</html>