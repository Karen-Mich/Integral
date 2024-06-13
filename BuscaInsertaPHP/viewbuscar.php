//viewbuscar.php
<form action="" method="POST">
    <input type="text" name="cedu">
    <input type="submit" value="Buscar" name="buscar">
</form>
<br>
<?php

        include_once ('controller.php');

        $controller = new Controller;
        $controller->enviarFormulario();
    ?>