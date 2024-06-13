//viewinsertar.php
<form action="" method="POST">
    Cedula<input type="text" name="ced"><br>
    Nombre<input type="text" name="nom"><br>
    Apellido<input type="text" name="ape"><br>
    Direccion<input type="text" name="dir"><br>
    Telefono<input type="text" name="tel">
    <input type="submit" value="Insertar" name="insertar">
</form>
<br>
<?php

        include_once ('controller.php');

        $controller = new Controller;
        $controller->enviarFormularioToInsert();
    ?>