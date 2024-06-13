//controller.php
<?php
    class Controller
    {
        function enviarFormulario()
        {
            include_once 'model.php';

            if (isset($_POST['buscar']))
            {
                $cedula = $_POST['cedu'];

                $model = new Model();
                $model->getStudentBy($cedula);
            }
        }

        function enviarFormularioToInsert()
        {
            include_once 'model.php';
            if (isset($_POST['insertar']))
            {
                $ced = $_POST['ced'];
                $nom = $_POST['nom'];
                $ape = $_POST['ape'];
                $dir = $_POST['dir'];
                $tel = $_POST['tel'];

                $model = new Model;
                $model->saveStudents($ced, $nom, $ape, $dir, $tel);
            }
        }
    }