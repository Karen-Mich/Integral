//models/guardar.php
<?php
    include "conexion.php";
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res = $num1+$num2;

    $sql = "INSERT INTO suma values('$num1','$num2','$res')";
    
    if($conn->query($sql)==true){
        echo json_encode("Se guardo");
    }else{
        echo json_encode("ERROR");
    }
    }
?>