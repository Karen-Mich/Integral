//controllers/controller.php
<?php
    require_once '../models/model.php';

    class CalculadoraController {
        public function sumar($num1, $num2) {
            $calculadoraModel = new CalculadoraModel();
            return $calculadoraModel->sumar($num1, $num2);
        }
    }
?>
