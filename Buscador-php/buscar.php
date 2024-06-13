<?php
    include_once('conexion.php');

    if(isset($_POST['cedula'])){
        $buscar = $_POST['cedula'];

        $select = "SELECT * FROM estudiante WHERE cedula = '$buscar'";
        
        $stmt = $conn->prepare($select);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<br>Cedula: " . $row['cedula'] . "<br>";
                echo "Nombre: " . $row['nombre'] . "<br>";
                echo "Apellido: " . $row['apellido'] . "<br>";
                echo "Direccion: " . $row['direccion'] . "<br>";
                echo "Telefono: " . $row['telefono'] . "<br>";
            }
        } else {
            echo "No se encontraron resultados.";
        }
    }
    else{
        echo "Esperando busqueda...";
    }
?>