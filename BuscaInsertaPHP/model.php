//model.php
<?php
    class Model
    {
        function getStudentBy($cedula)
        {
            include_once 'conexion.php';

            $sql = "SELECT `cedula`, `nombre`, `apellido`, `direccion`, `telefono` FROM `estudiante` WHERE cedula LIKE ?";

            $stmt = $conn->prepare($sql);
            $stmt->execute(["$cedula%"]);

            $resultado = $stmt->get_result();

            if ($resultado->num_rows > 0 )
            {
                echo "
                <table>
                    <thead>
                        <tr>
                            <td>CEDULA</td>
                            <td>NOMBRE</td>
                            <td>APELLIDO</td>
                            <td>DIRECCION</td>
                            <td>TELEFONO</td>
                        </tr>
                    </thead>
                    <tbody>
                ";

                while ($row = $resultado->fetch_assoc())
                {
                    echo 
                    "
                    <tr>
                    <td>".$row['cedula']."</td>
                    <td>".$row['nombre']."</td>
                    <td>".$row['apellido']."</td>
                    <td>".$row['direccion']."</td>
                    <td>".$row['telefono']."</td>
                    </tr>
                    ";
                }
                echo "
                    </tbody>
                </table>
                ";
            }
        }

        function saveStudents($ced, $nom, $ape, $dir, $tel)
        {
            include_once 'conexion.php';

            
            try {
                $sql = "INSERT INTO estudiante (cedula, nombre, apellido, direccion, telefono) VALUES(?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$ced, $nom, $ape, $dir, $tel]);
            } catch (PDOException $e) {
                echo "ERROR AL GUARDAR A LA BASE DE DATOS    " . $e;
            }
        }
    }